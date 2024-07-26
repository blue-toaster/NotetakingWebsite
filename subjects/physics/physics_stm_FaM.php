<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'STM_FaM_FBD', 'STM_FaM_NFL', 'STM_FaM_NSL', 'STM_FaM_NTL',
    'STM_FaM_CF', 'STM_FaM_NCF', 'STM_FaM_FF', 'STM_FaM_HL',
    'STM_FaM_SL', 'STM_FaM_B', 'STM_FaM_CLM', 'STM_FaM_IM',
    'STM_FaM_FM', 'STM_FaM_CEO1D', 'STM_FaM_CEO2DHL', 'STM_FaM_AV',
    'STM_FaM_CF', 'STM_FaM_CA', 'STM_FaM_NUCM'
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
    <h1>Forces and Motion</h1>
    <form method="post" action="">
        <label for="STM_FaM_FBD"><h3>Free-Body Diagrams:</h3></label>
        <textarea id="STM_FaM_FBD" name="STM_FaM_FBD" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_FBD']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_NFL"><h3>Newton’s First Law:</h3></label>
        <textarea id="STM_FaM_NFL" name="STM_FaM_NFL" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_NFL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_NSL"><h3>Newton’s Second Law:</h3></label>
        <textarea id="STM_FaM_NSL" name="STM_FaM_NSL" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_NSL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_NTL"><h3>Newton’s Third Law:</h3></label>
        <textarea id="STM_FaM_NTL" name="STM_FaM_NTL" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_NTL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_CF"><h3>Contact Forces:</h3></label>
        <textarea id="STM_FaM_CF" name="STM_FaM_CF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_CF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_NCF"><h3>Non-Contact Forces:</h3></label>
        <textarea id="STM_FaM_NCF" name="STM_FaM_NCF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_NCF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_FF"><h3>Frictional Forces:</h3></label>
        <textarea id="STM_FaM_FF" name="STM_FaM_FF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_FF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_HL"><h3>Hooke's Law:</h3></label>
        <textarea id="STM_FaM_HL" name="STM_FaM_HL" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_HL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_SL"><h3>Stoke's Law:</h3></label>
        <textarea id="STM_FaM_SL" name="STM_FaM_SL" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_SL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_B"><h3>Buoyancy:</h3></label>
        <textarea id="STM_FaM_B" name="STM_FaM_B" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_B']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_CLM"><h3>Conservation of Linear Momentum:</h3></label>
        <textarea id="STM_FaM_CLM" name="STM_FaM_CLM" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_CLM']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_IM"><h3>Impulse & Momentum:</h3></label>
        <textarea id="STM_FaM_IM" name="STM_FaM_IM" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_IM']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_FM"><h3>Force & Momentum:</h3></label>
        <textarea id="STM_FaM_FM" name="STM_FaM_FM" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_FM']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_CEO1D"><h3>Collisions & Explosions in One-Dimension:</h3></label>
        <textarea id="STM_FaM_CEO1D" name="STM_FaM_CEO1D" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_CEO1D']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_CEO2DHL"><h3>Collisions & Explosions in Two-Dimensions (HL):</h3></label>
        <textarea id="STM_FaM_CEO2DHL" name="STM_FaM_CEO2DHL" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_CEO2DHL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_AV"><h3>Angular Velocity:</h3></label>
        <textarea id="STM_FaM_AV" name="STM_FaM_AV" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_AV']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_CF"><h3>Centripetal Force:</h3></label>
        <textarea id="STM_FaM_CF" name="STM_FaM_CF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_CF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_CA"><h3>Centripetal Acceleration:</h3></label>
        <textarea id="STM_FaM_CA" name="STM_FaM_CA" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_CA']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_FaM_NUCM"><h3>Non-Uniform Circular Motion:</h3></label>
        <textarea id="STM_FaM_NUCM" name="STM_FaM_NUCM" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_FaM_NUCM']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
