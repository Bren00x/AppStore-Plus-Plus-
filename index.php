<?php
require('core.php');


if($Modal == "iPhone" || $Modal == "iPad" || $Modal == "iPod touch") {
require("api/index.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<link rel="apple-touch-icon" href="icon.png?<?php echo md5(microtime()); ?>">
  <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <title>AppStore++</title>
  
  <link rel="stylesheet" href="framework7.ios.min.css">

 
  <link rel="stylesheet" href="framework7.ios.colors.min.css">
  <link rel="stylesheet" href="my-app.css">

</head>

<body id="body" class="layout-white">
 
  <div class="statusbar-overlay"></div>
 
  <div class="views tabs navbar-through toolbar-through">
  
    <div id="todayTab" class="view view-main tab active">
      
      <div class="pages">
        
        <div data-page="index" class="page">
        
          <div class="page-content pull-to-refresh-content" data-ptr-distance="55">
            <div class="pull-to-refresh-layer">
              <div class="preloader"></div>
            </div>
            <div class="content-block">
              <h5 style="margin-bottom:0px;margin-top:-48px;letter-spacing:0.7px;">
            
                <script>
                  var dayNames = new Array("SUNDAY","MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY","SATURDAY");

                  var monthNames = new Array("JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER");

                  var now = new Date();
                  document.write(dayNames[now.getDay()] + ", " + monthNames[now.getMonth()] + " " + now.getDate());
                </script>
             
              </h5>
              <h1 class="header" style="margin-top:0px; margin-bottom:0px;">Today</h1>
              <div class="hr"></div>

   
            </div>
            
            <!-- START TODAYS NEW APP CODE -->
            <center class="">
              <div class="content-block" style="max-width:414px; margin: 16px; margin-left: -16px;">
               <!-- <div class="app-card">
                  <img class="app-icon" src="placeholder.png">
                  <div class="list-block">
                    <div class="item-content">
                      <div class="item-media">
                        <img class="app-icon" src="<?php echo $top['appIcon']; ?>">
                      </div>
                      <div class="item-inner">
                        <div class="item-title"><?php echo $top['appName']; ?></div>
                        <div class="item-after">
                          <a href="view.php?id=<?php echo $apps['appId']; ?>" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>-->
                <!-- END TODAYS NEW APP CODE -->

                <!-- START DAILY LIST CODE -->
                <div class="app-card-2">
                  <div class="content-block" style="margin-top:0px; margin-bottom:0px; padding-top:10px; padding-bottom:10px;">
                    <h4 style="margin:0px;">FEATURED APPS</h4>
                    <h2 class="header" style="margin:0px;">Featured Apps</h2>
                  </div>
                  <div class="list-block media-list">
                   <ul>
<?php 
//print_r($featured);	
  foreach($featured as $apps) {
	//  
  ?>
                      <li>
                        <div class="item-content">
                          <div class="item-media"><img class="app-icon lazy lazy-fadein" data-src="proxy.php?url=<?php echo $apps['appIcon']; ?>"></div>
                          <div class="item-inner">
                            <div class="item-title-row">
                              <div class="item-title"><?php echo $apps['appName']; ?></div>
                              <div class="item-after">
                                <a href="#" onclick="installApp('<?php echo base64_encode($apps['appName']); ?>', '<?php echo base64_encode($apps['appId']); ?>')" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a>
                              </div>
                            </div>
                            <!--<div class="item-subtitle"><?php echo $apps['desc']; ?></div>-->
                          </div>
                        </div>
                      </li>
<?php
}
?>
                     
                    </ul>
                  </div>
                  <br>
                </div>
                <!-- END DAILY LIST CODE -->
                
                <!-- START THE ++ APP LIST CODE -->
                <div class="app-card-2">
                  <div class="content-block" style="margin-top:0px; margin-bottom:0px; padding-top:10px; padding-bottom:10px;">
                    <h4 style="margin:0px;">TRENDING APPS</h4>
                    <h2 class="header" style="margin:0px;">Trending Apps</h2>
                  </div>
                  <div class="list-block media-list">
                    <ul>
                      
					  <?php 
//print_r($trending);	
  foreach($trending as $apps) {
	//  
  ?>
                      <li>
                        <div class="item-content">
                          <div class="item-media"><img class="app-icon lazy lazy-fadein" data-src="proxy.php?url=<?php echo $apps['appIcon']; ?>"></div>
                          <div class="item-inner">
                            <div class="item-title-row">
                              <div class="item-title"><?php echo $apps['appName']; ?></div>
                              <div class="item-after">
                                <a href="#" onclick="installApp('<?php echo base64_encode($apps['appName']); ?>', '<?php echo base64_encode($apps['appId']); ?>')" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a>
                              </div>
                            </div>
                            <!--<div class="item-subtitle"><?php echo $apps['desc']; ?></div>-->
                          </div>
                        </div>
                      </li>
<?php
}
?>
					  
                    </ul>
                  </div>
                  <br>
                </div>
                <!-- END THE ++ APP LIST CODE -->


              </div>
              <br>
            </center>
            


            <br><br>
          </div>
        </div>
      </div>
    </div>
    <!-- Second view (for second wrap)-->
    <div id="gamesTab" class="view tab">
      <div class="pages navbar-through">
        <div data-page="index-2" class="page">
          <div class="page-content pull-to-refresh-content" data-ptr-distance="55">
            <div class="pull-to-refresh-layer">
              <div class="preloader"></div>
            </div>
            <div class="content-block" style="margin-top:-24px; margin-bottom:-24px;">
              <h1 class="header" style="margin-top:0px; margin-bottom:0px;">Games</h1>
              <div class="hr"></div>
            </div>
            <center>
             <br>
              <h3 style="margin-left:16px; margin-bottom:-24px; padding:0px; max-width:414px; text-align:left;">Featured</h3>
              <div class="list-block media-list" style="padding:0px; max-width:414px; text-align:left;">
                <ul>
				<?php
				
				foreach($hotgames as $apps) {
				?>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><img class="app-icon lazy lazy-fadein" data-src="proxy.php?url=<?php echo $apps['appIcon']; ?>"></div>
                      <div class="item-inner">
                        <div class="item-title-row">
                          <div class="item-title"><?php echo $apps['appName']; ?></div>
                          <div class="item-after">
                            <a href="#" onclick="installApp('<?php echo base64_encode($apps['appName']); ?>', '<?php echo base64_encode($apps['appId']); ?>')" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a>
                          </div>
                        </div>
                       <!-- <div class="item-subtitle">Short App Description</div>-->
                      </div>
                    </div>
                  </li>
                 
				 <?php 
				 
				}
				?>
                </ul>
              </div>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div id="appsTab" class="view tab">
      <div class="pages navbar-through">
        <div data-page="index-3" class="page">
          <div class="page-content pull-to-refresh-content" data-ptr-distance="55">
            <div class="pull-to-refresh-layer">
              <div class="preloader"></div>
            </div>
            <div class="content-block" style="margin-top:-24px; margin-bottom:-24px;">
              <h1 class="header" style="margin-top:0px; margin-bottom:0px;">Apps</h1>
              <div class="hr"></div>
            </div>
            <center>
              <br>
              <h3 style="margin-left:16px; margin-bottom:-24px; padding:0px; max-width:414px; text-align:left;">Featured</h3>
              <div class="list-block media-list" style="padding:0px; max-width:414px; text-align:left;">
                <ul>
                 <?php
				
				foreach($hotapps as $apps) {
				?>
                  <li>
                    <div class="item-content">
                      <div class="item-media"><img class="app-icon lazy lazy-fadein" data-src="proxy.php?url=<?php echo $apps['appIcon']; ?>"></div>
                      <div class="item-inner">
                        <div class="item-title-row">
                          <div class="item-title"><?php echo $apps['appName']; ?></div>
                          <div class="item-after">
                            <a href="#" onclick="installApp('<?php echo base64_encode($apps['appName']); ?>', '<?php echo base64_encode($apps['appId']); ?>')" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a>
                          </div>
                        </div>
                       <!-- <div class="item-subtitle">Short App Description</div>-->
                      </div>
                    </div>
                  </li>
                 
				 <?php 
				 
				}
				?>
                  
                </ul>
              </div>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div id="updatesTab" class="view tab">
      <div class="pages navbar-fixed">
        <div data-page="index-4" class="page">
          <div class="page-content pull-to-refresh-content" data-ptr-distance="55">
            <div class="pull-to-refresh-layer">
              <div class="preloader"></div>
            </div>
            <div class="content-block" style="margin-top:-24px;">
              <h1 class="header" style="margin-top:0px; margin-bottom:0px;">Updates</h1>
            </div>
			
			<a class="twitter-timeline" href="https://twitter.com/DanielD3V?ref_src=twsrc%5Etfw">Tweets by DanielD3V</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		   
          </div>
        </div>
      </div>
    </div>
    
    <div id="searchTab" class="view tab" data-page="home">
      <div class="pages">
        <div data-page="home" class="page">


          <!-- Search Bar overlay -->
          <div class="searchbar-overlay"></div>

          <div class="page-content pull-to-refresh-content" data-ptr-distance="55">
            <div class="pull-to-refresh-layer">
              <div class="preloader"></div>
            </div>
            <div class="content-block" style="margin-top:-24px;">
              <h1 class="header" style="margin-top:0px; margin-bottom:0px;">Search</h1>
              <form class="searchbar searchbar-init" style="padding:0px;">
                <div class="searchbar-input">
                  <input type="search" id="search-input" style="background-color:#e8e8ea;" placeholder="App Store++"><a href="#" class="searchbar-clear"></a>
                </div><a href="#" class="searchbar-cancel" onclick="searchApp($('#search-input').val());">Go</a>
                <a href="#" class="searchbar-cancel">Cancel</a>
              </form>
            </div>
           
		    <h2 style="margin-left:16px; margin-bottom:-10px; padding:0px; max-width:414px; text-align:left;">Trending</h2>

          <script>
		  function searchWord(name) {
			$("#search-input").val(name);			
			searchApp(name);		
		  }
		  
		  
		
		
		function searchApp(q) {
			searchTab.loadPage("search.php?q="+ btoa(q));
		}
		
		  </script>
              <div class="list-block media-list" style="padding:0px; max-width:414px; text-align:left;">
                <ul>
                 <?php
				
				foreach($recommended as $apps) {
				?>
                  <li onclick="searchWord('<?php echo $apps['appName']; ?>')">
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-title-row">
                          <div class="item-title" style="color: #007aff;"><?php echo $apps['appName']; ?></div>
                         
                        </div>
                       <!-- <div class="item-subtitle">Short App Description</div>-->
                      </div>
                    </div>
                  </li>
                 
				 <?php 
				 
				}
				?>
                  
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bottom Tabbar-->
    <div class="toolbar tabbar tabbar-labels">
      <div class="toolbar-inner">
        <a href="#todayTab" class="tab-link active">
          <i class="icon icon-today"></i>
            <span class="tabbar-label">Today</span>
          </a>
        <a href="#gamesTab" class="tab-link">
          <i class="icon icon-games"></i>
          <span class="tabbar-label">Games</span>
        </a>
        <a href="#appsTab" class="tab-link">
          <i class="icon icon-apps"></i>
          <span class="tabbar-label">Apps</span>
        </a>
        <a href="#updatesTab" class="tab-link">
          <i class="icon icon-updates"></i>
          <span class="tabbar-label">Updates</span>
        </a>
        <a href="#searchTab" class="tab-link">
          <i class="icon icon-search"></i>
          <span class="tabbar-label">Search</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Path to Framework7 Library JS-->
  <script type="text/javascript" src="framework7.min.js"></script>
  <script type="text/javascript" src="//server.warsame.pro/jquery.js"></script>
  <script src="https://cdn.rawgit.com/lazd/iNoBounce/e4cffec3/inobounce.min.js"></script>
  <!-- Path to your app js-->
  <script type="text/javascript" src="my-app.js?<?php echo md5(microtime()); ?>"></script>


</body></html>
<?php
} else {
  echo 'not an ios device.';
  /*header('Refresh: 3; URL=https://apple.warsame.pro');*/
}

?>