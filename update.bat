@echo off

rem -------------------------------------------------------------
rem  HongYuKeJi command line bootstrap script for Windows.
rem  Execute composer update Command.
rem  @author Shadow <admin@hongyuvip.com>
rem  @link http://www.hongyuvip.com/
rem  @copyright Copyright (c) 2015 HongYu Software LLC
rem  @license http://www.hongyuvip.com/license/
rem -------------------------------------------------------------

@setlocal

chcp 65001
echo 正在执行程序更新...

composer update

@endlocal