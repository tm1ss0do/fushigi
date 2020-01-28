<?php

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
//-----インスタンス-----
//****
//キャラクター
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

//ーーーーーーーーーーーーー
//POSTされていた場合の処理
//ーーーーーーーーーーーーー

if(!empty($_POST)){

  if(!empty($_POST['start'])) $start = $_POST['start'];

  if( !empty($start) ){
    //スタートボタンが押されていた場合
    //セッションをリセット。初期状態へ戻す。
    sessInit();
    //ーーーーー表示するシナリオを指定ーーーーーーーー
    //はじめに表示する脚本（第一章）をセッション$_SESSION['scenario']へ挿入
    $scenario = Scenario::set('prologue');
    //ーーーーーシナリオから情報を取得ーーーーーーーー
    //指定したシナリオのキーが"0"（一番初め）の文章（キャラクターとセリフが入っている）を取得する
    //キャラクターとセンテンスを取得。セッションへセット。
    Text::init();
    $viewText = Text::view();

    Scenario::setChara($scenario);

    //ーーーーーー何文字取得するかーーーーーーー
    $_SESSION['txtLen'] = 70;
    echoJson();
  }


}





 ?>