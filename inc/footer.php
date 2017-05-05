<!--Ends <div> tag with class="body" from menu.php (the one after </header> tag-->
</div>



<!--jQuery functions-->
<script>

/*	This tells the browser whenever a jQuery is ready
	to do smth or a page is loaded and is ready to respond */
	
$(document).ready(function() {
	
	

	
$('#thegame').hover(function(){
		$('#contactdiv').slideUp('slow');
		$('#gamesub').stop(true,true).slideDown('slow'); 
	},
function() {
	$('#gamesub').stop(true,true).slideUp('slow');
	}

	//.stop(true,true) stops the animation immediately
    //if it is hovered continuously over and over again
); //jQuery for Submenu in "The Game"



	
$("#contact").click(function(){
	if($('#contactdiv').is(":hidden")) {
		$('#contactdiv').slideDown('slow');
	}else{
		$('#contactdiv').slideUp('slow');
	}
	
});	//jQuery for "Contact Menu"
	



$("#show").click(function(){
	if ($('#showmore').is(":hidden")) {
		$('#showmore').slideDown('slow');
		$('#show').text("Hide Copyright");
	}else{ 
		$(showmore).slideUp('slow');
		$('#show').text("Show Copyright");
	}
	
});	//jQuery to Show/Hide Copyright in video (Home Page)




/*
=========================================================================
||  BEGINNING OF jQuery - SHOW SPECIAL ABILITY OF CHAMPIONS & ZOMBIES  ||
=========================================================================
*/


$("#showability").click(function(){
	if ($('#effect').is(":hidden")) {
		$( "#effect" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability').text("Hide Ability");
	}else{
		$(effect).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability').text("Show Ability");
	}
	
});	



$("#showability2").click(function(){
	if ($('#effect2').is(":hidden")) {
		$( "#effect2" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability2').text("Hide Ability");
	}else{
		$(effect2).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability2').text("Show Ability");
	}
	
});



$("#showability3").click(function(){
	if ($('#effect3').is(":hidden")) {
		$( "#effect3" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability3').text("Hide Ability");
	}else{
		$(effect3).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability3').text("Show Ability");
	}
	
});



$("#showability4").click(function(){
	if ($('#effect4').is(":hidden")) {
		$( "#effect4" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability4').text("Hide Ability");
	}else{
		$(effect4).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability4').text("Show Ability");
	}
	
});



$("#showability5").click(function(){
	if ($('#effect5').is(":hidden")) {
		$( "#effect5" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability5').text("Hide Ability");
	}else{
		$(effect5).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability5').text("Show Ability");
	}
	
});



$("#showability6").click(function(){
	if ($('#effect6').is(":hidden")) {
		$( "#effect6" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability6').text("Hide Ability");
	}else{
		$(effect6).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability6').text("Show Ability");
	}
	
});



$("#showability7").click(function(){
	if ($('#effect7').is(":hidden")) {
		$( "#effect7" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability7').text("Hide Ability");
	}else{
		$(effect7).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability7').text("Show Ability");
	}
	
});



$("#showability8").click(function(){
	if ($('#effect8').is(":hidden")) {
		$( "#effect8" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability8').text("Hide Ability");
	}else{
		$(effect8).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability8').text("Show Ability");
	}
	
});



$("#showability9").click(function(){
	if ($('#effect9').is(":hidden")) {
		$( "#effect9" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability9').text("Hide Ability");
	}else{
		$(effect9).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability9').text("Show Ability");
	}
	
});



$("#showability10").click(function(){
	if ($('#effect10').is(":hidden")) {
		$( "#effect10" ).toggle( "slide" );
		//$('#effect').slideDown('slow');
		$('#showability10').text("Hide Ability");
	}else{
		$(effect10).toggle( "slide" );
		//$(effect).slideUp('slow');
		$('#showability10').text("Show Ability");
	}
	
});




/*
====================================================================
||  END OF jQuery - SHOW SPECIAL ABILITY OF CHAMPIONS & ZOMBIES   ||
====================================================================
*/

	
$("#close").click(function(){
		$(this).fadeOut('slow');
		$("div#infohere").slideUp('slow');
	
	}); //jQuery for "X" in Featured Zombies ("Home Page") and in ("Champions Menu")
        // and in ("Zombies Menu")


/*
========================================================
||    ZOMBIE AND CHAMPION QUERIES IN GUIDES.php page  ||
========================================================*/

$("#query1").click(function(){
	if ($('#showresult1').is(":hidden")) {
		$('#showresult1').slideDown('slow');
		$('#query1').text("Hide Results!");
	}else{
		$(showresult1).slideUp('slow');
		$('#query1').text("Show Results!");
	}
	
});


$("#query2").click(function(){
	if ($('#showresult2').is(":hidden")) {
		$('#showresult2').slideDown('slow');
		$('#query2').text("Hide Results!");
	}else{
		$(showresult2).slideUp('slow');
		$('#query2').text("Show Results!");
	}
	
});



$("#query3").click(function(){
	if ($('#showresult3').is(":hidden")) {
		$('#showresult3').slideDown('slow');
		$('#query3').text("Hide Results!");
	}else{
		$(showresult3).slideUp('slow');
		$('#query3').text("Show Results!");
	}
	
});


$("#query4").click(function(){
	if ($('#showresult4').is(":hidden")) {
		$('#showresult4').slideDown('slow');
		$('#query4').text("Hide Results!");
	}else{
		$(showresult4).slideUp('slow');
		$('#query4').text("Show Results!");
	}
	
});


$("#query5").click(function(){
	if ($('#showresult5').is(":hidden")) {
		$('#showresult5').slideDown('slow');
		$('#query5').text("Hide Results!");
	}else{
		$(showresult5).slideUp('slow');
		$('#query5').text("Show Results!");
	}
	
});


$("#query6").click(function(){
	if ($('#showresult6').is(":hidden")) {
		$('#showresult6').slideDown('slow');
		$('#query6').text("Hide Results!");
	}else{
		$(showresult6).slideUp('slow');
		$('#query6').text("Show Results!");
	}
	
});

$("#query7").click(function(){
	if ($('#showresult7').is(":hidden")) {
		$('#showresult7').slideDown('slow');
		$('#query7').text("Hide Results!");
	}else{
		$(showresult7).slideUp('slow');
		$('#query7').text("Show Results!");
	}
	
});

$("#query8").click(function(){
	if ($('#showresult8').is(":hidden")) {
		$('#showresult8').slideDown('slow');
		$('#query8').text("Hide Results!");
	}else{
		$(showresult8).slideUp('slow');
		$('#query8').text("Show Results!");
	}
	
});

$("#query9").click(function(){
	if ($('#showresult9').is(":hidden")) {
		$('#showresult9').slideDown('slow');
		$('#query9').text("Hide Results!");
	}else{
		$(showresult9).slideUp('slow');
		$('#query9').text("Show Results!");
	}
	
});

$("#query10").click(function(){
	if ($('#showresult10').is(":hidden")) {
		$('#showresult10').slideDown('slow');
		$('#query10').text("Hide Results!");
	}else{
		$(showresult10).slideUp('slow');
		$('#query10').text("Show Results!");
	}
	
});

$("#query11").click(function(){
	if ($('#showresult11').is(":hidden")) {
		$('#showresult11').slideDown('slow');
		$('#query11').text("Hide Results!");
	}else{
		$(showresult11).slideUp('slow');
		$('#query11').text("Show Results!");
	}
	
});


$("#query12").click(function(){
	if ($('#showresult12').is(":hidden")) {
		$('#showresult12').slideDown('slow');
		$('#query12').text("Hide Results!");
	}else{
		$(showresult12).slideUp('slow');
		$('#query12').text("Show Results!");
	}
	
});

$("#query13").click(function(){
	if ($('#showresult13').is(":hidden")) {
		$('#showresult13').slideDown('slow');
		$('#query13').text("Hide Results!");
	}else{
		$(showresult13).slideUp('slow');
		$('#query13').text("Show Results!");
	}
	
});

$("#query14").click(function(){
	if ($('#showresult14').is(":hidden")) {
		$('#showresult14').slideDown('slow');
		$('#query14').text("Hide Results!");
	}else{
		$(showresult14).slideUp('slow');
		$('#query14').text("Show Results!");
	}
	
});

$("#query15").click(function(){
	if ($('#showresult15').is(":hidden")) {
		$('#showresult15').slideDown('slow');
		$('#query15').text("Hide Results!");
	}else{
		$(showresult15).slideUp('slow');
		$('#query15').text("Show Results!");
	}
	
});

$("#query16").click(function(){
	if ($('#showresult16').is(":hidden")) {
		$('#showresult16').slideDown('slow');
		$('#query16').text("Hide Results!");
	}else{
		$(showresult16).slideUp('slow');
		$('#query16').text("Show Results!");
	}
	
});

$("#query17").click(function(){
	if ($('#showresult17').is(":hidden")) {
		$('#showresult17').slideDown('slow');
		$('#query17').text("Hide Results!");
	}else{
		$(showresult17).slideUp('slow');
		$('#query17').text("Show Results!");
	}
	
});

$("#query18").click(function(){
	if ($('#showresult18').is(":hidden")) {
		$('#showresult18').slideDown('slow');
		$('#query18').text("Hide Results!");
	}else{
		$(showresult18).slideUp('slow');
		$('#query18').text("Show Results!");
	}
	
});

$("#query19").click(function(){
	if ($('#showresult19').is(":hidden")) {
		$('#showresult19').slideDown('slow');
		$('#query19').text("Hide Results!");
	}else{
		$(showresult19).slideUp('slow');
		$('#query19').text("Show Results!");
	}
	
});

$("#query20").click(function(){
	if ($('#showresult20').is(":hidden")) {
		$('#showresult20').slideDown('slow');
		$('#query20').text("Hide Results!");
	}else{
		$(showresult20).slideUp('slow');
		$('#query20').text("Show Results!");
	}
	
});

$("#query21").click(function(){
	if ($('#showresult21').is(":hidden")) {
		$('#showresult21').slideDown('slow');
		$('#query21').text("Hide Results!");
	}else{
		$(showresult21).slideUp('slow');
		$('#query21').text("Show Results!");
	}
	
});

$("#query22").click(function(){
	if ($('#showresult22').is(":hidden")) {
		$('#showresult22').slideDown('slow');
		$('#query22').text("Hide Results!");
	}else{
		$(showresult22).slideUp('slow');
		$('#query22').text("Show Results!");
	}
	
});

$("#query23").click(function(){
	if ($('#showresult23').is(":hidden")) {
		$('#showresult23').slideDown('slow');
		$('#query23').text("Hide Results!");
	}else{
		$(showresult23).slideUp('slow');
		$('#query23').text("Show Results!");
	}
	
});

$("#query24").click(function(){
	if ($('#showresult24').is(":hidden")) {
		$('#showresult24').slideDown('slow');
		$('#query24').text("Hide Results!");
	}else{
		$(showresult24).slideUp('slow');
		$('#query24').text("Show Results!");
	}
	
});


/*
==========================================================================
||    END OF jQuery - ZOMBIE AND CHAMPION QUERIES IN GUIDES.php page    ||
==========================================================================*/


/*--->

$('#showability').click(function(){
   $('#effect').append('<embed src="audio/braaains.wav" autostart="true" hidden="true"></embed>');
});

<----*/
	
	
});
//end of MAIN .ready(function)



/*
========================================================================
||   FUNCTIONS FOR DROPDOWN INFO OF ZOMBIES/CHAMPIONS ON IMAGE CLICK   ||
||               (gets info from database in phpmyadmin)               ||
========================================================================
*/


function zombieinfo(name){
	$.post('zombieinfo.php', {name: name}, function(data){
		if ($("div#infohere").is(":hidden"))  {
			$("div#infohere").slideDown('slow');
			$('div#infohere').html(data);
			$("#close").fadeIn('slow');
		}else{
			$('div#infohere').html(data);
		}		
	});
}

function championinfo(name){
	$.post('championinfo.php', {name: name}, function(data){
		if ($("div#infohere").is(":hidden")) {
			$("div#infohere").slideDown('slow');	
			$('div#infohere').html(data);
			$("#close").fadeIn('slow');
		}else{
			$('div#infohere').html(data);
		}		
	});
}

function newzombieinfo(name){
	$.post('newzombieinfo.php', {name: name}, function(data){
		if ($("div#infohere").is(":hidden")) {
			$("div#infohere").slideDown('slow');	
			$('div#infohere').html(data);
			$("#close").fadeIn('slow');
		}else{
			$('div#infohere').html(data);
		}		
	});
}


/*function playSound() {
	document.getElementById("test1").innerHTML=
	"<embed src='audio/scream1.wav' autostart=true loop=false>";
   return true;
}*/



</script>

<!--Ends <body> and <html> tags from head.php-->
</body>
</html>