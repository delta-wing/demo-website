<html>
<head>
    <meta charset="utf-8">
    <title>一个最简单的表单</title>
</head>
<body>
    <?php
    // 定义变量并设置为空值
    $username = $sex = $password "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $sex = test_input($_POST["sex"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>
    <p>恭喜鱼油：<?php echo $username; ?>，您的信息已提交成功哦～</p>
	<p>您的用户名为: <?php echo $username; ?></p>
    <p>您的性别为：<?php echo $sex; ?></p>
	<p>您的密码为：<?php echo $password; ?></P>
</body>
</html>
