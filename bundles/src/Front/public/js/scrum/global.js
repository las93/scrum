$(function() {
	
    $( "#draggable" ).draggable({ axis: "x" });
    
    $( "#draggable" ).draggable("option", "grid", [ 150, 1 ]);
    
    $( "#draggable" ).on( "dragstop", function( event, ui ) {
    	
        console.info(parseInt(this.style.left));
        if (parseInt(this.style.left) < 0) { this.style.left = '0px'; }
        else if (parseInt(this.style.left) > max_width + 1) { this.style.left = max_width+'px'; }
    });
    
    setTimeout(function()
    {
    	window.location.href = '/lockscreen/?back='+encodeURIComponent(window.location);
    }, 600000);
});