@echo off

cd /d %~dp0

if not exist source\core (
  echo 请在QFarm安装包内使用本工具...
  goto end
)

echo 正在初始化...
rmdir /s /q upload
mkdir upload

:?
  cls
  echo.
  set Step=?
  set SPC=   -
  echo %SPC%----- QFarm 自动构建工具 V2.0 构建你所要的接口-----------------------------
  echo %SPC%-                                                                        --
  echo %SPC%-   1).UCenter1.5(Auto)     2).UCHome2.0(Auto)                           --
  echo %SPC%-                                                                        --
  echo %SPC%-   3).Discuz7.x(Auto)      4).Discuz!1/1.5/2.0/2.5(Auto)                --
  echo %SPC%-                                                                        --
  echo %SPC%-   5).phpWind7.x/8(GBK)    6).phpWind7.x/8(UTF8)                        --
  echo %SPC%-                                                                        --
  echo %SPC%-------------------------------- By Http://www.phpye.com ------------------
:??
  echo.
  set /p Step=请选择要执行的操作{1~7 %Step%}:
  echo.
  if "%Step%"=="?" goto ?
  for /l %%i in (1,1,10) do (
    if "%Step%"=="%%i" (
      if %Step%==1 goto UCenter
      if %Step%==2 goto Uchome
      if %Step%==3 goto Discuz
      if %Step%==4 goto DiscuzX
      if %Step%==5 goto phpWind-GBK
      if %Step%==6 goto phpWind-UTF8
    )
  )
  echo 无效参数: %Step%
  goto ??

:UCenter
  set dstdir=upload\4ucenter
  xcopy /e source\4ucenter %dstdir%\
  xcopy /e source\core %dstdir%\core\
  goto end

:Uchome
  set dstdir=upload\4uchome
  xcopy /e source\4uchome %dstdir%\
  xcopy /e source\core %dstdir%\qqfarm\core\
  goto end

:Discuz
  set dstdir=upload\4discuz
  xcopy /e source\4discuz %dstdir%\
  xcopy /e source\core %dstdir%\plugins\qqfarm\core\
  goto end

:DiscuzX
  set dstdir=upload\4discuzx
  xcopy /e source\4discuzx %dstdir%\
  xcopy /e source\core %dstdir%\source\plugin\qqfarm\core\
  goto end

:phpWind-GBK
  set dstdir=upload\4phpwind-GBK
  xcopy /e source\4phpwind %dstdir%\
  xcopy /e source\core %dstdir%\hack\qqfarm\core\
  copy %dstdir%\hack\qqfarm\info.xml-gbk %dstdir%\hack\qqfarm\info.xml
  goto end

:phpWind-UTF8
  set dstdir=upload\4phpwind-UTF8
  xcopy /e source\4phpwind %dstdir%\
  xcopy /e source\core %dstdir%\hack\qqfarm\core\
  copy %dstdir%\hack\qqfarm\info.xml-utf8 %dstdir%\hack\qqfarm\info.xml
  goto end

::操作结束
:end
  echo.
  if exist upload start upload
  echo 操作完毕,稍后自动退出...
  ping 127.1>nul -n 3
  exit
