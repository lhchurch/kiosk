//            jQuery(function($){
//	       var $sleeper = $('<div style="display: none; width: 100%; height: 100%; background-color: white; position: fixed; top: 0; left: 0;z-index: 99999;">' +
//		'<img src="images/screensaver.png" align="center" style="height: 100%; display: block;" height="100%" alt="Tap to View LH Groups" title="Tap to View LH Groups"></div>')
//		.appendTo(document.body), timer;
//	if($sleeper.offset().top){
//		$sleeper.css({position: 'absolute'});
//	}
//	$(document).bind('touchend mousemove click keydown', function(){
//		clearTimeout(timer);
//		preparetosleep();
//		if($sleeper.css('display') !== 'none'){
//			$sleeper.stop(true, true).hide('slow');
//			$('html, body').css({width: '', height: '', margin: '', padding: ''});
//			window.location.replace("index.php");
//		}
//	});

	
//	function preparetosleep(){
//		timer = setTimeout(function(){
//			$('html, body').css({width: '100%', height: '100%', margin: 0, padding: 0});
//			$sleeper.stop(true, true).show('slow');
//		}, 45000);
//   }
//	   preparetosleep();
//            });

var timeout = null;
    var timee = '120000'; // default time for session time out.
    $(document).bind('click keyup mousemove', function(event) {

    if (timeout !== null) {
            clearTimeout(timeout);
        }
        timeout = setTimeout(function() {
              timeout = null;
            console.log('Document Idle since '+timee+' ms');
            window.location.replace("index.php");
        }, timee);
    });