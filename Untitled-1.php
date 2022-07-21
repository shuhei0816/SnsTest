<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $access_token = "IGQVJWSzIzbXRXSlhHcFc4SnlrTk13ZAXZA0SjVfVTJPZAkFRT0xzdWhGMlg0amxJOGkxbFlnMTBMZAWJ6NFNLZAElQbU5sclNJcmNCZAGRQVmd5S2dGaXJ3bzJBR19qVDJKQTRQaHZAsQzVn";
    $url = "https://graph.instagram.com/me/media?fields=id,caption,permalink,media_url&access_token=".$access_token;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $photo_datas = curl_close($curl);
    ?>
    <p>インスタAPIテスト</p>
</body>
</html>