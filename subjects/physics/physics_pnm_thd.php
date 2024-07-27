<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'pnm_thd_TS', 'pnm_thd_FLT', 'pnm_thd_E', 'pnm_thd_CCE', 'pnm_thd_SLT',
    'pnm_thd_TP', 'pnm_thd_HE', 'pnm_thd_CC'
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
    <title>Physics: Thermodynamics</title>
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
    <h1>Thermodynamics</h1>
    <form method="post" action="">
        <label for="pnm_thd_TS"><h3>Thermodynamic Systems:</h3></label>
        <textarea id="pnm_thd_TS" name="pnm_thd_TS" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_TS']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_FLT"><h3>First Law of Thermodynamics:</h3></label>
        <textarea id="pnm_thd_FLT" name="pnm_thd_FLT" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_FLT']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_E"><h3>Entropy:</h3></label>
        <textarea id="pnm_thd_E" name="pnm_thd_E" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_E']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_CCE"><h3>Calculating Changes in Entropy:</h3></label>
        <textarea id="pnm_thd_CCE" name="pnm_thd_CCE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_CCE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_SLT"><h3>Second Law of Thermodynamics:</h3></label>
        <textarea id="pnm_thd_SLT" name="pnm_thd_SLT" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_SLT']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_TP"><h3>Thermodynamic Processes:</h3></label>
        <textarea id="pnm_thd_TP" name="pnm_thd_TP" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_TP']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_HE"><h3>Heat Engines:</h3></label>
        <textarea id="pnm_thd_HE" name="pnm_thd_HE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_HE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_thd_CC"><h3>The Carnot Cycle:</h3></label>
        <textarea id="pnm_thd_CC" name="pnm_thd_CC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_thd_CC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
