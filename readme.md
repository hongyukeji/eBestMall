# eBestMall - B2B2C商城系统

> eBestMall是基于企业级PHP框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

<p align="center">
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/license.svg" alt="License"></a>
</p>


## 开始使用

> http://help.ebestmall.com

### 安装程序

```
# 稳定版：
$ composer create-project hongyukeji/ebestmall ebestmall

# 开发版：
$ composer create-project hongyukeji/ebestmall ebestmall dev-master

# 更新程序
$ composer update
```

### 服务器要求

* PHP> = 7.1.3
* OpenSSL PHP扩展
* PDO PHP扩展
* Mbstring PHP扩展
* Tokenizer PHP扩展
* XML PHP扩展
* Ctype PHP扩展
* JSON PHP扩展

### 功能介绍

|名称|进度|备注|
|:----|:-----:|-----:|
优惠券 |   进行中 |   无    |
秒杀    |   进行中  |   无    |
拼团    |   进行中  |   无    |
众筹    |   进行中  |   无    |
拍卖    |   进行中  |   无    |
预售    |   进行中  |   无    |
团购    |   进行中  |   无    |
本地生活    |   进行中  |   无    |
商品主图视频    |   进行中  |   无    |
商家地图定位    |   进行中  |   无    |
云采购商品批发  |   进行中  |   无    |

### 系统开发

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统演示：www.ebestmall.com
* 系统框架：Symfony 4
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL、PhotoShop CS6、
* 开发成员：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 特别鸣谢：感谢所有支持鸿宇团队的朋友！

### 系统维护

* 作者：鸿宇科技
* QQ：[1527200768](http://wpa.qq.com/msgrd?V=1&uin=1527200768&Menu=yes)
* 手机号：13952101395
* Email：[admin@hongyuvip.com](mailto:admin@hongyuvip.com)
* QQ交流群：[90664526](http://shang.qq.com/wpa/qunwpa?idkey=a3e498d7d3329615c9b3d1dbbbc50e43fa80b39e93a1ae78f1fb0a268f3a0476)

### 开发日志

|版本|内容|时间|备注|
|:----|:-----:|-----:|-----:|
v1.0.0|完成项目基础应用建设|2017-12-31|本地开发，未提交GitHub|
v1.1.0|完成项目框架重构|2018-04-08|本地开发，未提交GitHub|

## 配置

### URL伪静态

> http://symfony.com/doc/current/setup/web_server_configuration.html

* Apache

> Apache 伪静态文件，默认生成在 public/.htaccess

```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_URI}::$1 ^(/.+)/(.*)::\2$
RewriteRule ^(.*) - [E=BASE:%1]
RewriteCond %{HTTP:Authorization} .
RewriteRule ^ - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteCond %{ENV:REDIRECT_STATUS} ^$
RewriteRule ^index\.php(?:/(.*)|$) %{ENV:BASE}/$1 [R=301,L]
RewriteCond %{REQUEST_FILENAME} -f
RewriteRule ^ - [L]
RewriteRule ^ %{ENV:BASE}/index.php [L]
```

* Nginx

> 如果是Nginx服务器，修改nginx/conf/nginx.conf，在当前"server{}"的"location / {}"中添加下面内容：

```
location / {
    try_files $uri /index.php$is_args$args;
}
```


## 开发

### Symfony 框架

- Symfony 命令

```
# 创建控制器
php bin/console make:controller

# 创建模型CRUD操作方法
php bin/console make:crud Product

# 查看所有路由
php bin/console debug:router

# 创建实体类
php bin/console make:entity Product

# 创建数据库
php bin/console doctrine:database:create
```

- Symfony 组件

```
# Symfony 安装
composer create-project symfony/website-skeleton my-project

# URL重写
composer require symfony/apache-pack

# 注释路由
composer require annotations

# 安装Doctrine以及MakerBundle
composer require doctrine maker
```

- 帮助网址

```
# 配置Web服务器
http://symfony.com/doc/current/setup/web_server_configuration.html

# 数据库迁移
http://symfony.com/doc/current/doctrine.html

# 数据库和Doctrine ORM
http://symfony.com/doc/current/doctrine.html

# 控制器
http://symfony.com/doc/current/controller.html

# 创建和使用模板
http://symfony.com/doc/current/templating.html

# 注释路由
http://symfony.com/doc/current/routing.html
```
