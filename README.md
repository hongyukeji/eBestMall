eBestMall - B2B2C商城系统
===============================

> eBestMall是基于 Symfony 4 企业级PHP框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

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

* Symfony版本：>= 4.0
* PHP版本：>= 7.0
* MySQL版本：>= 5.5

系统开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Symfony 4
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL、PhotoShop CS6、
* 开发团队：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 特别鸣谢：感谢所有支持鸿宇团队的朋友！

系统维护
-------------------

* Http： www.ebestmall.com
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
config/                 包含...配置当然！您将配置路线，服务 和包裹。
src/                    你所有的PHP代码都在这里。
templates/              你所有的Twig模板都住在这里。
bin/                    bin/console文件居住在这里（和其他不太重要的可执行文件）。
var/                    这是存储自动创建的文件的位置，如缓存文件（var/cache/）和日志（var/log/）。
vendor/                 第三方（即“供应商”）图书馆居住在这里！这些通过Composer 软件包管理器下载。
public/                 这是您项目的文档根目录：您在此处放置任何可公开访问的文件。
```

伪静态
-------------------

> https://symfony.com/doc/current/setup/web_server_configuration.html

* Apache

> Apache 伪静态文件，默认生成在 public/.htaccess

```
$ composer require symfony/apache-pack
```

* Nginx

> 如果是Nginx服务器，修改nginx/conf/nginx.conf，在当前"server{}"中添加下面内容：

```
location / {
    # try to serve file directly, fallback to index.php
    try_files $uri /index.php$is_args$args;
}

location ~ ^/index\.php(/|$) {
    fastcgi_pass 127.0.0.1:9000;
    fastcgi_split_path_info ^(.+\.php)(/.*)$;
    include fastcgi_params;

    # optionally set the value of the environment variables used in the application
    # fastcgi_param APP_ENV prod;
    # fastcgi_param APP_SECRET <app-secret-id>;
    # fastcgi_param DATABASE_URL "mysql://db_user:db_pass@host:3306/db_name";

    # When you are using symlinks to link the document root to the
    # current version of your application, you should pass the real
    # application path instead of the path to the symlink to PHP
    # FPM.
    # Otherwise, PHP's OPcache may not properly detect changes to
    # your PHP files (see https://github.com/zendtech/ZendOptimizerPlus/issues/126
    # for more information).
    fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
    fastcgi_param DOCUMENT_ROOT $realpath_root;
    # Prevents URIs that include the front controller. This will 404:
    # http://domain.tld/index.php/some-path
    # Remove the internal directive to allow URIs like this
    internal;
}

# return 404 for all other php files not matching the front controller
# this prevents access to other php files you don't want to be accessible.
location ~ \.php$ {
    return 404;
}
```

开发记录
-------------------
```
2017-12-06 18:18:18     阿里短信组件代码审计完成
2017-12-06 19:30:28     邮件组件代码审计完成
2018-02-21 12:58:56     框架所有视图页面设计完成
```
