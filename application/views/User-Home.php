<?php /* check_Auth */ !isset($this->session->userdata['logged_in']) ? redirect(base_url()) : ""; ?>

<body>
<header>
            <a href="<?=base_url()?>" class="title logo">Codeigniter Blog</h1>
            </a>

            <div class="is-pulled-right">


                <button class="profile-nav button is-white is-rounded">
                    <span class="ti-search is-size-5 has-text-primary"></span>
                </button>
                <button class="profile-nav button is-white is-rounded">
                    <span class="ti-bookmark-alt is-size-5 has-text-primary"></span>
                </button>

                <div class="dropdown is-right">
                    <div class="dropdown-trigger">
                        <button id="notify" class="profile-nav button is-white is-rounded dropdown-btn" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span class="ti-bell is-size-5 has-text-primary"></span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-item">
                                No Notification
                            </a>

                        </div>
                    </div>
                </div>

                <div class="dropdown is-right">
                    <div class="dropdown-trigger">
                        <button id="profile" class="profile-nav button is-white is-rounded dropdown-btn" aria-haspopup="true" aria-controls="dropdown-menu">
                            <img class="profile-avater" src="data:image/png;base64,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"
                                alt="">&nbsp
                            <span class="ti-angle-down is-size-7 has-text-primary"></span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a href="Posts/newPost" class="dropdown-item">
                                New Post
                            </a>
                            <a class="dropdown-item">
                                Other Posts
                            </a>
                            <hr class="dropdown-divider">
                            <a href="Profile" class="dropdown-item">
                                Profile
                            </a>
                            <a href="#" class="dropdown-item">
                                Settings
                            </a>
                            <a href="#" class="dropdown-item">
                                Help
                            </a>
                            <a href="<?= base_url()?>index.php/signout" class="dropdown-item">
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>

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
            <img class="content-img" style="height: 200px;" <?php preg_match('/(src)=("[^"]*")/i', $featured[0]->post, $rs);echo "src=" . $rs[2] ?>
            alt="">

            <div class="post-title is-size-4 has-text-weight-bold"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[0]->id ?>">
                    <?= $featured[0]->title ?></a></div>
            <p class="is-size-7 has-text-weight-light"><a class="has-text-grey" href="<?= base_url().'index.php/posts/'.$featured[0]->id ?>">
                    <?= $featured[0]->subtitle ?></a></p>
            <div class="is-size-6 has-text-weight-normal"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[0]->id ?>">
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
                    <div class=" is-size-6 has-text-weight-bold " style=" line-height: 17px"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[1]->id ?>"><?= $featured[1]->title ?></a></div>
                    <p class=" is-size-7 has-text-weight-light"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[1]->id ?>"><?= $featured[1]->subtitle ?></a>
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
                    <div class=" is-size-6 has-text-weight-bold " style=" line-height: 17px"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[2]->id ?>"><?= $featured[2]->title ?></a></div>
                    <p class=" is-size-7 has-text-weight-light"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[2]->id ?>">
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
            "><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[3]->id ?>">
                    <?= $featured[3]->title ?></a></div>
            <p class=" is-size-7 has-text-weight-light"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$featured[3]->id ?>">
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
                    <a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$post->id ?>">
                        <?= $post->title ?></a>
                </div>
                <div class="post-subtitle is-size-7 has-text-grey"><a class="has-text-grey-dark" href="<?= base_url().'index.php/posts/'.$post->id ?>">
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
                <div class=" is-size-3 has-text-grey-lighter"><?= "0".$serial ?>
                </div>
                <div style=" padding: 7px">
                    <div class=" has-text-weight-semibold"><a href="<?= base_url().'index.php/posts/'.$suggest->id ?>"  class='has has-text-grey-dark'>
                        <?= $suggest->title ?></a>
                    </div>
                    <div class="is-size-6 has-text-weight-normal top-margin"><a href="" class='has has-text-grey-dark'>
                        <?= $suggest->username ?></a>
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
                <a style="margin: auto" href=""><img class="made-with-bulma" src="<?=base_url()?>assets/images/made-with-bulma.png" alt=""></a></div>
        </div>
    </div>
</div>
</section>


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
