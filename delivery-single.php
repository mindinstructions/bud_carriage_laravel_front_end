<?php include("includes/header.php"); ?>

	<div class="container-bj">
         <div class="foot-1"> <img src="img/clombia.jpg"></div>
         <div class="foot-2">
            <div class="heading">
               <h1>Columbia Care - Test</h1>
               <span class="text">Englewood, Florida</span> 
            </div>
            <div class="icon-barr">
               <div class="icon-2"> <span><i class="fas fa-briefcase-medical"></i>Doctor</span> <span><i class="fas fa-pager"></i>Medical</span> <span><i class="fas fa-shopping-cart"></i>In-store purchases only </span> </div>
               <div class="icon-3"> <span><i class="far fa-clock"></i><b>closed</b> opens 9:00am </span> <span><i class="fas fa-check"></i>License information</span> </div>
            </div>
            <div class="button"> <span class="hello-1"><i class="fas fa-phone"></i>030 024 3556</span> <span class="hello-1"><i class="fas fa-map"></i>Direcations</span> </div>
         </div>
         <div class="foot-3"></div>
      </div>
       <!-- about page end -->
      <!-- tabs button-->
      <div class="top-botoom-border">
         <div class="tabbin-1">
            <div class="w3-bar w3-black">
               <button class="w3-bar-item w3-button" onclick="openCity('menu')">Menu</button>
               <button class="w3-bar-item w3-button" onclick="openCity('Details')">Details</button>
               <button class="w3-bar-item w3-button" onclick="openCity('deals')">Deals</button>
               <button class="w3-bar-item w3-button" onclick="openCity('Review')">Review</button>
               <button class="w3-bar-item w3-button" onclick="openCity('Media')">Media</button>
            </div>
         </div>
      </div>
      <div class="tabinn">
         <div class="tabbin-2">
            <!--    FIRST START TABE -->
            <div id="menu" class="w3-container city">
               <div class="tab-main-pricing-one">
                  <!-- Left side and pricing menu -->
                  <div class="tab-left-pricing">
                     <div class="ries-bg">
                        <h2>Categories</h2>
                     </div>
                     <span></span>
                     <div class="all-product">
                        <span>All-Product</span>
                        <a href="#">Gear</a>
                        <a href="#">Concentrates</a>
                        <a href="#">Edibles</a>
                        <a href="#">Flower</a>
                        <a href="#">Topicals</a>
                     </div>
                     <div class="all-product">
                        <span>Brand</span><br>
                        <p><input type="checkbox"> Brand verified<i class="fas fa-check-circle"></i></p>
                     </div>
                     <div class="all-product">
                        <span>Effects</span>
                        <p><input type="checkbox"> Brand verified</p>
                        <p><input type="checkbox"> new fied</p>
                        <p><input type="checkbox"> Brand verified</p>
                        <p><input type="checkbox"> qulity poor</p>
                        <p><input type="checkbox"> Brand verified</p>
                        <p class="gren-color">See All Effects</p>
                     </div>
                     <div class="all-product">
                        <span>Price Range</span>
                        <p><input type="radio" checked="check"> Any</p>
                        <p><input type="radio"> Under $25</p>
                        <p><input type="radio"> 25$</p>
                        <p><input type="radio"> $50</p>
                        <p><input type="radio"> $100</p>
                        <p><input type="radio"> $100</p>
                     </div>
                     <div class="all-product">
                        <span>Weight</span>
                        <p><input type="radio" checked="check"> Any</p>
                        <p><input type="radio"> Under $25</p>
                        <p><input type="radio"> 25$</p>
                        <p><input type="radio"> $50</p>
                        <p><input type="radio"> $100</p>
                        <p><input type="radio"> $100</p>
                     </div>
                  </div>
                  <!-- Left end side and pricing menu -->
                  <!-- Right side and pricing menu -->
                  <div class="tab-Right-pricing">
                     <!--   1 dive  -->
                     <div class="main-from-bg">
                        <div class="frim-1">
                           <form action="/action_page.php" class="secrchh">
                              <span><i class="fas fa-search"></i>
                              <input type="text" id="fname" name="fname" placeholder="Search"><br><br></span>
                           </form>
                        </div>
                        <div class="frim-2">
                           <select>
                              <option value="volvo">Relevence</option>
                              <option value="saab">Most popular</option>
                              <option value="opel">Recent add</option>
                              <option value="audi">Lowest price</option>
                              <option value="audi">highwest price</option>
                           </select>
                        </div>
                     </div>
                     <!--   1 dive end  -->
                     <!--    2 div -->
                     <div class="live">
                        <div class="result225">
                           <p>225 result found</p>
                        </div>
                        <div class="result226"><button class="live-menu">.Live Menu</button></div>
                     </div>
                     <!--    2 div end -->
                     <div class="flower-right">
                        <h2>Flower</h2>
                     </div>
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-1.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Baklava - Indoor</h4>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$50.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- scond pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-2.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Gelonade - Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$80.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- third pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-3.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Chocolatina | Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$150.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- forth pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-4.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Dosilato | Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$250.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- fifth pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-5.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Biscotti x Gushers</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$350.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- sixth pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-6.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Slow Lane - Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$50.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- seven pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-7.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Durban Poison | Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$90.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- eighth pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-8.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Half Oz Special </h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$60.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- ningth pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-9.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Orangeade Small Buds </h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$50.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- tenth pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-10.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Mac 1 | Light Dep</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$30.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- eleven pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-11.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Runtz | Light Dep</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$100.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- 12th pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-11.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Sour Gelato | Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$20.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- 13th pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-11.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Alien Labs | Biskante </h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$50.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- 14th pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-11.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Do-Si-Dos</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$150.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                     <!-- 15th pitcher -->
                     <div class="main-do-dos">
                        <div class="dos-left">
                           <div class="indica">
                              <div class="d-1"><img src="img/columb-11.jpg"></div>
                              <div class="d-2">
                                 <span data-testid="hrd">Indica |Flower| Dosidos</span><br>
                                 <h4>Sour Gelato | Indoor</h4>
                                 <div class="main-box">
                                    <div class="box-1">10% THC</div>
                                    <div class="box-2">15.65% CBD</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dos-right">
                           <p><b class="dol$">$75.00</b>per 1/8 oz</p>
                        </div>
                     </div>
                  </div>
                  <!-- Right end side and pricing menu -->
               </div>
            </div>
            <!--    FIRST END TABE -->
            <!--    SECOND START TABE -->
            <div id="Details" class="w3-container city"style="display:none">
               <div class="main-tabb-cl">
                  <div class="main-tabb-left">
                     <div class="first-time">
                        <div>
                            <h2 class="cg">Introduction</h2>
                            <p>High Tide is a premium delivery service, offering customers only the absolute best brands and highest quality ﻿products in the industry matched with professional and friendly service. High Tide is fully licensed by the state of California for both recreational and medicinal cannabis delivery. All of the products on our menu have been tested in a laboratory for purity and potency. We take great pride in serving our community and look forward to making your experience as easy and pleasant as possible.</p>
                            <h2 class="cg">About Us</h2>
                            <p>High Tide has been a West Side medical marijuana delivery service for almost a decade. Its founders were born and raised in the area and are honored to serve their community. With extensive knowledge in cultivation and genetics, High Tide Organics provides the highest quality and best tasting organic.</p>
                           <h3 class="cg">Amenities</h3>
                           <p><a href="#"><i class="fas fa-notes-medical"></i><br>Mdical</a></p>
                            <h2 class="cg">First-Time Customers</h2>
                            <p>20% off your purchase! Use discount code <b>"SUNSET20"</b></p>
                            <h2 class="cg">Announcement</h2>
                            <p><b>COVID-19</b> : High Tide has instituted extra health & safety precautions to ensure the health of both our customers and staff. We are sanitizing all products and delivery vehicles. Our delivery personal will be wearing face coverings and using gloves.</p>
                            <p>State License<br>
                            Adult-Use Nonstorefront:C9-0000103-LIC</p>
                        </div>
                     </div>
                  </div>
                  <!-- right side  strat -->
                  <div class="main-tabb-right">
                     <div class="tm-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.8970545673737!2d74.31998361500781!3d31.49951335532364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905927ee24a51%3A0xc85fc90e9d3b00be!2sAXCEL!5e0!3m2!1sen!2s!4v1616482759866!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                     <div class="border-map-below">
                        <div class="text">
                           <a href="tel:080-090-0110" class="tm-contact-link">
                              <i class="fas fa-map-marker-alt"></i>
                              <p>
                                 390 S 1st Street
                                 <br> Lander, Wyoming US 82520
                                 <br>
                                 <bt>GET DIRECTIONS</bt>
                              </p>
                           </a>
                        </div>
                        <div class="number-cg">
                           <a href="tel:080-090-0110" class="tm-contact-link"> <i class="fas fa-phone tm-contact-icon"></i>000-000-0000 </a>
                        </div>
                        <!-- closed  start-->
                        <div class="closed">
                           <a href="tel:080-090-0110" class="tm-contact-link">
                              <i class="fas fa-clock tm-contact-icon"></i>
                              <li>CLOSED NOW</li>
                           </a>
                           <dl class="CFW">
                              <dt class="mon">Monday</dt>
                              <dd class="am-pm">9:00am - 5:00pm</dd>
                           </dl>
                           <dl class="CFW">
                              <dt class="mon">Tuesday</dt>
                              <dd class="am-pm">9:00am - 5:00pm</dd>
                           </dl>
                           <dl class="CFW">
                              <dt class="mon">Wednesday</dt>
                              <dd class="am-pm">9:00am - 5:00pm</dd>
                           </dl>
                           <dl class="CFW">
                              <dt class="mon">Thursday</dt>
                              <dd class="am-pm">9:00am - 5:00pm</dd>
                           </dl>
                           <dl class="CFW">
                              <dt class="mon">Friday</dt>
                              <dd class="am-pm">9:00am - 5:00pm</dd>
                           </dl>
                           <dl class="CFW">
                              <dt class="mon">Saturday</dt>
                              <dd class="am-pm">9:00am - 5:00pm</dd>
                           </dl>
                           <dl class="CFW">
                              <dt class="mon">Sunday</dt>
                              <dd class="am-pm">Closed</dd>
                           </dl>
                        </div>
                        <!-- closed end -->
                        <div class="main oppinment">
                           <div class="number-cg">
                              <a href="tel:080-090-0110" class="tm-contact-link"> <i class="fas fa-envelope tm-contact-icon"></i> appointments@marijtor.com </a>
                           </div>
                           <div class="number-cg">
                              <a href="tel:080-090-0110" class="tm-contact-link"> <i class="fas fa-link tm-contact-icon"></i>https://marijuanador.com </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--    THIRD START TABE -->
            <div id="deals" class="w3-container city" style="display:none">
               <div class="tab-Deals-bg">
                  <div class="tab-deals">
                     <a href="#"><img src="img/doller-2.png"></a>
                     <h2>No Deals Available</h2>
                     <span>There are currently no deals available, please check<br> back again at a later time!</span>
                  </div>
               </div>
            </div>
            <!-- FORTH START TABE -->
            <div id="Review" class="w3-container city" style="display:none">
               <div class="tab-second">
                  <div class="tab-review">
                     <h2>Be the first to review!</h2>
                     <h3>Be the first to review Marijuana Doctor-Englewood and<br> share your experience with the Weedmaps community.</h3>
                     <button class="btn-riew">Write a review</button>
                  </div>
               </div>
            </div>
            <!-- FIFTH START TABE -->
            <div id="Media" class="w3-container city" style="display:none">
               <div class="tab-second-cl">
                  <div class="tab-detail">
                     <h2>Be the first to review!</h2>
                     <p>This business hasn't uploaded any photos or videos yet. Click
                        <br> below to learn more about this business.
                     </p>
                     <button class="btn-detail-2">view detail</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for(i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
         }
      </script>
 

<?php include("includes/footer.php"); ?>