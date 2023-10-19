<?php
$data = json_decode(file_get_contents('core/storage/data.json'), 1);
?>
<!DOCTYPE html>
<html lang="ru">
<?php include('core/common/header.php'); ?>

<body>

  <?php include('core/common/navbar.php'); ?>

  		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Давайте знакомиться!</h2>
				<p class="col-12 text-center">Меня зовут Анна, я считаю, что кондитерские изделия—это произведения искусства! Поэтому для меня быть кондитером—значит творить. Любимым делом я занимаюсь уже более 5 лет и продолжаю радовать своих клиентов интересным дизайном и изумительным вкусом изделий!</p>
			</header>

			<div class="tm-container-inner tm-persons">
				<div class="row">	
						<div class="tm-person">
							<img src="assets/img/about-01.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
							</figcaption>
						</div>
				</div>
			</div>
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<img src="assets/img/anis_logo2.png" alt="Image" class="img-fluid tm-history-img" />
					        	<div class="tm-history-text"> 
							    	<h4 class="tm-section-title text-center"><?=$data['TitleHistory']?></h4>
							    	<p class="tm-mb-p text-center"><?=$data['seo']?></p>
						    	</div>
						</div>	
					</div>
				</div>
			</div>
		</main>

	<?php include('core/common/footer.php'); ?>

</body>

</html>