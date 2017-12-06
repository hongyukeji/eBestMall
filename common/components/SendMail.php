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
     * @param array $files
     * @return bool
     */
    public function send($user, $subject, $content, $type = 'text', $files = [])
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

        if ($files) {
            foreach ($files as $file) {
                $mailObj->attach($file);
            }
        }

        $result = $mailObj->send();

        return $result;
    }

    /**
     * @param $users
     * @param $subject
     * @param $content
     * @param string $type [text, html]
     * @param array $files
     * @return int
     */
    public function sends($users, $subject, $content, $type = 'text', $files = [])
    {
        $mailBoxes = $users;
        $messages = [];

        foreach ($mailBoxes as $mailBox) {
            if ($type == 'text') {
                $message = Yii::$app->mailer->compose();
                $message->setTo($mailBox);
                $message->setSubject($subject);
                $message->setTextBody($content);
                if ($files) {
                    foreach ($files as $file) {
                        $message->attach($file);
                    }
                }
                $messages[] = $message;
            }
            if ($type == 'html') {
                $message = Yii::$app->mailer->compose();
                $message->setTo($mailBox);
                $message->setSubject($subject);
                $message->setHtmlBody($content);
                if ($files) {
                    foreach ($files as $file) {
                        $message->attach($file);
                    }
                }
                $messages[] = $message;
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
     * @param array $files
     * @return bool
     */
    public function sendTemplate($user, $subject, $viewName = 'default', $config = ['html' => 'html', 'content' => null], $files = [])
    {
        $mailObj = Yii::$app->mailer->compose($viewName, $config);
        $mailObj->setTo($user);
        $mailObj->setSubject($subject);
        if ($files) {
            foreach ($files as $file) {
                $mailObj->attach($file);
            }
        }
        $result = $mailObj->send();
        return $result;
    }

    /**
     * @param $users
     * @param $subject
     * @param string $viewName
     * @param array $config
     * @param array $files
     * @return int
     */
    public function sendTemplates($users, $subject, $viewName = 'default', $config = ['html' => 'html', 'content' => null], $files = [])
    {
        $mailBoxes = $users;
        $messages = [];

        foreach ($mailBoxes as $mailBox) {
            $message = Yii::$app->mailer->compose($viewName, $config);
            $message->setTo($mailBox);
            $message->setSubject($subject);
            if ($files) {
                foreach ($files as $file) {
                    $message->attach($file);
                }
            }
            $messages[] = $message;
        }

        $result = Yii::$app->mailer->sendMultiple($messages);

        return $result;
    }
}