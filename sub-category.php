<?php
$currentpage = 'other';
include 'header.php';
?>

<style>
	.tradelink-header{
		position: relative;
		background-color: #2b2b2b;
	}
</style>

<header class="tradelink-header">
	<div class="section-rule">
		<nav class="nav nav-fill">
			<div class="nav__left d-flex">
				<li class="nav-list">
					<a href="./index.php" class="logo">
						<img src="./gallery/Tradelink.png" alt="linkedhill">
					</a>
				</li>
			</div>

			<div class="nav__center d-flex ml-auto mr-auto">
				<li class="nav-list">
					<a href="./index.php" class="nav-item  active">Home</a>
				</li>
				<li class="nav-list">
					<a href="#" class="nav-item">Blog</a>
				</li>
				<li class="nav-list">
					<a href="#" class="nav-item">Professional</a>
				</li>
				<li class="nav-list">
					<a href="#" class="nav-item">Contact Us</a>
				</li>
				<li class="nav-list">
					<a href="#" class="nav-item">About Us</a>
				</li>
			</div>

			<div class="nav__right d-flex">
				<li class="nav-list">
					<a href="#" class="nav-item btn login" data-toggle="modal" data-target="#login">Login / sign up</a>
				</li>
			</div>
			
		</nav>
	</div>
</header>




<main class="home-page trade-home-page sub-category">
	
	<section class="screen">
		<div class="section-rule">
			<form class="d-flex form-inline">
				<div class="form-group">
					<i class="material-icons material-icons-outlined" >location_on</i>
					<select class="form-control">
						<option value="" selected="" >Location</option>
						<option >State 1</option>
						<option >State 1</option>
						<option >State 1</option>
						<option >State 1</option>
						<option >State 1</option>
					</select>
					<i class="material-icons " >expand_more</i>
				</div>
				<div class="search">
					<div class="form-group">
						<input type="search" placeholder="Search by service.." class="form-control">
					</div>
					<button class="article__item" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="16.209" height="16.422" viewBox="0 0 16.209 16.422">
							<path id="Union_2" data-name="Union 2" d="M12.193,12.967l2.5,2.134ZM0,7.354a7.354,7.354,0,1,1,7.354,7.354A7.354,7.354,0,0,1,0,7.354Z" transform="translate(0.75 0.75)" fill="none" stroke="#fff" stroke-width="1.5" opacity="0.57"/>
						</svg>
						Search
					</button>
				</div>
				
			</form>
			
		</div>
	</section>
	
	<section class="sub-cate__cate">
		<div class="section-rule">
			<div class="row">
				<aside class="col-lg-3 p-0">
					<div class="cate">
						<ul>
							<li><h2 class="card__title">Search Office type</h2></li>
							<li class="small__title "><a href="./category-page.php">
								<img src="./gallery/service/img01.png" alt="">	
								Home Maintenance
							</a></li>
							<li class="small__title active"><a href="./category-page.php">
								<img src="./gallery/service/img02.png" alt="">	
								Office Maintenance
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								<img src="./gallery/service/img03.png" alt="">	
								Home Cleaning & Care
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								<img src="./gallery/service/img04.png" alt="">	
								Home Cleaning & Care
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								<img src="./gallery/service/img05.png" alt="">	
								Home Design & Construction
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								<img src="./gallery/service/img06.png" alt="">	
								Design & Developer
							</a></li>


							<li class="title-2"><h2 class="card__title ">More Categories</h2></li>

							<li class="small__title"><a href="./category-page.php">
								Packers and Movers
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								Pest Control
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								Gas Stove Repair
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								Delivery Persons
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								Home Tutor
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								Gardener
							</a></li>
							<li class="small__title"><a href="./category-page.php">
								Physiotherapy
							</a></li>


							

						</ul>
					</div>
				</aside>
				<aside class="col-lg-9">
					<div class="banner">
						<img src="./gallery/banner04.png" alt="">
					</div>
					<div class="recommended">
						<div class="carousel">

							<div class="item ">
								<a href="#!" class="card">
									<div class="card__img">
										<img src="./gallery/rec/img01.png" alt="">
									</div>
									<div class="card__body">
										<h2 class="card__title">Laundry</h2>
									</div>
								</a>
							</div>
							<div class="item ">
								<a href="#!" class="card">
									<div class="card__img">
										<img src="./gallery/rec/img02.png" alt="">
									</div>
									<div class="card__body">
										<h2 class="card__title">Furniture Repair</h2>
									</div>
								</a>
							</div>
							<div class="item ">
								<a href="#!" class="card">
									<div class="card__img">
										<img src="./gallery/rec/img03.png" alt="">
									</div>
									<div class="card__body">
										<h2 class="card__title">Toy Repair</h2>
									</div>
								</a>
							</div>
							<div class="item ">
								<a href="#!" class="card">
									<div class="card__img">
										<img src="./gallery/rec/img02.png" alt="">
									</div>
									<div class="card__body">
										<h2 class="card__title">Furniture Repair</h2>
									</div>
								</a>
							</div>

							<div class="item ">
								<a href="#!" class="card">
									<div class="card__img">
										<img src="./gallery/rec/img01.png" alt="">
									</div>
									<div class="card__body">
										<h2 class="card__title">Laundry</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section class="banner">
		<div class="section-rule p-0">
			<img src="./gallery/banner05.png" alt="">
		</div>
	</section>

	<section class="recommended other">
		<div class="section-rule pb-0">
			<div class="row">
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img01.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Laundry</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img02.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Furniture Repair</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img03.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Toy Repair</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img04.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Lock Smith</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img03.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Toy Repair</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img04.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Lock Smith</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img01.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Laundry</h2>
						</div>
					</a>
				</div>
				<div class="item col-sm-6 col-md-4 col-lg-3">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img02.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Furniture Repair</h2>
						</div>
					</a>
				</div>



				
			</div>
		</div>

	</section>
	
	

	

	

	
