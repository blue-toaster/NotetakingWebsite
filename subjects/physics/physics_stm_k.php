<?php
session_start();

// Initialize session variables if they are not already set
if (!isset($_SESSION['STM_K_DaD'])) {
    $_SESSION['STM_K_DaD'] = '';
}
if (!isset($_SESSION['STM_K_SaV'])) {
    $_SESSION['STM_K_SaV'] = '';
}
if (!isset($_SESSION['STM_K_acc'])) {
    $_SESSION['STM_K_acc'] = '';
}
if (!isset($_SESSION['STM_K_KEq'])) {
    $_SESSION['STM_K_KEq'] = '';
}
if (!isset($_SESSION['STM_K_MoG'])) {
    $_SESSION['STM_K_MoG'] = '';
}
if (!isset($_SESSION['STM_K_PrM'])) {
    $_SESSION['STM_K_PrM'] = '';
}
if (!isset($_SESSION['STM_K_FlR'])) {
    $_SESSION['STM_K_FlR'] = '';
}
if (!isset($_SESSION['STM_K_TeS'])) {
    $_SESSION['STM_K_TeS'] = '';
}

// Save data when the form is submitted
if (isset($_POST['save'])) {
    if (isset($_POST['STM_K_DaD'])) {
        $_SESSION['STM_K_DaD'] = $_POST['STM_K_DaD'];
    }
    if (isset($_POST['STM_K_SaV'])) {
        $_SESSION['STM_K_SaV'] = $_POST['STM_K_SaV'];
    }
    if (isset($_POST['STM_K_acc'])) {
        $_SESSION['STM_K_acc'] = $_POST['STM_K_acc'];
    }
    if (isset($_POST['STM_K_KEq'])) {
        $_SESSION['STM_K_KEq'] = $_POST['STM_K_KEq'];
    }
    if (isset($_POST['STM_K_MoG'])) {
        $_SESSION['STM_K_MoG'] = $_POST['STM_K_MoG'];
    }
    if (isset($_POST['STM_K_PrM'])) {
        $_SESSION['STM_K_PrM'] = $_POST['STM_K_PrM'];
    }
    if (isset($_POST['STM_K_FlR'])) {
        $_SESSION['STM_K_FlR'] = $_POST['STM_K_FlR'];
    }
    if (isset($_POST['STM_K_TeS'])) {
        $_SESSION['STM_K_TeS'] = $_POST['STM_K_TeS'];
    }
}

// Retrieve data to pre-populate the text areas
$STM_K_DaD = $_SESSION['STM_K_DaD'];
$STM_K_SaV = $_SESSION['STM_K_SaV'];
$STM_K_acc = $_SESSION['STM_K_acc'];
$STM_K_KEq = $_SESSION['STM_K_KEq'];
$STM_K_MoG = $_SESSION['STM_K_MoG'];
$STM_K_PrM = $_SESSION['STM_K_PrM'];
$STM_K_FlR = $_SESSION['STM_K_FlR'];
$STM_K_TeS = $_SESSION['STM_K_TeS'];

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
    <h1>Space, Time & Motion</h1>
    <h2>Kinematics</h2>
    <form method="post" action="">
        <label for="STM_K_DaD"><h3>Distance & Displacement:</h3></label>
        <textarea id="STM_K_DaD" name="STM_K_DaD" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_DaD); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_SaV"><h3>Speed & Velocity:</h3></label>
        <textarea id="STM_K_SaV" name="STM_K_SaV" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_SaV); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_acc"><h3>Acceleration:</h3></label>
        <textarea id="STM_K_acc" name="STM_K_acc" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_acc); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_KEq"><h3>Kinematic Equations:</h3></label>
        <textarea id="STM_K_KEq" name="STM_K_KEq" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_KEq); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_MoG"><h3>Motion Graphs:</h3></label>
        <textarea id="STM_K_MoG" name="STM_K_MoG" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_MoG); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_PrM"><h3>Projectile Motion:</h3></label>
        <textarea id="STM_K_PrM" name="STM_K_PrM" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_PrM); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_FlR"><h3>Fluid Resistance:</h3></label>
        <textarea id="STM_K_FlR" name="STM_K_FlR" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_FlR); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="STM_K_TeS"><h3>Terminal Speed:</h3></label>
        <textarea id="STM_K_TeS" name="STM_K_TeS" rows="5" cols="50"><?php echo htmlspecialchars($STM_K_TeS); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
