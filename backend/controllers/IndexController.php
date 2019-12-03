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

	function actionGetphone()
{
	$arr = '{"code":"1","msg":"","data":[

    {"id":"1","name":"张三","tel":"152****1253"},

    {"id":"2","name":"李四","tel":"152****1253"},

    {"id":"3","name":"王大麻子","tel":"152****1253"},

    {"id":"4","name":"阿拉","tel":"152****1253"},

    {"id":"5","name":"活动时间","tel":"152****1253"},

    {"id":"6","name":"分阿萨德","tel":"152****1253"},

    {"id":"7","name":"按时啊","tel":"152****1253"},

    {"id":"8","name":"富商大贾","tel":"152****1253"},

    {"id":"9","name":"分公司","tel":"152****1253"},

    {"id":"10","name":"个双方各","tel":"152****1253"},

    {"id":"11","name":"张是梵蒂冈三","tel":"152****1253"},

    {"id":"12","name":"双方各","tel":"152****1253"},

    {"id":"13","name":"是是梵蒂冈","tel":"152****1253"},

    {"id":"14","name":"对方感受到","tel":"152****1253"},

    {"id":"15","name":"的是干啥的","tel":"152****1253"},

    {"id":"16","name":"十多个发送到个","tel":"152****1253"},

    {"id":"17","name":"的双方各","tel":"152****1253"},

    {"id":"18","name":"换个","tel":"152****1253"},

    {"id":"19","name":"就梵蒂冈和","tel":"152****1253"},

    {"id":"20","name":"东方红","tel":"152****1253"},

    {"id":"21","name":"张和豆腐干三","tel":"152****1253"},

    {"id":"22","name":"大概","tel":"152****1253"},

    {"id":"23","name":"烦得很","tel":"152****1253"},

    {"id":"24","name":"梵蒂冈","tel":"152****1253"},

    {"id":"25","name":"电饭锅和","tel":"152****1253"},

    {"id":"26","name":"个","tel":"152****1253"},

    {"id":"27","name":"订个婚","tel":"152****1253"},

    {"id":"28","name":"东方红","tel":"152****1253"},

    {"id":"29","name":"电饭锅和","tel":"152****1253"},

    {"id":"30","name":"好","tel":"152****1253"},

    {"id":"31","name":"好的","tel":"152****1253"},

    {"id":"32","name":"额特","tel":"152****1253"},

    {"id":"33","name":"热水","tel":"152****1253"},

    {"id":"34","name":"刚刚","tel":"152****1253"},

    {"id":"35","name":"房间号","tel":"152****1253"},

    {"id":"36","name":"发个说的","tel":"152****1253"},

    {"id":"37","name":"风格的","tel":"152****1253"},

    {"id":"38","name":"是大法官","tel":"152****1253"},

    {"id":"39","name":"是否","tel":"152****1253"},

    {"id":"40","name":"十多个发送到个","tel":"152****1253"},

    {"id":"41","name":"刚刚","tel":"152****1253"},

    {"id":"42","name":"萨芬的","tel":"152****1253"},

    {"id":"43","name":"张三","tel":"152****1253"},

    {"id":"44","name":"发个","tel":"152****1253"},

    {"id":"45","name":"萨芬的","tel":"152****1253"},

    {"id":"46","name":"双方各","tel":"152****1253"},

    {"id":"47","name":"是大法官","tel":"152****1253"},

    {"id":"48","name":"萨芬的","tel":"152****1253"},

    {"id":"49","name":"是大法官","tel":"152****1253"},

    {"id":"50","name":"是爱的说法","tel":"152****1253"},

    {"id":"51","name":"阿斯蒂芬","tel":"152****1253"},

    {"id":"52","name":"第三帝国","tel":"152****1253"},

    {"id":"53","name":"是大法官","tel":"152****1253"},

    {"id":"54","name":"是大法官","tel":"152****1253"},

    {"id":"55","name":"张爱的方式","tel":"152****1253"},

    {"id":"56","name":"个发多少","tel":"152****1253"},

    {"id":"57","name":"大概","tel":"152****1253"},

    {"id":"58","name":"电饭锅和","tel":"152****1253"},

    {"id":"59","name":"订个婚","tel":"152****1253"},

    {"id":"60","name":"改好","tel":"152****1253"},

    {"id":"61","name":"电饭锅和","tel":"152****1253"},

    {"id":"62","name":"订个婚","tel":"152****1253"},

    {"id":"63","name":"大概","tel":"152****1253"},

    {"id":"64","name":"改好","tel":"152****1253"},

    {"id":"65","name":"电饭锅和","tel":"152****1253"},

    {"id":"66","name":"大地飞歌","tel":"152****1253"},

    {"id":"67","name":"好","tel":"152****1253"},

    {"id":"68","name":"萨芬的","tel":"152****1253"},

    {"id":"69","name":"发个","tel":"152****1253"},

    {"id":"70","name":"是梵蒂冈","tel":"152****1253"},

    {"id":"71","name":"撒旦法","tel":"152****1253"},

    {"id":"72","name":"是梵蒂冈","tel":"152****1253"}

]}';
$list = json_decode($arr,true);

        return json_encode($list);

}

