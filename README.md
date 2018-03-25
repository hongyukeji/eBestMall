eBestMall - B2B2C商城系统
===============================

> eBestMall是基于Java SSM（Spring + SpringMVC + Mybatis）框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

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

* Java 版本：>= 1.8.0
* Tomcat 版本：>= 8.5.0
* MySQL 版本：>= 5.5.0
* Spring 版本：>= 5.0.4

系统开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Java SSM（Spring + SpringMVC + Mybatis）框架
* 前端技术：Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
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
eBestMall-V8.0.0|完成项目基础应用建设|2017-12-31|yii2.0
eBestMall-V8.0.0|完成项目基础应用建设|2018-02-18|laravel5.5
eBestMall-V8.0.0|项目架构重构|2018-03-25|Java

目录结构
-------------------

```
src/                                        根目录
    main/                                   主要目录, 包含java代码和资源文件
        java/                               存放java类
            com/
                ebestmall/
                    common/                 公共类
                    controller/             表现层：Controller层 / 控制器
                    dao/                    持久层：DAO层（mapper） / 数据访问层（接口）
                    model/                  存放模型实体类
                    pojo/                   POJO（Plain Ordinary Java Object）简单的Java对象
                    service/                业务层：Service层 / 业务逻辑（接口）
                        impl/               业务逻辑（实现）
                    util/                   工具类
                    vo/                     值对象(Value Object)
            resources/                      存放资源文件, 如各种的spring，mybatis，log配置文件
                mapper/                    存放dao中每个方法对应的sql, 在这里配置, 无需写daoImpl
                mybatis/                    存放mybatis配置文件
                spring/                     存放spring配置文件
            webapp/                         存放网站相关的资源，如jsp页面、js、图片、css样式表等
                WEB-INF/                    WEB应用的安全目录
                    views/                  视图目录
    test/                                   包含测试代码
        java/                               java测试代码
        resources/                          测试资源目录
target/                                     存放自动生成的目标代码
.gitignore                                  Git忽略规则文件
eBestMall.iml                               工程配置文件
LICENSE.md                                  许可证文件
pom.xml                                     Maven项目的核心管理文件
README.md                                   说明文件
```