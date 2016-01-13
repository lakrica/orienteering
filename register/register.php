<!DOCTYPE HTML>

<html>
<?php include('template/head.php'); ?>
<?php include('template/header.php'); ?>



			<div id="content">
				
				<div id="event">
					
					<div class="header">
					  	<div id="event-bilde">
							<img class="eventbilde" src="img/o-week.jpg"> <!-- event banner -->
							<h1></h1> <!-- uz bannera. ja nav noaukums bannerī. -->
						</div>
						<div id="event-line-register">
							<p class="solis collon">1. Personal information</p>
							<p><img src="img/1solis.png" /></p>  <!-- procesa bilde -->
						</div>	
					</div>   <!--  header -->	
					<div class="clear"></div>
						
						
					<div id="register">
						<div id="form">
								
						<form autocomplete="off" id="personal" action="register2.php#event">
							
							<legend>My <span>first name</span> is:</legend>	<input type="name" class="name" name="name" placeholder="name" x-moz-errormessage="Please enter your first name!" title="Please enter your first name!" required autofocus /><br />
							<legend>My <span>last name</span> is:</legend>	<input type="name" class="lastname" name="lastname" placeholder="last name" required /><br />
							<legend><span>E-mail</span>:</legend>	<input type="email" class="name" name="email" placeholder="your@email.com" required /><br />
							<legend>My <span>year of birth</span> is:</legend>	<input type="number" x-moz-errormessage="Please eneter your year of birth!" title="Please eneter your year of birth!" name="year" class="year" min="1900" max="2015" placeholder="year of birth" required /><br />
								
							<legend  class="top"><span>I am:<span></legend>
									<div id="bullets">
									<input type="radio" name="gender" value="Female" class="bullet" required/><label>Female</label><br />
									<input type="radio" name="gender" value="Male" class="bullet" required/><label>Male</label>
									</div>	

							
							<legend  class="top"><span>Sport Ident:</span></legend>
								<div id="bullets">
									<input type="radio" value="rent" name="ident" id="rent" class="bullet" required/><label>I'll rent (1eur/day)</label><br />
									<input type="radio" value="own" name="ident" id="own" class="bullet" required/><label>I'll use my own</label><br />
								</div>
							
							<legend class="si">My Sport Ident number is:</legend>	<input name="si" type="number"  x-moz-errormessage="Please enter your SI number!" title="Please enter your SI number" placeholder="SI number" class="si"/><br />
							<legend><span>Club</span></legend>	<input name="club" type="name" class="name" placeholder="Club" required/><br />
							<legend><span>Country</span></legend>	<input name="club" type="country" class="country" placeholder="Country" required /><br />
								<div class="clear"></div>
							<input type="submit" value="Next" class="next"/>
							   </form>
							
						</div> <!-- #form-->
					</div> <!-- #register -->
				</div> <!-- #event -->
			</div> <!-- #content  -->
		<div class="clear"></div>
			<?php include('template/footer.php'); ?>
		
	</body>
</html>