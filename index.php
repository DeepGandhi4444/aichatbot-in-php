<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIChatBot - Your Intelligent Conversation Partner</title>
    <style>
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #f5f5f5;
            --text-color: #333;
            --light-text-color: #666;
        }
        
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            background-color: var(--secondary-color);
            padding: 4rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--light-text-color);
            margin-bottom: 2rem;
        }

        .cta-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 0.8rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #3a7bc8;
        }

        .features {
            padding: 4rem 0;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature {
            text-align: center;
            padding: 1.5rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .demo {
            background-color: var(--secondary-color);
            padding: 4rem 0;
            text-align: center;
        }

        .chat-window {
            max-width: 600px;
            margin: 2rem auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .chat-messages {
            height: 300px;
            overflow-y: auto;
            padding: 1rem;
        }

        .message {
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            max-width: 80%;
        }

        .user-message {
            background-color: #e6f2ff;
            margin-left: auto;
        }

        .bot-message {
            background-color: #f0f0f0;
        }

        .chat-input {
            display: flex;
            padding: 1rem;
            border-top: 1px solid #e0e0e0;
        }

        .chat-input input {
            flex-grow: 1;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .chat-input button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            margin-left: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
        }

        footer {
            background-color: var(--text-color);
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo">AIChatBot</div>
            <div class="nav-links">
                <a href="chatbot.php" class="cta-button">Get Started</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Experience the Future of Conversation</h1>
                <p>AIChatBot: Your intelligent partner for seamless, human-like interactions.</p>
                <a href="chatbot.php" class="cta-button">Try It Now</a>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <h2>Why Choose AIChatBot?</h2>
                <div class="feature-grid">
                    <div class="feature">
                        <div class="feature-icon">💡</div>
                        <h3>Intelligent Responses</h3>
                        <p>Advanced AI technology provides human-like, context-aware conversations.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🚀</div>
                        <h3>Lightning Fast</h3>
                        <p>Get instant responses to your queries, no matter how complex.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🔒</div>
                        <h3>Secure & Private</h3>
                        <p>Your conversations are encrypted and never stored without your permission.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">🌐</div>
                        <h3>Multilingual Support</h3>
                        <p>Communicate in over 50 languages with near-native fluency.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="demo" class="demo">
            <div class="container">
                <h2>See AIChatBot in Action</h2>
                <div class="chat-window">
                    <div class="chat-messages">
                        <div class="message bot-message">Hello! How can I assist you today?</div>
                        <div class="message user-message">Can you explain how AI works?</div>
                        <div class="message bot-message">AI, or Artificial Intelligence, is a branch of computer science that aims to create intelligent machines that can perform tasks that typically require human intelligence. This includes learning, problem-solving, understanding natural language, and perception.</div>
                        <div class="message user-message">That's interesting! Can you give me an example?</div>
                        <div class="message bot-message">A great example of AI in action is a chatbot like myself. I use natural language processing to understand your questions, and machine learning algorithms to generate appropriate responses based on vast amounts of training data.</div>
                    </div>
                    <div class="chat-input">
                        <input type="text" placeholder="Type your message here...">
                      <a href="chatbot.php"><button>Send</button></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 AIChatBot. All rights reserved. BY Deep, Rahul, Vishal</p>
        </div>
    </footer>
</body>
</html>