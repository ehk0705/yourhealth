@echo off

for %%f in (*.html) do (
  powershell -NoProfile -Command ^
    "(Get-Content '%%f' -Raw) -replace 'href=\"\.\./','href=\"/yourhealth/' | Set-Content '%%f' -Encoding UTF8"
)

echo Mise a jour terminee.
pause
