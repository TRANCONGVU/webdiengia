	<header class="header container-fluid">

	</header>

	<nav class="nav-horizontal container-fluid">
		<div class="nav-horizontal-container container">

			<div class="nav-horizontal-content d-flex justify-content-between">
                <div class="logo" >
                    <img style="width : 60px" src="image/logo.jpg" alt="">
                </div>
				<ul class="nav-ul-lv-1">
                        <li><a href="#">Trang chủ</a></li>
                        <li>
							<a href="{{ url('gioi-thieu') }}">Giới thiệu</a>

                        </li>
                       <li>
							<a href="#">Blog<i class="fas fa-plus"></i></a>
							<ul class="nav-ul-lv-2">
								<li>
									<a href="#">Phát triển cá nhân</a>
									<a href="#">Kiến thức kinh doanh</a>
								</li>
							</ul>
                        </li>
                        <li class="lienhe-led"><a href="#">E-magazine</a></li>
                        <li class="lienhe-led"><a href="#">Khóa học</a>
                            <ul class="nav-ul-lv-2">
								<li>
									<a href="#">Khóa học đào tạo</a>
                                    <a href="#">Khóa học bán hàng</a>
                                    <a href="">Phát triển bản thân</a>
								</li>
							</ul>
                        </li>
                        <li class="lienhe-led"><a href="{{ route('lien-he') }}">liên hệ</a></li>
                        <li class="lienhe-led"><a href="{{ route('qua-tang') }}">Quà tặng</a></li>
					</ul>
				<div class="menu-mobile-button"><i class="fas fa-bars"></i></div>
			</div>
		</div>
	</nav>
	<script type="text/javascript" src="js/nav-horizontal.js"></script>

	<section class="menu-mobile">
		<div class="menu-mobile-bg"></div>
		<div class="menu-mobile-box">
			<div class="menu-mobile-info">

			</div>
			<div class="menu-mobile-content">
				<div class="menu-left">
					<div class="menu-left-title"><h3>Menu</h3></div>
					<div class="menu-left-content">

						<ul class="menu-left-ul-lv-1">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li>
							<a href="#">Blog</a>
							<i class="fas fa-plus"></i>
							<ul class="menu-left-ul-lv-child">
								<li><a href="#">Lĩnh vực 1</a></li>
								<li><a href="#">Lĩnh vực 2</a></li>
								<li><a href="#">Lĩnh vực 3</a></li>
							</ul>
                        </li>
                        <li><a href="#">E-Magazine</a>
                            <i class="fas fa-plus"></i>
							<ul class="menu-left-ul-lv-child">
								<li><a href="#">Lĩnh vực 1</a></li>
								<li><a href="#">Lĩnh vực 2</a></li>
								<li><a href="#">Lĩnh vực 3</a></li>
							</ul>
                        </li>
                        <li><a href="#">Khóa Học</a></li>
                        <li><a href="{{ route('lien-he') }}">liên hệ</a></li>
                        <li><a href="{{ route('qua-tang') }}">Quà tặng</a></li>

					</ul>

					</div> <!-- menu-left-content -->
				</div> <!-- menu-left -->
				<script type="text/javascript" src="js/menu-left-js.js"></script>
			</div>
		</div>
		<script type="text/javascript" src="js/menu-mobile.js"></script>
	</section>

