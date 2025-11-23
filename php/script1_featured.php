<?php
// Array of available artwork filenames
$images = [
    "cowboy.jpg",
    "handmaid.jpg",
    "johnny-fade.jpg",
    "vincent-price.jpg"
];

// Pick a random image
$selected = $images[array_rand($images)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Featured Artwork</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
        }
        h1 {
            margin-bottom: 1.5rem;
        }
        img {
            max-width: 450px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <h1>Today's Featured Artwork</h1>
    <img src="assets/img/<?php echo $selected; ?>" alt="Featured artwork">

</body>
</html>

