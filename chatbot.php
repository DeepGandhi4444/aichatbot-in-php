<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple ChatGPT UI</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }
        .chat-container {
            display: flex;
            height: 100%;
        }
        .sidebar {
            width: 250px;
            background-color: #f0f0f0;
            padding: 20px;
            border-right: 1px solid #ccc;
            display: flex;
            flex-direction: column;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .new-chat-btn {
            background-color: #3a7bc8;
            color: white;
            border: none;
            padding: 10px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 20px;
            cursor: pointer;
        }
        .chat-history {
            overflow-y: auto;
        }
        .chat-history a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }
        .chat-history a:hover {
            background-color: #e0e0e0;
        }
        .main-chat {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .chat-header {
            background-color: #f9f9f9;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .model-select {
            padding: 5px;
        }
        .chat-messages {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .message {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }
        .message.user {
            justify-content: flex-end;
        }
        .message-content {
            max-width: 70%;
            padding: 10px;
            border-radius: 10px;
            background-color: #e0e0e0;
        }
        .message.user .message-content {
            background-color: #add0fc;
        }
        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
            background-color: #ccc;
        }
        .message.user .avatar {
            order: 1;
            margin-right: 0;
            margin-left: 10px;
        }
        .chat-input {
            padding: 20px;
            border-top: 1px solid #ccc;
        }
        .chat-input form {
            display: flex;
        }
        .chat-input input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .chat-input button {
            padding: 10px 20px;
            background-color: #3a7bc8;
            color: white;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="chat-container">
       
        <main class="main-chat">
            <header class="chat-header">
            <div class="logo flex-end">AIChatBot</div>
              
            </header>
            <section class="chat-messages">
                <div class="message">
                    <div class="avatar"></div>
                    <div class="message-content">
                        Hello! How can I assist you today?
                    </div>
                </div>
            </section>
            <footer class="chat-input">
                <form id="chat-form">
                    <input type="text" id="text" placeholder="Type your message here..." required>
                    <button type="submit" id="send-btn">Send</button>
                </form>
            </footer>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#chat-form").on("submit", function(event) {
                event.preventDefault();

                let value = $("#text").val();
                let userMessage = `<div class="message user">
                                    <div class="avatar"></div>
                                    <div class="message-content">${value}</div>
                                </div>`;
                $(".chat-messages").append(userMessage);
                $("#text").val('');  // Clear the input field
                
                // AJAX request to res.php
                $.ajax({
                    url: 'res.php',
                    type: 'POST',
                    data: { text: value },
                    success: function(result){
                        let botReply = `<div class="message">
                                            <div class="avatar"></div>
                                            <div class="message-content">${result}</div>
                                        </div>`;
                        $(".chat-messages").append(botReply);
                        
                        // Scroll to the bottom of the chat
                        $(".chat-messages").scrollTop($(".chat-messages")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
</body>
</html>
