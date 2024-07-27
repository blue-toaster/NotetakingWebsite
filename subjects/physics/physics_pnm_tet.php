<?php
session_start();

// Initialize session variables if they are not already set
$fields = [
    'pnm_tet_SLG', 'pnm_tet_Density', 'pnm_tet_TS', 'pnm_tet_TKE', 'pnm_tet_IE', 
    'pnm_tet_TE', 'pnm_tet_COS', 'pnm_tet_SHC', 'pnm_tet_SLH', 'pnm_tet_TC', 
    'pnm_tet_TCV', 'pnm_tet_TR', 'pnm_tet_ABL', 'pnm_tet_SBL', 'pnm_tet_WDL'
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
    <title>Physics: Thermal and Equilibrium</title>
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
    <h1>Thermal Energy Transfers</h1>
    <form method="post" action="">
        <label for="pnm_tet_SLG"><h3>Solids, Liquids & Gases:</h3></label>
        <textarea id="pnm_tet_SLG" name="pnm_tet_SLG" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_SLG']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_Density"><h3>Density:</h3></label>
        <textarea id="pnm_tet_Density" name="pnm_tet_Density" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_Density']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_TS"><h3>Temperature Scales:</h3></label>
        <textarea id="pnm_tet_TS" name="pnm_tet_TS" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_TS']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_TKE"><h3>Temperature & Kinetic Energy:</h3></label>
        <textarea id="pnm_tet_TKE" name="pnm_tet_TKE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_TKE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_IE"><h3>Internal Energy:</h3></label>
        <textarea id="pnm_tet_IE" name="pnm_tet_IE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_IE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_TE"><h3>Thermal Equilibrium:</h3></label>
        <textarea id="pnm_tet_TE" name="pnm_tet_TE" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_TE']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_COS"><h3>Changes of State:</h3></label>
        <textarea id="pnm_tet_COS" name="pnm_tet_COS" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_COS']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_SHC"><h3>Specific Heat Capacity:</h3></label>
        <textarea id="pnm_tet_SHC" name="pnm_tet_SHC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_SHC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_SLH"><h3>Specific Latent Heat:</h3></label>
        <textarea id="pnm_tet_SLH" name="pnm_tet_SLH" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_SLH']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_TC"><h3>Thermal Conduction:</h3></label>
        <textarea id="pnm_tet_TC" name="pnm_tet_TC" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_TC']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_TCV"><h3>Thermal Convection:</h3></label>
        <textarea id="pnm_tet_TCV" name="pnm_tet_TCV" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_TCV']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_TR"><h3>Thermal Radiation:</h3></label>
        <textarea id="pnm_tet_TR" name="pnm_tet_TR" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_TR']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_ABL"><h3>Apparent Brightness & Luminosity:</h3></label>
        <textarea id="pnm_tet_ABL" name="pnm_tet_ABL" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_ABL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_SBL"><h3>Stefan-Boltzmann Law:</h3></label>
        <textarea id="pnm_tet_SBL" name="pnm_tet_SBL" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_SBL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>

        <label for="pnm_tet_WDL"><h3>Wien’s Displacement Law:</h3></label>
        <textarea id="pnm_tet_WDL" name="pnm_tet_WDL" rows="5" cols="50"><?php echo htmlspecialchars($data['pnm_tet_WDL']); ?></textarea><br>
        <button type="submit" name="save">Save Data</button>
    </form>

    <?php if (isset($_POST['save'])): ?>
        <p>Data saved successfully!</p>
    <?php endif; ?>
</body>
</html>
