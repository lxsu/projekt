// ===========================================================================================
//
// README RaJ-FrameWork
//
// ===========================================================================================

1: Nerladdning

Du kan ladda ner ramverket RaJ från GitHub. Detta gör du lättast genom att clona ramverket genom
kommando:

    git clone https://github.com/Rojo13/projekt.git

Om du vill se källkoden eller av någon annan anledning vill ha tillgång till ramverkets filer,
går det bra att besöka https://github.com/Rojo13/raj-lydia


2: Installation

<<<<<<< HEAD
För att kunna installera ramverket, krävs det givetvis att du laddar upp ramverket mot FTP eller kör det lokalt. Du kan exempelvis använda dig av FileZilla om du skall ladda upp det mot en FTP alternativt WampServer om du skall köra det lokalt. Väl uppladdat så går du in under /module/install för att installera ditt ramverk. Innan du gör detta så måste du sätta rättigheter på två mappar. ./site/data samt ./themes. Vad det gäller mappen themes så är det viktigt att du väljer att rättigheterna är dem samma för mappen samt alla undermappar. Då ./data inte har några undermappar räcker det med att bara ställa in rättigheterna för just den. Det skall gå att skriva, läsa och ändra i filerna. Vid demo-installationen, användes chmod 777.

    chmod777 - ./data
    chmod777 - ./themes/ + undermappar.

Adress för att nå installation:

=======
>>>>>>> branch 'master' of https://github.com/Rojo13/projekt.git
    http://your.url/module/install

OBS!

Om du väljer att ladda upp den klonade mappen istället för att lägga innehållet direkt i root,
måste du ändra i .htaccess. Detta är av yttersta vikt.

Exempel, du laddar upp hela mappen (raj), adressen blir då
    
    http://your.url/raj/module/install

Denna sökväg måste läggas till, bytas ut, i .htaccess.


3: Modifiera

För att modifiera de mest basala delarna i ramverket; såsom logga, header, footer - krävs det främst en texteditor och en FTP-client. Det skadar dock inte med ett uns kunskap i HTML/CSS.

3.1: Byta logga:

Att byta logga är relativt enkelt. Det som kan vara lite klurigt är i vilken storlek loggan skall vara i. Under ramverkets uppbyggnad så är storlekarna 80x80 samt 110x90 testade för loggan. Dessa mått ser trevliga ut men det betyder inte att detta är de enda alternativ att välja mellan. Bredden kan troligen vara i avsevärt högre tal.

    # Ladda upp önskad logga i /site/themes/mytheme
    # För att få det att fungera direkt så döp filen till logo.png
    # Om du önskar annat namn så är det viktigt att du ändrar sökvägen till loggan i /site/config.php
    # I config ändrar du också om du vill använda en annan filtyp, exempelvis .jpg

3.2: Byta favicon:

Som standard är inställningarna att ramverket använder samma fil till både loggan och favicon. Din logga blir alltså på automatic även favicon. Om du vill ha olika bild, så går detta givetvis att ändra.

    # Öppna /site/config.php
    # Scrolla längst ner i filen för att hitta inställningarna.


Såhär ser inställningsraderna ut:

        ### 'favicon' => 'logo.png',
        ### 'logo' => 'logo.png',
        ### 'logo_width'  => 80,
        ### 'logo_height' => 80,


3.3: Ändra webbsidans titel/slogan:

Som standard så är headern/namnet på sidan "RaJ". Som slogan, vilket fortsätter som standard på samma rad, kommer "A PHP-based MVC-inspired CMF". Dessa rader kan du givetvis ändra till önskad text.

    # Öppna /site/config.php
    # Scrolla längst ner i filen för att hitta inställningarna.

Såhär ser inställningsraderna ut:

        ### 'header' => 'RaJ',
        ### 'slogan' => 'A PHP-based MVC-inspired CMF',

3.4: Modifiera footer

Att modifiera footern är minst lika lätt i RaJ-ramverket som tidigare inställningar. Footern är dock indelad i två olika områden. Det första området handlar om fri text. Här kan du exempelvis placera din copyright eller kontakt uppgift. Det andra området används som standar till länkar. 

    Copyright/kontakt:

    # Öppna /site/config.php
    # Scrolla ner i filen för att hitta inställningarna.

        Såhär ser inställningsraden ut:

            ### 'footer' => '<p>RaJ buildt on Lydia &copy; by Mikael Roos (mos@dbwebb.se)</p>',

    Länkar:

    # Öppna /themes/functions.php
    # Högst upp i filen hittar du raderna för länkarna

        Såhär ser inställningsradernas början ut:

            ### function get_tools() {
            ### global $raj;
            ### return <<<EOD
            ### <p>Tools: 
            ### <a href="http://validator.w3.org/check/referer">html5</a>
            ### <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
            ### <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>


4: Skapa en sida / Blogg

För att skapa en sida eller ett blogginlägg, använder du dig av kontrollern content. Med denna kontroller har du förutsättningar till att både skapa och editera sidor och blogginlägg. Viktigt att tänka på är dock att det INTE, genom denna funktion, går att ändra på de sidor som finns i navigeringsmenyn ("Om mig", "Blogg", "Gästbok"). Detta innebär att du varken kan lägga till eller ta bort denna typen av sidor via kontrollern. En annan viktig del i ditt skapande är att du är inloggad när du skall lägga till något nytt på sidan.

4.1 Blogg

Bloggens grund kommer färdig och det du troligen är mest intresserad av, är att fylla den med information som är vettig för just dig. Detta göra du, som tidigare nämnts, genom att logga in via:

    http://your.url/user/login

Efter att du fyllt i användaruppgifterna och är redo för att fylla bloggen med information, använder du:

    http://your.url/content/create

På denna sida kan du enkelt skapa inlägg till din blogg. Du fyller helt enkelt i; 

        titel - inläggets titel
        nyckel - exmpelvis "inläggets-titel-med-bindesstreck"
        innehåll - önskat innehåll
        typ - "post"

4.2 Sida

Precis som för bloggen måste du vara inloggad för att skapa en sida. Som tidigare nämts då loggar du in genom:

    http://your.url/user/login

Väl inloggad så gör du likt bloggen, gå in på 

    http://your.url/content/create

Och fyll i, precis som för bloggen

        titel - inläggets titel
        nyckel - exmpelvis "inläggets-titel-med-bindesstreck"
        innehåll - önskat innehåll
        typ - "page"

Skillnaden är dock att typen skall ändras så att det inte registreras som ett blogginlägg. Typen skall stå som "page", likt ovan beskrivning.
