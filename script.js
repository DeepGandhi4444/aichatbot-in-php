// function genarateResponse() {
//     const userInput = document.getElementById('text').value;

//     if (userInput === '') {
//         alert('Please enter a message.');
//         return;
//     }

//     // Send a POST request to the PHP backend
//     fetch('response.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({ message: userInput }) // Pass user input to the backend
//     })
//     .then(response => response.text()) // Fetch the response as text (or you can use .json())
//     .then(data => {
//         // Display the chatbot's response in the HTML
//         document.getElementById('response').innerHTML = data;
//     })
//     .catch(error => {
//         console.error('Error:', error);
//         document.getElementById('response').innerText = 'An error occurred. Please try again.';
//     });
// }


document.getElementById('chat-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    const userInput = document.getElementById('text').value;

    // Add user's message to the chat
    const userMessage = `<div class="message user">
                            <div class="avatar"></div>
                            <div class="message-content">${userInput}</div>
                         </div>`;
    document.querySelector('.chat-messages').insertAdjacentHTML('beforeend', userMessage);

    // Clear input field
    document.getElementById('text').value = '';

    // Prepare data for POST request
    const formData = new FormData();
    formData.append('text', userInput);

    // Send POST request to PHP script
    const response = await fetch('res.php', {
        method: 'POST',
        body: formData
    });

    // Get and display the response from the server
    const result = await response.text();
    console.log(result);
        const botMessage = `<div class="message">
                            <div class="avatar"></div>
                            <div class="message-content">${result}</div>
                        </div>`;
    document.querySelector('.chat-messages').insertAdjacentHTML('beforeend', botMessage);

    // Scroll to the latest message
    document.querySelector('.chat-messages').scrollTop = document.querySelector('.chat-messages').scrollHeight;
});
