<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>个人博客</title>
		<link rel="stylesheet" type="text/css" href="/statics/css/index.css">
		<link rel="stylesheet" type="text/css" href="/statics/css/header.css"/>
		<link rel="stylesheet" type="text/css" href="/statics/css/container.css"/>
		<link rel="stylesheet" type="text/css" href="/statics/css/page.css"/>
	</head>
	<body>
		<div id="header">
			<div class="h">
				<div class="logo">
					<img src="/statics/image/logo.jpg" width="150px" height="100px">
				</div>
				<div class="left">
					<ul>
						<li><a href="#">首页</a></li>
						<li><a href="#">关于</a></li>
						<li><a href="#">美文</a></li>
						<li><a href="#">系列</a></li>
						<li><a href="#">留言板</a></li>
						<li><a href="#">联系我们</a></li>
					</ul>
				</div>
                <?php if (!empty($_SESSION['user']['username'])):?>
                    <div class="loginbar">
                        欢迎您 <?php echo $_SESSION['user']['username'];?>
                    </div>
                <?php else:?>
			    <div class="loginbar">
			    	<a href="login.html" class="register" target="_blank">注册</a>
			    	<a href="/index.php?c=user&a=login" class="login" target="_blank">登录</a>
			    </div>
                <?php endif;?>
			</div>
		</div>
		<div id="container">
			<div class="card">
				<div class="article-list">
                    <?php foreach ($articleLists as $val):?>
					<div class="article-a">
						<h3>&#9728;<?php echo $val['title'];?></h3>
					    <div class="content">
							<p class="txt">
							    <?php echo $val['content'];?>
                            </p>
					    </div>
						<div class="card-act">
							<ul>
								<li class="collect"><a href="#">收藏</a></li>
								<li class="forward"><a href="#">转发</a></li>
								<li class="comment"><a href="#">评论</a></li>
								<li class="like"><a href="#">点赞</a></li>
							</ul>
						</div>
					</div>
                    <?php endforeach;?>
				</div>
				<div id="page">
					<div class="page-inner">
						<?php echo $pageHtml;?>
					</div>
				</div>
			</div>
			<div class="recommend">
				
				<div class="recommend-info">
					<a href="">
						<div class="title-text">
							热门推荐
						</div>
					</a>
					<a href="" class="hot-refresh">
						<span class="hot-refresh-text">换一换</span>
					</a>
					<table border="0" cellspacing="0" cellpadding="0" class="recommend-content">
						<tr>
							<td>
								<span style="color: #FE2D46;">1</span>
								<a href="#">元旦寒假能否出行？张文宏释疑</a>
							</td>
						</tr>
						<tr>
							<td>
								<span style="color: #F60;">2</span>
								<a href="#">核科学家遇害点燃伊朗民众怒火</a>
							</td>
						</tr>
						<tr>
							<td>
								<span style="color: #FAA90E;">3</span>
								<a href="#">伊朗总统回应核科学家遇袭身亡</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>4</span>
								<a href="">丹麦首相为扑杀水貂而含泪道歉</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>5</span>
								<a href="#">被质疑蹭丁真热度 黄子韬回应</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>6</span>
								<a href="#">四川日报让丁真玩够早点回家</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>7</span>
								<a href="#">第33届中国电影金鸡奖闭幕式</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>8</span>
								<a href="#">绿皮车应该全列禁烟吗</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>9</span>
								<a href="#">武汉理工:不予通过王攀招研资格</a>
							</td>
						</tr>
						<tr>
							<td>
								<span>10</span>
								<a href="#">老年人健康码实际使用现状</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="clear">
				
			</div>
		</div>
		
	</body>
</html>
