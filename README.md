eBestMall - B2B2C商城系统
===============================

> eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

[![Latest Stable Version](https://poser.pugx.org/hongyukeji/ebestmall/v/stable.png)](https://packagist.org/packages/hongyukeji/ebestmall)
[![Total Downloads](https://poser.pugx.org/hongyukeji/ebestmall/downloads.png)](https://packagist.org/packages/hongyukeji/ebestmall)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

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
* 项目支持：感谢所有支持鸿宇团队的朋友！

系统维护
-------------------

* Http： www.ebestmall.com
* Author：Shadow
* QQ：1527200768
* Phone：13952101395
* Email：hongyukeji@126.com

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
environments/            包含环境初始化覆盖文件
tests                    包含高级应用程序的各种测试
    codeception/         包含测试codeception PHP测试框架开发
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

Yii 命令
-------------------
```
yii migrate         // 执行数据库迁移
yii migrate/down 100    // 撤销迁移 [number]
yii migrate/create create_demo_table    // 创建数据库迁移文件

```

开发文档
-------------------
* 短信

    > common/components/SendSms.php

    * 阿里短信
    
        > https://help.aliyun.com/document_detail/55451.html
    
        * 发送短信
        ```
        $result = Yii::$app->sendSms->aliSms([
            'signName' => 'eBestMall',
            'templateCode' => 'SMS_0000001',
            'phoneNumbers' => '13800138000',
            'templateParam' => [
                'code' => '123456',
                'product' => 'eBestMall'
            ],
        ]);
        
        print_r($result);
        ```
        
        * 短信发送记录查询
        ```
        $result = Yii::$app->sendSms->aliSmsQuery([
            'phoneNumbers' => '13800138000',
            'sendDate' => '20171218',
        ]);
    
        print_r($result);
        ```

* 邮件

    > common/components/SendMail.php
    
    > http://www.yiiframework.com/doc-2.0/guide-tutorial-mailing.html
    
    * 发送邮件
    ```
    $result = Yii::$app->sendMail->send(
        'ebestmall@qq.com',
        '测试邮件',
        '这是一封测试邮件',
        'text'  // 默认邮件内容为text文本格式 可选参数 html 格式
    );
    
    print_r($result);
    ```
    
    * 批量发送邮件
    ```
    $result = Yii::$app->sendMail->sends(
        ['ebestmall@qq.com','hongyukeji@126.com'],
        '测试邮件',
        '这是一封测试邮件',
    );
    
    print_r($result);
    ```
        
    * 发送模板邮件
    ```
    $result = Yii::$app->sendMail->sendTemplate(
        'ebestmall@qq.com',
        '测试邮件',
        'default',
        [
            'html' => 'html',
            'content' => '这是内容'
        ]
    );
    
    print_r($result);
    ```
    
    * 批量发送模板邮件
    ```
    $result = Yii::$app->sendMail->sendTemplates(
        ['ebestmall@qq.com','hongyukeji@126.com'],
        '测试邮件',
        'default',
        [
            'html' => 'html',
            'content' => '这是内容'
        ]
    );
    
    print_r($result);
    ```




