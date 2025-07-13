<?php

$flashMessage = getFlashMessage();

?>
<h2 id="form">HTML formulär med POST</h2>

<?php if ($flashMessage) : ?>
    <div class="fail"><?= $flashMessage ?></div>
<?php endif; ?>

<form method="post" action="form_process.php">
    <fieldset>
        <legend>Anmäl dig!</legend>

        <p>
            <label>Namn:<br>
                <input type="text" name="name" placeholder="Skriv in ditt namn...">
            </label>
        </p>

        <p>
            <label>Adress:<br>
                <textarea name="address" placeholder="Skriv in din adress..."></textarea>
            </label>
        </p>

        <p>
            <label>
                Jag samtycker till allt, på heder och samvete.
                <input type="checkbox" name="check">
            </label>
        </p>

        <p>
            <input type="submit" value="Skicka" name="doit">
            <input type="reset" value="Rensa">
        </p>
    </fieldset>
</form>