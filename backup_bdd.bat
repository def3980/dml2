@echo off

set dbUser=root
set dbPassword=39801981
set pwd=%cd%
set backupDir="backup"
set mysqldump="C:\xampp\mysql\bin\mysqldump.exe"
set mysqlDataDir="C:\xampp\mysql\data"
set zip="C:\Program Files\7-Zip\7z.exe"
set year=%date:~-4%
set month=%date:~3,2%
set day=%date:~0,2%
set hour=%time:~0,2%
set min=%time:~3,2%
set secs=%time:~6,2%
set nameFile=%year%-%month%-%day%_%hour%%min%%secs%

%mysqldump% --host="localhost" --user=%dbUser% --password=%dbPassword% --single-transaction --add-drop-table --databases dml > %pwd%\%backupDir%\dml_%nameFile%.sql

%zip% a -t7z %pwd%\%backupDir%\dml_%nameFile%.sql.7z %pwd%\%backupDir%\dml_%nameFile%.sql

::del %pwd%\%backupDir%\dml_%nameFile%.sql

:: switch to the "data" folder
:: pushd %mysqlDataDir%
:: iterate over the folder structure in the "data" folder to get the databases
:: for /d %%f in (*) do ( 
:: if not exist %pwd%\%backupDir%\%dirName%\ (
:: mkdir %pwd%\%backupDir%\%dirName%
:: )
:: %mysqldump% --host="localhost" --user=%dbUser% --password=%dbPassword% --single-transaction --add-drop-table --databases %%f > %pwd%\%backupDir%\%dirName%\%%f.sql
:: %zip% a -tgzip %pwd%\%backupDir%\%dirName%\%%f.sql.gz %pwd%\%backupDir%\%dirName%\%%f.sql
:: %zip% a -tgzip %pwd%\%backupDir%\%dirName%\%%f.sql.zip %pwd%\%backupDir%\%dirName%\%%f.sql
:: %zip% a -t7z %pwd%\%backupDir%\%dirName%\%%f.sql.7z %pwd%\%backupDir%\%dirName%\%%f.sql
:: del %pwd%\%backupDir%\%dirName%\%%f.sql
::)