<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Images in Block Side by Side</title>
<style>
    .image-container {
        text-align: center; /* Center the images horizontally */
    }
    .image-container img {
        display: inline-block; /* Display images as inline blocks */
        max-width: 100%; /* Make sure the images don't exceed their container */
        height: auto; /* Maintain aspect ratio */
        margin: 0 10px; /* Add some space between images */
    }
</style>
</head>
<body>

<div class="image-container">
    <img src="image1.jpg" alt="Image 1">
    <img src="image2.jpg" alt="Image 2">
</div>

</body>
</html>
