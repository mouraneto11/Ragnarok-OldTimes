@echo off
echo Y | del src\char\*.o
echo Y | del src\char\GNUmakefile
echo Y | del src\char_sql\*.o
echo Y | del src\char_sql\GNUmakefile
echo Y | del src\common\obj\*.o
echo Y | rmdir src\common\obj
echo Y | del src\common\GNUmakefile
echo Y | del src\ladmin\GNUmakefile
echo Y | del src\login\*.o
echo Y | del src\login\GNUmakefile
echo Y | del src\login_sql\*.o
echo Y | del src\login_sql\GNUmakefile
echo Y | del src\map\txtobj\*.o
echo Y | rmdir src\map\txtobj
echo Y | del src\map\sqlobj\*.o
echo Y | rmdir src\map\sqlobj
echo Y | del src\map\GNUmakefile
echo Y | del src\txt-converter\char\GNUmakefile
echo Y | del src\txt-converter\char\*.o
echo Y | del src\txt-converter\login\GNUmakefile
echo Y | del src\txt-converter\login\*.o
echo Y | del char-converter.exe
echo Y | del char-server.exe
echo Y | del char-server_sql.exe
echo Y | del ladmin.exe
echo Y | del login-converter.exe
echo Y | del login-server.exe
echo Y | del login-server_sql.exe
echo Y | del map-server.exe
echo Y | del map-server_sql.exe
echo Y | del test_sockets.exe