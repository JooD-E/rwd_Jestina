<?php

session_start();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J&middot;estina Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="css/rwd.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/xeicon/2/xeicon.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/rwd_login.css">
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/swiper.min.js"></script>
	<script src="js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/rwdapp.js"></script>
    <script src="js/rwd_main.js"></script>

</head>
<body>
    <header id="header"> <!-- 헤더 -->
        <div class="header_box">
            <h1><a href="rwd_jds.html"><img src="img/logo.png" alt="main logo"></a></h1>
            <ul class="topmenu">
                <li><button class="search_btn"><img src="img/search.png" alt="search-icon"></button></li>
                <li><a href="#"><img src="img/heart.png" alt="heart"></a></li>
                <li><a href="#"><img src="img/shoping.png" alt="shop"></a></li>
                <li><a href="rwd_jds_login.html"><img src="img/user.png" alt="user"></a></li>
            </ul>
        </div>
    </header>

    <nav class="search_container"> <!-- 검색 창 -->
        <div class="search_containerbox">
            <div class="search_header">
                <button class="search_closebtn"><img src="img/close.png" alt="close button"></button>
                <div class="search_input">
                    <form action="search.php" method="get" class="form_search">
                        <div class="blind">
                            <button class="search_input_img"><img src="img/search.png" alt="search btn"></button>
                            <input type="search" placeholder="Search" id="search_input">
                        </div>
                    </form>
                </div>
            </div>

            <div class="search_main_container">
                <div class="search_main_containerbox">
                    <h3>베스트셀러</h3>
                    <div class="search_main_wrapper">
                        <ul class="search_list">
                            <li class="search_item">
                                <a href="#">
                                    <div class="search_itembox">
                                        <img src="img/s_list1.png" alt="best seller1">
                                    </div>
                                    <span>마리엘 진주 하트 귀걸이 S</span>
                                </a>
                            </li>

                            <li class="search_item">
                                <a href="#">
                                    <div class="search_itembox">
                                        <img src="img/s_list2.png" alt="best seller2">
                                    </div>
                                    <span>LALA J 목걸이</span>
                                </a>
                            </li>

                            <li class="search_item">
                                <a href="#">
                                    <div class="search_itembox">
                                        <img src="img/s_list3.png" alt="best seller3">
                                    </div>
                                    <span>LALA J 더블링 귀걸이</span>
                                </a>
                            </li>

                            <li class="search_item">
                                <a href="#">
                                    <div class="search_itembox">
                                        <img src="img/s_list4.png" alt="best seller4">
                                    </div>
                                    <span>CLOVIA DUELLO 목걸이</span>
                                </a>
                            </li>

                            <li class="search_item">
                                <a href="#">
                                    <div class="search_itembox">
                                        <img src="img/s_list5.png" alt="best seller5">
                                    </div>
                                    <span>CELESTIA 10K 랩그로운 다이아몬드 목걸이</span>
                                </a>
                            </li>

                            <li class="search_item">
                                <a href="#">
                                    <div class="search_itembox">
                                        <img src="img/s_list6.png" alt="best seller6">
                                    </div>
                                    <span>CELESTIA 미오엘로 목걸이</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="search_nav">
                    <div class="search_nav_head">
                        <h3>추천</h3>
                    </div>
                    <div class="search_nav_list">
                        <ul>
                            <li><a href="#">아이유 PICK</a></li>
                            <li><a href="#">채령 PICK</a></li>
                            <li><a href="#">CELESTIA</a></li>
                            <li><a href="#">CLOVIA</a></li>
                            <li><a href="#">BALLO</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    


    <!-- ========================
                full menu
    ========================= -->
    
    <div class="p_menu">
        <nav id="menu">
            <ul id="gnb">
                <li class="a1"><a href="#">BRAND</a>
                    <div class="t_menu">
                        <div class="t_menubox">
                            <div class="menubox">
                                <ul class="n1">
                                    <li><a href="#">비전</a></li>
                                    <li><a href="#">연혁</a></li>
                                    <li><a href="#">사업영역</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                    
                </li>

                <li class="a2"><a href="#">SHOP <img class="logoimg" src="img/logoimg.png" alt="로고 이미지"></a>
                    <div class="t_menu">
                        <div class="t_menubox">
                            <div class="menubox">
                                <ul class="n1">
                                    <li><h3>JEWELRY</h3></li>
                                    <li><a href="#">아이템</a></li>
                                    <li><a href="#">컬렉션</a></li>
                                    <li><a href="#">소재</a></li>
                                    <li><a href="#">키즈</a></li>
                                    <li><a href="#">SET</a></li>
                                </ul>

                                <ul class="n1">
                                    <li><h3>BAG</h3></li>
                                    <li><a href="#">아이템</a></li>
                                    <li><a href="#">컬렉션</a></li>
                                    <li><a href="#">소재</a></li>
                                </ul>

                                <ul class="n1">
                                    <li><h3>WATCH</h3></li>
                                    <li><a href="#">제이에스티나</a></li>
                                    <li><a href="#">제이컬렉션</a></li>
                                    <li><a href="#">로만손</a></li>
                                    <li><a href="#">로만손컬렉션</a></li>
                                </ul>

                                <ul class="n1">
                                    <li><h3>ACC</h3></li>
                                    <li><a href="#">아이템</a></li>
                                    <li><a href="#">컬렉션</a></li>
                                    <li><a href="#">소재</a></li>
                                </ul>

                                <ul class="n1">
                                    <li><h3>EXCLUSIVE</h3></li>
                                    <li><a href="#">아이템</a></li>
                                    <li><a href="#">컬렉션</a></li>
                                    <li><a href="#">소재</a></li>
                                </ul>

                                <ul class="n1">
                                    <li><h3>OUTLET</h3></li>
                                    <li><a href="#">JEWELRY</a></li>
                                    <li><a href="#">BAG</a></li>
                                    <li><a href="#">WATCH</a></li>
                                    <li><a href="#">ACC</a></li>
                                </ul>
                            </div>

                            <div class="menubox2">
                                <ul>
                                    <li><a href="#"><img src="img/menu1.png" alt="제품사진1"></a></li>
                                    <li><a href="#"><img src="img/menu2.png" alt="제품사진1"></a></li>
                                    <li><a href="#"><img src="img/menu3.png" alt="제품사진1"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="a3"><a href="#">PREMIUM</a>
                    <div class="t_menu">
                        <div class="premium_container">
                            <div class="premium_wrap">
                                <div class="premium_wrap_textbox">
                                    <span>signature</span>
                                    <h3>MORVE</h3>
                                    <p>제이에스티나의 정수를 담은 프리미엄 컬렉션</p>
                                    <a href="#">view more</a>
                                </div>

                                <div class="premium_wrap_imgbox">
                                    <div class="premium_wrap_imglist">
                                        <a href="#"><img src="img/pre1.png" alt="img"></a>
                                    </div>

                                    <div class="premium_wrap_imglist">
                                        <a href="#"><img src="img/pre2.png" alt="img"></a>
                                    </div>
                                    
                                    <div class="premium_wrap_imglist">
                                        <a href="#"><img src="img/pre3.png" alt="img"></a>
                                    </div>

                                    <div class="premium_wrap_imglist">
                                        <a href="#"><img src="img/pre4.png" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="a4"><a href="#">EVENTs</a></li>
                <li class="a5"><a href="#">고객센터</a></li>
                <li class="a6"><a href="#">SHOWROOM</a></li>
            </ul>

            <ul id="gnb2">
                <li><a href="#">배송조회</a></li>
                <li><a href="#">매장안내</a></li>
                <li><a href="#">선물하기</a></li>
            </ul>
        </nav>
    </div>

    <div class="login-area">
        <nav class="home-nav">
            <ul>
                <li><a href="rwd_jds.html">HOME</a></li>
                <li><span> &gt;</span></li>
                <li><span class="nav-span"> LOGIN </span></li>
            </ul>
        </nav>

        <section class="login-container">
            <?php
            // 로그인 상태인지 검증
            if (isset($_SESSION['userid'])) {
                ?>
            
            <h2>마이페이지</h2>
            <hr class="login-hr">
            <div class="form-wrap" style="text-align: center; padding: 0px 0;">
                <p class="wecome-msg" style="font-size: 1.2rem; margin-bottom: 40px; font-family:pretendard;">
                    안녕하세요, <strong><?php echo $_SESSION['userid']; ?></strong>님! <br>
                    제이에스티나 방문을 환영합니다.
                </p>

                <div class="submit-btn-area" style="justify-content: center; display:flex; gap:15px;">
                    <a href="rwd_jds.html" class="btn-home" style="display:inline-block; padding:0px 20px; border:1px solid #ccc;">홈으로 이동</a>
                    <a href="logout.php" class="btn-logout" style="display:inline-block; padding:0px 20px; background:#000;color:#fff;">로그아웃</a>
                </div>
                <div class="find-area">
                    <a href="rwd_jds_member_form_modify.php">정보 수정</a>
                    <span> / </span>
                    <a href="member_delete.php">회원탈퇴</a>
                </div>
            </div>
            <?php
            } else{
            ?>

            <h2>로그인</h2>
            <hr class="login-hr">
            <div class="form-wrap">
                <form name="member_form" method="post" action="login.php">
                    <div class="input-row">
                        <label for="userId">아이디 :</label>
                        <input type="text" id="userId" name="userId" placeholder="아이디를 입력하세요">
                    </div>
                    <div class="input-row">
                        <label for="userPw">비밀번호 :</label>
                        <input type="password" id="userPw" name="userPw" placeholder="비밀번호를 입력하세요">
                    </div>

                    <div class="submit-btn-area">
                        <a href="rwd_jds_member_form.php">회원가입</a>
                        <button type="submit" class="btn-login" value="로그인">로그인</button>
                    </div>

                    <div class="find-area">
                        <a href="#">아이디</a>
                        <span> / </span>
                        <a href="#">비밀번호 찾기</a>
                    </div>
                </form>
            </div>
            <?php
            }
            ?>
        </section>
    </div>






    <footer id="footer">        <!-- footer -->
        <div class="f_inner">
            <div class="f_logo">
                <a href="#"><img src="img/footer_logo.png" alt="footer logo"></a>
            </div>

            <div class="f_content">
                <nav class="f_nav">
                    <ul>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">MEMBERSHIP</a></li>
                        <li><a href="#">매장 찾기</a></li>
                        <li><a href="#">고객 센터</a></li>
                        <li><a href="#">A/S</a></li>
                        <li><a href="#">개인정보처리방침</a></li>
                    </ul>
                </nav>

                <ul class="f_sns">
                    <li><a href="#"><img src="img/f_insta.png" alt="instagram logo"></a></li>
                    <li><a href="#"><img src="img/f_face.png" alt="facebook logo"></a></li>
                    <li><a href="#"><img src="img/f_you.png" alt="youtube logo"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    
</body>
</html>