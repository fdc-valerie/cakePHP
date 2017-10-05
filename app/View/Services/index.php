<?php	
	echo $this->Html->css('cake.generic');
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('fullcalendar.min');
	echo $this->Html->css('fullcalendar.print.min');

	echo $this->Html->script('popper.min');
    echo $this->Html->script('fullcalendar.min');


?>
<script>
	jQuery.curCSS = function(element, prop, val) {
		return jQuery(element).css(prop, val);
	};
</script>
<script>

var servicesList;
var today = new Date();
	$(document).ready(function() {
		
		var source = [];
		var event= "";
		function servicesList(){
			$.ajax({
				url: "services/getServices",
				type: "GET",
				success: function(data){
                    var json = JSON.parse(data);
					// servicesList= json;
					for(var i = 0; i < json.length; i++){
						source.push(
							{
								title : json[i].Service.title,
								start : json[i].Service.date,
								description : json[i].Service.description,
								id : json[i].Service.pet_id,

							}
						);
					}
					event = source;
					console.log(event);
				},
				async: false		
			});
		}
		servicesList();

		$('#calendar').fullCalendar({
			eventMouseover: function(calEvent, jsEvent) {
			    var tooltip = '<div class="tooltipevent" style="width:100px;height:100px;background:#f5f5f5 ;position:absolute;z-index:10001;">'+ 'Pet ID:' + calEvent.id + '<p>Description: ' + calEvent.description +'</div>';
			    $("body").append(tooltip);
			    $(this).mouseover(function(e) {
			        $(this).css('z-index', 10000);
			        $('.tooltipevent').fadeIn('500');
			        $('.tooltipevent').fadeTo('10', 1.9);
			    }).mousemove(function(e) {
			        $('.tooltipevent').css('top', e.pageY + 10);
			        $('.tooltipevent').css('left', e.pageX + 20);
			    });
			},

			eventMouseout: function(calEvent, jsEvent) {
			     $(this).css('z-index', 8);
			     $('.tooltipevent').remove();
			},
			defaultDate: today,
			editable: true,
			eventLimit: true, 
			events: event,
		});
});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
<?php
	// echo 
?>
 <ul class="breadcrumb">
                    <li><a href="../users/index">Home</a></li>
                    <li><a href="../../customers/index">
                    Customers</a></li>

</ul>
<div class='container'>

	<div id='calendar'></div>
</div>