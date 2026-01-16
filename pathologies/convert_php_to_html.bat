@echo off
setlocal enabledelayedexpansion

REM Dossier contenant les fichiers PHP
set "ROOT_DIR=C:\xampp\htdocs\yourhealth\pathologies"

REM Boucle sur tous les fichiers PHP dans le dossier et sous-dossiers
for /r "%ROOT_DIR%" %%f in (*.php) do (
    set "FILE=%%f"
    set "NEWFILE=!FILE:.php=.html!"
    copy "%%f" "!NEWFILE!" >nul
    echo Converti : %%f -> !NEWFILE!
)

echo Conversion terminée.
pause
