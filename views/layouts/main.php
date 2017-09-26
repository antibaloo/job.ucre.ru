<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jquery.fancybox  -->
		<link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
		<link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/jquery-ui.css" type='text/css' />
		<link rel="stylesheet" href="css/smoothbox.css" type='text/css' >
		<!-- media-queries -->
		<link rel="stylesheet" href="css/media-queries.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>


    <?php
    NavBar::begin([
        'brandLabel' => '<h1 id="logo"><img src="img/ucre1.png" alt="ucre"></h1>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Начало', 'url' => ['#home']],
            ['label' => 'Плюсы', 'url' => ['#features']],
            ['label' => 'О компании', 'url' => ['#about']],
            ['label' => 'Истории успеха', 'url' => ['#stories']],
						['label' => 'Наша жизнь', 'url' => ['#life']],
            ['label' => 'FAQ', 'url' => ['#faq']],
            ['label' => '3 простых шага', 'url' => ['#3steps']],
						['label' => 'Факты', 'url' => ['#facts']],
						['label' => 'Контакты', 'url' => ['#contacts']],
        ],
    ]);
    NavBar::end();
    ?>


        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>





  <?php $this->endBody() ?>
  <!-- Single Page Nav -->
  <script src="js/jquery.singlePageNav.min.js"></script>
  <!-- jquery.fancybox.pack -->
  <script src="js/jquery.fancybox.pack.js"></script>
  <!-- jquery.mixitup.min -->
  <script src="js/jquery.mixitup.min.js"></script>
  <!-- jquery.parallax -->
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <!-- jquery.countTo -->
  <script src="js/jquery-countTo.js"></script>
  <!-- jquery.appear -->
  <script src="js/jquery.appear.js"></script>
  <!-- jquery easing -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- jquery easing -->
  <script src="js/wow.min.js"></script>
	<script src="js/smoothbox.jquery2.js"></script>
  <script>
    var wow = new WOW ({
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       120,          // distance to the element when triggering the animation (default is 0)
      mobile:       false,       // trigger animations on mobile devices (default is true)
      live:         true        // act on asynchronously loaded content (default is true)
    }
                      );
    wow.init();
  </script> 
  <!-- Custom Functions -->
  <script src="js/custom.js"></script>
	<script src="https://bpm.ucre.ru/include/maskedInput/jquery.maskedinput.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
		/*$(document).ready(function(){
			$('a[href*=\\#]').click(function(event){
				event.preventDefault();
				var target_top= $('a[name="'+this.href.split("#")[1]+'"]').offset().top;
				$('html, body').animate({scrollTop:target_top}, 'slow');
			});
		});*/
</script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45907251 = new Ya.Metrika({
                    id:45907251,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/45907251" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<script>
		$('#clock').countdown('2017/09/24').on('update.countdown', function(event) {
       var $this = $(this).html(event.strftime(''+'<div><span>%-w</span>week%!w</div>'+'<div><span>%-d</span>day%!d</div>'+'<div><span>%H</span>hr</div>'+'<div><span>%M</span>min</div>'+'<div><span>%S</span>sec</div>'));
     });
		$(window).load(function () {
			var endDate=new Date(2017,08,24),	nowDate= new Date(); 
			if (nowDate.getTime() > endDate.getTime()){
				$(".openForm").each(function(){
					$(this).removeAttr("data-target");
					$(this).removeAttr("data-toggle");
					$(this).html("Набор персонала закончен. <br> Прием резюме верменно приостановлен!");
				});
			}
		});
		$(function(){
			$("#inputPhone").mask("+7(999) 999-99-99");
		});
		$('#ucreFormSuccess').on('hidden.bs.modal', function() {
			$('body').removeAttr("style");
		})
		$("#jobFormSubmit").click(function(){
			var data = new FormData();
			data.append("FullName",$("#inputFullName").val());
			data.append("BirthDate",$("#inputBirthDate").val());
			data.append("Phone",$("#inputPhone").val());
			data.append("Email",$("#inputEmail").val());
			data.append("Resume",$("#inputResume").prop('files')[0]);
			
			$.ajax({
				type: "POST",
				url: "https://bpm.ucre.ru/pub/jobformrecieve.php",
				dataType: "json",
				data: data,
				success: function (json) {
					if (json.status == 'OK'){
						$('#ucreForm').modal('hide');
						$('#ucreFormSuccess').modal('show');
						$("#jobForm")[0].reset(); 
						$("#formSendResult").html("");
						
					}
					if (json.status == 'ERROR'){
						$("#formSendResult").html(json.errors);
					}
					console.log(json);
				},
				error: function (json) {
					$("#formSendResult").html("Технические неполадки! Ваше сообщение не было отправлено! Пожалуйста, свяжитесь с номи по телефону.");
				},
				processData: false,
				contentType: false
			});
		});
	</script>
</body>
</html>
<?php $this->endPage() ?>
