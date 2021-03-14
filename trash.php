







<!-- category-page -->

<h2 class="card__title title2">Property by State </h2>
<div class="form-group">	
	<select class="form-control" id="sortby">
		<option value="1" selected="">State 1</option>
		<option>State 2</option>
		<option>State 3</option>
		<option>State 4</option>
		<option>State 5</option>
	</select>
	<i class="material-icons ">unfold_more</i>
</div>

<!--  -->
<div >
	<li> 
		<!-- label for n inpur id must be match -->
		<input type="checkbox" id="all" class="">
		<span class="checkmark"></span>
		<label for="all" class="form-check-label">Any property type
		</label>
	</li>
	<li class="lev2_header"> 
		<input type="checkbox" class="" id="land">
		<span class="checkmark"></span>
		<label for="land" class="form-check-label">Land
		</label>

	</li>
	<div class="lev2">
		<li> 
			<input type="checkbox" class="" id="residental">
			<span class="checkmark"></span>
			<label for="residental" class="form-check-label">Residential
			</label>

		</li>
		<li> 
			<input type="checkbox" class="" id="commercial">
			<span class="checkmark"></span>
			<label for="commercial" class="form-check-label">Commercial
			</label>

		</li>
	</div>
	<li> 
		<input type="checkbox" class="" id="offices">
		<span class="checkmark"></span>
		<label for="offices" class="form-check-label">
			Offices
		</label>	
	</li>
	<li> 
		<input type="checkbox" class="" id="retail">
		<span class="checkmark"></span>
		<label for="retail" class="form-check-label">
			Retail
		</label>	
	</li>

	<li> 
		<input type="checkbox" class="" id="indus">
		<span class="checkmark"></span>
		<label for="indus" class="form-check-label">
			Industries/Warehouse 
		</label>	
	</li>
	<li> 
		<input type="checkbox" class="" id="land_dev">
		<span class="checkmark"></span>
		<label for="land_dev" class="form-check-label">
			Land/ Development
		</label>	
	</li>
	<li> 
		<input type="checkbox" class="" id="hotel">
		<span class="checkmark"></span>
		<label for="hotel" class="form-check-label">
			Hotel/Leisure
		</label>	
	</li>
	<li> 
		<input type="checkbox" class="" id="commercial">
		<span class="checkmark"></span>
		<label for="commercial" class="form-check-label">
			Commercial Farming
		</label>	
	</li>
	<li> 
		<input type="checkbox" class="" id="other">
		<span class="checkmark"></span>
		<label for="other" class="form-check-label">
			Others
		</label>	
	</li>
</div>

$('.lev2_header input[type=checkbox]').click(function(e){
var lev2 = $(this).parent().next().find('input[type=checkbox]');
if($(this).prop("checked") == true){
lev2.prop( "checked", true );
}
else{
lev2.prop( "checked", false );

}
});
$('.lev2 input[type=checkbox]').click(function(e){
var lev1 = $(this).parents('.lev2').prev().find('input[type=checkbox]');
if(($(this).prop("checked") == true) ){
lev1.prop( "checked", true );
}
else if($(this).parent().siblings().find('input[type=checkbox]').prop("checked") == true){
lev1.prop( "checked", true );

}
else{
lev1.prop( "checked", false );

}
});

<!-- category css -->
.brand{
font-size:15px;
font-weight: 600;
color: $para;
input[type=checkbox]{
position: absolute;
opacity: 0;
cursor: pointer;
height: 0;
width: 0;
&::checked{

}
}
label{
padding-left: 2em;
margin: 0;
}
li{
position: relative;
margin: 12px 0;
}
.checkmark {
position: absolute;
top: 0;
left: 0;
height: 22px;
width: 22px;
border: 2px solid rgba($primary-color, .17i);
border-radius: 6px;
pointer-events: none;
&:after {
content: "";
position: absolute;
display: none;
left: 7px;
top: 4px;
width: 5px;
height: 10px;
border: solid #fff;
border-width: 0 2px 2px 0;
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
transform: rotate(45deg);
}
}
input:checked ~ .checkmark {

&:after{
display: block;
border-color: $primary-color;
}
}		
}

@include responsivesm{
					padding: 9px 10px;
					margin: 2px;
					background-color: $white;
					color: $dark;
					border-radius:4px;
				}

				form{
		margin: 1em 0;
		.form-group {
			margin-bottom: 1rem;
			padding: 0px 8px;
		}
		.form-control{
			height: 45px;
			box-shadow: none;
			background-color: transparent;
			@include responsivesm{
				font-size: 14px;
			}
		}
		textarea.form-control{
			height: 90px;
		}
		button{
			width: 50%;
			margin-left: 10px;
		}
		option:first-child{
			background-color: #f2f2f2;
		}
	}