<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>


<main class="about-us-page inner-page contact-us">
   
    <section class="main-content ">
			<div class="section-rule">
                <article class="card--lg">
					<div class="card--top">
						<div class="card--img">
							<!-- <img src="./gallery/card__img/img08.png" alt=""/> -->
							<h2 class="section__title">Contact Information</h2>
                            <div class="card__grid">
                                <div class="card__left">
                                    <img src="./gallery/logo02.png" alt="" class="logo">
                                </div>
                                <div class="card__right">
                                    <ul>
                                        <li>
                                            <span class="material-icons">email</span>
                                        </li>
                                        <li><a href="mailto:contact@linkedhill.com">info@linkedhill.com</a></li>
                                        <li><a href="mailto:info@linkedhill.com">enquries@linkedhill.com</a></li>
                                        <li></li>
                                        <li>
                                            <span class="material-icons">call</span>
                                        </li>
                                        <li><a href="mailto:+977 9875462180">+977 9875462180</a></li>
                                        <li><a href="mailto:+977 9875462180">+977 9875462180</a></li>
                                    </ul>
                                </div>
                            </div>
						</div>
						<div class="card--text">
                            <form action="" class="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name" autofocus="" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" a class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" placeholder="Contact Info"  class="form-control" id="number">
                                </div>
                                <div class="form-group">
                                    <textarea type="text" placeholder="Write Your Messages" class="form-control"></textarea>
                                </div>
                            
                                <div class="form-group d-flex">
                                    <button type="submit">Send</button>
                                </div>

                            </form>
						</div>
					</div>
				</article>	
			</div>

    </section>
             

</main>

<?php
include 'footer.php';
?>
</body>
</html>