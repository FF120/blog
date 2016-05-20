/*
Navicat MySQL Data Transfer

Source Server         : local-mysql
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : homestead

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-04-04 15:25:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', '1', 'Spark环境下的Kmeans-Python实现', '```\r\n#设置应用名称，显示在spark监控页面上\r\nsc = SparkContext(appName=\"MySparkApplication\")\r\n\r\n#读取数据,data文件夹下有6个数据文件，这样写能全部读取，需要注意的是，在其他worker的相同路径下也需要有这些文件\r\nlines = sc.textFile(\"/home/fei/sparkcode/data/\")\r\n\r\n#原来的数据使用TAB分割的，现在把它转换成python中list形式\r\ndata = lines.map(lambda x:x.split(\'\\t\'))\r\n\r\n#定义一个函数，将源文件中用字母数字表示的天数化成数字，转换后的格式为天数0-48，网站0-9。\r\ndef dayToNum(data):\r\n    list1 = []\r\n    list1.append(data[0])\r\n    strs = data[1]\r\n    day = (int(strs[1])-1)*7 + int(strs[3])-1\r\n    list1.append(day)\r\n    sitestr = data[2]\r\n    site = int(sitestr[1:])-1\r\n    list1.append(site)\r\n    list1.append(int(data[3]))\r\n    return list1\r\n\r\n#使用定义的函数转换data中的数据  \r\ndata2 = data.map(dayToNum)\r\n\r\n#合并相同用户的数据，一个用户占一条记录\r\ndata4 = data3.reduceByKey(lambda v1,v2:list(map(lambda x: x[0]+x[1], zip(v2, v1))))\r\n#保存合并后的数据，从这个数据能够知道有多少个用户，该用户7周对10个网站的点击情况是什么，保存下来便于以后需要直接处理\r\ndata4.saveAsTextFile(\"/home/fei/combinedData\")\r\n#为kmeans聚类准备数据\r\ndata5 = data4.map(lambda x:np.array(x[1])) \r\n\r\n#设置kmeans参数：K=100，initializationMode=\"k-means||\"\r\nk = 100\r\nmode = \"k-means||\"\r\n\r\n#开始kmeans聚类\r\nmodel = KMeans.train(data5,k,initializationMode=mode)\r\n#保存聚类结果\r\noutput = open(\'/home/fei/kmeans_result.txt\', \'w\')\r\noutput.write(\"Final centers: \" + str(model.clusterCenters))\r\noutput.write(\"Final centers: \" + str(model.clusterCenters))\r\noutput.close()\r\n\r\n#输出聚类结果\r\nprint(\"Final centers: \" + str(model.clusterCenters))\r\nprint(\"Total Cost: \" + str(model.computeCost(data5)))\r\n\r\n#聚类完成后，预测每个用户的聚类类别ID：#reduceByKey会对相同key的记录进行reduce，这里将类别作为key,便于依据类别分别处理\r\nbelongs= data5.map(lambda x:(model.predict(x),(list)(x))) \r\n\r\n#为线性回归准备训练数据\r\ndata6 = belongs.map(lambda x: (x[0],np.array(x[1]).reshape(8,7,10))).cache()\r\ndata00 = data6.map(lambda x:x[1]).map(lambda x:x[:,0,0])\r\ndata_train = data00.map(lambda x : LabeledPoint(x[6],x[:6]))\r\n\r\n#开始训练\r\nmodel = LinearRegressionWithSGD.train(data_train)\r\n\r\n#预测并保存预测结果\r\nresult = model.predict(data[1][1:7,0,0])\r\nresult.saveAsTextFile(\'/home/fei/lines\')\r\n\r\n#停止程序\r\nsc.stop()\r\n```', '1,2,3', '2016-03-11 04:35:55', '2016-03-11 04:35:55', '92427e01f237fb087b256e7215054c5c.jpg');
INSERT INTO `article` VALUES ('2', '1', '1', '欢迎使用CSDN-markdown编辑器', '# 欢迎使用Markdown编辑器写博客\r\n\r\n本Markdown编辑器使用[StackEdit][6]修改而来，用它写博客，将会带来全新的体验哦：\r\n\r\n- **Markdown和扩展Markdown简洁的语法**\r\n- **代码块高亮**\r\n- **图片链接和图片上传**\r\n- ***LaTex*数学公式**\r\n- **UML序列图和流程图**\r\n- **离线写博客**\r\n- **导入导出Markdown文件**\r\n- **丰富的快捷键**\r\n\r\n-------------------\r\n\r\n## 快捷键\r\n\r\n - 加粗    `Ctrl + B` \r\n - 斜体    `Ctrl + I` \r\n - 引用    `Ctrl + Q`\r\n - 插入链接    `Ctrl + L`\r\n - 插入代码    `Ctrl + K`\r\n - 插入图片    `Ctrl + G`\r\n - 提升标题    `Ctrl + H`\r\n - 有序列表    `Ctrl + O`\r\n - 无序列表    `Ctrl + U`\r\n - 横线    `Ctrl + R`\r\n - 撤销    `Ctrl + Z`\r\n - 重做    `Ctrl + Y`\r\n\r\n## Markdown及扩展\r\n\r\n> Markdown 是一种轻量级标记语言，它允许人们使用易读易写的纯文本格式编写文档，然后转换成格式丰富的HTML页面。    —— <a href=\"https://zh.wikipedia.org/wiki/Markdown\" target=\"_blank\"> [ 维基百科 ]\r\n\r\n使用简单的符号标识不同的标题，将某些文字标记为**粗体**或者*斜体*，创建一个[链接](http://www.csdn.net)等，详细语法参考帮助？。\r\n\r\n本编辑器支持 **Markdown Extra** , 　扩展了很多好用的功能。具体请参考[Github][2].  \r\n\r\n### 表格\r\n\r\n**Markdown　Extra**　表格语法：\r\n\r\n项目     | 价格\r\n-------- | ---\r\nComputer | $1600\r\nPhone    | $12\r\nPipe     | $1\r\n\r\n可以使用冒号来定义对齐方式：\r\n\r\n| 项目      |    价格 | 数量  |\r\n| :-------- | --------:| :--: |\r\n| Computer  | 1600 元 |  5   |\r\n| Phone     |   12 元 |  12  |\r\n| Pipe      |    1 元 | 234  |\r\n\r\n###定义列表\r\n\r\n**Markdown　Extra**　定义列表语法：\r\n项目１\r\n项目２\r\n:   定义 A\r\n:   定义 B\r\n\r\n项目３\r\n:   定义 C\r\n\r\n:   定义 D\r\n\r\n	> 定义D内容\r\n\r\n### 代码块\r\n代码块语法遵循标准markdown代码，例如：\r\n``` python\r\n@requires_authorization\r\ndef somefunc(param1=\'\', param2=0):\r\n    \'\'\'A docstring\'\'\'\r\n    if param1 > param2: # interesting\r\n        print \'Greater\'\r\n    return (param2 - param1 + 1) or None\r\nclass SomeClass:\r\n    pass\r\n>>> message = \'\'\'interpreter\r\n... prompt\'\'\'\r\n```\r\n\r\n###脚注\r\n生成一个脚注[^footnote].\r\n  [^footnote]: 这里是 **脚注** 的 *内容*.\r\n  \r\n### 目录\r\n用 `[TOC]`来生成目录：\r\n\r\n[TOC]\r\n\r\n### 数学公式\r\n使用MathJax渲染*LaTex* 数学公式，详见[math.stackexchange.com][1].\r\n\r\n - 行内公式，数学公式为：$\\Gamma(n) = (n-1)!\\quad\\forall n\\in\\mathbb N$。\r\n - 块级公式：\r\n\r\n$$	x = \\dfrac{-b \\pm \\sqrt{b^2 - 4ac}}{2a} $$\r\n\r\n更多LaTex语法请参考 [这儿][3].\r\n\r\n### UML 图:\r\n\r\n可以渲染序列图：\r\n\r\n```sequence\r\n张三->李四: 嘿，小四儿, 写博客了没?\r\nNote right of 李四: 李四愣了一下，说：\r\n李四-->张三: 忙得吐血，哪有时间写。\r\n```\r\n\r\n或者流程图：\r\n\r\n```flow\r\nst=>start: 开始\r\ne=>end: 结束\r\nop=>operation: 我的操作\r\ncond=>condition: 确认？\r\n\r\nst->op->cond\r\ncond(yes)->e\r\ncond(no)->op\r\n```\r\n\r\n- 关于 **序列图** 语法，参考 [这儿][4],\r\n- 关于 **流程图** 语法，参考 [这儿][5].\r\n\r\n## 离线写博客\r\n\r\n即使用户在没有网络的情况下，也可以通过本编辑器离线写博客（直接在曾经使用过的浏览器中输入[write.blog.csdn.net/mdeditor](http://write.blog.csdn.net/mdeditor)即可。**Markdown编辑器**使用浏览器离线存储将内容保存在本地。\r\n\r\n用户写博客的过程中，内容实时保存在浏览器缓存中，在用户关闭浏览器或者其它异常情况下，内容不会丢失。用户再次打开浏览器时，会显示上次用户正在编辑的没有发表的内容。\r\n\r\n博客发表后，本地缓存将被删除。　\r\n\r\n用户可以选择 <i class=\"icon-disk\"></i> 把正在写的博客保存到服务器草稿箱，即使换浏览器或者清除缓存，内容也不会丢失。\r\n\r\n> **注意：**虽然浏览器存储大部分时候都比较可靠，但为了您的数据安全，在联网后，**请务必及时发表或者保存到服务器草稿箱**。\r\n\r\n##浏览器兼容\r\n\r\n 1. 目前，本编辑器对Chrome浏览器支持最为完整。建议大家使用较新版本的Chrome。\r\n 3. IE９以下不支持\r\n 4. IE９，１０，１１存在以下问题\r\n    1. 不支持离线功能\r\n    1. IE9不支持文件导入导出\r\n    1. IE10不支持拖拽文件导入\r\n\r\n---------\r\n\r\n[1]: http://math.stackexchange.com/\r\n[2]: https://github.com/jmcmanus/pagedown-extra \"Pagedown Extra\"\r\n[3]: http://meta.math.stackexchange.com/questions/5020/mathjax-basic-tutorial-and-quick-reference\r\n[4]: http://bramp.github.io/js-sequence-diagrams/\r\n[5]: http://adrai.github.io/flowchart.js/\r\n[6]: https://github.com/benweet/stackedit', '4', '2016-03-11 04:50:10', '2016-03-11 04:50:10', '');
INSERT INTO `article` VALUES ('3', '1', '1', 'PHP读写XLS', '```\r\n   public function read_xls(){\r\n        $file = \"D:/TaskHistory/123/template.xls\";\r\n        vendor(\"PHPEXCEL\\PHPExcel\");\r\n        vendor(\"PHPEXCEL\\PHPExcel\\IOFactory\");\r\n        $excel = new \\PHPExcel();\r\n        date_default_timezone_set(\'Asia/ShangHai\');\r\n        if (!file_exists($file)) {\r\n            exit(\"not found 31excel5.xls.\\n\");\r\n        }\r\n        $reader = \\PHPExcel_IOFactory::createReader(\'Excel5\'); //设置以Excel5格式(Excel97-2003工作簿)\r\n        $PHPExcel = $reader->load($file); // 载入excel文件\r\n        $sheet = $PHPExcel->getSheet(0); // 读取第一个工作表\r\n        $highestRow = $sheet->getHighestRow(); // 取得总行数\r\n        $highestColumm = $sheet->getHighestColumn(); // 取得总列数\r\n\r\n        /** 循环读取每个单元格的数据 */\r\n        for ($row = 1; $row <= $highestRow; $row++){//行数是以第1行开始\r\n            for ($column = \'A\'; $column <= $highestColumm; $column++) {//列数是以A列开始\r\n                $value =  $sheet->getCell($column.$row)->getValue();\r\n                $dataset[$row-1][] = $sheet->getCell($column.$row)->getValue();\r\n            }\r\n        }\r\n        dump($dataset);\r\n    }\r\n\r\n    public function write_xls()\r\n    {\r\n        $file = \"D:/TaskHistory/123/bak.xls\";\r\n        vendor(\"PHPEXCEL\\PHPExcel\");\r\n        vendor(\"PHPEXCEL\\PHPExcel\\IOFactory\");\r\n        $product = D(\'product\');\r\n        $data = $product->Relation(true)->select();\r\n        $objPHPExcel = new \\PHPExcel();\r\n        /*以下是一些设置 ，什么作者  标题啊之类的*/\r\n        $objPHPExcel->getProperties()->setCreator(\"转弯的阳光\")\r\n            ->setLastModifiedBy(\"转弯的阳光\")\r\n            ->setTitle(\"数据EXCEL导出\")\r\n            ->setSubject(\"数据EXCEL导出\")\r\n            ->setDescription(\"备份数据\")\r\n            ->setKeywords(\"excel\")\r\n            ->setCategory(\"result file\");\r\n            //设置标题\r\n            $objPHPExcel->setActiveSheetIndex(0)\r\n                        ->setCellValue(\'A\' . 1, \'品种\')\r\n                        ->setCellValue(\'B\' . 1, \'材质\')\r\n                        ->setCellValue(\'C\' . 1, \'规格\')\r\n                        ->setCellValue(\'D\' . 1, \'宽\')\r\n                        ->setCellValue(\'E\' . 1, \'长\')\r\n                        ->setCellValue(\'F\' . 1, \'生产厂家\')\r\n                        ->setCellValue(\'G\' . 1, \'交货地点\')\r\n                        ->setCellValue(\'H\' . 1, \'交货仓库\')\r\n                        ->setCellValue(\'I\' . 1, \'价格（元/吨）\')\r\n                        ->setCellValue(\'G\' . 1, \'重量（吨）\')\r\n                        ->setCellValue(\'K\' . 1, \'计重方式\')\r\n                        ->setCellValue(\'L\' . 1, \'备注\');\r\n            foreach ($data as $k => $v) {\r\n                $num = $k + 2;\r\n                $objPHPExcel->setActiveSheetIndex(0)\r\n                    //Excel的第A列，uid是你查出数组的键值，下面以此类推\r\n                    ->setCellValue(\'A\' . $num, $v[\'product_id\'])\r\n                    ->setCellValue(\'B\' . $num, $v[\'product_name\'])\r\n                    ->setCellValue(\'C\' . $num, $v[\'product_price\']);\r\n                //这里添加要加入进去的数据，我没写完\r\n            }\r\n\r\n        $objPHPExcel->getActiveSheet()->setTitle(\'User\');\r\n        $objPHPExcel->setActiveSheetIndex(0);\r\n        header(\'Content-Type: application/vnd.ms-excel\');\r\n        header(\'Content-Disposition: attachment;filename=\"\' . $file . \'.xls\"\');\r\n        header(\'Cache-Control: max-age=0\');\r\n        $objWriter = \\PHPExcel_IOFactory::createWriter($objPHPExcel, \'Excel5\');\r\n        $objWriter->save(\'php://output\');\r\n    }\r\n```\r\n\r\n', '5', '2016-03-11 04:52:13', '2016-03-11 04:52:13', '');
INSERT INTO `article` VALUES ('4', '1', '1', '改进PHP的var_dump()方法使之适应显示从数据库中查出来的数据', '```\r\n\r\n/**\r\n * array(7) {\r\n[0] => array(32) {\r\n[\"order_id\"] => string(2) \"34\"\r\n[\"shipping_time\"] => string(1) \"0\"\r\n[\"created_at\"] => string(10) \"1433565988\"\r\n}\r\n[1] => array(32) {\r\n[\"order_id\"] => string(2) \"35\"\r\n[\"shipping_time\"] => string(1) \"0\"\r\n[\"created_at\"] => string(10) \"1433573933\"\r\n}\r\n[2] => array(32) {\r\n[\"order_id\"] => string(2) \"36\"\r\n[\"order_sn\"] => string(9) \"BJA000036\"\r\n[\"wx_trade_no\"] => string(32) \"wx712cd30713b968c114336440083628\"\r\n}\r\n * 形如上面这样的数组，使用var_dump()函数打印的时候会打印出所有的数据项，尤其是在数据库字段较多的情况下，\r\n * 不便于找到自己感兴趣的数据。\r\n * 本方法改进了var_dump()方法，可以指定要打印的键。例如想看从order表中查处的order_id和city_id,\r\n * 可以这样使用：du($order,[\'order_id\',\'city_id\'])\r\n * 输出如下格式：\r\n *array[7] {\r\n[0] =>array[32] {\r\n[order_id] => string(2) : 34\r\n[city_id] => string(1) : 0\r\n}\r\n[1] =>array[32] {\r\n[order_id] => string(2) : 35\r\n[city_id] => string(1) : 0\r\n}\r\n[2] =>array[32] {\r\n[order_id] => string(2) : 36\r\n[city_id] => string(1) : 0\r\n}\r\n[3] =>array[32] {\r\n[order_id] => string(2) : 37\r\n[city_id] => string(1) : 0\r\n}\r\n}\r\n * @param $data 要显示结构的变量\r\n * @param $keys 要显示的键，为空则显示所有的键\r\n * @param $echo 是否输出结果到浏览器\r\n */\r\nfunction du($data,$keys=\'\',$echo=true)\r\n{\r\n    $message = \"\";\r\n    $message .= gettype($data) . \"[\" . count($data) . \"] {\" . \"<br>\";\r\n    foreach ($data as $cc => $c) {\r\n        $message .= \" [\" . $cc . \"] =>\" . gettype($c) . \"[\" . count($c) . \"] {\" . \"<br>\";\r\n        foreach ($c as $key => $value) {\r\n            if (empty($keys)) {\r\n                $message .= \"  [\" . $key . \"]\" . \" => \" . gettype($value) . \"(\" . strlen($value) . \")\" . \" : \".$value;\r\n                $message .= \"<br>\";\r\n            } else if (in_array($key, $keys)) {\r\n                $message .= \"  [\" . $key . \"]\" . \" => \" . gettype($value) . \"(\" . strlen($value) . \")\" . \" : \".$value;\r\n                $message .= \"<br>\";\r\n            }\r\n        }\r\n        $message .= \"  }\";\r\n        $message .= \"<br>\";\r\n    }\r\n    $message .= \"}\";\r\n    if ($echo) {\r\n        echo $message;\r\n    } else {\r\n        $a = str_replace(\"<br>\",\"\\r\\n\",$message);\r\n        $a = str_replace(\" \",\"  \",$a);\r\n        return $a;\r\n    }\r\n}\r\n\r\n\r\n\r\n```\r\n', '5', '2016-03-11 05:00:39', '2016-03-11 05:00:39', '');
INSERT INTO `article` VALUES ('6', '1', '1', '上传文件测试', '这里是两只可爱的小企鹅\r\n', '', '2016-03-12 09:52:53', '2016-03-12 09:52:53', '00e30aa6fa960bbc9b450dd1acb4a836.jpg');
INSERT INTO `article` VALUES ('57', '2', '1', '第三方公司发', '发送到', '1', '2016-03-13 04:05:35', '2016-03-13 04:05:35', '');
INSERT INTO `article` VALUES ('58', '1', '1', ' PHP入门教程-----环境安装', '大方分发放反反复复反反复复反反复复反反复复反反复复反反复复', '5', '2016-03-13 04:07:36', '2016-03-17 12:40:08', '');
INSERT INTO `article` VALUES ('59', '1', '1', '从前台i跳过来的写文章', '啊分大师赛是生生世世事实上', '3', '2016-03-13 04:39:39', '2016-03-13 04:39:39', '');
INSERT INTO `article` VALUES ('60', '4', '1', '信息检索-随堂作业', '##随堂作业，最后一起交\r\n\r\n###文献引用格式\r\n根据自己的选题，写一个6种基本文献的引用，提交\r\n\r\n###检索词\r\n根据自己的选题，构造中文和英文检索词', '7', '2016-03-14 02:55:20', '2016-03-14 02:55:20', '');
INSERT INTO `article` VALUES ('61', '1', '1', '测试文件名修改是否成功', '速读法', '1', '2016-03-14 06:09:26', '2016-03-14 06:09:26', '');
INSERT INTO `article` VALUES ('62', '1', '1', 'dsfsdfsdf', 'dsfsdf', '1', '2016-03-15 15:32:15', '2016-03-15 15:32:15', '');
INSERT INTO `article` VALUES ('63', '1', '1', '阿萨德发', '第三方', '1', '2016-03-16 02:19:36', '2016-03-16 02:19:36', '');
INSERT INTO `article` VALUES ('64', '4', '1', '数据挖掘-考试内容', '第五章和第六章讲过的那两个算法老师说考试要考', '7', '2016-03-16 02:21:12', '2016-03-16 02:21:12', '');

-- ----------------------------
-- Table structure for article_status
-- ----------------------------
DROP TABLE IF EXISTS `article_status`;
CREATE TABLE `article_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `art_id` int(11) NOT NULL,
  `view_number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of article_status
-- ----------------------------
INSERT INTO `article_status` VALUES ('1', '1', '8');
INSERT INTO `article_status` VALUES ('2', '2', '4');
INSERT INTO `article_status` VALUES ('3', '3', '5');
INSERT INTO `article_status` VALUES ('4', '4', '29');
INSERT INTO `article_status` VALUES ('6', '6', '7');
INSERT INTO `article_status` VALUES ('45', '57', '0');
INSERT INTO `article_status` VALUES ('46', '58', '0');
INSERT INTO `article_status` VALUES ('47', '59', '1');
INSERT INTO `article_status` VALUES ('48', '60', '2');
INSERT INTO `article_status` VALUES ('49', '61', '0');
INSERT INTO `article_status` VALUES ('50', '62', '0');
INSERT INTO `article_status` VALUES ('51', '63', '0');
INSERT INTO `article_status` VALUES ('52', '64', '0');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `as_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `seo_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_cate_name_unique` (`cate_name`),
  UNIQUE KEY `category_as_name_unique` (`as_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'IT', '技术文档', '0', '互联网开发', '互联网', '主要学习技术的一些记录，记下来以备以后查阅。', '2016-03-11 04:34:55', '2016-03-11 04:34:55');
