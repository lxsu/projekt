// ===========================================================================================
//
// README RaJ-FrameWork
//
// ===========================================================================================

1: Nerladdning

Du kan ladda ner ramverket RaJ fr�n GitHub. Detta g�r du l�ttast genom att clona ramverket genom
kommando:

    git clone https://github.com/Rojo13/projekt.git

Om du vill se k�llkoden eller av n�gon annan anledning vill ha tillg�ng till ramverkets filer,
g�r det bra att bes�ka https://github.com/Rojo13/raj-lydia


2: Installation

<<<<<<< HEAD
F�r att kunna installera ramverket, kr�vs det givetvis att du laddar upp ramverket mot FTP eller k�r det lokalt. Du kan exempelvis anv�nda dig av FileZilla om du skall ladda upp det mot en FTP alternativt WampServer om du skall k�ra det lokalt. V�l uppladdat s� g�r du in under /module/install f�r att installera ditt ramverk. Innan du g�r detta s� m�ste du s�tta r�ttigheter p� tv� mappar. ./site/data samt ./themes. Vad det g�ller mappen themes s� �r det viktigt att du v�ljer att r�ttigheterna �r dem samma f�r mappen samt alla undermappar. D� ./data inte har n�gra undermappar r�cker det med att bara st�lla in r�ttigheterna f�r just den. Det skall g� att skriva, l�sa och �ndra i filerna. Vid demo-installationen, anv�ndes chmod 777.

    chmod777 - ./data
    chmod777 - ./themes/ + undermappar.

Adress f�r att n� installation:

=======
>>>>>>> branch 'master' of https://github.com/Rojo13/projekt.git
    http://your.url/module/install

OBS!

Om du v�ljer att ladda upp den klonade mappen ist�llet f�r att l�gga inneh�llet direkt i root,
m�ste du �ndra i .htaccess. Detta �r av yttersta vikt.

Exempel, du laddar upp hela mappen (raj), adressen blir d�
    
    http://your.url/raj/module/install

Denna s�kv�g m�ste l�ggas till, bytas ut, i .htaccess.


3: Modifiera

F�r att modifiera de mest basala delarna i ramverket; s�som logga, header, footer - kr�vs det fr�mst en texteditor och en FTP-client. Det skadar dock inte med ett uns kunskap i HTML/CSS.

3.1: Byta logga:

Att byta logga �r relativt enkelt. Det som kan vara lite klurigt �r i vilken storlek loggan skall vara i. Under ramverkets uppbyggnad s� �r storlekarna 80x80 samt 110x90 testade f�r loggan. Dessa m�tt ser trevliga ut men det betyder inte att detta �r de enda alternativ att v�lja mellan. Bredden kan troligen vara i avsev�rt h�gre tal.

    # Ladda upp �nskad logga i /site/themes/mytheme
    # F�r att f� det att fungera direkt s� d�p filen till logo.png
    # Om du �nskar annat namn s� �r det viktigt att du �ndrar s�kv�gen till loggan i /site/config.php
    # I config �ndrar du ocks� om du vill anv�nda en annan filtyp, exempelvis .jpg

3.2: Byta favicon:

Som standard �r inst�llningarna att ramverket anv�nder samma fil till b�de loggan och favicon. Din logga blir allts� p� automatic �ven favicon. Om du vill ha olika bild, s� g�r detta givetvis att �ndra.

    # �ppna /site/config.php
    # Scrolla l�ngst ner i filen f�r att hitta inst�llningarna.


S�h�r ser inst�llningsraderna ut:

        ### 'favicon' => 'logo.png',
        ### 'logo' => 'logo.png',
        ### 'logo_width'  => 80,
        ### 'logo_height' => 80,


3.3: �ndra webbsidans titel/slogan:

Som standard s� �r headern/namnet p� sidan "RaJ". Som slogan, vilket forts�tter som standard p� samma rad, kommer "A PHP-based MVC-inspired CMF". Dessa rader kan du givetvis �ndra till �nskad text.

    # �ppna /site/config.php
    # Scrolla l�ngst ner i filen f�r att hitta inst�llningarna.

S�h�r ser inst�llningsraderna ut:

        ### 'header' => 'RaJ',
        ### 'slogan' => 'A PHP-based MVC-inspired CMF',

3.4: Modifiera footer

Att modifiera footern �r minst lika l�tt i RaJ-ramverket som tidigare inst�llningar. Footern �r dock indelad i tv� olika omr�den. Det f�rsta omr�det handlar om fri text. H�r kan du exempelvis placera din copyright eller kontakt uppgift. Det andra omr�det anv�nds som standar till l�nkar. 

    Copyright/kontakt:

    # �ppna /site/config.php
    # Scrolla ner i filen f�r att hitta inst�llningarna.

        S�h�r ser inst�llningsraden ut:

            ### 'footer' => '<p>RaJ buildt on Lydia &copy; by Mikael Roos (mos@dbwebb.se)</p>',

    L�nkar:

    # �ppna /themes/functions.php
    # H�gst upp i filen hittar du raderna f�r l�nkarna

        S�h�r ser inst�llningsradernas b�rjan ut:

            ### function get_tools() {
            ### global $raj;
            ### return <<<EOD
            ### <p>Tools: 
            ### <a href="http://validator.w3.org/check/referer">html5</a>
            ### <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
            ### <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>


4: Skapa en sida / Blogg

F�r att skapa en sida eller ett blogginl�gg, anv�nder du dig av kontrollern content. Med denna kontroller har du f�ruts�ttningar till att b�de skapa och editera sidor och blogginl�gg. Viktigt att t�nka p� �r dock att det INTE, genom denna funktion, g�r att �ndra p� de sidor som finns i navigeringsmenyn ("Om mig", "Blogg", "G�stbok"). Detta inneb�r att du varken kan l�gga till eller ta bort denna typen av sidor via kontrollern. En annan viktig del i ditt skapande �r att du �r inloggad n�r du skall l�gga till n�got nytt p� sidan.

4.1 Blogg

Bloggens grund kommer f�rdig och det du troligen �r mest intresserad av, �r att fylla den med information som �r vettig f�r just dig. Detta g�ra du, som tidigare n�mnts, genom att logga in via:

    http://your.url/user/login

Efter att du fyllt i anv�ndaruppgifterna och �r redo f�r att fylla bloggen med information, anv�nder du:

    http://your.url/content/create

P� denna sida kan du enkelt skapa inl�gg till din blogg. Du fyller helt enkelt i; 

        titel - inl�ggets titel
        nyckel - exmpelvis "inl�ggets-titel-med-bindesstreck"
        inneh�ll - �nskat inneh�ll
        typ - "post"

4.2 Sida

Precis som f�r bloggen m�ste du vara inloggad f�r att skapa en sida. Som tidigare n�mts d� loggar du in genom:

    http://your.url/user/login

V�l inloggad s� g�r du likt bloggen, g� in p� 

    http://your.url/content/create

Och fyll i, precis som f�r bloggen

        titel - inl�ggets titel
        nyckel - exmpelvis "inl�ggets-titel-med-bindesstreck"
        inneh�ll - �nskat inneh�ll
        typ - "page"

Skillnaden �r dock att typen skall �ndras s� att det inte registreras som ett blogginl�gg. Typen skall st� som "page", likt ovan beskrivning.
