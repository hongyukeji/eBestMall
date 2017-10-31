eBestMall - B2B2C商城系统
===============================
> eBestMall是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

[![Latest Stable Version](https://poser.pugx.org/hongyukeji/ebestmall/v/stable.png)](https://packagist.org/packages/hongyukeji/ebestmall)
[![Total Downloads](https://poser.pugx.org/hongyukeji/ebestmall/downloads.png)](https://packagist.org/packages/hongyukeji/ebestmall)

# 安装与更新

```
运营版：
composer create-project hongyukeji/ebestmall ebestmall

开发版：
composer create-project hongyukeji/ebestmall ebestmall dev-master

更新：
composer update

Migrate回滚并迁移数据：
php artisan migrate:refresh --seed
```

# 运行环境

* PHP版本：>=7.0
* MySQL版本：>=5.5

# 系统开发

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Laravel5.5 LTS
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL、PhotoShop CS6、XMind
* 开发团队：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 项目支持：感谢所有支持鸿宇团队的朋友！

# 系统维护

* Http： www.ebestmall.com
* Author：Shadow
* Email：admin@hongyuvip.com
* QQ：1527200768
* Phone：13952101395

# 伪静态

* Apache
    > Laravel包含一个文件，用于在路径中没有前端控制器的情况下提供URL 。在为Apache服务Laravel之前，请务必启用该模块，以便服务器将该文件保存。public/.htaccess index.php mod_rewrite .htaccess
    ```
    Options +FollowSymLinks
    RewriteEngine On
    
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
    ```

* Nginx
    > 如果您使用Nginx，您的站点vhost.conf配置中的以下指令将会将所有请求都引导到前台控制器：index.php
    ```
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    ```

# 开发日志

```
2016-10-08 09:30:39 RBAC 权限管理 ( 完成 )
2016-12-18 12:26:58 公共布局页面 ( 完成 )
2017-03-16 20:39:56 管理员模块 ( 完成 )
2017-03-17 17:51:50 后端系统模块 ( 完成 )
2017-04-01 16:07:18 数据库初期建模 ( 完成 )
2017-05-11 16:17:29 前后端html视图 ( 完成 )
2017-06-18 18:18:18 购物功能建模 ( 完成 )
2017-06-27 17:29:39 手机端UI设计 ( 完成 )
2017-07-17 23:53:30 前端代码审计 ( 完成 )
2017-07-18 00:29:56 注册登陆功能 （完成）
2017-07-18 00:43:34 前端会员中心视图 （完成）
2017-07-18 10:28:33 购物车功能模块 （完成）
2017-07-18 11:15:26 会员功能模块 （完成）
2017-07-18 13:56:18 商品展示模块 （完成）
2017-07-18 16:37:56 商品/购物车/订单/商品分类/数据建模 （完成）
2017-07-18 21:22:43 注册->登录->查看商品->加入购物车功能模块 （完成）
2017-07-18 21:22:43 提交订单->付款->查看订单信息->确认收货 （完成）
2017-08-31 13:20:25 eBestMall转移至laravel 5.5 LTS 框架 （进行中）
```

# 常用命令

```
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

# PHP Artisan

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

# migrate 数据库文件迁移

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

# Auth 认证

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

# 常用

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

# MySQL

* 规范
```
articles    // 表名 加 s 复数形式
user_id     // 外键 名词 加 下划线 id
created_at/updated_at   // 时间字段名规范
$article->created_at->toDateString()    // 2017-08-08
```

# Form表单
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

# 发送邮件

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