<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <!-- hier komt een dropdown -->
                <select id="type" name="type">
                    <option value="achtbaan">achtbaan</option>
                    <option value="draaiend">draaiende attractie</option>
                    <option value="kinder">kinderattractie</option>
                    <option value="horeca">restaurant, horeca etc</option>
                    <option value="show">parkshow</option>
                    <option value="water">waterattractie</option>
                    <option value="overig">overig</option>
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
                <label for="prioriteit">Prioriteit:</label>
                <input type="checkbox" name="prio" id="prioriteit">
            </div>
            <div class="form-group">
            <label for="extra">Extra info:</label>
                <textarea name="extra" id="extra" class="form-input"></textarea>
            </div>
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
