<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'STM_GSR_RF', 'STM_GSR_GR', 'STM_GSR_PSR', 'STM_GSR_LT',
    'STM_GSR_VAT', 'STM_GSR_STI', 'STM_GSR_TD', 'STM_GSR_LC',
    'STM_GSR_SSR', 'STM_GSR_STD', 'STM_GSR_MLE'
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
    <title>Physics: General and Special Relativity</title>
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
    <h1>Galilean & Special Relativity</h1>
    <form method="post" action="">
        <label for="STM_GSR_RF"><h3>Reference Frames:</h3></label>
        <textarea id="STM_GSR_RF" name="STM_GSR_RF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_RF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_GR"><h3>Galilean Relativity:</h3></label>
        <textarea id="STM_GSR_GR" name="STM_GSR_GR" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_GR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_PSR"><h3>Postulates of Special Relativity:</h3></label>
        <textarea id="STM_GSR_PSR" name="STM_GSR_PSR" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_PSR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_LT"><h3>Lorentz Transformations:</h3></label>
        <textarea id="STM_GSR_LT" name="STM_GSR_LT" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_LT']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_VAT"><h3>Velocity Addition Transformations:</h3></label>
        <textarea id="STM_GSR_VAT" name="STM_GSR_VAT" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_VAT']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_STI"><h3>Space-Time Interval:</h3></label>
        <textarea id="STM_GSR_STI" name="STM_GSR_STI" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_STI']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_TD"><h3>Time Dilation:</h3></label>
        <textarea id="STM_GSR_TD" name="STM_GSR_TD" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_TD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_LC"><h3>Length Contraction:</h3></label>
        <textarea id="STM_GSR_LC" name="STM_GSR_LC" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_LC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_SSR"><h3>Simultaneity in Special Relativity:</h3></label>
        <textarea id="STM_GSR_SSR" name="STM_GSR_SSR" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_SSR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_STD"><h3>Space-Time Diagrams:</h3></label>
        <textarea id="STM_GSR_STD" name="STM_GSR_STD" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_STD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_GSR_MLE"><h3>Muon Lifetime Experiment:</h3></label>
        <textarea id="STM_GSR_MLE" name="STM_GSR_MLE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_GSR_MLE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
