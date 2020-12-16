
@extends('layout')

@section('pageContents')
		<div id="fh5co-main">
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_4.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
										   <h1>You play with the cards you're dealt, whatever that means.</h1>
										   <h2>（カッコいい感じのセリフを入れとけば、それっぽくなる！）</h2>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>HTMLテンプレートを利用しています</h1>
											<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-monitor"></i> Live Preview</a> <a class="btn btn-primary btn-learn">Learn More<i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

			<!-- 環境情報 -->
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Environment Infomation</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-tux"></i>
							</div>
							<div class="fh5co-text">
								<h3>Linux</h3>
                                <p>Amazon Linux 2（amzn2-ami-hvm-2.0.20201126.0-x86_64-gp2）を利用中<br>
                                Dockerの中でApache2 (Debian)をWebサーバとして起動中。</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-php"></i>
							</div>
							<div class="fh5co-text">
								<h3>PHP</h3>
								<p>PHP Version 7.4</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-laravel"></i>
							</div>
							<div class="fh5co-text">
								<h3>Framework</h3>
								<p>私的トレンドなLarabelを利用。Version 8</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-database"></i>
							</div>
							<div class="fh5co-text">
								<h3>Database</h3>
								<p>利用なし</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-IcoMoon"></i>
							</div>
							<div class="fh5co-text">
								<h3>Icons</h3>
								<p>比較的自由にカスタマイズ可能なIcoMoonを利用中</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-css3"></i>
							</div>
							<div class="fh5co-text">
								<h3>Front</h3>
								<p>Bootstrap3とHTMLテンプレートを利用。<br />（Node.jsとwebpackを利用したコンパイル形式も後々やってみたい！）</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Contact -->
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Contact</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-twitter2"></i>
							</div>
							<div class="fh5co-text">
								<h3>Twitter</h3>
								<p><a href="https://twitter.com/mizinko_note" target="_blank" >@mizinko_note</a>までご連絡ください。</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-mail"></i>
							</div>
							<div class="fh5co-text">
								<h3>Mail Address</h3>
								<p>kka.saito-to.devnull@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-github"></i>
							</div>
							<div class="fh5co-text">
								<h3>Github</h3>
								<p><a href="https://github.com/mizinko-note/" target="_blank" >mizinko_note</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
