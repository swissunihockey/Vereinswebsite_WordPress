<div align="right">

🌍 **Langues / Sprachen**

🇩🇪 Deutsch (README.md) | 🇫🇷 Français (README.fr.md)

</div>

# Vereinswebsite_WordPress

**Anpassen Vereinswebsite WordPress für API-Änderung**

1.    Herunterladen der drei Dateien von GitHub
2.	Login bei my.cyon.ch oder über FTP auf Webverzeichnis zugreifen
3.	Öffnen Dateimanager 

      <img width="300" height="444" alt="image" src="https://github.com/swissunihockey/Vereinswebsite_WordPress/blob/main/Dateimanager_Cyon.jpg" />
4.	Navigation zu public_html/*deineDomain*/wp-content/themes/wp-setup/dist/js
      <img width="949" height="625" alt="image" src="https://github.com/swissunihockey/Vereinswebsite_WordPress/blob/main/Dateimanager_Cyon_Nav1.jpg" />

      Beispiel FTP Server:
      
      <img width="498" height="221" alt="image" src="https://github.com/user-attachments/assets/7787667d-51cd-4bc4-b37e-568f249fd719" />
5.	Umbenennen der bestehenden Dateien als Backup

      functions.min.js --> functions.min.js_old
  
      functions.min.js.map --> functions.min.js.map_old
6.	Hochladen der beiden neuen Dateien (functions.min.js und functions.min.js.map) in dieses Verzeichnis
7.	Navigieren zu public_html/*deineDomain*/wp-content/themes/wp-setup/functions
      <img width="949" height="625" alt="image" src="https://github.com/swissunihockey/Vereinswebsite_WordPress/blob/main/Dateimanager_Cyon_Nav2.jpg " />

      Beispiel FTP Server: 
      
      <img width="500" height="404" alt="image" src="https://github.com/user-attachments/assets/cd6bf2c8-ffba-4213-9bb0-d12f41010e3b" />
8.	Umbenennen der curl.php Datei in curl.php_old
9.	Hochladen der neuen curl.php Datei
10.	Einloggen Wordpress Backend und prüfen der Saison-Einstellung

Falls du Fragen hast oder diese Schritte nicht selbst ausführen möchtest, hilft dir it@swissunihockey.ch gerne weiter.
