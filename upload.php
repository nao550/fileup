<?php
include_once('fileclass.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<p>
<?php

    $fname = new FileUP();
    if( 1 == $fname->ReceiveFile($_FILES["userfile"]["tmp_name"], $_FILES["userfile"]["name"])){
        echo "エラーが発生したため、ファイルがアップロードされませんでした.\n";
    } else {
        echo "ファイルは正常にアップロードされました。.\n";
    }



?></p>
</body>
</html>