<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/2/9 22:33
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

namespace frontend\controllers;

use common\models\Attribute;
use common\models\AttributeExtend;
use common\models\Cart;
use common\models\Goods;
use common\models\Product;
use common\models\ProductSku;
use common\models\Store;
use frontend\models\TestForm;
use vova07\imperavi\actions\GetAction;
use Yii;
use frontend\models\EntryForm;
use yii\data\Pagination;
use common\models\Country;
use Detection\MobileDetect;
use yii\helpers\Url;
use yii\web\Cookie;
use yii\web\UploadedFile;

class TestController extends BaseController
{
    public function actionIndex()
    {
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionEntry()
    {
        $model = new EntryForm;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据
            // 做些有意义的事 ...
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionTest()
    {
        $device = new MobileDetect();
        if ($device->isMobile()) {
            echo "mobile";
        } else if ($device->isTablet()) {
            echo "tablet";
        } else {
            echo "desktop";
        }
    }

    public function actionSession()
    {
        // Session test
        $session = Yii::$app->session;

        $session['language'] = 'en-US';
        $language = $session['language'];

        dump($language);

    }

    public function actionShowSession()
    {
        $session = Yii::$app->session;
        $language = $session['language'];

        dump($language);
        dump(date("Y-m-d H:i", '1495118417'));
        //获取用户session id
        dump(Yii::$app->session->getId());
    }

    public function actionDelSession()
    {
        Yii::$app->session->removeAll();
        Yii::$app->session->destroy();
    }

    public function actionCache()
    {
        // 缓存测试
        $cache = Yii::$app->cache;
        //var_dump($cache->add('name','shadow'));   //添加缓存
        //var_dump($cache->get('name'));    //获取缓存
        //var_dump($cache->delete('name')); //删除缓存
        //var_dump($cache->flush());    //全部清空
    }

    public function actionUpload()
    {
        $upload = new \frontend\models\Upload();
        if (Yii::$app->request->isPost) {
            $upload->uploadFile = UploadedFile::getInstance($upload, 'uploadFile');
            if ($upload->upload()) {
                echo 'yes';
            } else {
                var_dump($upload->getErrors());
                echo 'no';
            }
        }
        return $this->render('upload', ['upload' => $upload]);
    }

    public function actionCookie()
    {
        /*
        //添加cookie第一种方法
        $cookie = new Cookie();
        $cookie->name = 'user_name';
        $cookie->expire = time() + 86400;
        $cookie->httpOnly = true;
        $cookie->value = 'shadow';
        var_dump(Yii::$app->response->getCookies()->add($cookie));
        */

        /*
        //添加cookie第二种方法
        $cookie = new Cookie([
            'name' => 'user_name',
            'expire' => time() + 86400,
            'httpOnly' => true,
            'value' => 'shadow',
        ]);
        var_dump(Yii::$app->response->getCookies()->add($cookie));
        */

        /*
        //打印cookie
        $cookies = Yii::$app->request->cookies;
        var_dump($cookies->get('user_name')); //输出cookie
        var_dump($cookies->getValue('user_name'));  //输出cookie
        var_dump($cookies->has('user_name'));   //判断cookie是否存在
        var_dump($cookies->count());   //显示cookie数量
        var_dump($cookies->getCount());   //显示cookie数量
        */

        /*
        //删除cookie
        $cookies = Yii::$app->request->cookies;
        $cookie_temp = $cookies->get('user_name');
        var_dump(Yii::$app->response->getCookies()->remove($cookie_temp));  //删除指定cookie
        var_dump(Yii::$app->response->getCookies()->removeAll());  //删除所有cookie
        */

        /*
        //session
        $session = Yii::$app->session;
        $session->set('user_name_temp','shadow');   //添加session
        var_dump($session->get('user_name_temp'));  //获取session
        var_dump($session->remove('user_name_temp'));   //删除session
        var_dump($session->removeAll());   //删除所有session
        */
    }

    public function actionCart()
    {
        $session = Yii::$app->session;

        //购物车session不存在则创建
        if (!$session->has('cart')) {
            $session->set('cart', array());
        }

        $item = array(
            'goodsId' => mt_rand(1000, 9999),
            'goodsName' => '苹果 Apple iPhone8 4G手机 黑色',
            'goodsNumber' => '1',
            'goodsPrice' => '6999.00',
            'goodsAttributes' => array(
                'attributeId' => '10001',
                'attributeName' => '颜色',
                'attributeValue' => '黑色',
            ),
            'userId' => '1',
            'sellerId' => '1',
            'createdTime' => '1498639500',
            'updatedTime' => '1498639500',
        );

        /*
        $item = array();
        $item['cartId'] = $cartId;
        $item['goodsId'] = $goodsId;
        $item['goodsName'] = $goodsName;
        $item['goodsNumber'] = $goodsNumber;
        $item['goodsPrice'] = $goodsPrice;
        $item['goodsAttributes'] = $goodsAttributes;
        $item['userId'] = $userId;
        $item['sellerId'] = $sellerId;
        $item['createdTime'] = $createdTime;
        $item['updatedTime'] = $updatedTime;
        */

        //$session->addFlash('cart', $item);
        //dump($session->get('cart'));
        dump($_SESSION['cart']);
        //dump($session->getId());
        //dump($session->remove('cart'));
        //dump($session->removeAll());

    }

    /**
     * 加入购物车
     * @param $id
     * http://shop.com/index.php?r=test/cart-add&id=1&number=19&attributes={颜色:黑色}
     */
    public function actionCartAdd($id, $number, $attributes)
    {
        //获取添加到购物车的商品信息
        $goods_model = new Goods();
        $goods_info = $goods_model->findOne($id);

        //商品信息为空或者数量<0,则不存在要购买的商品,否则将购买的商品添加到session中
        if (empty($goods_info) || count($goods_info) < 0) {
            exit("商品不存在");
        } else {
            $goods_info['goodsNumber'] = $number;
        }

        //判断购物车中是否已经存在该商品,存在则数量累加
        if (isset($_SESSION['cart'][$goods_info['goodsId']])) {
            //若存在,数量累加
            $goodsNumber = $_SESSION['cart'][$goods_info['goodsId']]['goodsNumber'];
            $goodsNumber += $number;
            $_SESSION['cart'][$goods_info['goodsId']]['goodsNumber'] = $goodsNumber;
        } else {
            //若不存在,则作为新购买的商品添加到购物车session中
            $item = array(
                'goodsId' => $goods_info['goodsId'],
                'goodsName' => $goods_info['goodsName'],
                'goodsNumber' => $number,
                'goodsPrice' => $goods_info['goodsPrice'],
                'goodsAttributes' => $attributes,
                'sellerId' => $goods_info['sellerId'],
                'createdTime' => time(),
                'updatedTime' => time(),
            );

            $_SESSION['cart'][$goods_info['goodsId']] = $item;
        }

        dump($_SESSION['cart']);

        //return $this->redirect(Url::to(['cart/index']));
    }

    public function actionCartAdd_old($id)
    {
        //获取添加到购物车的商品信息
        $goods_model = new Goods();
        $goods_info = $goods_model->findOne($id);

        //商品信息为空或者数量<0,则不存在要购买的商品,否则将购买的商品添加到session中
        if (empty($goods_info) || count($goods_info) < 0) {
            exit("商品不存在");
        } else {
            $goods_info['goodsNumber'] = 1;
        }

        //判断购物车中是否已经存在该商品,存在则数量累加
        if (isset($_SESSION['cart'][$goods_info['goodsId']])) {
            //若存在,数量累加
            $num = $_SESSION['cart'][$goods_info['goodsId']]['goodsNumber'];
            $num++;
            $_SESSION['cart'][$goods_info['goodsId']]['goodsNumber'] = $num;
            //$_SESSION['cart'][$goods_info['goodsId']]['$goodsNumber']++;
        } else {
            //若不存在,则作为新购买的商品添加到购物车session中
            $_SESSION['cart'][$goods_info['goodsId']] = $goods_info;
        }
        //$_SESSION['cart'][] = $goods_info;
        dump($_SESSION['cart'][$id]['goodsNumber']);

        dump($_SESSION['cart']);

        //return $this->redirect(Url::to(['cart/index']));

    }

    public function actionCategory()
    {
        //category
        $model = '';
        return $this->redirect(['category', 'model' => '1']);
    }

    public function actionCartList()
    {
        /*
        $a=array(1,2,3,4,5);
        dump($a);
        dump(array_map(function ($v){
            return($v*$v);
        },$a));
        */

        //1.根据用户id,取出购物车中该用户所有商品
        $model = new Cart();

        $user_id = 1;

        //$cart = $model->find()->where(['user_id' => $user_id])->all();

        /*
        $result = array_map(function ($record) {
            return $record->store_id;
        }, $model->find()->select(['store_id'])->where(['user_id' => 1])->all());
        */

        $store = array_unique(array_map(function ($record) {
            return $record->store_id;
        }, $model->find()->select(['store_id'])->where(['user_id' => $user_id])->all()));

        for ($i = 0; $i < count($store); $i++) {
            $store_name = Store::find()->select(['store_name'])->where(['store_id' => $store[$i]])->scalar();
            $store_list[$store_name] = $model->find()->where(['user_id' => $user_id, 'store_id' => $store[$i]])->all();
        }

        $goods_list = [];
        // 测试输出结果
        foreach ($store_list as $k => $v) {
            echo "<pre>" . $k . "<hr>";
            $product_list = array(
                'storeName' => $k,
                'goodsList' => [],
            );
            foreach ($v as $product_key => $product_value) {
                $product = array(
                    'cartId' => $product_value['cart_id'],
                    'goodsId' => $product_value['product_id'],
                    'goodsName' => Product::find()->select(['product_name'])->where(['product_id' => $product_value['product_id']])->scalar(),
                    'goodsImage' => Product::find()->select(['product_cover'])->where(['product_id' => $product_value['product_id']])->scalar(),
                    'goodsPrice' => ProductSku::find()->select(['price'])->where(['product_id' => $product_value['sku_id']])->scalar(),
                    'goodsNumber' => $product_value['product_number'],
                    'attributes' => [],
                );
                print_r("<pre>" . "购物车ID:" . $product_value['cart_id'] . "<pre>");
                print_r("<pre>" . "商品ID:" . $product_value['product_id'] . "<pre>");
                print_r("名称:" . Product::find()->select(['product_name'])->where(['product_id' => $product_value['product_id']])->scalar() . "<pre>");
                print_r("图片:" . Product::find()->select(['product_cover'])->where(['product_id' => $product_value['product_id']])->scalar() . "<pre>");
                print_r("价格:" . ProductSku::find()->select(['price'])->where(['product_id' => $product_value['sku_id']])->scalar() . "<pre>");
                print_r("数量:" . $product_value['product_number'] . "<pre>");
                //print_r(ProductSku::find()->select(['attribute'])->where(['product_id' => $product_value['sku_id']])->scalar() . "<pre>");
                $attribute = json_decode(ProductSku::find()->select(['attribute'])->where(['product_id' => $product_value['sku_id']])->scalar());
                //print_r(json_decode($data));
                //print_r(json_encode($data));
                foreach ($attribute as $attribute_key => $attribute_value) {
                    $attributes = array(
                        'attributeName' => Attribute::find()->select(['attribute_name'])->where(['attribute_id' => AttributeExtend::find()->select(['attribute_id'])->where(['id' => $attribute_value])->scalar()])->scalar(),
                        'attributeValue' => AttributeExtend::find()->select(['attribute_value'])->where(['id' => $attribute_value])->scalar(),
                    );
                    array_push($product['attributes'], $attributes);
                    echo "<p>"
                        . Attribute::find()->select(['attribute_name'])->where(['attribute_id' => AttributeExtend::find()->select(['attribute_id'])->where(['id' => $attribute_value])->scalar()])->scalar()
                        . '-'
                        . AttributeExtend::find()->select(['attribute_value'])->where(['id' => $attribute_value])->scalar()
                        . "</p>";
                }
                array_push($product_list['goodsList'], $product);
                print_r("小计:" . $product_value['product_number'] * ProductSku::find()->select(['price'])->where(['product_id' => $product_value['sku_id']])->scalar() . "<pre>" . "<hr style= \"border:1px dashed  #eeeeee\" /> ");
            }
            array_push($goods_list, $product_list);
        }
        print_r($goods_list);
        $temp = array(1, 2, 3, 4, 5, 6);
        print_r($temp);
        $datas = range(10, 10);
        array_push($temp, '7', '8', '9', $datas);
        print_r($temp);

    }

    public function actionEdit()
    {
        $model = new TestForm();
        return $this->render('edit', ['model' => $model]);
    }

    public function actionAjax()
    {
        dump(Product::find()->select(['store_id'])->where(['product_id' => 1])->scalar());
        //return $this->render('ajax',[]);
    }

    public function actionAjaxData()
    {
        echo "测试请求";

        echo "<pre>";
        var_dump($_GET);
        var_dump($_POST);
        echo "</pre>";
    }
}