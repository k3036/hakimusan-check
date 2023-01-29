<!DOCTYPE html>
<html lang="jn">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <title>ボタンで画像スライド切り替え</title>
  <style>
  .sample14506 {
    position: relative;
    width: 225px;
    height: 195px;
    border: solid 3px;
    overflow: hidden;
  }

  .sampleImg14506 {
    padding-left: 0px;
    margin-top: 0;
  }

  .sampleImg14506 ul {
    margin-left: -40px;
    margin-right: -250px;
  }

  .sample14506 ul li {
    display: inline;
    padding-left: 5px;
    line-height: 100px;
  }

  .borderLeft14506 {
    position: absolute;
    top: 85px;
    left: 0;
    background: black;
    height: 20px;
    width: 20px;
    cursor: pointer;
  }

  .borderRight14506 {
    position: absolute;
    top: 85px;
    left: 205px;
    background: black;
    height: 20px;
    width: 20px;
    cursor: pointer;
  }

  .borderLeftIn14506 {
    /* 線の書式 */
    border-top: 3px solid yellow;
    border-left: 3px solid yellow;
    /* 線の長さ */
    width: 8px;
    height: 8px;
    /* 回転角度 */
    transform: rotate(-45deg);
    margin-top: 4px;
    margin-left: 4px;
  }

  .borderRightIn14506 {
    /* 線の書式 */
    border-top: 3px solid yellow;
    border-left: 3px solid yellow;
    /* 線の長さ */
    width: 8px;
    height: 8px;
    /* 回転角度 */
    transform: rotate(-225deg);
    margin-top: 4px;
    margin-left: 4px;
  }
  </style>
</head>

<body>
  <div class="sample14506">
    <div class="borderLeft14506">
      <div class="borderLeftIn14506"></div>
    </div>
    <div class="borderRight14506">
      <div class="borderRightIn14506"></div>
    </div>
    <div class="sampleImg14506">
      <ul></ul>
    </div>
  </div>

  <script>
  //画像パス
  let imgSample1 = '1.png';
  let imgSample2 = '2.png';
  let imgSample3 = '3.jpg';
  let imgSample4 = '4.jpg';
  let imgSample5 = '5.jpg';

  let imgAry14506 = [imgSample1, imgSample2, imgSample3, imgSample4, imgSample5];

  //ロード時に画像を表示
  for (let i = 0; i < imgAry14506.length; i++) {
    $('.sampleImg14506>ul').append('<li><img src=' + imgAry14506[i] + '></li>');
  };

  let i = 0; //左右クリックの増減数
  let moveSide14506 = -221; //横の移動幅

  //左クリックイベント
  $('.borderLeft14506').click(function() {
    // 左右クリックの増減が0より大きかったら処理
    if (i > 0) {
      i = i - 1; //右クリック回数を1個減らす
      let leftCnt14506 = moveSide14506 * i; //移動幅の合計
      $(".sample14506 li:first").animate({
        marginLeft: leftCnt14506 //左マージンを指定して右に移動させる
      }, {
        duration: 500 //移動速度
      });
    };
  });


  let imgLen14506 = imgAry14506.length; //画像の配列数
  let imgLen14506Waru = imgAry14506.length - 1; //配列の合計÷表示画像数

  //右クリックイベント
  $('.borderRight14506').click(function() {
    if (i < imgLen14506Waru) { //右クりックの合計回数より少なかったら処理
      i = i + 1; //左クリック回数を1個増やす
      let leftCnt14506 = moveSide14506 * i; //移動幅の合計

      $(".sample14506 li:first").animate({ //li要素の先頭をアニメートさせる
        marginLeft: leftCnt14506 //左マージンを指定して左に移動させる
      }, {
        duration: 500 //移動速度
      });
    };
  });
  </script>
</body>

</html>