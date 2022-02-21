<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="backend/img/notification/4.jpg" alt="" /></a>
					<h2>Lakian <span class="min-dtn">Das</span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="{{ Request::is('home*') ? 'active' : '' }}" href="{{ Route('home') }}">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Home</span>
							</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('kelas*') ? 'active' : '' }}" href="{{ Route('kelas.index') }}">
                            <i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Kelas</span></a>
                        </li>
                        <li>
                            <a class="{{ Request::is('kategori*') ? 'active' : '' }}" href="{{ Route('kategori.index') }}">
                            <i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Kategori</span></a>
                        </li>
                        <li>
                            <a class="{{ Request::is('materi*') ? 'active' : '' }}" href="{{ Route('materi.index') }}">
                            <i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Materi</span></a>
                        </li>
                        <li>
                            <a class="{{ Request::is('checkouts*') ? 'active' : '' }}" href="{{ Route('checkout.admin') }}">
                            <i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Checkouts</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>