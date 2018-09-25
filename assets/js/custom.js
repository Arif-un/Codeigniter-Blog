let sticky = 56;
let navbar = document.getElementById('nav');

function stickyNav() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky");
	} else {
		navbar.classList.remove("sticky");
	}
};

$(window).scroll(() => {
	$(window).scrollTop() > 515 ? $('#suggest-bar').addClass('suggest-bar') : $('#suggest-bar').removeClass('suggest-bar');
});

$('.modal').on('click', 'div > div > button', () => {
	$('.modal').removeClass('is-active');
});
$('.modal-background').on('click', () => {
	$('.modal').removeClass('is-active');
});

$("#sign-in").on("click", () => {
	$("#sign-in-modal").addClass("is-active");
});

$("#sign-up").click(() => {
	$("#sign-up-modal").addClass("is-active");
});

$('.dropdown-trigger').click(function () {
	let index = $('.dropdown-trigger').index(this);
	$('.dropdown:eq(' + index + ')').toggleClass('is-active');
});

$('#publish').click(() => {

	let title = $('#content-title').val();
	let subtitle = $('#content-subtitle').val();
	let content = $('#content').html();

	let data = {
		title: title,
		subtitle: subtitle,
		content: content,
		username: username
	}

	$.ajax({
		type: "POST",
		url: window.location,
		data: data,
		dataType: 'Text',
		success: function (response) {
			response == 'success' ? window.location.replace(base_url+'/index.php/profile') : "" ;
		}
	});
});

$('#saveEdit').click(function () {
	console.log(243);
	let title = $('#content-title').val();
	let subtitle = $('#content-subtitle').val();
	let content = $('#content').html();

	let data = {
        id:id,
		title: title,
		subtitle: subtitle,
		edit_content: content,
		username: username
	}

	$.ajax({
		type: "POST",
		url: window.location,
		data: data,
		dataType: 'Text',
		success: function (response) {
            response == 'success' ? window.location.replace(base_url+'/index.php/profile') : "" ;
		}
	});
});



$('#sign-in-modal').on('click', 'div > p > a', () => {

	if (document.getElementById('signin-card').classList.contains("signup")) {

		console.log("sign in");
		document.getElementById('signin-card').classList.add("signin");
		document.getElementById('signin-card').classList.remove("signup");

		document.getElementById('signin-card').innerHTML = `<div class="m-body ">
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
    </div>`;

	} else {
		console.log("sign up");
		document.getElementById('signin-card').classList.add("signup");
		document.getElementById('signin-card').classList.remove("signin");

		document.getElementById('signin-card').innerHTML = `<div class="m-body ">
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
    </div>`;
	}
});

$('#sign-up-modal').on('click', 'div > p > a', () => {

	if (document.getElementById('signup-card').classList.contains("signup")) {

		console.log("sign in");
		document.getElementById('signup-card').classList.add("signin");
		document.getElementById('signup-card').classList.remove("signup");

		document.getElementById('signup-card').innerHTML = `<div class="m-body ">
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
    </div>`;

	} else {
		console.log("sign up");
		document.getElementById('signup-card').classList.add("signup");
		document.getElementById('signup-card').classList.remove("signin");

		document.getElementById('signup-card').innerHTML = `<div class="m-body ">
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
    </div>`;

	}
});
