var AppStore = new Framework7({
	modalTitle: 'AppStore++',
	onAjaxStart: function(xhr) {
        AppStore.showIndicator();
    },
    onAjaxComplete: function(xhr) {
        AppStore.hideIndicator();
		//loadIcons();
    }
});


var $$ = Dom7;


var todayTab = AppStore.addView('#todayTab', {
  dynamicNavbar: true
});
var gamesTab = AppStore.addView('#gamesTab', {
  dynamicNavbar: true
});
var appsTab = AppStore.addView('#appsTab', {
  dynamicNavbar: true
});
var updatesTab = AppStore.addView('#updatesTab', {
  dynamicNavbar: true
});
var searchTab = AppStore.addView('#searchTab', { 
  dynamicNavbar: true
});


function installApp(name, link) {
	var link = atob(link);
	var name = atob(name);
    AppStore.confirm('Would you like to install "'+ name +'"?', 'AppStore++', function () {
        window.open("itms-services://?action=download-manifest&url=https://danield3v.us/a++/api/plist/"+ link,"_self")
    });

}

if (window.navigator.standalone == true) { 

if(AppStore.statusBar == true) {
$$("html").addClass("with-statusbar-overlay");
$(".statusbar-overlay").css("display", "block");
console.log("HTML classes: "+ $("html").attr("class"));
} else {
	$("#status-bar-style").attr("content", "black");
}

} else { 

if(AppStore.device.osVersion >= 11.0) {
	$("#status-bar-style").attr("content", "black");
} else {
	// false.
}

if(window.location.search == "?dev") {
AppStore.alert("This is a development build of AppStore++.");	

} else {
$.get( "addtohome.php", function( data ) {
  $( "body" ).html(data);
  addtohome.show();
});
} 
	
} 
    