<?php
/**
 * @template home
 * 
 * Display some items on the homepage.
 */
?>

<style type="text/css">

    .narrate {
        padding:5%;
    }

    .narrate h1 {
        margin-bottom: 20px;
        font-size: 2.0em;
        line-height: 1.2em;
    }
</style>
<!--
<nav id="left">
    <div class="portal" id="p-Legal_Links">
        <h5>Legal Links</h5>
        <div class="body">
            <ul>
                <li id="n-Ct-of-Appeals"><a href="http://www.publications.ojd.state.or.us/Pages/OpinionsCOA2014.aspx" rel="nofollow">Ct of Appeals</a></li>
                <li id="n-OR-S.Ct."><a href="http://www.publications.ojd.state.or.us/Pages/OpinionsSC.aspx" rel="nofollow">OR S.Ct.</a></li>
                <li id="n-US-S.Ct."><a href="http://www.supremecourt.gov/" rel="nofollow">US S.Ct.</a></li>
                <li id="n-Oregon-Statutes"><a href="http://www.oregonlaws.org/" rel="nofollow">Oregon Statutes</a></li>
                <li id="n-Bills-and-Laws"><a href="http://www.leg.state.or.us/bills_laws/" rel="nofollow">Bills and Laws</a></li>
                <li id="n-OR-Constitution"><a href="http://landru.leg.state.or.us/orcons/orcons.html" rel="nofollow">OR Constitution</a></li>
                <li id="n-OARs"><a href="http://arcweb.sos.state.or.us/pages/rules/index.html" rel="nofollow">OARs</a></li>
                <li id="n-ORCPs"><a href="http://www.leg.state.or.us/ors/orcpors.htm" rel="nofollow">ORCPs</a></li>
                <li id="n-Ethics-Rules-.28ORPC.29"><a href="http://www.osbar.org/_docs/rulesregs/orpc.pdf" rel="nofollow">Ethics Rules (ORPC)</a></li>
                <li id="n-Ethics-Cases"><a href="http://www.osbar.org/sitesearch/search.asp?ss=3" rel="nofollow">Ethics Cases</a></li>
                <li id="n-DMV-Suspension-Guide"><a href="http://www.oregon.gov/odot/dmv/docs/form/oregon_suspension_guide.pdf" rel="nofollow">DMV Suspension Guide</a></li>
            </ul>
        </div>
    </div>

</nav>
-->

<style type="text/css">
    .home-menu {
        margin: 0 auto;
    }
    #stage-content {
        width: auto;
        text-align:center;
    }
    .home-menu li {
        list-style-type: none;
        padding: 40px;
    }

    .home-menu li i {
        font-size: 5.0em;
        display: block;
        color: hsl(300,0%,47%);
    }

    .home-menu-item {

    }

    .nt {
        font-size: 2.0em;
        line-height: 1.3em;
    }
</style>

<ul class="main-menu home-menu">
    <!-- <li class="home-menu-item">
        <a href="/home"><i class="fas fa-home fa-2x" aria-hidden="true"></i>
        <span class="nt">home</span></a>
    </li>-->

    <li class="home-menu-item">
        <a href="/jobs"><i class="fas fa-briefcase fa-2x" aria-hidden="true"></i>
        <span class="nt">jobs</span></a>
    </li>

    <li class="home-menu-item">
        <a href="/directory/members"><i class="fas fa-user-friends fa-2x" aria-hidden="true"></i>
        <span class="nt">people</span></a>
    </li>

    

    <li class="home-menu-item">
        <a href="/car/list"><i class="fas fa-database fa-2x" aria-hidden="true"></i>
        <span class="nt">case reviews</span></a>
    </li>

    <li class="home-menu-item">
        <a href="https://www.ocdla.org/contact-us/" target="_new"><i class="fas fa-mobile-alt fa-2x" aria-hidden="true"></i>
        <span class="nt">contact us</span></a>
    </li>


    <!-- COMMENTED OUT TO HIDE INACTIVE MENU ITEMS -->
    <!-- 
    <li class="home-menu-item">
        <i class="fas fa-people-arrows fa-2x"></i>
        <a href="/covid" title="How OCDLA is pivoting to meet COVID-19 challenges.">covid-19</a>
    </li>

    <li class="home-menu-item"><i class="fas fa-scroll"></i><a href="/documents" title="OCDLA motion bank">motion bank</a></li>

    <li class="home-menu-item"><i class="fas fa-book-open"></i><a href="/user/documents" title="Read your publications">my publications</a></li>

    <li class="home-menu-item"><i class="fas fa-calendar-day fa-2x" aria-hidden="true"></i><a href="/event/list">events</a></li>





    <li class="home-menu-item"><i class="fas fa-map-pin fa-2x" aria-hidden="true"></i><a href="/maps">maps</a></li>

    <li class="home-menu-item"><i class="fas fa-video fa-2x" aria-hidden="true"></i><a href="/videos">videos</a></li>

    <li class="home-menu-item"><i class="fas fa-user-friends fa-2x" aria-hidden="true"></i><a href="/directory">members/experts</a></li>

    <li class="home-menu-item"><i class="fas fa-comment-dots fa-2x" aria-hidden="true"></i><a href="/feedback">feedback</a></li>

    -->
    <!-- END OF COMMENTED OUT MENU ITEMS -->

</ul>
			
			

<div id="main">

    <div class="narrate">
        <h1>Library of Defense</h1>
        <div class="section-narrative">2,000 documents</div>
    </div>

    <div class="narrate">
        <h1>Criminal Appellate Reviews</h1>
        <div class="section-narrative">1,000+ documents</div>
    </div>

    <div class="narrate">
        <h1>Motion Bank</h1>
        <div class="section-narrative">200 documents</div>
    </div>

    <div class="narrate">
        <h1>Videos</h1>
        <div class="section-narrative">100+ recorded seminars and CLEs</div>
    </div>

    <div class="narrate">
        <h1>Directories</h1>
        <div class="section-narrative">1,300+ members and experts</div>
    </div>

    <div class="narrate">
        <h1>Local Pages</h1>
        <div class="section-narrative">100+ documents</div>
    </div>

    <div class="narrate">
        <h1>Legislative Summaries</h1>
        <div class="section-narrative">Current from 2015</div>
    </div>
</div>


<script> document.body.classList.add("is-home");</script>