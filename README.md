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
商品主图视频功能|进行中|撰写中|无
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
* PHP版本：>= 5.4
* MySQL版本：>= 5.1


系统开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统演示：www.ebestmall.com
* 系统框架：Yii2.0
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL
* 开发团队：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 特别鸣谢：感谢所有支持鸿宇团队的朋友！

系统维护
-------------------

* 作者：鸿宇科技
* QQ：[1527200768](http://wpa.qq.com/msgrd?V=1&uin=1527200768&Menu=yes)
* 手机号：13952101395
* Email：[admin@hongyuvip.com](mailto:admin@hongyuvip.com)
* QQ交流群：[90664526](http://shang.qq.com/wpa/qunwpa?idkey=a3e498d7d3329615c9b3d1dbbbc50e43fa80b39e93a1ae78f1fb0a268f3a0476)

目录结构
-------------------

```
assets/             包含资产定义
commands/           包含控制台命令（控制器）
config/             包含应用程序配置
controllers/        包含web控制器类
mail/               包含电子邮件的查看文件
models/             包含模型类
runtime/            包含运行时生成的文件
services/           包含业务逻辑层的文件
tests/              包含基本应用程序的各种测试
vendor/             包含依赖的第三方包
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

> Nginx 伪静态文件，默认生成在 web/nginx.conf
> 如果是Nginx服务器，修改nginx/conf/nginx.conf，在当前"server{}"的"location / {}"中添加下面内容：
> 如果是宝塔控制面板，在伪静态规则中添加下面内容：
```
location / {
    try_files $uri $uri/ /index.php$is_args$args;
}
```


开发日志
-------------------

版本|内容|时间|备注
:----|:-----:|-----:|-----:
eBestMall-V1.0.0|项目重构|2018-04-22|Yii2.0

