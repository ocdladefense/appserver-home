<?php 

use Html\Html as Html;


class HomeModule extends Module {


	public $routes = array(
			"home" => array(
					"callback" => "homepage",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"motions" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"books" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"jobs" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"maps" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"videos" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"directory" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"covid" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"feedback" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"contact" => array(
					"callback" => "maps",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"notes" => array(
					"callback" => "notes",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"events" => array(
					"callback" => "events",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"event" => array(
					"callback" => "event",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			),
			"attendees" => array(
					"callback" => "attendees",
					"content-type" => "text/html",
					"files" => array("Homepage.php")
			)
	);



	public function __construct(){
		parent::__construct();

		$this->name = "home";
		
		$this->files = array();
	}
		
	public function indexInfo($itemId) {
		return "<h2>Info for {$itemId}</h2><p>Some information retrieved for this entity.</p>";
	}
		
		

		
	function homepage() {

		$tpl = new Template("home");
		$tpl->addPath(__DIR__ . "/templates");
		// $tpl->bind("firstName","José");
		
		return $tpl;
	}
	
	
	function exampleTemplate() {
		$tpl = Template::fromString('<h2>Hello, <?php echo $firstName ?>!</h2>');
		$tpl->bind("firstName","José");
		
		return $tpl;
	}
	
	
	function notes() {
		return Html::toList(
			array(
				"https://trust.ocdla.org",
				"https://lod.ocdla.org",
				"https://test.ocdla.org",
				"https://www.ocdla.org",
				"https://ocdla.app/home",
				'subject:(-"Receipt for Order" -re) after:2020/07/01 before:2020/08/01',
				"FYI I just found Feb 2020 misc filed in my misc J’s folder - still need the others ASAP. Working on budget with Shaun today and CPA audit soon as well.",
				"April - DONE",
				"May 2020 - DONE",
				"June - DONE",
				"https://fontawesome.com/icons/video?style=solid",
				"https://www.kapwing.com/",
				"https://tools.ietf.org/html/draft-masinter-multipart-form-data-03",
				"https://tools.ietf.org/html/rfc2046#section-5.1"
			),"OCDLA Sites");
	}
	
	
	function attendees($eventId = "a230a00000GV1TQAA1") {
	
						$content = '				<div class="event-item"> 
						
						<h2 class="event-title">
								<a href="'.$external.'">Engage to Change: Anti-Racism Training for OCDLA Members 2020</a>
						</h2>
						<span>
								Mondays, 7/27 and 8/3 - 3–5 PM
						</span>
						</div><h2 class="event-title" style="margin-top:25px;">Who\'s going</h2>';
	
	
				$list = '<ul style="list-style:none;">
				
					<li>John Doe</li>
					<li>Jane Doe</li>
					
					
					</ul>';
					
					$menu = '<ul id="home-menu"><li><a href="/home">home</a></li></ul>';
	
			return $content . $list .$menu;
	}
	
	
	
	function event($eventId = "a230a00000GV1TQAA1") {
		$external = "https://ocdla.force.com/OcdlaEvent?id={$eventId}";
		
		$content = '
				<div class="event-item"> 
						
						<h2 class="event-title">
								<a href="'.$external.'">Engage to Change: Anti-Racism Training for OCDLA Members 2020</a>
						</h2>
						<span>
								Mondays, 7/27 and 8/3 - 3–5 PM
						</span>
						<span class="event-location">Online via Zoom</span>

				</div>';
                            
			$menu = '<ul id="home-menu">
				<li><a href="'.$external.'">more info</a></li>
				<li><a href="'.$external.'">register in store</a></li>
				<li><a href="/attendees/'.$eventId.'">who\'s going</a></li>
				<li><a href="/home">home</a></li>
			</ul>';
			
			return $content .$menu;  
	}
	
	
	
	
	function events(){
		
			$content = '<div class="content"><span id="j_id0:j_id1:myPageMessages"></span>
                    <h1>
                        Events
                    </h1>
                        <div class="event-year">
                            Upcoming 2020 Events                            
                        </div>
                            <div class="event-item"> 
                                
                                <h2 class="event-title">
                                    <a href="/event/a230a00000GV1TQAA1">Engage to Change: Anti-Racism Training for OCDLA Members 2020</a>
                                </h2>
                                <span>
                                    Mondays, 7/27 and 8/3 - 3–5 PM
                                </span>
                                <span class="event-location">Online via Zoom</span>

                            </div>
                            <div class="event-item"> 
                                
                                <h2 class="event-title">
                                    <a href="#a230a00000GV469AAD">Trials During Covid/Ethics - August 7 2020</a>
                                </h2>
                                <span>
                                    Friday, 8/7 12 PM
                                </span>
                                <span class="event-location">Online via Zoom</span>

                            </div>
                            <div class="event-item"> 
                                
                                <h2 class="event-title">
                                    <a href="#a230a00000GV46dAAD">Trials During Covid - Sentencing Mitigation &amp; Habeas - August 14 2020</a>
                                </h2>
                                <span>
                                    Friday, 8/14 12 PM
                                </span>
                                <span class="event-location">Online via Zoom</span>

                            </div>
                            <div class="event-item"> 
                                
                                <h2 class="event-title">
                                    <a href="#a230a00000J5NAfAAN">Sunny Climate 2020</a>
                                </h2>
                                <span>
                                    November 12–16, 2020
                                </span>
                                <span class="event-location">Grand Hyatt Kauaí, HI</span>

                            </div>
                            <div class="event-item"> 
                                
                                <h2 class="event-title">
                                    <a href="#a230a00000BYmfrAAD">Winter Conference 2020</a>
                                </h2>
                                <span>
                                    Dec 4-5, 2020
                                </span>
                                <span class="event-location">The Benson Hotel, Portland</span>

                            </div>
                    
                </div>';
							
		
			return $content;
	}
}

