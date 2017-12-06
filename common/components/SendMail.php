<?php
/**
 * eBestMall - 邮件组件
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/12/6 11:01
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace app\common\components;

use Yii;
use yii\base\Component;

class SendMail extends Component
{
    public $config;

    /**
     * @param $user
     * @param $subject
     * @param $content
     * @param string $type [text, html]
     * @return bool
     */
    public function send($user, $subject, $content, $type = 'text')
    {
        $mailObj = Yii::$app->mailer->compose();

        $mailObj->setTo($user);
        $mailObj->setSubject($subject);

        if ($type == 'text') {
            $mailObj->setTextBody($content);
        }

        if ($type == 'html') {
            $mailObj->setHtmlBody($content);
        }

        $result = $mailObj->send();

        return $result;
    }

    /**
     * @param $users
     * @param $subject
     * @param $content
     * @param string $type [text, html]
     * @return int
     */
    public function sends($users, $subject, $content, $type = 'text')
    {
        $mailBoxes = $users;
        $messages = [];

        foreach ($mailBoxes as $mailBox) {
            if ($type == 'text') {
                $messages[] = Yii::$app->mailer->compose()
                    ->setTo($mailBox)
                    ->setSubject($subject)
                    ->setTextBody($content);
            }
            if ($type == 'html') {
                $messages[] = Yii::$app->mailer->compose()
                    ->setTo($mailBox)
                    ->setSubject($subject)
                    ->setHtmlBody($content);
            }
        }

        $result = Yii::$app->mailer->sendMultiple($messages);

        return $result;
    }

    /**
     * @param $user
     * @param $subject
     * @param string $viewName
     * @param array $config
     * @return bool
     */
    public function sendTemplate($user, $subject, $viewName = 'default', $config = ['html' => 'html', 'content' => null])
    {
        $result = Yii::$app->mailer->compose($viewName, $config)
            ->setTo($user)
            ->setSubject($subject)
            ->send();

        return $result;
    }

    /**
     * @param $users
     * @param $subject
     * @param string $viewName
     * @param array $config
     * @return int
     */
    public function sendTemplates($users, $subject, $viewName = 'default', $config = ['html' => 'html', 'content' => null])
    {
        $mailBoxes = $users;
        $messages = [];

        foreach ($mailBoxes as $mailBox) {
            $messages[] = Yii::$app->mailer->compose($viewName, $config)
                ->setTo($mailBox)
                ->setSubject($subject);
        }

        $result = Yii::$app->mailer->sendMultiple($messages);

        return $result;
    }
}