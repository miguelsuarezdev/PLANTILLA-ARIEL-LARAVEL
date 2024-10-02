    const chat = require('@botpress/chat');
    const express = require('express');
    const app = express();
    const port = 3000; // Usa un puerto que esté disponible

    app.use(express.json());

    app.post('/send', async (req, res) => {
    const messageText = req.body.message;

    const webhookId = '410da114-919d-4cf2-ae69-2f60b75ad168';


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

        await new Promise((resolve) => setTimeout(resolve, 5000));

        const { messages } = await client.listConversationMessages({
        id: conversation.id,
        });

        const botResponse = messages.find(message => message.userId !== client.user.id);

        if (botResponse) {
        res.json({ response: botResponse.payload });
        } else {
        res.json({ response: "No response from bot." });
        }
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
    });

    app.listen(port, () => {
    console.log(`Node.js server listening at http://localhost:${port}`);
    });
