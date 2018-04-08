# eBestMall - B2B2C商城系统

> eBestMall是基于Laravel企业级PHP框架开发的B2B2C现代一体化电商平台系统。采用最前沿的Web技术和UI界面设计，彰显鸿宇团队的用心。同时是国内电子商务系统及服务解决方案新创品牌。为传统企业及创业者提供零售网店系统、网上商城系统、分销系统、B2B2C商城系统、微信分销系统、行业ERP等产品和解决方案。

<p align="center">
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hongyukeji/ebestmall"><img src="https://poser.pugx.org/hongyukeji/ebestmall/license.svg" alt="License"></a>
</p>


## 开始使用

> 程序安装、环境要求说明、系统简介、关于鸿宇科技

### 安装程序

```
# 稳定版：
$ composer create-project hongyukeji/ebestmall ebestmall

# 开发版：
$ composer create-project hongyukeji/ebestmall ebestmall dev-master

# 更新程序
$ composer update
```

### 服务器要求

* PHP> = 7.1.3
* OpenSSL PHP扩展
* PDO PHP扩展
* Mbstring PHP扩展
* Tokenizer PHP扩展
* XML PHP扩展
* Ctype PHP扩展
* JSON PHP扩展

### 功能介绍

|名称|进度|备注|
|:----|:-----:|-----:|
优惠券 |   进行中 |   无    |
秒杀    |   进行中  |   无    |
拼团    |   进行中  |   无    |
众筹    |   进行中  |   无    |
拍卖    |   进行中  |   无    |
预售    |   进行中  |   无    |
团购    |   进行中  |   无    |
本地生活    |   进行中  |   无    |
商品主图视频    |   进行中  |   无    |
商家地图定位    |   进行中  |   无    |
云采购商品批发  |   进行中  |   无    |

### 系统开发

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统演示：www.ebestmall.com
* 系统框架：Laravel
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL、PhotoShop CS6、
* 开发成员：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 特别鸣谢：感谢所有支持鸿宇团队的朋友！

### 系统维护

