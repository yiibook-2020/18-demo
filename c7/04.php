<html>
<head>
    <title>头像上传</title>
</head>
<div>
    <form action="/c7/doUpload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar[]" multiple>
        <input type="submit" value="上传">
    </form>
</div>
</html>
