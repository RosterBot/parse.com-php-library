<?php
/*
	// Adding the possibility to run parse cloud code functions
	$cloud = new parseCloud("functionName");
	// Setting the params
	$cloud->__set('action',1234);
	$cloud->__set('identifier',"aZ02fe2a");
	// Running the cloud function
	$result = $cloud->run();
	print_r($result);
*/
class parseCloud extends parseRestClient{
	public $_options;

	public function __construct(parseConfig $config){
		$this->_options = array();
		parent::__construct($config);
	}

	public function __set($name,$value){
		$this->_options[$name] = $value;
	}
	public function run($function=''){
		if($functionName != ''){
			$request = $this->request(array(
				'method' => 'POST',
				'requestUrl' => 'functions/'.$functionName,
				'data' => $this->_options,
			));
			return $request;
		}
	}
}

?>
