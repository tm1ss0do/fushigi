<?php


//追加したクラス
class Sentence{
  public static function set($str){
      $_SESSION['sentence'] .= $str.'</br>';
  }
}


class Scenario{
  //シナリオを取ってきて、$_SESSION['scenario']にいれる。
  public static function set($key){
    global $Screenwriting;
    $_SESSION['scenario'] = $Screenwriting[$key];
    $scenario = $_SESSION['scenario'];
    return $scenario;
  }
  public static function setGrowUp($key){
    if($_SESSION[$key] === 1){
          //植物が1の場合
          $scenario = self::set($key.'1');
        }elseif( $_SESSION[$key] === 2 ){
          $scenario = self::set($key.'2');
        }elseif( $_SESSION[$key] === 3 ){
          $scenario = self::set($key.'3');
        }elseif( $_SESSION[$key] === 4 ){
          $scenario = self::set($key.'4');
        }else{
          $scenario = self::set($key.'5');
        }
      return $scenario;
  }
  public static function setFinal($status){

    $_SESSION['final'] = true;

    if( $_SESSION[$status] >= 3 && $_SESSION[$status] <= 4 ){
          //3回-4回
          $scenario = self::set($status.'Normal');
        }elseif( $_SESSION[$status] === 5 ){
          //5回
          $scenario = self::set($status.'True');
        }else{
          // なんでもないEND
          $scenario = self::set('allNormal');
        }
        return $scenario;
  }

  public static function setChara($scenario){
    //setCharaInfo()と一部getScenario()の処理
    global $characters;
    $_SESSION['character'] = $characters[ $scenario[ $_SESSION['key'] ][0] ];
    $speaker = $_SESSION['character'];
    $_SESSION['charaName'] = $speaker->getName();
    $_SESSION['charaImg'] = $speaker->getImg();
  }
  public static function setSentence($scenario){
    $_SESSION['sentence'] = $scenario[ $_SESSION['key'] ][1];
  }
  public static function setBackImg($scenario){
    $_SESSION['backImg'] = $scenario[ $_SESSION['key'] ][2];
  }
  public static function info($scenario){
    //setScenarioInfo()
    // シナリオから情報を取得
    Text::init();
    Scenario::setChara($scenario);
    Scenario::setSentence($scenario);
    Scenario::setBackImg($scenario);
    //選択肢の表示を消す
    Choice::set("");
    Text::view();
    //jsonでデータを渡す
    echoJson();
    //次に表示スタートする文字が何文字目からか指定
    Text::sent();
  }

}


//-----テキストクラス
class Text{
  //シナリオの中のどのセンテンスを取得するか $_SESSION['key']
  // scenarioInit()の処理
  public static function setKey($key){
    $_SESSION['key'] = $key;
  }
  public static function setTxtS($key){
    $_SESSION['txtS'] = $key;
  }
  public static function setLen($key){
    $_SESSION['txtLen'] = $key;
  }
  public static function init(){
    //setTxtInit()
    self::setKey(0);
    self::setTxtS(0);
  }
  public static function setView($viewText){
    $_SESSION['viewText'] = $viewText;
  }
  public static function view(){
    //viewText()
    $sent = $_SESSION['sentence'];
    $txtS = $_SESSION['txtS'];
    $txtLen = $_SESSION['txtLen'];
    $viewText = mb_substr($sent, $txtS, $txtLen);
    self::setView($viewText);
    return $viewText;
  }
  public static function sent(){
    //textSent()の一部
    $_SESSION['txtS'] += $_SESSION['txtLen'];
  }

}

//-----選択肢クラス
class Choice{
  public static function set($key){
    $_SESSION['choice'] = $key;
  }
  public static function view($key){
    global $choices;
    self::set($choices[$key]);
    //表示用の変数
    $viewChoices = $_SESSION['choice'];
    return $viewChoices;
  }

}
 ?>
