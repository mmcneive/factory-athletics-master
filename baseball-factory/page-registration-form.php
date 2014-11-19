<?php 
	/*
	Template Name: Registration Form
	*/
	get_header();
	$templateDirectory = get_bloginfo('template_directory'); 
?>

<section id="top" class="registration">
	<div class="reg-content">
		<div id="step-count">
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-1.svg" class="step-digit" alt="1" />
			<div class="mark active"></div>
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-gray-2.svg" class="step-digit" alt="2" />
			<div class="mark"></div>
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-gray-3.svg" class="step-digit" alt="3" />
			<div class="mark"></div>
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-gray-4.svg" class="step-digit" alt="4" />
		</div>
		<h1>Under Armour Baseball <br>Factory National Tryout <br><strong>Registration</strong></h1>
	</div>
</section>
<section id="step-one" class="registration">
	<div id="step-line">
		<div id="step-circle">
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-white-1.svg" class="step-digit" alt="1" />
		</div>
	</div>
	<div class="reg-content">
		<h3><strong>Select A Program</strong></h3>
		<a href="#" id="reg-trouble">Trouble with Registration? Questions?</a>
		<div class="program">
			<div class="col">
				<h4>NATIONAL TRYOUT PACKAGE</h4>
				<div class="price-line">
					<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-number-99.svg" class="prog-price" alt="$99" />
					<div class="second-pos">
						<img src="<?php echo $templateDirectory; ?>/assets/images/reg-star.png" class="reg-star" alt="star" />
						<p>ADD A SECOND <br>POSITION $199</p>
					</div>	
				</div>
				<div class="dropdown">
					<select>
						<option>1 Position<option>	
						<option>2 Position<option>	
						<option>3 Position<option>	
					</select>
				</div>
				<div class="plans-msg">
					<p><strong>Payment plans are available.</strong> <br>Please call us at 800.641.4487 for more informaton.</p>	
				</div>
			</div>
			<div class="col">
				<ul>
					<li>Participate in a pro-style workout in front of Baseball Factory coaches and scouts</li>
					<li>Receive an Under Armour Baseball Factory t-shirt as part of your participation</li>
					<li>Receive a verbal evaluation within 72 hours after your performance</li>
					<li>Top performers may be selected to compete on an Under Armour Baseball Factory National Team</li>
				</ul>
			</div>
		</div>	
		<div class="program selected">
			<div class="col">
				<h4>NATIONAL TRYOUT + <br>PREMIUM VIDEO PACKAGE</h4>
				<div class="price-line">
					<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-number-499.svg" class="prog-price" alt="$499" />
					<div class="second-pos">
						<img src="<?php echo $templateDirectory; ?>/assets/images/reg-star.png" class="reg-star" alt="star" />
						<p>ADD A SECOND <br>POSITION $59</p>
					</div>	
				</div>
				<div class="dropdown">
					<select>
						<option>1 Position<option>	
						<option>2 Position<option>	
						<option>3 Position<option>	
					</select>
				</div>
				<div class="plans-msg">
					<p><strong>Payment plans are available.</strong> <br>Please call us at 800.641.4487 for more information.</p>	
				</div>
			</div>
			<div class="col">
				<p><strong>Upgrade your National Tryout experience with the Premium Video Program.</strong> Get filmed and start your college promotion. Start Early. Promote Often.</p>
				<ul>
					<li>Professionally edited video of your performance</li>
					<li>Written Pro Scout evaluation</li>
					<li>Personal player web page you can email to college coaches - contact info for 1,600+ college coaches</li>
					<li>College Coach exposure - your video & eval placed in online database for college coaches to view</li>
					<li>College Guidance - 10 Recruiting Pitfalls to Avoid</li>
					<li>Top performers may be selected to compete on an Under Armour Baseball Factory National Team</li>
				</ul>		
			</div>
		</div>	
		<div class="program">
			<div class="col">
				<h4>NATIONAL TRYOUT + <br>PLATINUM VIDEO PACKAGE</h4>
				<div class="price-line">
					<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-number-699.svg" class="prog-price" alt="$699" />
					<div class="second-pos">
						<img src="<?php echo $templateDirectory; ?>/assets/images/reg-star.png" class="reg-star" alt="star" />
						<p>ADD A SECOND <br>POSITION $79</p>
					</div>	
				</div>
				<div class="dropdown">
					<select>
						<option>1 Position<option>	
						<option>2 Position<option>	
						<option>3 Position<option>	
					</select>
				</div>
				<div class="plans-msg">
					<p><strong>Payment plans are available.</strong> <br>Please call us at 800.641.4487 for more information.</p>	
				</div>
			</div>
			<div class="col">
				<ul>
					<li>Professionally edited video of your performance</li>
					<li>Written Pro Scout evaluation</li>
					<li>Personal player web page you can email to college coaches - contact info for 1,600+ college coaches</li>
					<li>College Coach exposure - your video & eval placed in online database for college coaches to view</li>
					<li>College Guidance - 10 Recruiting Pitfalls to Avoid</li>
					<li>Top performers may be selected to compete on an Under Armour Baseball Factory National Team</li>
				</ul>
			</div>
		</div>
		<div class="reg-note">
			<p><strong>PLEASE NOTE: 2B, SS and 3B will all perform at SS during the defensive portion of the event. In addition, we will only evaluate a player at one infield position (1B, 2B, SS, or 3B).</strong></p>
		</div>
		<div class="reg-details">
			<div class="col">
				<h2>Select a Tryout</h2>
				<div class="dropdown">
					<select>
						<option>Select Tryout Date &amp; Location</option>
					</select>
				</div>
				<h2>Referred By</h2>
				<div class="dropdown">
					<select>
						<option>Select an option that applies</option>
					</select>
				</div>
			</div>
			<div class="col">
				<h2>Pick Your Position</h2>
				<div class="dropdown">
					<select>
						<option>Select Primary Position</option>
					</select>
				</div>
				<h2>Contact</h2>
				<div class="dropdown">
					<select>
						<option>Select Contact Person</option>
					</select>
				</div>
			</div>
			<div class="col">
				<p><strong>Play two positions?</strong> Add a second position when selecting a program above.</p>
				<div class="dropdown">
					<select>
						<option>Secondary Position</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="error">	
		<input type="submit" id="submit-one" value="Step 2">
		<p>YOU MUST SELECT A PROGRAM BEFORE MOVIN ON.</p>
	</div>	
