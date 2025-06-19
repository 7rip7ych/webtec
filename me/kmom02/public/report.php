<?php
include('../config/config.php');

$title = 'Redovisning';
$me_class = "no";
$about_class = "no";
$report_class = "active";
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
                <h1>Redovisning</h1>
            </header>
            
            <h2 id="kmom01">kmom01</h2>

            <ul>
                <li>Vilken utvecklingsmiljö använder du (operativsystem, texteditor, terminal, mm)?</li>
                <li>Gick det bra att installera labbmiljön eller var det något som krånglade?</li>
                <li>Är du bekant med terminalen och Unix-kommandon sedan tidigare?</li>
                <li>Är du bekant med HTML, CSS och PHP sedan tidigare eller har du jobbat med liknande tekniker?</li>
                <li>Gick det bra att komma i gång med kursmomentet rent allmänt eller var det något som var lurigt,
                    svårt eller utmanande?</li>
                <li>Vad är din TIL för detta kmom?</li>
            </ul> 
            <p>
                Jag använder operativsystemet Windows 11 och sedan har jag installerat WSL och använder Ubuntu terminalen.
                Text redigeraren jag använder är VSCode. Vilken webbläsare jag använder varierar lite;
                jag använder Firefox developers edition när jag skriver och testar kod, Opera gx eller Firefox när jag gör nåt annat
                och google chrome som backup ifall mina tre första alternativ inte duger. Allt gick bra med labbmiljön.
                Jag är bara bekant med ubuntu terminalen och unix-kommandon sen bth's python kurs som jag går nu.
                Jag har jobbat en del med HTML, CSS och Javascript men det är första gången jag jobbar med PHP.
                Det jag har lärt mig hittills är begränsat till php. Jag var lite förvirrad med php i början för vi skapade php filer
                men skrev bara html i dem!? Men det verkar vara väldigt användbart och lättare än javascript.
                Jag gillar speciellt att man kan återanvända delar av sidor och att det är lätt att infoga php element i html.
                Jag är inte så förtjust i syntaxen men jag lär väl vänja mig med den. Jag har ännu inte förstått exakt varför
                just php används men det förväntar jag mig förstå i framtiden och jag nöjer mig idag med att veta mer om php än 
                jag gjorde igår.
            </p>
            <br>
            <h2 id="kmom02">kmom02</h2>
            <ul>
                <li>Berätta om din upplevelse att jobba med styling och CSS, hur kändes det?</li>
                <li>Försök reflektera över vilka eventuella svårigheter som finns för en nybörjare att komma igång med CSS.</li>
                <li>Är du nöjd med utseendet på din webbplats eller är det sakr du hade velat ändra på?</li>
                <li>Vilken är din TIL för detta kmom?</li>
            </ul>
            <p>Det här är varken första eller sista gången jag jobbar med css och jag bara beskriva mina tankar om css som ett love-hate relationship. 
                Jag älskar att ge min sida en visuellt trevlig design och det är kul att designa. Dessutom är css mer 'rewarding' än annan kod eftersom man ser
                 ser det hela tiden man är inne på sidan. Det är mer att man skapar något och säger till datorn att visa det istället för att bara säga till datorn att göra något.
                 Men det är ändå inte så att jag älskar att jobba med css. Det tar så mycket tid och kraft att skriva kod som ändå inte är essentiellt för programmet.
                  Varje element behöver skrivas om hundra gånger för att få det rätt och så behöver man tänka på om konstanter ändras (som viewporten eller zoom mängden). 
                  Så att jobba med det här elementet var tog mycket längre tid än kmom01. Det var inte heller jätte kul att min sidas utseende styrdes så mycket men jag förstår varför
                   och det hade nog inte varit ett bra avsnitt annars. 
                <br><br>
                De största svårigheterna med css är att det inte finns något tydligt rätt svar. I dem andra språken jag har skrivit så finns det alltid rätt och fel svar t.ex. 
                om jag säger åt programmet att skriva ut 2+2 så är 4 rätt svar och allt annat är fel. Om jag skriver om en div i css vad är då rätt svar på width=_? Andra 
                svårigheter inkluderar: väldigt många funktioner, svårt att koppla kod till output vilket också ger svårigheter att felsöka och allra största hindret: att göra 
                så att webbsidan anpassar sig efter viewport, webbläsare, zoom-inställning, osv.
                <br>
                För tillfället ser min hemsida hyfsad ut men det finns en del som behöver ändras och den behöver ändras så att den anpassar sig efter framförallt fönstrets storlek och enheten.
                <br>
                Jag lärde mig att det är väldigt kul att göra ett "crazy" utseende på webbsida. I vanliga fall behöver jag tänka och
                 testa mig fram för att hitta ett bra utseende men att bara följa min impulser och ha en 'klottersida' var roligt.
            </p>
            <br>
            <h2 id="kmom03">kmom03</h2>
            <ul>
                <li>Hur är din uppfattning om programmeringsspråket PHP så här långt?</li>
                <li>Hur känns det att bygga webbplatsen med strukturen av sidkontroller och vyer?</li>
                <li>Kan du säga hur bekväm du är med att använda grundkonstruktionerna i PHP med variabler, if, loopar
                    och formulär med GET och querysträngen samt SERVER med mera, eller var ser du de svåra passagerna?</li>
                <li>Berätta om hur du löste uppgiften och hur nöjd du är med resultatet. Berätta även om du försökte på någon av extrauppgifterna.</li>
                <li>Vilken är din TIL för detta kmom?</li>
            </ul>
            <p>Här kommer redovisningstexten för detta kursmoment.</p>
            <br>
            <h2 id="kmom04">kmom04</h2>
            <ul>
                <li>Hur kändes det att jobba med datastrukturer i arrayer?</li>
                <li>Hur tänker du kring funktionern och hittade du mer kod som du valde att strukturera i funktioner?</li>
                <li>Kan du se skillnaden på HTML formulär med GET och POST?</li>
                <li>Gick det bra när du jobbade med SESSION?</li>
                <li>Berätta om hur du löste uppgiften och hur nöjd du är med resultatet.
                    Berätta även om du försökte på någon av extrauppgifterna.</li>
                <li>Vilken är din TIL för detta kmom?</li>
            </ul>
            <p>Här kommer redovisningstexten för detta kursmoment.</p>
            <br>
            <h2 id="kmom05">kmom05</h2>
            <ul>
                <li>Var det lätt att förstå SQL eller kändes det som en helt ny teknik?</li>
                <li>Var detta din första bekantskap med databaser och SQL,
                    eller har du tidigare kunskaper som du kan relatera till?</li>
                <li>Hur gick det att utföra övningen med SQLite och SQL, var det något du fastnade på?</li>
                <li>Hur gick det med övningarna i PHP PDO och SQLite/SQL, var det något som kändes utmanade?</li>
                <li>Berätta om hur du löste uppgiften och hur nöjd du är med resultatet.
                    Berätta även om du försökte på någon av extrauppgifterna.</li>
                <li>Vilken är din TIL för detta kmom?</li>
            </ul>
            <p>Här kommer redovisningstexten för detta kursmoment.</p>
            <br>

            <h2 id="kmom06">kmom06</h2>
            <ul>
                <li>Berätta hur det var att jobba med konceptet kring CRUD.</li>
                <li>Berätta hur det var att jobba med inloggning i webbplatsen, vad tänker du om det?</li>
                <li>Berätta om hur nöjd du är med den koden du skapat i din me/report och ser du någon förbättringspotential?</li>
                <li>Vilken är din TIL för detta kmom?</li>
            </ul>
            <p>Här kommer redovisningstexten för detta kursmoment.</p>
            <br>

            <h2 id="kmom10">kmom10</h2>
            <ol>
                <li>För varje krav du implementerat, dvs 1-3, 4, 5, 6, skriver du ett textstycke om
                    ca 5-10 meningar där du beskriver vad du gjort och hur du tänkt. 
                    Poängsättningen tar sin start i din text så se till att skriva väl för att undvika poängavdrag. 
                    Missar du att skriva/dokumentera din lösning så blir det 0 poäng.
                    Du kan inte komplettera en inlämning för att få högre betyg.</li>
                <li>Skriv ett allmänt stycke om hur projektet gick att genomföra. 
                    Problem/lösningar/strul/enkelt/svårt/snabbt/lång tid, etc. 
                    Var projektet lätt eller svårt? Tog det lång tid? 
                    Vad var svårt och vad gick lätt? 
                    Var det ett bra och rimligt projekt för denna kursen?</li>
                <li>Avsluta med ett sista stycke med dina tankar om kursen och 
                    vad du anser om materialet och handledningen (ca 5-10 meningar). 
                    Ge feedback till lärarna och förslå eventuella förbättringsförslag till kommande kurstillfällen. 
                    Är du nöjd/missnöjd? Kommer du att rekommendera kursen till dina vänner/kollegor? 
                    På en skala 1-10, vilket betyg ger du kursen?</li>
            </ol>
            <p>Här kommer redovisningstexten för detta kursmoment.</p>
            <?php include('../view/byline.php') ?>
        </article>
    </main>

    <aside class="aside">
        <div class="index">
            <ul class="index-list">
                <li>Index</li>
                <li><a href="#kmom01">kmom01</a></li>
                <li><a href="#kmom02">kmom02</a></li>
                <li><a href="#kmom03">kmom03</a></li>
                <li><a href="#kmom04">kmom04</a></li>
                <li><a href="#kmom05">kmom05</a></li>
                <li><a href="#kmom06">kmom06</a></li>
                <li><a href="#kmom10">kmom10</a></li>
                <li><a href="https://dbwebb.se/kurser/webtec-v2/redovisa">Hur man ska redovisa</a></li>
            </ul>
        </div>
    </aside>
</div>

<?php include('../view/footer.php') ?>