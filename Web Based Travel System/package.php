<?php
    session_start();
    $title = "Package";
    include_once 'header.php';

?>

<!DOCTYPE html>
<style>
<?php include_once 'css/package.css'; ?>
</style>
<html>
  <body>
		<div style="margin-top:50px;"/>
		<hr class="linebreak1"></hr>
		<h1>COMPLIMENTARY</h1>
		<hr class="linebreak1"></hr>
		<div style="margin-top:50px;"/>

		<table class="logo">
			<tr>
				<td><center>
          <div class="movelogo">
						<img src="package/luggage.png"; alt="langkawi"; class="smallsize";>
						<p>Baggage Allowance</p>
          </div>
				</center></td>

				<td><center>
          <div class="movelogo">
						<img src="package/meal.png"; alt="langkawi"; class="smallsize";>
						<p>Flight Meals</p>
          </div>
				</center></td>

				<td><center>
          <div class="movelogo">
						<img src="package/seat.png"; alt="langkawi"; class="smallsize";>
						<p>Seat Selection</p>
          </div>
				</center></td>
			</tr>
    </table>

		<div style="margin-top:50px;"/>
		<hr class="linebreak1"></hr>
		<h1>ALL PACKAGES</h1>
		<hr class="linebreak1"></hr>

		<div style="margin-top:50px;"/>
		<input id="Button1" type="button" value="West Malaysia" onclick="func1();"/>
		<div style="margin-top:50px;"/>

		<div id="Div1" >
			<table class="tablestyle">
				<tr>
					<td class="table-border";>
						<img src ="package/lang-act.jpg"; alt="langkawi"; class="imgstyle";>
					</td>
					<td>
						<table class="table-border";>
							<tr >
								<td class="table-border nospace";>Name :</td>
								<td class="table-border";> Langkawi Trip</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Type</td>
								<td class="table-border";> Luxury</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Cost:</td>
								<td class="table-border";>RM 2000</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Include:</td>
								<td class="table-border";>Hotel, Airlines, meals</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Description:</td>
								<td class="table-border";>This is a three days two nights
										trips. We stay in a 5-star hotel for this staycation.
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="table-border";>
						<img src="package/penang-act.jpg"; alt="penang"; class="imgstyle">
					</td>
						<td>
							<table class="table-border";>
								<tr >
									<td class="table-border nospace";>Name :</td>
									<td class="table-border";> Penang Trip</td>
								</tr>
								<tr>
									<td class="table-border nospace";>Type</td>
									<td class="table-border";> Luxury</td>
								</tr>
								<tr>
									<td class="table-border nospace nospace";>Cost:</td>
									<td class="table-border";>RM 2000</td>
								</tr>
								<tr>
									<td class="table-border nospace";>Package Include:</td>
									<td class="table-border";>Hotel, Airlines, meals</td>
								</tr>
								<tr>
									<td class="table-border nospace";>Package Description:</td>
									<td class="table-border";>This is a three days two nights
											trips. We stay in a 5-star hotel for this staycation.</td>
								</tr>
							</table>
						</td>
					</td>
				</tr>
				<tr>
					<td class="table-border";>
						<img src="package/mlk-act.jpg"; alt="melaka"; class="imgstyle">
					</td>
					<td>
						<table class="table-border";>
							<tr >
								<td class="table-border nospace";>Name :</td>
								<td class="table-border";> Melaka Trip</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Type</td>
								<td class="table-border";> Luxury</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Cost:</td>
								<td class="table-border";>RM 2000</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Include:</td>
								<td class="table-border";>Hotel, Airlines, meals</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Description:</td>
								<td class="table-border";>This is a three days two nights
										trips. We stay in a 5-star hotel for this staycation.</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>

		<div id="Div2" >
			<table class="tablestyle">
				<tr>
					<td class="table-border";>
						<img src ="package/sabah-act.jpg"; alt="sabah"; class="imgstyle";>
					</td>
					<td>
						<table class="table-border";>
							<tr >
								<td class="table-border nospace";>Name :</td>
								<td class="table-border";> Sabah Trip</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Type</td>
								<td class="table-border";> Luxury</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Cost:</td>
								<td class="table-border";>RM 2000</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Include:</td>
								<td class="table-border";>Hotel, Airlines, meals</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Description:</td>
								<td class="table-border";>This is a three days two nights
										trips. We stay in a 5-star hotel for this staycation.</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="table-border";>
						<img src="package/kuching-act.jpg"; alt="kuching"; class="imgstyle">
					</td>
						<td>
							<table class="table-border";>
								<tr >
									<td class="table-border nospace";>Name :</td>
									<td class="table-border";> Kuching Trip</td>
								</tr>
								<tr>
									<td class="table-border nospace";>Type</td>
									<td class="table-border";> Luxury</td>
								</tr>
								<tr>
									<td class="table-border nospace nospace";>Cost:</td>
									<td class="table-border";>RM 2000</td>
								</tr>
								<tr>
									<td class="table-border nospace";>Package Include:</td>
									<td class="table-border";>Hotel, Airlines, meals</td>
								</tr>
								<tr>
									<td class="table-border nospace";>Package Description:</td>
									<td class="table-border";>This is a three days two nights
											trips. We stay in a 5-star hotel for this staycation.</td>
								</tr>
							</table>
						</td>
					</td>
				</tr>
				<tr>
					<td class="table-border";>
						<img src="package/btl-act.jpg"; alt="bintulu"; class="imgstyle">
					</td>
					<td>
						<table class="table-border";>
							<tr >
								<td class="table-border nospace";>Name :</td>
								<td class="table-border";>Bintulu Trip</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Type</td>
								<td class="table-border";> Luxury</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Cost:</td>
								<td class="table-border";>RM 2000</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Include:</td>
								<td class="table-border";>Hotel, Airlines, meals</td>
							</tr>
							<tr>
								<td class="table-border nospace";>Package Description:</td>
								<td class="table-border";>This is a three days two nights
										trips. We stay in a 5-star hotel for this staycation.</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>

		<div style="margin-top:100px";></div>

		<script>
		function func1() {
        if (document.getElementById('Div1')) {
            if (document.getElementById('Div1').style.display == 'none') {
                document.getElementById('Div1').style.display = 'block';
                document.getElementById('Div2').style.display = 'none';
								document.getElementById("Button1").value="West Malaysia";
            }
            else {
                document.getElementById('Div1').style.display = 'none';
                document.getElementById('Div2').style.display = 'block';
								 document.getElementById("Button1").value="East Malaysia";
            }
        }
		}
		</script>
  </body>
</html>

<?php include_once 'footer.php'; ?>