</section>

<section id="step-two" class="registration next">
	<div id="step-line">
		<div id="step-circle">
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-white-2.svg" class="step-digit" alt="2" />
		</div>
	</div>
	<div class="reg-content info">
		<div class="col">
			<h3><strong>Player Info</strong></h3>
			<span id="required">All fields marked with an * are required.</span>
			<label for="first-name">First Name<sup>*</sup></label>
			<label for="last-name">Last Name<sup>*</sup></label>
			<input type="text" id="first-name" value="" />
			<input type="text" id="last-name" value="" />
			<label for="dob">Date of Birth<sup>*</sup></label>
			<label for="email">Email Address<sup>*</sup></label>
			<input type="text" id="dob" value="mm/dd/yyyy" />
			<input type="email" id="email" value="email@domain.com" />
			<input type="checkbox" id="notifications" />
			<label for="notifications" class="notifications">Keep me in the loop for special Under Armour news and promotions. You must be 13 years of age or older</label>
			<label for="address">Address<sup>*</sup></label>
			<input type="text" id="address" value="123 Anywhere St." />
			<label for="city">City<sup>*</sup></label>
			<label for="state" class="fourth">State<sup>*</sup></label>
			<label for="zip" class="fourth">Zip<sup>*</sup></label>
			<input type="text" id="city" value="" />
			<div class="dropdown fourth"><select id="state"><option></option></select></div>
			<input type="text" id="zip" class="fourth" value="" />
			<label for="address">Country<sup>*</sup></label>
			<input type="text" id="country" value="United States" />
			<label for="primary" class="clear">Primary Phone Number<sup>*</sup></label>
			<label for="mobile">Mobile Phone Number</label>
			<input type="text" id="primary" value="410-555-5555" />
			<input type="text" id="mobile" value="410-555-5555" />
			
			<h3><strong>Roster &amp; Academic Info</strong></h3>
			<label for="hs-year" class="fourth">HS Grad Year<sup>*</sup></label>
			<label for="hs-name">High School Name<sup>*</sup></label>
			<div class="dropdown fourth clear"><select id="hs-year"><option></option></select></div>
			<input type="text" id="hs-name" value="" />
			<label for="bats" class="fourth">Bats<sup>*</sup></label>
			<label for="throws" class="fourth">Throws<sup>*</sup></label>
			<label for="shirt-size" class="fourth">Shirt Size<sup>*</sup></label>
			<label for="shoe-size" class="fourth">Shoe Size<sup>*</sup></label>
			<div class="dropdown fourth"><select id="bats"><option></option></select></div>
			<div class="dropdown fourth"><select id="throws"><option></option></select></div>
			<div class="dropdown fourth"><select id="shirt-size"><option></option></select></div>
			<div class="dropdown fourth"><select id="shoe-size"><option></option></select></div>
			<label for="feet">Height<sup>*</sup></label>
			<label for="weight">Weight<sup>*</sup></label>
			<div class="dropdown fourth"><select id="feet"><option>Feet</option></select></div>
			<div class="dropdown fourth"><select id="inches"><option>Inches</option></select></div>
			<input type="text" id="weight" value="" />
			<label for="summer" id="summer">Summer League<sup>*</sup></label>
			<input type="text" id="summer" value="" />
			<label for="gpa" class="fourth clear">Overall GPA</label>
			<label for="act" class="fourth">ACT Score</label>
			<label for="psat" class="fourth">PSAT Score</label>
			<input type="text" id="gpa" class="fourth clear" value="" />
			<input type="text" id="act" class="fourth" value="" />
			<input type="text" id="psat" class="fourth" value="" />
			<label for="sat" class="fourth clear">SAT Total Score</label>
			<label for="math" class="fourth">Math</label>
			<label for="verbal" class="fourth">Verbal</label>
			<label for="writing" class="fourth">Writing</label>
			<input type="text" id="sat" class="fourth" value="" />
			<input type="text" id="math" class="fourth" value="" />
			<input type="text" id="verbal" class="fourth" value="" />
			<input type="text" id="writing" class="fourth" value="" />
			
			<h3><strong>Family Info</strong></h3>
			<label for="member-one" class="full">Relationship<sup>*</sup></label>
			<div class="dropdown full"><select id="member-one"><option>Select A Member</option></select></div>
			<label for="member-one-first">First Name<sup>*</sup></label>
			<label for="member-one-last">Last Name<sup>*</sup></label>
			<input type="text" id="member-one-first" value="" />
			<input type="text" id="member-one-last" value="" />
			<label for="member-one-email">Email Address<sup>*</sup></label>
			<input type="email" id="member-one-email" class="clear" value="" />
			<label for="member-one-primary" class="clear">Primary Phone Number<sup>*</sup></label>
			<label for="member-one-mobile">Mobile Phone Number</label>
			<input type="text" id="member-one-primary" class="clear" value="410-555-5555" />
			<input type="text" id="member-one-mobile" value="410-555-5555" />
			
			<label for="member-two" class="full">Relationship</label>
			<div class="dropdown full"><select id="member-two"><option>Select A Member</option></select></div>
			<label for="member-two-first">First Name<sup>*</sup></label>
			<label for="member-two-last">Last Name<sup>*</sup></label>
			<input type="text" id="member-two-first" value="" />
			<input type="text" id="member-two-last" value="" />
			<label for="member-two-email">Email Address<sup>*</sup></label>
			<input type="email" id="member-two-email" class="clear" value="" />
			<label for="member-two-primary" class="clear">Primary Phone Number<sup>*</sup></label>
			<label for="member-two-mobile">Mobile Phone Number</label>
			<input type="text" id="member-two-primary" class="clear" value="410-555-5555" />
			<input type="text" id="member-two-mobile" value="410-555-5555" />
		</div>
		<div class="col">
			<a href="#" id="reg-trouble">Trouble with Registration? Questions?</a>
			<div class="cta">
				<p><strong>These tryouts are open to players age 14-18.</strong></p>
				<p class="gray">Looking for the Under Armour National Tryout for players aged 12-14?</p>
				<a href=""><strong>Click Here</strong></a>
			</div>
			<div class="cta" id="numbers">
				<p><strong>Did you provide Baseball Factory with your mobile and work phone numbers?</strong></p>
				<p class="gray">In case of rain on the day of your event, these numbers will be used to inform you of any changes or delays.</p>
			</div>
			<div class="cta" id="gear">
				<img src="<?php echo $templateDirectory; ?>/assets/images/ua-logo-black.svg" height="80px" width="auto" />
				<p><strong>Want to add Under Armour Baseball Factory gear?</strong></p>
				<p class="gray">You can add Under Armour shirts, Easton bats, SKLZ training programs, and more gear to your cart in 
