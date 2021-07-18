<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>API Pay Truemoney Gift V100 Naelike | PHP</title>
  </head>
  <body>
    <h1>API Pay Truemoney Gift V100 Naelike</h1>
    <br>
    <h4>PHP</h4>
    <?php
      $get_phone = $_GET['phone'];
      $gte_paygift = $_GET['paygift'];
      $url_get = '../pay-truemoney/gift' . '?phone=' . $get_phone . '&paygift=' . $gte_paygift;
      $api_get_json = file_get_contents($url_get);
      $json_jq = json_decode($api_get_json);
      echo json_encode($json_jq);
    ?>
  </body>
</html>
