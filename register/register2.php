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
							<p class="solis collon">2. Competition choise</p>
							<p class=""><img src="img/2solis.png" /></p>
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
								<td class="second">datums un diena</td> <!-- šajā solī izvēlētās dienas, vajadzētu parādītis, pēc izvēles-->
							</tr>
							<tr>
								<td class="first">Sum:</td>
								<td class="second">8 eur</td> <!-- dalības maksa, atkarībā no dienu skaita, grupas-->
							</tr>
					</table>
							
					</div>	 <!-- half dalibnka info -->
				
					<div class="two-thirds">
						      <form  id="sac" action="register3.php#event">
							  <p>I will participate in these following days: <br /></p><p>&nbsp;</p>
										<div>
									<input type="checkbox" value="14" class="diena"  name="sac" /><span>14.04.2015, Magnēts</span><br /> 
									
									<div class="fourteen">
										
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
									</div>
									
									<input type="checkbox" value="15" class="diena"   name="sac" /><span>15.04.2015, Magnēts</span><br /> 
										<div class="fifteen">
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
										</div>
												<input type="checkbox" value="16" class="diena"   name="sac" /><span>16.04.2015, Magnēts</span><br />  
										<div class="sixteen">
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
										</div>		
												<input type="checkbox" value="17-1" class="diena"   name="sac" /><span>17.04.2015, Modul Event 1</span><br /> 
										<div class="seventeen-one">
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
										</div>	
												<input type="checkbox" value="17-2" class="diena"   name="sac" /><span>17.04.2015, Modul Event 2</span><br /> 
											<div class="seventeen-two">
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
										</div>
										<input type="checkbox" value="18" class="diena" name="sac" /><span>18.04.2015, Riga Cup</span><br /> 
										<div class="eightteen">
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
										</div>
										<div class="rank-number">
											<legend>Enter your WR ranking number:</legend>	<input type="number" class="wr18" value="WRnumber" x-moz-errormessage="Please enter your WR number" title="Please enter your WR number" placeholder="WR number"  /><br />
										<br /><br /></div>
											<input type="checkbox" value="19" class="diena"   name="sac" /><span>19.04.2015, Riga Cup</span><br /> 
									<div class="nineteen">
											<select>
												<option value="c" selected>Choose your class</option>
												<option value="E">MW E</option>
												<option value="A">MW A</option>
												<option value="35">MW 35</option>
											</select><br />
										</div>
										<div class="rank-numberr">
											<legend>Enter your WR ranking number:</legend>	<input type="number" class="wr19" value="WRnumber" x-moz-errormessage="Please enter your WR number" title="Please enter your WR number" placeholder="WR number"  /><br />
										<br /><br /></div>
									</div>
								
								<input type="submit" value="Next" class="next">
								
								
							   </form>
					</div> <!-- #half sacensibas -->
				</div> <!-- #form -->
			</div> <!-- #register -->
			</div> <!--#event -->
		<div class="clear"></div>
			<?php include('template/footer.php'); ?>

	</body>
</html>