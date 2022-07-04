<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>戀上陽光Lolita手作飾品專賣店-電子商店</title>
    <!-- 載入bootstrap 4.6 css -->
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.css">

    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/morphext.css">
    <link rel="stylesheet" href="./css/website.css">
</head>
<!-- 本機開chrome：http://localhost/Lesson-09/index.php  -->
<body>
    <div class="containet-fluid">
        <div class="video-background">
            <video id="video-background" src="./Comp 1_1.mp4" muted autoplay loop plays-inline></video>
            <!-- muted autoplay loop plays-inline自動一直播放 -->
        </div>
        <div class="video-caption text-center">
            <div class="wow fadeInLeft" data-wow-offset="1" data-wow-delay="1s">
                <h1><span id="js-rotating">Love in Sunlight,戀上陽光Lolita手作飾品專賣店-電子商店</span></h1>
            </div>
            <!-- animated infinite是一直持續這個動態效果的意思 -->
            <div class="wow pulse animated infinite" data-wow-offset="0" data-wow-delay="1s">
                <div class="margintop-30"><a href="main.php" class="btn btn-purple btn-lg">前往購物</a></div>
            </div>
        </div>
    </div>
    
<!-- 載入bootstrap JavaScript file -->

    <script type="text/javascript" src="./bootstrap-4.6.1-dist/js/jquery.min.js"></script>
    <!-- 載入這個之前要先去把檔案jquery.min.js存到資料夾內才能用 -->


    <script type="text/javascript" src="./bootstrap-4.6.1-dist/js/bootstrap.bundle.js"></script>

<!-- 這3個要依照順序載入，不然無法啟動 -->
    <script type="text/javascript" src="./js/wow.js"></script>
    <script type="text/javascript" src="./js/morphext.js"></script>
    <!-- text_ctrl.js是將文字分開與動態的前animated做成wow的 function -->
    <script type="text/javascript" src="./js/text_ctrl.js"></script>
</body>

</html>