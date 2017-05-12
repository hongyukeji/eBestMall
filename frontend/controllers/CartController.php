<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/30 20:41
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\controllers;

use Yii;
use common\models\Goods;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Session;

$session = new Session;
$session->open();

class CartController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'add'],
                'rules' => [
                    [
                        'actions' => ['index', 'add'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index', 'add'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $cart_list = $_SESSION['shoplist'];
        //return $this->render('list',['cart_list'=>$cart_list]);
        return $this->render('index');
    }

    public function actionList()
    {
        $cart_list = $_SESSION['shoplist'];
        //return $this->render('list',['cart_list'=>$cart_list]);
        //dump($cart_list);die;
        return $this->render('list');
    }

    public function actionAdd($id)
    {
        // 判断用户是否登录

        // 登录 - 写入cart 购物车表

        // 未登录 - 写入session缓存

        // 跳转至购物车列表
    }
    public function actionAdd_old($id)
    {
        $session = Yii::$app->session;
        $goods_model = new Goods();
        $good_info = $goods_model->findOne($id);
        //p($good_info['goodsName']);die;
        //信息为空或者数量<0,则不存在要购买的商品,否则把要购买的商品添加到session中
        if (empty($good_info) || count($good_info) < 0) {
            exit("No Goods");
        } else {

            //dump($good_info);die;
            //$good_info['num'] = 1;

            //判断购物车中是否已经存在该商品，存在的话数量叠加，
            if (isset($_SESSION["shoplist"][$good_info['goodsId']])) {
                //若存在数量叠加
                $num = $_SESSION["shoplist"][$good_info['goodsId']]['num'];
                $num++;
                $_SESSION["shoplist"][$good_info['goodsId']]['num'] = $num;
                //$_SESSION["shoplist"][$good_info['goodsId']]['num'] ++;
            } else {
                //若不存在，作为新购买的商品添加到购物车中
                $_SESSION["shoplist"][$good_info['goodsId']] = $good_info;
            }
            // $_SESSION['shoplist'][]=$good_info;
            return $this->redirect('./index.php?r=cart/list');
        }
    }

    public function actionDelete()
    {
        $cart_list = $_SESSION['shoplist'];
        //判断是删除一个商品还是请空购物车
        if ($_GET['id']) {
            //从session中删除指定的商品信息
            unset($_SESSION["shoplist"][$_GET['id']]);
        } else {
            //清空session中商品,清空购物车
            unset($_SESSION["shoplist"]);
        }
        return $this->redirect("./index.php?r=cart/list");
    }

    public function actionUpdate()
    {

    }
}