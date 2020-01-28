<?php

//***
//-----選択肢----------
//****
//---------------------------------
//選択肢１
$choicesIkusei =
array(
  'mizu' => '水をあげる',
  'asobi' => '遊ぶ',
  'kintore' => '筋トレする',
  'meisou' => '瞑想する',
  'dokusyo' => '読書する',
  'doku' => '愚痴をこぼす'
);
//----------------------------------------
//選択肢２
$choicesFight =
array(
  'attack' => '攻撃する',
  'stillness' => '攻撃しない'
);
//----------------------------------------
//選択肢を統合したモノ
$choices = array();
$choices['ikusei'] = $choicesIkusei;
$choices['fight'] = $choicesFight;


 ?>
