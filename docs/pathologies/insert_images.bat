@echo off
setlocal enabledelayedexpansion

REM Chemin relatif vers le dossier images
set IMG_PATH=../../assets/img

for %%F in (*.html) do (
    echo Traitement de %%F ...

    set NAME=%%~nF

    powershell -Command ^
    "$c = Get-Content '%%F' -Raw;" ^
    "$c = $c -replace '</head>', '  <style>`n.header-image{display:block;margin:10px auto 0 auto;max-width:180px;height:auto;}`n</style>`n</head>';" ^
    "$c = $c -replace '<header>', '<header>`n  <img src=\"%IMG_PATH%/!NAME!.jfif\" alt=\"!NAME!\" class=\"header-image\">';" ^
    "Set-Content '%%F' $c -Encoding UTF8"
)

echo.
echo Terminé sans erreur.
pause
