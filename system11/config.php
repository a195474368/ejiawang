<?php

/**

 * Copy Right IJH.CC

 * Each engineer has a duty to keep the code elegant

 * Author shzhrui<anhuike@gmail.com>

 * $Id: config.php 2043 2013-12-07 08:01:31Z youyi $

 */



if(!defined('__DEBUG')){

	define('__DEBUG', false);

}

define('__TIME',	time());

define('__CHARSET', 'UTF-8');

define('__CFG_DIR', dirname(__FILE__).DIRECTORY_SEPARATOR);

define('__IMG_DIR', dirname(__CFG_DIR).DIRECTORY_SEPARATOR.'attachs'.DIRECTORY_SEPARATOR);

define('__TPL_DIR', dirname(__CFG_DIR).DIRECTORY_SEPARATOR.'themes'.DIRECTORY_SEPARATOR);

define('MAGIC_QUOTES_GPC', get_magic_quotes_gpc());

ini_set("display_errors", __DEBUG);

error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);

date_default_timezone_set('Asia/Shanghai');

//date_default_timezone_set('PRC');

header("Content-type: text/html; charset=UTF-8");

class __CFG

{

    CONST DEBUG     = __DEBUG;

    CONST CHARSET   = __CHARSET;

	CONST DIR		= __CORE_DIR;

    CONST GPC 		= MAGIC_QUOTES_GPC;

	CONST TIME 		= __TIME;

	CONST TMPL_DIR  = __TPL_DIR;



	CONST RES_URL = 'http://www.ejiawang.cc/static';

    CONST MYSQL = 'mysql://root:Fineidc@localhost:3306/ejiawang/jh_/UTF8';



	CONST SECRET_KEY = '7fd18e0e0ee5a70bfb3d07181374244f';

	CONST Authorize = '';



	//Cookie

	CONST C_PREFIX	= 'KT-';

	CONST C_DOMAIN	= '';

	CONST C_PATH	= '/';

	CONST C_EXPIRE	= 2592000;

	CONST C_SECURE 	= false; //https

	CONST C_HTTPONLY= true;	 //httponly



	//session

	CONST S_TYPE	= 'database';

	CONST S_STAGE	= '';

	CONST S_NAME	= 'KTSSID';

	CONST S_EXPIRE	= 3600;	

}