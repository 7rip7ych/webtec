<?php
include('../config/config.php');

$title = 'Om mig';
date_default_timezone_set('Europe/Stockholm');
$today = date('Y-m-d H:i:s');
$weekday = date('N');
$weekdays = array("error", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
$veckodag = $weekdays[$weekday];
$me_class = "active";
$about_class = "";
$report_class = "";
$link_class = "";
$today_class = "";

include('../view/header.php');
?>

<main>
    <h1>Om Mig Själv</h1><hr>
    <img src="img/7rip7ych.gif" alt="7rip7ych">
    <p>Mitt developer namn är 7rip7ych. Namnet är inspirerat av triptych målningar.
         Likt triptych målningar som sätts ihop för att skapa en gemensam bild ser jag på programmering.
         Programmering är som flera tavlor som sätts ihop för att visa användaren en gemensam bild.
         Därför valde jag namnet 7rip7ych, för att det är min uppgift som utvecklare att sammanfoga tavlorna till ett konstverk.
        <br>Symbolen i min logga är en triskele eller Odens horn. Den symboliserar Odens strävan efter kunskap.
         Som någon som konstant söker att förbättra sig och lära sig nya saker var denna symbolen en <i>perfect fit</i>.
         Denna symbol har även den tre delar vilket passar perfekt för när det kommer till webbprogrammering
          i alla fall så är det i min åsikt uppdelat i tre delar: struktur (HTML), utseende (CSS) och funktion (Javascript, PHP, SQL, etc.).
        </p>
    <img src="img/real_me.jpg" width="300" class="me" alt="Bild på mig">
    <p>Nu kommer lite om mig själv inte mitt brand. Jag är 19 år. Jag började programmera på gymnasiet.
         Jag lärde mig själv grunderna i HTML, CSS och Javascript då. Jag har även börjat lära mig C# och spelutveckling med Unity.
          <br>Jag tog student i inriktning science (spetsprogram) på Europaskolan Strängnäs. Mitt gymnasiearbete var ett program jag skrev åt scania.
          Detta skrev jag för det mesta i javascript så det är lite svårt att vänja sig med php. 
         Nu pluggar jag hemifrån.<br>Jag har börjat på kurspaketet Webbutveckling och programmering för jag trodde det skulle var lagom hastighet.
         Men jag har gjort klart allt förutom sista uppgiften i python kursen två veckor in.
          Jag kan inte göra sista uppgiften för den håller på att redigeras. Och det är för sent för att anmäla mig till nån annan kurs.
         Men jag har skickat in en anmälan om att börja på webbprogrammering programmet i vår. Och då behöver jag läsa igen den här kursen.
         Så jag tänkte att det var lika bra att göra den här kursen eftersom jag har kursmaterialet och gott om tid.
         Sen om jag kommer in kan jag lämna in allt och vara i fas med de andra eleverna. Och om jag inte kommer in så kommer jag ändå fått
          ny kunskap så det är inte som om jag slösat bort min tid.</p>
</main>

<?php include('../view/footer.php') ?>