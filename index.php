
 <!DOCTYPE html>
 <html lang="ja">

   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1">
     <title>フシギのタネ</title>
     <link rel="stylesheet" type="text/css" href="dist/css/app.css">
     <link href="https://fonts.googleapis.com/css?family=Kosugi|Noto+Sans+JP&display=swap" rel="stylesheet">
   </head>

   <body>

     <!------------------------->
     <!-- メインコンテンツ -->
     <!------------------------->
     <div id="main" class="flex">

         <!------------------------->
         <!-- game Start -->
         <!------------------------->
         <section id="start" class="c-game-panel js-start-wrap flex">

           <h3 class="p-game-title" >不思議の種</h3>

           <form class="c-start-form" action="" method="post">
             <input class="c-start-form__btn js-start-btn" type="submit" name="start" value="そだてる">
           </form>

         </section>


         <!------------------------->

           <!------------------------->
           <!-- game Clear -->
           <!------------------------->
           <div id="clear" class="p-clear-wrap js-gameClear hide">
             <div class="p-clear-wrap__contents flex">
               <h1 class="p-clear-wrap__end-name js-end-name"></h1>
               <h2 class="p-clear-wrap__msg-l">THANK YOU FOR PLAYING!!</h2>
               <!-- <p>結果はツイートできます</p> -->
               <p class="p-clear-wrap__msg-m">もう一度初めからプレイする？</p>
               <form class="c-start-form" action="" method="post">
                 <input class="c-start-form__btn" type="submit" name="start" value="retry">
               </form>
             </div>
           </div>
           <!------------------------->


           <section id="playing" class="flex js-play-wrap js-msg-first">


             <!------------------------->
             <!-- プレイ画面 -->
             <!------------------------->


             <div id="play-basic" class="p-play-wrap flex">
               <div class="p-play-wrap__skip">
                 <h3 class="p-play-wrap__skip-btn js-skip-btn hide">SKIP>>></h3>
               </div>
               <div class="p-play-wrap__chara-img-box">
                 <img class="p-play-wrap__chara-img js-chara-img" src="" alt="">
               </div>
               <div class="p-play-wrap__message-panel js-message-panel">
                  <p class="p-play-wrap__name-title js-name-title">
                    <span class="p-play-wrap__name js-chara-name"></span>
                  </p>
                  <div class="p-play-wrap__sentence-box">
                    <p class="p-play-wrap__sentence js-scenario-sentence"></p>
                  </div>
               </div>

             </div>


             <!------------------------->
             <!-- 選択肢 -->
             <!------------------------->

             <div id="play-choice" class="c-choice-wrap js-choice-panel hide flex">
               <form class="c-choice-wrap__form flex" action="" method="post">
                 <ul class="c-choice-wrap__list js-choice-list">
                   <li class="c-choice-wrap__item js-choice-item hide">
                     <input class="c-choice-wrap__btn js-choice-item1 js-choice-btn" type="submit" name="" value="">
                   </li>
                   <li class="c-choice-wrap__item js-choice-item hide">
                     <input class="c-choice-wrap__btn js-choice-item2 js-choice-btn" type="submit" name="" value="">
                   </li>
                   <li class="c-choice-wrap__item js-choice-item hide">
                     <input class="c-choice-wrap__btn js-choice-item3 js-choice-btn" type="submit" name="" value="">
                   </li>
                   <li class="c-choice-wrap__item js-choice-item hide">
                     <input class="c-choice-wrap__btn js-choice-item4 js-choice-btn" type="submit" name="" value="">
                   </li>
                   <li class="c-choice-wrap__item js-choice-item hide">
                     <input class="c-choice-wrap__btn js-choice-item5 js-choice-btn" type="submit" name="" value="">
                   </li>
                   <li class="c-choice-wrap__item js-choice-item hide">
                     <input class="c-choice-wrap__btn js-choice-item6 js-choice-btn" type="submit" name="" value="">
                   </li>
                 </ul>
               </form>
             </div>

           </section>

           <!------------------------->

     </div>


     <footer id="footer">
       <section class="p-footer-contents">

         <div class="p-footer-contents__credit">
           <h3 class="p-footer-contents__title" >credit</h3>
           <ul class="p-footer-contents__list">
             <a class="p-footer-contents__item-link" href="http://www.vita-chi.net/sozai1.htm">
               <li class="p-footer-contents__item">キャラクター画像・ゲーム素材：びたちー素材館</li>
             </a>
             <a class="p-footer-contents__item-link" href="http://masato.ciao.jp/haikei/furemu.html">
               <li class="p-footer-contents__item">背景画像：背景写真補完の会</li>
             </a>
             <a class="p-footer-contents__item-link" href="www.pakutaso.com">
               <li class="p-footer-contents__item">背景画像：フリー素材ぱくたそ</li>
             </a>
             <a class="p-footer-contents__item-link" href="http://masato.ciao.jp/haikei/furemu.html">
               <li class="p-footer-contents__item">キャラクター画像：いらすとや</li>
             </a>
           </ul>
         </div>

       </section>

       <h3 class="p-footer-text">Copyright © 2020
           <a class="p-footer-text__link" href="https://tomomi-s.xyz/">
             Tomomi Sasaki
           </a>
          .All Rights Reserved.
        </h3>
     </footer>
     <script type="text/javascript" src="dist/js/build.js"></script>

     </body>
