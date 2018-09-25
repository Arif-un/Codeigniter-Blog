<?php /* check_Auth */ isset($this->session->userdata['logged_in']) ? redirect('userhome') : ""; ?>
<?php header('Access-Control-Allow-Origin: *'); ?>

<body>
	<header>
		<a href="<?= base_url() ?>" class="title logo">Codeigniter Blog</h1>
		</a>

		<div class="is-pulled-right">
			<button class="button is-rounded is-light signBtn" id="sign-in">
				Sign In
			</button>
			<button class="button is-primary is-rounded is-outlined" id="sign-up">
				Get Started
			</button>
		</div>
	</header>

	<nav id="nav" class="navbar category">

		<a class="is-link has-text-grey is-active" href="">Home</a>
		<a class="is-link has-text-grey" href="">Entertainment</a>
		<a class="is-link has-text-grey" href="">Technology</a>
		<a class="is-link has-text-grey" href="">Life</a>
		<a class="is-link has-text-grey" href="">Culture</a>
		<a class="is-link has-text-grey" href="">Self</a>
		<a class="is-link has-text-grey" href="">Design</a>
		<a class="is-link has-text-grey" href="">Politics</a>
		<a class="is-link has-text-grey" href="">Science</a>
		<a class="is-link has-text-grey" href="">Popular</a>
		<a class="is-link has-text-grey" href="">More</a>

	</nav>


	<section class="container ">

		<div class="columns ">
			<div class="column is-5 is-paddingless">
				<div class="contentt circle-effect">
					<img class="content-img" style="height: 200px;" <?php preg_match('/(src)=("[^"]*")/i', $featured[0]->post, $rs);
					echo "src=" . $rs[2] ?>
					alt="">

					<div class="post-title is-size-4 has-text-weight-bold"><a class="has-text-grey-dark" href="">
							<?= $featured[0]->title ?></a></div>
					<p class="is-size-7 has-text-weight-light"><a class="has-text-grey" href="">
							<?= $featured[0]->subtitle ?></a></p>
					<div class="is-size-6 has-text-weight-normal"><a class="has-text-grey-dark" href="">
							<?= $featured[0]->username ?></a></div>
					<div class=" is-size-7 has-text-grey">
						<?= nice_date($featured[0]->created_at, 'M d') ?> • ♦
						<?= $featured[0]->length_in_minute ?> min read</div>
				</div>

			</div>
			<div class="column is-3 is-paddingless ">
				<div class=" block circle-effect">
					<div class=" block-content ">
						<img class=" content-img" style=" height:110px;width: 110px; " <?php preg_match('/(src)=("[^"]*")/i',$featured[1]->post, $rs); echo "src=" . $rs[2] ?> alt=" ">
						<div class=" block-content-head">
							<div class=" is-size-6 has-text-weight-bold " style=" line-height: 17px"><a class="has-text-grey-dark" href="">
									<?= $featured[1]->title ?></a></div>
							<p class=" is-size-7 has-text-weight-light"><a class="has-text-grey-dark" href="">
									<?= $featured[1]->subtitle ?></a>
							</p>
						</div>
					</div>
					<div class="block-foot ">
						<div class=" is-size-7 has-text-weight-normal"><a class="has-text-grey-dark" href="">
								<?= $featured[1]->username ?></a></div>
						<small class=" is-size-7 has-text-grey " style=" margin:0 0 0 auto;">
							<?= nice_date($featured[1]->created_at, 'M d') ?> • ♦
							<?= $featured[1]->length_in_minute ?> min read</small>
					</div>
				</div>

				<div class=" block circle-effect">
					<div class=" block-content ">
						<img class=" content-img" style=" height:110px;width: 110px;" <?php preg_match('/(src)=("[^"]*")/i',$featured[2]->post, $rs); echo "src=" . $rs[2] ?> alt=" ">
						<div class=" block-content-head">
							<div class=" is-size-6 has-text-weight-bold " style=" line-height: 17px"><a class="has-text-grey-dark" href="">
									<?= $featured[2]->title ?></a></div>
							<p class=" is-size-7 has-text-weight-light"><a class="has-text-grey-dark" href="">
									<?= $featured[2]->subtitle ?></a>
							</p>
						</div>
					</div>
					<div class="block-foot ">
						<div class=" is-size-7 has-text-weight-normal"><a class="has-text-grey-dark" href="">
								<?= $featured[2]->username ?></a></div>
						<small class=" is-size-7 has-text-grey " style=" margin:0 0 0 auto;">
							<?= nice_date($featured[2]->created_at, 'M d') ?> • ♦
							<?= $featured[2]->length_in_minute ?> min read</small>
					</div>
				</div>
			</div>
			<div class="column is-paddingless ">
				<div class=" contentt circle-effect">
					<img class=" content-img " style=" height:180px; " <?php preg_match('/(src)=("[^"]*")/i', $featured[3]->post,$rs); echo "src=" . $rs[2] ?>
					alt=" ">
					<div class=" is-size-4 has-text-weight-bold
					"><a class="has-text-grey-dark" href="">
							<?= $featured[3]->title ?></a></div>
					<p class=" is-size-7 has-text-weight-light"><a class="has-text-grey-dark" href="">
							<?= $featured[3]->subtitle ?></a></p>
					<div class="
					is-size-6 has-text-weight-normal "><a class="has-text-grey-dark" href="">
							<?= $featured[3]->username ?></a></div>
					<div class=" is-size-7 has-text-grey
					">
						<?= nice_date($featured[3]->created_at, 'M d') ?> • ♦ <?= $featured[3]->length_in_minute ?> min read
					</div>
				</div>
			</div>
		</div>

		<div class="is-pulled-right ">
			<a href=" " class=" is-link is-size-6 has-text-primary">SEE ALL FEATURED ></a>
		</div>

		<hr>

	</section>

	<section class="container ">

		<div class=" columns ">
			<div class=" column is-8">
				<div class=" is-flex " style=" align-items: center;padding:10px">
					<div class=" is-size-4 has-text-weight-semibold">Recent Activities</div>
					<a class=" is-size-7 has-text-primary " style=" margin: 0 0 0 auto ">MORE ></a>
				</div>
				<hr class=" is-marginless">

				<?php foreach ($posts as $post) : ?>

				<div class=" post circle-effect ">
					<div class=" post-detail">
						<div class=" post-title is-size-5 has-text-weight-bold">
							<a class="has-text-grey-dark" href="">
								<?= $post->title ?></a>
						</div>
						<div class="post-subtitle is-size-7 has-text-grey"><a class="has-text-grey-dark" href="">
								<?= $post->subtitle ?></a></div>
						<div class="post-foot ">
							<div class=" is-size-6 has-text-weight-normal"><a class="has-text-grey-dark" href="">
									<?= $post->username ?></a></div>
							<div class=" is-size-7 has-text-grey">
								<?= nice_date($post->created_at, 'M d') . ' ♦ ' . $post->length_in_minute . ' min read' ?>
							</div>
						</div>
					</div>
					<img class="post-img " <?php preg_match('/(src)=("[^"]*")/i', $post->post, $rs); echo "src=" . $rs[2] ?> alt=" ">
				</div>

				<?php endforeach ?>

			</div>


			<div class="column" style="padding:10px;">
				<div id="suggest-bar">

					<div class=" is-size-5 has-text-weight-semibold " style=" margin-top:20px">
						Popular on Blog
						<hr class="is-marginless">
					</div>

					<?php $serial = 0;	foreach ($suggests as $suggest) : $serial++ ?>

					<div class=" is-flex">
						<div class=" is-size-3 has-text-grey-lighter">0<?= $serial ?>
						</div>
						<div style=" padding: 7px">
							<div class=" has-text-weight-semibold">
								<?= $suggest->title ?>
							</div>
							<div class="is-size-6 has-text-weight-normal top-margin">
								<?= $suggest->username ?>
							</div>
							<div class=" is-size-7 has-text-grey">
								<?= nice_date($suggest->created_at, 'M d') ?> • ♦
								<?= $suggest->length_in_minute ?> min read</div>
						</div>
					</div>

					<?php endforeach ?>

					<hr class="is-marginless">

					<div>
						<a class=" is-link has-text-grey-light " style=" margin: 10px
                            " href=" # ">Help</a>
						<a class=" is-link has-text-grey-light
                            " style=" margin: 10px " href=" # ">Status</a>
						<a class=" is-link
                            has-text-grey-light " style=" margin: 10px " href=" #
                            ">Writter</a>
						<a class=" is-link has-text-grey-light " style="
                            margin: 10px " href=" # ">Blog</a>
						<a class=" is-link
                            has-text-grey-light " style=" margin: 10px " href=" #
                            ">Careers</a>
						<a class=" is-link has-text-grey-light " style="
                            margin: 10px " href=" # ">Privacy</a>
						<a class=" is-link
                            has-text-grey-light " style=" margin: 10px " href=" #
                            ">Term</a>
						<a class=" is-link has-text-grey-light " style=" margin:
                            10px " href=" # ">About</a>
					</div>
					<small style="margin-left: 5%" class="has-text-grey-light ">© Copyrights 2018 | All Right Reserved | <a class="has-text-grey-light"
						 href="https://arif-un.github.io" target="_blank">Arif-Un</a> &nbsp;&nbsp;&nbsp; <a class="has-text-grey-light"
						 href="https://www.fb.com/arifoverclocker" target="_blank"><span class="ti-facebook"></span></a> &nbsp; <a class="has-text-grey-light"
						 href="https://www.linkedin.com/in/arif-un/" target="_blank"><span class="ti-linkedin"></span></a> </small>
					<div style="
                            margin: 5px" class="is-flex">
						<a style="margin: auto" href="https://bulma.io"><img class="made-with-bulma" src="assets/images/made-with-bulma.png" alt=""></a></div>
				</div>
			</div>
		</div>
	</section>
	<!-- sign-up-modal -->
	<div class="modal" id="sign-up-modal">
		<div class="modal-background"></div>
		<div id="signup-card" class="modal-card">

			<div class="m-body ">
				<button class="delete is-pulled-right" aria-label="close "></button>

				<div class="has-text-centered is-size-3 has-text-weight-bold has-text-black-ter ">Join Blog</div>
				<p class="has-text-centered is-size-6 is-center " style="width: 400px;margin: auto ">Create an
					account to personalize your homepage, follow your favorite authors and publications, applaud
					stories you love, and more.</p>

				<form action="<?= base_url() ?>index.php/home/register" method="POST">
					<div class="m-con ">
						<div>
							<input class="input is-rounded " type="text" name="name" placeholder="Name">
						</div>
						<div>
							<input class="input is-rounded " type="date" name="birth" placeholder="Birth">
						</div>
					</div>
					<div class="m-con ">
						<div>
							<input class="input is-rounded " type="email" name="email" placeholder="Email ">
						</div>
						<div>
							<input class="input is-rounded " type="password" name="password" placeholder="New Password ">
						</div>
					</div>
					<div class="m-con ">
						<div class="select is-rounded ">
							<select name="gender">
								<option>Select Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
					</div>

					<div class="m-con ">
						<button style="margin-top:10px " class="button is-rounded is-primary" name="signUp" type="submit">Sign Up ></button>
					</div>
				</form>

				<div class="m-con ">
					<a href="<?= isset($authUrl) ? $authUrl : "" ?>" style="margin-top:30px " class="button is-rounded is-white " target="_blank">
						<img src="https://cdn4.iconfinder.com/data/icons/new-google-logo-2015/400/new-google-favicon-512.png" height="20px "
						 width="20px " alt=" "> &nbsp Sign up with Google</a>
				</div>

				<div class="m-con ">
					<a  style="margin:10px 0 20px 0 " class="button is-rounded is-white " target="_blank">
						<img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8c/Facebook_Home_logo_old.svg/1024px-Facebook_Home_logo_old.svg.png "
						 height="20px " width="20px " alt=" "> &nbsp Sign up with Facebook</a>
				</div>

				<p class="has-text-centered ">Already have an account?
					<a class="has-text-black has-text-weight-semibold signin" id="signin">Sign in</a>.</p>

				<p class="is-size-7 has-text-centered " style="width:300px;margin:40px auto 10px auto">To
					make Blog work, we log user data and share it with service providers. Click "Sign up " above to
					accept
					Blog’s
					<a href=" ">Terms of Service</a> &
					<a href=" ">Privacy Policy</a>.</p>
			</div>


		</div>

	</div>

	<!-- sign-in-modal -->
	<div class="modal " id="sign-in-modal">
		<div class="modal-background"></div>
		<div id="signin-card" class="modal-card">
		
			<div class="m-body ">
				<button class="delete is-pulled-right " aria-label="close "></button>

				<div class="has-text-centered is-size-3 has-text-weight-bold has-text-black-ter ">Welcome Back</div>
				<p class="has-text-centered is-size-6 is-center " style="width: 400px;margin: auto ">Sign in to
					access your personalized homepage, follow authors and topics you love, and clap for stories
					that matter to you.</p>

				<form action="<?= base_url() ?>index.php/home/login" method="POST">
					<div class="m-con ">
						<div>
							<input class="input is-rounded " type="email" name="email" placeholder="Email ">
						</div>
						<div>
							<input class="input is-rounded " type="password" name="password" placeholder="Password ">
						</div>
					</div>

					<div class="m-con ">
						<button style="margin-top:10px " class="button is-rounded is-primary " name="signIn" type="submit">Sign In ></button>
					</div>
				</form>

				<div class="m-con ">
					<a href="<?= isset($loginUrl) ? $loginUrl : "" ?>" style="margin-top:30px " class="button is-rounded is-white ">
						<img src="https://cdn4.iconfinder.com/data/icons/new-google-logo-2015/400/new-google-favicon-512.png
                            "
						 height="20px " width="20px " alt=" "> &nbsp Sign in with Google</a>
				</div>

				<div class="m-con ">
					<button style="margin:10px 0 20px 0 " class="button is-rounded is-white ">
						<img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8c/Facebook_Home_logo_old.svg/1024px-Facebook_Home_logo_old.svg.png "
						 height="20px " width="20px " alt=" "> &nbsp Sign in with Facebook</button>
				</div>

				<p id="registar" class="has-text-centered">No account?
					<a class="has-text-black has-text-weight-semibold signup" id="signup">Sign Up</a>.</p>

				<p class="is-size-7 has-text-centered " style="width:300px;margin:40px auto 10px auto
                            ">To
					make Blog work, we log user data and share it with service providers. Click "Sign up " above to
					accept
					Blog’s
					<a href=" ">Terms of Service</a> &
					<a href=" ">Privacy Policy</a>.</p>
			</div>

		</div>

	</div>


	<script src="<?= base_url() ?>assets/js/custom.js "></script>
	<script src="<?= base_url() ?>assets/js/waves.js "></script>
	<script>
		Waves.attach('.button');
		Waves.attach('.category > a');
		Waves.init();

		window.onscroll = () => {
			stickyNav()
		};
	</script>
</body>

</html>