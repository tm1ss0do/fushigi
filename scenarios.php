<?php
//----------------------------------------
//初めのシナリオ
require('scenarios/scenarioPrologue.php');

//----------------------------------------
//植物のシナリオ
require('scenarios/scenarioShokubutsu.php');
//----------------------------------------
//遊びのシナリオ
require('scenarios/scenarioAsobi.php');
//----------------------------------------
//筋肉のシナリオ
require('scenarios/scenarioKintore.php');
//----------------------------------------
//精神のシナリオ
require('scenarios/scenarioMeisou.php');
//----------------------------------------
//知識のシナリオ
require('scenarios/scenarioDokusyo.php');
//----------------------------------------
//無のシナリオ
require('scenarios/scenarioDoku.php');

//----------------------------------------
//ノーマルエンド(花が咲くシナリオ)
require('scenarios/allNormal.php');

//----------------------------------------
//戦闘シナリオ
require('scenarios/scenarioKill.php');
require('scenarios/scenarioDeath.php');

//----------------------------------------
//シナリオを統合した脚本
$Screenwriting = array();
//----------------------------------------
//プロローグ
$Screenwriting['prologue'] = $scenarioPro;
//----------------------------------------
//戦闘シナリオ
//殺すエンド
$Screenwriting['scenarioKill'] = $scenarioKill;
//殺されるエンド
$Screenwriting['scenarioDeath'] = $scenarioDeath;
//----------------------------------------
//全ての選択が2回以下だった時
$Screenwriting['allNormal'] = $allNormal;
//植物----------------------------------------
$Screenwriting['shokubutsu1'] = $scenarioShokubutsu[0];
$Screenwriting['shokubutsu2'] = $scenarioShokubutsu[1];
$Screenwriting['shokubutsu3'] = $scenarioShokubutsu[2];
$Screenwriting['shokubutsu4'] = $scenarioShokubutsu[3];
$Screenwriting['shokubutsu5'] = $scenarioShokubutsu[4];
$Screenwriting['shokubutsuNormal'] = $scenarioShokubutsu[5];
$Screenwriting['shokubutsuTrue'] = $scenarioShokubutsu[6];
//遊び----------------------------------------
$Screenwriting['asobi1'] = $scenarioAsobi[0];
$Screenwriting['asobi2'] = $scenarioAsobi[1];
$Screenwriting['asobi3'] = $scenarioAsobi[2];
$Screenwriting['asobi4'] = $scenarioAsobi[3];
$Screenwriting['asobi5'] = $scenarioAsobi[4];
$Screenwriting['asobiNormal'] = $scenarioAsobi[5];
$Screenwriting['asobiTrue'] = $scenarioAsobi[6];
//筋肉----------------------------------------
$Screenwriting['kintore1'] = $scenarioKintore[0];
$Screenwriting['kintore2'] = $scenarioKintore[1];
$Screenwriting['kintore3'] = $scenarioKintore[2];
$Screenwriting['kintore4'] = $scenarioKintore[3];
$Screenwriting['kintore5'] = $scenarioKintore[4];
$Screenwriting['kintoreNormal'] = $scenarioKintore[5];
$Screenwriting['kintoreTrue'] = $scenarioKintore[6];
//精神----------------------------------------
$Screenwriting['meisou1'] = $scenarioMeisou[0];
$Screenwriting['meisou2'] = $scenarioMeisou[1];
$Screenwriting['meisou3'] = $scenarioMeisou[2];
$Screenwriting['meisou4'] = $scenarioMeisou[3];
$Screenwriting['meisou5'] = $scenarioMeisou[4];
$Screenwriting['meisouNormal'] = $scenarioMeisou[5];
$Screenwriting['meisouTrue'] = $scenarioMeisou[6];
//知識----------------------------------------
$Screenwriting['dokusyo1'] = $scenarioDokusyo[0];
$Screenwriting['dokusyo2'] = $scenarioDokusyo[1];
$Screenwriting['dokusyo3'] = $scenarioDokusyo[2];
$Screenwriting['dokusyo4'] = $scenarioDokusyo[3];
$Screenwriting['dokusyo5'] = $scenarioDokusyo[4];
$Screenwriting['dokusyoNormal'] = $scenarioDokusyo[5];
$Screenwriting['dokusyoTrue'] = $scenarioDokusyo[6];
//毒---------------------------------------
$Screenwriting['doku1'] = $scenarioDoku[0];
$Screenwriting['doku2'] = $scenarioDoku[1];
$Screenwriting['doku3'] = $scenarioDoku[2];
$Screenwriting['doku4'] = $scenarioDoku[3];
$Screenwriting['doku5'] = $scenarioDoku[4];
$Screenwriting['dokuNormal'] = $scenarioDoku[5];
$Screenwriting['dokuTrue'] = $scenarioDoku[6];

 ?>
