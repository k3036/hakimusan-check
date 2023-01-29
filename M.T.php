<?php

  session_start();
  $_SESSION = array();
  session_destroy();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>k.k</title>
  <link rel="stylesheet" href="M.T.css">
  <link rel="stylesheet" type="text/css" href="slick.css">
  <link rel="stylesheet" type="text/css" href="slick-theme.css">

</head>

<body>

  <?php include "0M.T.Header.php";?>

  <div class="headBar"></div>
  <p class="textFontSizeAttention">VR関連サイト[⇦ Flick ⇨]</p>

  <!-- slick jsの画像LINK集 -->
  <div class="single-item">

    <div>​<a href="https://dokodemodoors.com/" style=text-decoration:none; class="textFontSize"><img class="slickSize"
          src="dokodemodoor.jpg" /></a></div>
    <div>​<a href="https://www.meta.com/jp/quest/products/quest-2/" style=text-decoration:none;
        class="textFontSize"><img class="slickSize" src="meta.jpg" /></a></div>
    <div>​<a href="https://unity.com/ja" style=text-decoration:none; class="textFontSize"><img class="slickSize"
          src="Unity.jpg" /></a></div>
    <div>​<a href="https://www.meta.com/jp/en/quest/quest-pro/" style=text-decoration:none; class="textFontSize"><img
          class="slickSize" src="pro.jpg" /></a></div>
    <div>​<a href="" style=text-decoration:none; class="textFontSize"><img class="slickSize" src="33333.jpg" /></a>
    </div>

  </div>

  <div class="title0Color">
    <p class="HatsumodeMetaverseContestForForeigners"> </p>
  </div>
  <p class="textFontSizeAttention"> metaverseってそもそも...?</p>
  <div><img class="cardSize" src="6390.jpg" /></div>

  <!-- slick jsの読込み -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <!-- slickの設定 -->
  <script type="text/javascript">
  $(function() {
    $('.single-item').slick({
      accessibility: true,
      autoplay: true,
      autoplaySpeed: 2000,
      /**slickのspeed設定 */
      speed: 400,
    });
  });
  </script>
  <p class="delimiter"></p>

  <p class="businessContent"></p>


  ​
  <p class="textFontSize"></p>

  <p class="ParticipationConditions"></p>



  <p class="textFontSizeAttention"> 様々な活用事例 </p>
  <div><img class="cardSize" src="6389.jpg" /></div>

  <p class="delimiter"></p>

  <p class="wayToParticipate"></p>

  <p class="textFontSizeAttention">メタバース体験におすすめのサービス紹介 </p>
  <div><img class="cardSize" src="6399.jpg" /></div>
  <div><img class="cardSize" src="6398.jpg" /></div>

  <p class="delimiter"></p>
  <p class="YouTube"></p>
  <p class="textFontSizeAttention">VIDEOS FEATURED BY YOUTUBER</p>

  <div class="twoVideos">

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/D9eaE2IJ8Ao" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/plmRukzX8ZI" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

  </div>

  <div class="twoVideos">

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/BSjNaneBop8" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/of1Wnosw_-0" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

  </div>

  <div class="twoVideos">

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/plmRukzX8ZI" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/DLRzWSzwlp8" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

  </div>

  <div class="twoVideos">

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/AoL9jrn0HU0" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/cDcqinG5_hM" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

  </div>

  <div class="twoVideos">

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/c9YRl7Yu-p8" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

    <iframe class="YouTubeScreen" src="https://www.youtube.com/embed/F1eLeIocAcU" title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>

  </div>

  <div id="page_top"><a href="" style=text-decoration:none;>
      <p class=JumpTop>⇧</p>
    </a>
  </div>
  </div>
  <?php include "M.T.Footer.php";?>






  <script src="M.T.js"></script>
  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="slick.min.js"></script>
</body>

</html>