<?php include("includes/header.php"); ?>
<div class="container-bg-home">

<div class="f-container mt">
	<div class="custom-container">
         <div class="featured-ad">
         	<h2>Featured Business:AD</h2>
         </div>
				 
				<div class="text-center mt serchbyname">
				  <a  onclick="searchbusines('dispensaries')">Dispensaries</a> 
				  <a  onclick="searchbusines('delivery')">Delivery</a>
				  <a  onclick="searchbusines('doctor')">Doctors</a>
				  <a  onclick="searchbusines('brand')">Brands</a>
				</div>

				<div id="dispensaries" class="search">
				 <div class="text-center mt search-location">
				 	<h2>Dispensaries</h2>
					 	<input type="text" name="serach" placeholder="Search">
					 	<input type="text" name="location" placeholder="Location">
					 	<input type="submit" value="sort by">
			 	</div>
			 	<div class="follwing">
			    	<div class="f-width mt">
			    		<div class="w-40">
			    			<div class="clear filter">
			    			<p>Clear Filters</p> <input type="submit" value="sort by">
			    		</div>
			    			<div class="listing-list">
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    			</div>
			    		</div>
			    		<div class="w-60">
			    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.8970545673737!2d74.31998361500781!3d31.49951335532364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905927ee24a51%3A0xc85fc90e9d3b00be!2sAXCEL!5e0!3m2!1sen!2s!4v1616482759866!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			    		</div>
			    	</div>
			    </div>
				</div>

				<div id="delivery" class="search" style="display:none">
				 <div class="text-center mt search-location">
				 	<h2>Delivery services</h2>
					 	<input type="text" name="serach" placeholder="Search">
					 	<input type="text" name="location" placeholder="Location">
					 	<input type="submit" value="sort by">
			 	</div>
			 	<div class="follwing">
			    	<div class="f-width mt">
			    		<div class="w-40">
			    			<div class="clear filter">
			    			<p>Clear Filters</p> <input type="submit" value="sort by">
			    		</div>
			    			<div class="listing-list">
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    			</div>
			    		</div>
			    		<div class="w-60">
			    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.8970545673737!2d74.31998361500781!3d31.49951335532364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905927ee24a51%3A0xc85fc90e9d3b00be!2sAXCEL!5e0!3m2!1sen!2s!4v1616482759866!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			    		</div>
			    	</div>
			    </div>
				</div>

				<div id="doctor" class="search" style="display:none">
				 <div class="text-center mt search-location">
				 	<h2>Doctor</h2>
					 	<input type="text" name="serach" placeholder="Search">
					 	<input type="text" name="location" placeholder="Location">
					 	<input type="submit" value="sort by">
			 	</div>
			 	<div class="follwing">
			    	<div class="f-width mt">
			    		<div class="w-40">
			    			<div class="clear filter">
			    			<p>Clear Filters</p> <input type="submit" value="sort by">
			    		</div>
			    			<div class="listing-list">
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    			</div>
			    		</div>
			    		<div class="w-60">
			    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.8970545673737!2d74.31998361500781!3d31.49951335532364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905927ee24a51%3A0xc85fc90e9d3b00be!2sAXCEL!5e0!3m2!1sen!2s!4v1616482759866!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			    		</div>
			    	</div>
			    </div>
				</div>

				<div id="brand" class="search" style="display:none">
				   <div class="text-center mt search-location">
				 	<h2>Brands</h2>
					 	<input type="text" name="serach" placeholder="Search">
					 	<input type="text" name="location" placeholder="Location">
					 	<input type="submit" value="sort by">
			 	</div>
			 	<div class="follwing">
			    	<div class="f-width mt">
			    		<div class="w-40">
			    			<div class="clear filter">
			    			<p>Clear Filters</p> <input type="submit" value="sort by">
			    		</div>
			    			<div class="listing-list">
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    				<p>Listing</p>
			    			</div>
			    		</div>
			    		<div class="w-60">
			    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.8970545673737!2d74.31998361500781!3d31.49951335532364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905927ee24a51%3A0xc85fc90e9d3b00be!2sAXCEL!5e0!3m2!1sen!2s!4v1616482759866!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			    		</div>
			    	</div>
			    </div>
				</div>





	</div>
</div>


<script>
function searchbusines(searchName) {
  var i;
  var x = document.getElementsByClassName("search");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(searchName).style.display = "block";  
}
</script>

</div>
<?php include("includes/footer.php"); ?>