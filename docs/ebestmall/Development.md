# eBestMall Developing documents

> eBestMall 开发文档

API
-------------------
* 短信

> common/components/SendSms.php

```
Yii::$app->sms->send($templateCode,$phoneNumbers,$templateParam = null);
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
    'text',  // 默认邮件内容为text文本格式 可选参数 html 格式
    [
        'robots.txt'
    ]
);

print_r($result);
```

* 批量发送邮件
```
$result = Yii::$app->sendMail->sends(
    ['ebestmall@qq.com','hongyukeji@126.com'],
    '测试邮件',
    '这是一封测试邮件'
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
