<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>


<main class="about-us-page inner-page about-us">
    <section class="screen">
        <img src="./gallery/interior02.jpg" alt="" class="cover"/>
        <div class="absolute__wrapper">
			<div class="section-rule">
                <img src="./gallery/logo.png" alt="">
				<h2 class="screen__title">Your Dream House</h2>
				<a href="#scrolldown" class="scrolldown">
					<svg xmlns="http://www.w3.org/2000/svg" width="35.5" height="57.284" viewBox="0 0 35.5 57.284">
						<g id="scroll_down" data-name="scroll down" transform="translate(-676 -788)">
							<g id="Rectangle_9" data-name="Rectangle 9" transform="translate(676 788)" fill="none" stroke="#fff" stroke-width="2">
								<rect width="35.5" height="57.284" rx="17.75" stroke="none"></rect>
								<rect x="1" y="1" width="33.5" height="55.284" rx="16.75" fill="none"></rect>
							</g>
							<circle id="Ellipse_4" data-name="Ellipse 4" cx="2.017" cy="2.017" r="2.017" transform="translate(691.33 797.682)" fill="#fff"></circle>
							<circle id="Ellipse_4-2" data-name="Ellipse 4" cx="2.017" cy="2.017" r="2.017" transform="translate(691.33 805.75)" fill="#fff" opacity="0.62"></circle>
							<circle id="Ellipse_4-3" data-name="Ellipse 4" cx="2.017" cy="2.017" r="2.017" transform="translate(691.33 813.818)" fill="#fff" opacity="0.29"></circle>
							<path id="Union_4" data-name="Union 4" d="M0,8.448V0H8.448V1.352h-7.1v7.1Z" transform="translate(693.518 833.834) rotate(-135)" fill="#fff"></path>
						</g>
					</svg>
				</a>
			</div>
		</div>
    </section>
    <section class="main-content " id="scrolldown">
			<div class="section-rule">
                <h2 class="section__title">About Us</h2>
                <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, ipsa, quia incidunt aliquam quae exercitationem facere deleniti ad, voluptate dolorem molestias consequuntur illum saepe dignissimos aspernatur! Voluptas amet sed at sapiente harum delectus, quas enim repellat rem repellendus! Totam, exercitationem!</p>
                <article class="card--lg">
					<div class="card--top">
						<!-- image size is 640 * 420 -->
						<div class="card--img">
							<img src="./gallery/card__img/img08.png" alt=""/>
						</div>
						<div class="card--text">
							<h2 class="section__title">“Connecting every student with the best instructors of the nation”</h2>
							<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan tincidunt rutrum tempor, euismod tellus duis pellentesque nibh vulputate. Ullamcorper mus commodo, augue laoreet lectus vivamus. Phasellus mauris egestas faucibus sed. Nunc eget enim, pellentesque maecenas nulla vestibulum. Cursus dignissim maecenas id suspendisse at dictum cras tempor. Eget aliquet morbi tincidunt blandit sed eu, mus. Turpis arcu at turpis mauris, cursus sed integer fermentum. Etiam sodales in dolor faucibus fermentum viverra duis sed pellentesque. Tortor in libero scelerisque semper condimentum odio aenean. Quis diam ullamcorper aliquam proin elementum enim platea in mauris. Varius id quam volutpat viverra neque. Ultrices laoreet ornare in tincidunt. Commodo nam lobortis et, lacus felis. Ultrices laoreet ornare in tincidunt. </p>
						</div>
					</div>
				</article>	
			</div>

    </section>
    <section class="team ">
		<div class="section-rule">
            <h2 class="section__title">
                Our Team
            </h2>
            <div class="flex-wrapper">
                <article class="team--card">
                    <div class="card__img">
                        <img src="./gallery/pp1.png" alt="">
                    </div>
                    <div class="card__body">
                        <h2 class="card__title">RamBaran Yadav</h2>
                        <p class="para">Co-Founder, SF Media</p>
                    </div>
                </article>
                <article class="team--card">
                    <div class="card__img">
                        <img src="./gallery/pp1.png" alt="">
                    </div>
                    <div class="card__body">
                        <h2 class="card__title">RamBaran Yadav</h2>
                        <p class="para">Co-Founder, SF Media</p>
                    </div>
                </article>
                <article class="team--card">
                    <div class="card__img">
                        <img src="./gallery/pp1.png" alt="">
                    </div>
                    <div class="card__body">
                        <h2 class="card__title">RamBaran Yadav</h2>
                        <p class="para">Co-Founder, SF Media</p>
                    </div>
                </article>
                <article class="team--card">
                    <div class="card__img">
                        <img src="./gallery/pp1.png" alt="">
                    </div>
                    <div class="card__body">
                        <h2 class="card__title">RamBaran Yadav</h2>
                        <p class="para">Co-Founder, SF Media</p>
                    </div>
                </article>
                <article class="team--card">
                    <div class="card__img">
                        <img src="./gallery/pp1.png" alt="">
                    </div>
                    <div class="card__body">
                        <h2 class="card__title">RamBaran Yadav</h2>
                        <p class="para">Co-Founder, SF Media</p>
                    </div>
                </article>
                <article class="team--card">
                    <div class="card__img">
                        <img src="./gallery/pp1.png" alt="">
                    </div>
                    <div class="card__body">
                        <h2 class="card__title">RamBaran Yadav</h2>
                        <p class="para">Co-Founder, SF Media</p>
                    </div>
                </article>
            </div>
            <div class="button--wrapper">
            <button onclick="window.location.href='#'">View More</button>
            </div>
        </div>
    </section>            

</main>

<?php
include 'footer.php';
?>
</body>
</html>