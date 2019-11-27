<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\filters\Cors;

/**
 * Site controller
 */
class IndexController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => Cors::className(),
            	'cors' => [
                'Origin' => ['*'],
                'Access-Control-Request-Method' => ['GET', 'HEAD', 'OPTIONS','POST'],
            ],
		],
        ];
    }

    public function actionYbschool(){
    	$json = '{
    "TeamRanking":[
        {
            "id":1,
            "img":"images/",
            "title":"宜宾学院",
            "team":[
                {
                    "teamOne":"队友1",
                    "teamTwo":"队友2",
                    "teamThree":"队友3"
                }
            ],
            "grade":856
        },
        {
            "id":2,
            "img":"images/",
            "title":"钦州学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":778
        },
        {
            "id":3,
            "img":"images/",
            "title":"枣庄学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":589
        },
        {
            "id":4,
            "img":"images/",
            "title":"辽宁科技学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":571
        },
        {
            "id":5,
            "img":"images/",
            "title":"广东石油化工学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":552
        },
        {
            "id":6,
            "img":"images/",
            "title":"河北民族师范学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":598
        },
        {
            "id":7,
            "img":"images/",
            "title":"重庆三峡学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":"复活赛"
        },
        {
            "id":8,
            "img":"images/",
            "title":"河北环境工程学院",
            "team":[
                {
                    "teamOne":"小明",
                    "teamTwo":"小花",
                    "teamThree":"小蓝"
                }
            ],
            "grade":"已淘汰"
        }
    ]
}';
	$list = json_decode($json,true);

        return json_encode($list);

    }

    public function actionIndex()
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
