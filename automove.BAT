@echo off

set X=60

set "source=C:\Users\Admin\Downloads"

set "destination=D:\3d"

robocopy "%source%" "%destination%" /mov /minage:%X%

exit /b

