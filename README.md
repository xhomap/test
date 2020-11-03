## Instalace

1. Vytvořit si virtualHost směřující na adresář se zdrojovými soubory a do složky /public ve které je umístěn index.php
2. Přejmenovat soubor .env.example na .env soubor se nachází v kořenovém adresáři.
3. V souboru .env nastavit přístupy do databáze
4. V kořenovém adresáři zdrojových souborů informačního systému je nutné spustit příkazy
 -  php artisan key:generate
 -  php artisan composer install
 -  php artisan migrate –seed
