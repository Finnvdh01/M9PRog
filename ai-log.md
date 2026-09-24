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
- Fout: eerst vergeten `.env` aan te maken, database kon niet verbinden. Opgelost door `.env.example` te kopieren.
