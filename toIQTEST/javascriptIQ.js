function progress(timeleft, timetotal, $element) {
    var progressBarWidth = timeleft * $element.width() / timetotal;
    $element.find('div').animate({ width: progressBarWidth }, 500).html(Math.floor(timeleft/60) + ":"+ timeleft%60);
    if (progressBarWidth<=0){ 
    	//redirect next page
    	window.location.href = "c.css";
    	//window.location.href = "http://localhost/WEB/webalizer/toIQTEST/h.php";
    }
    if(timeleft > 0) {
        setTimeout(function() {
            progress(timeleft - 1, timetotal, $element);
        }, 1000);
    }
};

progress(3000, 3000, $('#progressBar'));


		
