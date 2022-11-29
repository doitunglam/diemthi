<?php
define('ROOT', dirname(__FILE__));
include "../includes/function.php";
session_start();
if ($_SESSION['ses_level'] != 1) {
    header("location:login.php");
}
?>
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

    #menu ul {
        margin-left: -5px;

    }

    #menu ul li {
        color: #f1f1f1;
        display: inline-block;
        width: 144px;
        height: 40px;
        line-height: 40px;
        margin-left: -5px;
        text-align: center;
        font-weight: bold;

    }

    .select {
        text-decoration: none;
        width: 149px;
        float: left;
        background: #336699;
        color: #FFFFFF;
        text-align: center;
        line-height: 30px;
        font-weight: bold;
        border-left: 1px solid #FFFFFF;
    }

    .select:hover {
        background: #000000;
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
</style>


<body bgcolor="#CAFFFF">
<div class="banner">
    <center><img src="../assets/img/Ban.gif"></center>
</div>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div id="menu">
        <p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">CHÀO MỪNG BẠN ĐẾN TRANG QUẢN TRỊ HỆ THỐNG</p>
        <p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">TRƯỜNG THPT TRẦN KHAI NGUYÊN</p>
        <div style="display:flex; align-content: center;justify-content: center">
            <a class="select" href="index.php?mod=hs">Quản Lý Học Sinh</a>
            <a class="select" href="index.php?mod=gv">Quản Lý Giáo Viên</a>
            <a class="select" href="index.php?mod=mh">Quản Lý Môn Học</a>
            <a class="select" href="index.php?mod=diem">Quản Lý Điểm</a>
            <a class="select" href="index.php?mod=hk">Quản Lý Học Kỳ</a>
            <a class="select" href="index.php?mod=lop">Quản Lý Lớp</a>
            <a class="select" href="index.php?mod=day">Lịch Dạy</a>
            <a class="select" href="index.php?mod=capnhat">Cập Nhật</a>
            <a class="select" href="index.php?mod=dangxuat">Đăng Xuất</a>
        </div>
        <div class="right">
            <?php include "mod.php"; ?>
        </div>

        <div class="footer">Copyright &copy; 2016 Trường THPT Trần Khai Nguyên <br></div>
    </div>
</body>

