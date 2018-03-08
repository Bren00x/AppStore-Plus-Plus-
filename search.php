<?php


if(isset($_GET['q'])) {
require("api/index.php");
$q = base64_decode($_GET['q']);
$q = rawurlencode($q);	
$search = searchApp($q);

if($search['success'] == 1) {

//print_r($search);
?>
<div class="pages navbar-through">
    <div data-page="package-page" class="page">
        <div class="page-content">
		

	<div class="content-block" style="margin-top:-24px;">
              <h1 class="header" style="margin-top:0px; margin-bottom:0px;"><?php echo htmlspecialchars(rawurldecode($q)); ?> - Search</h1>
              
            </div>
			
			<h3 style="margin-left:16px; margin-bottom:-24px; padding:0px; max-width:414px; text-align:left;">Results</h3>
	<div class="list-block media-list" style="padding:0px; max-width:414px; text-align:left;">
                <ul>
                 <?php
				 if($search['data']['dataCount'] == 0) {
	?>
	
	<center>
	<p style="font-size: 40px;">No Results</p>
	</center>
	
	<?php
} else {
				
				foreach($search['data']['dataList'] as $apps) {
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
				
				}
				?>
                  
                </ul>
              </div>
	
        </div>
    </div>
</div>

<?php 
} else {
	die("dead");
}
}

?>