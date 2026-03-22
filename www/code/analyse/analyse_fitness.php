<?php
// Zet gebruikernummer op  9(goed voor testen)
$gebruikernummer = $gebruikernummer ?? 9;

// Controleert of gebruiker ingelogd is
require '../../code/login/auth.php';

?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">

<!-- Titel van de pagina -->
<title>Analyse filter</title>

<!-- Bootstrap voor styling -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Container voor layout -->
<div class="container mt-5">

<h2>Analyse bekijken</h2>

<!-- Formulier dat data verstuurt naar analyse_fitnessphp.php -->
<form action="analyse_fitnessphp.php" method="post">

<!-- Verborgen veld: gebruikernr wordt meegestuurd -->
<input type="hidden" name="gebruikernummer" value="<?= htmlspecialchars($gebruikernummer, ENT_QUOTES) ?>">

<!-- Selectie van type oefening -->
<div class="mb-3">
<label class="form-label">Type 2</label>
<select name="type2" class="form-select">

<!-- Mogelijke keuzes voor type2 -->
<option value="benen">Benen</option>
<option value="bovenlichaam">Bovenlichaam</option>
<option value="rug">Rug</option>

</select>
</div>

<!-- Selectie van meettype -->
<div class="mb-3">
<label class="form-label">Type 3</label>
<select name="type3" class="form-select">

<!-- Mogelijke analysetypes -->
<option value="aantal">Aantal</option>
<option value="gewicht">Gewicht</option>

</select>
</div>

<!-- Begin datum van analyse -->
<div class="mb-3">
<label class="form-label">Begin datum</label>
<input type="date" name="begindatum" class="form-control" required>
</div>

<!-- Eind datum van analyse -->
<div class="mb-3">
<label class="form-label">Eind datum</label>
<input type="date" name="einddatum" class="form-control" required>
</div>

<!-- Submit knop -->
<button type="submit" class="btn btn-primary">Analyse bekijken</button>

</form>
</div>

</body>
</html>