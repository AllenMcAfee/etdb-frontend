<?php
/* Template Name: Jensen Contact Page
*/

get_header();  ?>


<div id="contact">	


<h2>Contact</h2>

<div class="row">
  <div class="col-sm-4">
<b>Grant Jensen</b><br>
Principal Investigator<br>
phone: (626) 395-8827 <br>
jensen(at)caltech.edu<br>
 </div>
 
  <div class="col-sm-4">
<b>Karin Mallard</b><br>
Administrative Assistant<br>
phone: (626) 395-8893<br>
kmallard(at)caltech.edu<br>
 </div>
 
  <div class="col-sm-4">
<b>Alasdair McDowall</b><br>
EM Center Director<br>
phone: (626) 395-8829<br>
mcdowall(at)caltech.edu<br>
</div>
</div>


<form class="contact100-form validate-form">
			

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
</div>







	
<?php get_footer(); ?>