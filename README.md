eBestMall - B2B2C商城系统
===============================

eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

系统维护
-------------------

* Author: Shadow
* Http: www.ebestmall.com

项目开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 网站框架：Yii2.0、AdminLTE、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL
* 开发团队：Shadow（项目总监）、Spider（代码审计）、鸿宇团队全体成员

服务器配置
-------------------

* PHP版本：php5.4以上
* MySQL版本：MySQL5.5以上

目录
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
    runtime/             包含前端运行时生成的文件
    themes/              包含前端主题文件
        default/         包含前端默认主题文件
    views/               包含前端视图文件
    web/                 包含前端入口脚本和web资源
    widgets/             包含前端小部件
m
    assets/              包含手机端资源类
    config/              包含手机端配置文件
    controllers/         包含手机端控制器
    models/              包含手机端需要的model类
    runtime/             包含手机端运行时生成的文件
    themes/              包含手机端主题文件
        default/         包含手机端默认主题文件
    views/               包含手机端视图文件
    web/                 包含手机端入口脚本和web资源
seller
    assets/              包含第三方商家后端资源类
    config/              包含第三方商家后端配置文件
    controllers/         包含第三方商家后端控制器
    models/              包含第三方商家后端需要的model类
    runtime/             包含第三方商家后端运行时生成的文件
    views/               包含第三方商家后端视图文件
    web/                 包含第三方商家后端入口脚本和web资源
vendor/                  包含第三方依赖包
environments/            包含环境初始化覆盖文件
tests                    包含高级应用程序的各种测试
    codeception/         包含测试codeception PHP测试框架开发
```

开发日志
-------------------

```
2017年2月9日15:55:56  配置数据库   common/config/main-local.php

```


```
2016年11月2日  配置数据库   common/config/main-local.php
2016年11月2日  执行 yii migrate 数据迁移
2016年11月2日  设置 backend/frontend 主题文件夹  （backend/frontend）/config/main.php
2016年11月3日  配置系统信息  common/config/main.php
2016年11月3日  添加商城 标题、关键字、描述 全局变量 common/config/params-local.php
2016年11月3日  安装 AdminLTE 渲染 backend 界面
2016年11月3日  配置 URL 路由   （backend/frontend）/config/main.php
2016年11月4日  配置 RBAC 权限功能
2016年11月4日  backend 管理员登录功能完成
2016年11月4日  会员管理功能完成
2016年11月5日  前端：首页、登录、注册、个人中心、我的订单、购物车、确认订单 完成
2016年11月5日  后端：商品分类 完成
2016年11月6日  集成七牛第三方对象数据库存储SDK
2016年11月7日  整理前端所有Html界面
2017年01月08日 前端界面公共模板整理完成
2017年01月10日 前端面包屑导航完成

```