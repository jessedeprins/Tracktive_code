<?php
// Logincontrole
require '../../code/login/auth.php';

// Gebruikersnummer ophalen
$gebruikernummer = $_SESSION['user_id'];
?> 

<!DOCTYPE html>
<html lang="nl">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tracktive</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container mt-5">

    <h2>Nieuw schema aanmaken</h2>

    <!-- Formulier voor nieuw schema -->
    <form action="maak_schemaphp.php" method="post">

        <!-- Gebruikersnummer meesturen -->
        <input type="hidden" name="Gebruikernr" value="<?= htmlspecialchars($gebruikernummer) ?>">

        <!-- Schema naam -->
        <div class="mb-3">
            <label class="form-label">Schema naam</label>
            <input type="text" name="Schema_naam" class="form-control" required>
        </div>

        <!-- Opslaan -->
        <button type="submit" class="btn btn-primary">Opslaan</button>

    </form>
</div>
</body>
</html>
