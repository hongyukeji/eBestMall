eBestMall - B2B2C商城系统
===============================

> eBestMall是基于Yii2.0企业级PHP框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

<p align="center">
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/license.svg" alt="License"></a>
</p>

功能介绍
-------------------

名称|进度|内容|备注
:----|:-----:|-----:|-----:
优惠券|进行中|撰写中|无
秒杀|进行中|撰写中|无
拼团|进行中|撰写中|无
众筹|进行中|撰写中|无
拍卖|进行中|撰写中|无
预售|进行中|撰写中|无
团购|进行中|撰写中|无
本地生活|进行中|撰写中|无
商品主图视频功能|撰写中|撰写中|无
商家地图定位功能|进行中|撰写中|无
云采购商品批发功能|进行中|撰写中|无

安装与更新
-------------------

```
# 稳定版：
$ composer create-project hongyukeji/ebestmall ebestmall

# 开发版：
$ composer create-project hongyukeji/ebestmall ebestmall dev-master

# 更新
$ composer update
```

运行环境
-------------------

* Yii版本：>= 2.0
* PHP版本：>= 5.4.0
* MySQL版本：>= 5.1.0

系统开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Yii2.0
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL、PhotoShop CS6、
* 开发团队：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 特别鸣谢：感谢所有支持鸿宇团队的朋友！

系统维护
-------------------

* Http：www.ebestmall.com
* Author：Shadow
* QQ：1527200768
* Phone：13952101395
* Email：admin@hongyuvip.com

目录结构
-------------------

```
# 根目录
backend             包含后端应用
common              包含所有应用程序共有的文件
console             包含命令行应用
environments        包含环境配置
frontend            包含前端应用
vendor/             包含依赖的第三方包

.gitignore          由git版本系统忽略的目录列表
composer.json       Composer配置文件
ebm.bat             Windows下的初始化脚本描述文件
init                初始化脚本描述文件
init.bat            Windows下的初始化脚本描述文件
LICENSE.md          许可信息
README.md           程序基本信息
requirements.php    安装使用 Yii 需求检查器
yii                 控制台应用程序引导
yii.bat             Windows下的控制台应用程序引导

# Application 目录
assets/             包含资产定义
config/             包含应用程序配置
controllers/        包含web控制器类
models/             包含模型类
services/           包含业务实现类
runtime/            包含运行时生成的文件
services/           包含业务逻辑层的文件
tests/              包含基本应用程序的各种测试
views/              包含Web应用程序的视图文件
web/                包含入口脚本和Web资源
```

伪静态
-------------------

> http://www.yiiframework.com/doc-2.0/guide-start-installation.html#configuring-web-servers

* Apache

> Apache 伪静态文件，默认生成在 web/.htaccess

```
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php
```

* Nginx

> 如果是Nginx服务器，修改nginx/conf/nginx.conf，在当前"server{}"的"location / {}"中添加下面内容：

```
location / {
    try_files $uri $uri/ /index.php$is_args$args;
}
```