INSERT INTO `category` VALUES ('2', '日记', 'diary', '0', '禁止搜索', '禁区', '我的日记', '2016-03-12 15:02:33', '2016-03-12 15:02:33');
INSERT INTO `category` VALUES ('4', '课程', 'course', '0', '无', '无', '研一课程相关信息', '2016-03-14 02:50:38', '2016-03-14 02:50:38');
INSERT INTO `category` VALUES ('5', '周报', '周报', '0', '周报', '周报', '周报', '2016-03-17 12:40:40', '2016-03-17 12:40:40');

-- ----------------------------
-- Table structure for links
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sequence` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of links
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_16_082647_create_category_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_16_083845_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_26_102905_create_article_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_26_102914_create_article_status_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_27_025551_remove_article_field_table', '1');
INSERT INTO `migrations` VALUES ('2015_03_27_025700_create_tags_table', '1');
INSERT INTO `migrations` VALUES ('2015_04_03_150623_create_systems_table', '1');
INSERT INTO `migrations` VALUES ('2015_05_13_093653_add_pic_article_table', '1');
INSERT INTO `migrations` VALUES ('2015_05_25_062537_add_info_users_table', '1');
INSERT INTO `migrations` VALUES ('2015_06_11_080023_create_comments_table', '1');
INSERT INTO `migrations` VALUES ('2015_07_07_113118_edit_comments_table', '1');
INSERT INTO `migrations` VALUES ('2015_07_13_075347_edit_user_table', '1');
INSERT INTO `migrations` VALUES ('2015_07_18_082904_create_navigation_table', '1');
INSERT INTO `migrations` VALUES ('2015_09_03_165339_delete_comments_table', '1');
INSERT INTO `migrations` VALUES ('2015_09_03_165509_edit_article_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_12_145600_edit_navigation_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_13_023030_create_links_table', '1');

-- ----------------------------
-- Table structure for navigation
-- ----------------------------
DROP TABLE IF EXISTS `navigation`;
CREATE TABLE `navigation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sequence` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of navigation
-- ----------------------------
INSERT INTO `navigation` VALUES ('1', '1', 'PHP', '/', '2016-03-12 15:42:43', '2016-03-12 15:42:46');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('admin@admin.com', '278018788eb4e6ac912dac234d013a25d4b5518c501a93aa8cb58e058e2871af', '2016-03-12 06:50:04');

-- ----------------------------
-- Table structure for systems
-- ----------------------------
DROP TABLE IF EXISTS `systems`;
CREATE TABLE `systems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate` int(11) NOT NULL DEFAULT '0',
  `system_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `system_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `systems_system_name_unique` (`system_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of systems
