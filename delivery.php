<?php include("includes/header.php"); ?>

	<div class="container-bg-home">
	

<!-- tabs button-->
		
		<div class="bord-botom">	
		<div class="slect-tab">
			<ul class="tabs">
				<li data-tab-target="#delivery" class="active tab">Delivery</li>
				<li data-tab-target="#pickup" class="tab">Pickup</li>
				
			</ul>
		</div>

	</div>
	<div class="tabb">
		<div class="tab-content">
			<!--first-->
			<div id="delivery" data-tab-content class="active">
				<div class="contact-1">
      <!-- tab start second -->

     <div class="w4-bar w4-black">
  <button class="w4-bar-item w3-button" onclick="openCity('order online')">Order online</button>
  <button class="w4-bar-item w3-button" onclick="openCity('Open now')">Open now</button>
  <button class="w4-bar-item w3-button" onclick="openCity('Best of')">Best of</button>
  <button class="w4-bar-item w3-button" onclick="openCity('Medical only')">Medical only</button>
  <button class="w4-bar-item w3-button" onclick="openCity('Recreational only')">Recreational only</button>
</div>
<div id="order online" class="w4-container city"style="display:none"><h2>Order online</h2></div>
<div id="Open now" class="w4-container city" style="display:none"><h2>Open now</h2><p></div>
<div id="Medical only" class="w4-container city" style="display:none"><h2>Best of</h2></div>
<div id="Best of" class="w4-container city" style="display:none"><h2>Medical only</h2></div>
<div id="Recreational only" class="w4-container city" style="display:none"><h2>Recreational only</h2></div>
<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  // alert('hiii');
  document.getElementById(cityName).style.display = "block";
  document.getElementById('hide1').style.display = "none";
  // document.getElementById('hide2').style.display = "none";    
}
</script>
  <!-- tab start second end -->

<div class="main-java" id="hide1">

				<div class="ukia-bg">
			<h3 class="showing-rst">Showing results for <span class="ca-uk">Ukiah, CA</span><a href="#" class="color-address"><i class="fas fa-map-marker-alt"></i>Set delivery address</a></h3>
				</div>

<div class="recomanded">
<p class="sorting">Sort by</p>
<select id="pet-select">
    <option value="">Recommended</option>
    <option value="Top rated<">Top rated</option>
    <option value="Largest menu">Largest menu</option>

</select>
</div>
<!-- boxing start  -->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/wp-one.jpg"></a></div>
         <div class="somke-2">
            <h3>West Coast Smoke - Recreational</h3>
            <div class="satrter">
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star  checked"></span>
               <span class="fa fa-star"></span><i class="sat-left">4.3 (25)</i>
            </div>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>100 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
               <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span>
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 1st boxing start end  -->
<!-- 2nd boxing start  -->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/wp-two.jpg"></a></div>
         <div class="somke-2">
            <h3>Revolution Emporium</h3>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>106 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
          <!--      <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span> -->
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 2nd boxing start end  -->
</div>


				</div>
			</div>
			<!--second-->
			<div id="pickup" data-tab-content>
			<div class="contact-1">

		<!-- 2nd row imge start Delivery services -->
	<div class="ukia-bg">
			<h3 class="showing-rst">Showing results for <span class="ca-uk">Ukiah, CA</span></h3>
				</div>
		<div class="view-bg">
		<div class="brand-1">
			<h2>Delivery Services</h2>
		</div>
		<div class="brand-2"><p>view all<i class="fas fa-greater-than"></i></p></div>	
		</div>
		<div class="Services-img-cl">
		<div class="services-brand-1">
			<a href="#"><img src="img/brand-7.jpg"><i class="far fa-heart"></i></a>

			<div class="irvine">
			<h5>Revolution Emporium - Ukiah</h5>
							<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star">4.7(687)</span>
			<p>Medical & Recreational<p/>


			</div>

		</div>

		<div class="services-brand-1">
			<a href="#"><img src="img/brand-8.jpg"><i class="far fa-heart"></i></a>
				<div class="irvine">
			<h5>Compassionate Heart - Ukiah</h5>
								<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star">4.7(687)</span>
			<p>Medical & Recreational<p/>


			</div>
		</div>
		<div class="services-brand-1">
			<a href="#"><img src="img/brand-9.jpg"><i class="far fa-heart"></i></a>
			<div class="irvine">
			<h5>Mission Grown Medicinals</h5>
							<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star checkeed"></span>
