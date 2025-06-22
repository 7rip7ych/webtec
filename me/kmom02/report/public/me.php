<?php
include('../config/config.php');

$title = 'Om mig';
$me_class = "active";
$about_class = "no";
$report_class = "no";
$link_class = "no";
$today_class = "no";
$assign_class = "no";
$tryout_class = "no";

include('../view/header.php');
?>
<div class="two-col-layout">
  <main class="main">
      <article class="article">
        <header>
          <h1>Om Mig Själv</h1>
          <p class="author">Skriven av 7rip7ych, uppdaterad <time datetime="2024-09-28">2024-09-28</time>.</p>
        </header>
        
        <figure class="figure right">
          <img src="img/7rip7ych.gif" alt="7rip7ych">
          <figcaption>7rip7ych</figcaption>
        </figure>
        
        <p>Mitt developer namn är 7rip7ych. Namnet är inspirerat av triptych målningar.
            Likt triptych målningar som sätts ihop för att skapa en gemensam bild ser jag på programmering.
            Programmering är som flera tavlor som sätts ihop för att visa användaren en gemensam bild.
            Därför valde jag namnet 7rip7ych, för att det är min uppgift som utvecklare att sammanfoga tavlorna till ett konstverk.
            <br>Symbolen i min logga är en triskele eller Odens horn. Den symboliserar Odens strävan efter kunskap.
            Som någon som konstant söker att förbättra sig och lära sig nya saker var denna symbolen en <i>perfect fit</i>.
            Denna symbol har även den tre delar vilket passar perfekt för när det kommer till webbprogrammering
              i alla fall så är det i min åsikt uppdelat i tre delar: struktur (HTML), utseende (CSS) och funktion (Javascript, PHP, SQL, etc.).
        </p>
        <figure class="figure left">
          <img src="img/real_me.jpg" width="300" class="me" alt="Bild på mig">  
          <figcaption>#me</figcaption>
        </figure>
        
        <p>Nu kommer lite om mig själv inte mitt brand. Jag är 19 år. Jag började programmera på gymnasiet.
            Jag lärde mig själv grunderna i HTML, CSS och Javascript då. Jag har även börjat lära mig C# och spelutveckling med Unity.
              
            <br>Jag tog student i inriktning science (spetsprogram) på Europaskolan Strängnäs. Mitt gymnasiearbete var ett program jag skrev åt scania.
              Detta skrev jag för det mesta i javascript så det är lite svårt att vänja sig med php. 
            Nu pluggar jag hemifrån.
            <br>Jag har börjat på kurspaketet Webbutveckling och programmering för jag trodde det skulle var lagom hastighet.
            Men jag har gjort klart allt förutom sista uppgiften i python kursen två veckor in.
              Jag kan inte göra sista uppgiften för den håller på att redigeras. Och det är för sent för att anmäla mig till nån annan kurs.
            Men jag har skickat in en anmälan om att börja på webbprogrammering programmet i vår. Och då behöver jag läsa igen den här kursen.
            Så jag tänkte att det var lika bra att göra den här kursen eftersom jag har kursmaterialet och gott om tid.
            Sen om jag kommer in kan jag lämna in allt och vara i fas med de andra eleverna. Och om jag inte kommer in så kommer jag ändå fått
              ny kunskap så det är inte som om jag slösat bort min tid.</p>

        <?php include('../view/byline.php') ?>
      </article>
  </main>
  <aside class="aside">
    <h3>Se mer</h3>
    <p><a href="https://github.com/7rip7ych">GitHub: 7rip7ych</a></p>
    <p><a href="https://codepen.io/7rip7ych">Codepen: 7rip7ych</a></p>
    <p>Mail: <a href="mailto:dev.7ryp7ych@gmail.com">dev.7ryp7ych@gmail.com</a></p>
    <p><a href="https://axis.neocities.org/">Ofärdigt tidigare program</a></p>
  </aside>
</div>

<?php include('../view/footer.php') ?>