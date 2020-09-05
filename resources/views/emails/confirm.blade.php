<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册确认连接</title>
</head>
<body>
<p>欢迎您在 Weibo App 注册</p>
<p>
    点击以下链接完成用户激活
    <a href="{{ route('confirm_email',$user->activation_token) }}">{{ route('confirm_email',$user->activation_token) }}</a>
</p>
<p>如果不是您本人操作，请忽略此邮件</p>
</body>
</html>