<span class="fa fa-star">4.7(687)</span>
			<p>Medical & Recreational<p/>


			</div>
		</div>
	
		
		</div>
<!-- 1th boxing start  -->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/wp-three.jpg"></a></div>
         <div class="somke-2">
            <h3>West Coast Smoke - Recreational</h3>
            <div class="satrter">
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star  checked"></span>
               <span class="fa fa-star"></span><i class="sat-left">4.3 (25)</i>
            </div>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>100 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
               <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span>
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 1fst boxing end  -->

<!-- 2nd boxing satrt-->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/wp-four.jpg"></a></div>
         <div class="somke-2">
            <h3>West Coast Smoke - Recreational</h3>
            <div class="satrter">
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star checked"></span>
               <span class="fa fa-star  checked"></span>
               <span class="fa fa-star"></span><i class="sat-left">4.3 (25)</i>
            </div>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>100 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
               <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span>
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 2nd boxing end-->


<!-- 3th boxing start  -->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/wp-two.jpg"></a></div>
         <div class="somke-2">
            <h3>Revolution Emporium</h3>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>106 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
          <!--      <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span> -->
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 3th boxing start end  -->
	
<!-- 4th boxing start  -->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/wp-five.jpg"></a></div>
         <div class="somke-2">
            <h3>Revolution Emporium</h3>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>106 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
          <!--      <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span> -->
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 4th boxing start end  -->

<!-- 5th boxing start  -->
<div class="west-smoke-main">
   <div class="west-all">
      <div class="west-bg">
         <div class="somke-1"><a href="#"><img src="img/clombia.jpg"></a></div>
         <div class="somke-2">
            <h3>Revolution Emporium</h3>
            <div class="ukia-text-bg">
               <p>Medical & Recreational</p>
               <p>Ukiah</p>
            </div>
         </div>
         <div class="somke-3">
            <div class="contra-icon">
               <p>106 items</p>
               <a href="#" class="tm-contraa"><img src="img/cpt-1.jpg"> Concentration<i class="sat-left">14 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-2.jpg">Edibles<i class="sat-left">15 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-3.jpg">Flower<i class="sat-left">41 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-4.jpg">Vape pans<i class="sat-left">27 items</i></a><br>
               <a href="#" class="tm-contraa"><img src="img/cpt-5.jpg">Other<i class="sat-left">3 items</i></a>
            </div>
         </div>
         
      </div>
      <div class="free-deliver">
         <div class="main-free">
            <div class="free-1">
          <!--      <span class="as-copy"><i class="fas fa-shopping-cart careti" ></i>Free delivery <span class="min-dol" >$20 | min</span></span> -->
            </div>
            <div class="free-2"> <span class="hello-1">view menu</span></div>
         </div>
      </div>
   </div>
</div>
<!-- 5th boxing start end  -->


			</div>

			</div>

		</div>
	</div>
<!-- 	delivery and pickup java script start  -->
			<script>
	const tabs = document.querySelectorAll('[data-tab-target]')
	const tabContents = document.querySelectorAll('[data-tab-content]')
	tabs.forEach(tab => {
		tab.addEventListener('click', () => {
			const target = document.querySelector(tab.dataset.tabTarget)
			tabContents.forEach(tabContent => {
				tabContent.classList.remove('active')
			})
			tabs.forEach(tab => {
				tab.classList.remove('active')
			})
			tab.classList.add('active')
			target.classList.add('active')
			document.getElementById('hide1').style.display = "block";
  // document.getElementById('hide2').style.display = "block"; 
		})
	})
	</script>
	<!-- 	delivery and picup java script end  -->




		</div>
<?php include("includes/footer.php"); ?>