ClipApp
========

ClipApp is Borhan Clipping and Trimming application. The app allows you to trim and clip Borhan entries.

## Installtation 

#### Standalone

1. Clone this repo into web accessible folder such as ```htdocs``` or ```www```
2. Edit ```config.php``` with your Borhan credentials.
3. Open your browser at: ```http://localhost/clipapp/index.php?entryId={YOUR ENTRY ID HERE}``` 

#### In Borhan Managment Console (BMC)

1. Download specific tag into ```/opt/borhan/apps/clipapp/{version}```
2. Rename ```config.bmc.php``` to ```config.local.php``` run: 

  ```
  mv config.bmc.php config.local.php
  ```
3. Open BMC -> Entry Drilldown -> Trim / Clip
