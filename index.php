<?php

print <<< EOP

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <title>ファイル便</title>
  <link href="./css/base.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
   // <!--

    function CheckForm(){
	var flags = 0;
	if(document.form.userfile.value == ""){
	    flags = 1;
	}
	if(!document.form.mailadd.value.match(/.+@morris.co.jp/)){
	    flags = flags + 2;
	}

	switch(flags){
	case 1:
	    window.alert('ファイルを指定してください。');
	    return false;
	    break;
	case 2:
	    window.alert('モーリス社員のメールアドレスを入力してください。');
	    return false;
	    break;
	case 3:
	    window.alert('ファイル名と、メールアドレスを入力してください。');
	    return false;
	    break;
	default:
	    return true;
	}
    }
    // -->
    </script>
</head>
<body>
<form action="upload.php" method="post" name="form" enctype="multipart/form-data" onSubmit="return CheckForm()" >
  <dl class="upform">
    <dt>ファイル：</dt>
    <dd><input type="hidden" name="max_file_size" value="100000000" />
    <input type="file" name="userfile" size="30" /></dd>
    <dt>メール：</dt><dd><input type="text" name="mailadd" size="50" /><br />
    <span class="weak">※モーリスの担当者のアドレスを入力してください。</span></dd>
    <dt>コメント：</dt><dd><textarea name="comment" rows="5" cols="50" ></textarea></dd>
    <dt></dt><dd><input type="submit" value="アップロード" /></dd>
  </dl>
</form>
</body>
</html>

EOP;

?>
