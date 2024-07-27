<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'pnm_cac_CD', 'pnm_cac_EC', 'pnm_cac_EPD', 'pnm_cac_ECI', 'pnm_cac_ER',
    'pnm_cac_ERes', 'pnm_cac_IVC', 'pnm_cac_SPC', 'pnm_cac_EP', 'pnm_cac_SEE',
    'pnm_cac_EMFIR', 'pnm_cac_VR'
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
    <title>Physics: Circuits and Currents</title>
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
            text-decoration: none.
        }

        li a:hover {
            background-color: #111.
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
    <h1>Circuits and Currents</h1>
    <form method="post" action="">
        <label for="pnm_cac_CD"><h3>Current & Circuits:</h3></label>
        <textarea id="pnm_cac_CD" name="pnm_cac_CD" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_CD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_EC"><h3>Electric Current:</h3></label>
        <textarea id="pnm_cac_EC" name="pnm_cac_EC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_EC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_EPD"><h3>Electric Potential Difference:</h3></label>
        <textarea id="pnm_cac_EPD" name="pnm_cac_EPD" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_EPD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_ECI"><h3>Electrical Conductors & Insulators:</h3></label>
        <textarea id="pnm_cac_ECI" name="pnm_cac_ECI" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_ECI']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_ER"><h3>Electric Resistance:</h3></label>
        <textarea id="pnm_cac_ER" name="pnm_cac_ER" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_ER']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_ERes"><h3>Electrical Resistivity:</h3></label>
        <textarea id="pnm_cac_ERes" name="pnm_cac_ERes" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_ERes']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_IVC"><h3>I-V Characteristics:</h3></label>
        <textarea id="pnm_cac_IVC" name="pnm_cac_IVC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_IVC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_SPC"><h3>Series & Parallel Circuits:</h3></label>
        <textarea id="pnm_cac_SPC" name="pnm_cac_SPC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_SPC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_EP"><h3>Electrical Power:</h3></label>
        <textarea id="pnm_cac_EP" name="pnm_cac_EP" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_EP']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_SEE"><h3>Sources of Electrical Energy:</h3></label>
        <textarea id="pnm_cac_SEE" name="pnm_cac_SEE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_SEE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_EMFIR"><h3>Electromotive Force & Internal Resistance:</h3></label>
        <textarea id="pnm_cac_EMFIR" name="pnm_cac_EMFIR" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_EMFIR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_cac_VR"><h3>Variable Resistance:</h3></label>
        <textarea id="pnm_cac_VR" name="pnm_cac_VR" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_cac_VR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
