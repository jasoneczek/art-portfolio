<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Contact Form (PHP Demo)</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 3rem auto; line-height: 1.6; }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 0.5rem 0 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 18px;
            background: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover { background: #555; }
    </style>
</head>
<body>

    <h1>Contact Form (PHP Script Demo)</h1>
    <p>This form sends data to a PHP script which validates and processes it.</p>

    <form action="script3_process.php" method="POST">
        <label>Your Name:</label>
        <input type="text" name="name" required>

        <label>Your Message:</label>
        <textarea name="message" rows="5" required></textarea>

        <button class="btn" type="submit">Send</button>
    </form>

</body>
</html>
