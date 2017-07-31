<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= \yii\helpers\Html::encode(Yii::$app->user->identity->username)?></p>

                <a href="#"><i class="fa fa-circle text-success"></i>&nbsp;<?= \yii\helpers\Html::encode(Yii::t('app', 'Online'))?></a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?= \yii\helpers\Html::encode(Yii::t('app', 'Search'))?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?php
        use mdm\admin\components\MenuHelper;
        $callback = function($menu){
            $data = json_decode($menu['data'], true);
            $items = $menu['children'];
            $return = ['label' => $menu['name'],'url' => [$menu['route']]];
            //处理我们的配置
            if ($data) {
                isset($data['visible']) && $return['visible'] = $data['visible'];//visible
                isset($data['icon']) && $data['icon'] && $return['icon'] = $data['icon'];//icon
                //other attribute e.g. class...
                $return['options'] = $data;
            }
            //没配置图标的显示默认图标
            (!isset($return['icon']) || !$return['icon']) && $return['icon'] = 'circle-o';
            $items && $return['items'] = $items;
            return $return;
        };
        //对菜单menu进行了优化
        echo dmstr\widgets\Menu::widget( [
            'options' => ['class' => 'sidebar-menu'],
            'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id,null, $callback),
        ] );
        ?>

    </section>

</aside>
