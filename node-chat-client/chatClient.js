const chat = require('@botpress/chat');
const express = require('express');
const app = express();
const port = 3000; // Usa un puerto que esté disponible

app.use(express.json());

app.post('/send', async (req, res) => {
  const messageText = req.body.message;

  const webhookId = 'ca97e80a-1910-45fb-8819-ac44fb79fb3b';


  const apiUrl = `https://chat.botpress.cloud/${webhookId}`;

  try {
    const client = await chat.Client.connect({ apiUrl });
    const { conversation } = await client.createConversation({});
    await client.createMessage({
      conversationId: conversation.id,
      payload: {
        type: 'text',
        text: messageText,
      },
    });

    // Función para intentar obtener la respuesta del bot con reintentos
    const MAX_RETRIES = 5; // Número máximo de reintentos
    const DELAY_BETWEEN_RETRIES = 2000; // Tiempo entre reintentos en milisegundos

    async function waitForBotResponse(client, conversationId, retries = 0) {
      if (retries >= MAX_RETRIES) {
        throw new Error("No response from bot after multiple retries.");
      }

      const { messages } = await client.listConversationMessages({
        id: conversationId,
      });

      const botResponse = messages.find(message => message.userId !== client.user.id);

      if (botResponse) {
        return botResponse.payload;
      }

      // Si no hay respuesta, esperar un poco antes de reintentar
      await new Promise(resolve => setTimeout(resolve, DELAY_BETWEEN_RETRIES));
      return waitForBotResponse(client, conversationId, retries + 1);
    }

    try {
      // Intentar obtener la respuesta del bot usando la lógica de reintento
      const botResponse = await waitForBotResponse(client, conversation.id);
      res.json({ response: botResponse });
    } catch (error) {
      res.json({ response: "No response from bot." });
    }

  } catch (error) {
    res.status(500).json({ error: error.message });
  }
});

app.listen(port, () => {
  console.log(`Node.js server listening at http://localhost:${port}`);
});
