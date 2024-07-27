<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'pnm_gl_GP', 'pnm_gl_AOS', 'pnm_gl_GL', 'pnm_gl_IGE', 'pnm_gl_KTG', 
    'pnm_gl_DKTGE', 'pnm_gl_AKEM'
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
    <title>Physics: Gas Laws and Kinetic Theory</title>
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
    <h1>Gas Laws and Kinetic Theory</h1>
    <form method="post" action="">
        <label for="pnm_gl_GP"><h3>Gas Pressure:</h3></label>
        <textarea id="pnm_gl_GP" name="pnm_gl_GP" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_GP']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_gl_AOS"><h3>Amount of Substance:</h3></label>
        <textarea id="pnm_gl_AOS" name="pnm_gl_AOS" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_AOS']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_gl_GL"><h3>Gas Laws:</h3></label>
        <textarea id="pnm_gl_GL" name="pnm_gl_GL" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_GL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_gl_IGE"><h3>Ideal Gas Equation:</h3></label>
        <textarea id="pnm_gl_IGE" name="pnm_gl_IGE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_IGE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_gl_KTG"><h3>Kinetic Theory of Gases:</h3></label>
        <textarea id="pnm_gl_KTG" name="pnm_gl_KTG" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_KTG']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_gl_DKTGE"><h3>Derivation of the Kinetic Theory of Gases Equation:</h3></label>
        <textarea id="pnm_gl_DKTGE" name="pnm_gl_DKTGE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_DKTGE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_gl_AKEM"><h3>Average Kinetic Energy of a Molecule:</h3></label>
        <textarea id="pnm_gl_AKEM" name="pnm_gl_AKEM" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_gl_AKEM']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
