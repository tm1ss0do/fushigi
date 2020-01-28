<?php
$scenarioMeisou1 = array();
$scenarioMeisou2 = array();
$scenarioMeisou3 = array();
$scenarioMeisou4 = array();
$scenarioMeisou5 = array();
//1回目-----------
$scenarioMeisou1[] = array( Name::NARR, '数日すると、不思議のタネから芽が出てきた。',BgIMG::HEYA);
$scenarioMeisou1[] = array( Name::MAIN, '植物はアメニモマケズ、カゼニモマケズ・・・',BgIMG::HEYA);
$scenarioMeisou1[] = array( Name::NARR, '凛とした姿を見ていると、私も何かしなければという気になった。',BgIMG::HEYA);
$scenarioMeisou1[] = array( Name::MAIN, '瞑想でもしてみるか・・・',BgIMG::HEYA);

//2回目-----------
$scenarioMeisou2[] = array( Name::NARR, '今日は雨が降っていた。',BgIMG::HEYA);
$scenarioMeisou2[] = array( Name::NARR, 'フシギは雨の日も風の日も凛としている。<>つ/brいうっかり水をやり忘れても、水を与えるとすぐにしゃんとする。',BgIMG::HEYA);
$scenarioMeisou2[] = array( Name::MAIN, '凛としてたくましく、不惑！って感じ。私も見習おう。',BgIMG::HEYA);
$scenarioMeisou2[] = array( Name::NARR, '少し長めに瞑想をした。',BgIMG::HEYA);
//3回目-----------
$scenarioMeisou3[] = array( Name::MAIN, '・・・',BgIMG::HEYA);
$scenarioMeisou3[] = array( Name::MAIN, '・・・・・・・・',BgIMG::HEYA);
$scenarioMeisou3[] = array( Name::MAIN, '・・・・・・・・・・・・・・・・・・・っは！？',BgIMG::HEYA);
$scenarioMeisou3[] = array( Name::MAIN, 'あれ？・・・寝てた？',BgIMG::HEYA);
//4回目-----------
$scenarioMeisou4[] = array( Name::NARR, '最近あまり怒らなくなった気がする。',BgIMG::HEYA);
$scenarioMeisou4[] = array( Name::MAIN, 'これも瞑想のおかげ・・・？',BgIMG::HEYA);
$scenarioMeisou4[] = array( Name::NARR, 'フシギは相変わらずみずみずしく凛と佇んでいる。',BgIMG::HEYA);

//5回目-----------
$scenarioMeisou5[] = array( Name::NARR, 'なんだか心が落ち着いている。',BgIMG::HEYA);
$scenarioMeisou5[] = array( Name::MAIN, '・・・',BgIMG::HEYA);
$scenarioMeisou5[] = array( Name::NARR, '今日もフシギの隣で瞑想することにした。</br>最近では毎朝の日課になっている。',BgIMG::HEYA);
//結果(3回)-----------
$scenarioMeisouNormal[] = array( Name::NARR, 'フシギは綺麗な青い花を咲かせた。',BgIMG::AOHANA);
$scenarioMeisouNormal[] = array( Name::NARR, '人間になることはなかったが、隣にいるとなぜか落ち着いた。',BgIMG::AOHANA);
$scenarioMeisouNormal[] = array( Name::MAIN, '不思議な植物だったなぁ。',BgIMG::AOHANA);
//結果(5回)-----------
$scenarioMeisouTrue[] = array( Name::NARR, '不思議のタネはぐんぐん大きくなったので、よく日の当たる場所へ植え直した。',BgIMG::SORA);
$scenarioMeisouTrue[] = array( Name::NARR, 'もう私の世話はいらないだろう。',BgIMG::SORA);
$scenarioMeisouTrue[] = array( Name::NARR, '私はそれから俗世を捨て、さらに修行に励むため旅に出た。',BgIMG::SENRO);
$scenarioMeisouTrue[] = array( Name::NARR, 'もうこの地へ帰ってくることはないだろう。',BgIMG::SENRO);


//まとめ
$scenarioMeisou = array();
$scenarioMeisou[] = $scenarioMeisou1;
$scenarioMeisou[] = $scenarioMeisou2;
$scenarioMeisou[] = $scenarioMeisou3;
$scenarioMeisou[] = $scenarioMeisou4;
$scenarioMeisou[] = $scenarioMeisou5;
$scenarioMeisou[] = $scenarioMeisouNormal;
$scenarioMeisou[] = $scenarioMeisouTrue;
 ?>
