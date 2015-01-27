<?php
  
require_once('config.php');
	
function reencode( $this ) {
	return htmlspecialchars( html_entity_decode( $this[0], ENT_NOQUOTES, 'UTF-8' ), ENT_NOQUOTES, 'UTF-8' );
}
  
function get_details( $opts ) {
    global $config;
    if (!$config['username'] || !$config['username'] || !$config['url'])
    	die('Error: CCB API details missing in config.php');
    $opts = array_filter( $opts );
    $query_string = http_build_query( $opts );

    $ch = curl_init( 'https://' . $config['url'] . '/app/api.php?' . $query_string );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
    curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt( $ch, CURLOPT_USERPWD, $config['username'] . ':' . $config['password'] );

    return curl_exec( $ch );
}  

$today = date("Y-m-d");
$later = date("Y-m-d", strtotime($config['range']));
   
$opts = array_filter( array(
	'srv' => 'public_calendar_listing',
    'date_start' => $today,
    'date_end' => $later,
	) );
  
$xml_string = get_details( $opts );
$xml_string = preg_replace_callback( '/&.*?;/', 'reencode', $xml_string );
$xml_doc = simplexml_load_string( $xml_string );
  
if ($_GET['q']) {
	$q = strtolower($_GET['q']);
} 
    
if ($xml_doc->response->error)
	die('Error: ' . $xml_doc->response->error);
    
foreach ( $xml_doc->response->items->item as $e ) {
  	if (strpos(strtolower($e->event_name), $q) !== FALSE) {
  		$searchresults = '1';
  		} else {
  			$searchresults = '0';
  			}
    $event = array(
      'id' => (string) $e->event_name['ccb_id'],
      'name' => (string) $e->event_name,
      'department' => (string) $e->grouping_name,
      // 2014/02/14 mjf grab the name of the group this event belongs to
      'group_name' => (string) $e->group_name,
      'location' => (string) $e->location,
      'date' => (string) $e->date,
      'start_time' => (string) $e->start_time,
      'end_time' => $e->end_time,
      'duration' => $e->event_duration,
      'description' => (string) $e->event_description,
      'leader' => (string) $e->leader_name,
      'leader_phone' => (string) $e->leader_phone,      
      'leader_id' => (string) $e->leader_name['ccb_id'],  
      'search' => $searchresults,
    );

    // 2014/02/14 mjf only include the event if it belongs to the desired groups
    if (empty($config['groups']) or in_array($event['group_name'], $config['groups']))
        $events[] = $event;
}
  
if ($config['combine_recurring'] && is_array($events)) {
	$dup_events = return_dups($events,'id');
  	$events = remove_dups($events,'id');
}
  	
function remove_dups($array, $row_element) {    
    $new_array[0] = $array[0];
    foreach ($array as $current) {
        $add_flag = 1;
        foreach ($new_array as $tmp) {
            if ($current[$row_element]==$tmp[$row_element]) {
                $add_flag = 0; break;
            }
        }
        if ($add_flag) $new_array[] = $current;
    }
    return $new_array;
}

function return_dups($array, $row_element) {   
	$new_array[0] = $array[0];
    $dup_array[0] = $array[0];
    foreach ($array as $current) {
        $add_flag = 1;    	
        foreach ($new_array as $tmp) {
            if ($current[$row_element]==$tmp[$row_element]) {
                $dup_array[] = $current;
                $add_flag = 0; break;
            }
        }
        if ($add_flag) $new_array[] = $current;        
    }
    return $dup_array;
}  	
    
?>
