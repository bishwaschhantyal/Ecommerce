<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chatbot UI</title>
  <link rel="stylesheet" href="bot.css" />
</head>

<body>
  <div class="chatbot">
    <div class="chat-header">
      <span>Chatbot</span>
      <span class="close-btn">×</span>
    </div>
    <div class="chat-body">
      <div class="bot-message">
        I'm here to help. Ask me anything.
      </div>
    </div>
    <div class="chat-footer">
      <input type="text" placeholder="Type a message..." />
      <button class="send-btn">✈️</button>
    </div>
  </div>

  <div class="chat-icon">
    💬
  </div>

  <script>
    const chatbot = document.querySelector('.chatbot');
    const chatIcon = document.querySelector('.chat-icon');
    const closeBtn = document.querySelector('.close-btn');
    const sendBtn = document.querySelector('.send-btn');
    const chatBody = document.querySelector('.chat-body');
    const inputField = document.querySelector('.chat-footer input');

    chatbot.style.display = 'none';

    chatIcon.addEventListener('click', () => {
      chatbot.style.display = 'block';
      chatIcon.style.display = 'none';
    });

    closeBtn.addEventListener('click', () => {
      chatbot.style.display = 'none';
      chatIcon.style.display = 'block';
    });

    sendBtn.addEventListener('click', sendMessage);
    inputField.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') sendMessage();
    });

    function sendMessage() {
      const message = inputField.value.trim();
      if (message === '') return;

      // Display user message
      const userMsg = document.createElement('div');
      userMsg.textContent = message;
      userMsg.classList.add('user-message');
      chatBody.appendChild(userMsg);

      inputField.value = '';
      chatBody.scrollTop = chatBody.scrollHeight;

      // Simulate bot response with logic
      setTimeout(() => {
        const botMsg = document.createElement('div');
        botMsg.classList.add('bot-message');

        const lowerMsg = message.toLowerCase();

        // Basic keyword matching
        if (["hi", "hello", "hey"].includes(lowerMsg)) {
          botMsg.textContent = "Nice to meet you!";
        } else if (lowerMsg.includes("how are you")) {
          botMsg.textContent = "I'm just a bot, but I'm doing great! 😊";
        } else if (lowerMsg.includes("help")) {
          botMsg.textContent = "Sure! I'm here to help. What do you need?";
        } else {
          botMsg.textContent = "I'm just a demo bot 🤖";
        }

        chatBody.appendChild(botMsg);
        chatBody.scrollTop = chatBody.scrollHeight;
      }, 500);
    }
  </script>
</body>

</html>