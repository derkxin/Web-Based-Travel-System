<?php
	session_start();
	$title = "Home";
	$background = "#E5E4E2";
?>

<!DOCTYPE html>
<html>
		<?php include('header.php');	?>
		<style>
		<?php include('css/main.css')?>
		</style>

		<div class="slideshow-container">

			<div class="mySlides fade">
			  <img src="pic/slide1.jpg" style="width:100%; filter: blur(2px);-webkit-filter: blur(2px);">
			  <div class="text">A Journey Of a Thousand Miles Must Begin With a Single Step.</div>
			</div>

			<div class="mySlides fade">
			  <img src="pic/slide2.jpg" style="width:100%; filter: blur(2px);-webkit-filter: blur(2px);">
			  <div class="text">I travel not to go anywhere, but to go. I travel for travel's sake. The great affair is to move.</div>
			</div>

			<div class="mySlides fade">
			  <img src="pic/slide3.jpg" style="width:100%; filter: blur(2px);-webkit-filter: blur(2px);">
			  <div class="text">Don’t tell me how educated you are, tell me how much you’ve travelled.</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		}
		</script>

		<hr class="straightline"; style="margin-top:50px"; />
		<h1 class="title">Incredible Destinations</h1>
		<hr class="straightline"></hr>
		<div class="tablestyle">
		<table>
			<tr>
				<td><center>
					<div class="imgstyle">
						<a href="https://www.tripadvisor.com.my/Tourism-g298283-Langkawi_Langkawi_District_Kedah-Vacations.html">
						<img src="pic/melaka.jpg"; width="100%";height="30%"; alt="langkawi";>
						<p>Melaka</p></a>
					</div>
				</center></td>

				<td><center>
					<div class="imgstyle">
						<a href="https://www.tripadvisor.com.my/Tourism-g298303-George_Town_Penang_Island_Penang-Vacations.html">
						<img src="pic/kl.jpg"; width="100%" ; height="30%"; alt="langkawi";>
						<p>Kuala Lumpur</p></a>
					</div>
				</center></td>

				<td><center>
					<div class="imgstyle">
						<a href="https://www.tripadvisor.com.my/Tourism-g666315-Cherating_Kuantan_District_Pahang-Vacations.html">
						<img src="pic/JB.jpg"; width="100%";height="30%"; alt="jb";>
						<p>Johor</p></a>
					</div>
				</center></td>
			</tr>
			<tr>
				<td><center>
					<div class="imgstyle">
						<a href="https://www.tripadvisor.com.my/Tourism-g298283-Langkawi_Langkawi_District_Kedah-Vacations.html">
						<img src="pic/langkawi.jpg"; width="100%";height="30%"; alt="langkawi";>
						<p>Langkawi</p></a>
					</div>
				</center></td>
				<td><center>
					<div class="imgstyle">
						<a href="https://www.tripadvisor.com.my/Tourism-g298303-George_Town_Penang_Island_Penang-Vacations.html">
						<img src="pic/penang.jpg"; width="100%" ; height="30%"; alt="langkawi";>
						<p>Penang</p></a>
					</div>
				</center></td>

				<td><center>
					<div class="imgstyle">
						<a href="https://www.tripadvisor.com.my/Tourism-g666315-Cherating_Kuantan_District_Pahang-Vacations.html">
						<img src="pic/sabah.jpg"; width="100%";height="30%"; alt="langkawi";>
						<p>Sabah</p></a>
					</div>
				</center></td>
			</tr>
		</table>
		</div>
		
	<hr class="straightline"; style="margin-top:50px"; />
		<h1 class="title">Gallery</h1>
		<hr class="straightline" style="margin-bottom:50px;"></hr>
		<table style="padding:2%">
			<tr>
				<td class="gallery"><img src="gallery/act1.jpg"; width="100%";height="30%"; alt="activity1";></td>
				<td class="gallery"><img src="gallery/act2.jpg"; width="100%";height="30%"; alt="activity2";></td>
				<td class="gallery"><img src="gallery/act3.jpg"; width="100%";height="30%"; alt="activity3";></td>
			</tr>
			<tr>
				<td class="gallery"><img src="gallery/act4.jpg"; width="100%";height="30%"; alt="activity4";></td>
				<td class="gallery"><img src="gallery/act5.jpg"; width="100%";height="30%"; alt="activity5";></td>
				<td class="gallery"><img src="gallery/act6.jpg"; width="100%";height="30%"; alt="activity6";></td>
			</tr>
			<tr>
				<td class="gallery"><img src="gallery/act7.jpg"; width="100%";height="30%"; alt="activity7";></td>
				<td class="gallery"><img src="gallery/act8.jpg"; width="100%";height="30%"; alt="activity8";></td>
				<td class="gallery"><img src="gallery/act9.jpg"; width="100%";height="30%"; alt="activity9";></td>
			</tr>
			<tr>
				<td class="gallery"><img src="gallery/act10.jpg"; width="100%";height="30%"; alt="activity10";></td>
				<td class="gallery"><img src="gallery/act11.jpg"; width="100%";height="30%"; alt="activity11";></td>
				<td class="gallery"><img src="gallery/act12.jpg"; width="100%";height="30%"; alt="activity12";></td>
			</tr>
		</table>

		<?php include('footer.php'); ?>
