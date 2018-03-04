@echo off

rem -------------------------------------------------------------
rem  HongYuKeJi command line bootstrap script for Windows.
rem
rem  @author Shadow <admin@hongyuvip.com>
rem  @link http://www.hongyuvip.com/
rem  @copyright Copyright (c) 2015 HongYu Software LLC
rem  @license http://www.hongyuvip.com/license/
rem -------------------------------------------------------------

@setlocal

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "artisan" %*

@endlocal
