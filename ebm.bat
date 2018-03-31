@echo off

rem -------------------------------------------------------------
rem  HongYuKeJi command line bootstrap script for Windows.
rem
rem  @author Shadow <admin@hongyuvip.com>
rem  @link http://www.hongyuvip.com/
rem  @copyright Copyright (c) 2018 HongYu Software LLC
rem  @license http://www.hongyuvip.com/license/
rem -------------------------------------------------------------

rem       __________                 __     _____         .__  .__
rem   ____\______   \ ____   _______/  |_  /     \ _____  |  | |  |
rem _/ __ \|    |  _// __ \ /  ___/\   __\/  \ /  \\__  \ |  | |  |
rem \  ___/|    |   \  ___/ \___ \  |  | /    Y    \/ __ \|  |_|  |__
rem  \___  >______  /\___  >____  > |__| \____|__  (____  /____/____/
rem      \/       \/     \/     \/               \/     \/

@setlocal

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "yii" %*

@endlocal
