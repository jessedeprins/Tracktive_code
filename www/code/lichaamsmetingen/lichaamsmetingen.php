<?php
// Logincontrole
require '../../code/login/auth.php';

// Gebruikersnummer uit sessie
$Gebruikernr = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Lichaamsmeting registreren</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container mt-5">

    <h2>Lichaamsmeting registreren</h2>

    <!-- Formulier voor lichaamsmetingen -->
    <form action="lichaamsmetingenphp.php" method="post">

        <!-- Gebruikersnummer meesturen -->
        <input type="hidden" name="Gebruikernr" value="<?= htmlspecialchars($Gebruikernr) ?>">

        <!-- Gewicht -->
        <div class="mb-3">
            <label class="form-label">Gewicht (kg)</label>
            <input type="number" name="Gewicht" class="form-control" required>
        </div>

        <!-- Omtrek borst -->
        <div class="mb-3">
            <label class="form-label">Omtrek borst (cm)</label>
            <input type="number" name="Omtrek_borst" class="form-control" required>
        </div>

        <!-- Omtrek buik -->
        <div class="mb-3">
            <label class="form-label">Omtrek buik (cm)</label>
            <input type="number" name="Omtrek_buik" class="form-control" required>
        </div>

        <!-- Omtrek biceps -->
        <div class="mb-3">
            <label class="form-label">Omtrek biceps (cm)</label>
            <input type="number" name="Omtrek_biceps" class="form-control" required>
        </div>

        <!-- Omtrek been -->
        <div class="mb-3">
            <label class="form-label">Omtrek been (cm)</label>
            <input type="number" name="Omtrek_been" class="form-control" required>
        </div>

        <!-- Opslaan -->
        <button type="submit" class="btn btn-primary">Opslaan</button>

    </form>
</div>
</body>
</html>
