<?php

$query = htmlentities($query ?? "") ?? null;

?>
<main class="main">
    <article class="article">
        <h1>Sök namndatabasen</h1>

        <form>
            <fieldset>
                <legend>Sök efter ett namn eller en del av ett namn</legend>
                
                <div class="search-bar">
                    <input type="text" name="query" placeholder="Sök..." value="<?= $query ?>" required><input type="submit" name="doit" value="Search">
                </div>
            </fieldset>
        </form>

