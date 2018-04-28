/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : we_fight

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-04-28 16:43:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contact_us`
-- ----------------------------
DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `qq` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact_us
-- ----------------------------
INSERT INTO `contact_us` VALUES ('1', 'a299666555', 'a四川省成都市成华区某街道某地方', 'a13555555555', 'a5544664@163.com', 'a028-865555555', '104.044348', '30.62614');

-- ----------------------------
-- Table structure for `course_intro`
-- ----------------------------
DROP TABLE IF EXISTS `course_intro`;
CREATE TABLE `course_intro` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `create_date` date NOT NULL,
  `sub_title` varchar(1000) NOT NULL,
  `market_price` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cover_url` varchar(100) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `delete_` bigint(10) NOT NULL DEFAULT '0',
  `index_show` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_intro
-- ----------------------------
INSERT INTO `course_intro` VALUES ('5', '绵职院成都校友会吹响号角，快来围观', '钟娜', '2017-07-26', '饮水思源，收获怀耕。绵职人遍及大江南北，他们是学院的历史，是母校的宝贵财富，是母校与社会之间构筑互动和互益的桥梁。正是这种背景，催生了母校总会和各地校友分会的成立。', '111.52', '1.00', '/upload/news/1.jpg', '2', '0', '1');
INSERT INTO `course_intro` VALUES ('6', '涪诚汇-一个有情怀的平台，等着你来', '成都校友会', '2017-07-03', '自2012年5月成都校友会成立后，各项活动的开展让我们体会到单靠校友捐款难以长存，没有专职人员，校友会的工作也会缺乏连贯性，各地兄弟校友会亦有所体会。这当是校友总会最清楚又极力想改变的现状', '222.00', '2.00', '/upload/news/3.jpg', '2', '0', '1');
INSERT INTO `course_intro` VALUES ('7', '2016年“不忘初心，携手前行”年会圆满落幕', '成都校友会', '2017-07-04', '趣谈往事论当今，欢声笑语满堂飞。灯光杯影映笑脸，依稀时光又重回。', '333.00', '3.00', '/upload/news/2.jpg', '2', '0', '1');
INSERT INTO `course_intro` VALUES ('8', '聚首情丨再回首，情更浓', '成都校友会', '2017-01-13', '有人说有朋友的地方就有江湖，不论腥风血雨，都有人陪你一起趟；然而有江湖的地方何不是因为朋友，而多了一份肝胆照人的高歌。朋友中，有这样二字我们非常熟悉---校友。校友源于每个人乌托邦时代，一颦一笑，都那么青涩美好，这是它的真实写照。每个人回忆起自己的青葱岁月，也总是会嘴角上扬。', '444.00', '4.00', '/upload/news/4.jpg', '2', '1', '1');
INSERT INTO `course_intro` VALUES ('9', '认真而不失风趣之“何院长”', '成都校友会', '2016-11-19', '何礼果 中共党员，教授，硕士研究生导师，司法鉴定人。 现任绵阳职业技术学院院长，绵职院校友会总会会长。 中国高校科技法研究会理事；四川省法学会会员。 主要研究方向：法理学、宪法学和科技法学等领域。 从教以来，主持省、市和校级科研项目10余项，主研或参研省、市和校级科研项目12余项。 出版《现代科技法研究》专著1部，作为主编出版《法理学复习指南及阶梯训练》教材1部，副主编出版《法学概论》、《经济法学》教材2部，在《法律科学》、《学术论坛》、《社会科学研究》、《现代法学》、《经济与社会发展》等国家学术刊物公开发表学术论文60余篇。', '555.00', '5.00', '/upload/news/5.jpg', '1', '1', '1');
INSERT INTO `course_intro` VALUES ('10', '与肖院长零距离对话：忆往昔，展未来', '成都校友会', '2017-08-09', '当小编特意乘坐熟悉的46路公交车，一路望着窗外的风景发呆时，不由想起周杰伦《回到过去》那首歌里的歌词：“想回到过去，试着让故事继续……”   下了车，走入校园，那些陪伴了自己几年青春时光的老师和校园风光，先后出现在眼前。只是几年时间，校园已经发生了太多变化，我一点一点的走近它，像回到梦最初开始的地方。    身旁的风刮来一个个斑斓的梦，看着抱着课本匆匆走入教室的学弟学妹，内心有种说不出的平静。  直到推开肖院长的办公室门，再次见到肖院长，那张熟悉的脸庞，将小编心里突然生出的忐忑抚平，与肖院长(绵阳职业技术学院副院长）简短有趣的对话，让小编的此次校园之行，更加耐人寻味。', '666.00', '6.00', '/upload/news/6.jpg', '1', '0', '0');
INSERT INTO `course_intro` VALUES ('11', '成都涪诚汇科技有限公司第五次股东大会圆满召开', '成都校友会', '2017-08-09', '成都涪诚汇科技有限公司第五次股东大会于2017年7月16日下午15:00 — 18:00在成都花溪上堰酒店会议室顺利召开。到场股东28人，达到公司章程规定召开股东大会的条件。', '777.00', '7.00', '/upload/news/1.jpg', '2', '0', '0');
INSERT INTO `course_intro` VALUES ('12', '成都校友会2017夏游暨校友会理事大会、公司股东大会圆满召开', '成都校友会', '2017-08-09', '5月20日，绵职院成都校友会理事、涪诚汇股东、部分校友一行在根据地“火炬时代”集合完毕后向母校出发。成都校友会2017夏游暨校友会理事大会、公司股东大会由此展开，以“畅享青春 · 展望未来”为主题拉开了序幕。', '888.00', '8.00', '/upload/news/2.jpg', '1', '0', '0');
INSERT INTO `course_intro` VALUES ('13', '成都校友会2017夏游暨校友会理事大会、公司股东大会圆满召开', '成都校友会', '2017-08-09', '5月20日，绵职院成都校友会理事、涪诚汇股东、部分校友一行在根据地“火炬时代”集合完毕后向母校出发。成都校友会2017夏游暨校友会理事大会、公司股东大会由此展开，以“畅享青春 · 展望未来”为主题拉开了序幕。', '9999.00', '34.00', '/upload/news/3.jpg', '1', '0', '0');
INSERT INTO `course_intro` VALUES ('14', '第一个课程！', '我', '2018-04-27', '副标题！！', '998.99', '100.50', '/upload/course/1_1524796085.png', '1', '0', '0');
INSERT INTO `course_intro` VALUES ('15', '2', '2', '2018-04-13', '2', '2.00', '2.00', '2', '2', '0', '0');
INSERT INTO `course_intro` VALUES ('16', '3', '3', '2018-04-13', '3', '3.00', '3.00', '3', '3', '0', '1');
INSERT INTO `course_intro` VALUES ('17', '4', '4', '2018-04-13', '4', '4.00', '4.00', '4', '3', '0', '1');
INSERT INTO `course_intro` VALUES ('18', 'sadadasd', 'sadasdaaa', '2018-04-27', 'asdasdasdasd', '12.00', '23.00', '/upload/course/1_1524797017.png', '2', '0', '1');

