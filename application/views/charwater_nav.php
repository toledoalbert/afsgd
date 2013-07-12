<header id="navigation" class="">
	<div class="inside">
		<h1><a href="http://www.charitywater.org/">charity: water</a></h1>
		<nav class="ng-scope">
			<div class="mobile-nav-inner">
				<ul class="clearfix">
					<li id="nav-myc" class="main drop right ml">
	                    <div data-ng-controller="MYCWUser" data-ng-include="'MYCWUser/nav_menu.html'" class="ng-scope"><!-- DESKTOP LOGGED IN -->
<div data-fade="user.logged_in" data-loaded="{&quot;logged_in&quot;:false,&quot;possessive_pronoun&quot;:&quot;My&quot;,&quot;logged_out&quot;:true}" class="ng-scope" style="display: none;">
    <div class="desktop-only">
        <a href="http://my.charitywater.org/p/profile" class="account ng-binding"><img data-ng-src=""> My Profile&nbsp;<i class="ss-icon ss-dropdown"></i></a>
        <div class="subnav">
            <ul class="sub">
                <!--
                <li class="first">
                    <a href="{{ URL.mycwURL('/p/profile') }}">{{user.possessive_pronoun}} Profile</a>
                </li>
                -->
                <li data-ng-show="user.recent_campaign_id" style="display: none;">
                    <a href="http://my.charitywater.org/p/campaign/?campaign_id=" class="ng-binding">
                       My recent campaign
                    </a>
                </li>

                <li>
                    <a href="http://my.charitywater.org/p/myprojects" class="ng-binding">My Water Projects</a>
                </li>
                <!--
                <li data-ng-hide="user.is_group">
                    <a href="{{ URL.mycwURL('/p/friends') }}">{{user.possessive_pronoun}} Friends</a>
                </li>
                -->
                <!-- fund raising tips -->
                <li>
                    <a href="http://my.charitywater.org/p/toolkitTipsAndTricks">Fundraising Tips</a>
                </li>

                <!-- campaign checklist -->
                <!-- TODO: this should only show up if the user has an active campaign -->
                <li data-ng-show="user.has_open_campaign" style="display: none;">
                    <a href="http://my.charitywater.org/p/toolkit">Campaign Checklist</a>
                </li>

                <li>
                    <a href="http://my.charitywater.org/p/profileEdit">Settings</a>
                </li>
                <li class="last">
                     <a data-ng-click="logout()" href="">Sign Out</a>
                </li>
            </ul>
            <span class="arrow"></span>
        </div>
    </div>

    <!-- MOBILE LOGGED IN -->
    <div class="mobile-only">
        <ul>
            <li class="mobile-nav-header">
                <a href="http://my.charitywater.org/p/profile" class="account ng-binding"><img data-ng-src=""> </a>
            </li>
            <li>
                <a href="http://my.charitywater.org/p/profile" class="ng-binding">My Profile</a>
            </li>
            <li data-ng-show="user.recent_campaign_id" style="display: none;">
                <a href="http://my.charitywater.org/p/campaign/?campaign_id=" class="ng-binding">
                   My Campaign
                </a>
            </li>
            <li class="mobile-nav-header">
                <a href="http://www.charitywater.org/" class="jerry-can">
                   <i class="cw-jerrycan"></i> charity: water
                </a>
            </li>
            <li class="bottom-items">
                <a data-ng-click="logout()" href="" class="btn black">Sign Out</a>
                <a href="http://my.charitywater.org/p/profileEdit" class="ss-icon right">Settings</a>
            </li>
        </ul>
    </div>

</div>

