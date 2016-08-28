<?php



	include ( "src/NexmoMessage.php" );
    include("formulario.html");

	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('db32f268', '724dd12a82fddcef');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message.

	   $info = $nexmo_sms->sendText($_POST['telefono'], $_POST['nombre'], $_POST['mensaje']);
// Step 3: Display an overview of the message
       echo $nexmo_sms->displayOverview($info);

?>