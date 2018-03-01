eBestMall - B2B2C商城系统
===============================

> eBestMall是基于Yii2.0企业级PHP框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

[![Latest Stable Version](https://poser.pugx.org/hongyukeji/ebestmall/v/stable.png)](https://packagist.org/packages/hongyukeji/ebestmall)
[![Total Downloads](https://poser.pugx.org/hongyukeji/ebestmall/downloads.png)](https://packagist.org/packages/hongyukeji/ebestmall)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

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
商品主图视频功能|已完成|商品详情页可以播放视频|完成时间2017-12-18
商家地图定位功能|进行中|撰写中|无
云采购商品批发功能|进行中|撰写中|无

安装与更新
-------------------

```
运营版：
# composer create-project hongyukeji/ebestmall ebestmall

开发版：
# composer create-project hongyukeji/ebestmall ebestmall dev-master
```

运行环境
-------------------

* Yii版本：>= 2.0
* PHP版本：>= 5.4.0
* MySQL版本：>= 5.5.0

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

* Site：www.ebestmall.com
* Author：Shadow
* QQ：1527200768
* Phone：13952101395
* Email：admin@hongyuvip.com

开发日志
-------------------

版本|内容|时间|备注
:----|:-----:|-----:|-----:
eBestMall-V8.0.0|完成项目基础应用建设|2017-12-31 12:09:33|Shadow

目录结构
-------------------

```
api                      （api接口）
    assets/              包含api资源类
    config/              包含api配置文件
    controllers/         包含api控制器
    models/              包含api需要的model类
    runtime/             包含api运行时生成的文件
    themes/              包含api主题文件
        default/         包含api默认主题文件
    web/                 包含api入口脚本和web资源
backend                  （后端应用）
    assets/              包含backend资源类
    config/              包含backend配置文件
    controllers/         包含backend控制器
    models/              包含backend需要的model类
    runtime/             包含backend运行时生成的文件
    themes/              包含backend主题文件
        default/         包含backend默认主题文件
    web/                 包含backend入口脚本和web资源
common                   （所有应用程序共有的文件）
    config/              包含全局配置文件
    data/                包含项目需要的数据
        db/              包含数据库文件
    mail/                包含e-mail视图文件
    models/              包含共有的model类
    services/            包含业务实现类
console                  （命令行应用）
    config/              包含console配置文件
    controllers/         包含console控制器
    migrations/          包含数据库migrations
    models/              包含console需要的model类
    runtime/             包含console运行时生成的文件
environments             （环境配置）
    dev                  包含开发环境初始化覆盖文件
    prod                 包含生产环境初始化覆盖文件
frontend                 （前端应用）
    assets/              包含frontend资源类
    config/              包含frontend配置文件
    controllers/         包含frontend控制器
    models/              包含frontend需要的model类
    runtime/             包含frontend运行时生成的文件
    themes/              包含frontend主题文件
        default/         包含frontend默认主题文件
    web/                 包含frontend入口脚本和web资源
mobile                   （手机端应用）
    assets/              包含mobile资源类
    config/              包含mobile配置文件
    controllers/         包含mobile控制器
    models/              包含mobile需要的model类
    runtime/             包含mobile运行时生成的文件
    themes/              包含mobile主题文件
        default/         包含mobile默认主题文件
    web/                 包含mobile入口脚本和web资源
static                   包含所有应用程序共有的静态资源文件
vagrant                  包含
vendor/                  包含第三方依赖包  
tests                    包含高级应用程序的各种测试
    codeception/         包含测试codeception PHP测试框架开发
.gitignore               包含由git版本系统忽略的目录列表。 如果你需要的东西从来没有到你的源代码存储库，添加它。
composer.json            Composer配置文件 Configuring Composer.
init                     初始化脚本描述文件 Configuration and environments.
init.bat                 Windows下的初始化脚本描述文件.
LICENSE.md               许可信息。 把你的项目许可证放到这里。 特别是开源醒目。
README.md                安装模板的基本信息。 请考虑将其替换为有关您的项目及其安装的信息。
requirements.php         安装使用 Yii 需求检查器。
yii                      控制台应用程序引导。
yii.bat                  Windows下的控制台应用程序引导.
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

