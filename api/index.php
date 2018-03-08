<?php
// TuTu hacks

function deJson($json) {
	return json_decode(file_get_contents($json), true);
}

function getFeatured() {
	return deJson("http://features.tutuapp.com/index.php?r=microsite/site/recommendAppList");
}

$featured = getFeatured()['data']['dataList'];
$top = topApp();
$trending = Trending()['data']['apps'];
$hotgames = hotGames()['data']['dataList'];
$hotapps = hotApps()['data']['dataList'];
$recommended = Recommended();

function topApp() {
	$top = deJson("http://features.tutuapp.com/index.php?r=microsite/site/popularApp")['data']['apps'];
	shuffle($top);
	return end($top);
}

function Trending() {
	return deJson("http://features.tutuapp.com/index.php?r=microsite/site/popularApp");
}

function hotGames() {
	return deJson("http://features.tutuapp.com/index.php?r=microsite/site/hotGameList");
}

function hotApps() {
	return deJson("http://features.tutuapp.com/index.php?r=microsite/site/hotAppList");
}

function Recommended() {
	$rec = deJson("http://features.tutuapp.com/index.php?r=microsite/site/searchRecommendApp")['apps'];
	$word = deJson("http://features.tutuapp.com/index.php?r=microsite/site/hotWord")['data'];
	$words = array();
	foreach($word as $w) {
		$words[] = array("appName" => $w['content'], "appId" => $w['entityid']);
	}
	return array_merge($rec, $words);
}

function appDetails($id) {
	return deJson("http://features.tutuapp.com/index.php?r=microsite/site/appDetail&appId=".htmlspecialchars($id));
}

function searchApp($q) {
	return deJson("http://features.tutuapp.com/index.php?r=microsite/site/searchApp&searchWord=".htmlspecialchars($q));
}