Step 3.</p>
			</div>
		</div>
	</div>
	<div class="error">
		<a href="#" id="back">Step 1</a>	
		<input type="submit" id="submit-two" value="Step 3">
	</div>	
</section>


<section id="step-three" class="registration next">
	<div id="step-line">
		<div id="step-circle">
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-white-3.svg" class="step-digit" alt="3" />
		</div>
	</div>
	<div class="reg-content">
		<h3><strong>Add Gear</strong></h3>
		<a href="" id="skip">Skip This Step</a>
		<div class="items">
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear1.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Logo Locker Tee - Red</strong></div>
				<span class="price"><strong>$24.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear2.jpg" />
				<div class="descrip"><strong>FIRST CATCH PROGRAM Under Armour Locker Tee</strong></div>
				<span class="price"><strong>$30.00</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear3.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Locker Tee - Grey</strong></div>
				<span class="price"><strong>$24.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear4.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Logo Locker Tee - Black</strong></div>
				<span class="price"><strong>$24.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear5.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Performance Polo - Red</strong></div>
				<span class="price"><strong>$49.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear6.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Performance Polo - Black</strong></div>
				<span class="price"><strong>$49.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear7.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Performance Polo - Graphite</strong></div>
				<span class="price"><strong>$49.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear8.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Conquest On-Field Polo</strong></div>
				<span class="price"><strong>$64.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear9.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Contender Cage Jacket - Black</strong></div>
				<span class="price"><strong>$54.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear10.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Contender Cage Jacket - Red</strong></div>
				<span class="price"><strong>$54.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear11.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Convertible Jacket - Black</strong></div>
				<span class="price"><strong>$49.98</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear12.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Long Sleeve Locker Tee - Black</strong></div>
				<span class="price"><strong>$27.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear13.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Long Sleeve Locker Tee - Grey </strong></div>
				<span class="price"><strong>$27.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear14.jpg" />
				<div class="descrip"><strong>UA CTG Baseball Factory Fleece Pullover - Grey</strong></div>
				<span class="price"><strong>$59.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear15.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Hoody - Black</strong></div>
				<span class="price"><strong>$49.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear16.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Storm Armour Fleece Hoody</strong></div>
				<span class="price"><strong>$64.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear17.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Shorts w/ Pockets - Black</strong></div>
				<span class="price"><strong>$29.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear18.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Shorts w/ Pockets - Graphite</strong></div>
				<span class="price"><strong>$29.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear19.jpg" />
				<div class="descrip"><strong>UA Baseball Factory Beanie - OSFM</strong></div>
				<span class="price"><strong>$17.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
			<div class="item">
				<img src="<?php echo $templateDirectory; ?>/assets/images/gear20.jpg" />
				<div class="descrip"><strong>Men's Factory Stretchfit Flat Brim Hat- Black</strong></div>
				<span class="price"><strong>$25.99</strong></span>
				<span class="details"><strong>Details</strong></span>
				<select class="size"><option>Size</option></select>
				<a href="" class="add-to-cart">Add to Cart</a>
			</div>
		</div>
	</div>
	<div class="error">
		<a href="#" id="back">Step 2</a>	
		<input type="submit" id="submit-three" value="Step 4">
	</div>
