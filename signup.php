<?php
$currentpage = 'home';
include 'header.php';
?>
<main class="home-page">
	<article class="login-form sign-up-form">
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
							<h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
							<a href="./index.php" class="close" >
								<span class="material-icons">close</span>
							</a>
						</div>
						<div class="modal-body">





							<form action="" class="form">
								<div class="form-group">
									<input type="email" placeholder="Email" autofocus="" class="form-control" id="email">
								</div>
								<div class="form-group">
									<input type="password" placeholder="Password" class="form-control" id="pass">
									<a href="#!" class="visibility input-group-text">
										<span class="material-icons">visibility_off</span>
									</a>
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="termsandCondition">
									<label class="form-check-label para" for="andCondition">Aggree to our <a href="#">Terms and conditions</a> </label>
								</div>
								<div class="form-group">
									<button type="submit">Sign Up</button>
								</div>

							</form>
							<p class="or"> <span>or</span></p>
							<button class="facebook"><img src="./gallery/ff.png" alt="">  Sign Up with </button>
							<button class="google"><img src="./gallery/gg.png" alt=""> Sign Up with </button>
							<p class="mb-0 para">Already have an account?<a href="sign-up.php" class="link" data-toggle="modal" data-target="#login">Login here</a>.</p>

						</div>
					</div>

				</div>


			</div>
		</div>
	</article>
</main>
<style>
	.join{
		display: none;
	}
	footer{
		display: none;
	}
</style>
<?php
include 'footer.php';
?>

<!--jquery  -->
<script type="text/javascript" src="./js/jquery.js"></script>
<script src="https://kit.fontawesome.com/021b940a03.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="./css/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./css/bootstrap/js/bootstrap.min.js"></script>


<!-- commom js -->
<script type="text/javascript" src="./js/commonjs.js"></script>
</body>
</html>