@echo off
setlocal EnableExtensions EnableDelayedExpansion

set "DIR=C:\xampp\htdocs\yourhealth\docs\pathologies"

if not exist "%DIR%" (
  echo Dossier introuvable: "%DIR%"
  pause
  exit /b 1
)

echo Dossier cible: %DIR%
echo.

for /r "%DIR%" %%F in (*.html) do (
  echo Reparation : %%~fF

  rem Sauvegarde (une seule fois)
  if not exist "%%F.bak" copy /y "%%F" "%%F.bak" >nul

  set "TMP=%%F.tmp"
  break > "!TMP!"

  set "SKIPNAV=0"

  for /f "usebackq delims=" %%L in ("%%F") do (
    set "LINE=%%L"
    set "WRITE=1"
    set "OUT=!LINE!"

    rem --- Corriger doctype casse ---
    if /i "!LINE!"=="<doctype html>" set "OUT=<!doctype html>"

    rem --- Ignorer l'ancien bloc nav jusqu'a </nav> ---
    if "!SKIPNAV!"=="1" (
      echo(!LINE! | findstr /i /c:"</nav>" >nul
      if not errorlevel 1 set "SKIPNAV=0"
      set "WRITE=0"
    ) else (

      rem --- Remplacer toute ligne crumbs (meme corrompue) ---
      echo(!LINE! | findstr /i /c:"class=\"crumbs\"" >nul
      if not errorlevel 1 (
        set "OUT=    <div class=""crumbs""><a href=""/yourhealth/index.php"">Accueil</a> › Pathologies</div>"
      )

      rem --- Remplacer tout le nav par un bloc propre ---
      echo(!LINE! | findstr /i /c:"<nav aria-label=\"Navigation principale\">" >nul
      if not errorlevel 1 (
        echo     ^<nav aria-label="Navigation principale"^>>> "!TMP!"
        echo       ^<a href="/yourhealth/index.php"^>Accueil^</a^> ^<a href="/yourhealth/theme.php"^>Thèmes^</a^> ^<a href="/yourhealth/alimentation.php"^>Alimentation^</a^> ^<a href="/yourhealth/ressources.php"^>Ressources^</a^> ^<a href="/yourhealth/contact.php"^>Contact^</a^>>> "!TMP!"
        echo     ^</nav^>>> "!TMP!"
        set "SKIPNAV=1"
        set "WRITE=0"
      )

      rem --- Remplacer le bouton Retour (s'il existe) ---
      if "!WRITE!"=="1" (
        echo(!LINE! | findstr /i /c:"class=\"btn\"" >nul
        if not errorlevel 1 (
          echo(!LINE! | findstr /i /c:"Retour" >nul
          if not errorlevel 1 (
            set "OUT=      <a class=""btn"" href=""/yourhealth/index.php"">Retour</a>"
          )
        )
      )
    )

    if "!WRITE!"=="1" echo(!OUT!>>"!TMP!"
  )

  move /y "!TMP!" "%%F" >nul
)

echo.
echo Terminé. Sauvegardes .bak créées.
pause
endlocal
