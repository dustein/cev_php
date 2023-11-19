<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processed Form</title>
</head>
<body>
  <header><h1>Form Result</h1></header>
  <main>
    <?php 
      $resp = var_dump($_GET);
      // $resp_user_name = $_GET["user_name"];
      // $resp_user_nick = $_GET["user_nick"];
      $resp_user_name = $_GET["user_name"] ?? "Name not Informed";
      $resp_user_nick = $_GET["user_nick"] ?? "Nickname not Informed";
      echo "</br><strong>$resp_user_name</strong> olá, quer dizer, <strong>$resp_user_nick</strong> olá!";
    ?>
    <p><a href="javascript:history.go(-1)"><<< go Back To Form</a></p>
  </main>
</body>
</html>