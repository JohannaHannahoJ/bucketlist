# Laboration 2, introduktion till PHP
Det här prijektet är en del av kursen **Webbutveckling för WordPress** som ges vid Mittuniversitetets webbutvecklingsprogram.

Syftet med laborationen är att skapa en webbplats med HTML, CSS, objektorienterad PHP och databasanslutning.

**Länk till webbplatsen**: [Min bucketlist](https://studenter.miun.se/~joha2102/dt209g/bucketlist/index.php)
**ER- och UML-diagram**: Se mappen `documentation/`.

## Webbplatsens innehåll
Webbplatsen har tre sidor:
- Startsida: beskriver uppgiften och min upplevelse av PHP
- Bucketlist: sida där man kan lägga till saker till en bucketlist via formulär
- AI: sida som beskriver om jag har använt AI-verktyg för att lösa uppgiften och mina slutsatser av det.

## Databasanslutning
Projektet använder separata konfigurationsfiler för lokal utveckling och produktionsmiljö.
- `config.local.php` innehåller anslutningsuppgifter för den lokala databasen (XAMPP).
- `config.production.php` innehåller anslutningsuppgifter för databasen på Mittuniversitetets server.
Filerna är exkluderade från versionshantering via `.gitignore` för att skydda databasuppgifter.