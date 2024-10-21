const chat = require("@botpress/chat");
const express = require("express");
const app = express();
const port = 3000; // Usa un puerto que esté disponible

app.use(express.json());

app.post("/send", async (req, res) => {
    const messageText = req.body.message;

    const webhookId = "4d6c0ee0-3443-4965-934a-ea6b93cb6423";
    const apiUrl = `https://chat.botpress.cloud/${webhookId}`;

    try {
        const client = await chat.Client.connect({ apiUrl });
        const { conversation } = await client.createConversation({});

        await client.createMessage({
            conversationId: conversation.id,
            payload: {
                type: "text",
                text: messageText,
            },
        });

        const MAX_RETRIES = 5; // Aumentar el número de reintentos
        const DELAY_BETWEEN_RETRIES = 3000; // Aumentar el tiempo de espera entre cada intento a 3 segundos

        async function waitForBotResponses(
            client,
            conversationId,
            retries = 0
        ) {
            if (retries >= MAX_RETRIES) {
                throw new Error("No response from bot after multiple retries.");
            }

            const { messages } = await client.listConversationMessages({
                id: conversationId,
            });

            // Filtra los mensajes que provienen del bot
            const botMessages = messages.filter(
                (message) => message.userId !== client.user.id
            );

            // Agregar console.log aquí para ver qué mensajes se han recolectado hasta ahora
            console.log(
                "Mensajes recolectados hasta ahora: ",
                botMessages.map((msg) => msg.payload.text)
            );

            // Solo continúa si tenemos más de un mensaje
            if (botMessages.length > 1) {
                console.log("Mensajes del bot recolectados: ", botMessages);
                return botMessages.map((msg) => msg.payload.text); // Devuelve los textos de los mensajes
            }

            // Espera y reintenta si no se han recibido todos los mensajes esperados
            await new Promise((resolve) =>
                setTimeout(resolve, DELAY_BETWEEN_RETRIES)
            );
            return waitForBotResponses(client, conversationId, retries + 1);
        }

        // Intentar obtener las respuestas del bot
        const botResponses = await waitForBotResponses(client, conversation.id);

        // Enviar las respuestas al cliente Laravel
        if (botResponses.length > 0) {
            res.json({ response: botResponses });
        } else {
            res.json({ response: ["No response from bot."] });
        }
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
});

app.listen(port, () => {
    console.log(`Node.js server listening at http://localhost:${port}`);
});
