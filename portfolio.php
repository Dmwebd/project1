<?php 
    include 'sections/head.php';
    $pages = 'portfolio';
?>
<body>
	<?php 
        require_once 'Mobile_Detect.php';
        $detect = new Mobile_Detect;
     ?>
	<div class="main" id="main">
		<div class="main-circle-dark portfolio-page-cd sacaleAnim"></div>
		<div class="main-circle-tg v-test portfolio-page-tg sacaleAnim"></div>
		
		<?php 
		    include 'sections/header.php';
		?>

		<div class="container main__cont">
	
			<h1 class="title-min fw5 msm title-first">
				Мы обладаем экспертизой в <br>криптографии и блокчейн-техологии,<br> реализовали ML проекты, SAAS <br>сервисы и высоконагруженные <br>приложения
			</h1>

			<p class="text20 mbm title-first">
				Более 2-х лет мы специализируемся на разработке мобильных <br> приложений и веб-сервисов, рассчитанных на большую аудиторию
			</p>

		
		</div>

		
	</div>

	

	<?php 
	    include 'sections/nav.php';
	?>
	

	<!-- portfolio-page -->
	<div class="section pp">
		<div class="container">
			<div class="text tgc mbs fw6">
				01
			</div>
			<h2 class="title-lg fw6 mlg lh08">
				Проекты
			</h2>
		</div>

		<div class="pp__cont">
			<!-- 1 -->
			<div class="pp-item">
				<div class="pp-left">
					<h5 class="fw6 text44 mb">
						Анализ защиты баз данных  
						игроков нефтегазовой промышленности
					</h5>
					<div class="text20 pp-left__row mb">
						<div class="mrm fwb">
							Заказчик:
						</div>

						<div class="pp-left-items">
							<div class="pp-left-items__img">
								<img src="assets/img/portfolio-page/gaz.svg" alt="">
							</div>
						</div>
					</div>

					<div class="pp-left__block text20 mb">
						<b>Задача:</b> <p class="text18 lgray">
							заказчику требовалось выбрать программное обеспечение для защиты баз данных.
						</p>
					</div>

					<div class="pp-left__block text20 mlg">
						<b>Результат:</b> <p class="text18 lgray">
							был проведен анализ технической документации существующих решений на рынке и их исходного кода. 
							Анализ включал 200 пунктов, среди которых исполнения требований законодательства РФ, хранение паролей, защита от вредоносного ПО и сетевая защита. Были подготовлены матрицы и презентация решений.
						</p>
					</div>

					<div class="text20 fwb mbs">
						Технологии:
					</div>
					<div class="pp-left__row t2">
						<img src="assets/img/portfolio-page/th-1.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-2.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-3.svg" alt="" class="mr">
					</div>
				</div>
				<div class="pp-right" style="background: url(assets/img/portfolio-page/i-1.png) no-repeat center; background-size: cover;">
					
				</div>
			</div>
			<!-- 2 -->
			<div class="pp-item">
				<div class="pp-left">
					<h5 class="fw6 text44 mb">
						Приложение Qunity
						по управлению
						децентрализованными командами внутри компани
					</h5>
					<div class="text20 pp-left__row mb">
						<div class="mrm fwb">
							Заказчик:
						</div>

						<div class="pp-left-items">
							<div class="pp-left-items__img">
								<img src="assets/img/portfolio-page/qiwi.svg" alt="">
							</div>
						</div>
					</div>

					<div class="pp-left__block text20 mb">
						<b>Задача:</b> <p class="text18 lgray">
							создание корпоративного приложения по управлению децентрализованными командами, а также их цифровыми активами.
						</p>
					</div>

					<div class="pp-left__block text20 mb">
						<b>Результат:</b> <p class="text18 lgray">
							разработана веб-версия приложения, iOS и Android приложения, проведено тестирование MVP на фокус-группах, найдена работающая бизнес-модель взаимодействия с QIWI. <br><br>
							Уникальная особенность приложения Q-unity в получении обратной связи от участников. Обсуждение рабочего процесса, критика, предложения по улучшению и рекомендации повышают лояльность команд.
						</p>
					</div>
					<div class="msm">
						<a href="#modal-portfolio-1" class="portfolio-link open-js text23 tdu fw6">О проекте подробнее</a>
					</div>

					<div class="text20 fwb mbs">
						Технологии:
					</div>
					<div class="pp-left__row t2">
						<img src="assets/img/portfolio-page/th-4.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-3.svg" alt="" class="mr">
						<span class="text">Android и iOs-разработка.</span>
					</div>
				</div>
				<div class="pp-right" style="background: url(assets/img/portfolio-page/i-2.png) no-repeat center; background-size: cover;">
					
				</div>
			</div>
			<!-- 3 -->
			<div class="pp-item">
				<div class="pp-left">
					<h5 class="fw6 text44 mb">
						Анализ видеопотока
						с беспилотных летательных аппаратов
					</h5>
					<div class="text20 pp-left__row mb">
						<div class="mrm fwb">
							Заказчик: производственная компания, дочернее предприятие ГК Ростех.
						</div>
					</div>

					<div class="pp-left-items mb">
						<div class="pp-left-items__img mr">
							<img src="assets/img/portfolio-page/ros.svg" alt="">
						</div>
						<p class="text18 lgray">
							*Компания создана для содействия <br>государственной политике по развитию<br> и модернизации промышленности.
						</p>
					</div>

					<div class="pp-left__block text20 mb">
						<b>Задача:</b> <p class="text18 lgray">
							заказчику требовалось выбрать программное обеспечение для защиты баз данных.
						</p>
					</div>
					<div class="text20 fwb mb">
						Требования к приложению:
					</div>
					<div class="row-arrow mbm">
						<img src="assets/img/arr-list.svg" alt="" class="row-arrow__img mrm">
						<span class="fw5 text18">
							Выявление неисправностей в оборудовании
						</span>
					</div>
					<div class="mb">
						<p class="text18 lgray">
							В основе системы лежит алгоритм анализа видеопотока. Он позволяет распознавать отдельные объекты на видео. Данные анализируются
							в онлайн режиме, что сразу выявляет возможные нарушения.
						</p>
					</div>
					<div class="row-arrow mbm">
						<img src="assets/img/arr-list.svg" alt="" class="row-arrow__img mrm">
						<span class="fw5 text18">
							Цифровизация предприятия
						</span>
					</div>
					<div class="msm">
						<p class="text18 lgray">
							Применение беспилотников для выявления неисправностей зданий, вышек, ЛЭП.
						</p>
					</div>
					<div class="pp-left__block text20 msm">
						<b>Результат:</b> <p class="text18 lgray">
							Разработан прототип системы. Ее применение позволит сократить время на починку неисправностей
							в оборудовании в срок до 2 дней.
						</p>
					</div>

					<div class="text20 fwb mbs">
						Технологии: <span class="gr text fw3"> Web (HTLM, CSS, JS)</span>
					</div>
					<div class="pp-left__row t2">
						<img src="assets/img/portfolio-page/th-3.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-5.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-6.svg" alt="" class="mr">
					</div>
				</div>
				<div class="pp-right" style="background: url(assets/img/portfolio-page/i-3.png) no-repeat center; background-size: cover;">
					
				</div>
			</div>
			<!-- 4 -->
			<div class="pp-item">
				<div class="pp-left">
					<h5 class="fw6 text44 mb">
						Онлайн платформа для оказания юридических услуг среднему бизнесу
					</h5>
					<div class="text20 pp-left__row mb">
						<div class="mrm fwb">
							Заказчик:
						</div>

						<div class="pp-left-items">
							<div class="pp-left-items__img">
								<img src="assets/img/portfolio-page/sib.svg" alt="">
							</div>
						</div>
					</div>

					<div class="pp-left__block text20 mb">
						<b>Задача:</b> <p class="text18 lgray">
							разработать агрегатор – канал b2b продаж, позволяющий оказывать юридические услуги в онлайн-режиме.
						</p>
					</div>

					<div class="pp-left__block text20 mlg">
						<b>Результат:</b> <p class="text18 lgray">
							разработана веб- платформа, соединившая заказчиков и исполнителей юридических услуг. На платформе размещается полезная юридическая информация о расчете пенсий, госпошлин.
						</p>
					</div>

					<div class="text20 fwb mbs">
						Технологии:
					</div>
					<div class="pp-left__row t2">
						<img src="assets/img/portfolio-page/th-7.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-8.svg" alt="" class="mr">
						<img src="assets/img/portfolio-page/th-6.svg" alt="" class="mr">
					</div>
				</div>
				<div class="pp-right" style="background: url(assets/img/portfolio-page/i-4.png) no-repeat center; background-size: cover;">
					
				</div>
			</div>

		</div>
	</div>

	<!-- feedback -->
	<div class="feedback">
		<div class="container">
			<div class="text tgc mbs fw6">
				02
			</div>
			<h2 class="title-lg fw6 mlg lh08">
				Отзывы о нашей работе
			</h2>

			<div class="feedback-slider">
				<div class="feedback-slider__item">
					<div class="team-slider__head mb">
						<div class="team-slider__head--img mrs" style="background: url(assets/img/portfolio-page/f-1.png) no-repeat center; background-size: cover;"></div>
						<div class="team-slider__head--text">
							<h4 class="text34 fw6 mbs fade_in">
								Виталий Саяпин
							</h4>
							<div class="text18 tgc">
								заместитель директора <br> по R&D, ПАО "НИПС"
							</div>
						</div>
					</div>

					<p class="text18 lgray article">
						Сотрудничаем с ООО "Десенчери" не первый год, это наши постоянные партнеры, с которыми мы реализовали совместно около 5 проектов. Сотрудники компании самостоятельные и компетентные, держат обещания, при работе с ними можно быть уверенным, что результаты по проекту будут выполнены качественно и в срок. Также можно рассчитывать на профессиональную экспертизу сотрудников, после аудита исходников проекта, разработчики предлагают оптимальные варианты решений, чтобы система работала стабильно. Рекомендуем ООО "Десенчери" в качестве партнеров и исполнителей.
					</p>
				</div>
				<div class="feedback-slider__item">
					<div class="team-slider__head mb">
						<div class="team-slider__head--img mrs" style="background: url(assets/img/portfolio-page/f-1.png) no-repeat center; background-size: cover;"></div>
						<div class="team-slider__head--text">
							<h4 class="text34 fw6 mbs fade_in">
								Виталий Саяпин
							</h4>
							<div class="text18 tgc">
								заместитель директора <br> по R&D, ПАО "НИПС"
							</div>
						</div>
					</div>

					<p class="text18 lgray article">
						Сотрудничаем с ООО "Десенчери" не первый год, это наши постоянные партнеры, с которыми мы реализовали совместно около 5 проектов. Сотрудники компании самостоятельные и компетентные, держат обещания, при работе с ними можно быть уверенным, что результаты по проекту будут выполнены качественно и в срок. Также можно рассчитывать на профессиональную экспертизу сотрудников, после аудита исходников проекта, разработчики предлагают оптимальные варианты решений, чтобы система работала стабильно. Рекомендуем ООО "Десенчери" в качестве партнеров и исполнителей.
					</p>
				</div>

				<div class="feedback-slider__item">
					<div class="team-slider__head mb">
						<div class="team-slider__head--img mrs" style="background: url(assets/img/portfolio-page/f-1.png) no-repeat center; background-size: cover;"></div>
						<div class="team-slider__head--text">
							<h4 class="text34 fw6 mbs fade_in">
								Виталий Саяпин
							</h4>
							<div class="text18 tgc">
								заместитель директора <br> по R&D, ПАО "НИПС"
							</div>
						</div>
					</div>

					<p class="text18 lgray article">
						Сотрудничаем с ООО "Десенчери" не первый год, это наши постоянные партнеры, с которыми мы реализовали совместно около 5 проектов. Сотрудники компании самостоятельные и компетентные, держат обещания, при работе с ними можно быть уверенным, что результаты по проекту будут выполнены качественно и в срок. Также можно рассчитывать на профессиональную экспертизу сотрудников, после аудита исходников проекта, разработчики предлагают оптимальные варианты решений, чтобы система работала стабильно. Рекомендуем ООО "Десенчери" в качестве партнеров и исполнителей.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- test -->
	<?php 
	    include 'sections/test.php';
	?>
	
	<div class="mlg mlg-mob"></div>

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

	<script>
		if (!isMobile()) {
	        $('.pp__cont').slick({
	          infinite: true,
	          speed: 600,
	          slidesToShow: 1,
	          slidesToScroll: 1,
	          adaptiveHeight: true,
	          arrows: false,
	          dots: true
	          // verticalSwiping: true,
	          // vertical: true
	        });
	    }
		
		$('.feedback-slider').slick({
		  infinite: true,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 1,
		  variableWidth: true,
		  arrows: false
		});
	</script>
	<script src="assets/js/readmore.min.js"></script>
	<script>
		$('.article').readmore({
			maxHeight: 140,
			moreLink: '<a href="#" class="text18 fw5 tdu read-link">Читать весь отзыв</a>',
			lessLink: '<a href="#" class="text18 fw5 tdu read-link" >Скрыть отзыв</a>'
		});
	</script>
</body>
</html>