<?php
  session_start();
  ?>

<?php include "dbTryCatch.php";?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=google">
  <meta name="viewport" content="width = device - width=device-width, initial-scale = 1.0">
  <title>k.k</title>
  <link rel="stylesheet" href="M.T.css">
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
    text-align: center;
  }
  </style>
</head>

<body>
  <?php include "M.T.Header.php";?>
  <?php
        $referer = $_SERVER["HTTP_REFERER"];
        $url = 'editConfirm.php';
          if(!strstr($referer,$url)){

            die("正規の画面からアクセスしてください");
            exit;

          }
    ?>
  <div class=contentOfTransmission3>
    <p class="inquirySendCompletely">お問い合わせ</p>
    <p class="inquirySendCompletelyLine"></p>
    <p class="thankYouText0">更新完了致しました。</p>
    <p class="thankYouText3">更新頂いた件につきましては、</p>
    <p class="thankYouText2">当社より折り返しご連絡を差し上げる場合がございます。</p>
    <a href="M.T.php" class="backToTopButton">トップへ戻る</a>
  </div>
  </main>
  <div class="FooterList">
    <?php
      include "M.T.Footer.php";
    ?>
  </div>
</body>

</html>
<?php

      $_SESSION = array();
      session_destroy();

?>