<div align="right">

🌍 **Langues / Sprachen**

🇫🇷 Français | 🇩🇪 <a href="README.md">Deutsch</a>

</div>

# Vereinswebsite_WordPress

**Adaptation du site web du club WordPress suite à une modification de l'API**

1. Télécharger les trois fichiers depuis GitHub.

2. Se connecter à my.cyon.ch ou accéder au répertoire web via FTP.

3. Ouvrir le gestionnaire de fichiers.

     <img width="949" height="625" alt="image" src="https://github.com/swissunihockey/Vereinswebsite_WordPress/blob/main/Dateimanager_Cyon_Nav1.jpg" />
     
   Exemple de serveur FTP :

     <img width="498" height="221" alt="image" src="https://github.com/user-attachments/assets/7787667d-51cd-4bc4-b37e-568f249fd719" />
 
5. Renommer les fichiers existants afin de conserver une sauvegarde :
   functions.min.js → functions.min.js_old
   functions.min.js.map → functions.min.js.map_old

   Téléverser les deux nouveaux fichiers (functions.min.js et functions.min.js.map) dans ce répertoire.
   
7. Naviguer vers :
   public_html/*votreDomaine*/wp-content/themes/wp-setup/functions
   
      <img width="949" height="625" alt="image" src="https://github.com/swissunihockey/Vereinswebsite_WordPress/blob/main/Dateimanager_Cyon_Nav2.jpg " />
      
    Exemple de serveur FTP :
   
    <img width="500" height="404" alt="image" src="https://github.com/user-attachments/assets/cd6bf2c8-ffba-4213-9bb0-d12f41010e3b" />
   
8. Renommer le fichier curl.php en curl.php_old.
9. Téléverser le nouveau fichier curl.php.
10. Se connecter à l'administration WordPress et vérifier le paramétrage de la saison.

   Si vous avez des questions ou si vous ne souhaitez pas effectuer ces étapes vous-même, l'équipe informatique de Swiss Unihockey se tient volontiers à votre disposition :  it@swissunihockey.ch