-- ----------------------------
-- Table structure for `course_intro_content`
-- ----------------------------
DROP TABLE IF EXISTS `course_intro_content`;
CREATE TABLE `course_intro_content` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=743 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_intro_content
-- ----------------------------
INSERT INTO `course_intro_content` VALUES ('246', '5', '饮水思源，收获怀耕。绵职人遍及大江南北，他们是学院的历史，是母校的宝贵财富，是母校与社会之间构筑互动和互益的桥梁。正是这种背景，催生了母校总会和各地校友分会的成立。', '1');
INSERT INTO `course_intro_content` VALUES ('247', '5', '/upload/manager/1_1501470174.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('248', '5', '为了通过校友会平台联络校友感情，传播母校信息，增强校友之间及与母校之间的凝聚力，成都的校友们经过几番商讨与筹备，以 “分享 • 共好”为宗旨，2012年5月20日在成都市望江宾馆成功召开了成都校友会成立大会。学院党委书记文晓璋，副书记、院长何礼果，副院长左明扬等学院领导及老师见证了成都校友会的成立。', '1');
INSERT INTO `course_intro_content` VALUES ('249', '5', '/upload/manager/1_1502160804.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('250', '5', '成立大会审议并通过了成都校友会章程及组织机构人员名单', '1');
INSERT INTO `course_intro_content` VALUES ('251', '5', '名誉会长：饶光华', '1');
INSERT INTO `course_intro_content` VALUES ('252', '5', '会长：万富兵', '1');
INSERT INTO `course_intro_content` VALUES ('253', '5', '副会长：刘昌严     李江涛', '1');
INSERT INTO `course_intro_content` VALUES ('254', '5', '秘书长：张晓莉', '1');
INSERT INTO `course_intro_content` VALUES ('255', '5', '常务理事：毛胜荣   等共计13名', '1');
INSERT INTO `course_intro_content` VALUES ('256', '5', '理事：林桂英   等共计30名', '1');
INSERT INTO `course_intro_content` VALUES ('257', '5', '感恩校友的重逢，感谢母校的关怀。有了母校的监督与鞭策，校友们的团结与付出，成都校友会不断成长与壮大。', '1');
INSERT INTO `course_intro_content` VALUES ('258', '5', '情系校友 • 共享发展', '1');
INSERT INTO `course_intro_content` VALUES ('259', '5', '1、2013年12月21日，成都校友会“在一起”把集结号吹响\n', '1');
INSERT INTO `course_intro_content` VALUES ('260', '5', '2、2015年2月7日，“在路上”的成都校友们面对困难，共同迎难而上\n', '1');
INSERT INTO `course_intro_content` VALUES ('261', '5', '3、2015年12月19日， “再聚首，情更浓”成都校友会号召大家再聚首，美丽的蓉城因有你有我，更加灿烂辉煌\n', '1');
INSERT INTO `course_intro_content` VALUES ('262', '5', '/upload/manager/1_1502161714.png', '2');
INSERT INTO `course_intro_content` VALUES ('263', '5', '/upload/manager/1_1502162422.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('264', '5', '/upload/manager/1_1502162619.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('265', '5', '同年5月9日，成都校友会迎来首届换届大会，经参会理事共同推荐及无记名投票，选举产生了成都校友会新一轮领导班子，并一致推举文晓璋、万富兵为名誉会长。当选的新班子表示，努力搞好校友会工作，力争成都校友会更上新台阶。', '1');
INSERT INTO `course_intro_content` VALUES ('266', '5', '/upload/manager/1_1502162848.png', '2');
INSERT INTO `course_intro_content` VALUES ('267', '5', '/upload/manager/1_1502162976.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('268', '5', '第二届成都校友会组织机构人员名单：', '1');
INSERT INTO `course_intro_content` VALUES ('269', '5', '名誉会长：文晓璋     万富兵', '1');
INSERT INTO `course_intro_content` VALUES ('270', '5', '会长：刘昌严', '1');
INSERT INTO `course_intro_content` VALUES ('271', '5', '副会长：李江涛     张华川     杨伟', '1');
INSERT INTO `course_intro_content` VALUES ('272', '5', '秘书长：张晓莉', '1');
INSERT INTO `course_intro_content` VALUES ('273', '5', '副秘书长：钟娜     杨俊君', '1');
INSERT INTO `course_intro_content` VALUES ('274', '5', '理事：李绍强   等共计45名', '1');
INSERT INTO `course_intro_content` VALUES ('275', '5', '山高水长，情意悠悠。成都校友会心系每一位校友。同舟共济，共享发展。成都校友会不忘初心，携手前行。', '1');
INSERT INTO `course_intro_content` VALUES ('311', '6', '自2012年5月成都校友会成立后，各项活动的开展让我们体会到单靠校友捐款难以长存，没有专职人员，校友会的工作也会缺乏连贯性，各地兄弟校友会亦有所体会。这当是校友总会最清楚又极力想改变的现状！', '1');
INSERT INTO `course_intro_content` VALUES ('312', '6', '探索发展，我们一直在路上。校友会的可持续，除了需要热心校友的积极参与、无私奉献，同时，成立经济平台，以经济杠杆来撬动校友会的良性发展已是必然。', '1');
INSERT INTO `course_intro_content` VALUES ('313', '6', '/upload/manager/1_1502163949.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('314', '6', '/upload/manager/1_1502164071.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('315', '6', '涪：不忘初心，不忘母校', '1');
INSERT INTO `course_intro_content` VALUES ('316', '6', '诚：诚信经营，亦为“成”都', '1');
INSERT INTO `course_intro_content` VALUES ('317', '6', '汇：相聚一起，分享共好', '1');
INSERT INTO `course_intro_content` VALUES ('318', '6', '2014年6月成都涪诚汇科技有限公司正式成立，注册资金361万元人民币，公司股东35人。\n“客户为本，奋斗为基”，以信任、拥有、开放、无私为基础，以人脉、项目、资金等方面的整合为前期经营思路。从董事会，监事会，到经营团队，我们一直是一群有组织纪律，有校友情怀绵职人。\n', '1');
INSERT INTO `course_intro_content` VALUES ('319', '6', '/upload/manager/1_1502164281.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('320', '6', '/upload/manager/1_1502164380.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('321', '6', '/upload/manager/1_1502164484.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('322', '6', '我们经营的项目从德阳恒大建材城大艺瓷砖店的投资入股，到旅游项目的考察学习，再到“聚首情”酒的经营落地。', '1');
INSERT INTO `course_intro_content` VALUES ('323', '6', '一次探索，一次考察、一次投入、一次进步。我们在实践中学习，摸索前进，远行无急行，无论路上是荆棘丛生，或是狭窄小道，光明就是方向。不忘初心，方得始终。', '1');
INSERT INTO `course_intro_content` VALUES ('324', '6', '/upload/manager/1_1502164759.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('325', '6', '/upload/manager/1_1502164849.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('326', '6', '在这样一个平台中，我们的校友将享受到各类优质服务，这里既是你温暖的爱的港湾，倾听你的欢声笑语抑或困难惆怅；也将是你的有力合作伙伴，可以为你提供短期资金借款有偿服务，以满足一时之需，我们合力共渡难关。', '1');
INSERT INTO `course_intro_content` VALUES ('409', '7', '曾饮涪江水，今朝绿洲聚。绵阳职业技术学院成都校友会2016年“不忘初心，携手前行”年会于11月27日在成都市绿洲大酒店盛大举行。此次参会近200人，绵职院成都校友会名誉会长文晓璋，学院校友总会会长、院长何礼果、副院长肖争鸣、学院原校友办主任饶光华、学院校友办老师朱箐斓，以及新疆、宁夏、内蒙等兄弟校友会近20名代表莅临参会。', '1');
INSERT INTO `course_intro_content` VALUES ('410', '7', '/upload/manager/1_1502173137.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('411', '7', '会议于15:00正式开始，名誉会长万富兵致欢迎辞，母校何院长、新疆校友会胡志华副会长表达了对成都校友会的祝福与希冀，刘昌严会长做成都校友会2016年工作报告，钟娜副秘书长汇报成都校友会经济平台公司——成都涪诚汇科技有限公司的发展动向。', '1');
INSERT INTO `course_intro_content` VALUES ('412', '7', '/upload/manager/1_1502173241.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('413', '7', '/upload/manager/1_1502173323.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('414', '7', '/upload/manager/1_1502173534.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('415', '7', '/upload/manager/1_1502173660.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('416', '7', '/upload/manager/1_1502173784.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('417', '7', '成都校友会一直以“分享•共好”为发展理念。年会精心设置了分享、公益等环节，给校友们带来不一样的感受与收获。', '1');
INSERT INTO `course_intro_content` VALUES ('418', '7', '分享—校友分享，互动交流', '1');
INSERT INTO `course_intro_content` VALUES ('419', '7', '匆匆岁月，成长的痕迹流梭于我们的身体发肤更是工作生活。', '1');
INSERT INTO `course_intro_content` VALUES ('420', '7', '明炬律师事务所合伙人，来自母校水泥工艺8104班的明向阳校友，作为成功校友代表为大家分享自身经历与经验，从兴趣出发，通过刻苦学习，终于成功转型。', '1');
INSERT INTO `course_intro_content` VALUES ('421', '7', '/upload/manager/1_1502174624.png', '2');
INSERT INTO `course_intro_content` VALUES ('422', '7', '/upload/manager/1_1502174630.png', '2');
INSERT INTO `course_intro_content` VALUES ('423', '7', '/upload/manager/1_1502174687.png', '2');
INSERT INTO `course_intro_content` VALUES ('424', '7', '今天的我们，不论你是富饶盈足，或是默默无闻，我们都在路上，愿每一位绵职人都能实现心中那一方愿景。', '1');
INSERT INTO `course_intro_content` VALUES ('425', '7', '共好—公益基金启动仪式及募集', '1');
INSERT INTO `course_intro_content` VALUES ('426', '7', '路漫漫其修远兮，而不论生活如何待我，我们都需要赋以坚韧，乐观待之。', '1');
INSERT INTO `course_intro_content` VALUES ('427', '7', '建机8113班李兴虎校友重病，几番煎熬，忍痛来到我们的身边，与大家分享，向校友传递：一路支撑他的是爱的鼓励与希望，更是艰难时人性的光辉。命运多舛，我们依然从容、坚强。', '1');
INSERT INTO `course_intro_content` VALUES ('428', '7', '/upload/manager/1_1502174878.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('429', '7', '作为公益组织，成都校友会踏出爱的步数，由名誉会长文晓璋为公益基金启动仪式慷慨陈词。基金启动后的短短几分钟，现场校友们纷纷向公益箱投入自己的爱心，经统计，募集公益金共19650元(现金17650元，网络转收2000元，)。每一笔公益善款将会帮助更多需要帮助的校友。每一笔款项由专人进行记录且公开去向。成都校友会，因你更加温暖。', '1');
INSERT INTO `course_intro_content` VALUES ('430', '7', '/upload/manager/1_1502175198.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('431', '7', '动人的朗诵 、默契的合唱，风趣的小品、深情的舞蹈以及有趣的互动。欢声笑语满堂，成都校友会感恩有你。', '1');
INSERT INTO `course_intro_content` VALUES ('432', '7', '/upload/manager/1_1502175380.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('433', '7', '/upload/manager/1_1502175599.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('434', '7', '18:00，晚宴开始。校友们互述友情，举杯共饮。谈笑风生中，年会圆满落幕。我们期待，明年再聚！', '1');
INSERT INTO `course_intro_content` VALUES ('435', '7', '/upload/manager/1_1502175732.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('449', '9', '/upload/manager/1_1502177398.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('450', '9', '记忆中隐现出何院长的样子，常常是在各种大会上的发言，抑或是09级后学生毕业证书上洋洋洒洒的院长签名。没想到毕业几年后却有幸与这位“权威人物”面对面畅聊，心中还是不免忐忑。然实际交流中却大相径庭，爽朗的笑声不时传来，少了些许距离，多了几分亲切。不得不说，这是一个有趣的人。', '1');
INSERT INTO `course_intro_content` VALUES ('451', '9', '/upload/manager/1_1502177975.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('452', '9', '聚首情：何院平时事务都非常繁忙，那在周末闲暇之余都喜欢做什么呢？\n', '1');
INSERT INTO `course_intro_content` VALUES ('453', '9', '何院长：  非常喜欢带着家人一起出游，散步、喝茶、聊天，能够给以家人更多的陪伴。推荐绵阳本地非常有名的仙海湖，江油的农家乐。', '1');
INSERT INTO `course_intro_content` VALUES ('454', '9', '聚首情：据了解何院一路走来，也是有非常丰富的职业经历，可以简单分享一下吗？\n', '1');
INSERT INTO `course_intro_content` VALUES ('455', '9', '何院长：这是一个很复杂的问题，我的专业太多，本科学的是机械制造，后来第二学位学的是思想政治教育，肯定没想到吧。但是整体发表的很多言论都是偏理性，偏法律的。', '1');
INSERT INTO `course_intro_content` VALUES ('456', '9', '毕业后，最开始我是机械制造的老师，后来副教授职称的是思想政治教育，而教授职称的是法学。后面从事组织人事管理工作八年，在北川县担任过副县长，辗转回来也在西科大财务处当过副处长，还记得那时三个月内必须拿到会计证，电算化证，初算等级证，我都通过自己的努力拿到证书。', '1');
INSERT INTO `course_intro_content` VALUES ('457', '9', '再后来从事法学工作，在西南科技大学组建法学院，任职法学院副院长，学院内也不乏许多优秀人才，那个时候我对自己说：必须在法学上有所突破。这样的信念一直鞭策我攻读法律，并取得一定成绩，目前已发表80篇文章有余，三分之二篇章都是关于法学。', '1');
INSERT INTO `course_intro_content` VALUES ('458', '9', '/upload/manager/1_1502178641.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('459', '9', '而这所有经历过的一切，都是因为我在努力的做这一件事。尽管可能方向不同，但我始终专注于做好当下的这一件事。', '1');
INSERT INTO `course_intro_content` VALUES ('460', '9', '聚首情：在整个职业历程中，辗转了多个专业与方面，想必一定会面临很多选择，您怎么看待呢？', '1');
INSERT INTO `course_intro_content` VALUES ('461', '9', '何院长：其实我觉着，选择工作和学习来说，你首先选择工作，然后再针对性的去填补所需要的知识与方法。一路走来，我们可以看到：你学的任何专业在你未来的职业选择中，所占比例可能并不大，关键是在于你对于所从事的某件事情的努力。你可以根据工作的需要，或者环境的需要去认真学习，那么它取得成功的几率也就越高。', '1');
INSERT INTO `course_intro_content` VALUES ('462', '9', '我在职业教历研究中，我在高职院校的院长中，资历并不深，时间并不长，但也很快成为了这方面的专家。因为一个人善于去学习，善于去把控事物发展的本质，把握这个职业教育的方向和最新前沿，而我每天都在关注，在思考，在研究。', '1');
INSERT INTO `course_intro_content` VALUES ('463', '9', '/upload/manager/1_1502178919.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('464', '9', '聚首情：何院在任职绵职院院长一职同时，也为其校友会总会会长，它是在什么时候成立的呢？', '1');
INSERT INTO `course_intro_content` VALUES ('465', '9', '何院长：2012年6月6日在绵职院成立，以绵职院本校为校友总会，每个省建立分会，每个市建立分会，目前已经成立有32个校友会。我们可以发现建设的时间并不长，但校友会的发展还是很迅速的。', '1');
INSERT INTO `course_intro_content` VALUES ('466', '9', '聚首情：对于目前校友会建设，您觉着最重要的是什么？', '1');
INSERT INTO `course_intro_content` VALUES ('467', '9', '何院长：每个校友会，最核心的来讲，是希望有其独立的造血功能。\n', '1');
INSERT INTO `course_intro_content` VALUES ('468', '9', '我们都知道大部分校友会组织活动都是依靠赞助、捐赠或者校友交款模式。而这些模式都是依靠他人存在，如果没有这些，校友会又该如何正常运转，所以更建议校友会有自己的实体，将校友会长期坚持下去。', '1');
INSERT INTO `course_intro_content` VALUES ('469', '9', '聚首情：想必何院平时和其他校友应该也保持着密切联系。', '1');
INSERT INTO `course_intro_content` VALUES ('470', '9', '何院长：通常每个月都会定期交流。会长、秘书长等回校都是亲自接待，也会经常去看望我们的校友，一起畅聊。同时也看到很多校友发展越来越好，也希望他们能回校多为师弟师妹提供更多的工作岗位或者实践机会，互帮互助。', '1');
INSERT INTO `course_intro_content` VALUES ('471', '9', '聚首情：校友会的发展正逐步走上正轨，相信何院也颇多感慨，此时此刻想要对在外校友们说些什么呢？\n', '1');
INSERT INTO `course_intro_content` VALUES ('472', '9', '何院长：对于校友来说，任何一个校友，不论在哪个岗位，在那种职位，收入，永远要正视自己，自己就是从绵职院毕业的，出身并不重要，更多在于自己后期的努力及取得的成果。更何况绵职院也很好；', '1');
INSERT INTO `course_intro_content` VALUES ('473', '9', '同时也希望我们所有校友在所在地方，所在岗位上，能充分发扬学校的校训“重德，精业、求实，创新”尤其重德，我们做任何事，首先是做一个人，低调的人。生活中可以高调，工作中需要低调，一个人的品行很重要。', '1');
INSERT INTO `course_intro_content` VALUES ('474', '9', '最后，祝所有绵职院学子都能够取得越来越好的成绩，保重身体，常回母校看看，学校永远是你们温暖的港湾。', '1');
INSERT INTO `course_intro_content` VALUES ('552', '10', '/upload/manager/1_1502248637.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('553', '10', '小编：肖院长，您好！知道您平日工作也是特别忙，那您业余时间除了工作，做的最多的一件事是什么呢？', '1');
INSERT INTO `course_intro_content` VALUES ('554', '10', '肖院长：现在我的业余时间更多的是陪伴家人。去年，家中小孙孙的出生，也为家里增添了不少欢乐。我和爱人一有空闲时间都会围着这个小淘气转，这也是真实的人间味吧！  想说工作再忙再累，也别忽略对家人的爱和陪伴吧。我们这一生都要学习工作和生活的平衡，也就是精力的管理。把工作当回事，把生活也当回事。有一句话是这样说的：“没有工作，我们的生活将无以为继；没有生活，我们的工作将空虚落寞。”', '1');
INSERT INTO `course_intro_content` VALUES ('555', '10', '小编：肖院长，知道您曾任教老师，也是班主任。\n', '1');
INSERT INTO `course_intro_content` VALUES ('556', '10', '肖院长：是的，有很多学生，而且现在的个人事业都做得不错，作为老师看到自己的学生取得好的成就，自然非常欣慰。', '1');
INSERT INTO `course_intro_content` VALUES ('557', '10', '我毕业后分配到四川建筑材料工业学校（后更名为现在的绵阳职业技术学院），给水泥专业的学生授课。记得当时我还是班主任，那时一个班的学生比较少，班主任不仅要管教育，还要管学生的生活。学生年龄较小，价值观、人生观的形成也是在学校的那几年，所以老师的引导格外重要。但我对学生个人情感方面不怎么管，很尊重他们。 \n', '1');
INSERT INTO `course_intro_content` VALUES ('558', '10', '回想起那时我也才毕业出来上班，年龄也不大，和班上的学生自然没什么代沟，平日里喜欢和他们呆在一起，和他们的交流也比较多。我也从来不以老师的价值观，来衡量和看待每一个学生。在我看来，当时他们能考进我们学校，都是全国拔尖的优质生，他们好学上进，从不畏难，对待自己的学业从不马虎。印象中他们还真没做过什么调皮捣蛋的事，很少给老师添堵，十分尊敬和爱戴老师。  ', '1');
INSERT INTO `course_intro_content` VALUES ('559', '10', '想来时间真快，几十年过去，我和以前班上的好多学生都还有联系，关系也都很好。(肖院长脸上洋溢着幸福满足的笑容。）  \n', '1');
INSERT INTO `course_intro_content` VALUES ('560', '10', '小编：肖院长，回想起您自己的大学生活有什么样的感受？', '1');
INSERT INTO `course_intro_content` VALUES ('561', '10', '肖院长：我是邓小平“恢复高考”政策的受益人，是文革后第一届本科生。在这里最感慨的是邓小平力排众议恢复高考，给了大家一个公平竞争的机会，改变了很多人的命运。  记得当时我还在农村当知青，知道恢复高考后，报名参加了考试，每晚点着蜡烛，学习到很晚，奋战了2个多月后，考上了南京工业大学。', '1');
INSERT INTO `course_intro_content` VALUES ('562', '10', '因为经历了动荡坎坷，深知通过用知识改变命运的机会来之不易，所以我读大学那会，很刻苦的在钻研学问，一有时间都跑到图书馆看书。对知识的渴望和探索，就是那时自己大学生活的写照吧！ ', '1');
INSERT INTO `course_intro_content` VALUES ('563', '10', '小编：对于学校已经毕业正在工作，或者正在寻求工作的学子来讲，您对他们有没有想说的话？ ', '1');
INSERT INTO `course_intro_content` VALUES ('564', '10', '肖院长：我真诚的祝愿所有的绵职学子都能在自己喜欢的工作岗位上大展身手。希望他们能终生践行学校的校训：“重德、精业、求实、创新。”脚踏实地，一步一个脚印，切忌好高骛远，一步步的攀登自己的人生高峰。 ', '1');
INSERT INTO `course_intro_content` VALUES ('565', '10', '另外，我希望他们能把终生学习，落实到生活、工作中。工作后，大家会发现学校能够学到的东西，在工作中的使用是远远不够的。只有通过不断学习，提升自己的工作技能，才能更好的适应社会的发展，才能使自己立于不败之地，走到哪里都是受欢迎的人。  \n', '1');
INSERT INTO `course_intro_content` VALUES ('566', '10', '在这里，我也对自己曾教过的学生给予最美好的祝福，希望他们的人生能更加辉煌。 ', '1');
INSERT INTO `course_intro_content` VALUES ('567', '10', '小编：对咱们校友会，您有什么好的建议和看法呢？  ', '1');
INSERT INTO `course_intro_content` VALUES ('568', '10', '肖院长：希望咱们校友会能越来越好，开展更多丰富多彩的活动，以活动为载体，把校友们团结起来。同时，校友会是一个很好的资源整合平台，可以集广大校友的力量办成很多值得点赞的事，希望大家能在其中发挥自己的优势和特长。\n', '1');
INSERT INTO `course_intro_content` VALUES ('569', '10', '前不久我也受邀参加了咱们广州校友会举办的活动，活动方面很创新，有鲜明的特色，给人的印象很深。\n', '1');
INSERT INTO `course_intro_content` VALUES ('570', '10', '我也希望各地的校友会能相互学习，借鉴各自做得比较好的地方。衷心希望在新的一年，咱们的校友会都能大放异彩。', '1');
INSERT INTO `course_intro_content` VALUES ('571', '10', '走出肖院长的办公室，外面的风依旧用力的刮着，像是在用自己的深情欢迎每一位回到校园的学子。  \n', '1');
INSERT INTO `course_intro_content` VALUES ('572', '10', '借着心底漾起的思绪，小编电访了几位肖院长曾教过的学生，他们现在都取得了不错的工作成绩，有的开办了自己的企业，有的在某一行业成为行家……但提到自己印象中的“肖老师”，他们的声音都是激动的，对“肖老师”的回忆如潮水般涌来，“肖老师”对他们的教导铭记在心，都表示“肖老师”是自己学生生涯里，一位令人难忘的好老师。', '1');
INSERT INTO `course_intro_content` VALUES ('573', '10', '师者，所以传道授业解惑也。为师者，最具有人文精神，小编以为正是这份人文精神，使得我们的教师能担当师责，坚守教育的理想，富有生命的尊严，最具博爱的情怀。\n', '1');
INSERT INTO `course_intro_content` VALUES ('574', '10', '他们始终用一颗宽容之心，为一颗颗曾经无望、颓废的心灵送去光亮。这光亮，足以闪耀他们的一生。', '1');
INSERT INTO `course_intro_content` VALUES ('603', '11', '/upload/manager/1_1502249121.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('604', '11', '会议由第一届万富兵董事长主持召开。会议分为三个议程：', '1');
INSERT INTO `course_intro_content` VALUES ('605', '11', '议程一', '1');
INSERT INTO `course_intro_content` VALUES ('606', '11', '万董事长就股份转让事项进行了通报，并对公司新任股东表示热烈欢迎。涪诚汇公司是成都校友会常设机构，公司股东皆为校友，目前股东人数共计37人。', '1');
INSERT INTO `course_intro_content` VALUES ('607', '11', '为保障公司经营层的经营活动阳光透明，维护广大股东校友们的权益，董事长就公司从成立至2017年6月底的财务审计工作做了阶段性汇报，并对公司财务制度的健全提出了相关要求，也得到了股东们的一致认可。', '1');
INSERT INTO `course_intro_content` VALUES ('608', '11', '接着，公司第一届董事文方凌对公司章程进行了说明，望公司全体股东及员工能够有章可依。', '1');
INSERT INTO `course_intro_content` VALUES ('609', '11', '/upload/manager/1_1502249561.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('610', '11', '/upload/manager/1_1502249730.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('611', '11', '议程二', '1');
INSERT INTO `course_intro_content` VALUES ('612', '11', '会议在万董事长宣布换届选举第二届董事、独立董事、监事的相关事项的说明时，进入到第二议程，会议氛围轻松而有序。', '1');
INSERT INTO `course_intro_content` VALUES ('613', '11', '会议提名董事、独立董事、监事人员名单：', '1');
INSERT INTO `course_intro_content` VALUES ('614', '11', '第二届董事：刘昌严、徐中正、钟娜、邓晓辉、杨伟', '1');
INSERT INTO `course_intro_content` VALUES ('615', '11', '第二届独立董事：万富兵', '1');
INSERT INTO `course_intro_content` VALUES ('616', '11', '第二届监事：文方凌、杜春、周秋兰', '1');
INSERT INTO `course_intro_content` VALUES ('617', '11', '第二届监事长：文方凌', '1');
INSERT INTO `course_intro_content` VALUES ('618', '11', '恭喜公司第二届董事、独立董事、监事成员的产生。', '1');
INSERT INTO `course_intro_content` VALUES ('619', '11', '我们也听到了来自王娟、徐中正、谢军等股东的心声，股东们对于公司发展提供了各项建设性意见。新当选董事代表邓晓辉、股东代表文武权对于新一届董事、监事的产生发表了各自的感言，并表示对于新一届领导班子工作的信任与支持。', '1');
INSERT INTO `course_intro_content` VALUES ('620', '11', '议程三', '1');
INSERT INTO `course_intro_content` VALUES ('621', '11', '会议间歇，新一届董事、监事召开的会议，选举产生了新一届董事长：', '1');
INSERT INTO `course_intro_content` VALUES ('622', '11', '会议选举通过第二届董事长名单：', '1');
INSERT INTO `course_intro_content` VALUES ('623', '11', '第二届董事长：钟娜', '1');
INSERT INTO `course_intro_content` VALUES ('624', '11', '董事、监事们相信，钟娜能够担当重任，并对新一届组织架构的产生表示支持与理解。他们也欢迎年轻校友们的加入。', '1');
INSERT INTO `course_intro_content` VALUES ('625', '11', '大会休息结束，第一届万董事长向股东们宣布了新一届董事长人选。', '1');
INSERT INTO `course_intro_content` VALUES ('626', '11', '钟娜就当选董事长发表了当选感言，并对公司经营工作计划展开了汇报。钟娜讲到：“感恩”平台给予，校友信任，股东包容，特别感谢公司第一届以万富兵、刘昌严为首的领导班子的无私奉献，对于个人成长，钟娜坦诚讲到了自己的三年经历与期间的收获。于她而言，董事长、总经理一肩挑意味着涪诚汇需要她不得不担当更大、更多、更重要的责任。她表示，她将用行动回报平台，回报曾经付出的校友们。', '1');
INSERT INTO `course_intro_content` VALUES ('627', '11', '会议在钟娜的经营工作报告中完美落幕，对公司已开展的经营工作作了详细介绍，并对公司财务整改，资金状况做了汇报说明。公司近几年将会致力于整合平台资源，服务校友平台，以“客户为本，奋斗为基”为经营理念，最大程度服务校友与校友企业，将校友会与母校、校友与校友企业、校友企业之间做好资源整合与对接。', '1');
INSERT INTO `course_intro_content` VALUES ('628', '11', '钟娜讲到，公司服务第一站：母校10月招聘双选会。对此，母校生源、服务优势、业内标杆钟娜都一一剖析。现场发放了校友企业用人需求报名表，立志解决校友企业招人难题，做到人才整合。我们相信，公司的未来一定越来越好。在股东们的鼓励声和对公司未来发展的美好期许中，涪诚汇公司第五次股东大会圆满落幕。', '1');
INSERT INTO `course_intro_content` VALUES ('629', '11', '会后，股东们把酒言欢，在一片欢声笑语中，为大会画上圆满句号。', '1');
INSERT INTO `course_intro_content` VALUES ('630', '11', '/upload/manager/1_1502250380.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('631', '11', '/upload/manager/1_1502259149.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('643', '12', '/upload/manager/1_1508134113.png', '2');
INSERT INTO `course_intro_content` VALUES ('644', '12', '/upload/manager/1_1508134164.png', '2');
INSERT INTO `course_intro_content` VALUES ('645', '12', '此行得到了母校领导的大力支持，在母校召开，更多了一分意义。踏入校园的我们已经感受到满腔的热情，顿感亲切。\n', '1');
INSERT INTO `course_intro_content` VALUES ('646', '12', '/upload/manager/1_1508134244.png', '2');
INSERT INTO `course_intro_content` VALUES ('647', '12', '在两天的行程中，分别进行了绵职院成都校友会理事及股东大会，在总结工作的同时，也对成都校友寄语明天。相信在每一位理事、每一位校友的用心经营下，成都校友会也定会将期待的明天在每一个今天付诸实践。公益之余，让每一位成都校友找到这份校园情怀的归属。', '1');
INSERT INTO `course_intro_content` VALUES ('648', '12', '/upload/manager/1_1508134325.png', '2');
INSERT INTO `course_intro_content` VALUES ('649', '12', '以及我行与学院学生在行政楼第一会议室召开“励志创业会”，会议中校友以过来人分享实践经验，学生们交流问答，获益匪浅。', '1');
INSERT INTO `course_intro_content` VALUES ('650', '12', '/upload/manager/1_1508134388.png', '2');
INSERT INTO `course_intro_content` VALUES ('651', '12', '绵职院成都校友会正值5岁生日之际，也特地邀请母校及绵阳校友分会相关领导出席。在表达生日祝福的同时，也预祝成都校友会的美好明天。\n', '1');
INSERT INTO `course_intro_content` VALUES ('652', '12', '/upload/manager/1_1508134442.png', '2');
INSERT INTO `course_intro_content` VALUES ('653', '12', '此行恰遇毕业季前夕，每一位校友心中的校园情愫正蠢蠢欲动，在会议间隙，走在熟悉的路上，对于离校多年的我们，重返于此，共享青春，畅舒胸臆实为难得。\n', '1');
INSERT INTO `course_intro_content` VALUES ('654', '12', '想念大食堂被我们吐槽无数遍的饭菜，', '1');
INSERT INTO `course_intro_content` VALUES ('655', '12', '想念校园里被我们走过的每一处风景，', '1');
INSERT INTO `course_intro_content` VALUES ('656', '12', '想念那个当初在课堂上的懵懂的我们；', '1');
INSERT INTO `course_intro_content` VALUES ('657', '12', '在教职工食堂“桃苑”就餐，重拾校园餐；入住于绵职院崇实楼“崇实酒店”—学院酒店专业实训基地，更深入的感受校园。', '1');
INSERT INTO `course_intro_content` VALUES ('658', '12', '/upload/manager/1_1508134566.png', '2');
INSERT INTO `course_intro_content` VALUES ('659', '12', '中途组织参观校史馆、实训室，了解学院校史及教学现状，在场的每一位无不感慨于“那些年”。', '1');
INSERT INTO `course_intro_content` VALUES ('660', '12', '/upload/manager/1_1508134606.png', '2');
INSERT INTO `course_intro_content` VALUES ('661', '12', '在紧凑的安排下，最后在仙海游中结束此次“畅享青春，展望未来”主题行。\n', '1');
INSERT INTO `course_intro_content` VALUES ('662', '12', '结束的是一次夏游，一次会议，\n而扎根于心的这份深沉的情怀，\n却永不会结束与停止。', '1');
INSERT INTO `course_intro_content` VALUES ('663', '12', '感谢母校领导对此行的大力支持，感谢绵职院成都校友会幕后组织人的付出，感谢每一个你，让绵职院成都校友会始终充满爱与温暖。至此，成都校友会2017夏游暨校友会理事大会、公司股东大会“畅享青春，展望未来”圆满落幕。', '1');
INSERT INTO `course_intro_content` VALUES ('664', '12', '/upload/manager/1_1508134672.png', '2');
INSERT INTO `course_intro_content` VALUES ('699', '8', '”你好，我是***”毕业于M学校”', '1');
INSERT INTO `course_intro_content` VALUES ('700', '8', '”毕业于M学校？我也是，你哪个系的？ ”', '1');
INSERT INTO `course_intro_content` VALUES ('701', '8', '”你哪个系的？什么专业，老师是***”', '1');
INSERT INTO `course_intro_content` VALUES ('702', '8', '这是在毕业后常常会作的自我介绍，校友这无形中的联系即使是两个陌生的人也会缘此而倍感熟悉与亲切，犹如在外地相遇的同乡人那样惊喜与感慨。', '1');
INSERT INTO `course_intro_content` VALUES ('703', '8', '/upload/manager/1_1508135343.png', '2');
INSERT INTO `course_intro_content` VALUES ('704', '8', '正是这样的情结，2012年绵职院校友总会吹响号角，全国各地校友纷纷响应组织起这个大家庭，绵职院成都校友会当然也在其中。酒于中国而言，是根深蒂固的一种文化，是中国人共述衷情的载体。于是万千绵职人在各自校友会的倡议中共聚一堂，把酒言欢叙当年。', '1');
INSERT INTO `course_intro_content` VALUES ('705', '8', '/upload/manager/1_1508135389.png', '2');
INSERT INTO `course_intro_content` VALUES ('706', '8', '“聚首情”也由此应运而生。在2015年校友相聚之时，大家尽兴高歌，舒畅胸臆。这样晶莹剔透的小小玻璃杯中的液体，却蕴含着大大的能量，承载了多少绵职人的心声，“那为何我们不喝自己的酒呢，让这饱满情谊的酒更具意义” 一个声音出来了，突然大家拍案叫绝，竟更喜笑颜开。物质与精神追求中，精神上的共鸣愈发显得尤为珍贵。', '1');
INSERT INTO `course_intro_content` VALUES ('707', '8', '/upload/manager/1_1508135431.png', '2');
INSERT INTO `course_intro_content` VALUES ('708', '8', '古人曾说：慨当以慷，忧思难忘，何以解忧，唯有杜康。万千绵职人想说：校友难忘，述衷肠，共举“聚首情”。', '1');
INSERT INTO `course_intro_content` VALUES ('709', '8', '“聚首情”-再聚首，情更浓。\n这便是命名所含蕴意。\n', '1');
INSERT INTO `course_intro_content` VALUES ('710', '8', '希望这是可以代表千千万万绵职人的心声。\n在一起，喝我们自己的酒。\n这是一种情感上的联结，\n一首歌，一个故事，一段回忆，一种情结。', '1');
INSERT INTO `course_intro_content` VALUES ('711', '8', '设计丨它是这样的', '1');
INSERT INTO `course_intro_content` VALUES ('712', '8', '聚首情按照中国文化传统，分为清香型与浓香型。在整体设计中也与校友会对校友的祝福与希冀合为一体。    ', '1');
INSERT INTO `course_intro_content` VALUES ('713', '8', '清香型以淡雅蓝为主色瓶身，取名琴心，代表舒心，优雅，希望绵职校友内心丰盈，雅致人生；\n', '1');
INSERT INTO `course_intro_content` VALUES ('714', '8', '浓香型以中国红颜色设计，得名弦歌，代表喜庆、活泼，载歌载舞，希望绵职校友欢愉快乐，共享开心生活。', '1');
INSERT INTO `course_intro_content` VALUES ('715', '8', '/upload/manager/1_1508135959.png', '2');
INSERT INTO `course_intro_content` VALUES ('716', '8', '酿造工艺丨它是这样的', '1');
INSERT INTO `course_intro_content` VALUES ('717', '8', '在绵职院成都校友会多次考察下，酒源最终决定选用成都大地魂酒业有限公司，以高粱、小麦、大米、玉米、糯米为原料。采用天然山泉水，以传统工艺酿制而成，不添加任何食用香精和酒精。刚酿出来的聚首情很燥、很烈，富含300多种微生物，放进恒温、避光、保湿的藏酒洞。藏酒洞位于龙泉山脉，四季恒温20度，是年份酒的天然孵化箱，酒的生命得以延续。洞藏三年后，再开缸装坛种在土里，接受大地的滋润，活酒更活，口感更润、更柔、更香。', '1');
INSERT INTO `course_intro_content` VALUES ('718', '8', '/upload/manager/1_1508136082.png', '2');
INSERT INTO `course_intro_content` VALUES ('719', '8', '/upload/manager/1_1508136119.png', '2');
INSERT INTO `course_intro_content` VALUES ('720', '8', '/upload/manager/1_1508136283.png', '2');
INSERT INTO `course_intro_content` VALUES ('721', '8', '在大家的通力合作下，从“聚首情”取名、设计再到制作、出厂，来到我们相聚杯中，都为绵职人倾注辛劳，满含校友情谊而成。现也是为绵阳职业技术学院订购酒，校友会指定酒。\n', '1');
INSERT INTO `course_intro_content` VALUES ('722', '8', '“聚首情”不只是酒，更是校友情怀的见证结晶。', '1');
INSERT INTO `course_intro_content` VALUES ('736', '14', 'dasdasd', '1');
INSERT INTO `course_intro_content` VALUES ('737', '14', '段落1', '1');
INSERT INTO `course_intro_content` VALUES ('738', '14', '段落23333', '1');
INSERT INTO `course_intro_content` VALUES ('739', '14', '/upload/manager/1_1524796025.jpg', '2');
INSERT INTO `course_intro_content` VALUES ('740', '18', 'sadasdasdasd', '1');
INSERT INTO `course_intro_content` VALUES ('741', '18', 'asdasd23324234234', '1');
INSERT INTO `course_intro_content` VALUES ('742', '18', '/upload/course/1_1524797015.jpg', '2');

-- ----------------------------
-- Table structure for `course_type`
-- ----------------------------
DROP TABLE IF EXISTS `course_type`;
CREATE TABLE `course_type` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `delete_` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_type
-- ----------------------------
INSERT INTO `course_type` VALUES ('1', '泰拳培训', '');
INSERT INTO `course_type` VALUES ('2', '咏春拳培训2222', '');
INSERT INTO `course_type` VALUES ('3', '其他培训', '');
INSERT INTO `course_type` VALUES ('4', 'asdasdasd', '');

-- ----------------------------
-- Table structure for `index_about_us`
-- ----------------------------
DROP TABLE IF EXISTS `index_about_us`;
CREATE TABLE `index_about_us` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of index_about_us
-- ----------------------------
INSERT INTO `index_about_us` VALUES ('1', 'jiaoyu培训222', '/upload/manager/1_1524819178.jpg');

-- ----------------------------
-- Table structure for `index_banner`
-- ----------------------------
DROP TABLE IF EXISTS `index_banner`;
CREATE TABLE `index_banner` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of index_banner
-- ----------------------------
INSERT INTO `index_banner` VALUES ('1', '/upload/banner/banner1.jpg');
INSERT INTO `index_banner` VALUES ('2', '/upload/banner/banner2.jpg');
INSERT INTO `index_banner` VALUES ('3', '/upload/banner/banner3.jpg');
INSERT INTO `index_banner` VALUES ('4', '/upload/banner/1_1524723444.jpg');
INSERT INTO `index_banner` VALUES ('5', '/upload/banner/1_1524723456.jpg');
INSERT INTO `index_banner` VALUES ('6', '/upload/banner/1_1524723536.jpg');

-- ----------------------------
-- Table structure for `index_content`
-- ----------------------------
DROP TABLE IF EXISTS `index_content`;
CREATE TABLE `index_content` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of index_content
-- ----------------------------
INSERT INTO `index_content` VALUES ('1', '100严谨的学术管理', '100尊重教育的基本原理，以严谨的态度管理学术，致力于在教师素养，能力提升以及教学规范等方面的持续改善。');
INSERT INTO `index_content` VALUES ('2', '2完善的课程体系', '2优选较匹配学员状况的教材，投入巨资进行二次研发，启橙已形成由入门，基础语言学习，学习能力提升到母语化使用的分级课程体系。');
INSERT INTO `index_content` VALUES ('3', '3以学员为中心​', '3教育是让每一个生命有尊严的事业。启橙坚持以学员的全面健康成长为目标，尊重孩子天性，兴趣培养，鼓励自我表达，激发个体学习潜能');
INSERT INTO `index_content` VALUES ('4', '4坚持学习能力培养', '4授人以鱼不如授人以渔。终身学习与持续学习能力将成为未来社会对于人才的基本要求。启橙坚持以语言能力培养为媒介，培养学员自主、高效、多渠道的学习能力。');

-- ----------------------------
-- Table structure for `news_content`
-- ----------------------------
DROP TABLE IF EXISTS `news_content`;
CREATE TABLE `news_content` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `news_id` bigint(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_content
-- ----------------------------
INSERT INTO `news_content` VALUES ('311', '6', '自2012年5月成都校友会成立后，各项活动的开展让我们体会到单靠校友捐款难以长存，没有专职人员，校友会的工作也会缺乏连贯性，各地兄弟校友会亦有所体会。这当是校友总会最清楚又极力想改变的现状！', '1');
INSERT INTO `news_content` VALUES ('312', '6', '探索发展，我们一直在路上。校友会的可持续，除了需要热心校友的积极参与、无私奉献，同时，成立经济平台，以经济杠杆来撬动校友会的良性发展已是必然。', '1');
INSERT INTO `news_content` VALUES ('313', '6', '/upload/manager/1_1502163949.jpg', '2');
INSERT INTO `news_content` VALUES ('314', '6', '/upload/manager/1_1502164071.jpg', '2');
INSERT INTO `news_content` VALUES ('315', '6', '涪：不忘初心，不忘母校', '1');
INSERT INTO `news_content` VALUES ('316', '6', '诚：诚信经营，亦为“成”都', '1');
INSERT INTO `news_content` VALUES ('317', '6', '汇：相聚一起，分享共好', '1');
INSERT INTO `news_content` VALUES ('318', '6', '2014年6月成都涪诚汇科技有限公司正式成立，注册资金361万元人民币，公司股东35人。\n“客户为本，奋斗为基”，以信任、拥有、开放、无私为基础，以人脉、项目、资金等方面的整合为前期经营思路。从董事会，监事会，到经营团队，我们一直是一群有组织纪律，有校友情怀绵职人。\n', '1');
INSERT INTO `news_content` VALUES ('319', '6', '/upload/manager/1_1502164281.jpg', '2');
INSERT INTO `news_content` VALUES ('320', '6', '/upload/manager/1_1502164380.jpg', '2');
INSERT INTO `news_content` VALUES ('321', '6', '/upload/manager/1_1502164484.jpg', '2');
INSERT INTO `news_content` VALUES ('322', '6', '我们经营的项目从德阳恒大建材城大艺瓷砖店的投资入股，到旅游项目的考察学习，再到“聚首情”酒的经营落地。', '1');
INSERT INTO `news_content` VALUES ('323', '6', '一次探索，一次考察、一次投入、一次进步。我们在实践中学习，摸索前进，远行无急行，无论路上是荆棘丛生，或是狭窄小道，光明就是方向。不忘初心，方得始终。', '1');
INSERT INTO `news_content` VALUES ('324', '6', '/upload/manager/1_1502164759.jpg', '2');
INSERT INTO `news_content` VALUES ('325', '6', '/upload/manager/1_1502164849.jpg', '2');
INSERT INTO `news_content` VALUES ('326', '6', '在这样一个平台中，我们的校友将享受到各类优质服务，这里既是你温暖的爱的港湾，倾听你的欢声笑语抑或困难惆怅；也将是你的有力合作伙伴，可以为你提供短期资金借款有偿服务，以满足一时之需，我们合力共渡难关。', '1');
INSERT INTO `news_content` VALUES ('409', '7', '曾饮涪江水，今朝绿洲聚。绵阳职业技术学院成都校友会2016年“不忘初心，携手前行”年会于11月27日在成都市绿洲大酒店盛大举行。此次参会近200人，绵职院成都校友会名誉会长文晓璋，学院校友总会会长、院长何礼果、副院长肖争鸣、学院原校友办主任饶光华、学院校友办老师朱箐斓，以及新疆、宁夏、内蒙等兄弟校友会近20名代表莅临参会。', '1');
INSERT INTO `news_content` VALUES ('410', '7', '/upload/manager/1_1502173137.jpg', '2');
INSERT INTO `news_content` VALUES ('411', '7', '会议于15:00正式开始，名誉会长万富兵致欢迎辞，母校何院长、新疆校友会胡志华副会长表达了对成都校友会的祝福与希冀，刘昌严会长做成都校友会2016年工作报告，钟娜副秘书长汇报成都校友会经济平台公司——成都涪诚汇科技有限公司的发展动向。', '1');
INSERT INTO `news_content` VALUES ('412', '7', '/upload/manager/1_1502173241.jpg', '2');
INSERT INTO `news_content` VALUES ('413', '7', '/upload/manager/1_1502173323.jpg', '2');
INSERT INTO `news_content` VALUES ('414', '7', '/upload/manager/1_1502173534.jpg', '2');
INSERT INTO `news_content` VALUES ('415', '7', '/upload/manager/1_1502173660.jpg', '2');
INSERT INTO `news_content` VALUES ('416', '7', '/upload/manager/1_1502173784.jpg', '2');
INSERT INTO `news_content` VALUES ('417', '7', '成都校友会一直以“分享•共好”为发展理念。年会精心设置了分享、公益等环节，给校友们带来不一样的感受与收获。', '1');
INSERT INTO `news_content` VALUES ('418', '7', '分享—校友分享，互动交流', '1');
INSERT INTO `news_content` VALUES ('419', '7', '匆匆岁月，成长的痕迹流梭于我们的身体发肤更是工作生活。', '1');
INSERT INTO `news_content` VALUES ('420', '7', '明炬律师事务所合伙人，来自母校水泥工艺8104班的明向阳校友，作为成功校友代表为大家分享自身经历与经验，从兴趣出发，通过刻苦学习，终于成功转型。', '1');
INSERT INTO `news_content` VALUES ('421', '7', '/upload/manager/1_1502174624.png', '2');
INSERT INTO `news_content` VALUES ('422', '7', '/upload/manager/1_1502174630.png', '2');
INSERT INTO `news_content` VALUES ('423', '7', '/upload/manager/1_1502174687.png', '2');
INSERT INTO `news_content` VALUES ('424', '7', '今天的我们，不论你是富饶盈足，或是默默无闻，我们都在路上，愿每一位绵职人都能实现心中那一方愿景。', '1');
INSERT INTO `news_content` VALUES ('425', '7', '共好—公益基金启动仪式及募集', '1');
INSERT INTO `news_content` VALUES ('426', '7', '路漫漫其修远兮，而不论生活如何待我，我们都需要赋以坚韧，乐观待之。', '1');
INSERT INTO `news_content` VALUES ('427', '7', '建机8113班李兴虎校友重病，几番煎熬，忍痛来到我们的身边，与大家分享，向校友传递：一路支撑他的是爱的鼓励与希望，更是艰难时人性的光辉。命运多舛，我们依然从容、坚强。', '1');
INSERT INTO `news_content` VALUES ('428', '7', '/upload/manager/1_1502174878.jpg', '2');
INSERT INTO `news_content` VALUES ('429', '7', '作为公益组织，成都校友会踏出爱的步数，由名誉会长文晓璋为公益基金启动仪式慷慨陈词。基金启动后的短短几分钟，现场校友们纷纷向公益箱投入自己的爱心，经统计，募集公益金共19650元(现金17650元，网络转收2000元，)。每一笔公益善款将会帮助更多需要帮助的校友。每一笔款项由专人进行记录且公开去向。成都校友会，因你更加温暖。', '1');
INSERT INTO `news_content` VALUES ('430', '7', '/upload/manager/1_1502175198.jpg', '2');
INSERT INTO `news_content` VALUES ('431', '7', '动人的朗诵 、默契的合唱，风趣的小品、深情的舞蹈以及有趣的互动。欢声笑语满堂，成都校友会感恩有你。', '1');
INSERT INTO `news_content` VALUES ('432', '7', '/upload/manager/1_1502175380.jpg', '2');
INSERT INTO `news_content` VALUES ('433', '7', '/upload/manager/1_1502175599.jpg', '2');
INSERT INTO `news_content` VALUES ('434', '7', '18:00，晚宴开始。校友们互述友情，举杯共饮。谈笑风生中，年会圆满落幕。我们期待，明年再聚！', '1');
INSERT INTO `news_content` VALUES ('435', '7', '/upload/manager/1_1502175732.jpg', '2');
INSERT INTO `news_content` VALUES ('449', '9', '/upload/manager/1_1502177398.jpg', '2');
INSERT INTO `news_content` VALUES ('450', '9', '记忆中隐现出何院长的样子，常常是在各种大会上的发言，抑或是09级后学生毕业证书上洋洋洒洒的院长签名。没想到毕业几年后却有幸与这位“权威人物”面对面畅聊，心中还是不免忐忑。然实际交流中却大相径庭，爽朗的笑声不时传来，少了些许距离，多了几分亲切。不得不说，这是一个有趣的人。', '1');
INSERT INTO `news_content` VALUES ('451', '9', '/upload/manager/1_1502177975.jpg', '2');
INSERT INTO `news_content` VALUES ('452', '9', '聚首情：何院平时事务都非常繁忙，那在周末闲暇之余都喜欢做什么呢？\n', '1');
INSERT INTO `news_content` VALUES ('453', '9', '何院长：  非常喜欢带着家人一起出游，散步、喝茶、聊天，能够给以家人更多的陪伴。推荐绵阳本地非常有名的仙海湖，江油的农家乐。', '1');
INSERT INTO `news_content` VALUES ('454', '9', '聚首情：据了解何院一路走来，也是有非常丰富的职业经历，可以简单分享一下吗？\n', '1');
INSERT INTO `news_content` VALUES ('455', '9', '何院长：这是一个很复杂的问题，我的专业太多，本科学的是机械制造，后来第二学位学的是思想政治教育，肯定没想到吧。但是整体发表的很多言论都是偏理性，偏法律的。', '1');
INSERT INTO `news_content` VALUES ('456', '9', '毕业后，最开始我是机械制造的老师，后来副教授职称的是思想政治教育，而教授职称的是法学。后面从事组织人事管理工作八年，在北川县担任过副县长，辗转回来也在西科大财务处当过副处长，还记得那时三个月内必须拿到会计证，电算化证，初算等级证，我都通过自己的努力拿到证书。', '1');
INSERT INTO `news_content` VALUES ('457', '9', '再后来从事法学工作，在西南科技大学组建法学院，任职法学院副院长，学院内也不乏许多优秀人才，那个时候我对自己说：必须在法学上有所突破。这样的信念一直鞭策我攻读法律，并取得一定成绩，目前已发表80篇文章有余，三分之二篇章都是关于法学。', '1');
INSERT INTO `news_content` VALUES ('458', '9', '/upload/manager/1_1502178641.jpg', '2');
INSERT INTO `news_content` VALUES ('459', '9', '而这所有经历过的一切，都是因为我在努力的做这一件事。尽管可能方向不同，但我始终专注于做好当下的这一件事。', '1');
INSERT INTO `news_content` VALUES ('460', '9', '聚首情：在整个职业历程中，辗转了多个专业与方面，想必一定会面临很多选择，您怎么看待呢？', '1');
INSERT INTO `news_content` VALUES ('461', '9', '何院长：其实我觉着，选择工作和学习来说，你首先选择工作，然后再针对性的去填补所需要的知识与方法。一路走来，我们可以看到：你学的任何专业在你未来的职业选择中，所占比例可能并不大，关键是在于你对于所从事的某件事情的努力。你可以根据工作的需要，或者环境的需要去认真学习，那么它取得成功的几率也就越高。', '1');
INSERT INTO `news_content` VALUES ('462', '9', '我在职业教历研究中，我在高职院校的院长中，资历并不深，时间并不长，但也很快成为了这方面的专家。因为一个人善于去学习，善于去把控事物发展的本质，把握这个职业教育的方向和最新前沿，而我每天都在关注，在思考，在研究。', '1');
INSERT INTO `news_content` VALUES ('463', '9', '/upload/manager/1_1502178919.jpg', '2');
INSERT INTO `news_content` VALUES ('464', '9', '聚首情：何院在任职绵职院院长一职同时，也为其校友会总会会长，它是在什么时候成立的呢？', '1');
INSERT INTO `news_content` VALUES ('465', '9', '何院长：2012年6月6日在绵职院成立，以绵职院本校为校友总会，每个省建立分会，每个市建立分会，目前已经成立有32个校友会。我们可以发现建设的时间并不长，但校友会的发展还是很迅速的。', '1');
INSERT INTO `news_content` VALUES ('466', '9', '聚首情：对于目前校友会建设，您觉着最重要的是什么？', '1');
INSERT INTO `news_content` VALUES ('467', '9', '何院长：每个校友会，最核心的来讲，是希望有其独立的造血功能。\n', '1');
INSERT INTO `news_content` VALUES ('468', '9', '我们都知道大部分校友会组织活动都是依靠赞助、捐赠或者校友交款模式。而这些模式都是依靠他人存在，如果没有这些，校友会又该如何正常运转，所以更建议校友会有自己的实体，将校友会长期坚持下去。', '1');
INSERT INTO `news_content` VALUES ('469', '9', '聚首情：想必何院平时和其他校友应该也保持着密切联系。', '1');
INSERT INTO `news_content` VALUES ('470', '9', '何院长：通常每个月都会定期交流。会长、秘书长等回校都是亲自接待，也会经常去看望我们的校友，一起畅聊。同时也看到很多校友发展越来越好，也希望他们能回校多为师弟师妹提供更多的工作岗位或者实践机会，互帮互助。', '1');
INSERT INTO `news_content` VALUES ('471', '9', '聚首情：校友会的发展正逐步走上正轨，相信何院也颇多感慨，此时此刻想要对在外校友们说些什么呢？\n', '1');
INSERT INTO `news_content` VALUES ('472', '9', '何院长：对于校友来说，任何一个校友，不论在哪个岗位，在那种职位，收入，永远要正视自己，自己就是从绵职院毕业的，出身并不重要，更多在于自己后期的努力及取得的成果。更何况绵职院也很好；', '1');
INSERT INTO `news_content` VALUES ('473', '9', '同时也希望我们所有校友在所在地方，所在岗位上，能充分发扬学校的校训“重德，精业、求实，创新”尤其重德，我们做任何事，首先是做一个人，低调的人。生活中可以高调，工作中需要低调，一个人的品行很重要。', '1');
INSERT INTO `news_content` VALUES ('474', '9', '最后，祝所有绵职院学子都能够取得越来越好的成绩，保重身体，常回母校看看，学校永远是你们温暖的港湾。', '1');
INSERT INTO `news_content` VALUES ('552', '10', '/upload/manager/1_1502248637.jpg', '2');
INSERT INTO `news_content` VALUES ('553', '10', '小编：肖院长，您好！知道您平日工作也是特别忙，那您业余时间除了工作，做的最多的一件事是什么呢？', '1');
INSERT INTO `news_content` VALUES ('554', '10', '肖院长：现在我的业余时间更多的是陪伴家人。去年，家中小孙孙的出生，也为家里增添了不少欢乐。我和爱人一有空闲时间都会围着这个小淘气转，这也是真实的人间味吧！  想说工作再忙再累，也别忽略对家人的爱和陪伴吧。我们这一生都要学习工作和生活的平衡，也就是精力的管理。把工作当回事，把生活也当回事。有一句话是这样说的：“没有工作，我们的生活将无以为继；没有生活，我们的工作将空虚落寞。”', '1');
INSERT INTO `news_content` VALUES ('555', '10', '小编：肖院长，知道您曾任教老师，也是班主任。\n', '1');
INSERT INTO `news_content` VALUES ('556', '10', '肖院长：是的，有很多学生，而且现在的个人事业都做得不错，作为老师看到自己的学生取得好的成就，自然非常欣慰。', '1');
INSERT INTO `news_content` VALUES ('557', '10', '我毕业后分配到四川建筑材料工业学校（后更名为现在的绵阳职业技术学院），给水泥专业的学生授课。记得当时我还是班主任，那时一个班的学生比较少，班主任不仅要管教育，还要管学生的生活。学生年龄较小，价值观、人生观的形成也是在学校的那几年，所以老师的引导格外重要。但我对学生个人情感方面不怎么管，很尊重他们。 \n', '1');
INSERT INTO `news_content` VALUES ('558', '10', '回想起那时我也才毕业出来上班，年龄也不大，和班上的学生自然没什么代沟，平日里喜欢和他们呆在一起，和他们的交流也比较多。我也从来不以老师的价值观，来衡量和看待每一个学生。在我看来，当时他们能考进我们学校，都是全国拔尖的优质生，他们好学上进，从不畏难，对待自己的学业从不马虎。印象中他们还真没做过什么调皮捣蛋的事，很少给老师添堵，十分尊敬和爱戴老师。  ', '1');
INSERT INTO `news_content` VALUES ('559', '10', '想来时间真快，几十年过去，我和以前班上的好多学生都还有联系，关系也都很好。(肖院长脸上洋溢着幸福满足的笑容。）  \n', '1');
INSERT INTO `news_content` VALUES ('560', '10', '小编：肖院长，回想起您自己的大学生活有什么样的感受？', '1');
INSERT INTO `news_content` VALUES ('561', '10', '肖院长：我是邓小平“恢复高考”政策的受益人，是文革后第一届本科生。在这里最感慨的是邓小平力排众议恢复高考，给了大家一个公平竞争的机会，改变了很多人的命运。  记得当时我还在农村当知青，知道恢复高考后，报名参加了考试，每晚点着蜡烛，学习到很晚，奋战了2个多月后，考上了南京工业大学。', '1');
INSERT INTO `news_content` VALUES ('562', '10', '因为经历了动荡坎坷，深知通过用知识改变命运的机会来之不易，所以我读大学那会，很刻苦的在钻研学问，一有时间都跑到图书馆看书。对知识的渴望和探索，就是那时自己大学生活的写照吧！ ', '1');
INSERT INTO `news_content` VALUES ('563', '10', '小编：对于学校已经毕业正在工作，或者正在寻求工作的学子来讲，您对他们有没有想说的话？ ', '1');
INSERT INTO `news_content` VALUES ('564', '10', '肖院长：我真诚的祝愿所有的绵职学子都能在自己喜欢的工作岗位上大展身手。希望他们能终生践行学校的校训：“重德、精业、求实、创新。”脚踏实地，一步一个脚印，切忌好高骛远，一步步的攀登自己的人生高峰。 ', '1');
INSERT INTO `news_content` VALUES ('565', '10', '另外，我希望他们能把终生学习，落实到生活、工作中。工作后，大家会发现学校能够学到的东西，在工作中的使用是远远不够的。只有通过不断学习，提升自己的工作技能，才能更好的适应社会的发展，才能使自己立于不败之地，走到哪里都是受欢迎的人。  \n', '1');
INSERT INTO `news_content` VALUES ('566', '10', '在这里，我也对自己曾教过的学生给予最美好的祝福，希望他们的人生能更加辉煌。 ', '1');
INSERT INTO `news_content` VALUES ('567', '10', '小编：对咱们校友会，您有什么好的建议和看法呢？  ', '1');
INSERT INTO `news_content` VALUES ('568', '10', '肖院长：希望咱们校友会能越来越好，开展更多丰富多彩的活动，以活动为载体，把校友们团结起来。同时，校友会是一个很好的资源整合平台，可以集广大校友的力量办成很多值得点赞的事，希望大家能在其中发挥自己的优势和特长。\n', '1');
INSERT INTO `news_content` VALUES ('569', '10', '前不久我也受邀参加了咱们广州校友会举办的活动，活动方面很创新，有鲜明的特色，给人的印象很深。\n', '1');
INSERT INTO `news_content` VALUES ('570', '10', '我也希望各地的校友会能相互学习，借鉴各自做得比较好的地方。衷心希望在新的一年，咱们的校友会都能大放异彩。', '1');
INSERT INTO `news_content` VALUES ('571', '10', '走出肖院长的办公室，外面的风依旧用力的刮着，像是在用自己的深情欢迎每一位回到校园的学子。  \n', '1');
INSERT INTO `news_content` VALUES ('572', '10', '借着心底漾起的思绪，小编电访了几位肖院长曾教过的学生，他们现在都取得了不错的工作成绩，有的开办了自己的企业，有的在某一行业成为行家……但提到自己印象中的“肖老师”，他们的声音都是激动的，对“肖老师”的回忆如潮水般涌来，“肖老师”对他们的教导铭记在心，都表示“肖老师”是自己学生生涯里，一位令人难忘的好老师。', '1');
INSERT INTO `news_content` VALUES ('573', '10', '师者，所以传道授业解惑也。为师者，最具有人文精神，小编以为正是这份人文精神，使得我们的教师能担当师责，坚守教育的理想，富有生命的尊严，最具博爱的情怀。\n', '1');
INSERT INTO `news_content` VALUES ('574', '10', '他们始终用一颗宽容之心，为一颗颗曾经无望、颓废的心灵送去光亮。这光亮，足以闪耀他们的一生。', '1');
INSERT INTO `news_content` VALUES ('603', '11', '/upload/manager/1_1502249121.jpg', '2');
INSERT INTO `news_content` VALUES ('604', '11', '会议由第一届万富兵董事长主持召开。会议分为三个议程：', '1');
INSERT INTO `news_content` VALUES ('605', '11', '议程一', '1');
INSERT INTO `news_content` VALUES ('606', '11', '万董事长就股份转让事项进行了通报，并对公司新任股东表示热烈欢迎。涪诚汇公司是成都校友会常设机构，公司股东皆为校友，目前股东人数共计37人。', '1');
INSERT INTO `news_content` VALUES ('607', '11', '为保障公司经营层的经营活动阳光透明，维护广大股东校友们的权益，董事长就公司从成立至2017年6月底的财务审计工作做了阶段性汇报，并对公司财务制度的健全提出了相关要求，也得到了股东们的一致认可。', '1');
INSERT INTO `news_content` VALUES ('608', '11', '接着，公司第一届董事文方凌对公司章程进行了说明，望公司全体股东及员工能够有章可依。', '1');
INSERT INTO `news_content` VALUES ('609', '11', '/upload/manager/1_1502249561.jpg', '2');
INSERT INTO `news_content` VALUES ('610', '11', '/upload/manager/1_1502249730.jpg', '2');
INSERT INTO `news_content` VALUES ('611', '11', '议程二', '1');
INSERT INTO `news_content` VALUES ('612', '11', '会议在万董事长宣布换届选举第二届董事、独立董事、监事的相关事项的说明时，进入到第二议程，会议氛围轻松而有序。', '1');
INSERT INTO `news_content` VALUES ('613', '11', '会议提名董事、独立董事、监事人员名单：', '1');
INSERT INTO `news_content` VALUES ('614', '11', '第二届董事：刘昌严、徐中正、钟娜、邓晓辉、杨伟', '1');
INSERT INTO `news_content` VALUES ('615', '11', '第二届独立董事：万富兵', '1');
INSERT INTO `news_content` VALUES ('616', '11', '第二届监事：文方凌、杜春、周秋兰', '1');
INSERT INTO `news_content` VALUES ('617', '11', '第二届监事长：文方凌', '1');
INSERT INTO `news_content` VALUES ('618', '11', '恭喜公司第二届董事、独立董事、监事成员的产生。', '1');
INSERT INTO `news_content` VALUES ('619', '11', '我们也听到了来自王娟、徐中正、谢军等股东的心声，股东们对于公司发展提供了各项建设性意见。新当选董事代表邓晓辉、股东代表文武权对于新一届董事、监事的产生发表了各自的感言，并表示对于新一届领导班子工作的信任与支持。', '1');
INSERT INTO `news_content` VALUES ('620', '11', '议程三', '1');
INSERT INTO `news_content` VALUES ('621', '11', '会议间歇，新一届董事、监事召开的会议，选举产生了新一届董事长：', '1');
INSERT INTO `news_content` VALUES ('622', '11', '会议选举通过第二届董事长名单：', '1');
INSERT INTO `news_content` VALUES ('623', '11', '第二届董事长：钟娜', '1');
INSERT INTO `news_content` VALUES ('624', '11', '董事、监事们相信，钟娜能够担当重任，并对新一届组织架构的产生表示支持与理解。他们也欢迎年轻校友们的加入。', '1');
INSERT INTO `news_content` VALUES ('625', '11', '大会休息结束，第一届万董事长向股东们宣布了新一届董事长人选。', '1');
INSERT INTO `news_content` VALUES ('626', '11', '钟娜就当选董事长发表了当选感言，并对公司经营工作计划展开了汇报。钟娜讲到：“感恩”平台给予，校友信任，股东包容，特别感谢公司第一届以万富兵、刘昌严为首的领导班子的无私奉献，对于个人成长，钟娜坦诚讲到了自己的三年经历与期间的收获。于她而言，董事长、总经理一肩挑意味着涪诚汇需要她不得不担当更大、更多、更重要的责任。她表示，她将用行动回报平台，回报曾经付出的校友们。', '1');
INSERT INTO `news_content` VALUES ('627', '11', '会议在钟娜的经营工作报告中完美落幕，对公司已开展的经营工作作了详细介绍，并对公司财务整改，资金状况做了汇报说明。公司近几年将会致力于整合平台资源，服务校友平台，以“客户为本，奋斗为基”为经营理念，最大程度服务校友与校友企业，将校友会与母校、校友与校友企业、校友企业之间做好资源整合与对接。', '1');
INSERT INTO `news_content` VALUES ('628', '11', '钟娜讲到，公司服务第一站：母校10月招聘双选会。对此，母校生源、服务优势、业内标杆钟娜都一一剖析。现场发放了校友企业用人需求报名表，立志解决校友企业招人难题，做到人才整合。我们相信，公司的未来一定越来越好。在股东们的鼓励声和对公司未来发展的美好期许中，涪诚汇公司第五次股东大会圆满落幕。', '1');
INSERT INTO `news_content` VALUES ('629', '11', '会后，股东们把酒言欢，在一片欢声笑语中，为大会画上圆满句号。', '1');
INSERT INTO `news_content` VALUES ('630', '11', '/upload/manager/1_1502250380.jpg', '2');
INSERT INTO `news_content` VALUES ('631', '11', '/upload/manager/1_1502259149.jpg', '2');
INSERT INTO `news_content` VALUES ('643', '12', '/upload/manager/1_1508134113.png', '2');
INSERT INTO `news_content` VALUES ('644', '12', '/upload/manager/1_1508134164.png', '2');
INSERT INTO `news_content` VALUES ('645', '12', '此行得到了母校领导的大力支持，在母校召开，更多了一分意义。踏入校园的我们已经感受到满腔的热情，顿感亲切。\n', '1');
INSERT INTO `news_content` VALUES ('646', '12', '/upload/manager/1_1508134244.png', '2');
INSERT INTO `news_content` VALUES ('647', '12', '在两天的行程中，分别进行了绵职院成都校友会理事及股东大会，在总结工作的同时，也对成都校友寄语明天。相信在每一位理事、每一位校友的用心经营下，成都校友会也定会将期待的明天在每一个今天付诸实践。公益之余，让每一位成都校友找到这份校园情怀的归属。', '1');
INSERT INTO `news_content` VALUES ('648', '12', '/upload/manager/1_1508134325.png', '2');
INSERT INTO `news_content` VALUES ('649', '12', '以及我行与学院学生在行政楼第一会议室召开“励志创业会”，会议中校友以过来人分享实践经验，学生们交流问答，获益匪浅。', '1');
INSERT INTO `news_content` VALUES ('650', '12', '/upload/manager/1_1508134388.png', '2');
INSERT INTO `news_content` VALUES ('651', '12', '绵职院成都校友会正值5岁生日之际，也特地邀请母校及绵阳校友分会相关领导出席。在表达生日祝福的同时，也预祝成都校友会的美好明天。\n', '1');
INSERT INTO `news_content` VALUES ('652', '12', '/upload/manager/1_1508134442.png', '2');
INSERT INTO `news_content` VALUES ('653', '12', '此行恰遇毕业季前夕，每一位校友心中的校园情愫正蠢蠢欲动，在会议间隙，走在熟悉的路上，对于离校多年的我们，重返于此，共享青春，畅舒胸臆实为难得。\n', '1');
INSERT INTO `news_content` VALUES ('654', '12', '想念大食堂被我们吐槽无数遍的饭菜，', '1');
INSERT INTO `news_content` VALUES ('655', '12', '想念校园里被我们走过的每一处风景，', '1');
INSERT INTO `news_content` VALUES ('656', '12', '想念那个当初在课堂上的懵懂的我们；', '1');
INSERT INTO `news_content` VALUES ('657', '12', '在教职工食堂“桃苑”就餐，重拾校园餐；入住于绵职院崇实楼“崇实酒店”—学院酒店专业实训基地，更深入的感受校园。', '1');
INSERT INTO `news_content` VALUES ('658', '12', '/upload/manager/1_1508134566.png', '2');
INSERT INTO `news_content` VALUES ('659', '12', '中途组织参观校史馆、实训室，了解学院校史及教学现状，在场的每一位无不感慨于“那些年”。', '1');
INSERT INTO `news_content` VALUES ('660', '12', '/upload/manager/1_1508134606.png', '2');
INSERT INTO `news_content` VALUES ('661', '12', '在紧凑的安排下，最后在仙海游中结束此次“畅享青春，展望未来”主题行。\n', '1');
INSERT INTO `news_content` VALUES ('662', '12', '结束的是一次夏游，一次会议，\n而扎根于心的这份深沉的情怀，\n却永不会结束与停止。', '1');
INSERT INTO `news_content` VALUES ('663', '12', '感谢母校领导对此行的大力支持，感谢绵职院成都校友会幕后组织人的付出，感谢每一个你，让绵职院成都校友会始终充满爱与温暖。至此，成都校友会2017夏游暨校友会理事大会、公司股东大会“畅享青春，展望未来”圆满落幕。', '1');
INSERT INTO `news_content` VALUES ('664', '12', '/upload/manager/1_1508134672.png', '2');
INSERT INTO `news_content` VALUES ('699', '8', '”你好，我是***”毕业于M学校”', '1');
INSERT INTO `news_content` VALUES ('700', '8', '”毕业于M学校？我也是，你哪个系的？ ”', '1');
INSERT INTO `news_content` VALUES ('701', '8', '”你哪个系的？什么专业，老师是***”', '1');
INSERT INTO `news_content` VALUES ('702', '8', '这是在毕业后常常会作的自我介绍，校友这无形中的联系即使是两个陌生的人也会缘此而倍感熟悉与亲切，犹如在外地相遇的同乡人那样惊喜与感慨。', '1');
INSERT INTO `news_content` VALUES ('703', '8', '/upload/manager/1_1508135343.png', '2');
INSERT INTO `news_content` VALUES ('704', '8', '正是这样的情结，2012年绵职院校友总会吹响号角，全国各地校友纷纷响应组织起这个大家庭，绵职院成都校友会当然也在其中。酒于中国而言，是根深蒂固的一种文化，是中国人共述衷情的载体。于是万千绵职人在各自校友会的倡议中共聚一堂，把酒言欢叙当年。', '1');
INSERT INTO `news_content` VALUES ('705', '8', '/upload/manager/1_1508135389.png', '2');
INSERT INTO `news_content` VALUES ('706', '8', '“聚首情”也由此应运而生。在2015年校友相聚之时，大家尽兴高歌，舒畅胸臆。这样晶莹剔透的小小玻璃杯中的液体，却蕴含着大大的能量，承载了多少绵职人的心声，“那为何我们不喝自己的酒呢，让这饱满情谊的酒更具意义” 一个声音出来了，突然大家拍案叫绝，竟更喜笑颜开。物质与精神追求中，精神上的共鸣愈发显得尤为珍贵。', '1');
INSERT INTO `news_content` VALUES ('707', '8', '/upload/manager/1_1508135431.png', '2');
INSERT INTO `news_content` VALUES ('708', '8', '古人曾说：慨当以慷，忧思难忘，何以解忧，唯有杜康。万千绵职人想说：校友难忘，述衷肠，共举“聚首情”。', '1');
INSERT INTO `news_content` VALUES ('709', '8', '“聚首情”-再聚首，情更浓。\n这便是命名所含蕴意。\n', '1');
INSERT INTO `news_content` VALUES ('710', '8', '希望这是可以代表千千万万绵职人的心声。\n在一起，喝我们自己的酒。\n这是一种情感上的联结，\n一首歌，一个故事，一段回忆，一种情结。', '1');
INSERT INTO `news_content` VALUES ('711', '8', '设计丨它是这样的', '1');
INSERT INTO `news_content` VALUES ('712', '8', '聚首情按照中国文化传统，分为清香型与浓香型。在整体设计中也与校友会对校友的祝福与希冀合为一体。    ', '1');
INSERT INTO `news_content` VALUES ('713', '8', '清香型以淡雅蓝为主色瓶身，取名琴心，代表舒心，优雅，希望绵职校友内心丰盈，雅致人生；\n', '1');
INSERT INTO `news_content` VALUES ('714', '8', '浓香型以中国红颜色设计，得名弦歌，代表喜庆、活泼，载歌载舞，希望绵职校友欢愉快乐，共享开心生活。', '1');
INSERT INTO `news_content` VALUES ('715', '8', '/upload/manager/1_1508135959.png', '2');
INSERT INTO `news_content` VALUES ('716', '8', '酿造工艺丨它是这样的', '1');
INSERT INTO `news_content` VALUES ('717', '8', '在绵职院成都校友会多次考察下，酒源最终决定选用成都大地魂酒业有限公司，以高粱、小麦、大米、玉米、糯米为原料。采用天然山泉水，以传统工艺酿制而成，不添加任何食用香精和酒精。刚酿出来的聚首情很燥、很烈，富含300多种微生物，放进恒温、避光、保湿的藏酒洞。藏酒洞位于龙泉山脉，四季恒温20度，是年份酒的天然孵化箱，酒的生命得以延续。洞藏三年后，再开缸装坛种在土里，接受大地的滋润，活酒更活，口感更润、更柔、更香。', '1');
INSERT INTO `news_content` VALUES ('718', '8', '/upload/manager/1_1508136082.png', '2');
INSERT INTO `news_content` VALUES ('719', '8', '/upload/manager/1_1508136119.png', '2');
INSERT INTO `news_content` VALUES ('720', '8', '/upload/manager/1_1508136283.png', '2');
INSERT INTO `news_content` VALUES ('721', '8', '在大家的通力合作下，从“聚首情”取名、设计再到制作、出厂，来到我们相聚杯中，都为绵职人倾注辛劳，满含校友情谊而成。现也是为绵阳职业技术学院订购酒，校友会指定酒。\n', '1');
INSERT INTO `news_content` VALUES ('722', '8', '“聚首情”不只是酒，更是校友情怀的见证结晶。', '1');
INSERT INTO `news_content` VALUES ('909', '23', 'asdasd', '1');
INSERT INTO `news_content` VALUES ('910', '23', '/upload/news/1_1524731715.jpg', '2');
INSERT INTO `news_content` VALUES ('911', '23', 'sadasdasdasdasd', '1');
INSERT INTO `news_content` VALUES ('975', '14', 'asdasd', '1');
INSERT INTO `news_content` VALUES ('976', '5', '饮水思源，收获怀耕。绵职人遍及大江南北，他们是学院的历史，是母校的宝贵财富，是母校与社会之间构筑互动和互益的桥梁。正是这种背景，催生了母校总会和各地校友分会的成立。', '1');
INSERT INTO `news_content` VALUES ('977', '5', '/upload/manager/1_1501470174.jpg', '2');
INSERT INTO `news_content` VALUES ('978', '5', '为了通过校友会平台联络校友感情，传播母校信息，增强校友之间及与母校之间的凝聚力，成都的校友们经过几番商讨与筹备，以 “分享 • 共好”为宗旨，2012年5月20日在成都市望江宾馆成功召开了成都校友会成立大会。学院党委书记文晓璋，副书记、院长何礼果，副院长左明扬等学院领导及老师见证了成都校友会的成立。', '1');
INSERT INTO `news_content` VALUES ('979', '5', '/upload/manager/1_1502160804.jpg', '2');
INSERT INTO `news_content` VALUES ('980', '5', '成立大会审议并通过了成都校友会章程及组织机构人员名单', '1');
INSERT INTO `news_content` VALUES ('981', '5', '名誉会长：饶光华', '1');
INSERT INTO `news_content` VALUES ('982', '5', '会长：万富兵', '1');
INSERT INTO `news_content` VALUES ('983', '5', '副会长：刘昌严     李江涛', '1');
INSERT INTO `news_content` VALUES ('984', '5', '秘书长：张晓莉', '1');
INSERT INTO `news_content` VALUES ('985', '5', '常务理事：毛胜荣   等共计13名', '1');
INSERT INTO `news_content` VALUES ('986', '5', '理事：林桂英   等共计30名', '1');
INSERT INTO `news_content` VALUES ('987', '5', '感恩校友的重逢，感谢母校的关怀。有了母校的监督与鞭策，校友们的团结与付出，成都校友会不断成长与壮大。', '1');
INSERT INTO `news_content` VALUES ('988', '5', '情系校友 • 共享发展', '1');
INSERT INTO `news_content` VALUES ('989', '5', '1、2013年12月21日，成都校友会“在一起”把集结号吹响\r\n', '1');
INSERT INTO `news_content` VALUES ('990', '5', '2、2015年2月7日，“在路上”的成都校友们面对困难，共同迎难而上\r\n', '1');
INSERT INTO `news_content` VALUES ('991', '5', '3、2015年12月19日， “再聚首，情更浓”成都校友会号召大家再聚首，美丽的蓉城因有你有我，更加灿烂辉煌\r\n', '1');
INSERT INTO `news_content` VALUES ('992', '5', '/upload/manager/1_1502161714.png', '2');
INSERT INTO `news_content` VALUES ('993', '5', '/upload/manager/1_1502162422.jpg', '2');
INSERT INTO `news_content` VALUES ('994', '5', '/upload/manager/1_1502162619.jpg', '2');
INSERT INTO `news_content` VALUES ('995', '5', '同年5月9日，成都校友会迎来首届换届大会，经参会理事共同推荐及无记名投票，选举产生了成都校友会新一轮领导班子，并一致推举文晓璋、万富兵为名誉会长。当选的新班子表示，努力搞好校友会工作，力争成都校友会更上新台阶。', '1');
INSERT INTO `news_content` VALUES ('996', '5', '/upload/manager/1_1502162848.png', '2');
INSERT INTO `news_content` VALUES ('997', '5', '/upload/manager/1_1502162976.jpg', '2');
INSERT INTO `news_content` VALUES ('998', '5', '第二届成都校友会组织机构人员名单：', '1');
INSERT INTO `news_content` VALUES ('999', '5', '名誉会长：文晓璋     万富兵', '1');
INSERT INTO `news_content` VALUES ('1000', '5', '会长：刘昌严', '1');
INSERT INTO `news_content` VALUES ('1001', '5', '副会长：李江涛     张华川     杨伟', '1');
INSERT INTO `news_content` VALUES ('1002', '5', '秘书长：张晓莉', '1');
INSERT INTO `news_content` VALUES ('1003', '5', '副秘书长：钟娜     杨俊君', '1');
INSERT INTO `news_content` VALUES ('1004', '5', '理事：李绍强   等共计45名', '1');
INSERT INTO `news_content` VALUES ('1005', '5', '山高水长，情意悠悠。成都校友会心系每一位校友。同舟共济，共享发展。成都校友会不忘初心，携手前行。', '1');

-- ----------------------------
-- Table structure for `news_intro`
-- ----------------------------
DROP TABLE IF EXISTS `news_intro`;
CREATE TABLE `news_intro` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `create_date` date NOT NULL,
  `sub_title` varchar(1000) NOT NULL,
  `cover_url` varchar(100) NOT NULL,
  `delete_` bigint(10) NOT NULL DEFAULT '0',
  `index_show` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_intro
-- ----------------------------
INSERT INTO `news_intro` VALUES ('5', '绵职院成都校友会吹响号角，快来围观', '钟娜2', '2017-07-26', '饮水思源，收获怀耕。绵职人遍及大江南北，他们是学院的历史，是母校的宝贵财富，是母校与社会之间构筑互动和互益的桥梁。正是这种背景，催生了母校总会和各地校友分会的成立。', '/upload/news/1.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('6', '涪诚汇-一个有情怀的平台，等着你来', '成都校友会', '2017-07-03', '自2012年5月成都校友会成立后，各项活动的开展让我们体会到单靠校友捐款难以长存，没有专职人员，校友会的工作也会缺乏连贯性，各地兄弟校友会亦有所体会。这当是校友总会最清楚又极力想改变的现状', '/upload/news/3.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('7', '2016年“不忘初心，携手前行”年会圆满落幕', '成都校友会', '2017-07-04', '趣谈往事论当今，欢声笑语满堂飞。灯光杯影映笑脸，依稀时光又重回。', '/upload/news/2.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('8', '聚首情丨再回首，情更浓', '成都校友会', '2017-01-13', '有人说有朋友的地方就有江湖，不论腥风血雨，都有人陪你一起趟；然而有江湖的地方何不是因为朋友，而多了一份肝胆照人的高歌。朋友中，有这样二字我们非常熟悉---校友。校友源于每个人乌托邦时代，一颦一笑，都那么青涩美好，这是它的真实写照。每个人回忆起自己的青葱岁月，也总是会嘴角上扬。', '/upload/news/4.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('9', '认真而不失风趣之“何院长”', '成都校友会', '2016-11-19', '何礼果 中共党员，教授，硕士研究生导师，司法鉴定人。 现任绵阳职业技术学院院长，绵职院校友会总会会长。 中国高校科技法研究会理事；四川省法学会会员。 主要研究方向：法理学、宪法学和科技法学等领域。 从教以来，主持省、市和校级科研项目10余项，主研或参研省、市和校级科研项目12余项。 出版《现代科技法研究》专著1部，作为主编出版《法理学复习指南及阶梯训练》教材1部，副主编出版《法学概论》、《经济法学》教材2部，在《法律科学》、《学术论坛》、《社会科学研究》、《现代法学》、《经济与社会发展》等国家学术刊物公开发表学术论文60余篇。', '/upload/news/5.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('10', '与肖院长零距离对话：忆往昔，展未来', '成都校友会', '2017-08-09', '当小编特意乘坐熟悉的46路公交车，一路望着窗外的风景发呆时，不由想起周杰伦《回到过去》那首歌里的歌词：“想回到过去，试着让故事继续……”   下了车，走入校园，那些陪伴了自己几年青春时光的老师和校园风光，先后出现在眼前。只是几年时间，校园已经发生了太多变化，我一点一点的走近它，像回到梦最初开始的地方。    身旁的风刮来一个个斑斓的梦，看着抱着课本匆匆走入教室的学弟学妹，内心有种说不出的平静。  直到推开肖院长的办公室门，再次见到肖院长，那张熟悉的脸庞，将小编心里突然生出的忐忑抚平，与肖院长(绵阳职业技术学院副院长）简短有趣的对话，让小编的此次校园之行，更加耐人寻味。', '/upload/news/6.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('11', '成都涪诚汇科技有限公司第五次股东大会圆满召开', '成都校友会', '2017-08-09', '成都涪诚汇科技有限公司第五次股东大会于2017年7月16日下午15:00 — 18:00在成都花溪上堰酒店会议室顺利召开。到场股东28人，达到公司章程规定召开股东大会的条件。', '/upload/news/1.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('12', '成都校友会2017夏游暨校友会理事大会、公司股东大会圆满召开', '成都校友会', '2017-08-09', '5月20日，绵职院成都校友会理事、涪诚汇股东、部分校友一行在根据地“火炬时代”集合完毕后向母校出发。成都校友会2017夏游暨校友会理事大会、公司股东大会由此展开，以“畅享青春 · 展望未来”为主题拉开了序幕。', '/upload/news/2.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('13', '成都校友会2017夏游暨校友会理事大会、公司股东大会圆满召开', '成都校友会', '2017-08-09', '5月20日，绵职院成都校友会理事、涪诚汇股东、部分校友一行在根据地“火炬时代”集合完毕后向母校出发。成都校友会2017夏游暨校友会理事大会、公司股东大会由此展开，以“畅享青春 · 展望未来”为主题拉开了序幕。', '/upload/news/3.jpg', '0', '1');
INSERT INTO `news_intro` VALUES ('14', '1', '1', '2018-04-13', '1', '1', '0', '0');
INSERT INTO `news_intro` VALUES ('15', '2', '2', '2018-04-12', '2', '2', '0', '0');
INSERT INTO `news_intro` VALUES ('16', '3', '3', '2018-04-12', '3', '3', '0', '0');
INSERT INTO `news_intro` VALUES ('17', '4', '4', '2018-04-12', '4', '4', '0', '0');
INSERT INTO `news_intro` VALUES ('18', '5', '5', '2018-04-12', '5', '5', '0', '0');
INSERT INTO `news_intro` VALUES ('19', '6', '6', '2018-04-12', '6', '6', '0', '0');
INSERT INTO `news_intro` VALUES ('20', '7', '7', '2018-04-12', '7', '7', '0', '0');
INSERT INTO `news_intro` VALUES ('21', '8', '8', '2018-04-12', '8', '8', '0', '0');
INSERT INTO `news_intro` VALUES ('22', '9', '9', '2018-04-12', '9', '9', '0', '0');
INSERT INTO `news_intro` VALUES ('23', '测试增加', '测试增加2', '2018-04-26', '测试增加', '/upload/news/1_1524731721.png', '0', '0');

-- ----------------------------
-- Table structure for `operator`
-- ----------------------------
DROP TABLE IF EXISTS `operator`;
CREATE TABLE `operator` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `real_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of operator
-- ----------------------------
INSERT INTO `operator` VALUES ('1', 'admin', '111111', '2018-04-26 12:20:17', '管理员');

-- ----------------------------
-- Table structure for `retain_message`
-- ----------------------------
DROP TABLE IF EXISTS `retain_message`;
CREATE TABLE `retain_message` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of retain_message
-- ----------------------------
INSERT INTO `retain_message` VALUES ('1', 'asdasd', '13544444444', 'sadasdasdasd');
INSERT INTO `retain_message` VALUES ('2', 'qweasdasd', '13467667676', 'fgdfgdfdfg');

-- ----------------------------
-- Table structure for `teacher_intro`
-- ----------------------------
DROP TABLE IF EXISTS `teacher_intro`;
CREATE TABLE `teacher_intro` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `career` varchar(100) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `cover_url` varchar(100) DEFAULT NULL,
  `delete_` bit(1) NOT NULL DEFAULT b'0',
  `sex` bigint(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher_intro
-- ----------------------------
INSERT INTO `teacher_intro` VALUES ('1', '测试名字', '测试职业', '简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！简介要长！', '/upload/user/1_1524809299.png', '', '2');
INSERT INTO `teacher_intro` VALUES ('3', 'asdasdasd', 'asdasdasd', 'asdasdasd', '/upload/user/1_1524814566.png', '', '0');
INSERT INTO `teacher_intro` VALUES ('4', '名字', '职业', '简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！简介！', '/upload/user/1_1524814678.png', '', '2');
INSERT INTO `teacher_intro` VALUES ('2', 'Jone2', '2CEO  机构创始人', '233讲课风格，深入浅出，理论知识与实践经验有机的结合在一起，语言风趣幽默，善于与学员沟通。做事顾全大局，认真慎虑，诚信大度，执着坚定，有强烈的责任感和事业心。课堂气氛活跃，能充分调动学员的学习兴趣，颇得学员 爱戴。主讲手绘等课程，有扎实的美术基本功和丰富的专业室内与建筑设计经验。', 'http://tpl-cf61794.pic34.websiteonline.cn/upload/AD0I1NWxBRAEGAAgkZLBwAUor6vMgAYwhAI4_gE.png', '', '1');
INSERT INTO `teacher_intro` VALUES ('5', '第五个老师！！', 'asdasd', 'adasdasdasdasd', '/upload/user/1_1524814692.png', '', '1');
INSERT INTO `teacher_intro` VALUES ('6', '第六个老师！！', '第六个老师！！', '第六个老师！！', '/upload/user/1_1524814715.png', '', '1');
