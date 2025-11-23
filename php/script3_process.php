<?php
// Simple validation
$name = trim($_POST['name'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if ($name === '') {
    $errors[] = "Name is required.";
}

if ($message === '') {
    $errors[] = "Message is required.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Result</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 3rem auto; line-height: 1.6; }
        .error { color: red; margin-bottom: 1rem; }
        .success { background: #e8ffe8; padding: 1rem; border-left: 5px solid green; }
    </style>
</head>
<body>

<h1>Form Submission Result</h1>

<?php if (!empty($errors)): ?>

    <div class="error">
        <strong>There were errors:</strong>
        <ul>
            <?php foreach ($errors as $e): ?>
                <li><?php echo htmlspecialchars($e); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <a href="script3_contact.php">Go back</a>

<?php else: ?>

    <div class="success">
        <p><strong>Success!</strong> Your message was sent.</p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Message:</strong><br><?php echo nl2br(htmlspecialchars($message)); ?></p>
    </div>

<?php endif; ?>

</body>
</html>
