# marmalade :: Piwik

Integriert den Piwik-Trackingcode in OXID eShop

---

## Installation / Config

- Backup von Shop und Datenbank erstellen

- Dateien/Ordner des Repositories im Shop in das folgende Verzeichnis kopieren
  `modules/marm/piwik/`

- in composer.json autoload -> psr4 section hinzufügen
  "Marm\\Piwik\\": "./source/modules/marm/piwik"

- in der console: composer dump-autoload -o

- aktivieren Sie das Modul im Backend

- PIWIK-Daten eintragen in 'Stammdaten > Grundeinstellungen > Piwik'

- tmp-Ordner leeren

Wenn 'Stammdaten > Grundeinstellungen > Piwik' nicht sichtbar ist, aus Admin-Bereich ausloggen und erneut einloggen.

## Change Log

1. Added "Help Icons" Submitted By Marcus Pleintinger on 18.10.2012

2. Fixed price format Submitted By Andreas Pollak on 25.10.2012

3. use oxid v4.7 modules structure (all files in modules directory)

4. Exclude trackingcode from mails

5. Oxid v6.1.5 kompatibel by BPMusic on 2020-02-19
   - Optionen für Scriptdateiname
   - Optionen für Heartbeattimer
   - Optionen für Request Methode
