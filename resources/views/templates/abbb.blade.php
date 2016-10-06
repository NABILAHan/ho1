@extends('hotel')

@section('content')
<div class="banner1 about-bnr">
	</div>
<div class="welcome">
		<div class="container">
			<h1 class="hdng">Welcome</h1>
			
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<img src="http://www.me-fi.com/saranya/uploadfile/020150705125901.JPG" alt=""/>
				</div>
				<div class="col-md-6 welcome-grids">
					<img src="http://static.tlcdn2.com/data/11/pictures/0213/03-04-2013/p17kptno903q6hsaaf99rp1gev5.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>ดี อามาน โฮเต็ล แอด์ รีสอร์ท ตั้งอยู่ติดถนนสายเอเชียระหว่างหลักกิโลเมตรที่ 35 เลขที่ 311 หมู่ที่ 1 ตำบลสะกอม อำเภอเทพา จังหวัดสงขลา เป็นธุรกิจในเครือของบริษัท ดี อามาน กรุ๊ป จำกัด ซึ่งได้ซื้อกิจการลีลา รีสอร์ท จากคุณโชติ ลีลาภรณ์ เมื่อวันที่ 11 มกราคม 2556 และ ได้เข้าบริการกิจการพร้อมกับเปลี่ยนชื่อเป็น ดี อามาน โฮเต็ล แอนด์ รีสอร์ท ตั้งแต่บัดนั้นจนถึงปัจจุบัน ดี อามาน โฮเต็ล แอนด์ รีสอร์ท ตั้งอยู่บริเวณชาย   หาดสะกอมบนเนื้อที่กว่า 32 ไร่ ทิศตะวันออกติดชายหาดยาว ทิศตะวันตกติดโครงการขนาดใหญ่และครบวงจร ดี อามาน โฮเต็ล แอน์ รีสอร์ท ได้สำรอง ที่พักเป็นบังกะโล จำนวน 26 หลัง  และห้องพักเป็นเรือนแถวอีก 49 ห้อง สามารถรองรับผู้เข้าพักได้มากกว่า 200 คน มีห้องประชุมขนาดใหญ่สามารถรองรับผู้เข้าร่วมประชุม 200-500 คน จำนวน 2 หลัง </p>			
		</div>
	</div>
	<div class="services">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</div>
							</div>	
						</li>	
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
								</div>
							</div>	
						</li>
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
								</div>
							</div>	
						</li>
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
								</div>
							</div>	
						</li>
					</ul>
				</div>
			</section>
			<!--FlexSlider-->					
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!--End-slider-script-->		
		</div>
	</div>
	
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
@endsection
