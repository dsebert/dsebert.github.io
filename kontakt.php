<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktformular</title>
</head>
<body>
    <h1>Kontakt</h1>
    <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">E-Mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Nachricht:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit" value="Absenden">
    </form>
</body>
</html>

