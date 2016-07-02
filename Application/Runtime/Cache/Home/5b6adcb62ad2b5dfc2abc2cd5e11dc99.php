<?php if (!defined('THINK_PATH')) exit();?>
    <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<form action="<?php echo U('Login/index');?>" method="post"> 
用户名：<input type="text" name="username"/><br/>
密码：<input type="text" name="password"/><br/>
<input type="submit"/>
</form>
</body>
</html>