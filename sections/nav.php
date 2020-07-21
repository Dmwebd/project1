<div class="nav">
	
		<div id="menu-toggle">
		  <div id="hamburger">
		    <span></span>
		    <span></span>
		    <span></span>
		  </div>
		  <div id="cross">
		    <span></span>
		    <span></span>
		  </div>
		</div>


		<div class="nav-social">
			<a href="#" target="_blank" class="nav-social__item mbm">
				<svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8.17432 3.15479H10V0.133792C9.68503 0.092625 8.60178 0 7.34022 0C4.70794 0 2.90476 1.57304 2.90476 4.46421V7.125H0V10.5022H2.90476V19H6.46613V10.503H9.2534L9.69586 7.12579H6.4653V4.79908C6.46613 3.82296 6.74277 3.15479 8.17432 3.15479Z"/>
				</svg>
			</a>
			<a href="#" target="_blank" class="nav-social__item">
				<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M16.9969 17.0004V16.9997H17.0012V10.7646C17.0012 7.7144 16.3445 5.36475 12.7786 5.36475C11.0643 5.36475 9.91394 6.30546 9.4443 7.19729H9.39471V5.64951H6.01367V16.9997H9.53426V11.3795C9.53426 9.89972 9.81477 8.46881 11.6473 8.46881C13.4529 8.46881 13.4799 10.1576 13.4799 11.4744V17.0004H16.9969Z"/>
				<path d="M0.279297 5.6499H3.80413V17.0001H0.279297V5.6499Z"/>
				<path d="M2.04152 0C0.914503 0 0 0.914503 0 2.04152C0 3.16853 0.914503 4.10216 2.04152 4.10216C3.16853 4.10216 4.08303 3.16853 4.08303 2.04152C4.08232 0.914503 3.16782 0 2.04152 0V0Z" />
				</svg>

			</a>
		</div>
	</div>
	<div class="nav-overlay">
		<div class="close nav-close"></div>
		<div class="main-circle-dark sacaleAnim"></div>
		<div class="main-circle-tg sacaleAnim"></div>
		<div class="container nav-overlay__cont">
			<?php 
				
				if($pages == 'index'){
					$url = '';
				}else{
					$url = 'index.php';
				}

			 ?>

			<ul class="nav-list">
				<li>
					<a href="/" class="nav-item">
						<span class="fwb text ">01</span>
						<span class="fw5 text60">
							Главная
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>#services" class="nav-item">
						<span class="fwb text ">02</span>
						<span class="fw5 text60">
							Услуги
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>#portfolio" class="nav-item">
						<span class="fwb text ">03</span>
						<span class="fw5 text60">
							Портфолио
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>#dev" class="nav-item">
						<span class="fwb text ">04</span>
						<span class="fw5 text60">
							Этапы
						</span>
					</a>
				</li>
				<li>
					<a href="#test" class="nav-item">
						<span class="fwb text ">05</span>
						<span class="fw5 text60">
							Расчёт стоимости
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>#team" class="nav-item">
						<span class="fwb text ">06</span>
						<span class="fw5 text60">
							Команда
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>#trust" class="nav-item">
						<span class="fwb text ">07</span>
						<span class="fw5 text60">
							Нам доверяют
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo $url; ?>#faq" class="nav-item">
						<span class="fwb text ">08</span>
						<span class="fw5 text60">
							FAQ
						</span>
					</a>
				</li>
			</ul>

			<div class="nav-social nav-social-mobile">
				<a href="#" target="_blank" class="nav-social__item mbm">
					<svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.17432 3.15479H10V0.133792C9.68503 0.092625 8.60178 0 7.34022 0C4.70794 0 2.90476 1.57304 2.90476 4.46421V7.125H0V10.5022H2.90476V19H6.46613V10.503H9.2534L9.69586 7.12579H6.4653V4.79908C6.46613 3.82296 6.74277 3.15479 8.17432 3.15479Z"/>
					</svg>
				</a>
				<a href="#" target="_blank" class="nav-social__item">
					<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.9969 17.0004V16.9997H17.0012V10.7646C17.0012 7.7144 16.3445 5.36475 12.7786 5.36475C11.0643 5.36475 9.91394 6.30546 9.4443 7.19729H9.39471V5.64951H6.01367V16.9997H9.53426V11.3795C9.53426 9.89972 9.81477 8.46881 11.6473 8.46881C13.4529 8.46881 13.4799 10.1576 13.4799 11.4744V17.0004H16.9969Z"/>
					<path d="M0.279297 5.6499H3.80413V17.0001H0.279297V5.6499Z"/>
					<path d="M2.04152 0C0.914503 0 0 0.914503 0 2.04152C0 3.16853 0.914503 4.10216 2.04152 4.10216C3.16853 4.10216 4.08303 3.16853 4.08303 2.04152C4.08232 0.914503 3.16782 0 2.04152 0V0Z" />
					</svg>

				</a>
			</div>
		</div>
	</div>