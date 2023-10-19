<?php
$data = json_decode(file_get_contents('core/storage/data.json'), 1);
?>
<?php include('core/common/header.php'); ?>

<body>

<?php include('core/common/navbar.php'); ?>

<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title"><?=$data['pageIntroduction']?></h2>
        <p class="col-12 text-center"><?=$data['pageDescription']?></p>
    </header>
    <div class="row tm-gallery">
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title"><?=$data['pageIntroduction']?></h2>
				<p class="col-12 text-center"><?=$data['pageDescription']?></p>
			</header>
			<div class="row tm-gallery">
				<div id="tm-gallery" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="assets/img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"><?=$data['Name1']?></h4>
								<p class="tm-gallery-price"><?=$data['price1']?></p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="assets/img/gallery/02.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"><?=$data['Name2']?></h4>
								<p class="tm-gallery-price"><?=$data['price2']?></p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="assets/img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"><?=$data['Name3']?></h4>
								<p class="tm-gallery-price"><?=$data['price3']?></p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="assets/img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"><?=$data['Name4']?></h4>
								<p class="tm-gallery-price"><?=$data['price4']?></p>
							</figcaption>
						</figure>
					</article>
				</div> 
			</div>
		</main>

<?php include('core/common/footer.php'); ?>

<script>
  $(document).ready(function () {
	$('.tm-paging-link').click(function (e) {
	  e.preventDefault();

	  var page = $(this).text().toLowerCase();
	  $('.tm-gallery-page').addClass('hidden');
	  $('#tm-gallery-page-' + page).removeClass('hidden');
	  $('.tm-paging-link').removeClass('active');
	  $(this).addClass("active");
	});
  });
</script>
</body>

</html>