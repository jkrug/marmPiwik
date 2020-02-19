# marmalade :: Piwik

Integrates the Piwik tracking code into OXID eShop

## Installation / Config

- backup shop and database

- copy the files from the repository to your shop in the directory
  `modules/marm/piwik/`

- add in composer.json autoload -> psr4 section
  "Marm\\Piwik\\": "./source/modules/marm/piwik"

- in console: composer dump-autoload -o

- Enable module under Extension > Module > marmalade.de Piwik

- Set up your PIWIK variables in Master Settings > Core Settings > Piwik setup

- Clean your language cache (cleanup eShop tmp directory)

If you don't see Master Settings > Core Settings > Piwik setup tab, logout and login again to admin section.

## Change Log

1. Added "Help Icons" Submitted By Marcus Pleintinger on 18.10.2012

2. Fixed price format Submitted By Andreas Pollak on 25.10.2012

3. use oxid v4.7 modules structure (all files in modules directory)

4. Exclude trackingcode from mails

5. Oxid v6.1.5 compatile by BPMusic on 2020-02-19
   - Option for scriptfilename
   - Option for heartbeattimer
   - Option for requestmethod
