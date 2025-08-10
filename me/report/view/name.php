<article class='article'>
    <h1><?= $query ?></h1>
    <!--<pre><#?php print_r($res) ?></pre>-->

    <table class="vertical-row-table">
        <tr>
            <td>Antal tilltalsnamn (Kvinnor)</td>
            <td><?= $res['tilltal_k_antal'] ?></td>
        </tr>
        <tr>
            <td>Antal förnamn (Kvinnor)</td>
            <td><?= $res['fornamn_k_antal'] ?></td>
        </tr>
        <tr>
            <td>Antal tilltalsnamn (Män)</td>
            <td><?= $res['tilltal_m_antal'] ?></td>
        </tr>
        <tr>
            <td>Antal förnamn (Män)</td>
            <td><?= $res['fornamn_m_antal'] ?></td>
        </tr>
        <tr>
            <td>Antal efternamn</td>
            <td><?= $res['efternamn_antal'] ?></td>
        </tr>
        <tr>
            <td>Betydelse</td>
            <td><?= $res['betydelse'] ?></td>
        </tr>
    </table>
</article>