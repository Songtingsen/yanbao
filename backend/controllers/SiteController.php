<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     *
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
	*/

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionMacDonald()
    {
	$arr = '{
    "tableData": [
        {
            "goodsName": "可口可乐",
            "price": 8,
            "count":1
        }, {
            "goodsName": "麦辣鸡腿堡",
            "price": 9.9,
            "count":1
        }, {
            "goodsName": "爱心薯条",
            "price": 8,
            "count":1
        }, {
            "goodsName": "甜筒",
            "price": 8,
            "count":1
        }
    ],
    "oftenGoods":[
        {
            "goodsId":1,
            "goodsName":"麦辣鸡腿堡",
            "price":18
        }, {
            "goodsId":2,
            "goodsName":"巨无霸",
            "price":15
        }, {
            "goodsId":3,
            "goodsName":"麦香鸡",
            "price":15
        }, {
            "goodsId":4,
            "goodsName":"香骨鸡腿",
            "price":80
        }, {
            "goodsId":5,
            "goodsName":"麦乐鸡（5块）",
            "price":10
        }, {
            "goodsId":6,
            "goodsName":"薯条",
            "price":20
        }, {
            "goodsId":7,
            "goodsName":"可乐大杯",
            "price":10
        }, {
            "goodsId":8,
            "goodsName":"香辣鸡翅",
            "price":18
        }, {
            "goodsId":9,
            "goodsName":"朱古力新地",
            "price":15
        }, {
            "goodsId":10,
            "goodsName":"ZICO椰子饮水",
            "price":17
        }
    ],
    "type0Goods":[
        {
            "goodsId":1,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061723486318.png",
            "goodsName":"麦辣鸡腿堡",
            "price":9.9
        }, {
            "goodsId":2,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061706277305.png",
            "goodsName":"巨无霸",
            "price":21
        }, {
            "goodsId":3,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061702344905.png",
            "goodsName":"麦香鸡",
            "price":12
        }
    ],
    "type1Goods":[
        {
            "goodsId":25,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/10/201510282102533259.png",
            "goodsName":"薯条",
            "price":11.5
        }, {
            "goodsId":26,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/10/201510282052093110.png",
            "goodsName":"麦乐鸡（5块）",
            "price":20
        }, {
            "goodsId":27,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/10/201510282100275134.png",
            "goodsName":"香骨鸡腿",
            "price":15
        }, {
            "goodsId":28,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/10/201510282110539567.png",
            "goodsName":"香辣鸡翅",
            "price":17
        }
    ],
    "type2Goods":[
        {
            "goodsId":37,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061810017423.png",
            "goodsName":"可口可乐",
            "price":7.3
        }, {
            "goodsId":38,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061811257892.png",
            "goodsName":"美汁源阳光橙",
            "price":11.5
        }, {
            "goodsId":39,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2019/10/201910101704455569.png",
            "goodsName":"ZICO椰子饮水",
            "price":11.5
        }
    ],
    "type3Goods":[
        {
            "goodsId":44,
            "goodsImg":"https://www.4008-517-517.cn/cn/static/1572368480356/assets/86/products/900555.png?",
            "goodsName":"鱼排堡开心乐园餐",
            "price":22
        },
         {
            "goodsId":45,
            "goodsImg":"https://www.4008-517-517.cn/cn/static/1572368480356/assets/86/products/900556.png?",
            "goodsName":"汉堡开心乐园餐",
            "price":21.5
        }
    ],
    "type4Goods":[
        {
            "goodsId":46,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061757476079.png",
            "goodsName":"圆筒冰淇淋",
            "price":4
        },
         {
            "goodsId":47,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061759166715.png",
            "goodsName":"朱古力新地",
            "price":9
        },
        {
            "goodsId":48,
            "goodsImg":"http://officialwebsitestorage.blob.core.chinacloudapi.cn/public/upload/attachment/2015/11/201511061759374646.png",
            "goodsName":"草莓新地",
            "price":9
        }
    ],
        "totalMoney":0,
        "totalCount":0
    }

 ';
        $list = json_decode($arr,true);

        return json_encode($list);
 
    }
}
