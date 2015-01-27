<?php $count = 0; ?>
 
   <table>
    	<tbody>
    
<?php foreach ( $events as $event ) {
      	
      	// If there was a search, and nothing matched, return nothing
      	if ($q && $event['search'] == '0') {
      		} else {
      	
      	// Bring the recurring event dates back in to merge
      	if (is_array($dup_events)) {	
      		foreach ($dup_events as $dup_event) {
      			if ($event['id'] == $dup_event['id']) {
      				if ($event['date'] !== $dup_event['date']) {
      					$event['end_date'] = $dup_event['date'];
      					}
      				}
      			}
      		}

      	########################################
      	#### Format the time and datestamps ####
      	########################################
      	$start_stamp = strtotime($event['start_time']);
      	$end_stamp = strtotime($event['end_time']);
      	$date_stamp = strtotime($event['date']);
        if ($event['end_date']) $end_date_stamp = strtotime($event['end_date']);
      	
      	if (date('i', $start_stamp) !== '00' ) {
      		$event['start_time'] = date($config['timeformat'], $start_stamp);
      		} else {
      			$event['start_time'] = date($config['timeformat_simplified'], $start_stamp);
      			}      
      						
      	if (date('i', $end_stamp) !== '00' ) {
      		$event['end_time'] = date($config['timeformat'], $end_stamp);
      		} else {
      			$event['end_time'] = date($config['timeformat_simplified'], $end_stamp);
      			}   
      			   			
      	if ($event['end_date']) {
      		if (date('F', $end_date_stamp) == date('F', $date_stamp)) {
      			$event['end_date'] = date($config['dateformat_simplified'], $end_date_stamp);
      		} else $event['end_date'] = date($config['dateformat'], $end_date_stamp);
      		$event['date'] = date($config['dateformat'], $date_stamp);
      	} else $event['date'] = date($config['dateformat_single'], $date_stamp);
		$event['occur'] = date('Ymd', $date_stamp);
      	
      	?>
                
            
          
            
        	   <ul class="eventsList eventsListBox"><li class="eventsListTitle">
        	   <?php if ($config['display_ccblink']) { ?>
        	   		<strong><?php echo $event['name']; ?></strong>
        	   	<?php } else { ?>
        	   		<strong><?php echo $event['name']; ?></strong>
        	   	<?php } ?>	
        	   </li>
        	   
         	  <li>Date: <?php echo $event['date'];
         	   			if ($event['end_date']) {
         	   				echo ' - ' . $event['end_date']; 
         	   			} ?></li>
          		<?php if ( $event['start_time'] !== '12' ) { ?>
          				<li>Time: <?php echo $event['start_time'] . ' - ' . $event['end_time']; ?>
          			<?php if ( $event['location'] ) { ?>
          					<?php echo ' (' . $event['location'] . ')'; ?></li>
          			<?php } ?>		
          		<?php } else { ?>	
          				<li>Time: <?php echo $event['start_time']; ?>
          			<?php if ( $event['location'] ) { ?>	
          					<?php echo ' (' . $event['location'] . ')'; ?></li>
          			<?php } ?>	
	
          		<?php } ?>
          		
          		<?php if ( $event['description'] ) { ?>
          		<li style="white-space:pre-wrap;">Description: <?php echo $event['description']; ?></li>
          		<?php } ?>
          		
               
                
          		<li>&nbsp;</li></ul>	
                   

        <?php $count++;
       		}
    	} // end foreach $event ?>
    	
    	</tbody>
    </table>
    
    <?php if ($count == 0) { ?>
    		<p> No results found. </p>     
    <?php }     
?>
