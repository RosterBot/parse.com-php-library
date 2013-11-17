<?php

class parseGeoPoint extends parseRestClient
{
	public $location;

	public function __toString(){
		if(! is_null( $this->location) )
		{
			return json_encode($this->location);	
		}
		return "";
	}
	
	public function get($lat,$long)
	{
		$this->location = $this->dataType('geopoint', array($lat, $long));
		return json_encode($this->location);
	}
}