<div class="main ng-scope" data-fade="user.logged_out" data-fade-delay="1000" data-loaded="{&quot;logged_in&quot;:false,&quot;possessive_pronoun&quot;:&quot;My&quot;,&quot;logged_out&quot;:true}" style="display: block;">
    
    <!-- DESKTOP LOGGED OUT -->
    <div class="desktop-only">
        <div data-ng-show="URL.onCW()">
            <a class="mycw" href="http://my.charitywater.org/p/signin"><em>my</em>charity: water</a>
        </div>

        <div class="main" data-ng-show="URL.onMYCW()" style="display: none;">
            <a id="header-join" href="http://my.charitywater.org/p/register">Join</a>
            <a id="header-signin" class="fancybox" data-panel="#signIn" href="javascript:void(0)">Sign In</a>
        </div>
    </div>

    <!-- MOBILE LOGGED OUT -->
    <div class="main mobile-only">
        <div data-ng-show="URL.onCW()">
            <a class="btn black" href="http://my.charitywater.org/p/login">Sign In</a>
            <a class="btn black" href="http://my.charitywater.org/p/register">Join</a>
        </div>

        <div class="main" data-ng-show="URL.onMYCW()" style="display: none;">
            <a class="fancybox btn black" href="http://my.charitywater.org/p/login">Sign In</a>
            <a class="btn black" href="http://my.charitywater.org/p/register">Join</a>
        </div>
    </div>

</div>
</div>
	                </li>
					<li class="main mobile-only  ml">
						<a href="http://www.charitywater.org/">Home</a>
					</li>
					<li id="nav-don" class="main  ml">
						<a href="http://www.charitywater.org/donate/">Donate</a>
					</li>
					<li id="nav-sto" class="main  ml">
						<a href="http://store.charitywater.org/">Store</a>
					</li>
					<li id="nav-why" class="main  ml">
						<a href="http://www.charitywater.org/whywater/">Why Water?</a>
					</li>
					<li id="nav-wat" class="main drop  ml">
						<a href="http://www.charitywater.org/projects/">Water Projects</a>
						<div class="subnav">
							<ul class="sub">
								<li class="first"><a href="http://www.charitywater.org/projects/map/">PROOF ON GOOGLE MAPS</a></li>
								<li><a href="http://www.charitywater.org/projects/d2p/">PROOF ON MYCHARITY: WATER</a></li>
								<li><a href="http://www.charitywater.org/projects/partners/">PARTNERS</a></li>
								<li><a href="http://www.charitywater.org/media/videos/">Videos</a></li>
								<li class="last"><a href="http://www.charitywater.org/projects/fromthefield/index.php">Stories</a></li>
							</ul>
						</div>
					</li>

					<li id="nav-bir" class="main drop  ml">
						<a href="http://www.charitywater.org/birthdays">Birthdays</a>
						<div class="subnav">
							<ul class="sub" id="mobile-nav">
					            <li class="first nav-home "><a href="/birthdays/">the birthday project</a></li>
					            <li class="nav-stor "><a href="/birthdays/history.php">our birthday story</a></li>
					            <li class="nav-prof "><a href="/birthdays/profiles">all profiles</a></li>
					            <li class="nav-star  last"><a href="http://my.charitywater.org/p/campaignCreate">Start a campaign</a></li>
							</ul>
						</div>
					</li>
					<li id="nav-abo" class="main drop ml last">
						<a href="http://www.charitywater.org/about/">About Us</a>
						<div class="subnav">
							<ul class="sub">
								<li class="first"><a href="http://www.charitywater.org/about/mission.php">our mission</a></li>
								<li><a href="http://www.charitywater.org/100percent/">the 100% model</a></li>
								<li><a href="http://www.charitywater.org/about/staff.php">staff</a></li>
								<li><a href="http://www.charitywater.org/about/scotts_story.php">founder</a></li>
								<li><a href="http://www.charitywater.org/about/board.php">board</a></li>
								<li><a href="http://www.charitywater.org/about/jobs/">careers</a></li>
								<li><a href="http://www.charitywater.org/about/internships/">internships</a></li>
								<li class="last"><a href="http://www.charitywater.org/about/financials.php">financials</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<a href="#" class="ss-standard ss-rows" id="mobile-ham" style="display: none;"></a>
	</div>
</header>