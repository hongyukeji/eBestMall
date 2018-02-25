# Yii2 - 说明文档


php.ini
-------------------
```
php_openssl
php_fileinfo
```

Yii 命令
-------------------
```
// migrate迁移
yii migrate/fresh   // 删除数据库中的所有表和外键，并从头开始应用所有迁移。
yii migrate         // 执行数据库迁移
yii migrate/down 100    // 撤销迁移 [number]
yii migrate/create create_demo_table    // 创建数据库迁移文件

// 缓存
yii cache   // 显示可用缓存组件
yii cache/flush cache1 cache2 cache3    // 刷新缓存组件：cache1，cache2 和 cache3 
yii cache/flush-all     // 刷新所有缓存组件

// yii2.0
composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
composer update --prefer-dist

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


phpstorm
```
Ctrl + Alt + T  // 当前位置插入环绕代码 如 try / catch
```

json
```
json_encode($array,JSON_UNESCAPED_UNICODE)  // Json不要编码Unicode, 正常显示中文
json_decode($string,true)  // Json格式转为数组
```


