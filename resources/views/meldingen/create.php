<?php require_once __DIR__.'/../../../config/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once __DIR__.'/../components/head.php'; ?>
</head>

<body>

    <?php require_once __DIR__.'/../components/header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="<?php echo $base_url; ?>/app/Http/Controllers/meldingenController.php" method="POST">

            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type">
                    <option value="">-kies type-</option>
                    <option value="achtbaan">Achtbaan</option>
                    <option value="draaiend">Draaiend</option>
                    <option value="kinder">Kinder</option>
                    <option value="horeca">Horeca</option>
                    <option value="show">Show</option>
                    <option value="water">Water</option>
                    <option value="overig">Overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>

            <div class="form-group">
            <input type="checkbox" name="prioriteit">
            <label for="prioriteit">Is het een prioriteit ?:</label>
            </div>

            <div class="form-group">
            <label for="overig">Overig info:</label>
            <textarea name="overig"id="overig"class="form-input"rows="4"></textarea>
            </div>

            <input type="submit" value="Verstuur melding">



        </form>
    </div>

</body>

</html>
