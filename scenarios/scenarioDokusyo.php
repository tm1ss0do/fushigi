<?php
$scenarioDokusyo1 = array();
$scenarioDokusyo2 = array();
$scenarioDokusyo3 = array();
$scenarioDokusyo4 = array();
$scenarioDokusyo5 = array();
//1回目-----------
$scenarioDokusyo1[] = array( Name::MAIN, 'そろそろ寝る時間だけど、植物は声が聞こえてるっていうし、本でも読んでみようかな。',BgIMG::HEYA);
$scenarioDokusyo1[] = array( Name::MAIN, '「こんな夢を見た。</br>腕組みをして枕元に坐っていると、仰向に寝た女が、静かな声でもう死にますと云う。</br>女は長い髪を枕に敷いて、輪郭りんかくの柔やわらかな瓜実うりざね顔がおをその中に横たえている。</br>真白な頬の底に温かい血の色がほどよく差して、唇くちびるの色は無論赤い。とうてい死にそうには見えない。</br>しかし女は静かな声で、もう死にますと判然はっきり云った。自分も確たしかにこれは死ぬなと思った。」',BgIMG::DOKUSYO);
$scenarioDokusyo1[] = array( Name::MAIN, '・・・何やってるんだろう。',BgIMG::HEYA);
//2回目-----------
$scenarioDokusyo2[] = array( Name::MAIN, '今日は何を読もうかな。窓辺で植物と言えば・・・',BgIMG::HEYA);
$scenarioDokusyo2[] = array( Name::MAIN, '「ワシントン・スクエア西にある小地区は、 道路が狂ったように入り組んでおり、 「プレース」と呼ばれる区域に小さく分かれておりました。この「プレース」は不可思議な角度と曲線を描いており、 一、二回自分自身と交差している通りがあるほどでした。 </br>かつて、ある画家は、この通りが貴重な可能性を持っていることを発見しました。 」',BgIMG::DOKUSYO);
$scenarioDokusyo2[] = array( Name::MAIN, '・・・',BgIMG::HEYA);
//3回目-----------
$scenarioDokusyo3[] = array( Name::MAIN, '今日は素敵な星空だね。</br>銀河鉄道の夜って感じ。',BgIMG::HEYA);
$scenarioDokusyo3[] = array( Name::MAIN, '「「ではみなさんは、そういうふうに川だと云いわれたり、乳の流れたあとだと云われたりしていたこのぼんやりと白いものがほんとうは何かご承知ですか。」</br>先生は、黒板に吊つるした大きな黒い星座の図の、上から下へ白くけぶった銀河帯のようなところを指さしながら、みんなに問といをかけました。</br>カムパネルラが手をあげました。」',BgIMG::DOKUSYO);
//4回目-----------
$scenarioDokusyo4[] = array( Name::MAIN, '今日は古典に挑戦してみよう。',BgIMG::HEYA);
$scenarioDokusyo4[] = array( Name::MAIN, '「どの天皇様の御代みよであったか、女御にょごとか更衣こういとかいわれる後宮こうきゅうがおおぜいいた中に、最上の貴族出身ではないが深い御愛寵あいちょうを得ている人があった。</br>最初から自分こそはという自信と、親兄弟の勢力に恃たのむ所があって宮中にはいった女御たちからは失敬な女としてねたまれた。</br>その人と同等、もしくはそれより地位の低い更衣たちはまして嫉妬しっとの焔ほのおを燃やさないわけもなかった。・・・」',BgIMG::DOKUSYO);
//5回目-----------
$scenarioDokusyo5[] = array( Name::MAIN, 'この不思議のタネの隣で本を読むのが日課になってきた。',BgIMG::HEYA);
$scenarioDokusyo5[] = array( Name::MAIN, '今日は何を読もうか。',BgIMG::DOKUSYO);
//結果(3回)-----------
$scenarioDokusyoNormal[] = array( Name::NARR, 'フシギは相変わらず窓辺に佇んでいて、綺麗な青い花を咲かせた。',BgIMG::AOHANA);
$scenarioDokusyoNormal[] = array( Name::NARR, '人間になることはなかったが、隣にいるとなぜか穏やかな気持ちになれた。',BgIMG::AOHANA);
$scenarioDokusyoNormal[] = array( Name::NARR, '不思議な植物だったなぁ。',BgIMG::AOHANA);
//結果(5回)-----------
$scenarioDokusyoTrue[] = array( Name::NARR, '不思議のタネはぐんぐん大きくなったので、よく日の当たる場所へ植え直した。',BgIMG::SORA);
$scenarioDokusyoTrue[] = array( Name::MAIN, 'もう私の世話はいらないだろう。',BgIMG::SORA);
$scenarioDokusyoTrue[] = array( Name::NARR, '私はそれから長い長い旅に出た。',BgIMG::SENRO);
$scenarioDokusyoTrue[] = array( Name::NARR, '書を捨てよ町へ出よう',BgIMG::SENRO);

//まとめ
$scenarioDokusyo = array();
$scenarioDokusyo[] = $scenarioDokusyo1;
$scenarioDokusyo[] = $scenarioDokusyo2;
$scenarioDokusyo[] = $scenarioDokusyo3;
$scenarioDokusyo[] = $scenarioDokusyo4;
$scenarioDokusyo[] = $scenarioDokusyo5;
$scenarioDokusyo[] = $scenarioDokusyoNormal;
$scenarioDokusyo[] = $scenarioDokusyoTrue;
 ?>