* 作者：鸿宇科技
* QQ：[1527200768](http://wpa.qq.com/msgrd?V=1&uin=1527200768&Menu=yes)
* 手机号：13952101395
* Email：[admin@hongyuvip.com](mailto:admin@hongyuvip.com)
* QQ交流群：[90664526](http://shang.qq.com/wpa/qunwpa?idkey=a3e498d7d3329615c9b3d1dbbbc50e43fa80b39e93a1ae78f1fb0a268f3a0476)

### 开发日志

|版本|内容|时间|备注|
|:----|:-----:|-----:|-----:|
v1.0.0|完成项目基础应用建设|2017-12-31|本地开发，未提交GitHub|
v1.1.0|完成项目Laravel框架重构|2018-04-08|本地开发，未提交GitHub|

## 配置

### URL伪静态

> https://laravel.com/docs/5.6#web-server-configuration

* Apache

> Apache 伪静态文件，默认生成在 public/.htaccess

```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

* Nginx

> 如果是Nginx服务器，修改nginx/conf/nginx.conf，在当前"server{}"的"location / {}"中添加下面内容：

```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```
## 开发

### ebm 常用命令 

|名称|内容|
|:----|:-----:|
ebm migrate  |   执行迁移   |
ebm migrate:refresh --seed  |   回滚并重新运行所有迁移和填充文件   |
ebm migrate:rollback  |   回滚上一次的迁移   |
ebm migrate:reset  |   回滚所有迁移   |
ebm make:migration create_example_table --create=example  |   创建迁移文件   |
ebm make:migration add_votes_to_example_table --table=example  |   给example表迁移文件增加votes字段   |
ebm make:migration add_avatar_and_introduction_to_example_table --table=example  |   给example表迁移文件增加avatar和introduction字段   |
ebm make:controller ExampleController  |   创建基础控制器   |
ebm make:controller ExampleController  --resource  |   创建Rest风格资源控制器   |
ebm make:controller make:model Models\Example  |   创建Model模型   |
ebm make:controller make:model Models\Example -m  |   创建Model模型同时生成迁移文件   |
ebm make:seeder DemoTableSeeder  |   创建填充文件   |
ebm db:seed --class=DemoTableSeeder  |   执行单个填充文件   |
ebm db:seed  |   执行所有填充文件   |
ebm make:middleware Example  |   创建中间件（app/Http/Middleware）   |
ebm queue:table  |   创建队列（数据库）的表迁移（需要执行迁移才生效）   |
ebm make:job SendEmail  |   创建队列类（app/jobs）   |
ebm make:request CreateExampleRequest  |   创建请求类（app/Http/Requests）   |

### ebm 系统命令

> 使用： 命令[选项] [参数]

- 选项：

```
-h, --help          帮助显示此帮助消息
-q, --quiet         安静，不输出任何消息
-V, --version       版本显示此应用程序版本
  --ansi            ANSI力ANSI输出
  --no-ansi         没有ANSI禁用ANSI输出
-n, --no-interaction  没有交互不会问任何交互问题
  --env[=ENV]       该命令应该运行在以下环境中
-v|vv|vvv, --verbose  详细增加信息的冗长：1正常输出，2更详细的输出和3的调试

```

- 可用的命令：
```
  clear-compiled       清除编译后删除编译的类文件
  down                 将应用程序放到维护模式中
  env                  显示当前框架环境
  help                 帮助显示命令的帮助
  inspire              激励显示一个鼓舞人心的报价
  list                 列出的命令
  migrate              迁移运行数据库迁移
  optimize             优化优化性能更好的框架（不推荐使用）
  preset               预置交换应用程序的前端支架
  serve                在php开发服务器上服务应用程序
  tinker               修补程序与应用程序交互
  up                   将应用程序排除在维护模式之外
 app                   应用
  app:name             名称：设置应用程序名称空间
 auth                  认证
  auth:clear-resets    作者：清重置冲洗过期密码重置令牌
 cache                 缓存
  cache:clear          缓存：清除应用程序缓存
  cache:forget         缓存：忘记从缓存中删除项
  cache:table          缓存：为缓存数据库表创建一个迁移
 config                配置
  config:cache         缓存创建一个缓存文件以加快配置加载
  config:clear         配置：清除删除配置缓存文件
 db                    数据库
  db:seed              DB种子数据库与记录
 event                 事件
  event:generate       事件：生成基于注册的丢失事件和侦听器
 key                   密钥
  key:generate         密钥：生成应用程序密钥
 make                  制作
  make:auth            制作：奥特脚手架基本的登录和注册的观点和路线
  make:command         创建一个新的工匠命令
  make:controller      创建一个新的控制器类
  make:event           创建一个新的事件类
  make:exception       创建异常，创建一个新的自定义异常类
  make:factory         创建一个新的模型工厂
  make:job             创建新的作业类
  make:listener        创建一个新的事件侦听器类
  make:mail            创建新邮件类
  make:middleware      创建一个新的中间件类
  make:migration       创建一个新的迁移文件
  make:model           创建一个新的雄辩模型类
  make:notification    创建一个新通知类
  make:policy          创建一个新的策略类
  make:provider        创建一个新的服务提供者类
  make:request         创建一个新的表单请求类
  make:resource        创造新资源
  make:rule            创建一个新的验证规则
  make:seeder          创建新播种机类
  make:test            创建一个新的测试类
 migrate               迁移
  migrate:fresh        迁移：删除所有表并重新运行所有迁移
  migrate:install      迁移：安装创建迁移存储库
  migrate:refresh      刷新重置并重新运行所有迁移
  migrate:reset        重置回滚所有数据库迁移
  migrate:rollback     回滚最后一个数据库迁移
  migrate:status       状态显示每个迁移的状态
 notifications         通知
  notifications:table  创建一个迁移为通知表
 package               包
  package:discover     重新发现缓存的包清单
 queue                 队列
  queue:failed         失败列表，所有失败的队列作业
  queue:failed-table   失败的表，为失败的队列工作数据库表创建迁移
  queue:flush          刷新所有失败的队列工作
  queue:forget         忘记删除失败的队列作业
  queue:listen         监听给定的队列
  queue:restart        启动电流工作后重新启动队列工作进程
  queue:retry          重试重试失败的队列作业
  queue:table          为队列作业数据库表创建一个迁移
  queue:work           工作开始时将队列中的作业作为守护进程处理。
 route                 路由
  route:cache          缓存创建路由缓存文件以加快路由注册速度
  route:clear          清除路由缓存文件
  route:list           列表列出所有已注册的路由
 schedule              计划
  schedule:run         运行预定的命令
 session               会话
  session:table        为会话数据库表创建一个迁移
 storage               存储
  storage:link         创建一个符号链接，从"public/storage" 到 "storage/app/public"
```