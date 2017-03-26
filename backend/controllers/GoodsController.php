<?php

namespace backend\controllers;

use common\models\Category;
use Yii;
use common\models\Goods;
use backend\models\GoodsSearch;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use hongyukeji\qiniu\Qiniu;

/**
 * GoodsController implements the CRUD actions for Goods model.
 */
class GoodsController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Goods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Goods::find();
        $pagination = new Pagination([
            //'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy(['goodsId' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionIndex_old()
    {
        $searchModel = new GoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Goods model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Goods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Goods();
        $cat = new Category();

        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $pics = $this->upload();
            if (!$pics) {
                $model->addError('goodsCoverImage', '封面不能为空');
            }else {
                $post['Goods']['goodsCoverImage'] = $pics['goodsCoverImage'];
                $post['Goods']['goodsAllImage'] = $pics['goodsAllImage'];
            }
            if ($pics && $model->add($post)){
                Yii::$app->session->setFlash('success', '添加成功');
                return $this->redirect(['view', 'id' => $model->goodsId]);
            }else {
                Yii::$app->session->setFlash('error', '添加失败');
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    private function upload()
    {
        if ($_FILES['Goods']['error']['goodsCoverImage'] > 0) {
            return false;
        }

        $accessKey = 'abAuGg6_8ZvL3GZevBV0c79cc47kXoezdkGqOlpj';
        $secretKey = 'pSDX4WI8A6yPD_nyB1zpFD6S8Yo3Iq3EgeRmjYNg';
        $domain = 'http://cdn.ebestmall.com';
        $bucket = 'ebestmall';
        $qiniu = new Qiniu($accessKey, $secretKey, $domain, $bucket);
        $key = uniqid();
        $qiniu->uploadFile($_FILES['Goods']['tmp_name']['goodsCoverImage'], $key);
        $goodsCoverImage = $qiniu->getLink($key);
        $goodsAllImage = [];
        foreach ($_FILES['Goods']['tmp_name']['goodsAllImage'] as $k => $file) {
            if ($_FILES['Goods']['error']['goodsAllImage'][$k] > 0) {
                continue;
            }
            $key = uniqid();
            $qiniu->uploadFile($file, $key);
            $goodsAllImage[$key] = $qiniu->getLink($key);
        }
        return ['goodsCoverImage' => $goodsCoverImage, 'goodsAllImage' => json_encode($goodsAllImage)];
    }

    public function actionFileUpload()
    {
        $accessKey = 'abAuGg6_8ZvL3GZevBV0c79cc47kXoezdkGqOlpj';
        $secretKey = 'pSDX4WI8A6yPD_nyB1zpFD6S8Yo3Iq3EgeRmjYNg';
        $domain = 'http://cdn.ebestmall.com';
        $bucket = 'ebestmall';
        $qiniu = new Qiniu($accessKey, $secretKey, $domain, $bucket);
        $key = uniqid();
        $goodsAllImage = [];
        foreach ($_FILES['Goods']['tmp_name']['goodsAllImage'] as $k => $file) {
            if ($_FILES['Goods']['error']['goodsAllImage'][$k] > 0) {
                continue;
            }
            $key = uniqid();
            $qiniu->uploadFile($file, $key);
            $goodsAllImage[$key] = $qiniu->getLink($key);
        }

        // 返回上传成功后的商品图信息
        return json_encode([
            'initialPreview' => $goodsAllImage,
            'append' => true,
        ]);

    }

    /**
     * Updates an existing Goods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->goodsId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Goods model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Goods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Goods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Goods::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /*
    public function actionUpload(){

        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
            if ($uploadSuccessPath = $model->upload()) {
                // 文件上传成功
                var_dump($uploadSuccessPath);die;
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }


    public function actionUploadOne(){

        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($uploadSuccessPath = $model->upload()) {
                // 文件上传成功
                var_dump($uploadSuccessPath);die;
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }


    public function actionFileUpload()
    {
        //var_dump(Yii::$app->request->post());die;

        // 商品ID
        $id = Yii::$app->request->post('goods_id');

        // $p1 $p2是我们处理完图片之后需要返回的信息，其参数意义可参考上面的讲解
        $p1 = $p2 = [];


        // 如果没有商品图或者商品id非真，返回空
        if (empty($_FILES['Banner']['name']) || empty($_FILES['Banner']['name']['banner']) || !$id) {
            echo '{}';
            return;
        }

        // 循环多张商品banner图进行上传和上传后的处理
        for ($i = 0; $i < count($_FILES['Banner']['name']['banner']); $i++) {
            // 上传之后的商品图是可以进行删除操作的，我们为每一个商品成功的商品图指定删除操作的地址
            $url = '/goods/img-delete';

            // 调用图片接口上传后返回的图片地址，注意是可访问到的图片地址哦
            $imageUrl = '';

            // 保存商品banner图信息
            $model = new Goods();
            $model->goodsId = $id;
            $model->goodsAllImage = $imageUrl;
            $key = 0;
            if ($model->save(false)) {
                $key = $model->goodsId;
            }

            // 这是一些额外的其他信息，如果你需要的话
            // $pathinfo = pathinfo($imageUrl);
            // $caption = $pathinfo['basename'];
            // $size = $_FILES['Banner']['size']['banner_url'][$i];


            $p1[$i] = $imageUrl;
            $p2[$i] = ['url' => $url, 'key' => $key];
        }


        // 返回上传成功后的商品图信息
        echo json_encode([
            'initialPreview' => $p1,
            'initialPreviewConfig' => $p2,
            'append' => true,
        ]);
        return;
    }*/
}