</main>
<footer class="trade-footer">
	<div class="section-rule">
		<div class="row">
			<article class="col-6 col-md-4">
				<div class="logo">
					<img src="./gallery/Tradelink_dark.png" alt="">
				</div>
				<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse saepe ad praesentium, iusto, corporis alias temporibus laborum. Eligendi, praesentium nemo.</p>
				<p class="link"><a href="tel:9875462180">+977 9875462180</a></p>	
				<p class="link"><a href="mailto:info@linkedhill.com">info@tradelink.com</a></p>	
			</article>
			<article class="col-6 col-md-4 col-lg-2">
				<h2 class="card__title">Company</h2>
				<ul>
					<li><a href="#">About us</a></li>
					<li><a href="#">Career</a></li>
					<li><a href="#">Service</a></li>
					<li><a href="#">Properties</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</article>
			<article class="col-6 col-md-4 col-lg-2">
				<h2 class="card__title">Quick Link</h2>
				<ul>
					<li><a href="#">Privacy </a></li>
					<li><a href="#">Terms & Condition</a></li>
					<li><a href="#">Account</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</article>
			<article class="col-sm-7 col-lg-4">
				<h2 class="card__title">Newsletter</h2>
				<form action="" class="form-inline">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email Address">
						<button type="submit">Go</button>
					</div>
				</form>
			</article>
		</div>
		<hr>
		<div class="d-flex last__footer">
			<p>Copyright &copy; 2019 Tradelink, All Rights Reserved.</p>
			<div class="d-flex">
				<a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
				<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
</footer>
<article class="modal fade login-form" id="login"  data-keyboard="false" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-dialog-centered ">
		<div class="modal-content">
			<div class="row">
				<div class="col-md-6 pl-0">
					<div class="card__img">
						<img src="./gallery/login.png" alt="">
					</div>
				</div>
				<div class="col-md-6 wrapper">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Login</h5>
						<a href="#!" class="close" data-dismiss="modal" aria-label="Close">
							<span class="material-icons">close</span>
						</a>
					</div>
					<div class="modal-body">
						
						<button class="facebook"><img src="./gallery/ff.png" alt="">  login with </button>
						<button class="google"><img src="./gallery/gg.png" alt=""> login with </button>
						
						<p class="or"> <span>or</span></p>

						<form action="" class="form">
							<div class="form-group">
								<input type="email" placeholder="Email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<input type="password" placeholder="Password" class="form-control" id="pass">
								<a href="#!" class="visibility input-group-text">
									<span class="material-icons">visibility_off</span>
								</a>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="terms">
								<label class="form-check-label para" for="terms">Aggree to our <a href="#">Terms and conditions</a> </label>
							</div>
							<div class="form-group">
								<button type="submit">Login</button>
							</div>

						</form>

						<p class="para"><a href="#"> Forget Password?</a></p>
						<p class="mb-0 para">Don't have a account? <a href="sign-up.php" class="link">Create account</a>.</p>

					</div>
				</div>

			</div>
			
			
		</div>
	</div>
</article>



<!--jquery  -->
<script type="text/javascript" src="./js/jquery.js"></script>
<script src="https://kit.fontawesome.com/021b940a03.js" crossorigin="anonymous"></script>


<!-- fancybox -->
<script type="text/javascript" src="./css/fancybox/jquery.fancybox.min.js"></script>
<!-- owl -->
<script type="text/javascript" src="./css/slick/slick.min.js"></script>


<!-- bootstrap -->
<script type="text/javascript" src="./css/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./css/bootstrap/js/bootstrap.min.js"></script>


<!-- commom js -->
<script type="text/javascript" src="./js/commonjs.js"></script>
<script>
	$(document).ready(()=>{
		$('.carousel ').slick({
			infinite: true,
			lazyLoad: 'ondemand',
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows:true,
			draggable:true,
			prevArrow:"<button class=' slick-prev'><i class='material-icons'>keyboard_arrow_left</i></button>",
			nextArrow:"<button class=' slick-next '><i class='material-icons'>keyboard_arrow_right</i></button>",
			responsive: [
			{
				breakpoint: 601,
				settings: {
					slidesToShow: 1.4,
				}
			}

			]



		});
	})
</script>

</body>
</html>
