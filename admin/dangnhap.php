<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Đăng Nhập</title>
</head>
<body>
<style type="text/css">
    html, body {
        height: 100%
    }

    #holder {
        min-height: 100%;
        position: relative;
    }

    #body {
        padding-bottom: 100px; /* height of footer */
    }

    .footer {
        height: 30px;
        width: 100%;
        position: absolute;
        left: 0;
        bottom: 0;

        color: white;
        background-color: #336699;
        display: flex;
        align-content: center;
        justify-content: center;
        padding-top: 10px
    }

    #menu ul {
        margin-left: 145px;
        text-align: center;

    }

    .menu {

    }

    #menu ul li {
        display: inline;

    }

    #menu a {
        text-decoration: none;
        width: 490px;
        float: left;
        background: #336699;
        color: #FFFFFF;
        text-align: center;
        line-height: 27px;
        font-weight: bold;
        border-left: 1px solid #FFFFFF;
    }

    #menu a:hover {
        background: #000000;
    }

    body {
        margin: 0;
    }
</style>
<link rel="stylesheet" type="text/css" href="style.css">

<div style="display: flex;align-content: center;justify-content: center">
    <div style="width: fit-content">
        <div class="banner">
            <center><img src="../assets/img/Ban.gif"></center>
            <body bgcolor="#CAFFFF">
            <?php
            echo '<br/>';
            ?>
            <?php
            ?>
            <div id="menu">
                <p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">CHÀO MỪNG BẠN ĐẾN
                    TRANG ĐĂNG
                    NHẬP</p>
                <div style="display: flex;align-content: center;justify-content: center">
                    <a href="login.php">Đăng Nhập Quản Trị Hệ Thống</a>
                    <a href="logingv.php">Đăng Nhập Giáo Viên</a>
                </div>

                <div class="footer">
                    Copyright &copy; 20016 Trường THPT Trần Khai Nguyên <br>
                </div>
            </div>
        </div>

</body>

</body>
</html>