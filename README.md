# Vereinswebsite_WordPress
Config-Files WordPress
**Anpassen Vereinswebsite WordPress für API-Änderung**

1.    Herunterladen der drei Dateien von GitHub
2.	Login auf den FTP-Server deiner Domain
3.	Navigation zu
      public_html/*deineDomain*/wp-content/themes/wp-setup/dist/js
      <img width="498" height="221" alt="image" src="https://github.com/user-attachments/assets/7787667d-51cd-4bc4-b37e-568f249fd719" />
5.   	Umbenennen der bestehenden Dateien als Backup
      functions.min.js  functions.min.js_old
      functions.min.js.map  functions.min.js.map_old
6.   	Hochladen der beiden neuen Dateien (functions.min.js und functions.min.js.map) in dieses Verzeichnis
7.   	Navigieren zu
      public_html/*deineDomain*/wp-content/themes/wp-setup/functions
      <img width="500" height="404" alt="image" src="https://github.com/user-attachments/assets/cd6bf2c8-ffba-4213-9bb0-d12f41010e3b" />
9.	Umbenennen der curl.php Datei in curl.php_old
10.	Hochladen der neuen curl.php Datei
