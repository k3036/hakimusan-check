<?php

$dsn ='mysql:host=localhost;dbname=ebmxrzmi_ForTheSearch;charset=utf8';
$user = 'ebmxrzmi_inquiryDatabase';  /** ユーザー : ebmxrzmi_inquiryDatabase  || $user = 'root'; */
$pass= 'Kk10243036'; /**pass : Kk10243036    || $pass= '333777';*/
try {

    $dbh = new PDO($dsn, $user, $pass,[
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    ]);

    $name = $_SESSION["chineseCharacterName"] ;
    $kana = $_SESSION["howToRead"] ;
    $email = $_SESSION["emailAddress"] ;
    $body = $_SESSION["contentsOfInquiry"];

    if(isset($_SESSION["phoneNumber"])){

      $tel = $_SESSION["phoneNumber"] ;

    }

    if (isset($tel)) {

        $stmt = $dbh->prepare('INSERT INTO contacts (name, kana, tel, email, body) VALUES(:name, :kana, :tel, :email, :body)');

    }else{

      $stmt = $dbh->prepare('INSERT INTO contacts (name, kana, email, body) VALUES(:name, :kana, :email, :body)');

    }

    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':kana', $kana);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':body', $body);

    if(isset($tel)){
      $stmt->bindValue(':tel', $tel);
    }

    $stmt->execute();

} catch (PDOException $e) {

    echo $e->getMessage();

} finally {

    $pdo = null;

}

?>