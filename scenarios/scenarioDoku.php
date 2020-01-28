<?php
$scenarioDoku1 = array();
$scenarioDoku2 = array();
$scenarioDoku3 = array();
$scenarioDoku4 = array();
$scenarioDoku5 = array();
//1回目-----------
$scenarioDoku1[] = array( Name::NARR, '今日は仕事で色々あった。',BgIMG::HEYA);
$scenarioDoku1[] = array( Name::MAIN, '疲れた・・・',BgIMG::HEYA);
$scenarioDoku1[] = array( Name::NARR, 'とりあえず不思議に水をやった。',BgIMG::HEYA);
$scenarioDoku1[] = array( Name::NARR, 'もう嫌だなと思いながら眠りについた。',BgIMG::HEYA);

//2回目-----------
$scenarioDoku2[] = array( Name::NARR, '今日は仕事でめちゃくちゃな失敗を犯してしまった。',BgIMG::HEYA);
$scenarioDoku2[] = array( Name::NARR, '首にならないだけまし。だが形見が狭い・・・。',BgIMG::HEYA);
$scenarioDoku2[] = array( Name::NARR, '水やりを忘れたことに、朝になってから気がついた。',BgIMG::HEYA);
$scenarioDoku2[] = array( Name::MAIN, 'はぁ・・・',BgIMG::HEYA);
$scenarioDoku2[] = array( Name::NARR, '私はなんてだめな奴なんだろう。',BgIMG::HEYA);
//3回目-----------
$scenarioDoku3[] = array( Name::NARR, '今日も朝が来た。朝日を浴びて気持ちよさそうにしている植物を見るとムカついて仕方がない。</br>植物に八つ当たりなんて馬鹿馬鹿しいと思いながら、ぶちぶちと葉っぱをむしってやった。</br>スッキリはしなかった。',BgIMG::HEYA);
//4回目-----------
$scenarioDoku4[] = array( Name::NARR, 'フシギのことをすっかり忘れていた。</br>カーテンの裏に隠れていたフシギをそっと見ると、ヘニャヘニャにひなびている。',BgIMG::HEYA);
$scenarioDoku4[] = array( Name::MAIN, 'あー・・・',BgIMG::HEYA);
$scenarioDoku4[] = array( Name::NARR, 'もういいや。明日ゴミの日だっけ。捨てとこう。',BgIMG::HEYA);

//5回目-----------
$scenarioDoku5[] = array( Name::NARR, '朝起きると、昨日まで10cmほどだった不思議のタネは一晩で大きく成長し、ツタを伸ばして窓を覆い尽くしていた。',BgIMG::KURAIHEYA);
$scenarioDoku5[] = array( Name::MAIN, 'うわ、何これ・・・',BgIMG::KURAIHEYA);
$scenarioDoku5[] = array( Name::NARR, '気味が悪くなり、ぶちぶちと窓からツタを引き剥がしてゴミ袋へ詰めようとするが、ゴミ出しの時間に間に合いそうにない。',BgIMG::KURAIHEYA);
$scenarioDoku5[] = array( Name::MAIN, 'くそっ',BgIMG::KURAIHEYA);
$scenarioDoku5[] = array( Name::NARR, '会社から帰ったら庭で燃やそう。</br>そう決めて、重い足を引きずりながら会社へと向かった。',BgIMG::KURAIHEYA);
//結果(3回)-----------
$scenarioDokuNormal[] = array( Name::NARR, '不思議のタネはそのまま大きくならず、枯れてしまった。',BgIMG::KAREHA);
$scenarioDokuNormal[] = array( Name::NARR, 'なんとなくおばあちゃんが言っていた言葉を思い出す。',BgIMG::KAREHA);
$scenarioDokuNormal[] = array( Name::GMOTHER, 'まるでその人を写す鏡のように成長するのよ。',BgIMG::KAREHA);
$scenarioDokuNormal[] = array( Name::NARR, '植物には人間の言葉がわかると言うけれど、本当なのかも知れない。',BgIMG::KAREHA);
//結果(5回)-----------
$scenarioDokuTrue[] = array( Name::NARR, '家に帰ると、ツタは真っ黒に変色し、しかし不気味なほど逞しくグネグネと部屋中に伸びていた。',BgIMG::KURAIHEYA);
$scenarioDokuTrue[] = array( Name::MAIN, 'うわ、気持ちわる・・・',BgIMG::KURAIHEYA);
$scenarioDokuTrue[] = array( Name::NARR, 'と、その時！',BgIMG::KURAIHEYA);
$scenarioDokuTrue[] = array( Name::MAIN, 'うわぁ！',BgIMG::KURAIHEYA);
$scenarioDokuTrue[] = array( Name::NARR, 'フシギが黒いツタを伸ばして襲いかかってきた！',BgIMG::KURAIHEYA);

//まとめ
$scenarioDoku = array();
$scenarioDoku[] = $scenarioDoku1;
$scenarioDoku[] = $scenarioDoku2;
$scenarioDoku[] = $scenarioDoku3;
$scenarioDoku[] = $scenarioDoku4;
$scenarioDoku[] = $scenarioDoku5;
$scenarioDoku[] = $scenarioDokuNormal;
$scenarioDoku[] = $scenarioDokuTrue;
 ?>
