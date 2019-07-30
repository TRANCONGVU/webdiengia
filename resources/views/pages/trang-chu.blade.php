@extends('master-layout')
@section('content')

<link rel="stylesheet" type="text/css" href="css/home.css">
<script type="text/javascript" src="js/home.js"></script>
<script src="https://kit.fontawesome.com/40e36cd30a.js"></script>

<section class="home-wrap">
	<div class="h-banner">
		<div class="h-banner-top">
			<div class="h-banner-top-black"></div>
			<div class="h-banner-top-text">
				<div>Mr Coach - Trần Hồng Hải</div>
				<div>Giám đốc đào tạo S-Coach</div>
			</div>
		</div>
		<div class="h-banner-bottom">
			<div class="h-banner-bottom-connect">
				Kết nối với Mr Coach
			</div>
			<div class="h-banner-bottom-text">
				<ul>
					<li>
						<a href="">
							<div class="h-banner-bottom-text-member">
								<div>
									<i class="fas fa-envelope"></i>
								</div>
								<div>
									<span class="h-banner-bottom-text-member-number">50.688</span>
									<br>Subscribers
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="h-banner-bottom-text-member">
								<div>
									<i class="fab fa-facebook-f"></i>
								</div>
								<div>
									<span class="h-banner-bottom-text-member-number">6.799</span>
									<br>Fans
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="h-banner-bottom-text-member">
								<div>
									<i class="fab fa-google-plus-g"></i>
								</div>
								<div>
									<span class="h-banner-bottom-text-member-number">539</span>
									<br>Followers
								</div>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="h-banner-bottom-text-member">
								<div>
									<i class="fab fa-youtube"></i>
								</div>
								<div>
									<span class="h-banner-bottom-text-member-number">2,603</span>
									<br>Viewers
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="h-category">
		<div class="container">
			<div class="h-category-title">
				Bạn muốn cải thiện lại gì?
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 text-center offset-md-2">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="https://lh3.googleusercontent.com/-CAo5KQxsijs/VkRryavH6LI/AAAAAAAAACk/dl6EqJUfQOo/s75-Ic42/icon-personal.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Tư duy làm giàu
						</div>
						<div class="h-category-member-content text-center">
							Công thức tạo dựng Thành công bền vững và cuộc sống Hạnh phúc viên mãn
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="https://lh3.googleusercontent.com/-Lyaeg3tzqoY/VkRryrrCYkI/AAAAAAAAACw/W00YQ8HCUFc/s75-Ic42/icon-sales.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Kỹ năng bán hàng
						</div>
						<div class="h-category-member-content text-center">
							Công thức đơn giản để bán bất kỳ sản phẩm nào với bất kỳ giá nào bạn muốn
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="https://lh3.googleusercontent.com/-jIH0q2Vef6Q/VkRrx0lg5rI/AAAAAAAAADU/CsTC5At_fi4/s102-Ic42/icon-business.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Phát triển kinh doanh
						</div>
						<div class="h-category-member-content text-center">
							Sở hữu công ty Triệu đô từ con số 0
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="https://lh3.googleusercontent.com/-79IHSdOFIZ8/VkRrycsFz5I/AAAAAAAAAC8/4hW9rPU8k3c/s75-Ic42/icon-leadership.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Kỹ năng lãnh đạo
						</div>
						<div class="h-category-member-content text-center">
							Công thức để dẫn dắt những người xuất chúng hơn bạn
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 text-center">
					<div class="h-category-member">
						<div class="h-category-member-img">
							<img src="https://lh3.googleusercontent.com/-J-tKSln34Lo/VkRryr4Fx8I/AAAAAAAAAC0/JMFZrtBRwdo/s75-Ic42/icon-speaking.jpg">
						</div>
						<div class="h-category-member-title text-center">
							Thuyết trình trên sân khấu
						</div>
						<div class="h-category-member-content text-center">
							Làm chủ sân khấu ngay từ giây đầu tiên bạn xuất hiện
						</div>
						<div class="h-category-member-more">
							<a href="" class="btn btn-warning">Tìm hiểu thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="h-blog">
		<div class="container">
			<div class="h-blog-title text-center">
				Bài viết gần đây
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="http://phamngocanh.com/wp-content/uploads/2019/07/ông-tôi-2.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Ông tôi kể chuyện rất hay (P.2): Nhớ mãi kỉ niệm cháu dẫn bạn gái về ‘ra mắt’ ông
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="http://phamngocanh.com/wp-content/uploads/2019/07/ông-tôi-2.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Ông tôi kể chuyện rất hay (P.3): Nhớ mãi kỉ niệm cháu dẫn bạn gái về ‘ra mắt’ ông
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="http://phamngocanh.com/wp-content/uploads/2019/07/1-12.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Làm quản lý đừng ngại khắt khe, bởi đó chính là liều thuốc để “nhào nặn” nên nhân viên giỏi
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="h-blog-member">
						<a href="">
							<div>
								<div class="h-blog-member-img">
									<img src="http://phamngocanh.com/wp-content/uploads/2019/07/sau-tuoi-40.jpg" class="img-fluid">
								</div>
								<div class="h-blog-member-content">
									Sau tuổi 40 có những việc không thể làm và những điều không được đợi
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="h-blog-more text-center">
				<a href="">Xem các bài viết khác</a>
			</div>
		</div>
	</div>
	<div class="h-sign-in">
		<div class="container">
			<div class="h-sign-in-title">
				Nhận những chia sẻ hay từ MrCoach - Trần Hồng Hải
			</div>
			<div class="h-sign-in-form">
				<form>
					<div class="row">
						<div class="col-md-4">
							<input type="text" placeholder="Tên của bạn">
						</div>
						<div class="col-md-4">
							<input type="email" placeholder="Email bạn hay sử dụng">
						</div>
						<div class="col-md-4">
							<button class="btn btn-warning">Tham gia cùng 50.688 người</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="h-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="h-about-youtube">
						<iframe style="max-width: 511px; width: 100%; height: 290px;" src="https://www.youtube.com/embed/vJalPhIlOm8" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<div class="h-about-content">
						<div>Về Trần Hồng Hải</div>
						<div>Doanh nhân, chuyên gia huấn luyện phát triển cá nhân.</div>
						<div>Mr Coach – Trần Hồng Hải hiện là Giám đốc đào tạo S-Coach, tổ chức đào tạo hàng đầu về Phát triển cá nhân, Kinh doanh, hỗ trợ kỹ năng cho doanh nghiệp. Mục tiêu của doanh nhân – diễn giả Phạm Ngọc Anh là xây dựng cộng đồng 50.000 doanh nhân thế hệ mới để góp phần định vị lại Việt Nam trên bản đồ kinh tế thế giới vào năm 2020. Với kinh nghiệm 15 năm giảng dạy trong lĩnh vực đào tạo, diễn giả Phạm Ngọc Anh mong muốn truyền đạt những bài học, kiến thức giúp các học viên khám phá sức mạnh tiềm ẩn của bản thân và tự tin phát triển sự nghiệp của mình.</div>
						<div>
							<a href="" class="btn btn-warning">Đọc tiếp</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="h-speak">
		<div class="container">
			<div class="h-speak-title">
				Đào tạo - Huấn luyện
			</div>
		</div>
	</div>
</section>

@endsection
