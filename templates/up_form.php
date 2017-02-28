<html><head>
<title>Upload an image to a database</title>
<body bgcolor=white><h2>Here is the latest picture</h2>
<font color=red><?= $errmsg ?></font>
<center><img src=?gim=1 width=144><br>
<b><?= $title ?></center>
<hr>
<h2>GALLERY UPLOAD</h2>
<h3>Please upload a new picture and title</h3>
<form enctype=multipart/form-data method=post>
<input type=hidden name=MAX_FILE_SIZE value=150000>
<input type=hidden name=completed value=1>
Please choose an image to upload: <input id="up" type=file name=imagefile><br>
Please enter the title of that picture: <input name=whatsit><br>
then: <input type=submit></form><br>
<hr>

</body>
</html>