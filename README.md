# Vereinswebsite_WordPress
Config-Files WordPress
**Anpassen Vereinswebsite WordPress für API-Änderung**

1.	Herunterladen der drei Dateien von GitHub
2.	Login auf den FTP-Server deiner Domain
3.	Navigation zu 
public_html/*deineDomain*/wp-content/themes/wp-setup/dist/js/
 
4.	Umbenennen der bestehenden Dateien als Backup
functions.min.js  functions.min.js_old
functions.min.js.map  functions.min.js.map_old
5.	Hochladen der beiden neuen Dateien (functions.min.js und functions.min.js.map) in dieses Verzeichnis
6.	Navigieren zu public_html/*deineDomain*/wp-content/themes/wp-setup/functions 
7.	Umbenennen der curl.php Datei in curl.php_old
8.	Hochladen der neuen curl.php Datei
