<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'pnm_GE_AE', 'pnm_GE_SC', 'pnm_GE_GG', 'pnm_GE_GHE', 'pnm_GE_EBP'
];

foreach ($fields as $field) {
    if (!isset($_SESSION[$field])) {
        $_SESSION[$field] = '';
    }
}

// Save data when the form is submitted
if (isset($_POST['save'])) {
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $_SESSION[$field] = $_POST[$field];
        }
    }
}

// Retrieve data to pre-populate the text areas
$data = [];
foreach ($fields as $field) {
    $data[$field] = $_SESSION[$field];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Physics: Greenhouse Effect and Energy Balance</title>
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
    <h1>Greenhouse Effect</h1>
    <form method="post" action="">
        <label for="pnm_GE_AE"><h3>Albedo & Emissivity:</h3></label>
        <textarea id="pnm_GE_AE" name="pnm_GE_AE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_GE_AE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_GE_SC"><h3>The Solar Constant:</h3></label>
        <textarea id="pnm_GE_SC" name="pnm_GE_SC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_GE_SC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_GE_GG"><h3>Greenhouse Gases:</h3></label>
        <textarea id="pnm_GE_GG" name="pnm_GE_GG" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_GE_GG']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_GE_GHE"><h3>The Greenhouse Effect:</h3></label>
        <textarea id="pnm_GE_GHE" name="pnm_GE_GHE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_GE_GHE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_GE_EBP"><h3>Energy Balance Problems:</h3></label>
        <textarea id="pnm_GE_EBP" name="pnm_GE_EBP" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_GE_EBP']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
