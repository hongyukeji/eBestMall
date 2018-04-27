@echo off

rem -------------------------------------------------------------
rem  HongYuKeJi command line bootstrap script for Windows.
rem  Execute composer update Command.
rem  @author Shadow <admin@hongyuvip.com>
rem  @link http://www.hongyuvip.com/
rem  @copyright Copyright (c) 2015 HongYu Software LLC
rem  @license http://www.hongyuvip.com/license/
rem -------------------------------------------------------------

rem -------------------------------------------------------------
rem       __________                 __     _____         .__  .__
rem   ____\______   \ ____   _______/  |_  /     \ _____  |  | |  |
rem _/ __ \|    |  _// __ \ /  ___/\   __\/  \ /  \\__  \ |  | |  |
rem \  ___/|    |   \  ___/ \___ \  |  | /    Y    \/ __ \|  |_|  |__
rem  \___  >______  /\___  >____  > |__| \____|__  (____  /____/____/
rem      \/       \/     \/     \/               \/     \/
rem -------------------------------------------------------------

@setlocal

chcp 65001
echo 正在执行程序更新...

composer update

@endlocal