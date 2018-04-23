eBestMall - B2B2C商城系统
===============================

> eBestMall是基于Java Spring Boot框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

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
```

运行环境
-------------------

* Java 版本：>= 1.8
* Tomcat 版本：>= 8.5
* Spring Boot 版本：>= 2.0
* MySQL 版本：>= 5.1

系统开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统演示：www.ebestmall.com
* 系统框架：Spring Boot
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：IntelliJ IDEA、Navicat for MySQL、PhotoShop CS6、
* 开发成员：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 特别鸣谢：感谢所有支持鸿宇团队的朋友！

系统维护
-------------------

* 作者：鸿宇科技
* QQ：[1527200768](http://wpa.qq.com/msgrd?V=1&uin=1527200768&Menu=yes)
* 手机号：13952101395
* Email：[admin@hongyuvip.com](mailto:admin@hongyuvip.com)
* QQ交流群：[90664526](http://shang.qq.com/wpa/qunwpa?idkey=a3e498d7d3329615c9b3d1dbbbc50e43fa80b39e93a1ae78f1fb0a268f3a0476)

开发日志
-------------------

版本|内容|时间|备注
:----|:-----:|-----:|-----:
eBestMall-V1.0.0|项目架构重构|2018-04-12|Java Spring Boot

目录结构
-------------------

```
src/                                    根目录
    main/                               主要目录, 包含java代码和资源文件
        java/                           存放java类
            com.ebestmall.shop/
                controller/             表现层：Controller层 / 控制器
                domain/                 主要包含实体（Entity）与数据访问层（Repository）
                service/                主要包含业务类代码
                util/                   工具类
                vo/                     值对象(Value Object)
        resources/                      存放资源文件, 如各种的spring，mybatis，log配置文件
            mapper/                     存放dao中每个方法对应的sql, 在这里配置, 无需写daoImpl
            config/                     存放spring boot配置文件
            public/                     网站根目录
            static/                     静态资源文件
            templates/                  视图目录
    test/                               包含测试代码
        java/                           ava测试代码
target/                                 存放自动生成的目标代码
.gitignore                              Git忽略规则文件
eBestMall.iml                           工程配置文件
LICENSE.md                              许可证文件
pom.xml                                 Maven项目的核心管理文件
README.md                               项目说明文件
```