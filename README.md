[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/ebT1wQO_)[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/ebT1wQO_)

## Landing Page
På vår startsida möts användarna av en lockande och informativ layout som ger en överblick över de senaste filmerna, populära recensioner och annan relevant information. Detta ger användarna en snabb sammanfattning av vad de kan förvänta sig när de utforskar vår webbplats.

## Utforska Filmer
Användarna har möjlighet att bläddra igenom en omfattande lista över filmer som är organiserade efter genre, popularitet eller utgivningsdatum. Genom att erbjuda olika sorteringar kan användarna hitta filmer som matchar deras intressen och preferenser med lätthet.

## Söka Efter Filmer
Vår avancerade sökfunktion tillåter användarna att söka efter specifika filmer baserat på titel och genre. Detta ger användarna möjlighet att snabbt hitta exakt vad de letar efter utan att behöva bläddra igenom hela filmkatalogen.

## Film Detaljsida
När användarna klickar på en specifik film får de tillgång till en detaljerad sida med ytterligare information, inklusive en utförlig beskrivning av filmen, betyg från andra användare, recensioner och eventuellt en trailer. Detta ger användarna en djupgående förståelse för filmen innan de bestämmer sig för att titta på den.

## Användarrecensioner
Registrerade användare kan dela sina åsikter genom att lämna recensioner och betyg för filmer. Dessa recensioner är synliga för andra användare och hjälper till att informera och vägleda dem i deras filmval.

## Användarhanterad Watchlist
Användarna kan skapa och hantera sin egen personliga watchlist med filmer de vill se. Genom att kunna markera filmer som sedda och lägga till eller ta bort filmer från sin watchlist får användarna en anpassad och bekväm upplevelse när de utforskar och planerar sina filmvisningar.

## Administratörsfunktioner
Administratörer har tillgång till en skyddad del av webbplatsen där de kan hantera recensioner, kommentarer och användare. De har även fullständig kontroll över filmregistret och kan lägga till, uppdatera eller ta bort filmer vid behov. Detta ger administratörerna möjlighet att upprätthålla kvaliteten och integriteten hos webbplatsens innehåll.

## Registrering och Inloggning
Användare har möjlighet att registrera sig för ett konto på webbplatsen för att få tillgång till funktioner som recensioner och watchlist. Inloggade användare får en personlig profil där de kan hantera sina uppgifter och aktiviteter på webbplatsen, vilket skapar en skräddarsydd och interaktiv upplevelse.

## Responsiv Design
Webbplatsen är utformad med en responsiv design för att säkerställa en optimal användarupplevelse oavsett enhet eller skärmstorlek. Detta gör det möjligt för användarna att njuta av samma fantastiska funktioner och innehåll oavsett om de använder en dator, mobiltelefon eller surfplatta.

## Navigation och Användarvänlighet
Genom att erbjuda en tydlig och intuitiv navigationsstruktur och användarvänliga gränssnitt gör vi det enkelt för användarna att hitta det de letar efter på vår webbplats. Tydligt märkta länkar och knappar ger enkel åtkomst till olika delar av webbplatsen och skapar en smidig och effektiv navigeringsupplevelse.

Med dessa olika funktioner strävar vi efter att skapa en engagerande och användarvänlig plattform för filmälskare där de kan upptäcka, utforska och interagera med sitt favoritinnehåll på ett meningsfullt sätt.era och dela sina filmupplevelser på ett enkelt och intuitivt sätt.

# UX Design och förarbete

 https://www.figma.com/file/vBvsvRYToJEMTxqFUp8J1i/grupp-5-u05?type=design&node-id=0-1&mode=design&t=wMrMr9QQdBnbYnAz-0

https://miro.com/app/board/uXjVNwKLKhk=/?share_link_id=402589806992 

https://docs.google.com/document/d/14ecM2N3SZRsWMBUQGdKj2NvmlMwQkd3C1750UK35KK0/edit

# Komma igång 

Förutsättningar för att starta projektet. 

Ett av följande operativsystem: macOS, Linux. På Windows rekommenderas WSL2.
PHP (version 7)
MySQL
composer bör vara installerat
git bör vara installerat
Kom igång med projektet
Klona projektet
För att klona projektet, gå till terminalen och skriv:

git clone https://github.com/chas-academy/u05-imdb-klon-u05-imdb-klon-grupp-5.git

Kör kommandot composer install i roten av ditt projektkatalog för att installera alla nödvändiga nödvändigheter.

(Valfritt)
Kör npm install om du avser att utveckla appen.

Konfiguration
Du behöver skapa en .env-fil och konfigurera den innan du kör Laravel. Det finns en .env.example-fil du kan använda som mall för konfigurationen.
Skriv in följande kommando för att göra en kopia av denna fil:

cp .env.example .env
Öppna .env-filen och ange dina databaskonfigurationer. Dessa variabler är prefixade med DB.

Du behöver också generera en appnyckel, skriv in:

php artisan key:generate
Databas
Vi måste göra en databasmigration innan appen kan hämta och spara data.

För att göra en databasmigration:

php artisan migrate
För att tömma databasen innan migration:

php artisan migrate:fresh
Vi tillhandahåller också en seeder för att fylla databasen med data så att du inte behöver göra det själv. Lägg bara till en --seed-flagga i slutet av migrationskommandot, så här:

php artisan migrate:fresh --seed
Kör appen
Vi kommer att använda Artisan-kommandot för att starta en lokal utvecklingsserver på http://127.0.0.1:8000:

php artisan serve

