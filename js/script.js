
// Função para adicionar mensagens ao feed
function addMessage(message) {
    const feed = document.getElementById('feed');
    const messageElement = document.createElement('div');
    messageElement.textContent = message;
    feed.appendChild(messageElement);
}

// Evento de pressionar Enter na caixa de mensagens
document.getElementById('messageInput').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value.trim();

        if (message !== '') {
            addMessage(message);
            messageInput.value = ''; // Limpa a caixa de mensagens
        }
    }
});