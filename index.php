<?php 
    include 'sections/head.php';
    $pages = 'index';
?>
<body>
	<?php 
        require_once 'Mobile_Detect.php';
        $detect = new Mobile_Detect;
     ?>
	<div class="main" id="main">
		<div class="main-circle-dark sacaleAnim"></div>
		<div class="main-circle-tg sacaleAnim"></div>
		
		<?php 
		    include 'sections/header.php';
		?>

		<div class="container main__cont">
			<div class="text26 fw6 mbm title-first">
				Мы разрабатываем
			</div>
			<h1 class="title fw5 msm title-first">
				Мобильные приложения <br>
				и сервисы для бизнеса 
			</h1>


			<a href="#test" class="btn main-btn link-scr">
				<span class="btn-blick"></span>
				<span class="text18 fw6">Рассчитать стоимость </span>
				<span class="btn-arrow">
					<svg width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.5657 6.56569C15.8781 6.25327 15.8781 5.74673 15.5657 5.43431L10.4745 0.343146C10.1621 0.0307264 9.65557 0.0307264 9.34315 0.343146C9.03073 0.655565 9.03073 1.1621 9.34315 1.47452L13.8686 6L9.34315 10.5255C9.03073 10.8379 9.03073 11.3444 9.34315 11.6569C9.65557 11.9693 10.1621 11.9693 10.4745 11.6569L15.5657 6.56569ZM0 6.8H15V5.2H0V6.8Z"/>
					</svg>
				</span>
			</a>


			
			<div class="main-advas fw5 text18">
				<div class="main-advas__item">
					Создаем нативные <br> приложения от 300 000 ₽
				</div>
				<div class="main-advas__item">
					Пишем техническое задание<br>
					по ГОСТам и по требованиям компании
				</div>
				<div class="main-advas__item">
					Cтроим рабочие процессы по Agile методологии
				</div>
				<div class="main-advas__item">
					Даем гарантию 6 месяцев, зафиксированную в договоре
				</div>
			</div>
		</div>

		
	</div>

	

	<?php 
	    include 'sections/nav.php';
	?>
	


	<!-- services -->
	<?php 
	    include 'sections/services.php';
	?>

	<!-- portfolio -->
	<?php 
	    include 'sections/portfolio.php';
	?>

	<!-- dev -->
	<?php 
	    include 'sections/dev.php';
	?>

	<!-- steps -->
	<?php 
	    include 'sections/steps.php';
	?>

	<!-- test -->
	<?php 
	    include 'sections/test.php';
	?>
	
	<!-- team -->
	<?php 
	    include 'sections/team.php';
	?>
	
	<!-- trust -->
	<?php 
	    include 'sections/trust.php';
	?>

	<!-- faq -->
	<?php 
	    include 'sections/faq.php';
	?>

	<!-- footer -->
	<?php 
	    include 'sections/footer.php';
	?>


	<!-- modals -->
	<?php 
	    include 'sections/modals.php';
	?>
	
	<?php 
	    include 'sections/scripts.php';
	?>
</body>
</html>