</section>


<section id="step-four" class="registration next">
	<div id="step-line">
		<div id="step-circle">
			<img src="<?php echo $templateDirectory; ?>/assets/images/stencil-digits-white-4.svg" class="step-digit" alt="4" />
		</div>
	</div>
	<div class="reg-content">
		<div class="col">
			<h3><strong>Registration Checkout</strong></h3>
			<h4>Confirmation &amp; Payment</h4>
			<h3><strong>Order Details</strong></h3>
			<table width="100%">
				<tr>
					<td>Item</td>
					<td>Size</td>
					<td>Price</td>
					<td>Edit</td>
				</tr>
				<tr>
					<td>National Tryout <br>Glen Burnie, MD</td>
					<td></td>
					<td>$99.00</td>
					<td><a href="">Change</a></td>
				</tr>
				<tr>
					<td>UA Baseball Factory Beanie - OSFM</td>
					<td></td>
					<td>$17.99</td>
					<td><a href="">Remove</a></td>
				</tr>
				<tr>
					<td>Easton Mako Comp Wooden Bat</td>
					<td>33/30</td>
					<td>$89.95</td>
					<td><a href="">Remove</a></td>
				</tr>	
			</table>
			<div class="fast-catch">
				<input type="checkbox" />
				<p>I’d like to donate an additional <strong>$1</strong> to the <strong>First Catch Program<sup>*</sup></strong></p>
			</div>
			<p class="after-fc"><strong>This June, Factory Athletics will hold the First Catch Program</strong> to raise awareness for prostate cancer and the importance of early detection. As we recognize our fathers and grandfathers during the month of Father’s Day, let’s also encourage them to get screened for prostate cancer.</p>
			<div class="promo-total">
				<div class="promo">
					<span class="promo-title">Promotion Code</span>
					<input type="text" id="promo" value="" />
					<input type="submit" id="submit-promo" value="Apply Code">
					<p>Discount will be automatically applied at checkout for valid promotion code.</p>
				</div>
				<div class="total">
					<span class="st">Subtotal</span>
					<span class="st-price">$206.94</span>
					<span class="tax">Tax</span>
					<span class="tax-price">$6.48</span>
					<span class="pr">Promo</span>
					<span class="pr-price">-</span>
					<span class="ttl">Total</span>
					<span class="ttl-price">$214.42</span>
				</div>
			</div>
			<div class="billing">
				<h3>Billing Information</h3>
				<label for="cc-name">Name on Credit Card<sup>*</sup></label>
				<label for="cc-num">Credit Card Number<sup>*</sup></label>
				<input type="text" id="first-name" value="" />
				<input type="text" id="last-name" value="" />
				<label for="cc-month">MM<sup>*</sup></label>
				<label for="cc-year">YY<sup>*</sup></label>
				<label for="cc-code">CVC Code<sup>*</sup></label>
				<input type="text" id="cc-month" value="" />
				<input type="text" id="cc-year" value="" />
				<input type="text" id="cvc-code" value="" />
				<label for="billing-address">Billing Address<sup>*</sup></label>
				<input type="text" id="billing-address" value="" />
				<label for="billing-zip">Billing Zip<sup>*</sup></label>
				<input type="text" id="billing-zip" value="" />
				
				<h3>Shipping Information</h3>
				<label for="shipping-address">Shipping Address<sup>*</sup></label>
				<input type="text" id="shipping-address" value="" />
				<label for="shipping-city">City<sup>*</sup></label>
				<label for="shipping-state" class="quarter">State<sup>*</sup></label>
				<label for="shipping-zip" class="quarter">Zip<sup>*</sup></label>
				<input type="text" id="shipping-city" value="" />
				<input type="text" id="shipping-state" class="quarter" value="" />
				<input type="text" id="shipping-zip" class="quarter" value="" />
			</div>
			<div class="submit-box">
				<p><input type="checkbox" />I have reviewed and understand the <a href="">Policies & Agreements</a></p>
				<input type="submit" id="submit-four" value="Submit Order">
			</div>
		</div>
		<div class="col">
			<a href="#" id="reg-trouble">Trouble with Registration? Questions?</a>
		</div>
	
</section>

<?php get_footer(); ?>