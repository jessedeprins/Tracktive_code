<?php
// checkt of ie is ingelogd
require '../../code/login/auth.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Cardio training registreren</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

    <h2>Oefening registreren</h2>

    <!-- Formulier voor cardio -->
    <form action="lopenphp.php" method="post">

        <!-- Gebruikersnummer meesturen -->
        <input type="hidden" name="gebruikernummer" value="<?= htmlspecialchars($gebruikernummer) ?>">

        <!-- Type training -->
        <div class="mb-3">
            <label class="form-label">Soort training</label>
            <select name="type1" class="form-select">
                <option value="cardio" selected>Cardio</option>
            </select>
        </div>

        <!-- Type oefening -->
        <div class="mb-3">
            <label class="form-label">Soort oefening</label>
            <select name="type2" class="form-select">
                <option value="lopen" selected>Lopen</option>
            </select>
        </div>

        <!-- Tijd -->
        <div class="mb-3">
            <label class="form-label">Tijd (minuten)</label>
            <input type="number" name="tijd" class="form-control" required>
        </div>

        <!-- Afstand -->
        <div class="mb-3">
            <label class="form-label">Afstand (m)</label>
            <input type="number" name="afstand" class="form-control" required>
        </div>

        <!-- Opslaan -->
        <button type="submit" class="btn btn-primary">Opslaan</button>

    </form>
</div>
</body>
</html>
