<?php
$currentpage = 'other';
include 'header.php';
include './template/nav.php';
?>
<link rel="stylesheet" href="./node_modules/nouislider/distribute/nouislider.min.css">
<nav class="breadcrumb-wrapper">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">For Sale</a></li>
		<li class="breadcrumb-item active" aria-current="page">State 2, Mahottali</li>
	</ol>
</nav>

<main class="category-page  common-page">
	<section class="section-rule pt-0">
		<div class="row">
			<aside class="filter p-0 col-lg-3">
				<div class="sticky">
					<a href="#!" class="close d-lg-none">
						<span class="material-icons"> close</span>
					</a>
					<h2 class="card__title title1">Search Filter</h2>
					<div class="form-row top-check">
						<div class="form-group form-check">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck1" checked="">
							<label class="form-check-label" for="exampleCheck1">Buy</label>
						</div>
						<div class="form-group form-check">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck2">
							<label class="form-check-label" for="exampleCheck2">Rent</label>
						</div>
						
						<div class="form-group form-check">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck3">
							<label class="form-check-label" for="exampleCheck3">Share</label>
						</div>
						<div class="form-group form-check">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck4">
							<label class="form-check-label" for="exampleCheck4">Loans</label>
						</div>
						<div class="form-group form-check">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck7">
							<label class="form-check-label" for="exampleCheck7">Insurance</label>
						</div>
						
						<div class="form-group form-check">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck5">
							<label class="form-check-label" for="exampleCheck5">Property Management</label>
						</div>
						<div class="form-group form-check trade">
							<input type="radio" name="exampleRadios" class="form-check-input" id="exampleCheck6">
							<label class="form-check-label" for="exampleCheck6">Tradelink</label>
						</div>
						
					</div>
					
					
					<div class="form-group">	

						<input type="text" class="form-control" placeholder="Search by region or postcode" autofocus="">

						
					</div>

					<p class="para d-flex justify-content-between"><a href="#!" >Provinces  profile </a><span class="material-icons" data-toggle="tooltip" data-placement="bottom" title="Information about Provinces  profile">help</span></p>
					
					
					<h2 class="card__title title2">Property Types</h2>
					<ul class="brand">
						<div class="form-row">
							<div class="form-group form-check">
								<input type="checkbox"  class="form-check-input" id="pt01">
								<label class="form-check-label" for="pt01">
									<img src="./gallery/filter/003-house.png" alt="">
									<h2 class="small__title">Home</h2>
								</label>
							</div>
							<div class="form-group form-check">
								<input type="checkbox"  class="form-check-input" id="pt02">
								<label class="form-check-label" for="pt02">
									<img src="./gallery/filter/005-architect.png" alt="">
									<h2 class="small__title">Land</h2>

								</label>
							</div>
							<div class="form-group form-check">
								<input type="checkbox"  class="form-check-input" id="pt03">
								<label class="form-check-label" for="pt03">
									<img src="./gallery/filter/007-appartments-1.png" alt="">

									<h2 class="small__title">Appartment</h2>
								</label>
							</div>
							<div class="form-group form-check">
								<input type="checkbox"  class="form-check-input" id="pt04">
								<label class="form-check-label" for="pt04">
									<img src="./gallery/filter/009-building.png" alt="">
									<h2 class="small__title">Flat</h2>
								</label>
							</div>

							<div class="form-group form-check">
								<input type="checkbox"  class="form-check-input" id="pt05">
								<label class="form-check-label" for="pt05">
									<img src="./gallery/filter/hotel.png" alt="">
									<h2 class="small__title">Hostel</h2>
								</label>
							</div>



						</div>

					</ul>


					<ul class="nav flex-column range">
						<h2 class="card__title title1">Price</h2>
						<div class="example outer_link">
							<div class="d-flex flex__parent">
								<div class="form-group d-flex">
									<label for="sortby"></label>
									<select id="input-select"></select>
									<i class="material-icons ">unfold_more</i>
								</div>
								<div class="form-group d-flex">
									<label for="sortby"></label>
									<select id="input-select2"></select>
									<i class="material-icons ">unfold_more</i>
								</div>
							</div>
							<div id="html5"></div>

						</div>
					</ul>
					<ul class="nav flex-column">
						<h2 class="card__title title2">Land Area</h2>

						<div class="d-flex flex__parent">
							<div class="form-group d-flex">
								<select >
									<option value="1" selected="">Area (min)</option>
									<option>1000 sq.</option>
									<option>2000 sq.</option>
									<option>3000 sq.</option>
									<option>4000 sq.</option>
								</select>
								<i class="material-icons ">unfold_more</i>
							</div>
							<div class="form-group d-flex">
								<select>
									<option value="1" selected="">Area (m)</option>
									<option>1000 sq.</option>
									<option>2000 sq.</option>
									<option>3000 sq.</option>
									<option>4000 sq.</option>
								</select>
								<i class="material-icons ">unfold_more</i>
							</div>
						</div>
					</ul>
					<ul class="nav flex-column">
						<h2 class="card__title title2">Bed Rooms</h2>

						<div class="d-flex flex__parent">
							<div class="form-group d-flex">
								<select >
									<option value="1" selected="">max</option>
									<option>1000 sq.</option>
									<option>2000 sq.</option>
									<option>3000 sq.</option>
									<option>4000 sq.</option>
								</select>
								<i class="material-icons ">unfold_more</i>
							</div>
							<div class="form-group d-flex">
								<select>
									<option value="1" selected="">max</option>
									<option>1000 sq.</option>
									<option>2000 sq.</option>
									<option>3000 sq.</option>
									<option>4000 sq.</option>
								</select>
								<i class="material-icons ">unfold_more</i>
							</div>
						</div>
					</ul>
					<ul class="nav flex-column">
						<h2 class="card__title title2">Bathrooms</h2>

						<div class="d-flex flex__parent">
							<div class="form-group d-flex">
								<select >
									<option value="1" selected="">min</option>
									<option>1000 sq.</option>
									<option>2000 sq.</option>
									<option>3000 sq.</option>
									<option>4000 sq.</option>
								</select>
								<i class="material-icons ">unfold_more</i>
							</div>
							<div class="form-group d-flex">
								<select>
									<option value="1" selected="">max</option>
									<option>1000 sq.</option>
									<option>2000 sq.</option>
									<option>3000 sq.</option>
									<option>4000 sq.</option>
								</select>
								<i class="material-icons ">unfold_more</i>
							</div>
						</div>
					</ul>


					<p class="card__title title2">
						<a  data-toggle="collapse" href="#!" class="adsTrigger">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-filter-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
							</svg>
							Advance search
						</a>
					</p>
					<div class="collapse" id="advanceSearch">

						<ul class="nav flex-column">
							<h2 class="card__title title2">Parking</h2>

							<div class="d-flex flex__parent">
								<div class="form-group d-flex">
									<select >
										<option value="1" selected="">min</option>
										<option>1000 sq.</option>
										<option>2000 sq.</option>
										<option>3000 sq.</option>
										<option>4000 sq.</option>
									</select>
									<i class="material-icons ">unfold_more</i>
								</div>
								<div class="form-group d-flex">
									<select>
										<option value="1" selected="">max</option>
										<option>1000 sq.</option>
										<option>2000 sq.</option>
										<option>3000 sq.</option>
										<option>4000 sq.</option>
									</select>
									<i class="material-icons ">unfold_more</i>
								</div>
							</div>
						</ul>
					</div>

					<button class="submit"> 
						Search	
					</button>
				</div>

			</aside>
			<aside class="pr-0 col-lg-9">
				<div class="title-wrapper">
					<div class="title__part">
						<h2 class="section-title">Shop & Retail Property For Sale in Australia</h2>
						<p>4000+ properties found</p>

					</div>
					<div class="d-flex">

						<div class="form-group d-flex">
							<label for="sortby">Sort by:</label>
							<select class="form-control" id="sortby">
								<option value="1" selected="">Popularity</option>
								<option>Lower to Higher (Price)</option>
								<option>Higher to Lower (Price)</option>
								<option>Latest Property</option>
							</select>
							<i class="material-icons ">unfold_more</i>
						</div>
						<button type="button" class="filter-btn" data-toggle="modal" data-target="#filterModal">
							<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15 8H14C13.4 8 13 7.6 13 7C13 6.4 13.4 6 14 6H15C15.6 6 16 6.4 16 7C16 7.6 15.6 8 15 8ZM15 3H7.7C7.4 3.6 6.7 4 6 4C4.9 4 4 3.1 4 2C4 0.9 4.9 0 6 0C6.7 0 7.4 0.4 7.7 1H15C15.6 1 16 1.4 16 2C16 2.6 15.6 3 15 3ZM2 3H1C0.4 3 0 2.6 0 2C0 1.4 0.4 1 1 1H2C2.6 1 3 1.4 3 2C3 2.6 2.6 3 2 3ZM1 6H8.3C8.7 5.4 9.3 5 10 5C11.1 5 12 5.9 12 7C12 8.1 11.1 9 10 9C9.3 9 8.6 8.6 8.3 8H1C0.4 8 0 7.6 0 7C0 6.4 0.4 6 1 6ZM1 11H2C2.6 11 3 11.4 3 12C3 12.6 2.6 13 2 13H1C0.4 13 0 12.6 0 12C0 11.4 0.4 11 1 11ZM7.7 11H15C15.6 11 16 11.4 16 12C16 12.6 15.6 13 15 13H7.7C7.3 13.6 6.7 14 6 14C4.9 14 4 13.1 4 12C4 10.9 4.9 10 6 10C6.7 10 7.4 10.4 7.7 11Z" fill="#269116"/>
							</svg>

							<label for="">Filter </label>	
						</button>
					</div>
				</div>
				<hr>
				<div class="feature recommended">
					<div class="row">

						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img01.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR. 120,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>

						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img07.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR. 190,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>



						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img08.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR 390,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>


						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img07.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR. 190,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>


						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img08.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR 390,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>


						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img07.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR. 190,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>

						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img01.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR. 120,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>

						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img07.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR. 190,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>



						<article class="col-6 col-xl-4">
							<a class="card" href="./single-page.php">
								<div class="card__img">
									<img src="./gallery/card__img/img08.png" alt="">
								</div>
								<div class="card__body">
									<h2 class="card__title">Apartment In Long St.</h2>
									<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
									<h2 class="price">NPR 390,000</h2>
									<div class="card__action d-flex">
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
												<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
													<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
												</g>
											</svg>2 Beds</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
												<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
											</svg>3 Baths</label>

										</div>
										<div>

											<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
												<g id="marker" transform="translate(0 0)">
													<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
													<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
													<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
													<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
													<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
													<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
												</g>
											</svg>4 Aana</label>

										</div>
										<div>
											<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
												<g id="transportation" transform="translate(0 -53)">
													<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
														<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
															<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
														<g id="Group_58" data-name="Group 58">
															<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
														<g id="Group_60" data-name="Group 60">
															<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
														<g id="Group_62" data-name="Group 62">
															<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
														</g>
													</g>
													<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
														<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
															<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
														</g>
													</g>
												</g>
											</svg>2 Parking</label>

										</div>

									</div>
								</div>
							</a>
						</article>

					</div>
					
				</div>

				<nav aria-label="...">
					<ul class="pagination">
						<li class="page-item active">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item " aria-current="page">
							<a class="page-link" href="#">
								2
							</a>
						</li>
						<li class="page-item " aria-current="page">
							<span class="page-link">
								...
							</span>
						</li>
						<li class="page-item"><a class="page-link" href="#">24</a></li>
						<li class="page-item next">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>

			</aside>	
		</div>
	</section>
	<section class="feature recommended">

		<div class="section-rule">
			<h2 class="section__title">Recommended</h2>
			
			<div class="row">
				<article class="col-6 col-xl-3">
					<a class="card" href="./single-page.php">
						<div class="card__img">
							<img src="./gallery/card__img/img01.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Apartment In Long St.</h2>
							<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
							<h2 class="price">NPR. 120,000</h2>
							<div class="card__action d-flex">
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
										<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
											<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
										</g>
									</svg>2 Beds</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
										<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
									</svg>3 Baths</label>

								</div>
								<div>

									<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
										<g id="marker" transform="translate(0 0)">
											<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
											<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
											<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
											<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
											<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
											<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
										</g>
									</svg>4 Aana</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
										<g id="transportation" transform="translate(0 -53)">
											<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
												<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
													<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
												<g id="Group_58" data-name="Group 58">
													<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
												<g id="Group_60" data-name="Group 60">
													<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
												<g id="Group_62" data-name="Group 62">
													<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
												<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
													<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
												</g>
											</g>
										</g>
									</svg>2 Parking</label>

								</div>

							</div>
						</div>
					</a>
				</article>

				<article class="col-6 col-xl-3">
					<a class="card" href="./single-page.php">
						<div class="card__img">
							<img src="./gallery/card__img/img07.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Apartment In Long St.</h2>
							<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
							<h2 class="price">NPR. 190,000</h2>
							<div class="card__action d-flex">
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
										<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
											<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
										</g>
									</svg>2 Beds</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
										<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
									</svg>3 Baths</label>

								</div>
								<div>

									<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
										<g id="marker" transform="translate(0 0)">
											<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
											<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
											<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
											<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
											<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
											<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
										</g>
									</svg>4 Aana</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
										<g id="transportation" transform="translate(0 -53)">
											<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
												<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
													<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
												<g id="Group_58" data-name="Group 58">
													<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
												<g id="Group_60" data-name="Group 60">
													<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
												<g id="Group_62" data-name="Group 62">
													<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
												<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
													<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
												</g>
											</g>
										</g>
									</svg>2 Parking</label>

								</div>

							</div>
						</div>
					</a>
				</article>



				<article class="col-6 col-xl-3">
					<a class="card" href="./single-page.php">
						<div class="card__img">
							<img src="./gallery/card__img/img08.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Apartment In Long St.</h2>
							<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
							<h2 class="price">NPR 390,000</h2>
							<div class="card__action d-flex">
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
										<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
											<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
										</g>
									</svg>2 Beds</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
										<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
									</svg>3 Baths</label>

								</div>
								<div>

									<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
										<g id="marker" transform="translate(0 0)">
											<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
											<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
											<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
											<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
											<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
											<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
										</g>
									</svg>4 Aana</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
										<g id="transportation" transform="translate(0 -53)">
											<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
												<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
													<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
												<g id="Group_58" data-name="Group 58">
													<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
												<g id="Group_60" data-name="Group 60">
													<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
												<g id="Group_62" data-name="Group 62">
													<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
												<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
													<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
												</g>
											</g>
										</g>
									</svg>2 Parking</label>

								</div>

							</div>
						</div>
					</a>
				</article>


				<article class="col-6 col-xl-3">
					<a class="card" href="./single-page.php">
						<div class="card__img">
							<img src="./gallery/card__img/img07.png" alt="">
						</div>
						<div class="card__body">
							<h2 class="card__title">Apartment In Long St.</h2>
							<p class="small__title">127 Kent Street, Sydney, NSW 2000</p>
							<h2 class="price">NPR. 190,000</h2>
							<div class="card__action d-flex">
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="20.593" height="13.353" viewBox="0 0 20.593 13.353">
										<g id="bed_2_" data-name="bed (2)" transform="translate(0)">
											<path id="Union_5" data-name="Union 5" d="M16.974,13.353a.4.4,0,0,1-.4-.4V11.744H4.022v1.207a.4.4,0,0,1-.4.4H1.207a.4.4,0,0,1-.4-.4V11.676A1.208,1.208,0,0,1,0,10.538V8.125A1.208,1.208,0,0,1,.8,6.987V2.253A2.233,2.233,0,0,1,2.815,0H17.777a2.234,2.234,0,0,1,2.011,2.253V6.987a1.208,1.208,0,0,1,.8,1.137v2.414a1.208,1.208,0,0,1-.8,1.137v1.276a.4.4,0,0,1-.4.4Zm.4-.8h1.609v-.8H17.375Zm-15.766,0H3.217v-.8H1.609ZM.8,10.538a.4.4,0,0,0,.4.4h18.18a.4.4,0,0,0,.4-.4v-.4H11.905a.4.4,0,1,1,0-.8h7.883V8.125a.4.4,0,0,0-.4-.4H1.207a.4.4,0,0,0-.4.4V9.331H8.688a.4.4,0,1,1,0,.8H.8Zm14.56-7.883a1.208,1.208,0,0,1,1.207,1.207V5.349A2.019,2.019,0,0,1,18.14,6.918h.844V2.253C18.984,1.6,18.446.8,17.777.8H2.815C2.147.8,1.609,1.6,1.609,2.253V6.918h.844A2.018,2.018,0,0,1,4.022,5.349V3.861A1.208,1.208,0,0,1,5.229,2.655H8.688A1.208,1.208,0,0,1,9.895,3.861V5.309h.8V3.861a1.208,1.208,0,0,1,1.207-1.207ZM3.287,6.918h14.02a1.208,1.208,0,0,0-1.137-.8H4.424A1.208,1.208,0,0,0,3.287,6.918ZM11.5,3.861V5.309h4.264V3.861a.4.4,0,0,0-.4-.4H11.905A.4.4,0,0,0,11.5,3.861Zm-6.677,0V5.309H9.09V3.861a.4.4,0,0,0-.4-.4H5.229A.4.4,0,0,0,4.826,3.861ZM9.895,9.734a.4.4,0,1,1,.4.4A.4.4,0,0,1,9.895,9.734Z" transform="translate(0)" fill="#747474"/>
										</g>
									</svg>2 Beds</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="16.611" height="17.402" viewBox="0 0 16.611 17.402">
										<path id="bathroom" d="M16.611,9.279h-3.3V2.957a2.957,2.957,0,0,0-5.912-.1H6.279v1.02H9.542V2.855H8.423a1.937,1.937,0,0,1,3.872.1V9.279H0V10.3H.874V12.45A3.739,3.739,0,0,0,3.3,15.944V17.4h1.02V16.171q.144.011.29.011H12q.146,0,.29-.011V17.4h1.02V15.944a3.739,3.739,0,0,0,2.423-3.495V10.3h.874ZM14.717,12.45A2.716,2.716,0,0,1,12,15.162h-7.4A2.716,2.716,0,0,1,1.894,12.45V10.3H3.808v2.538h5.37V10.3h5.539ZM8.158,10.3v1.518H4.827V10.3Zm0,0" fill="#747474"/> 
									</svg>3 Baths</label>

								</div>
								<div>

									<label><svg xmlns="http://www.w3.org/2000/svg" width="18.469" height="18.52" viewBox="0 0 18.469 18.52">
										<g id="marker" transform="translate(0 0)">
											<path id="Path_43" data-name="Path 43" d="M382.4,49.9a1.43,1.43,0,1,0-1.43,1.43A1.431,1.431,0,0,0,382.4,49.9Zm-1.43.7a.7.7,0,1,1,.7-.7A.7.7,0,0,1,380.969,50.6Zm0,0" transform="translate(-368.537 -47.066)" fill="#747474"/>
											<path id="Path_44" data-name="Path 44" d="M57.644,189.847a1.558,1.558,0,1,0-1.558,1.558A1.56,1.56,0,0,0,57.644,189.847Zm-1.558.829a.829.829,0,1,1,.829-.829A.83.83,0,0,1,56.085,190.676Zm0,0" transform="translate(-52.948 -182.832)" fill="#747474"/>
											<path id="Path_45" data-name="Path 45" d="M17.193,140.688a3.391,3.391,0,0,0-4.29,0,4,4,0,0,0-1.215,4.106,7.349,7.349,0,0,0,2.363,3.18H9.6L3.87,143.282l3.182-1.73a.365.365,0,0,0-.348-.64l-3.119,1.7v-.919a7.546,7.546,0,0,0,2.586-3.111,3.641,3.641,0,0,0-1.036-3.826,3.027,3.027,0,0,0-3.83,0A3.564,3.564,0,0,0,.221,138.41a7.5,7.5,0,0,0,2.634,3.278v1.532a.369.369,0,0,0,.134.282l6.247,5.118a.365.365,0,0,0,.231.083h5.581a.487.487,0,0,0,.313-.15,8.707,8.707,0,0,0,2.993-3.571,4.085,4.085,0,0,0-1.162-4.294ZM.919,138.2a2.846,2.846,0,0,1,.848-2.884,2.3,2.3,0,0,1,2.905,0,2.919,2.919,0,0,1,.808,3.028,6.648,6.648,0,0,1-2.26,2.7,6.7,6.7,0,0,1-2.3-2.845Zm16.745,6.548a7.668,7.668,0,0,1-2.616,3.119,7.72,7.72,0,0,1-2.663-3.284,3.287,3.287,0,0,1,.98-3.331,2.673,2.673,0,0,1,3.365,0,3.371,3.371,0,0,1,.934,3.5Zm0,0" transform="translate(-0.083 -130.183)" fill="#747474"/>
											<path id="Path_46" data-name="Path 46" d="M458.584,397.637a1.721,1.721,0,1,0,1.721,1.721A1.723,1.723,0,0,0,458.584,397.637Zm0,2.714a.992.992,0,1,1,.992-.992A.993.993,0,0,1,458.584,400.35Zm0,0" transform="translate(-443.619 -386.11)" fill="#747474"/>
											<path id="Path_47" data-name="Path 47" d="M311.552,10.09a.363.363,0,0,0,.174-.044l3.052-1.66a.365.365,0,0,0,.19-.32V6.941a6.734,6.734,0,0,0,2.306-2.782A3.29,3.29,0,0,0,316.338.7a2.741,2.741,0,0,0-3.468,0,3.22,3.22,0,0,0-.979,3.307,6.694,6.694,0,0,0,2.349,2.932v.908l-2.862,1.556A.367.367,0,0,0,311.552,10.09ZM312.589,3.8a2.5,2.5,0,0,1,.744-2.532,2.01,2.01,0,0,1,2.543,0,2.563,2.563,0,0,1,.709,2.659A5.845,5.845,0,0,1,314.6,6.3,5.891,5.891,0,0,1,312.589,3.8Zm0,0" transform="translate(-302.173 -0.083)" fill="#747474"/>
											<path id="Path_48" data-name="Path 48" d="M266.825,343.593a.365.365,0,1,0-.364-.381A.369.369,0,0,0,266.825,343.593Zm0,0" transform="translate(-258.738 -332.925)" fill="#747474"/>
										</g>
									</svg>4 Aana</label>

								</div>
								<div>
									<label ><svg xmlns="http://www.w3.org/2000/svg" width="40.402" height="31.251" viewBox="0 0 40.402 31.251">
										<g id="transportation" transform="translate(0 -53)">
											<g id="Group_57" data-name="Group 57" transform="translate(0 53)">
												<g id="Group_56" data-name="Group 56" transform="translate(0 0)">
													<path id="Path_118" data-name="Path 118" d="M38.857,64.611l-.881-.932-3.091-8.331A3.625,3.625,0,0,0,31.51,53H9.436A3.613,3.613,0,0,0,6.06,55.348L3.013,63.575,1.744,64.749A4.96,4.96,0,0,0,0,68.522V80.66a3.609,3.609,0,0,0,3.609,3.591H5.888A3.609,3.609,0,0,0,9.5,80.66V78.9h21.41V80.66a3.609,3.609,0,0,0,3.609,3.591h2.279A3.609,3.609,0,0,0,40.4,80.66V68.2A5.006,5.006,0,0,0,38.857,64.611ZM7.683,55.935a1.867,1.867,0,0,1,1.752-1.209H31.519a1.879,1.879,0,0,1,1.752,1.209l2.693,7.252H33.953a5.921,5.921,0,0,0-11.715,0H4.99Zm24.509,7.252h-8.21a4.193,4.193,0,0,1,8.21,0ZM7.77,80.66a1.877,1.877,0,0,1-1.882,1.865H3.609A1.877,1.877,0,0,1,1.727,80.66V78.4a3.506,3.506,0,0,0,1.882.5H7.77Zm30.906,0a1.877,1.877,0,0,1-1.882,1.865H34.515a1.883,1.883,0,0,1-1.882-1.865V78.9h4.161a3.506,3.506,0,0,0,1.882-.5V80.66Zm-1.882-3.488H3.609a1.862,1.862,0,0,1-1.882-1.847v-6.8a3.241,3.241,0,0,1,1.148-2.469l.035-.035,1.174-1.105H36.776l.829.889c.009.017.035.026.043.043A3.254,3.254,0,0,1,38.667,68.2v7.122h.009A1.868,1.868,0,0,1,36.794,77.172Z" transform="translate(0 -53)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_59" data-name="Group 59" transform="translate(4.057 68.367)">
												<g id="Group_58" data-name="Group 58">
													<path id="Path_119" data-name="Path 119" d="M54.338,231H47.863a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,54.338,231Zm-.863,4.489H48.727v-2.763h4.748Z" transform="translate(-47 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_61" data-name="Group 61" transform="translate(28.143 68.367)">
												<g id="Group_60" data-name="Group 60">
													<path id="Path_120" data-name="Path 120" d="M333.338,231h-6.475a.866.866,0,0,0-.863.863v4.489a.866.866,0,0,0,.863.863h6.475a.866.866,0,0,0,.863-.863v-4.489A.866.866,0,0,0,333.338,231Zm-.863,4.489h-4.748v-2.763h4.748Z" transform="translate(-326 -231)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_63" data-name="Group 63" transform="translate(15.168 71.993)">
												<g id="Group_62" data-name="Group 62">
													<path id="Path_121" data-name="Path 121" d="M184.9,273h-8.339a.863.863,0,1,0,0,1.727H184.9a.863.863,0,1,0,0-1.727Z" transform="translate(-175.7 -273)" fill="#3f8809"/>
												</g>
											</g>
											<g id="Group_65" data-name="Group 65" transform="translate(15.168 69.316)">
												<g id="Group_64" data-name="Group 64" transform="translate(0 0)">
													<path id="Path_122" data-name="Path 122" d="M184.9,242h-8.339a.863.863,0,0,0,0,1.727H184.9a.863.863,0,0,0,0-1.727Z" transform="translate(-175.7 -242)" fill="#3f8809"/>
												</g>
											</g>
										</g>
									</svg>2 Parking</label>

								</div>

							</div>
						</div>
					</a>
				</article>

			</div>
		</div>

	</section>
	


