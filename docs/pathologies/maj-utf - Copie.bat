cls
setlocal
set "DOSSIER=C:\xampp\htdocs\yourhealth\pathologies"

for %%F in ("%DOSSIER%\*.html") do (
  powershell -NoProfile -Command ^
    "$p='%%F';" ^
    "$t=Get-Content -Raw -Encoding Latin1 $p;" ^
    "Set-Content -Encoding UTF8 $p $t"
)

echo Conversion ISO-8859-1 -> UTF-8 terminee.
pause
