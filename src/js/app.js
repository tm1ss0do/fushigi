var $ = require("jquery");

$(function(){
  var count = 0;


  //スタートボタンを押した時の処理ーーーーーーーーーーーーーーーーーーーー
  $('.js-start-btn').on('click',function(e){
    $that = $(this);
    //ポストされた場合、イベントをキャンセル
    e.preventDefault();
    //Ajax通信を行う
    $.ajax({
      type: "post",
      url: "main.php",
      dataType: "json",
      data:{
        "start": true,
      }
    }).done(function(data){
      // console.log(data);
      //メッセージパネルを隠す
      $that.parents('.js-start-wrap').siblings('.js-play-wrap')
      .find('.js-message-panel').hide();
      //スタート画面を隠す
      $that.parents('.js-start-wrap').fadeOut('slow');
      //背景画像
      $('#playing').fadeIn('slow').css('background-image','url("./dist/img/inakamichi.jpg")');

    });

  });

  //ーーメッセージ表示部分をshowーーーーーーーーーーーーーーーーーーーー

  $('.js-play-wrap').one('click',function (e) {
    $that = $(this);
    e.preventDefault();

    $.ajax({
      type: 'post', //サーバーへ通信するときの通信方式
      url: 'Ajax.php', //送信先。現在のファイル、app.jsから見たときの相対パスor絶対パス
      dataType : 'json', //サーバーから帰ってきたものの形式を指定。自動で変換されるが、必ずあったほうがいい。
    }).done(function(data, status){
      // console.log(data);
      // メッセージパネル表示
      $that.find('.js-message-panel').fadeIn('slow');
      //キャラクターの名前
      $('.js-name-title').css("opacity","0");
      //セリフ
      $('.js-scenario-sentence').html( data.viewText );
      //スキップボタン
      $('.js-skip-btn').show();

    });
  });

  //ーープロローグをスキップーーーーーーーーーーーーーーーーーーーー
  $('.js-skip-btn').on('click',function (e) {
    $that = $(this);
    e.preventDefault();

    $.ajax({
      type: 'post', //サーバーへ通信するときの通信方式
      url: 'skip.php', //送信先。現在のファイル、app.jsから見たときの相対パスor絶対パス
      dataType : 'json', //サーバーから帰ってきたものの形式を指定。自動で変換されるが、必ずあったほうがいい。
    }).done(function(data){
      // console.log('skip');
      //スキップを非表示
      $that.hide();
      //表示する文字
      //キャラクターの名前
      if(data.charaName){
        $('.js-name-title').css("opacity","1");
        $('.js-name-title').find('.js-chara-name').text( data.charaName );
      }else{
        $('.js-chara-name').text( "" );
        $('.js-name-title').css("opacity","0");
      }
      // キャラクターの画像
      if(data.charaImg){
        $('.js-chara-img').attr('src',data.charaImg);
        $('.js-play-backC').css('background', "$color-back-dark-opa");
      }
      //セリフ
      $('.js-scenario-sentence').html( data.viewText );
      //背景画像
      $('#playing').fadeIn('slow').css('background-image','url(' + data.backImg + ')');
      //選択肢
      if(data.choice){
        // console.log(data.choice);
        $('.js-choice-panel').removeClass('hide').addClass('show');
        //選択肢1つ目があれば、showクラスを付ける。name属性とvalueに値を入れる。
        //次の選択肢がなければ、入れない。hideクラスはそのまま。
        var count = '';
        for (var key in data.choice) {
          // console.log(key + ': ' + data.choice[key]);
          count ++;
          $('.js-choice-item'+count).attr({ 'name':key,'value':data.choice[key] })
          .parent('.js-choice-item').removeClass('hide').addClass('show');
          // console.log(count);
        }
      }


    });
  });


  //ーーメッセージパネルを押した時の処理ーーーーーーーーーーーーーーーーーーーー
  $('.js-message-panel').on('click',function (e) {
    $that = $(this);
    e.preventDefault();

    $.ajax({
      type: 'post', //サーバーへ通信するときの通信方式
      url: 'Ajax.php', //送信先。現在のファイル、app.jsから見たときの相対パスor絶対パス
      dataType : 'json', //サーバーから帰ってきたものの形式を指定。自動で変換されるが、必ずあったほうがいい。
    }).done(function(data, status){
      // console.log(data);
      //背景画像
      $that.parents().find('#playing').fadeIn('slow').css('background-image','url(' + data.backImg + ')');
      //表示する文字
      //キャラクターの名前
      if(data.charaName){
        $('.js-name-title').css("opacity","1");
        $('.js-name-title').find('.js-chara-name').text( data.charaName );
      }else{
        $('.js-chara-name').text( "" );
        $('.js-name-title').css("opacity","0");
      }
      // キャラクターの画像
      if(data.charaImg){
        $('.js-chara-img').attr('src',data.charaImg);
        $('.js-play-backC').css('background', "$color-back-dark-opa");
      }

      //セリフ
      $('.js-scenario-sentence').html( data.viewText );
      //選択肢
      if(data.choice){
        // console.log(data.choice);
        $('.js-choice-panel').removeClass('hide').addClass('show');
        //選択肢1つ目があれば、showクラスを付ける。name属性とvalueに値を入れる。
        //次の選択肢がなければ、入れない。hideクラスはそのまま。
        var count = '';
        for (var key in data.choice) {
          // console.log(key + ': ' + data.choice[key]);
          count ++;
          $('.js-choice-item'+count).attr({ 'name':key,'value':data.choice[key] })
          .parent('.js-choice-item').removeClass('hide').addClass('show');
          // console.log(count);
        }
      }
      //ゲームオーバー
      if(data.gameClear){
        $('.js-gameClear').slideDown('slow');
        $('.js-end-name').text( data.endName );
      }


    });
  });




  //選択肢ボタンを押した時の処理ーーーーーーーーーーーーーーーーーーーー
  $('.js-choice-btn').on('click',function(e){
    $that = $(this);
    //ポストされた場合、イベントをキャンセル
    e.preventDefault();
    //Ajax通信を行う
    $.ajax({
      type: "POST",
      url: "Ajax.php",
      dataType: "json",
      data:{
        "choice_btn": $that.attr("name"),
      }
    }).done(function(data){
      // console.log(data);
      //スキップボタンがあれば非表示にする
      $('.js-skip-btn').hide();
      //選択肢のパネルを閉じる
      $('.js-choice-panel').removeClass('show').addClass('hide');
      $('.js-choice-item').removeClass('show').addClass('hide');
      // キャラクターの名前
      if(data.charaName){
        $('.js-name-title').css("opacity","1");
        $('.js-name-title').find('.js-chara-name').text( data.charaName );
      }else{
        $('.js-chara-name').text( "" );
        $('.js-name-title').css("opacity","0");
      }
      // キャラクターの画像
      $('.js-chara-img').attr('src',data.charaImg);
      // セリフ
      $('.js-scenario-sentence').html( data.viewText );
      //背景画像
      $('#playing').fadeIn('slow').css('background-image','url(' + data.backImg + ')');
    });

  });


  //footerの固定-----
  var $ftr = $('#footer');
  if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
       $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) + 'px;' });
     }







});
