<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\phpStudy\PHPTutorial\WWW\adsence-cms\public/../application/home\view\home\list.html";i:1598952304;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>list</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="/new_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_2011200_z8ho3b7msg.css" />
		<link rel="stylesheet" type="text/css" href="/new_assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="/new_assets/css/responsive.css">
	</head>
	<body>

		<!-- adv in mobile -->
		<div class="adv-area">
			<img src="/new_assets/img/ad_345x345.jpg" width="300" height="250">
		</div>

		<section class="main">
			<div class="brand-nav">
				<div class="container">
					<div class="brand-nav-in">
						<a class="home" href="index.html">Home</a>
						<i>></i>
						<a class="detail" href="detail.html">Destination</a>
					</div>
				</div>
			</div>
			<div class="container index-container">
				<article class="col-md-8 col-sm-7 col-xs-12">
					<ul class="art-group list-group">
						<?php foreach($data as $key => $val): ?>
							<li>
								<h3 class="art-tit">
									<a href="/index.php/home/index/details?id=<?php echo $val['id']; ?>">10 Best Balinese Food Neighborhood Foods You Must Try WhenVisiting Bali</a>
									<dl class="art-by">
										<dt class="art-author">
											<span>by</span><a class="art-action" href="javascript:void(0)"><?php echo $val['name']; ?></a>
										</dt>
										<dt class="art-time">
											<a href="javascript:void(0)"><i class="iconfont icon-shijian"></i><?php echo $val['createtime']; ?></a>
										</dt>
										<dt class="art-time">
											<a href="javascript:void(0)"><i class="iconfont icon-pinglun"></i>0</a>
										</dt>
									</dl>
								</h3>
								<div>
									<div class="art-pic">
										<a href="javascript:void(0)">
											<img src="<?php echo $val['logo']; ?>">
										</a>
									</div>
									<figure class="art-in">
										<div class="art-cont">

											<p class="art-line"><?php echo $val['sketch']; ?></p>
											<a class="read-more" href="/index.php/home/index/details?id=<?php echo $val['id']; ?>">Read more</a>
										</div>
									</figure>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
					<ul class="pagination" id="pagination">

					</ul>
				</article>
				<aside class="col-sm-4 col-xs-12 pc-right">
					<div class="adv-right">
						<img src="/new_assets/img/ad_345x345.jpg" width="300" height="250">
					</div>
				</aside>
			</div>
		</section>
		<!-- footer -->
		<footer class="adv-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a class="footer-logo" href="javascript:void(0)">
							<img src="/new_assets/img/logo.png" class="img-responsive">
						</a>
						<p class="foot-info">
							We bring you the best Premium WordPress Themes that perfect for news, magazine, personal blog, etc.
							<br>
							<br>
							<a href="javascript:void(0)">Read more</a>
						</p>
					</div>
					<div class="col-md-3">
						<h4 class="footer-tit">Categories</h4>
						<div class="cate-type">
							<a href="javascript:void(0)">Destination</a>
							<a href="javascript:void(0)">Photo</a>
							<a href="javascript:void(0)">Food & Drink</a>
							<a href="javascript:void(0)">Travel Ideas</a>
							<a href="javascript:void(0)">News</a>
							<a href="javascript:void(0)">Video</a>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="footer-tit">Tags</h4>
						<div class="tag-type">
							<a href="javascript:void(0)">Backpacker</a>
							<a href="javascript:void(0)">Food</a>
							<a href="javascript:void(0)">Gear</a>
							<a href="javascript:void(0)">Resources</a>
							<a href="javascript:void(0)">Solo Travel</a>
							<a href="javascript:void(0)">Tips</a>
							<a href="javascript:void(0)">Trip Plan</a>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="footer-tit">Recent News</h4>
						<ul class="footer-news">
							<li>
								<img class="footer-news-img" src="/new_assets/img/travel8-360x180.jpg">
								<div class="footer-news-in">
									<div class="footer-news-tit">Top-Grade Meat And Seafood Are More Accessible</div>
									<dt class="art-time">
										<a href="javascript:void(0)"><i class="iconfont icon-shijian"></i>AUGUST 13, 2020</a>
									</dt>
								</div>
							</li>
							<li>
								<img class="footer-news-img" src="/new_assets/img/travel8-360x180.jpg">
								<div class="footer-news-in">
									<div class="footer-news-tit">I Visited Cancun Amid the Coronavirus Pandemic — Here’s What It Was Really Like</div>
									<dt class="art-time">
										<a href="javascript:void(0)"><i class="iconfont icon-shijian"></i>AUGUST 13, 2020</a>
									</dt>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer end -->
		<footer class="footer2">
			<div class="container">
				<div class="footer2-icon">
					<a href="javascript:void(0)"><i class="iconfont icon-facebook"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-tuite"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-googleplus"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-pinterest"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-vk"></i></a>
					<a href="javascript:void(0)"><i class="iconfont icon-rss"></i></a>
				</div>
				<div class="footer2-com">© 2020 Traveleidos.com - All rights reserved.</div>
			</div>
		</footer>
		<!-- scroll top -->
		<div class="jscroll-to-top" id="goToTop">
			<a href="javascript:void(0)">
				<i class="iconfont icon-shangjiantou"></i>
			</a>
		</div>


		<script src="/new_assets/js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/new_assets/js/pagenation.js" type="text/javascript" charset="utf-8"></script>
		<script src="/new_assets/js/main.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var type = '<?php echo $type; ?>';
			$.jqPaginator('#pagination', {
				totalPages:<?php echo $totalPages; ?>,
				visiblePages:5,
				currentPage: <?php echo $page; ?>,
				prev: '<li class="prev"><a href="/index.php/home/index/lists?type=<?php echo $type; ?>&page=<?php echo $page; ?>">Previous</a></li>',
				next: '<li class="next"><a href="/index.php/home/index/lists?type=<?php echo $type; ?>&page=<?php echo $page; ?>">Next</a></li>',
				page: '<li class="page"><a href="/index.php/home/index/lists?type=<?php echo $type; ?>&page={{page}}">{{page}}</a></li>',
				onPageChange: function (num, type) {
					// console.log("type:"+type,"num:"+num)
					// window.location.href='/index.php/home/index/lists?id='+num;
				}
			});

		</script>

	</body>
</html>





