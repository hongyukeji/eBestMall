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

use common\models\Cart;
use Yii;
use common\models\Goods;
use yii\helpers\Url;
use yii\web\Session;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;


class CartController extends BaseController
{
    /*
     * 关闭Csrf (解决ajax post提交400错误)
     */
    public function init()
    {
        $this->enableCsrfValidation = false;
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionList()
    {
        //$cart_list = $_SESSION['shoplist'];
        //return $this->render('list',['cart_list'=>$cart_list]);
        //dump($cart_list);die;
        return $this->render('list');
    }

    public function actionAdd()
    {
        // 返回上一页地址
        //p(Yii::$app->request->getReferrer());

        // 判断用户是否登录
        if (!\Yii::$app->user->isGuest) {
            // 已登录 - 写入cart 购物车表
            $user_id = Yii::$app->user->getId();

            if (Yii::$app->request->isAjax) {
                $goods_id = Yii::$app->request->post('goods_id');
                $goods_num = Yii::$app->request->post('goods_num');
                $model = Goods::findOne($goods_id);
                $price = $model->goodsIsSale ? $model->goodsSalePrice : $model->goodsPrice;

                $data['Cart'] = [
                    'goodsId' => $goods_id,
                    'goodsNumber' => $goods_num,
                    'goodsPrice' => $price,
                    'userId' => $user_id,
                ];
                if (!$model = Cart::find()->where('goodsId = :goodsId and userId = :userId', [':goodsId' => $goods_id, ':userId' => $user_id])->one()) {
                    $model = new Cart;
                } else {
                    $data['Cart']['goodsNumber'] = $model->goodsNumber + $goods_num;
                }

                $data['Cart']['createdTime'] = time();
                $model->load($data);
                $model->save();

                return json_encode(['status' => true]);
            }

            /*
            if (Yii::$app->request->isPost) {
                $post = Yii::$app->request->post();
                $goods_num = Yii::$app->request->post()['goods_num'];
                $data['Cart'] = $post;
                $data['Cart']['userId'] = $user_id;
            }
            */

            if (Yii::$app->request->isGet) {
                $goods_id = Yii::$app->request->get("id");
                $goods_num = 1;
                $model = Goods::findOne($goods_id);
                $price = $model->goodsIsSale ? $model->goodsSalePrice : $model->goodsPrice;
                $data['Cart'] = [
                    'goodsId' => $goods_id,
                    'goodsNumber' => $goods_num,
                    'goodsPrice' => $price,
                    'userId' => $user_id,
                ];
            }

            if (!$model = Cart::find()->where('goodsId = :goodsId and userId = :userId', [':goodsId' => $goods_id, ':userId' => $user_id])->one()) {
                $model = new Cart;
            } else {
                $data['Cart']['goodsNumber'] = $model->goodsNumber + $goods_num;
            }

            $data['Cart']['createdTime'] = time();
            $model->load($data);
            $model->save();

            // 跳转至购物车列表
            return $this->redirect(Url::to(['cart/list']));
        } else {
            // 未登录 - 写入session缓存
            return $this->redirect(['site/login']);
        }

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