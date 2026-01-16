@echo off
setlocal EnableExtensions EnableDelayedExpansion

set "ROOT=C:\xampp\htdocs\yourhealth"

if not exist "%ROOT%" (
  echo Racine introuvable
  pause
  exit /b
)

for /r "%ROOT%" %%F in (*.html) do (
  echo Correction : %%~nxF

  set "TMP=%%F.tmp"
  break > "!TMP!"

  for /f "usebackq delims=" %%L in ("%%F") do (
    set "LINE=%%L"

    rem === Forcer TOUS les index vers la racine ===
    set "LINE=!LINE:href="index.php"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="./index.php"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="../index.php"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="../../index.php"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="/yourhealth/docs/index.php"=href="/yourhealth/index.php"!"

    rem === Cas index.html ===
    set "LINE=!LINE:href="index.html"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="./index.html"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="../index.html"=href="/yourhealth/index.php"!"
    set "LINE=!LINE:href="../../index.html"=href="/yourhealth/index.php"!"

    echo(!LINE!>>"!TMP!"
  )

  move /y "!TMP!" "%%F" >nul
)

echo.
echo Termine. Toutes les pages renvoient vers /yourhealth/index.php
pause
endlocal
