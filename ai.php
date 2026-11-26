<?php 
$title = "AI";
$currentPage = "ai";
require_once 'config.php';
require_once 'includes/header.php'; 
?>
<div class="content-text">
        <h1>Så här har jag använt mig av AI i uppgiften</h1>
        <p class="ingress">
            Jag har framför allt använt ChatGPT som ett bollplank för att förstå, 
            lösa problem och komma vidare i utvecklingen. Jag har inte alltid haft 
            full koll på lösningarna från början, men genom att ställa följdfrågor 
            och testa mig fram har jag fått en bättre förståelse för hur koden fungerar.
        </p>
        <p>
            Jag tog hjälp av ChatGPT för att utforma databasanslutningen och hanteringen 
            av databasuppgifterna. Jag var osäker på om jag borde använda en separat 
            .env-fil eller någon annan lösning för att skydda uppgifterna. Med hjälp av 
            ChatGPT kom jag fram till att använda separata konfigurationsfiler för lokal 
            utveckling och produktionsmiljö. Dessa filer undantas från versionshanteringen 
            med hjälp av .gitignore, så att känsliga anslutningsuppgifter inte publiceras 
            på GitHub.
        </p>
        <p>
            Jag fick även hjälp med att strukturera databasanslutningen med PDO i en separat 
            PHP-klass (Database), vilket gör koden mer organiserad och återanvändbar.
        </p>
        <p>
            I exempel från kursmaterialet användes en destructor för att stänga 
            databasanslutningen. Eftersom projektet använder PDO fick jag förklarat att 
            anslutningen stängs automatiskt när den inte längre används. Jag valde därför att 
            inte skapa en destructor.
        </p>
        <p>
            Jag fick även problem med felmeddelanden som låg kvar i formuläret efter att jag 
            hade förbättrat valideringen. Med hjälp av ChatGPT kunde jag undersöka problemet 
            och hitta ett sätt att kontrollera om formuläret hade skickats med hjälp av 
            $_SERVER['REQUEST_METHOD']. Det gjorde att jag kunde skilja på när sidan laddades 
            och när formuläret faktiskt skickades.
        </p>
</div>
<?php require_once 'includes/footer.php'; ?>