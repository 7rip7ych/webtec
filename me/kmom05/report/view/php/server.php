<?php

// Get the loading time of the page
$timestampFirst = $_SERVER['REQUEST_TIME_FLOAT'];
$timestampLast = microtime(true);
$diff = $timestampLast - $timestampFirst;
$loadTime = round($diff * 1000, 3);

// Get current page controller
$requestUri = $_SERVER['SCRIPT_NAME'];
$pageController = basename($requestUri);
?>

<h2>Detaljer om requesten med SERVER</h2>

<table class="table">
    <tr>
        <th>Nyckel</th>
        <th>Värde</th>
    </tr>
    <tr>
        <td>SERVER_SOFTWARE</td>
        <td><?= htmlentities($_SERVER['SERVER_SOFTWARE']) ?></td>
    </tr>
    <tr>
        <td>SERVER_ADDR</td>
        <td><?= htmlentities($_SERVER['SERVER_ADDR']) ?></td>
    </tr>
    <tr>
        <td>REQUEST_TIME_FLOAT</td>
        <td><?= htmlentities($_SERVER['REQUEST_TIME_FLOAT']) ?></td>
    </tr>
    <tr>
        <td>REQUEST_METHOD</td>
        <td><?= htmlentities($_SERVER['REQUEST_METHOD']) ?></td>
    </tr>
    <tr>
        <td>REQUEST_URI</td>
        <td><?= htmlentities($_SERVER['REQUEST_URI']) ?></td>
    </tr>
    <tr>
        <td>SCRIPT_NAME</td>
        <td><?= htmlentities($_SERVER['SCRIPT_NAME']) ?></td>
    </tr>
</table>

<p>Sidans laddningstid är <?= $loadTime ?> ms (så här långt).</p>

<p>Sidkontrollern som laddades heter '<?= $pageController ?>'.</p>