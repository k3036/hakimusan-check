<?php

session_start();

?>
<?php
// $dsn ='mysql:host=localhost;dbname=ebmxrzmi_ForTheSearch;charset=utf8';
// $user = 'ebmxrzmi_inquiryDatabase';  /** ユーザー : ebmxrzmi_inquiryDatabase  || $user = 'root'; */
// $pass= 'Kk10243036'; /**pass : Kk10243036    || $pass= '333777';*/
// try {

//     $dbh = new PDO($dsn, $user, $pass,[
//       PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
//     ]);

//     $name = $_SESSION["chineseCharacterName"] ;
//     $kana = $_SESSION["howToRead"] ;
//     $email = $_SESSION["emailAddress"] ;
//     $body = $_SESSION["contentsOfInquiry"];

//     if(isset($_SESSION["phoneNumber"])){

//       $tel = $_SESSION["phoneNumber"] ;

//     }

//     if (isset($tel)) {

//         $stmt = $dbh->prepare('INSERT INTO contacts (name, kana, tel, email, body) VALUES(:name, :kana, :tel, :email, :body)');

//     }else{

//       $stmt = $dbh->prepare('INSERT INTO contacts (name, kana, email, body) VALUES(:name, :kana, :email, :body)');

//     }

//     $stmt->bindValue(':name', $name);
//     $stmt->bindValue(':kana', $kana);
//     $stmt->bindValue(':email', $email);
//     $stmt->bindValue(':body', $body);

//     if(isset($tel)){
//       $stmt->bindValue(':tel', $tel);
//     }

//     $stmt->execute();

// } catch (PDOException $e) {

//     echo $e->getMessage();

// } finally {

//     $pdo = null;

// }

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
  <form method=“POST”>
    <?php

        $referer = $_SERVER["HTTP_REFERER"];
        $url = 'mtConfirm.php';
          if(!strstr($referer,$url)){
            die("正規の画面からアクセスしてください");
            exit;
          }

      ?>
    <div class=contentOfTransmission3>
      <p class="inquirySendCompletely">お問い合わせ</p>
      <p class="inquirySendCompletelyLine"></p>
      <p class="thankYouText0">お問い合わせ頂きありがとうございます。</p>
      <p class="thankYouText1">送信頂いた件につきましては、</p>
      <p class="thankYouText1">内容を精査したのち、</p>
      <p class="thankYouText2">返信が必要と判断させて頂いたものに関しましては、</p>
      <p class="thankYouText2">折り返しご連絡させ頂く場合もございますので</p>
      <p class="thankYouText2">あらかじめ、ご了承ください</p>
      <a href="M.T.php" class="backToTopButton">トップへ戻る</a>
    </div>
  </form>
  </main>
  <!-- <div class="FooterList"> -->
  <?php
  // include "ZeroFooterBackColor";
    ?>
  </div>
  <?php include "mtFooter.php";?>
  <script src="M.T.js"></script>
</body>

</html>
<?php

      $_SESSION = array();
      session_destroy();

?>