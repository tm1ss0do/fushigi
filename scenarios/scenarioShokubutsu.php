<?php
$scenarioShokubutsu1 = array();
$scenarioShokubutsu2 = array();
$scenarioShokubutsu3 = array();
$scenarioShokubutsu4 = array();
$scenarioShokubutsu5 = array();
//1回目-----------
$scenarioShokubutsu1[] = array( Name::NARR, '水をあげ、日光を当てた。',BgIMG::HEYA);
$scenarioShokubutsu1[] = array( Name::MAIN, '早く大きくなあれ〜',BgIMG::HEYA);
//2回目-----------
$scenarioShokubutsu2[] = array( Name::NARR, '植物はスクスク育っている。',BgIMG::HEYA);
//3回目-----------
$scenarioShokubutsu3[] = array( Name::MAIN, '植物のある生活っていいなぁ。',BgIMG::HEYA);
//4回目-----------
$scenarioShokubutsu4[] = array( Name::MAIN, 'フゥ・・・',BgIMG::HEYA);
$scenarioShokubutsu4[] = array( Name::NARR, '害虫駆除や間引きなどは大変だが、愛着が湧いてくるのもこういうときだと思う。',BgIMG::HEYA);
//5回目-----------
$scenarioShokubutsu5[] = array( Name::MAIN, 'あ！',BgIMG::HEYA);
$scenarioShokubutsu5[] = array( Name::NARR, '花の蕾を見つけた。</br>どんな花を咲かせるのだろう。ワクワクする。',BgIMG::HEYA);
//結果(3回)-----------
$scenarioShokubutsuNormal[] = array( Name::NARR, 'スクスクと育った不思議のタネは、青い花を咲かせた。',BgIMG::AOHANA);
$scenarioShokubutsuNormal[] = array( Name::NARR, '毎年夏になると青い花を咲かせ、庭を華やかに彩る。',BgIMG::AOHANA);
$scenarioShokubutsuNormal[] = array( Name::NARR, 'おばあちゃんの言ったように人間にはならなかったけれど、私たちの日常をいつも優しく見守ってくれている。',BgIMG::AOHANA);
//結果(5回)-----------
$scenarioShokubutsuTrue[] = array( Name::NARR, 'スクスクと育った不思議のタネは、青い花を咲かせ、黄色い実をつけた。</br>熟した黄色の実を食べると、胸がじんわりあたたかくなった。',BgIMG::AOHANA);
$scenarioShokubutsuTrue[] = array( Name::NARR, '10年経った今も、私たち家族を見守ってくれている。',BgIMG::AOHANA);

//まとめ
$scenarioShokubutsu = array();
$scenarioShokubutsu[] = $scenarioShokubutsu1;
$scenarioShokubutsu[] = $scenarioShokubutsu2;
$scenarioShokubutsu[] = $scenarioShokubutsu3;
$scenarioShokubutsu[] = $scenarioShokubutsu4;
$scenarioShokubutsu[] = $scenarioShokubutsu5;
$scenarioShokubutsu[] = $scenarioShokubutsuNormal;
$scenarioShokubutsu[] = $scenarioShokubutsuTrue;
 ?>
