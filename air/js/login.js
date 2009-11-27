$(document).ready(function(){
	window.nativeWindow.stage.displayState = runtime.flash.display.StageDisplayState.FULL_SCREEN_INTERACTIVE;
	$("#loginbutton").click(function(){
		//dapatkan username dan password
		//var url = "http://dewisri.local/ajaxlogin.php?username="+username+"&password="password;//"http://dewisri.local/";
		var username = $("#username").val();
		var password = $('#password').val();
		var loginurl = url+"ajaxlogin.php";
		var dataJSON = "{" 
                    + "username:"+username+"," 
                    + "password:"+password+"" 
                	+ "}"; 
		
		var url = "http://dewisri.local/ajaxlogin.php?username="+username+"&password="+password;
		alert(url);
		/*url+="login.php?username=";
		url+=username;
		url+='&password=';
		url+=password;
		alert(url);*/
		$.getJSON(url, dataJSON,function(data){
			//alert(data);
			alert(data.username);
			alert(data.password);
		});
		/*var request = new air.URLRequest(loginurl); 
		request.contentType = "text/JSON"; 
		request.data = dataJSON; 
		request.method = air.URLRequestMethod.POST; 
		var loader = new air.URLLoader(); 
		loader.load(request);*/
	});
});