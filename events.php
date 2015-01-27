<?php
// Build the event list from CCB
require_once('event_search.php'); ?>

<html>
<head><title>Upcoming Events</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=1">
        <meta name="format-detection" content="telephone=no" />
    
        <link href="css/css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" type="text/css" href="css/groups.css">
		<link rel="stylesheet" type="text/css" href="css/forms.css">
        <link rel="stylesheet" type="text/css" href="css/buttons-min.css">
        <link rel="stylesheet" type="text/css" href="css/kiosk.css">
		
        <script type="text/javascript" src="js/screensaver.js"></script> 

</head>
    
<body class="events">

    <br>
<?php include('header.php'); ?>    
    
    <br>
    
    <h1 style="font-family:avenir-black">Upcoming Events</h1>

    <br>
    
 <!--form action="events.php" method="get">
	<input type="search" placeholder="Search" name="q">
</form>
    
    <br>
    <br -->


<?php
// Display the events
require_once('event_search_list.php'); ?>

</body>
</html>
