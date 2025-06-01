@echo off
setlocal enabledelayedexpansion
for %%f in (img\clients\*) do (
    set "filename=%%~nf"
    cwebp -q 50 "%%f" -o "img\clients\!filename!.webp"
)
