<?php
namespace App\Http\Controllers;


use Aiandev\Notificarelaravel5\Notificare;

$notificare = new Notificare();

/**
 * Send to device
 * 
 */
$deviceID = 'xxxx';

$body = array(
		'userID' => null,
		'deviceID' => $deviceID,
		'type' => 're.notifica.notification.Alert',
		'schedule' => null, //Use date to schedule
		'message' => 'Your message here',
		'sound' => 'default',
		'extra' => null, //Use this to pass any extra information you may want
		'location' => null, //Use: array('longitude'=>'45.009987','latitude'=>'1.2345567')
		'attachments' => null,
		'actions' => array(
						array(
							"type" => 're.notifica.action.CallBack',
							"label" => "the label of your button",
							"target" => "http://yourendpoint.com",
							"keyboard" => true,
							"camera" => false
							),
						array(
							"type" => 're.notifica.action.Telephone',
							"label" => "the label of your button",
							"target" => "1234567890,0987654321",
							"keyboard" => false,
							"camera" => false						
							)
				),
		'content' => null
);
	
$result = $notificare->pushToDevice($deviceID,$body);

if ($result->getStatusCode()=='201') {
	$response = json_decode($result->getBody());
	var_dump($response);
}


/**
 * Send to user
 * 
 */
$userID = 'xxxxx';

$body = array(
		'userID' => $userID,
		'type' => 're.notifica.notification.Alert',
		'schedule' => null, //Use date to schedule
		'message' => 'Your message here',
		'sound' => 'default',
		'extra' => null, //Use this to pass any extra information you may want
		'location' => null, //Use: array('longitude'=>'45.009987','latitude'=>'1.2345567')
		'attachments' => null,
		'actions' => array(
				array(
						"type" => 're.notifica.action.CallBack',
						"label" => "the label of your button",
						"target" => "http://yourendpoint.com",
						"keyboard" => true,
						"camera" => false
				),
				array(
						"type" => 're.notifica.action.Telephone',
						"label" => "the label of your button",
						"target" => "1234567890,0987654321",
						"keyboard" => false,
						"camera" => false
				)
		),
		'content' => null
);

$result = $notificare->pushToUser($userID,$body);

if($result->getStatusCode()=='201'){
	$response = json_decode($result->getBody());
	var_dump($response);
}

/**
 * Send a broadcast
 *
 */

$body = array(
		'userID' => null,
		'deviceID' => null,
		'type' => 're.notifica.notification.Alert',
		'schedule' => null, //Use date to schedule
		'message' => 'Your message here',
		'sound' => 'default',
		'extra' => null, //Use this to pass any extra information you may want
		'location' => null, //Use: array('longitude'=>'45.009987','latitude'=>'1.2345567')
		'attachments' => null,
		'actions' => array(
				array(
						"type" => 're.notifica.action.CallBack',
						"label" => "the label of your button",
						"target" => "http://yourendpoint.com",
						"keyboard" => true,
						"camera" => false
				),
				array(
						"type" => 're.notifica.action.Telephone',
						"label" => "the label of your button",
						"target" => "1234567890,0987654321",
						"keyboard" => false,
						"camera" => false
				)
		),
		'content' => null
);

$result = $notificare->broadcast($body);

if($result->getStatusCode()=='201'){
	$response = json_decode($result->getBody());
	var_dump($response);
}

/**
 * 
 * We can upload and store files to be used in the Content and Attachments
 * of your notifications, please use the following methods
 * 
 */


/**
 * Upload files
 * 
 */

$notificare->setHeader('Content-type', mime_content_type($_FILES['file']['tmp_name']));
$notificare->setHeader('Content-length', filesize($_FILES['file']['tmp_name']));
$result = $notificare->uploadFile($_FILES['file']['tmp_name']);
if($result->getStatusCode()=='201'){
	$response = json_decode($result->getBody());
	var_dump($response);
}


/**
 * Delete files
 *
 */

$result = $notificare->deleteFile($filename);
if($result->getStatusCode()=='204'){
	$response = json_decode($result->getBody());
	var_dump($response);
}
