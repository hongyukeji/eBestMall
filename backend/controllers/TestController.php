<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/2/11 19:13
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace backend\controllers;

use Yii;

class TestController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDemo()
    {
        return $this->render('demo');
    }

    public function actionEmail()
    {
        /*
         * /vendor/yiisoft/yii2-swiftmailer/Mailer.php
         * Yii::$app->mailer->compose('contact/html', ['contactForm' => $form])
         * ->setFrom('from@domain.com')
         * ->setTo($form->email)
         * ->setSubject($form->subject)
         * ->send();
        */

        $data = [];
        $data['name'] = 'admin';
        $data['url'] = Yii::$app->urlManager->createAbsoluteUrl([
            'test/mailchangepass',
            'timeStamp' => time(),
            'adminUser' => $data['name'],
            'token' => $this->createToken($data['name'], time()),
        ]);

        $mailer = Yii::$app->mailer->compose('seekpass', ['data' => $data]);
        $mailer->setFrom("admin@hongyuvip.com");
        $mailer->setTo("admin@hongyuvip.com");
        $mailer->setSubject("eBestMall Test Email");
        if ($mailer->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function actionMailchangepass()
    {
        $time = Yii::$app->request->get("timeStamp");
        $adminuser = Yii::$app->request->get("adminUser");
        $token = Yii::$app->request->get("token");
        $mytoken = $this->createToken($adminuser, $time);
        if ($token != $mytoken) {
            $this->redirect(['site/login']);
            Yii::$app->end();
        }
        if (time() - $time > 300) {
            $this->redirect(['site/login']);
            Yii::$app->end();
        }

        return $this->render('mailchangepass');
    }

    public function createToken($adminuser, $time)
    {
        return md5(md5($adminuser) . base64_encode(Yii::$app->request->userIP) . md5($time));
    }
}