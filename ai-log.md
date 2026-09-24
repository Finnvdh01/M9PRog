# AI log

## Les 1

**Wat heb ik gedaan**
Docker omgeving opgezet met WordPress, MariaDB en phpMyAdmin. Themamap `webshop-theme` gemaakt
en via een volume gekoppeld aan wp-content/themes.

**Wat begrijp ik van de AI output**
- style.css en de HTML van de homepage snap ik
- Hoe WordPress het theme inlaadt snap ik nog niet goed
- De productkaarten staan nu vast in de HTML, dat moet later uit WordPress komen

**Test**
- Getest: `docker compose up -d` en daarna localhost:8080 en localhost:8082
- Verwacht: WordPress installatie scherm en phpMyAdmin login
- Resultaat: werkt, alle drie containers draaien (`docker compose ps`)
- Fout: phpMyAdmin startte niet, poort 8081 was al in gebruik op mijn pc. Opgelost door phpMyAdmin op poort 8082 te zetten.
- Ook Docker Desktop stond nog niet aan, eerst opgestart.

## Les 2

**AI output bekeken**
- `style.css`: snap ik, maar de theme header was niet compleet (geen versie, text domain en auteur). Aangevuld.
- `index.php`: is gewoon een HTML pagina. Werkt, maar mist nog `wp_head()` en haalt niks uit WordPress. Moet later vervangen worden.
- De stylesheet wordt met een `<link>` tag ingeladen, dat moet volgens mij via functions.php (les 3).

**Eigen aanpassing**
Hover effect toegevoegd op de knoppen (wordt zwart) en op de productkaarten (oranje rand).
Zonder hover zag je niet goed dat je ergens op kon klikken.

**Test**
- Getest: theme activeren via Weergave > Thema's en homepage bekijken
- Verwacht: "Webshop Theme" met screenshot in de lijst, homepage met hero en drie kaarten
- Resultaat: klopt, hover werkt ook
- Fouten: geen

## Les 3

**Wat heb ik gedaan**
- `functions.php` gemaakt. De css en js worden nu geladen met `wp_enqueue_style()` en `wp_enqueue_script()` in plaats van een `<link>` tag.
- `add_theme_support( 'post-thumbnails' )` toegevoegd. Hierdoor krijg je bij pagina's en berichten het vak "Uitgelichte afbeelding" in de editor. Die kan ik later gebruiken voor productfoto's.
- `front-page.php` en `page.php` gemaakt, allebei met een testkop bovenaan zodat je ziet welke template gebruikt wordt.

**Template hierarchy**
- Homepage (statische voorpagina): WordPress zoekt eerst `front-page.php`, dan `home.php` / `page.php`, en als laatste `index.php`.
- Gewone pagina: `page-{slug}.php`, `page-{id}.php`, `page.php`, `singular.php`, `index.php`.
- `index.php` is dus altijd de fallback.

**Test**
- Getest: pagina's "Home" en "Over ons" aangemaakt, Home ingesteld als voorpagina (Instellingen > Lezen)
- Verwacht: home toont "Template: front-page.php", over ons toont "Template: page.php"
- Resultaat: klopt. In de broncode staan `webshop-style-css` en `webshop-script-js`, dus enqueueing werkt. In de console staat "Webshop theme geladen".
- Fouten: geen