function actionSchoollist()
{
$arr = '{
    "1":{
        "preliminary":{
            "game1":{
                "game":1,
                "title":"第一环节：情景在线",
                "school":"宜宾学院决赛",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3"
                },
                fraction":{
                    "fraction1":"队友1分数",
                    "fraction2":"队友2分数",
                    "fraction3":"队友3分数"
                },

                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "game":2,
                "school":"学校2",
                "title":"第二环节：团队演讲",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3",
                    "fraction":{
                         "fraction1":"队友1分数",
                        "fraction2":"队友2分数",
                        "fraction3":"队友3分数"
                    },
                }
                "totalScore":"总分数",
                "remarks":"备注"
            }
        },
        "finals":{
            "game1":{
                "game":1,
                "title":"第一环节：单词对对碰",
                "school":"宜宾学院预决赛",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3",
                    "fraction":{
                         "fraction1":"队友1分数",
                        "fraction2":"队友2分数",
                        "fraction3":"队友3分数"
                    },
                }
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "game":2,
                "title":"第二环节：佳片有约",
                "school":"学校2",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3"
                },
                "fraction":{
                    "fraction1":"队友1分数",
                    "fraction2":"队友2分数",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        }
    },
    "2":{
        "preliminary":{
            "game1":{
                "game":1,
                "title":"第一环节：情景在线",
                "school":"忻州学院决赛",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3",
                    "fraction":{
                         "fraction1":"队友1分数",
                        "fraction2":"队友2分数",
                        "fraction3":"队友3分数"
                    },
                }
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "game":2,
                "title":"第二环节：情景在线2",
                "school":"学校2",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3"
                },
                "fraction":{
                    "fraction1":"队友1分数",
                    "fraction2":"队友2分数",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        },
        "finals":{
            "game1":{
                "game":1,
                "title":"第1环节：情景在线13",
                "school":"忻州学院预决赛",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3"

                 "fraction":{
                    "fraction1":"队友1分数",
                    "fraction2":"队友2分数",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "game":2,
                "title":"第二环节：情景在线123",
                "school":"学校2",
                "judges":{
                    "teammate1":"队友1",
                    "teammate2":"队友2",
                    "teammate3":"队友3"
                },
                "fraction":{
                    "fraction1":"队友1分数",
                    "fraction2":"队友2分数",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        }
    }
}';

$list = json_decode($arr,true);

return json_encode($list);
}

function actionSchooldata(){
$arr = '{
    "1":{
        "preliminary":{
            "game1":{
                "title":"第一环节：情景在线",
                "school":"宜宾学院决赛",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "school":"学校2",
                "title":"第二环节：团队演讲",
                "judges":{
                   "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        },
        "finals":{
            "game1":{
                "title":"第一环节：单词对对碰",
                "school":"宜宾学院预决赛",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "title":"第二环节：佳片有约",
                "school":"学校2",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        }
    },
    "2":{
        "preliminary":{
            "game1":{
                "title":"第一环节：情景在线",
                "school":"忻州学院决赛",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "title":"第二环节：情景在线2",
                "school":"学校2",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        },
        "finals":{
            "game1":{
                "title":"第1环节：情景在线13",
                "school":"忻州学院预决赛",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            },
            "game2":{
                "title":"第二环节：情景在线123",
                "school":"学校2",
                "judges":{
                    "teammate1":"队友1",
                    "fraction1":"队友1分数",
                    "teammate2":"队友2",
                    "fraction2":"队友2分数",
                    "teammate3":"队友3",
                    "fraction3":"队友3分数"
                },
                "totalScore":"总分数",
                "remarks":"备注"
            }
        }
    }
}';

$list = json_decode($arr,true);

return json_encode($list);
}

}
