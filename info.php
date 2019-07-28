<?php
session_start();
?><html>
  <head>
		<title>Simulasi SPK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>
	<body>


    
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="navmenu"style="text-align: right;">
						<ul id="menu">
							<li class="active" ><a href="index.php">Home</a></li>
							<li>
							<?php
							if(isset($_SESSION['login']))
							{?>
							<a href="logout.php">&nbsp; (Logout)</a>
							<?php } else { ?>
							<a href="login_form.php">ADMIN</a> <?php }?></li>
							<li class="last"><a href="info.php">INFO</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p align="center">
		<div class="container" align="center">
			<div class="row wrap" align="center">
				<div class="col-md-12 gallery" align="center"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1" align="center">
							<div data-thumb="" data-src="images/slides/blank.gif" align="center">
									<div class="img-responsive camera_caption fadeFromBottom">
									
									<h1># Project Simulasi Sistem Pendukung Keputusan #</h1>
									<h1><b> Pemilihan Pelayanan Teller Bank Terbaik </b></h1> <h1> Dengan Metode SAW dan TOPSIS </h1>
								</div>
							</div>
							<div data-thumb="" data-src="images/slides/blank.gif" align="center">
								<div class="img-responsive camera_caption fadeFromBottom" align="center">
									
									<h1>"Good Banking is produced not by good laws, but </h1> <h1><i> by good bankers." </i></h1>
									<h1> <b> Hartley Withers </b> </h1>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		</p>
	</div>
		</table>
	
	<br><br><br><br>
	<p align="center">
	<table>
	<tr><td align="center">
	<div class="heart" align="center"></div>
	</td></tr>
	<tr><td align="center"><br>
	<font face="centaur" size="4" color="#B0171F">Pelayanan Prima merupakan pelayanan terbaik yang harus 
	<br> dilakukan dan berikan kepada nasabah/pelanggan.</font>
	</td></tr>
	</table>
	</p>
	<br><br><br><br>
	
	<h1 align="center"> Apa itu Pelayanan Prima ?</h1>	
	<p align="center">
	<image src="http://static1.squarespace.com/static/51e3ae56e4b0ebae3ad28b2b/t/559b5ad3e4b0088fa2951a92/1436244695225/IMG_5809.JPG?format=750w">
	</p>
	
	<p align="center">
	<table><tr><td width="700"><font size="4">
	Pelayanan prima adalah suatu pola layanan terbaik dalam manajemen modern yang mengutamakan kepedulian terhadap pelanggan. Layanan prima di dalam dunia bisnis disebut juga sebagai excellent service. Excellent service, customer service, dan customer care pada dasarnya adalah sama, hanya berbeda pada konsep pendekatannya saja. Namun yang paling penting dalam memberikan pelayanan kepada pelanggan, minimal harus ada tiga hal pokok, yakni: peduli pada pelanggan, melayani dengan tindakan terbaik, dan memuaskan pelanggan dengan berorientasi pada standar layanan tertentu. Jadi, keberhasilan program pelayanan prima tergantung pada penyelarasan kemampuan, sikap, penampilan, perhatian, tindakan, dan tanggungjawab dalam pelaksanaannya.

	<br><br>Sederhananya, pelayanan prima (excellent service) adalah pelayanan yang memenuhi standar kualitas yang sesuai dengan harapan dan kepuasan pelanggan. Sehingga dalam pelayanan prima terdapat dua elemen penting yang saling berkaitan yaitu pelayanan dan kualitas. Kualitas pelayanan sendiri memiliki beberapa definisi yang dikemukakan oleh beberapa ahli. Namun dari beberapa definisi yang dikemukakan, terdapat beberapa kesamaan, yakni:

	<br><b><br>- Kualitas merupakan usaha untuk memenuhi harapan pelanggan

	<br>- Kualitas merupakan kondisi mutu yang setiap saat mengalami perubahan

	<br>- Kualitas mencakup proses, produk, barang, jasa, manusia, dan lingkungan

	<br>- Kualitas merupakan suatu kondisi dinamis yang berhubungan dengan proses, produk, barang, jasa, manusia, dan <br> &nbsp; lingkungan, yang memenuhi harapan
	</b>
	</font></td></tr></table>
	<br><br>
	<h1 align="center"> Konsep Dasar Pelayanan Prima (Excellent Service)</h1>	
	<p align="center">
	<table><tr><td width="700"><font size="4">
	<br>
	<b>1. Kemampuan (Ability)</b>
	<br>
	Kemampuan tertentu yang meliputi kemampuan kerja di bidang kerja yang ditekuni yang dibutuhkan untuk menunjang program layanan prima (excellent service) seperti: melaksanakan komunikasi yang efektif, mengembangkan motivasi, dan menggunakan humas sebagai alat untuk membina hubungan ke dalam dan ke luar oraganisasi / perusahaan.
	<br><br>
	<b>2. Sikap (Attitude)</b>
	<br>
	Perilaku tertentu yang harus ditonjolkan ketika berhadapan dengan pelanggan
	<br><br>
	<b>3. Penampilan (Apprearance)</b>
	<br>
	Penampilan fisik ataupun non-fisik yang merefleksikan kredibilitas kepada pelanggan
	<br><br>
	<b>4. Perhatian (Attention)</b>
	<br>
	Kepedulian penuh terhadap pelanggan, yang berkaitan dengan kebutuhan dan keinginan pelanggan, maupun memahami saran dan kritiknya
	<br><br>	
	<b>5. Tindakan (Action)</b>
	<br>
	Kegiatan nyata yang dilakukan dalam memberikan pelayanan kepada pelanggan
	<br><br>
	<b>6. Tanggung jawab (Accountability)</b>
	<br>
	Sikap keberpihakan kepada pelanggan sebagai bentuk kepedulian, untuk meminimalkan ketidakpuasan pelanggan
	<br>
	</font></td></tr></table>
	<br><br><br><br><br><br><br>
	<a href="#" class="back-to-top up"></a>
	
	<script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                    }
                );
            });
        </script>
	
	 <script>            
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
		</script>
		
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	
</html>
