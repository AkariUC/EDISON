<?php

//// 初期設定ファイル ////

//----------------------------------------------------
// デバッグ表示 
// true : デバッグ表示　　　false : デバッグ表示off
//----------------------------------------------------

define("_DEBUG_MODE", true);
//define("_DEBUG_MODE", false);



//----------------------------------------------------
// エラー表示
//----------------------------------------------------

// 開発中
ini_set( "error_reporting", E_ALL );

// 運用中
//ini_set( "error_reporting", E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED );



//----------------------------------------------------
// データベース関連
//----------------------------------------------------

// データベース接続ユーザー名
define("_DB_USER", "sample");

// データベース接続パスワード
define("_DB_PASS", "password");

// データベースホスト名
define("_DB_HOST", "localhost");

// データベース名
define("_DB_NAME", "edison_db");

// データベースの種類
define("_DB_TYPE", "mysql");

// データソースネーム
define("_DSN", _DB_TYPE . ":host=" . _DB_HOST . ";dbname=" . _DB_NAME. ";charset=utf8");



//----------------------------------------------------
// セッション名
//----------------------------------------------------

// 会員用セッション名
define("_MEMBER_SESSNAME", "PHPSESSION_MEMBER");

// 会員用認証情報 保管変数名
define("_MEMBER_AUTHINFO", "userinfo");



//----------------------------------------------------
// ファイル設置ディレクトリ
//----------------------------------------------------

// 関連ファイルを設置するディレクトリ
define( "_PHP_LIBS_DIR", _ROOT_DIR . "../php_libs/");

// クラスファイル
define( "_CLASS_DIR", _PHP_LIBS_DIR . "class/");

// 環境変数 
define( "_SCRIPT_NAME", $_SERVER['SCRIPT_NAME']);



//----------------------------------------------------
// Smarty関連設定
//----------------------------------------------------

//  Smartyのlibsディレクトリ
define( "_SMARTY_LIBS_DIR",         _PHP_LIBS_DIR . "smarty/libs/");

//  Smartyのテンプレートファイルを保存したディレクトリ
define( "_SMARTY_TEMPLATES_DIR",    _PHP_LIBS_DIR . "smarty/templates/");

//  Smartyのコンパイル用ディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_TEMPLATES_C_DIR",  _PHP_LIBS_DIR . "smarty/templates_c/");

//  Smartyの設定ディレクトリ 未使用
define( "_SMARTY_CONFIG_DIR",       _PHP_LIBS_DIR . "smarty/configs/");

//  Smartyのキャッシュディレクトリ Webサーバから書き込めるようにします。、
define( "_SMARTY_CACHE_DIR",        _PHP_LIBS_DIR . "smarty/cache/");



//----------------------------------------------------
// 汎用ライブラリの読み込み
//----------------------------------------------------
// PEARファイル設置ディレクトリ
define( "_PEAR_PATH1", _PHP_LIBS_DIR . "PEAR/");
define( "_PEAR_PATH2", _PHP_LIBS_DIR . "PEAR/Pager/");

// ファイル読み込みディレクトリ
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . _PEAR_PATH1 .PATH_SEPARATOR . _PEAR_PATH2);

// 入力フォーム機能を使用
require_once("HTML/QuickForm2.php");
require_once("HTML/QuickForm2/Renderer.php");

// Smartyテンプレートエンジンを使用
require_once(_SMARTY_LIBS_DIR . "Smarty.class.php");



//----------------------------------------------------
// 自作クラスファイルの読み込み
//----------------------------------------------------
// 読み込みの順番を変えると動作しません。
require_once( _CLASS_DIR      . "BaseController.php");
require_once( _CLASS_DIR      . "BaseModel.php");
require_once( _CLASS_DIR      . "Auth.php");
require_once( _CLASS_DIR      . "MemberController.php");
require_once( _CLASS_DIR      . "MemberModel.php");
require_once( _CLASS_DIR      . "PrememberController.php");
require_once( _CLASS_DIR      . "PrememberModel.php");

?>