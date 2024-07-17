<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panimalar Engineering College</title>
    <style>/* General Styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    color: #fff;
    background-color: #111;
}

/* Header Styles */
header {
    position: relative;
    height: 100vh;
    background: url('/mnt/data/back2.png') no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
}

header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
}

header .content {
    position: relative;
    z-index: 1;
}

header h1 {
    font-size: 4em;
    margin-bottom: 0.5em;
    animation: fadeIn 2s ease-in-out;
}

header p {
    font-size: 1.5em;
    animation: fadeIn 3s ease-in-out;
}

/* Navigation Styles */
nav {
    background: #222;
    padding: 1em 0;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    transition: background 0.3s ease;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 1em;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #f39c12;
}

/* Main Content Styles */
main {
    padding: 4em 1em;
}

section {
    padding: 4em 1em;
    text-align: center;
    background: #333;
    margin: 2em 0;
    border-radius: 10px;
    animation: slideIn 1s ease-in-out;
}

section h2 {
    font-size: 2.5em;
    margin-bottom: 0.5em;
}

section p {
    font-size: 1.2em;
    line-height: 1.5;
}

/* Footer Styles */
footer {
    background: #222;
    text-align: center;
    padding: 2em 0;
    font-size: 1em;
    color: #fff;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

/* Responsive Design */
@media (max-width: 768px) {
    header h1 {
        font-size: 2.5em;
    }

    header p {
        font-size: 1.2em;
    }

    nav ul {
        flex-direction: column;
    }

    nav ul li {
        margin: 0.5em 0;
    }
}
</style>
</head>
<body>
    <header>
        <div class="overlay"></div>
        <div class="content">
            <h1>Welcome to Panimalar Engineering College</h1>
            <p>Innovate, Inspire, Ignite</p>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#programs">Programs</a></li>
            <li><a href="#admissions">Admissions</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section id="about">
            <h2>About Us</h2>
            <p>Panimalar Engineering College is a premier institution focused on quality education and innovation...</p>
        </section>
        <section id="programs">
            <h2>Our Programs</h2>
            <p>Explore our diverse range of engineering programs designed to equip students with the skills for the future...</p>
        </section>
        <section id="admissions">
            <h2>Admissions</h2>
            <p>Join our community of innovators and leaders. Learn more about our admissions process...</p>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Get in touch with us for more information or any queries...</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Panimalar Engineering College. All Rights Reserved.</p>
    </footer>
    <script>
window.embeddedChatbotConfig = {
chatbotId: "y0Zdfh1ZBtdypec3wp0Va",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="y0Zdfh1ZBtdypec3wp0Va"
domain="www.chatbase.co"
defer>
</script>
</body>
</html>
