<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/12/12
 * Time: 17:47
 */
$ROOT_DIR = dirname(__FILE__);
require_once dirname(__FILE__) . '/core/db/connection_mysql.php';
require_once dirname(__FILE__) . '/structure/banner/domain/index_banner.php';
require_once dirname(__FILE__) . '/structure/banner/dao/index_banner_dao.php';
require_once dirname(__FILE__) . '/core/net/result.php';
require_once dirname(__FILE__) . '/core/net/manager_result.php';
require_once dirname(__FILE__) . '/core/net/error_code.php';
require_once dirname(__FILE__) . '/structure/index_content/domain/index_content.php';
require_once dirname(__FILE__) . '/structure/index_content/dao/index_content_dao.php';
require_once dirname(__FILE__) . '/structure/index_about_us/domain/about_us.php';
require_once dirname(__FILE__) . '/structure/index_about_us/dao/index_about_us_dao.php';
require_once dirname(__FILE__) . '/structure/count/domain/count.php';
require_once dirname(__FILE__) . '/structure/news/domain/news_intro.php';
require_once dirname(__FILE__) . '/structure/news/domain/news_content.php';
require_once dirname(__FILE__) . '/structure/news/dao/news_dao.php';
require_once dirname(__FILE__) . '/structure/news/dao/news_content_dao.php';
require_once dirname(__FILE__) . '/structure/course_introduce/dao/course_type_dao.php';
require_once dirname(__FILE__) . '/structure/course_introduce/domain/course_type.php';
require_once dirname(__FILE__) . '/structure/course_introduce/domain/course_introduce.php';
require_once dirname(__FILE__) . '/structure/course_introduce/domain/course_introduce_content.php';
require_once dirname(__FILE__) . '/structure/course_introduce/dao/course_intro_content_dao.php';
require_once dirname(__FILE__) . '/structure/course_introduce/dao/course_intro_dao.php';

require_once dirname(__FILE__) . '/structure/group/dao/group_dao.php';
require_once dirname(__FILE__) . '/structure/group/domain/group.php';