</main>





<?php
include 'footer.php';
?>

<script src="./node_modules/nouislider/distribute/nouislider.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(function () {

			// $('[data-toggle="tooltip"]').tooltip();
			// $('.collapse').collapse()
			$('[data-toggle="tooltip"]').click(function(t) {
				$('[data-toggle="tooltip"]').tooltip('toggle')
			});
		});





		var html5Slider = document.getElementById('html5');
		var select = document.getElementById('input-select');
		var select2 = document.getElementById('input-select2');

		for (var i = 0; i <= 200000;) {
			var option = document.createElement("option");
			option.text = `Rs: ${i}`;
			option.value = i;
			select2.appendChild(option);
			i+=20000;
		}
		for (var i = 0; i <= 200000;) {
			var option = document.createElement("option");
			option.text = `Rs: ${i}`;
			option.value = i;
			select.appendChild(option);
			i+=20000;
		}

		noUiSlider.create(html5Slider, {
			start: [0, 20000],
			step:20000,
			connect: true,
			range: {
				'min':0,
				'max': 200000
			}
		});

		html5Slider.noUiSlider.on('update', function (values, handle) {
			var value = values[handle];
			// console.log(value)
			if(handle===0){
				var value = values[handle];
				select.value = Math.round(value);
			}
			else{
				var value = values[handle];
				select2.value = Math.round(value);
			}
			
		});

		select.addEventListener('change', function () {
			html5Slider.noUiSlider.set([this.value, null]);
		});

		select2.addEventListener('change', function () {
			html5Slider.noUiSlider.set([null, this.value]);
		});
		let toggle = 0;
		$('.filter-btn').click(()=>{
			toggle= !toggle;
			event.stopPropagation();
			if($('.filter').hasClass('active')){
				$('.filter').removeClass('active');
			}
			else{
				$('.filter').addClass('active');
			}

		});
		$('.adsTrigger').click(function(e){
			$('#advanceSearch').slideToggle();
		})
		$('.close').click(function(event){
			event.stopPropagation();
			$('.filter').removeClass('active');
		})
		$('.sticky').click(()=>{
			event.stopPropagation();
			$('.filter').addClass('active');

		});
		$('body').click(()=>{
			$('.filter').removeClass('active');
		})

		// $('.carousel').slick({
		// 	infinite: true,
		// 	lazyLoad: 'ondemand',
		// 	slidesToShow: 4,
		// 	slidesToScroll: 1,
		// 	arrows:true,
		// 	draggable:true,
		// 	prevArrow:"<button class=' slick-prev'><i class='material-icons'>keyboard_arrow_left</i></button>",
		// 	nextArrow:"<button class=' slick-next '><i class='material-icons'>keyboard_arrow_right</i></button>",
		// 	responsive: [
		// 	{
		// 		breakpoint: 1030,
		// 		settings: {
		// 			slidesToShow: 3,
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 840,
		// 		settings: {
		// 			slidesToShow: 2.2,
		// 			arrows:false,
		// 			infinite: false,
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 600,
		// 		settings: {
		// 			slidesToShow: 1.4,
		// 			arrows:false,
		// 			infinite: false,
		// 		}
		// 	}

		// 	]
		// });

	});
</script>
</body>
</html>
