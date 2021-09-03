<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<?php
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 배상책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/
?>




<!-------------------------- 슬라이드 -------------------------->

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active"> <img src="img/we1.jpg">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4"></h3>
		  <p class="ks4 f20"></p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item"> <img src="img/clio7.jpg">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4"></h3>
		  <p class="ks4 f20"></p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item"> <img src="img/we2.jpg">
		<div class="carousel-caption d-md-block">
		</div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->


<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-80"></div>
<div class="container">
	<div class="center-heading en1">
		<h2>클리오 신상 <strong></strong> </h2>


	</div>
	<!-------------------------- 첫번째 줄 -------------------------->
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-lg-3">
      <img src="img/clio2.jpg">

				<div class="icon">
					<div class="info-pink">
					<center><br>
            프로 아이 팔레트  (11호~13호)
        </br>
          <p>
            <b class="slae">30%</b>  <strong>32,000원</strong> 22,400원</P>
      <img src="img/sale.png" >
        <img src="img/new.png">
      </center>
          <div class="margin-top-20 margin-bottom-20">
          </div>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->


		<div class="col-xs-12 col-sm-6 col-lg-3">
        <img src="img/clio3.gif">
				<div class="icon">
					<div class="info-pink-2">
						<center><br>
              킬커버 밀착광채 쿠션 기획세트
					</br>
            <p>
              <b class="slae">30%</b> <strong>32,000원</strong> 22,400원</p>
              <img src="img/sale.png">
              <img src="img/new.png">
              </center>
						<div class="margin-top-20 margin-bottom-20">
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->

		<div class="col-xs-12 col-sm-6 col-lg-3">
      <img src="img/clio4.jpg">
				<div class="icon">
					<div class="info-1">
            <center><br>
                멜팅 쉬어 글로우밤
            </br>
              <p>
              <b class="slae">30%</b> <strong>32,000원</strong> 16,000원    </p>
              <img src="img/sale.png">
              <img src="img/new.png"></center>
						<div class="margin-top-20 margin-bottom-20">
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->

		<div class="col-xs-12 col-sm-6 col-lg-3">
				<div class="icon">
        <img src="img/clio5.jpg">
					<div class="info">
            <span class="yStar">
				<center>	<br>
              킬커버 파운웨어쿠션 올뉴 기획세트
          </br><p>
          <b class="slae">30% </b> <strong> 32,000원</strong>    22,400원</p>

      <img src="img/sale.png">
      <img src="img/new.png">

<div class="margin-top-20 margin-bottom-20">
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div><!-- ./col -->
	</div><!-- /row -->




	<div class="hidden-xs hidden-sm margin-top-30"></div><!-- pc 만 적용 -->


	<!-------------------------- 두번째줄 -------------------------->





<!-------------------------- 테마소개 + 유튜브영상 -------------------------->
<!--
백그라운드 색상을 조정해주시면 됩니다.
-->

<div class="py-5 margin-top-80" style="background:#d7eafb;">
	<div class="container margin-top-80">
	  <div class="row">
		<div class="col-lg-6">
       <h1 class="en1">클리오 동영상</h1>
		 <iframe width="560" height="315" src="https://www.youtube.com/embed/xvaNrAYD7Ro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-6">



  <p> <strong>출근 했는데 회사에 스트레이 키즈가 있다면...???</strong></p>

  ✔ 클리오 X 스트레이키즈
  프로 아이 팔레트 리미티드 <strong><br>✔ 에디션 2종이 출시</strong>되었습니다!</br>

✔ 오피스 컨셉으로 진행된 이번 촬영 현장의 생생한 메이킹 <strong>✔ 필름 대.공.개!!</strong>

		</div>
	  </div>
	</div>
</div>





<!-------------------------- USE A LIBRARY -------------------------->
<div class="parallax-window" data-parallax="scroll">

		<div class="row">
			<div class="col-md-12 text-center p-center para-text">
        <img src="img/clio14.jpg">
			<button type="button"class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="https://www.instagram.com/p/CS6TUP-nYW9/"'>인스타그램 바로가기</button>
			</div>
		</div>
	</div>
</div>



<!-------------------------- USE A LIBRARY -------------------------->



<div class="py-5" style="background:withe">
	<div class="container">
		<div class="center-heading margin-top-40">
				<h2>베스트 리뷰 <strong></strong> </h2>
			<img src="img/clio11.JPG">
      <img src="img/clio13.jpg">
    </div>
	  <div class="row margin-top-50 margin-bottom-50">
		<div class="col-lg-6 text-left">
    </div>
		<div class="col-lg-6">
    </div>
  </div>
	  <!-- /.row -->
	</div>
</div>
<div class="parallax-window" data-parallax="scroll">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center p-center para-text">
        <img src="img/1jpg.jpg">
        <button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="https://www.cliocosmetic.com/ko/about/shopOffline.asp"'>클리오 매장 찾기</button>
			</div>
		</div>
	</div>
</div>





<!-------------------------- 회사소개 및 안내 -------------------------->
<div class="container margin-top-80 margin-bottom-80">
	<div class="center-heading margin-top-40">
		<h2 class="en1"></h2>


	</div>
	<!-- LATEST : pic_basic_company -->
	<?php echo latest('theme/pic_basic_company', 'gallery', 6, 24); ?>
</div>





<!-------------------------- parallax 박스 및 countdown -------------------------->
<!--

테마폴더/tail.php : 94번째줄에서 이미지를 교체해주세요.

-->
<!-- /parallax -->



<!-------------------------- GALLERY -------------------------->
<!--

테마폴더/tail.php : 99번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정
-->





<?php
/*
	<!-------------------------- CALL ACTION -------------------------->
	<div class="callbox">
		<div class="container margin-top-20">
		<h3 class="margin-bottom-50 text-left en1">ETY DEMO</h3>
		  <div class="row">
			<div class="col-md-8">
			  <p class="ks4">
			  에티테마에 대한 궁금증이나 질문이 있으시면 에티테마의 질문게시판을 이용해주세요.<BR />
			  http://ety.kr/board/qa
			  </p>
			</div>
			<div class="col-md-4">
			  <a class="btn btn-lg btn-secondary btn-block en1" href="http://ety.kr/board/qa" target="_blank">GO!</a>
			</div>
		  </div>
		</div>
	</div>
	<!-- /.container -->
*/
?>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
