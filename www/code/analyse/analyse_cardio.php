<?php
$gebruikernummer = $gebruikernummer ?? 9; //nog te vervangen door echte gebruiker
require '../../code/login/auth.php'; // checkt of je bent ingelogd

?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Analyse filter</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Container zorgt voor mooie centrering en marges -->
<div class="container mt-5">
<h2>Analyse bekijken</h2>
<!-- stuurt bij submit de data door naar analyse_cardiophp.php-->
<form action="analyse_cardiophp.php" method="post">
<!-- Verborgen veld om gebruikernummer mee te sturen -->
<input type="hidden" name="gebruikernummer" value="<?= htmlspecialchars($gebruikernummer, ENT_QUOTES) ?>">

<div class="mb-3">
<label class="form-label">Type 1</label>
<select name="type2" class="form-select">
<option value="lopen">Lopen</option>
<option value="fietsen">Fietsen</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Type 2</label>
<select name="type3" class="form-select">
<option value="aantal">Aantal</option>
<option value="afstand">Afstand</option>
<option value="tijd">Tijd</option>
</select>
</div>
<!-- begin datum -->
<div class="mb-3">
<label class="form-label">Begin datum</label>
<input type="date" name="begindatum" class="form-control" required>
</div>
<!-- eind datum -->
<div class="mb-3">
<label class="form-label">Eind datum</label>
<input type="date" name="einddatum" class="form-control" required>
</div>
<!-- Knop om formulier te verzenden -->
<button type="submit" class="btn btn-primary">Analyse bekijken</button>

</form>
</div>
</body>
</html>