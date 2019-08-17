<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<div class="container background">
				<div class="top-header">
					<div class="row">
						<div class="col-md-4">
							<div class="logo">
								<img src="images/logo.png" alt="">
							</div>
						</div>
						<div class="col-md-8">
							<div class="menu">
								<ul>
									<li>
										<img src="images/search.png" alt="">
										<a href="">Tìm rao vặt</a>
									</li>
									<li>
										<img src="images/bell.png" alt="">
										<a href="">Thông báo</a>
									</li>
									<li>
										<img src="images/chat.png" alt="">
										<a href="">Chat</a>
									</li>
									<li>
										<img src="images/sell.png" alt="">
										<a href="">Tôi bán</a>
									</li>
									<li>
										<img src="images/more.png" alt="">
										<a href="">Thêm</a>
									</li>
									<li>
										<a href=""><button id="dangtin">ĐĂNG TIN</button></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="bottom-header">
					<div class="row">
						<div class="col-md-4 align" id="arrow">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="col-md-4 text-center align">
							<strong>Hình ảnh</strong>
						</div>
						<div class="col-md-4 align" style="text-align: right;">
							Xem trước
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div class="content">
			<section class="image">
				<div class="row">
					<div class="img" id="preview">

					</div>
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="img">
							<a href="" id="select_img"><img src="images/upload.png" alt="" width="150px" height="150"></a>
							<input type="file" id="img" name="file[]" multiple>
							<span id="filePath"></span>
							
						</div>
					</form>
				</div>
				<div class="status alert alert-success"></div>
			</section>
			<section class="note">
				<h5>Để bán nhanh hơn, nên chụp:</h5>
				<ul>
					<li>Khổ ngang để hình đẹp hơn</li>
					<li>Ngoại thất: đầu, đuôi, ngang hông xe, mâm xe, khoang động cơ, ...</li>
					<li>Nội thất: ghế, loa, ngăn chứa đồ...</li>
					<li>Đặc điểm cần chú ý: vết trầy, xước (nếu có)</li>
				</ul>
				<h5>Không nên</h5>
				<ul>
					<li>Không dùng hình từ internet</li>
					<li>Không chèn số điện thoại/ website/ logo</li>
				</ul>
			</section>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<!-- <script src="Hello World"></script> -->
		<script src="js/script.js"></script>
	
	</body>
</html>