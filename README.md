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

Migrate回滚并迁移数据：
php artisan migrate:refresh --seed

```

运行环境
-------------------

* Laravel版本：>= 5.5
* PHP版本：>= 5.4.0
* MySQL版本：>= 5.5.0

PHP扩展php.ini
-------------------

```
php_openssl.dll
php_soap.dll
php_fileinfo.dll
```

伪静态
-------------------

* Apache
Laravel包含一个文件，用于在路径中没有前端控制器的情况下提供URL 。
在为Apache服务Laravel之前，请务必启用该模块，以便服务器将该文件保存。
public/.htaccess index.php mod_rewrite .htaccess
```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

* Nginx
如果您使用Nginx，您的站点vhost.conf配置中的以下指令将会将所有请求都引导到前台控制器：index.php
```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

系统开发
-------------------

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Laravel5.5 LTS
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
* Email：hongyukeji@126.com

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
statics                  包含所有应用程序共有的静态资源文件
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

常用命令
-------------------

```
php artisan migrate:refresh --seed

php artisan migrate     // 迁移所有文件
php artisan migrate:refresh --seed      // 回滚再重新运行所有迁移
php artisan make:controller Admin/DemoController  // 创建 控制器
php artisan make:model Models/Demo      // 创建 模型
php artisan make:model Models/Demo -m   // 生成模型同时生成迁移文件
php artisan make:middleware Demo    // 创建 中间件
php artisan make:policy DemoPolicy  // 创建 策略类
php artisan make:seeder DemosTableSeeder     // 创建 填充文件
php artisan tinker      // tinker
php artisan make:auth       // 创建 Auth 认证
composer dump-autoload      // composer 重新加载
php artisan config:clear    // 仅清理配置文件
php artisan config:cache    // 清理并重新生成配置文件
```

PHP Artisan
-------------------

* artisan 创建 控制器
```
php artisan make:controller Admin/DemoController
```
* artisan 创建 模型
```
php artisan make:model Article
```

* 生成模型同时生成迁移文件
```
php artisan make:model Article -m
```

* artisan 创建 中间件
```
php artisan make:middleware Articles
```

* tinker
```
php artisan tinker
factory(App\Article::class,10)->make(); // 只显示不保存
factory(App\Article::class,10)->create(); // 生成演示数据并插入数据库
```

migrate 数据库文件迁移
-------------------

* 迁移所有文件
```
php artisan migrate
```

* 迁移文件并添加填充文件
```
php artisan migrate --seed
```

* 回滚再重新运行所有迁移
```
php artisan migrate:refresh --seed
```

* 新建一个article表的迁移文件
```
php artisan make:migration create_articles_table --create=articles
```

* 创建一个填充文件
```
php artisan make:seeder ArticlesTableSeeder
```

* 执行单个填充文件
```
php artisan db:seed --class=ArticlesTableSeeder
```

* 批量执行填充文件（在 /database/seeds/DatabaseSeeder.php 添加 $this->call(ArticlesTableSeeder::class);）
```
php artisan db:seed     
```

Auth 认证
-------------------

* 创建 auth ()
```
php artisan make:auth
```
* Laravel 5.4 migrate时报错: 1071 Specified key was too long
    > /app/Providers/AppServiceProvider.php
```
public function boot()
{
   \Illuminate\Support\Facades\Schema::defaultStringLength(191);
}
```

Laravel常用
-------------------

* composer 重新加载
```
composer dump-autoload
```

* artisan 清理配置文件缓存
```
php artisan config:cache    // 清理并重新生成配置文件
php artisan config:clear    // 仅清理配置文件
```

* 模板中限制内容
```
{{ str_limit($article->content, 300, '...') }}
```

* 不转义 输出格式化去掉html标签
```
{!! $content !!}
```

* 日期格式转换 [DateTime Docs](http://carbon.nesbot.com/docs/) (String Formatting)
```
$dt = Carbon::create(1975, 12, 25, 14, 15, 16);

var_dump($dt->toDateTimeString() == $dt);          // bool(true) => uses __toString()
echo $dt->toDateString();                          // 1975-12-25
echo $dt->toFormattedDateString();                 // Dec 25, 1975
echo $dt->toTimeString();                          // 14:15:16
echo $dt->toDateTimeString();                      // 1975-12-25 14:15:16
echo $dt->toDayDateTimeString();                   // Thu, Dec 25, 1975 2:15 PM

// ... of course format() is still available
echo $dt->format('l jS \\of F Y h:i:s A');         // Thursday 25th of December 1975 02:15:16 PM
```

MySQL
-------------------

* 规范
```
articles    // 表名 加 s 复数形式
user_id     // 外键 名词 加 下划线 id
created_at/updated_at   // 时间字段名规范
$article->created_at->toDateString()    // 2017-08-08
```

Form表单
-------------------

```
<!-- 所有的错误提示 -->
@if (count($errors))
    {{-- 显示第一条错误信息 --}}
    {{--<div class="alert alert-danger">
        <ul>
            <li>{{ $errors->first() }}</li>
        </ul>
    </div>--}}

    {{-- 显示所有错误信息 --}}
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--<form class="form-horizontal" method="post" action="{{ url('student/save') }}">--}}
<form class="form-horizontal" method="post" action="">
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}"/>--}}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" name="Student[name]"
                   value="{{ old('Student')['name'] ? old('Student')['name'] : $student->name }}" class="form-control"
                   id="name"
                   placeholder="请输入学生姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Student.name') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" name="Student[age]"
                   value="{{ old('Student')['age'] ? old('Student')['age'] : $student->age }}" class="form-control"
                   id="age"
                   placeholder="请输入学生年龄">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Student.age') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

        <div class="col-sm-5">
            @foreach($student->getSex() as $ind=>$val)
                <label class="radio-inline">
                    <input type="radio" name="Student[sex]"
                           {{ isset($student->sex) && $student->sex == $ind ? 'checked' : '' }} value="{{ $ind }}"> {{ $val }}
                </label>
            @endforeach
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('Student.sex') }}</p>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>
```

发送邮件
-------------------

* /.env
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mxhichina.com
MAIL_PORT=465
MAIL_USERNAME=admin@hongyuvip.com
MAIL_PASSWORD=
MAIL_ENCRYPTION=ssl
```
* Controller
```
public function mail()
{
    // 发送邮件 - 文本模式
    $name = 'Shadow';
    Mail::raw('邮件内容', function ($message) use ($name) {
        $message->from('admin@hongyuvip.com', '鸿宇科技' . $name);
        $message->subject('邮件主题');
        $message->to('1527200768@qq.com');
    });
    
    // 发送邮件 - Html模式
    Mail::send('mail.main', ['name' => '鸿宇科技', 'token' => rand(000000,999999)], function ($message){
        $message->from('admin@hongyuvip.com', '鸿宇科技');
        $message->subject('邮件主题');
        $message->to('1527200768@qq.com');
    });
}
```

php html模板语法
-------------------
* if
```
<?php if (): ?>
<?php elseif (): ?>
<?php else: ?>
<?php endif; ?>
```

开发常用
-------------------

phpstorm
```
Ctrl + Alt + T  // 当前位置插入环绕代码 如 try / catch
```

json
```
json_encode($array,JSON_UNESCAPED_UNICODE)  // Json不要编码Unicode, 正常显示中文
json_decode($string,true)  // Json格式转为数组
```


