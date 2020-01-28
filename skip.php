<?php
//ここは変数からセッションへ定数を渡すだけの処理
//データの処理は、app.jsのthen以降で実行

ini_set('log_errors','on');  //ログを取るか
ini_set('error_log','php.log');  //ログの出力ファイルを指定
session_start(); //セッション使う

//----------------------------------------
//クラス
//---------------------------------
require_once('class_data.php');

//----------------------------------------
//クラス定数
//---------------------------------
require('classConst.php');
//----------------------------------------
//***
//インスタンス
//****
//---------------------------------
require('characters.php');
require('warriors.php');
//----------------------------------------
//***
//-----scenario----------
//****
require('scenarios.php');
//----------------------------------------
//***
//-----選択肢----------
//****
require('choices.php');
//----------------------------------------
//***
//-----function----------
//****
require('function.php');
//---------------------------------

//------------------------------------------------------------

$scenario = $_SESSION['scenario'];
$count = count($scenario); // シナリオに入っているセンテンスの数を数える

  $_SESSION['key'] = $count + 1;
  $_SESSION['sentence'] = "どうしよう";
  $_SESSION['backImg'] = BgIMG::HEYA;
  $_SESSION['charaImg'] = BgIMG::MAIN;
  //表示用の変数へ入れる。
  // $viewChoices = setChoice('ikusei');
  $viewChoices = Choice::view('ikusei');
  //jsonでデータを渡す
  echoJson();
  $_SESSION['choice'] = array();


 ?>
