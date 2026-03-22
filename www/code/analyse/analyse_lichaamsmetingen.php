<?php
// Standaard gebruikernummer indien niet meegegeven
$gebruikernummer = $gebruikernummer ?? 9;

// Logincontrole
require '../../code/login/auth.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Analyse filter</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

<h2>Analyse bekijken</h2>

<!-- Formulier voor analysefilter -->
<form action="analyse_lichaamsmetingenphp.php" method="post">

    <!-- Gebruikersnummer meesturen -->
    <input type="hidden" name="gebruikernummer" value="<?= htmlspecialchars($gebruikernummer, ENT_QUOTES) ?>">

    <!-- Type meting kiezen -->
    <div class="mb-3">
        <label class="form-label">Type</label>
        <select name="type2" class="form-select">
            <option value="gewicht">gewicht</option>
            <option value="omtrek_borst">omtrek_borst</option>
            <option value="omtrek_buik">omtrek_buik</option>
            <option value="omtrek_biceps">omtrek_biceps</option>
            <option value="omtrek_been">omtrek_been</option>
        </select>
    </div>

    <!-- Begin datum -->
    <div class="mb-3">
        <label class="form-label">Begin datum</label>
        <input type="date" name="begindatum" class="form-control" required>
    </div>

    <!-- Eind datum -->
    <div class="mb-3">
        <label class="form-label">Eind datum</label>
        <input type="date" name="einddatum" class="form-control" required>
    </div> 

    <!-- Versturen -->
    <button type="submit" class="btn btn-primary">Analyse bekijken</button>

</form>

</div>
</body>
</html>
