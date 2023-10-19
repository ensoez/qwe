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
				<h2 class="col-12 text-center tm-section-title">Здесь вы можете связаться со мной</h2>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="mail.php" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" id="" name="user_name" placeholder="Как вас зовут?">
							</div>
					        
							<div class="form-group">
								<input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 999 99 99">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="" name="user_text" placeholder="Ваше сообщение">
							</div>
					
					         <div class="form-group tm-d-flex">
					          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
					            Отправить
					          </button>
					        </div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success"></h4>
							<address>
							Задавайте вопросы и заказывайте торты удобным для вас способом!
							</address>
							<a href="tel:<?=$data['phoneNumber']?>" class="tm-contact-link">
                                  <i class="fas fa-phone tm-contact-icon"></i><?=$data['phoneNumber']?>
                            </a>
							<a href="mailto:<?=$data['sendMail']?>" class="tm-contact-link">
                                  <i class="fas fa-envelope tm-contact-icon"></i><?=$data['sendMail']?>
                            </a>
							<div class="tm-contact-social">
								<a href="https://vk.com/anis.tea_and_cake" class="tm-social-link"><i class="fab fa-vk tm-social-icon"></i></a>
								<a href="https://instagram.com/anis_tea.and.cake?igshid=MzRlODBiNWFlZA==" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            

			
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">
					<div class="col-12 tm-faq">
						<h2 class="text-center tm-section-title">Частые вопросы</h2>
						<p class="text-center">Вопросы о заказе, вкусах и доставке – здесь мы ответили на все, чтобы ваш выбор тортика был легким и вкусным!</p>
						<div class="tm-accordion">
							<button class="accordion"><?=$data['question1']?></button>
							<div class="panel">
							  <p><?=$data['answer1']?></p>
							</div>
							
							<button class="accordion"><?=$data['question2']?></button>
							<div class="panel">
							  <p><?=$data['answer2']?></p>
							</div>
							
							<button class="accordion"><?=$data['question3']?></button>
							<div class="panel">
							  <p><?=$data['answer3']?></p>
							</div>
							
						</div>	
					</div>
				</div>
			</div>
	
		</main>

<?php include('core/common/footer.php'); ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script>
  $(document).ready(function () {
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function () {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		}
	  });
	}
  });
</script>
</body>

</html>