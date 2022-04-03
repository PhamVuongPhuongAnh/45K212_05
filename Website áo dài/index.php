<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assets/css/main.js"> -->
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/jquery.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>Document</title>

    <style type="text/css">
        body {
            background-color: #3498db;
            color: #fff;
        }
        
        .wap-ss-img {
            text-align: center;
            width: 100%;
        }
        
        .wap-ss-img img {
            height: 250px;
            margin: 0 auto;
        }
        
        .textleft {
            text-align: center;
        }
        
        .slick-prev:before,
        .slick-next:before {
            font-family: fontawesome;
            font-size: 30px;
            color: #fff;
        }
        
        .slick-prev:before {
            content: '\f100';
        }
        
        .slick-next:before {
            content: '\f101';
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <div class="header__wrap">
            <div class="header__navbar">
                <!-- <img src="https://vanhacmong.online/wp-content/uploads/2021/04/header-van-hac-mong.png" class="img" alt=""> -->
                <img src="./assets/img/Logo-removebg-preview.png" alt="">
                <div class="header__navbar-search">
                    <input type="text" class="input" placeholder="Tìm kiếm">
                    <button class="header__navbar-button">
                        <i class="header__navbar-button-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="header__navbar-form">
                    <button href="" class="header__navbar-login">
                        LOGIN
                    </button>
                    <button href="" class="header__navbar-sign">
                        SIGN UP
                    </button>
                </div>
                <div class="header__navbar-cart">
                    <i class="header__navbar-cart-icon fa-solid fa-cart-plus">
                        
                    </i>
                    <span class="header__navbar-price">0đ</span>
                </div>

            </div>
        </div>

        <!-- modal .............................................-->
        <div class="modal__login hide">
            <div class="modal__inner">
            <?php if(isset($_SESSION['username'])){
                    extract($_SESSION['username']);
            ?>
            <img src="./assets/img/avata.jpg" alt="">
                    <div class="modal__container">
                        
                       <?php echo $username['username']?>

                    </div>
            <?php }else{?>
                <form action="login.php" method="POST">
                    <img src="./assets/img/avata.jpg" alt="">
                    <div class="modal__container">
                        
                        <h2>Username</h2>
                        <input type="text" name="username" required>
                        <h2>Password</h2>
                        <input type="password" name="password" required>
                        <button type="submit" name="submit_login">
                            Login
                        </button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>
                        <div class="modal__can">
                            <a class="modal__can-button">Cancel</a>
                            <a href="">
                                Forgot
                                <p>Password</p>
                            </a>
                            
                        </div>
                        <i class="modal__icon-close fa-solid fa-xmark"></i>

                    </div>
                </form>
            <?php }?>
            </div>

        </div>

        <div class="modal__sign hide">
            <div class="modal__inner">
                <form action="register_submit.php" method="POST">
                    <h1>SIGN UP</h1>
                    <h2>USER</h2>
                    <input type="text" name="username" required>
                    <h2>Password</h2>
                    <input type="password" name="password" required>
                    <h2>Repeat Password</h2>
                    <input type="password" name="repassword" required>
                    <label>
                        <input type="checkbox" checked="checked" name="checked">Remember me
                    </label>
                    <div class="modal__sign-footer">
                        <a href="">Cancel</a>
                        <button type="submit" name="submit">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- modal ........................................-->
        <div class="header__category ">
            <ul class="header__category-list ">
                <li class="header__category-item ">
                    <a href=" ">TRANG CHỦ</a>
                </li>
                <li class="header__category-item ">
                    <a href=" ">GIỚI THIỆU</a>
                </li>
                <li class="header__category-item ">
                    <a href=" ">ÁO DÀI CÁCH TÂN</a>

                </li>
                <li class="header__category-item ">
                    <a href=" ">ÁO DÀI HỌC SINH</a>
                </li>
                <li class="header__category-item ">
                    <a href=" ">SẢN PHẨM</a>
                    <ul class="subnav ">
                        <li class="subnav__item ">
                            <a href=" ">Áo dài lụa tơ tằm</a>
                        </li>
                        <li class="subnav__item ">
                            <a href=" ">Áo dài cách tân nam</a>
                        </li>
                        <li class="subnav__item ">
                            <a href=" ">Áo dài thêu</a>
                        </li>
                        <li class="subnav__item ">
                            <a href=" ">Áo dài gấm</a>
                        </li>
                        <li class="subnav__item ">
                            <a href=" ">Áo dài nhung</a>
                        </li>
                        <li class="subnav__item ">
                            <a href=" ">Áo dài học sinh</a>
                        </li>
                        <li class="subnav__item ">
                            <a href=" ">Áo dài cưới hỏi</a>
                        </li>
                </li>
                <li class="subnav__item ">
                    <a href=" ">Áo dài đôi</a>
                </li>
                </li>
                <li class="subnav__item ">
                    <a href=" ">Áo dài tết</a>
                </li>
                </ul>
                </li>
                <li class="header__category-item ">
                    <a href=" ">ÁO DÀI</a>
                </li>
            </ul>
        </div>

    </header>

    <!-- content..................................... -->
    <div class="content ">
        <div class="content__image ">
            <!-- <img src="./assets/img/10.jpg " alt=" "> -->
            <div class="grid wide content__slide ">
                <div class=" content__showslide ">
                    <div class="content__image-slide ">
                        <img onclick="slideChang() " src="./assets/img/Banner2.png " class="content__image-img " alt=" ">

                    </div>
                    <div class="content__image-slide ">
                        <img src="./assets/img/Banner1.png " class="content__image-img hide " alt=" ">
                    </div>
                </div>

                <!-- product......................................... -->
                <div class="product__price ">
                    <h2>GIÁ TỐT HÔM NAY</h2>
                    <div class="containers ">
                        <p>&nbsp;</p>
                        <div id="wapper ">
                            <div class="row filtering ">
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class=" product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0703-1-15442344246_273.33333333333x410.jpg " alt=" ">
                                        <h3>Áo dài lụa đen</h3>
                                        <span>Đã bán: 56</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>351 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0706-1-15442342789_273.33333333333x410.jpg " class="product__price-img " alt=" ">
                                        <h3>Áo dài đỏ vẽ tay, cưới hỏi</h3>
                                        <span>Đã bán: 20</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>999 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0705-1-15442342963_273.33333333333x410.jpg " alt=" ">
                                        <h3>Áo dài nhung gấm</h3>
                                        <span>Đã bán: 12</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>1 350 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/thumb/290x410/2/upload/congtrinh/cd0261-1-15395930821.jpg " alt=" ">
                                        <h3>Áo dài thêu chim phượng</h3>
                                        <span>Đã bán: 10</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>1 000 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://aodainini.vn/wp-content/uploads/2020/06/aodainini434-570x760.jpg " alt=" ">
                                        <h3>Áo dài nam đỏ vẽ tay</h3>
                                        <span>Đã bán: 59</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>880 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài cam thêu hoa sen</h3>
                                        <span>Đã bán: 100</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>770 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài nhung thêu hoa sen</h3>
                                        <span>Đã bán: 14</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>370 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài cách tân in họa tiết</h3>
                                        <span>Đã bán: 26</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>170 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài trắng với hoa loa kèn</h3>
                                        <span>Đã bán: 20%</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>670 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài nhung xanh tím</h3>
                                        <span>Đã bán: 13</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>660 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài thêu hoa hồng</h3>
                                        <span>Đã bán: 24</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>170 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="product__price-list ">
                                        <h4>50% off</h4>
                                        <img src="https://khoweb.com.vn/aodai/upload/sanpham/cd-0704-1-15442344781_266.5x410.jpg " alt=" ">
                                        <h3>Áo dài thiết kế in 3D</h3>
                                        <span>Đã bán: 20</span>
                                        <div class="price ">
                                            <i class="fa-solid fa-heart "></i>
                                            <span>300 000đ</span>
                                        </div>
                                        <button class="product__btn ">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <!-- .................product__cart......... -->
                    <div class="product__cart hide ">
                        <div class="form__cart ">
                            <i class="cart__icon-close fa-solid fa-xmark "></i>
                            <h2>GIỎ HÀNG</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>SL</th>
                                        <th>Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td><img src="./assets/img/11.jpg " alt=" ">Áo dài cách tân</td>
                                        <td><span>320 000đ</span></td>
                                        <td><input type="number " value="1 " min="1 "></td>
                                        <td>Xóa</td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td><img src="./assets/img/11.jpg " alt=" ">Áo dài cách tân</td>
                                        <td><span>320 000đ</span></td>
                                        <td><input type="number " value="1 " min="1 "></td>
                                        <td>Xóa</td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td><img src="./assets/img/11.jpg " alt=" ">Áo dài cách tân</td>
                                        <td><span>320 000đ</span></td>
                                        <td><input type="number " value="1 " min="1 "></td>
                                        <td>Xóa</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <div class="product__cart-price-total ">
                                <p>Tổng tiền:<span>0đ</span></p>
                            </div>
                            <div class="order__pay ">

                                <button class="product__cart-pay ">
                                    <a href="thanhtoan.html ">Thanh toán</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="product__detail ">
                        <div class="product__detail-item ">
                            <span>Sản phẩm nổi bật</span>
                            <div class="product__detail-strong ">
                                <img src="./assets/img/117792802_205008121019652_4478423341208147569_n-400x500.jpg " class="product__detail-img " alt=" ">
                                <div class="product__detail-detail ">
                                    <h3>ÁO VIÊN LĨNH</h3>
                                    <h4>Được bán bởi Lisa</h4>
                                    <div class="product__detail-price ">
                                        <h5>900 000đ</h5>
                                        <span>850 000đ</span>
                                    </div>
                                    <div class="product__detail-lost ">
                                        <span>Đã bán: 50</span>
                                        <h4>Có sẵn: 90</h4>
                                    </div>
                                    <div class="line ">
                                        <div class="progress ">
                                            <div class="progress-done " data-done="60 ">
                                                80%
                                            </div>
                                        </div>
                                    </div>
                                    <button class="product__button ">Thêm vào giỏ hàng</button>

                                </div>
                            </div>
                        </div>
                        <div class="product__list ">
                            <h2>Đề xuất cho bạn</h2>
                            <div class="product__category ">
                                <ul class="product__category-list ">
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/1.jpg " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo dài tân châu</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/2.jpg " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo gì đó</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/3.jpeg " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo gì đó</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/4.png " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo gì đó</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/5.jpg " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo gì đó</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/6.jpg " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo gì đó</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="product__category-item ">
                                        <a href=" " class="product__category-link ">
                                            <img src="./assets/img/7.jpg " alt=" ">
                                            <div class="product__category-name ">
                                                <span>Áo gì đó</span>
                                                <h3>300 000đ</h3>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="product__hightlight ">
                        <div class="product__hightlight-category ">
                            <div class="product__hightlight-list ">
                                <li class="product__hightlight-item active ">
                                    Sản phẩm nổi bất
                                </li>
                            </div>
                            <div class="product__hightlight-list ">
                                <li class="product__hightlight-item ">
                                    Tất cả sản phẩm
                                </li>
                            </div>
                            <div class="product__hightlight-list ">
                                <li class="product__hightlight-item ">
                                    Phổ biến
                                </li>
                            </div>
                            <div class="product__hightlight-list ">
                                <li class="product__hightlight-item ">
                                    Yêu thích
                                </li>
                            </div>
                            <div class="product__hightlight-list ">
                                <li class="product__hightlight-item ">
                                    Đánh giá tốt
                                </li>
                            </div>
                        </div>
                        <div class="product__hightlight-product ">
                            <div class="row sm-gutter ">

                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="https://bizweb.dktcdn.net/thumb/medium/100/289/705…oducts/ao-dai-co-dau-ve-tay-2.jpg?v=1552881460433 " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">1 500 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="https://bizweb.dktcdn.net/thumb/medium/100/289/705…oducts/ao-dai-co-dau-ve-tay-2.jpg?v=1552881460433 " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">900 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/10.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">644 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/11.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">545 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/12.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">205 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/13.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">1 245 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/14.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">350 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/15.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">750 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/15.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">1 700 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/15.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">1 200 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/15.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">980 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col l-3 m-4 c-6 ">
                                    <div class="product__hightlight-detail ">
                                        <div class="product__icon-icon ">
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-heart "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-zoom-in "></i>
                                            </div>
                                            <div class="product__hightlight-icon ">
                                                <i class="ti-target "></i>
                                            </div>
                                        </div>
                                        <img src="./assets/img/15.jpg " alt=" ">
                                        <h2>Áo tấc cung đình</h2>
                                        <div class="product__hightlight-strong line ">
                                            <h2 class="product__hightlight-name ">Được bán bởi:</h2>
                                            <h5>Lisa</h5>
                                        </div>
                                        <div class="product__hightlight-footer ">
                                            <span class="product__helight-price ">789 000đ</span>
                                            <i class="product__hightlight-footer-icon fa-solid fa-cart-plus "></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__footer ">
        <div class="grid wide ">
            <div class="row ">
                <div class="col l-3 m-4 c-6 ">
                    <div class="product__footer-list ">
                        <h2 class="product__footer-name ">GIỚI THIỆU</h2>
                        <P class="product__footer-des ">Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh.</P>
                    </div>
                </div>
                <div class="col l-3 m-4 c-6 ">
                    <div class="product__footer-list ">
                        <h2 class="product__footer-name ">ĐỊA CHỈ</h2>
                        <div class="product__footer-item ">
                            <i class="fa-solid fa-location-dot "></i>
                            <p class="product__footer-des ">319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Huế</p>
                        </div>
                        <div class="product__footer-item ">
                            <i class="fa-solid fa-phone "></i>
                            <p class="product__footer-des ">0949291126</p>
                        </div>
                        <div class="product__footer-item ">
                            <i class="fa-solid fa-envelope "></i>
                            <p class="product__footer-des ">demonhunterg@gmail.com</p>
                        </div>
                        <div class="product__footer-item ">
                            <i class="fa-brands fa-skype "></i>
                            <p class="product__footer-des ">demonhunterg</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-4 c-6 ">
                    <div class="product__footer-list ">
                        <h2 class="product__footer-name ">MENU</h2>
                        <div class="product__footer-item ">
                            <a href=" ">Trang chủ</a>
                            <a href=" ">Giới thiệu</a>
                        </div>
                        <div class="product__footer-item ">
                            <a href=" ">Cửa hàng</a>
                            <a href=" ">Tin tức</a>
                        </div>
                        <a href="Liên hệ "></a>
                    </div>
                </div>
                <div class="col l-3 m-4 c-6 ">
                    <div class="product__footer-list ">
                        <h2 class="product__footer-name ">MẠNG XÃ HỘI</h2>
                        <div class="product__footer-icon ">
                            <a href=" ">
                                <i class="product__footer-icon-face fa-brands fa-facebook "></i>
                            </a>
                            <a href=" ">
                                <i class="product__footer-icon-insta fa-brands fa-instagram-square "></i>
                            </a>
                            <a href=" ">
                                <i class="product__footer-icon-twiter fa-brands fa-twitter-square "></i>
                            </a>
                            <a href=" ">
                                <i class="product__footer-icon-printer fa-brands fa-pinterest "></i>
                            </a>
                            <a href=" ">
                                <i class="product__footer-icon-rss fa-solid fa-square-rss "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__footer-end hide ">
                <p>ĐĂNG KÍ NHẬN THÔNG TIN</p>
                <div class="producut__email ">
                    <input type="text " placeholder="Email ">
                    <button>Đăng kí</button>
                </div>
                <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/payment1.png " alt=" ">
                <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/payment2.png " alt=" ">
                <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/payment3.png " alt=" ">
                <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/payment4.png " alt=" ">
                <img src="http://mauweb.monamedia.net/converse/wp-content/uploads/2019/05/payment5.png " alt=" ">
            </div>

        </div>
    </div>
    <script src="./main.js "></script>
    <script type="text/javascript " src="./assets/js/bootstrap.min.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js " integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js " integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
    <script type="text/javascript ">
        $('.filtering').slick({
            slidesToShow: 4,
            slidesToScroll: 4
        });

        var filtered = false;

        $('.js-filter').on('click', function() {
            if (filtered === false) {
                $('.filtering').slick('slickFilter', ':even');
                $(this).text('Unfilter Slides');
                filtered = true;
            } else {
                $('.filtering').slick('slickUnfilter');
                $(this).text('Filter Slides');
                filtered = false;
            }
        });
    </script>
</body>

</html>