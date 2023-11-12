<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Document</title>
</head>
<style>
.header {
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: #fff;
    position: fixed;
    z-index: 1;
    width: 100%;
    top: 0;
    height: 80px;
    transition: 0.5s;
    border-bottom: 1px solid black;
}

.header img {
    width: 100px;
    height: 60px;
    object-fit: cover;
}

ul {
    display: flex;
    align-items: center;
    justify-content: center;
}

ul li {
    list-style: none;
}

ul li a {
    text-decoration: none;
    color: #000;
    font-size: 20px;
    padding: 0px 15px;
}

ul li a:hover {
    text-decoration: underline;
}

form {
    position: relative;
}


.user-search {
    display: flex;
    align-items: center;
}

.user-search i {
    font-size: 25px;
    color: #358E9D;
    margin: 0px 10px;
}

.user-search .input {
    width: 200px;
    height: 35px;
    padding-left: 8px;
    font-size: 17px;
}

.user-search .searchs {
    height: 35px;
    cursor: pointer;
    position: absolute;
    right: 0;
}

.user-search input:focus {
    outline: none;
}
</style>

<body>

    <div class="header">
        <ul class="menu">
            <a href="../index.php"><img src="../Ảnh/logo.jpg" alt=""></a>
            <li><a href="../index.php">Trang chủ</a></li>
            <li><a href="index.php?act=listdm">Danh mục</a></li>
            <li><a href="index.php?act=listsp">Hàng hóa</a></li>
            <li><a href="index.php?act=listtk">Khách hàng</a></li>
            <li><a href="index.php?act=thongke">Thống kê</a></li>
            <li><a href="index.php?act=bieudo">Biểu đồ</a></li>
            <li><a href="index.php?act=binhluan">Bình luận</a></li>

        </ul>
        <div class="user-search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" class="input" name="kyw" placeholder="Tìm sản phẩm">
                <input type="submit" class="searchs" name="timkiem" value="Tìm kiếm">
            </form>
            <a href="../view/login.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</body>

</html>