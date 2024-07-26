<?php
session_start();

// Initialize session variables if they are not already set
if (!isset($_SESSION['datacode'])) {
    $_SESSION['datacode'] = '';
}

// Save data when the form is submitted
if (isset($_POST['save'])) {
    if (isset($_POST['datacode'])) {
        $_SESSION['datacode'] = $_POST['datacode'];
    }
}

// Retrieve data to pre-populate the text areas
$datacode = $_SESSION['datacode'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Physics: A</title>
    <style> 
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }
    </style>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/r70rual5btl8ywru3arfgfr58gx1saqfp61ewk96zzgmj1k0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'lists image paste table autosave link',
            toolbar: 'undo redo | bold italic underline bullist numlist image restoredraft',
            paste_data_images: true,
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });

    </script>
</head>
<body>
    <ul>
        <li><a class="active" href="../../index.php">Home</a></li>
        <li><a href="../physics.php">Physics</a></li>
        <li><a href="../biology.php">Biology</a></li>
        <li><a href="../chem.php">Chemistry</a></li>
        <li><a href="../cs.php">Computer Science</a></li>
        <li><a href="../enviro.php">Enviro</a></li>
    </ul>
    <h1>Section title</h1>
    <h2>Subheading</h2>
    <form method="post" action="">
        <label for="datacode"><h3>LO: Question...?:</h3></label>
        <textarea id="datacode" name="datacode" rows="5" cols="50"><?php echo htmlspecialchars($datacode); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
