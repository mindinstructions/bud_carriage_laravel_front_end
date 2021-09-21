<?php include("includes/header.php"); ?>
<style>
	.tabs .tab {
    display: none;
    height: auto;
    border-radius: 3px;
    padding: 20px 15px;
    color: darkslategray;
    clear: both;
}
</style>
<div class="container-bg-home">

<div class="f-container mt">
		<div class="custom-container">
			<div class="tabs user-tab">
			  <ul class="tabs-list">
			     <li class="active"><a href="#tab1">Profile info</a></li>
			     <li ><a href="#tab2">Store info</a></li>
			     <li ><a href="#tab3">Product</a></li>
			     <li ><a href="#tab4">Following</a></li>
			     <li ><a href="#tab5">Reviews</a></li>
			  </ul>

			  <div id="tab1" class="tab active">
			     <div class="profile-setting">
			     	<div class="ads">
			     		<p>Deals near you ads</p>
			     	</div>
			     	<div class="profile-detail">
			     		<div class="profile-d1">
			     			 <form class="profile-form">
			     			 <input placeholder="Upload Profile Pic" type="text" onfocus="(this.type='file')" onblur="(this.type='text')" />	
			     			 <input type="text" name="name" placeholder="Name">	
        	                 <input type="text" name="username" placeholder="Username">
        	                 <input type="number" name="username" placeholder="Zip Code">
        	                 <input placeholder="DOB" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" />
        	                 <input type="text" name="email" placeholder="Email">
        	             </form>
			     		</div>
			     		<div class="profile-d2">
			     			<a href="#">Link Reddit</a>
			     		</div>
			     		<div class="profile-d3">
			     			<a href="#">Link Discord</a>
			     		</div>
			     	</div>
			     	<div class="ads sve-btn">
			     		<a href="#">Save Changes</a>
			     	</div>
			  </div>
			</div>
			  <div id="tab2" class="tab">
			  	<div class="store-detail">
			   <div class="profile-detail">
			   	<div class="w-50 mobile-w">
			   		 <form class="profile-form">	
			     			 <input type="text" name="Bname" placeholder="Business Name">	
        	                 <input type="text" name="addres" placeholder="Address">
        	                 <input type="number" name="phone" placeholder="Phone">
        	                 <input type="text" name="website" placeholder="website">
        	                 <input type="text" name="email" placeholder="Email">
        	                 <textarea rows="4" cols="50" placeholder="Business cert info"></textarea>
        	             </form>
			   	</div>
			   	<div class="w-50 mobile-w">
			   		<div class="aboutus">
			   			<p>About us</p>
			   		</div>
			   		<div class="btn-sec">
			   			<a href="#">Delivery Radius</a>
			   			<a href="#">Followers</a>
			   		</div>
			   		<div class="btn-sec mt">
			   			<a href="#">Link Social Media</a>
			   		</div>
			   	</div>
			   </div>
			   <div  class="store-info">
			   	<ul>
			   			<li><a href="#">Add Houres</a></li>
			   			<li><a href="#">Add Amenities</a></li>
			   			<li><a href="#">Add Deals</a></li>
			   			<li><a href="#">Add Media</a></li>
			   	</ul>
			   </div>
			   <div class="sve-btn mt center store-btn">
			   	<a href="#">View store</a>
			   	<a href="#">Save Changes</a>
			   </div>
			  </div>
			  </div>
			  <div id="tab3" class="tab">
			    <div class="product-detail">
			    	<p>Product Detail</p>
			    <div  class="store-info">
			   	<ul>
			   			<li><a href="#">Category</a></li>
			   			<li><a href="#">Product Name</a></li>
			   			<li><a href="#">Price</a></li>
			   			<li><a class="ad-img" href="#">Add Image</a></li>
			   	</ul>
			   </div>
			   <div class="sve-btn mt center">
			   	<a href="#">Add</a>
			   </div>
			    </div>
			  </div>
			  <div id="tab4" class="tab">
			    <div class="follwing">
			    	<div class="f-width">
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    	</div>
			    </div>
			     <div class="follwing">
			    	<div class="f-width">
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    	</div>
			    </div>
			     <div class="follwing">
			    	<div class="f-width">
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    	</div>
			    </div>
			     <div class="follwing">
			    	<div class="f-width">
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    		<div class="w-25 mobile-w"><p class="para">Following box</p></div>
			    	</div>
			    </div>
			  </div>
			  <div id="tab5" class="tab">
			 <div class="review">
			 	<div class="center">
			 	<input type="text" name="serach" placeholder="Search">
			 	<input type="submit" value="filter">
			 	</div>
			 	<div class="review-list">
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 		<p>Client Review</p>
			 	</div> 
			 </div>
			  </div>

			</div>
		</div>
	</div>

<script>
jQuery(document).ready(function(){

  $(".tabs-list li a").click(function(e){
     e.preventDefault();
  });

  $(".tabs-list li").click(function(){
     var tabid = $(this).find("a").attr("href");
     $(".tabs-list li,.tabs div.tab").removeClass("active");   // removing active class from tab

     $(".tab").hide();   // hiding open tab
     $(tabid).show();    // show tab
     $(this).addClass("active"); //  adding active class to clicked tab

  });

});
</script>

</div>
<?php include("includes/footer.php"); ?>