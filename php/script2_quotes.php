<?php
// Array of inspirational art quotes
$quotes = [
    "Art enables us to find ourselves and lose ourselves at the same time. - Thomas Merton",
    "Every artist was first an amateur. - Ralph Waldo Emerson",
    "Creativity takes courage. - Henri Matisse",
    "The purpose of art is washing the dust of daily life off our souls. - Pablo Picasso",
    "Art is not what you see, but what you make others see. - Edgar Degas"
];

// Pick one at random:
$quote = $quotes[array_rand($quotes)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Art Quote</title>
    <style>
        body {
            font-family: Georgia, serif;
            padding: 2rem;
            max-width: 700px;
            margin: auto;
            line-height: 1.6;
        }
        h1 {
            margin-bottom: 1rem;
            text-transform: uppercase;
        }
        .quote-box {
            background: #fafafa;
            border-left: 6px solid #333;
            padding: 1.25rem 1rem;
            font-size: 1.25rem;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <h1>Daily Art Inspiration</h1>

    <div class="quote-box">
        <?php echo $quote; ?>
    </div>

</body>
</html>
