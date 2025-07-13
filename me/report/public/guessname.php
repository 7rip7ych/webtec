<?php
include('../config/config.php');

$title = "Gissningsspel";

$nameExplanations = getNameExplanation();
$name = array_rand($nameExplanations, 1);
$explanation = $nameExplanations[$name];
$_SESSION["name"] = $name;


$hint = $name[0] . str_repeat("*", strlen($name) - 1);

include('../view/header.php');

?>

<main class="main">
    <h1><?= $title ?></h1>
    <form method="post" action="guess_process.php">
        <fieldset>
            <legend>Gissa namnet!</legend>
            <p style="display:inline-block;"><?= $explanation ?></p>
            <div class="hint">
                <span><?= $hint ?></span>
                <button>Hint</button>
            </div>
            <p>
                <label>Svar:<br>
                    <input type="text" name="name" placeholder="namn">
                </label>
            </p>
            <p>
                <input type="submit" value="Skicka" name="doit">
                <input type="reset" value="Rensa">
            </p>
        </fieldset>
    </form>
</main>

<?php include('../view/footer.php');