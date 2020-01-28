<?php
//---------------------------------
//----------------------------------------
//***
//-----function----------
//****
//--------------------------------------
//セッションを初期化
function sessInit(){
  $_SESSION = array();
  $_SESSION['shokubutsu'] = 0;
  $_SESSION['asobi'] = 0;
  $_SESSION['kintore'] = 0;
  $_SESSION['meisou'] = 0;
  $_SESSION['dokusyo'] = 0;
  $_SESSION['doku'] = 0;
  $_SESSION['ikuseiCount'] = 0;
}

//--------------------------------
//echoするjsonの処理
function echoJson(){
  echo json_encode(array(
    'character' => $_SESSION['character'],
    'sentence' => $_SESSION['sentence'],
    'backImg' => $_SESSION['backImg'],
    'txtS' => $_SESSION['txtS'],
    'txtLen' => $_SESSION['txtLen'],
    'scenario' => $_SESSION['scenario'],
    'viewText' => $_SESSION['viewText'],
    'key' => $_SESSION['key'],
    'choice' => $_SESSION['choice'],
    'charaName' => $_SESSION['charaName'],
    'charaImg' => $_SESSION['charaImg'],
    'gameClear' => $_SESSION['gameClear'],
    'shokubutsu' => $_SESSION['shokubutsu'],
    'asobi' => $_SESSION['asobi'],
    'kintore' => $_SESSION['kintore'],
    'meisou' => $_SESSION['meisou'],
    'dokusyo' => $_SESSION['dokusyo'],
    'doku' => $_SESSION['doku'],
    'ikuseiCount' => $_SESSION['ikuseiCount'],
    'final' => $_SESSION['final'],
    'hushigiHp' => $_SESSION['hushigiHp'],
    'anataHp' => $_SESSION['anataHp'],
    'fightFlg' => $_SESSION['fightFlg'],
    'endName' => $_SESSION['endName'],
  ));
}


 ?>
