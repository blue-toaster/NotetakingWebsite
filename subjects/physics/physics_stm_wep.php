<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'STM_WEP_PCE', 'STM_WEP_SD', 'STM_WEP_WD', 'STM_WEP_KE',
    'STM_WEP_GPE', 'STM_WEP_EPE', 'STM_WEP_CME', 'STM_WEP_EP',
    'STM_WEP_EF', 'STM_WEP_ED'
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
    <title>Physics: Work, Energy, and Power</title>
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
    <h1>Work, Energy & Power</h1>
    <form method="post" action="">
        <label for="STM_WEP_PCE"><h3>Principle of Conservation of Energy:</h3></label>
        <textarea id="STM_WEP_PCE" name="STM_WEP_PCE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_PCE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_SD"><h3>Sankey Diagrams:</h3></label>
        <textarea id="STM_WEP_SD" name="STM_WEP_SD" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_SD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_WD"><h3>Work Done:</h3></label>
        <textarea id="STM_WEP_WD" name="STM_WEP_WD" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_WD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_KE"><h3>Kinetic Energy:</h3></label>
        <textarea id="STM_WEP_KE" name="STM_WEP_KE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_KE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_GPE"><h3>Gravitational Potential Energy:</h3></label>
        <textarea id="STM_WEP_GPE" name="STM_WEP_GPE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_GPE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_EPE"><h3>Elastic Potential Energy:</h3></label>
        <textarea id="STM_WEP_EPE" name="STM_WEP_EPE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_EPE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_CME"><h3>Conservation of Mechanical Energy:</h3></label>
        <textarea id="STM_WEP_CME" name="STM_WEP_CME" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_CME']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_EP"><h3>Energy & Power:</h3></label>
        <textarea id="STM_WEP_EP" name="STM_WEP_EP" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_EP']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_EF"><h3>Efficiency Formula:</h3></label>
        <textarea id="STM_WEP_EF" name="STM_WEP_EF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_EF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_WEP_ED"><h3>Energy Density:</h3></label>
        <textarea id="STM_WEP_ED" name="STM_WEP_ED" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_WEP_ED']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
