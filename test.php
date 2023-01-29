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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <style type="text/css">
  /* body {

    margin: 0;
    padding: 0;
    background-color: white;

  } */
  </style>
</head>

<body>

  <div class="single-item">
    <div><img src="1.png" width="100" height="100" /></div>
    <div><img src="4.jpg" width="100" height="100" /></div>
    <div><img src="5.jpg" width="100" height="100" /></div>
  </div>

  <!-- slick jsの読込み -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <!-- slickの設定 -->
  <script type="text/javascript">
  $(function() {
    $('.single-item').slick({
      accessibility: true,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 400,
    });
  });
  </script>







</body>

</html>