-- ----------------------------
INSERT INTO `systems` VALUES ('1', '1', 'title', 'Google');
INSERT INTO `systems` VALUES ('2', '1', 'subheading', 'ooo');
INSERT INTO `systems` VALUES ('3', '1', 'put_on_record', 'KB-1Sd349589458932478');
INSERT INTO `systems` VALUES ('4', '1', 'all_ow_access', '1');
INSERT INTO `systems` VALUES ('5', '1', 'allow_comments', '1');
INSERT INTO `systems` VALUES ('6', '1', 'seo_key', 'fei');
INSERT INTO `systems` VALUES ('7', '1', 'seo_desc', 'my blog');
INSERT INTO `systems` VALUES ('8', '1', 'copyright', 'all reserve');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', 'spark', '50');
INSERT INTO `tags` VALUES ('2', 'python', '2');
INSERT INTO `tags` VALUES ('3', 'kmeans', '2');
INSERT INTO `tags` VALUES ('4', 'markdown', '1');
INSERT INTO `tags` VALUES ('5', 'php', '7');
INSERT INTO `tags` VALUES ('6', '打分', '1');
INSERT INTO `tags` VALUES ('7', 'homework', '2');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `desc` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@admin.com', '$2y$10$u184YZRvLFSZ2l5XIOfWquTp42U/gIgNpubG1bp2Mb2E70LirLwFi', 'x8bDlb0Y5p9ZB3pH71UJVd8Fhu1hXbSPeZODDPXqEz9z5CxYIRCqG2GN4DME', '2016-03-11 02:52:48', '2016-03-13 04:41:13', '00e30aa6fa960bbc9b450dd1acb4a836.jpg', '管理员');
