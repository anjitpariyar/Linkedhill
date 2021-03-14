<?php
$currentpage = 'other';
include 'header.php';
?>


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
					<a href="./index.php" class="nav-item active">Home</a>
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



<main class="home-page trade-home-page">
	<style>
		.screen{
			background:center no-repeat fixed url('./gallery/banimg03.png');
		}
	</style>
	<section class="screen">
		<div class="section-rule">
			<h2 class="screen__title">Your Service <br>Expert in all over </h2>
			<p class="card__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque nisi repell.</p>
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

	<section class="tradeN">
		<div class="section-rule">
			<div class="carousel">
				<div class="item">
					<div class="row">
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img01.png" alt="">
								</div>
								<h2 class="card__title">
									Home Maintenance
								</h2>

							</a>
						</article>
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img02.png" alt="">
								</div>
								<h2 class="card__title">
									Office Maintenance
								</h2>

							</a>
						</article>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img03.png" alt="">
								</div>
								<h2 class="card__title">
									Healthy & Beauty Care
								</h2>

							</a>
						</article>
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img04.png" alt="">
								</div>
								<h2 class="card__title">
									Home Cleaning & Care
								</h2>

							</a>
						</article>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img05.png" alt="">
								</div>
								<h2 class="card__title">
									Home Design & Construction
								</h2>

							</a>
						</article>
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img06.png" alt="">
								</div>
								<h2 class="card__title">
									Design & Developer
								</h2>

							</a>
						</article>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img03.png" alt="">
								</div>
								<h2 class="card__title">
									Healthy & Beauty Care
								</h2>

							</a>
						</article>
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img04.png" alt="">
								</div>
								<h2 class="card__title">
									Home Cleaning & Care
								</h2>

							</a>
						</article>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img01.png" alt="">
								</div>
								<h2 class="card__title">
									Home Maintenance
								</h2>

							</a>
						</article>
						<article class="col-12">
							<a href="#" class="card">
								<div class="card__img">
									<img src="./gallery/service/img02.png" alt="">
								</div>
								<h2 class="card__title">
									Office Maintenance
								</h2>

							</a>
						</article>
					</div>
				</div>
			</div>
			
			<button onclick="window.location.href='./sub-category.php'" class="view"> View All Services</button>
		</div>
	</section>
	<section class="customer">
		<div class="section-rule">

			<h2 class="section__title text-center">what do customers <br> say about us</h2>
			<div class="carousel">
				<div class="item">
					<div class="card">
						<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias culpa magnam eos eveniet non libero maiores atque, hic beatae dolores culpa magnam eos eveniet non libero maiores atque, hic beatae dolores.</p>
						<div class="d-flex">
							<img src="./gallery/pp1.png" alt="">
							<div class="card__right">
								<h2 class="card__title">Fortun Truchon</h2>
								<h2 class="small__title">Government Officer</h2>
							</div>
						</div>

					</div>
				</div>


				<div class="item">
					<div class="card">
						<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias culpa magnam eos eveniet non libero maiores atque, hic beatae dolores culpa magnam eos eveniet non libero maiores atque, hic beatae dolores.</p>
						<div class="d-flex">
							<img src="./gallery/pp2.png" alt="">
							<div class="card__right">
								<h2 class="card__title">Fortun Truchon</h2>
								<h2 class="small__title">Government Officer</h2>
							</div>
						</div>

					</div>
				</div>

				<div class="item">
					<div class="card">
						<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias culpa magnam eos eveniet non libero maiores atque, hic beatae dolores culpa magnam eos eveniet non libero maiores atque, hic beatae dolores.</p>
						<div class="d-flex">
							<img src="./gallery/pp2.png" alt="">
							<div class="card__right">
								<h2 class="card__title">Burkett Lambert</h2>
								<h2 class="small__title">Government Officer</h2>
							</div>
						</div>

					</div>
				</div>

				<div class="item">
					<div class="card">
						<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias culpa magnam eos eveniet non libero maiores atque, hic beatae dolores culpa magnam eos eveniet non libero maiores atque, hic beatae dolores.</p>
						<div class="d-flex">
							<img src="./gallery/pp1.png" alt="">
							<div class="card__right">
								<h2 class="card__title">Norris Bouchard</h2>
								<h2 class="small__title">Government Officer</h2>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

	</section>

	<section class="recommended">
		<div class="section-rule">
			<h2 class="section__title">Recommended Services</h2>
			<div class="carousel">

				<div class="item">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img01.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Laundry</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img02.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Furniture Repair</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img03.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Toy Repair</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img04.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Lock Smith</h2>
						</div>
					</a>
				</div>
				<div class="item">
					<a href="#!" class="card">
						<div class="card__img">
							<img src="./gallery/rec/img01.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Laundry</h2>
						</div>
					</a>
				</div>
				<div class="item">
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

	<section class="recommended professionals">
		<div class="section-rule">
			<h2 class="section__title text-center">Our professionals</h2>
			<div class="carousel">

				<div class="item">
					<div class="card">
						<div class="card__img">
							<img src="./gallery/pp1.png" alt="">
						</div>
						<div class="card__body">
							<p class="star"><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons non-star">grade</span></p>
							<h2 class="card__title">Balram Upadhyaya</h2>
							<h2 class="small__title">Beautician</h2>
							<button onclick="window.location.href='#'">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card">
						<div class="card__img">
							<img src="./gallery/pp2.png" alt="">
						</div>
						<div class="card__body">
							<p class="star"><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons non-star">grade</span></p>
							<h2 class="card__title">Balram Upadhyaya</h2>
							<h2 class="small__title">Beautician</h2>
							<button onclick="window.location.href='#'">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card">
						<div class="card__img">
							<img src="./gallery/pp1.png" alt="">
						</div>
						<div class="card__body">
							<p class="star"><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons non-star">grade</span></p>
							<h2 class="card__title">Balram Upadhyaya</h2>
							<h2 class="small__title">Beautician</h2>
							<button onclick="window.location.href='#'">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card">
						<div class="card__img">
							<img src="./gallery/pp2.png" alt="">
						</div>
						<div class="card__body">
							<p class="star"><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons non-star">grade</span></p>
							<h2 class="card__title">Balram Upadhyaya</h2>
							<h2 class="small__title">Beautician</h2>
							<button onclick="window.location.href='#'">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card">
						<div class="card__img">
							<img src="./gallery/pp2.png" alt="">
						</div>
						<div class="card__body">
							<p class="star"><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons non-star">grade</span></p>
							<h2 class="card__title">Balram Upadhyaya</h2>
							<h2 class="small__title">Beautician</h2>
							<button onclick="window.location.href='#'">
								Book Now
							</button>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card">
						<div class="card__img">
							<img src="./gallery/pp1.png" alt="">
						</div>
						<div class="card__body">
							<p class="star"><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons">grade</span><span class="material-icons non-star">grade</span></p>
							<h2 class="card__title">Balram Upadhyaya</h2>
							<h2 class="small__title">Beautician</h2>
							<button onclick="window.location.href='#'">
								Book Now
							</button>
						</div>
					</div>
				</div>




			</div>
		</div>

	</section>

	<section class="trade estate">
		<div class="section-rule pt-0">
			<h2 class="section__title text-center">Our Clients</h2>
			<div class="row">
				<article class="col">
					<div  class="card">
						<div class="card__img">
							<img src="./gallery/brand/img01.png" alt="">
						</div>


					</div>
				</article>
				<article class="col">
					<div  class="card">
						<div class="card__img">
							<img src="./gallery/brand/img02.png" alt="">
						</div>


					</div>
				</article>
				<article class="col">
					<div  class="card">
						<div class="card__img">
							<img src="./gallery/brand/img03.png" alt="">
						</div>


					</div>
				</article>
				<article class="col">
					<div  class="card">
						<div class="card__img">
							<img src="./gallery/brand/img04.png" alt="">
						</div>


					</div>
				</article>
				<article class="col">
					<div  class="card">
						<div class="card__img">
							<img src="./gallery/brand/img01.png" alt="">
						</div>


					</div>
				</article>
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
				<div class="col-lg-6 pl-0">
					<div class="card__img">
						<img src="./gallery/login.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 wrapper">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Login</h5>
						<a href="#!" class="close" data-dismiss="modal" aria-label="Close">
							<span class="material-icons">close</span>
						</a>
					</div>
					<div class="modal-body">
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
						<p class="or"> <span>or</span></p>

						<button class="facebook"><img src="./gallery/ff.png" alt="">  login with </button>
						<button class="google"><img src="./gallery/gg.png" alt=""> login with </button>
					
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
<!-- custom -->
<script>
	$(document).ready(()=>{
		// categories
		$('.customer .carousel').slick({
			infinite: true,
			lazyLoad: 'ondemand',
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows:false,
			draggable:true,
			dots:true,
			responsive: [
			{
				breakpoint: 840,
				settings: {
					slidesToShow: 2.2,
					arrows:false,
					infinite: false,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1.4,
					arrows:false,
					infinite: false,
				}
			}

			],
		});

		$('.recommended  .carousel').slick({
			infinite: true,
			lazyLoad: 'ondemand',
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows:true,
			draggable:true,
			prevArrow:"<button class=' slick-prev'><i class='material-icons'>keyboard_arrow_left</i></button>",
			nextArrow:"<button class=' slick-next '><i class='material-icons'>keyboard_arrow_right</i></button>",
			responsive: [
			{
				breakpoint: 1030,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 840,
				settings: {
					slidesToShow: 2.2,
					arrows:false,
					infinite: false,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1.4,
					arrows:false,
					infinite: false,
				}
			}

			],
		});

		$(' .tradeN .carousel ').slick({
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
				breakpoint: 840,
				settings: {
					slidesToShow: 2.2,
					arrows:false,
					infinite: false,
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1.4,
					arrows:false,
					infinite: false,
				}
			}

			],



		});
	})
</script>

</body>
</html>
