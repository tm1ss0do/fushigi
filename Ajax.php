<?php
//ここは変数からセッションへ定数を渡すだけの処理

ini_set('log_errors','on');  //ログを取るか
ini_set('error_log','php.log');  //ログの出力ファイルを指定
session_start(); //セッション使う

//----------------------------------------
//クラス
//---------------------------------

class Character{
  protected $name;
  protected $img;
  public function __construct($name, $img){
    $this->name = $name;
    $this->img = $img;
  }
  public function getName(){
    return $this->name;
  }
  public function getImg(){
    return $this->img;
  }
  public function setImg($img){
    $this->img = $img;
  }
}

class Warrior extends Character{
  protected $hp;
  protected $attackMin;
  protected $attackMax;
  public function __construct($name, $img, $hp, $attackMin, $attackMax){
    parent::__construct($name, $img);
    $this->hp = $hp;
    $this->attackMin = $attackMin;
    $this->attackMax = $attackMax;
  }
  public function getHp(){
    return $this->hp;
  }
  public function setHp($str){
    $this->hp = $str;
  }
  public function getAttackMin(){
    return $this->attackMin;
  }
  public function getAttackMax(){
    return $this->attackMax;
  }
  public function setAttack($target){
    $atMin = $this->getAttackMin();
    $atMax = $this->getAttackMax();
    $attackPt = ceil( mt_rand($atMin, $atMax) );
    $target->setHp( $target->getHp() - $attackPt );
    return $attackPt;
  }
  public function attack($target){
    $attackPt = $this->setAttack($target);
    //セリフを表示。
    Sentence::set(
      $this->getName().'は攻撃した。'.$target->getName().'に'
    .$attackPt.'ポイントのダメージっぽい！'
    );
  }
  public function still($target){
    $attackPt = $this->setAttack($target);
    //セリフを表示。
    Sentence::set(
      $target->getName().'は、呆然として動けない！</br>'.
      $this->getName().'はツタを伸ばして攻撃した！'.$target->getName().'に'
    .$attackPt.'ポイントのダメージっぽい！'
    );
  }
}

require_once('class-common.php');


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

