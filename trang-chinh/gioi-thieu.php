<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../bigshoes/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../bigshoes/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
               <!-- <a href="index.php"><img src="https://scontent.fsgn13-1.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=QFhQphCXzRAAX-d1fir&_nc_ht=scontent.fsgn13-1.fna&oh=9bdbefb8aa7738430f4cf22e51cefca8&oe=613BD03A" alt="anh"></a>
                    -->   
            </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $sl;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding: 1px 1px;background-color: #ddd6d6;border-radius: 50px;left: 260px;top: 25px;" ><?=$sll?></span>
                <ul>
                       <!-- <li><i class="fa fa-search" style="font-size:20px;color:rgb(226, 226, 226)"></i></li>-->
                        <li><p style="color: rgb(212, 212, 212);font-size: 14px;margin-top: 5px; ">GIỎ HÀNG</p></li>
                       <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-cart" style="font-size:26px;color:rgb(255, 255, 255)"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>

    





    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container" style="margin-top: 80px;">
        <div class="row">
       
        <div class="col-sm-4">
            <img src="../css/trang-chu/img/b.jpg" alt="" style = "width:100%;">
        </div>
        
        <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-12">
                        <h2 style = "color:black;">CỬA HÀNG GIÀY CHÍNH HÃNG HỒ CHÍ MINH - BIGSHOES GIỚI THIỆU </h2>
                        <p style = "text-align:justify;">
                        <b>BIGSHOES</b> – Hệ thống cửa hàng, Website mua sắm giày thể thao & Sneakers tại Thành phố Hồ Chí Minh đặt biệt tại làng đại học, 
                        để đưa giày chính hãng giá rẻ đến gần hơn với các bạn sinh viên làng đại học, 
                        chúng tôi cam kết mang đến một bộ sưu tập giày thể thao thời trang khổng lồ đến từ nhiều thương hiệu lớn, 
                        nhỏ và cả ở Việt Nam. Được trải qua các khâu tuyển lựa kỹ lưỡng sao cho phù hợp thị hiếu, phong cách Á Đông, 
                        đồng thời, bắt nhịp cùng xu hướng chung đang thịnh hành khắp thế giới. <br> <br>


            </div>
        </div>
        <div class="col-sm-12">
            <img src="../css/trang-chu/img/hinhbig.jpg" alt="" style = "width:100%; height:100%;">
        </div>
        <div class="row">
            <div class="col-sm-12">
                        <h4>CHI NHÁNH BIGSHOES</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" style=" border-right:double #c30005 5px">
            <b>CN1: 777 Làng Đại Học – Thành phố Hồ Chí Minh</b><br>
            <p style = "text-align:justify;margin-top:10px;">Ra đời vào năm 2021, là đứa con đầu tiên, là cột mốc khởi đầu cho quá trình “vươn mình ra biển lớn” của thương hiệu BIGSHOES. Mặc dù, không gian cửa hàng lúc này chưa thực sự lớn, các dòng sản phẩm, mẫu mã, thiết kế còn hạn chế. Đồng thời, những dịch vụ chăm sóc và hỗ trợ khách hàng vẫn còn rất nhiều thiếu sót. Tuy nhiên, mọi cố gắng không biết mệt mỏi của chúng tôi cuối cùng đã được đền đáp một cách xứng đáng…….</p>
            </div>
            <div class="col-sm-6">
            <b>CN2: 276 Lý Thường Kiệt - Quận 10 - Hồ Chí Minh - Viet Nam</b><br>
            <p style = "text-align:justify;margin-top:10px;">……2 năm trôi qua, một cửa hàng “bé bự” . Hoàn thiện hơn, mạnh mẽ hơn, không gian cực rộng lớn với các phân khu sản phẩm riêng biệt trải đều trên diện tích hơn 100m2. Nhằm “phổ cập” rộng rãi xu hướng thời trang mới cho giới trẻ Sài Thành, đồng thời, trở thành một tụ điểm mua sắm không thể bỏ qua tại thành phố Hồ Chí Minh.</p>
            </div>
        </div>

        </div>
        </div> <br><br>


        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/freeship.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Miễn phí giao hàng</b> <br>  
                    Miễn phí giao hàng cho tất cả các đơn hàng trên 2.000.000 VNĐ. 
                    Giao hàng nhanh chóng và đảm bảo chất lượng cho khách hàng  !</div>
                </div><br>
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/new.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Sản phẩm mới 100%</b> <br>  
Sản phẩm tại shop là sản phẩm mới 100% và được nhập khẩu từ các nhãn hàng uy tín trên toàn quốc và trên thế giới.</div>
                </div><br>
                <div class="row">
                <div class="col-sm-2"><img src="../css/trang-chu/img/chinhhang.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Hàng chính hãng</b> <br>  
                    Sản phẩm tại shop đảm bảo là sản phẩm chính hãng và được nhập khẩu từ các nhãn hàng uy tín trên toàn quốc và trên thế giới.</div>
                </div><br>
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/doitra.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Đổi trả trong vòng 5 ngày</b> <br>  
Shop có chính sách đổi trả trong vòng 5 ngày đối với các trường hợp không đúng size hoặc muốn đổi sản phẩm khác!</div>
                </div><br>
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/CSKH.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Chăm sóc khách hàng</b> <br>  
Chế độ chăm sóc khách hàng tại shop tận tình , nhiệt tình hỗ trợ và phục vụ quý khách chu đáo.Đáp ứng nhu cầu của mọi khách hàng ! </div>
                </div><br>
                <div class="row">
                <div class="col-sm-2"><img src="../css/trang-chu/img/thanhtoan.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Thanh toán đa dạng</b> <br>  
Thanh toán tại shop đa dạng bằng cách trả tiền mặt hoặc sử dụng các loại thẻ như : VISA, MASTER CARD ,VÍ ĐIỆN TỬ ....</div>
                </div><br>
            </div>
            </div>
    </div>

 



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="https://scontent.fsgn13-1.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=QFhQphCXzRAAX-d1fir&_nc_ht=scontent.fsgn13-1.fna&oh=9bdbefb8aa7738430f4cf22e51cefca8&oe=613BD03A" alt="" style ="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                    Xin cám ơn !                                    
                                </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </>









    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>