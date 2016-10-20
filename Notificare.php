<?php

namespace Aiandev\Notificarelaravel5;

use Illuminate\Support\Facades\Config;
use Aiandev\Notificarelaravel5\Notificare\NotificareApi;


class Notificare extends NotificareApi
{
	public function __construct (){
		parent::__construct();
		$this->setBaseUrl(config('aian_notificare.base_url'));
		$this->setUsername(config('aian_notificare.application_key'));
		$this->setPassword(config('aian_notificare.application_master_secret'));
	}
	
   	
}
