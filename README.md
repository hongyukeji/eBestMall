eBestMall - B2B2C商城系统
===============================

eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

[![Latest Stable Version](https://poser.pugx.org/hongyukeji/ebestmall/v/stable.png)](https://packagist.org/packages/hongyukeji/ebestmall)
[![Total Downloads](https://poser.pugx.org/hongyukeji/ebestmall/downloads.png)](https://packagist.org/packages/hongyukeji/ebestmall)

安装与更新
-------------------
```
install:
# composer create-project hongyukeji/ebestmall ebestmall

install dev-master:
# composer create-project hongyukeji/ebestmall ebestmall dev-master

update:
# composer update

```


系统维护
-------------------

* Author: Shadow
* Http: www.ebestmall.com

项目开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Yii2.0、AdminLTE、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL
* 开发团队：Shadow（项目总监）、Spider（代码审计）、鸿宇团队全体成员

服务器环境
-------------------

* PHP版本：>=5.4.0
* MySQL版本：>=5.5.0

目录结构
-------------------

```
api
    assets/              包含api资源类
    config/              包含api配置文件
    controllers/         包含api控制器
    models/              包含api需要的model类
    runtime/             包含api运行时生成的文件
    views/               包含api视图文件
    web/                 包含api入口脚本和web资源
common
    config/              包含全局配置文件
    data/                包含项目需要的数据
        db/              包含数据库文件
    mail/                包含e-mail视图文件
    models/              包含共有的model类
console
    config/              包含console配置文件
    controllers/         包含console控制器
    migrations/          包含数据库migrations
    models/              包含console需要的model类
    runtime/             包含console运行时生成的文件
backend
    assets/              包含后端资源类
    config/              包含后端配置文件
    controllers/         包含后端控制器
    models/              包含后端需要的model类
    runtime/             包含后端运行时生成的文件
    themes/              包含后端主题文件
        default/         包含后端默认主题文件
    web/                 包含后端入口脚本和web资源
frontend
    assets/              包含前端资源类
    config/              包含前端配置文件
    controllers/         包含前端控制器
    models/              包含前端需要的model类
    modules/             包含前端模块
        mobile/          包含手机端模块
        seller/          包含第三方商家后台模块
    runtime/             包含前端运行时生成的文件
    themes/              包含前端主题文件
        default/         包含前端默认主题文件
    views/               包含前端视图文件
    web/                 包含前端入口脚本和web资源
    widgets/             包含前端小部件
vendor/                  包含第三方依赖包
web/                     包含公共web资源
environments/            包含环境初始化覆盖文件
tests                    包含高级应用程序的各种测试
    codeception/         包含测试codeception PHP测试框架开发
```

开发日志
-------------------

```
2016-10-08 09:30:39 backend: RBAC 权限管理 ( 完成 )
2016-12-18 12:26:58 frontend: 公共布局页面 ( 完成 )
2017-03-16 20:39:56 backend: 管理员忘记密码找回 ( 完成 )
2017-03-17 17:51:50 backend: 系统设置->商城设置->基本设置 ( 完成 )
2017-04-01 16:07:18 ebestmall-bate-v1.0.0 ( 完成 )
```

伪静态设置
-------------------

* Apache 配置

    * 开启 apache 的 mod_rewrite 模块

    * 网站根目录新建名为: .htaccess 的文件 

    * 打开文件添加下面代码
    ```
    Options +FollowSymLinks
    IndexIgnore  */*
    RewriteEngine on
    # if a directory or a file exists, use it directly
    RewriteCond  %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    # otherwise forward it to index.php
    RewriteRule . index.php
    ```
    * 删除 config/main.php 文件里 urlManager 的注释


php.ini 配置
-------------------
```
extension=php_openssl.dll   // Composer
extension=fileinfo.dll  // File upload
```

Vagrant 使用教程
-------------------
* 官方源直接添加虚拟机

```
vagrant box add ubuntu/trusty64
```

* 手动添加ebestmall虚拟机
    * 1.下载 [ubuntu/trusty64.box](https://atlas.hashicorp.com/ubuntu/boxes/trusty64/versions/20170509.0.0/providers/virtualbox.box) [更多 vagrantbox list](http://www.vagrantbox.es/)
    * 2.将box文件和vagrant的bin程序都放在同一个文件夹中,同时将.box文件改名为trusty64.box,再执行下面命令

```
vagrant box add ebestmall trusty64.box
```

* Vagrant 常用命令

```
vagrant box list    # 查看目前已有的box
vagrant box add     # 新增加一个box
vagrant box remove  # 删除指定box
vagrant init        # 初始化
vagrant up          # 启动虚拟机
vagrant ssh         # SSH 登陆虚拟机
vagrant suspend     # 挂起虚拟机
vagrant reload      # 重启虚拟机
vagrant halt        # 关闭虚拟机
vagrant status      # 查看虚拟机运行状态
vagrant destroy     # 销毁当前虚拟机
```