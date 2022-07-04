<!-- 取得表單資料寫入資料庫 -->
<?php require_once("./Connection/dbset.php"); ?> <!-- 一進來就連線資料的程式 -->
<?php
if(isset($_POST['flag'])){
    $cname=$_POST['cname'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    $SQLstring="INSERT INTO feedback(cname,tel,email,address,message) VALUES ('$cname','$tel','$email','$address','$message')";
    $result=mysqli_query($link,$SQLstring);
    if($result){
        echo "<script>alert('謝謝您!送出資料已經收到，我們盡速與您聯絡。');</script>";
    }else{
        echo "<script>alert('資料無法寫入，請與管理員聯絡。');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>戀上陽光Lolita手作飾品專賣店-電子商店</title>
    <!-- 載入bootstrap 4.6 css -->
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/website.css">
</head>
<!-- Font Awesome網站 https://fontawesome.com/ -->
<!-- 我的帳號 -->
<script src="https://kit.fontawesome.com/8c4318e451.js" crossorigin="anonymous"></script>
<!-- 老師給的	 -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->

<body>
    <section id="mainmenu">
        <!-- Navbar選項 -->
        <!-- 預設顏色 -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <!-- class加上調顏色   
    navbar-dark：深色背景• navbar-light：淺色背景 
    底色bg-用原顏色info-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-info"> -->

        <!-- 或是自行設定css的bgc，或是拿掉bg -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: pink;">
            <!-- class加上位置
    fixed-bottom 永遠置尾，但會佔住下方位置、無法調整
    fixed-top 永遠置頂，但會佔住上方位置，要調整body的pt
    sticky-top 在這個區塊內置頂-->

            <a class="navbar-brand" href="#"></a>
            <!-- 這個是手機的三條線按鈕 -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <!-- mr-auto：靠左• ml-auto：靠右• mx-auto：置中 -->
                    <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><img src="./images/loveinsunlight1.png" alt="logo" class="img-fluid"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#production">站長推薦</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#SHOW">客訂展示</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buyrules">服務說明</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">連絡我們</a>
                    </li>
                    <!-- 預設的 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            會員中心
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">訂單查詢</a>
                            <div class="dropdown-divider"></div>
                            <!--分線 <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="#">退訂／退款查詢</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">現金積點查詢</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">折價券查詢</a>
                        </div>
                    </li>
                    <!-- 也可以用js再設一個三層的設定次功能表 -->
                    <li class="nav-item dropdown">
                        <a href="#" id="menu" data-toggle="dropdown" class="nav-link dropdown-toggle">優惠活動</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdowntoggle">網站限時優惠</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#">5月母親節全面9折</a></li>
                                    <li class="dropdown-item"><a href="#">假日95折</a></li>
                                    
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdowntoggle">粉絲專頁活動</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#">按讚追蹤享折價</a></li>
                                    <li class="dropdown-item"><a href="#">返圖抽獎</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">登入</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">註冊</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">登出</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li> -->

                    <!-- 設定search置中, 再加一個<li，把Search包入 -->
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
            </div>
        </nav>


        <div class="container-fluid">
            <div class="row text-center">                
                <!-- jumbotron選項 -->
                <div class="jumbotron">   
                    <div class="wow fadeInLeft" data-wow-offset="1" data-wow-delay="1s">                 
                        <p class="lead"><span id="js-rotating">！純手工設計制作！Lolita飾品,每一件物品都是獨家限量，充滿愛的快樂與被愛的欣喜,只為了讓飾品不只是飾品，更是裝飾的藝術,戀上陽光代表著一生一世的愛戀,熱愛我所創作的每一件物品,願與每一位公主分享滿滿的幸福與喜悅。</span></p> 
                    </div>
                    <br>
                     <!-- <h1 class="display-4">Lolita手作飾品-電子商店</h1>
                    <br><br> -->
                    <br><br>                                                  
                    <a class="btn btn-pink " href="https://www.facebook.com/milk03172001" target="_break" role="button"><i class="fa-brands fa-facebook fa-lg pr-2"></i>粉絲專頁</a>                                                    
                </div>                
            </div>
        </div>
    </section>
    <section id="production">
        <div class="container text-center">
            <div class="row">
                <div class="col-xl-12">
                    <h2>站長推廌熱銷飾品</h2>
                </div>
            </div>
            <div class="row">
                <!-- card卡選項 -->
                <div class="card col-md-4">
                    <img src="./images/pic61.jpg" class="card-img-top" alt="新年華麗垂墜珠鍊花丸">
                    <div class="card-body">
                        <h5 class="card-title">新年華麗紅垂墜珠鍊花丸</h5>
                        <p class="card-text">和風古風華風頭飾<br>花花控的你不要錯過！把頭上鋪滿花丸吧！<br>新年華麗紅垂墜珠鍊花丸是超級好搭配單品<br>可以一次選購多個進行組合<br>整體造型畫龍點睛</p>
                        <p>NT500</p>
                        <a href="#" class="btn btn-primary">更多資訊</a>
                        <a href="#" class="btn btn-pink">放購物車</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="./images/pic62.jpg" class="card-img-top" alt="蝴蝶夫人3.0~珠鍊雙邊夾">
                    <div class="card-body">
                        <h5 class="card-title">蝴蝶夫人3.0~珠鍊雙邊夾</h5>
                        <p class="card-text">我的小蝴蝶，當百花綻放，小鳥在天空飛翔，我就會回到你的身旁~<br>美麗的謊言，悲而美的旋律劃破每一個寧靜的夜晚，穿入人們的肺腑，叩動每一個人的心弦，令所有聽見的人都灑下同情的眼淚</p>
                        <p>NT450</p>
                        <a href="#" class="btn btn-primary">更多資訊</a>
                        <a href="#" class="btn btn-pink">放購物車</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="./images/pic64.jpg" class="card-img-top" alt="熾焰薔薇髮夾">
                    <div class="card-body">
                    <h5 class="card-title">優雅古典藍垂墜珠鍊花丸</h5>
                        <p class="card-text">和風古風華風頭飾<br>花花控的你不要錯過！把頭上鋪滿花丸吧！<br>優雅古典藍垂墜珠鍊花丸是超級好搭配單品<br>可以一次選購多個進行組合<br>整體造型畫龍點睛</p>
                        <p>NT500</p>
                        <a href="#" class="btn btn-primary">更多資訊</a>
                        <a href="#" class="btn btn-pink">放購物車</a>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="card col-md-4">
                    <img src="./images/pic63.jpg" class="card-img-top" alt="水晶琉璃珍珠項鍊">
                    <div class="card-body">
                        <h5 class="card-title">水晶琉璃珍珠項鍊</h5>
                        <p class="card-text">天然半寶石<br>如溫柔典雅的仙境色彩<br>奇幻少女的神秘魔法石<br></p>
                        <p>NT1380</p>
                        <a href="#" class="btn btn-primary">更多資訊</a>
                        <a href="#" class="btn btn-pink">放購物車</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="./images/pic65.jpg" class="card-img-top" alt="猫女爵髮夾">
                    <div class="card-body">
                        <h5 class="card-title">猫女爵髮夾</h5>
                        <p class="card-text">主子賞花去～猫女爵 髮夾<br>圓點點小姐 伊丽莎白喵 配飾<br>古典優雅美極了</p>
                        <p>NT690</p>
                        <a href="#" class="btn btn-primary">更多資訊</a>
                        <a href="#" class="btn btn-pink">放購物車</a>
                    </div>
                </div>
                <div class="card col-md-4">
                    <img src="./images/pic66.jpg" class="card-img-top" alt="墮落天使手骨髮夾一對">
                    <div class="card-body">
                        <h5 class="card-title">墮落天使手骨髮夾一對</h5>
                        <p class="card-text">1:1仿照真人手骨<br>萬聖節的必備單品<br>完美勝出每Party</p>
                        <p>NT580</p>
                        <a href="#" class="btn btn-primary">更多資訊</a>
                        <a href="#" class="btn btn-pink">放購物車</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-2">
                <!-- pagination頁碼選項 -->
                <!-- mx-auto是左右自動，pt-2是向上2pt -->
                <nav aria-label="..." class="mx-auto">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <hr>
    <section id="SHOW">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2>客訂展示</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"><img src="./images/pic71.jpg" class="img-fluid" title="pic71.jpg" alt="pic71.jpg"></div>
                <div class="col-sm-3"><img src="./images/pic72.jpg" class="img-fluid" title="pic72.jpg" alt="pic72.jpg"></div>
                <div class="col-sm-3"><img src="./images/pic73.jpg" class="img-fluid" title="pic73.jpg" alt="pic73.jpg"></div>
                <div class="col-sm-3"><img src="./images/pic74.jpg" class="img-fluid" title="pic74.jpg" alt="pic74.jpg"></div>
            </div>
            <div class="row">
                <div class="col-sm-3"><img src="./images/pic75.jpg" class="img-fluid" title="pic75.jpg" alt="pic75.jpg"></div>
                <div class="col-sm-3"><img src="./images/pic77.jpg" class="img-fluid" title="pic76.jpg" alt="pic76.jpg"></div>
                <div class="col-sm-3"><img src="./images/pic76.jpg" class="img-fluid" title="pic77.jpg" alt="pic77.jpg"></div>
                <div class="col-sm-3"><img src="./images/pic78.jpg" class="img-fluid" title="pic78.jpg" alt="pic78.jpg"></div>
            </div>
        </div>
    </section>
    <hr>
    <section id="buyrules" class="bgcolor">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h2><i class="fas fa-envelope" aria-hidden="true"></i></h2>
                    <!-- aria-hidden="true"是無障礙關閉 -->
                    <h2>我們的服務</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <h2><i class="fas fa-user" aria-hidden="true"></i></h2>
                    <h2>購物需知</h2>
                    <p>★如本店有正當理由無法接受您的訂單，將於收到您的訂單後二個工作日附正當理由通知您。但已付款者視為契約成立。</p>
                    <button class="btn btn-sm btn-purple">
                        <i class="fas fa-comment-dots fa-lg pr-2" aria-hidden="true"></i>
                        <!-- fa-lg：放大 33% ,  pr-2 右邊內距2px-->
                        Show More
                    </button>
                </div>
                <div class="col-sm-2">
                    <h2><i class="fas fa-align-justify" aria-hidden="true"></i></h2>
                    <h2>付款方式</h2>
                    <p>★超商付款取貨，至超商取貨時付款，全家繳費不取貨，適用無卡片轉帳且需宅配取件的顧客，線上刷卡，信用卡一次付清。</p>
                    <button class="btn btn-sm btn-purple">
                        <i class="fa fa-user fa-lg pr-2" aria-hidden="true"></i>
                        Show More
                    </button>
                </div>
                <div class="col-sm-2">
                    <h2><i class="fas fa-angle-double-down" aria-hidden="true"></i></h2>
                    <h2>交貨方式</h2>
                    <p>★黑貓宅配包裹：寄出後1-2天送達，可選擇送達時段，郵局包裹寄送：寄出後1-2天送達，外島地區寄出後3-7天送達。</p>
                    <button class="btn btn-sm btn-purple">
                        <i class="fas fa-thumbs-up fa-lg pr-2" aria-hidden="true"></i>
                        Show More
                    </button>
                </div>
                <div class="col-sm-2">
                    <h2><i class="fas fa-address-card" aria-hidden="true"></i></h2>
                    <h2>退換貨說明</h2>
                    <p>★登入填寫退貨單，由平台請宅配收取退貨，需完整保留商品及其配件，並簡易包裝保護商品，勿直接使用膠帶黏貼商品。</p>
                    <button class="btn btn-sm btn-purple">
                        <i class="fa-solid fa-person-dots-from-line fa-lg pr-2" aria-hidden="true"></i>
                        Show More
                    </button>
                </div>
                <div class="col-sm-2">
                    <h2><i class="fas fa-car" aria-hidden="true"></i></h2>
                    <h2>出貨時間</h2>
                    <p>★每日商品依訂單成立時間，服務時間星期一至五 9:30-21:30，(星期六、日及特定國定假日，無提供出貨服務)。</p>
                    <button class="btn btn-sm btn-purple">
                        <i class="fa-solid fa-location-dot fa-lg pr-2" aria-hidden="true"></i>
                        Show More
                    </button>
                </div>
                <div class="col-sm-2">
                    <h2><i class="fas fa-anchor" aria-hidden="true"></i></h2>
                    <h2>連絡方式</h2>
                    <p>★(02)7717-9177 分機202 電子商城客服專員，服務時間：星期一至五 9:30-18:30 (12:30-13:30為午休時間)。</p>
                    <button class="btn btn-sm btn-purple">                        
                        <i class="fa-solid fa-torii-gate fa-lg pr-2" aria-hidden="true"></i>
                        Show More
                    </button>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="contact">
        <div class="container text-center box">
            <div class="row">
                <div class="col-sm-12 pt-3">
                    <h2>聯絡我們</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-2">
                    <form action="main.php" method="post" name="form1" id="form1">
                        <div class="row form-group">
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="請輸入Name" required>
                        </div>
                        <br>
                        <div class="row form-group">
                            <input type="number" class="form-control" name="tel" id="tel" placeholder="請輸入TEL" required>
                        </div>
                        <br>
                        <div class="row form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="請輸入E-mail" required>
                        </div>
                        <br>
                        <div class="row form-group">
                            <input type="text" class="form-control" name="address" id="address" placeholder="請輸入Address" required>
                        </div>
                        <br>
                        <div class="row form-group">
                            <textarea rows="6" class="form-control" name="message" id="message" placeholder="請輸入Message,最少5字，最多60字" required minlength="5" maxlength="60"></textarea>
                            <!-- textarea 可以使用 寬度cols="55"和 高度rows="6" 的屬性設定一行有幾個字元、可以容納幾行 -->

                            <input type="hidden" name="flag" id="flag" value="form1">
                            <!-- flag是檢查有沒有按送出的隱藏東西，之後要用在資料庫的 -->

                        </div>
                        <br>
                        <button type="submit" class="btn btn-pink btn-lg mx-auto">送出</button>
                        <!-- class="form-control"是getbootstrap的樣式
                            required沒有輸入會提示
                            maxlength 或 minlength 限制最多或最少可輸入多少字元，若設定 minlength="5"，輸入內容就必須是空的若是輸入 5 個字元以上才有效 -->
                        <p></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section id="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h4>戀上陽光Lolita手作飾品專賣店 地址：40767台中市西屯區工業區一路100號 電話：04-23592181 免付費電話：0800-555666</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    COPYRIGHT &copy; Love in Sunlight SERVICE CO, ALL RIGHT RESERED.
                </div>
            </div>
        </div>
    </section>

    <!-- 載入bootstrap JavaScript file -->

    <script type="text/javascript" src="./bootstrap-4.6.1-dist/js/jquery.min.js"></script>
    <!-- 載入這個之前要先去把檔案jquery.min.js存到資料夾內才能用 -->

    <script type="text/javascript" src="./bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>

    <!-- 這3個要依照順序載入，不然無法啟動 -->
    <script type="text/javascript" src="./js/wow.js"></script>
    <script type="text/javascript" src="./js/morphext.js"></script>
    <!-- text_ctrl.js是將文字分開與動態的前animated做成wow的 function -->
    <script type="text/javascript" src="./js/text_ctrl.js"></script>

    <!-- 設定次功能表javascript -->
    <script type="text/javascript">
        $(function(){
            $('.dropdown-submenu > a').on("click",function(e){
                var submenu = $(this);
                $('.dropdown-submenu .dropdown-menu').removeClass('show');
                submenu.next('.dropdown-menu').addClass('show');
                e.stopPropagation();
            });
            $('.dropdown').on("hidden.bs.dropdown",function(){
                //hide any open menus when parent closes
                $('.dropdown-menu.show').removeClass('show');
            });
        });
    </script>

</body>

</html>