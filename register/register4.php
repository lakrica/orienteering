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
							<p class="solis collon">4.Payment method</p>
							<p class=""><img src="img/solis4.png" /></p>
						</div>	
					</div>	
					<div class="clear"></div>
				

			<div id="register">
				<div id="form">	
					<div id="participant" class="third">
						<button><-- Return to first step</button>  <!-- atgriežas pirmajā solī, bet laukos vajadzētu būt esošajai info, tiem nevajadzētu būt tukšiem -->
						<table>
							<tr>
								<td class="first">Name:</td>
								<td class="second">Māris</td> <!-- 1 solī ievadītais vārds-->
							</tr>
							<tr>
								<td class="first">Last Name:</td>
								<td  class="second">Berķis</td> <!-- 1 solī ievadītais uzvārds-->
							</tr>
							<tr>
								<td class="first">Email:</td>
								<td  class="second">Māris@māris.lv</td> <!--1 solī ievadītais epasts-->
							</tr>
							<tr>
								<td class="first">Year of birth:</td>
								<td  class="second">1984</td> <!-- 1 solī ievadītais dz g-->
							</tr>
							<tr>
								<td class="first">Gender:</td>
								<td  class="second">Male</td> <!-- 1 solī ievadītais dzimums-->
							</tr>
							<tr>
								<td class="first">Sport Ident:</td>
								<td  class="second">123456</td> <!-- ja nav numurs tad 'rented' -->
							</tr>
							<tr>
								<td class="first">Club:</td>
								<td  class="second">Lakrica</td> <!-- 1 solī ievadītais klubs-->
							</tr>
							<tr>
								<td class="first step">Country:</td>
								<td  class="second">Estonia</td> <!-- 1 solī ievadītā valsts-->
							</tr>
							<tr>
								<td class="first">&nbsp;</td>
								<td class="second">&nbsp;</td> 
							</tr>
							<tr>
								<td class="first">Days:</td>
								<td class="second">datums un diena</td> <!-- ipriekējā  solī izvēlētās dienas, vajadzētu parādītis, pēc izvēles-->
							</tr>
							<tr>
								<td class="first">Sum:</td>
								<td class="second">8 eur</td> <!-- dalības maksa, atkarībā no dienu skaita, grupas-->
							</tr>
							<tr>
								<td class="first">&nbsp;</td> 
								<td class="second">&nbsp;</td> 
							</tr>
							<tr>
								<td class="first">Extras:</td> <!-- izvēlētās extras -->
								<td class="second">&nbsp;</td> 
							</tr>
								<tr>
								<td class="first">Sum:</td> <!-- summa par extrām -->
								<td class="second">&nbsp;</td> 
							</tr>
							</tr>
								<tr>
								<td class="first">&nbsp;</td> 
								<td class="second">&nbsp;</td> 
							</tr>
							</tr>
								<tr>
								<td class="first">Total:</td> <!-- kopējā summa-->
								<td class="second">&nbsp;</td> 
							</tr>
					</table>
							
					</div>	 <!-- half dalibnka info -->
				
					<div class="two-thirds" id="total">
						<table>
							<tr>
								<td class="first">Days:</td>
								<td class="second">datums un diena</td> <!-- ipriekējā  solī izvēlētās dienas, vajadzētu parādītis, pēc izvēles-->
							</tr>
							<tr>
								<td class="first">Sum:</td>
								<td class="second">8 eur</td> <!-- dalības maksa, atkarībā no dienu skaita, grupas-->
							</tr>
							<tr>
								<td class="first">&nbsp;</td> 
								<td class="second">&nbsp;</td> 
							</tr>
							<tr>
								<td class="first">Extras:</td> <!-- izvēlētās extras -->
								<td class="second">&nbsp;</td> 
							</tr>
								<tr>
								<td class="first">Sum:</td> <!-- summa par extrām -->
								<td class="second">&nbsp;</td> 
							</tr>
							</tr>
								<tr>
								<td class="first">&nbsp;</td> 
								<td class="second">&nbsp;</td> 
							</tr>
							</tr>
								<tr>
								<td class="first">Total:</td> <!-- kopējā summa-->
								<td class="second">&nbsp;</td> 
							</tr>
							</tr>
								<tr>
								<td class="first">&nbsp;</td> 
								<td class="second">&nbsp;</td> 
							</tr>
					</table>
						      <form  id="payment" action="thankyou.php#event">
							  
							  <legend  class="top"><span>Payment method:<span></legend>
									<div id="bullets">
									<input type="radio" name="payment" value="bank" class="bullet" required selected /><label>Bank transfer</label><br />
									<input type="radio" name="payment" value="cash" class="bullet" required /><label>Cash</label>
									</div>
									<div class="clear"></div>									
									<div id="agreement"><input type="checkbox" value="agreement" class="agreement"  name="agreement"  /><span>Apstiprinu, ka neierašanās gadījumā, apņemos segt 50% no dalības maksas.</span>
									</div>
								<input type="submit" value="Finish" class="next">
								
								
							   </form>
					</div> <!-- #half sacensibas -->
				</div> <!-- #form -->
			</div> <!-- #register -->
			</div> <!--#event -->
		<div class="clear"></div>
			<?php include('template/footer.php'); ?>

	</body>
</html>