$viewText = Text::view();

  if( !empty($viewText) ){
    //表示するテキストを取得
    $viewText = Text::view();
    //jsonでデータを渡す
    echoJson();
    //次に表示スタートする文字が何文字目からか指定
    Text::sent();

  }else{
    //ーーーーーーこのセンテンスの文字を全て表示した場合ーーーーーーー
    //次のセンテンスを取得
    $_SESSION['key'] += 1;
    $key = $_SESSION['key'];
    $scenario = $_SESSION['scenario'];
    $count = count($scenario); // シナリオに入っているセンテンスの数を数える
    if( $key < $count ){
      // まだ表示できるセンテンスがある場合
      //0文字目から表示。
      Text::setTxtS(0);
      // シナリオの中からキャラクターとセンテンスを取得。セッションへセット。
      Scenario::setChara($scenario);
      Scenario::setSentence($scenario);
      Scenario::setBackImg($scenario);
      //表示するテキストを取得
      $viewText = Text::view();
      //jsonでデータを渡す
      echoJson();
      //次に表示スタートする文字が何文字目からか指定
      // Text::sent();
      $_SESSION['txtS'] += $_SESSION['txtLen'];

    }else{
      //ーーーーーーシナリオの文字を全て表示し終わった場合ーーーーーーー
      //次のセンテンスがなかった場合。このシナリオは終了。
      //ーーーーーー選択肢によってシナリオを変化させるーーーーーーー
      if( !empty($_POST) ){

        if(!empty($_POST['choice_btn'])) $choice_btn = $_POST['choice_btn'];
        if(!empty($_SESSION['fightFlg'])) $fightFlg = $_SESSION['fightFlg'];

        //ーーーーーー選択肢の表示を消すーーーーーーー
        Choice::set("");

        if( $fightFlg ){
          //ーーーーーー戦闘の選択肢分岐ーーーーーーー
          $_SESSION['scenario'] = array();

          $_SESSION['hushigiHp'] = $_SESSION['hushigi']->getHp();
          $_SESSION['anataHp'] = $_SESSION['anata']->getHp();

                if( $choice_btn === "attack" ){
                      //攻撃した場合
                        if($_SESSION['hushigiHp'] > 0 && $_SESSION['anataHp'] > 0){

                            $_SESSION['sentence'] = "";
                            //植物へ攻撃する。植物のHPを減らす。
                            $_SESSION['anata']->attack($_SESSION['hushigi']);
                            //植物の攻撃により負傷する。「あなた」のHPを減らす。
                            $_SESSION['hushigi']->attack($_SESSION['anata']);

                          // シナリオの一番初めのセンテンスから始める
                          Text::init();
                          //ーーーーーー選択肢の表示を消すーーーーーーー
                          Choice::set("");
                          //次の開始位置を指定してテキスト表示
                          $viewText = Text::view();
                          //jsonでデータを渡す
                          echoJson();
                          //次に表示スタートする文字が何文字目からか指定
                          Text::sent();

                          //------------------------------------------------


                        }elseif($_SESSION['hushigiHp'] <= 0 ){
                            //フシギを倒した場合
                            $_SESSION['fightFlg'] = false;
                            $_SESSION['final'] = true;
                            $_SESSION['endName'] = EndName::KILL;
                            $scenario = Scenario::set('scenarioKill');
                            Scenario::info($scenario);

                        }elseif($_SESSION['anataHp'] <= 0 ){
                            //「あなた」が倒された場合
                            $_SESSION['fightFlg'] = false;
                            $_SESSION['final'] = true;
                            $_SESSION['endName'] = EndName::DEATH;
                            $scenario = Scenario::set('scenarioDeath');
                            Scenario::info($scenario);

                        }


                }elseif( $choice_btn === "stillness" ){

                      //攻撃しなかった場合

                      if($_SESSION['hushigiHp'] > 0 && $_SESSION['anataHp'] > 0){
                        //あなたのHPも、植物のHPも０でない場合
                        $_SESSION['sentence'] = "";
                        //植物の攻撃により負傷する。「あなた」のHPを減らす。
                        $_SESSION['hushigi']->still($_SESSION['anata']);

                        //--------テキスト送りのための準備----------------
                        //シナリオの一番初めのセンテンスから始める
                        Text::init();
                        //ーーーーーー選択肢の表示を消すーーーーーーー
                        $_SESSION['choice'] = '';
                        //ーーーーーー表示するテキストをセッションへ入れるーーーーーーー
                        //次の開始位置を指定してテキスト表示
                        $viewText = Text::view();
                        //jsonでデータを渡す
                        echoJson();
                        //次に表示スタートする文字が何文字目からか指定
                        Text::sent();

                        //------------------------------------------------


                      }elseif($_SESSION['hushigiHp'] <= 0 ){
                          //フシギを倒した場合
                          //ゲームオーバーシナリオ１を出す
                          $_SESSION['fightFlg'] = false;
                          $_SESSION['final'] = true;
                          $_SESSION['endName'] = EndName::KILL;
                          $scenario = Scenario::set('scenarioKill');
                          Scenario::info($scenario);


                      }elseif($_SESSION['anataHp'] <= 0 ){
                          //「あなた」が倒された場合
                          //ゲームオーバーシナリオ２を出す
                          $_SESSION['fightFlg'] = false;
                          $_SESSION['final'] = true;
                          $_SESSION['endName'] = EndName::DEATH;
                          $scenario = Scenario::set('scenarioDeath');
                          Scenario::info($scenario);


                      }

                }

        }else{



                  //ーーーーーー育成の選択肢分岐ーーーーーーー
                  if( $choice_btn === "mizu" ){
                      //ーーーー表示するシナリオを指定ーーーー
                      //植物のボタンが押された回数
                      $_SESSION['shokubutsu']++;
                      //育成回数
                      $_SESSION['ikuseiCount']++;
                      //選択肢に応じてシナリオを取得
                      $scenario = Scenario::setGrowUp('shokubutsu');
                      Scenario::info($scenario);


                  }elseif( $choice_btn === "asobi" ){
                    //ーーーー表示するシナリオを指定ーーーー
                    //ボタンが押された回数
                    $_SESSION['asobi']++;
                    //育成回数
                    $_SESSION['ikuseiCount']++;
                    //選択肢に応じてシナリオを取得
                    $scenario = Scenario::setGrowUp('asobi');
                    Scenario::info($scenario);


                  }elseif( $choice_btn === "kintore" ){
                    //ーーーー表示するシナリオを指定ーーーー
                    //ボタンが押された回数
                    $_SESSION['kintore']++;
                    //育成回数
                    $_SESSION['ikuseiCount']++;
                    //選択肢に応じてシナリオを取得
                    $scenario = Scenario::setGrowUp('kintore');
                    Scenario::info($scenario);

                  }elseif( $choice_btn === "meisou" ){
                    //ーーーー表示するシナリオを指定ーーーー
                    //ボタンが押された回数
                    $_SESSION['meisou']++;
                    //育成回数
                    $_SESSION['ikuseiCount']++;
                    //選択肢に応じてシナリオを取得
                    $scenario = Scenario::setGrowUp('meisou');
                    Scenario::info($scenario);


                  }elseif( $choice_btn === "dokusyo" ){
                    //ーーーー表示するシナリオを指定ーーーー
                    //ボタンが押された回数
                    $_SESSION['dokusyo']++;
                    //育成回数
                    $_SESSION['ikuseiCount']++;
                    //選択肢に応じてシナリオを取得
                    $scenario = Scenario::setGrowUp('dokusyo');
                    Scenario::info($scenario);


                  }elseif( $choice_btn === "doku" ){
                    //ーーーー表示するシナリオを指定ーーーー
                    //ボタンが押された回数
                    $_SESSION['doku']++;
                    //育成回数
                    $_SESSION['ikuseiCount']++;
                    //選択肢に応じてシナリオを取得
                    $scenario = Scenario::setGrowUp('doku');
                    Scenario::info($scenario);

                  }
        }

      }else{
        //------選択肢がポストされていなかった場合

        if( $_SESSION['final'] ){
          //------ゲームオーバーのセッションが入っていた場合
          //ゲームオーバーにする
          $_SESSION['gameClear'] = true;
          echoJson();
        }elseif($_SESSION['scenario'] === $Screenwriting['dokuTrue']){
          //戦闘シーンへ入る用のフラグ
          $_SESSION['fightFlg'] = true;
          $_SESSION['scenario'] = array();
          //表示用の変数へ入れる。
          // $viewChoices = setChoice('fight');
          $viewChoices = Choice::view('fight');
          //Warriorインスタンスから戦闘に参加するキャラクターを取得。
          $_SESSION['anata'] = $warriors[0];
          $_SESSION['hushigi'] = $warriors[1];
          //各HP
          $_SESSION['hushigiHp'] = $_SESSION['hushigi']->getHp();
          $_SESSION['anataHp'] = $_SESSION['anata']->getHp();
          //jsonでデータを渡す
          echoJson();
        }elseif( $_SESSION['fightFlg'] ){
          $viewChoices = Choice::view('fight');
          //jsonでデータを渡す
          echoJson();
        }else{

            if( $_SESSION['ikuseiCount'] === 5){
              //育成日数が6日目だった場合------------
              //最終画面へ移行する
              //どの結果を出すか場合分けする
              if($_SESSION['shokubutsu']){
                // 植物END-----------------------
                $scenario = Scenario::setFinal('shokubutsu');
                $_SESSION['endName'] = EndName::SHOKUBUTSU;
                Scenario::info($scenario);

              }elseif($_SESSION['asobi']){
                // 遊びEND-----------------------
                $scenario = Scenario::setFinal('asobi');
                $_SESSION['endName'] = EndName::ASOBI;
                Scenario::info($scenario);

              }elseif($_SESSION['kintore']){
                // 筋トレEND-----------------------
                $scenario = Scenario::setFinal('kintore');
                $_SESSION['endName'] = EndName::KINTORE;
                Scenario::info($scenario);

              }elseif($_SESSION['meisou']){
                // 精神END-----------------------
                $scenario = Scenario::setFinal('meisou');
                $_SESSION['endName'] = EndName::MEISOU;
                Scenario::info($scenario);


              }elseif($_SESSION['dokusyo']){
                // 知識END-----------------------
                $scenario = Scenario::setFinal('dokusyo');
                $_SESSION['endName'] = EndName::DOKUSYO;
                Scenario::info($scenario);


              }elseif($_SESSION['doku']){
                // 毒を5回選択した場合は、最終シナリオではなく戦闘へ移行
                $scenario = Scenario::setFinal('doku');
                $_SESSION['final'] = false;
                Scenario::info($scenario);

              }

          }else{
              //表示用の変数へ入れる。
              $viewChoices = Choice::view('ikusei');

              //jsonでデータを渡す
              echoJson();
              $_SESSION['choice'] = array();
          }

        }

      }

    }

  }



 ?>
