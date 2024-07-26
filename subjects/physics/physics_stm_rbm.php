<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'STM_RBM_TC', 'STM_RBM_RE', 'STM_RBM_ADVA', 'STM_RBM_AAF',
    'STM_RBM_MOI', 'STM_RBM_NSLR', 'STM_RBM_AM', 'STM_RBM_AI',
    'STM_RBM_RKE'
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
    <title>Physics: Rigidbody Mechanics</title>
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
    <h1>Rotational Motion and Mechanics</h1>
    <form method="post" action="">
        <label for="STM_RBM_TC"><h3>Torque & Couples:</h3></label>
        <textarea id="STM_RBM_TC" name="STM_RBM_TC" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_TC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_RE"><h3>Rotational Equilibrium:</h3></label>
        <textarea id="STM_RBM_RE" name="STM_RBM_RE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_RE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_ADVA"><h3>Angular Displacement, Velocity & Acceleration:</h3></label>
        <textarea id="STM_RBM_ADVA" name="STM_RBM_ADVA" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_ADVA']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_AAF"><h3>Angular Acceleration Formula:</h3></label>
        <textarea id="STM_RBM_AAF" name="STM_RBM_AAF" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_AAF']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_MOI"><h3>Moment of Inertia:</h3></label>
        <textarea id="STM_RBM_MOI" name="STM_RBM_MOI" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_MOI']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_NSLR"><h3>Newton’s Second Law for Rotation:</h3></label>
        <textarea id="STM_RBM_NSLR" name="STM_RBM_NSLR" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_NSLR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_AM"><h3>Angular Momentum:</h3></label>
        <textarea id="STM_RBM_AM" name="STM_RBM_AM" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_AM']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_AI"><h3>Angular Impulse:</h3></label>
        <textarea id="STM_RBM_AI" name="STM_RBM_AI" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_AI']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_RBM_RKE"><h3>Rotational Kinetic Energy:</h3></label>
        <textarea id="STM_RBM_RKE" name="STM_RBM_RKE" rows="5" cols="50"><?php echo htmlspecialchars($data['STM_RBM_RKE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
