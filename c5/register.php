<html>
<head></head>
<body>
<div>
    <form action="http://18-demo.test/c5/doRegister.php" method="post">
        <div>
            用户名:
            <input type="text" name="username">
        </div>
        <div>
            密码:
            <input type="password" name="password">
        </div>
        <div>
            确认密码:
            <input type="password" name="re_password">
        </div>
        <div>
            年级
            <select name="year">
                <option value="0">请选择年级</option>
                <option value="2019" selected>2019级</option>
                <option value="2018">2018级</option>
                <option value="2017">2017级</option>
            </select>
        </div>
        <div>
            性别:
            <input type="radio" name="gender" value="1" checked> 男
            <input type="radio" name="gender" value="2"> 女
        </div>
        <div>
            爱好:
            <input type="checkbox" name="hobby[]" value="足球"> 足球
            <input type="checkbox" name="hobby[]" value="篮球"> 篮球
            <input type="checkbox" name="hobby[]" value="排球"> 排球
        </div>
        <div>
            自我评价:
            <textarea name="remark" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="注册">
        </div>
    </form>
</div>
</body>
</html>