<?php

class parseObject extends parseRestClient{
	public $_includes = array();

	public function __set($name,$value){
		if($name != '_className'){
			$this->data[$name] = $value;
		}
	}

	public function save($className){
		if(count($this->data) > 0 && $className != ''){
			$request = $this->request(array(
				'method' => 'POST',
				'requestUrl' => 'classes/'.$className,
				'data' => $this->data,
			));
			return $request;
		}
	}

	public function get($className,$id){
		if($className != '' || !empty($id)){
			$request = $this->request(array(
				'method' => 'GET',
				'requestUrl' => 'classes/'.$className.'/'.$id
			));
			
			if(!empty($this->_includes)){
				$request['include'] = implode(',', $this->_includes);
			}
			
			return $request;
		}
	}

	public function update($className,$id){
		if($className != '' || !empty($id)){
			$request = $this->request(array(
				'method' => 'PUT',
				'requestUrl' => 'classes/'.$className.'/'.$id,
				'data' => $this->data,
			));

			return $request;
		}
	}

	public function increment($field,$amount){
		$this->data[$field] = $this->dataType('increment', $amount);
	}

	public function decrement($id){
		$this->data[$field] = $this->dataType('decrement', $amount);
	}


	public function delete($className,$id){
		if($className != '' || !empty($id)){
			$request = $this->request(array(
				'method' => 'DELETE',
				'requestUrl' => 'classes/'.$className.'/'.$id
			));

			return $request;
		}		
	}

	public function addInclude($name){
		$this->_includes[] = $name;
	}
}
