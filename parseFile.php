<?php

class parseFile extends parseRestClient
{
	public function save($fileName,$contentType='',$data=''){
		if($fileName != '' && $this->_contentType != '' && $this->data != ''){
			$request = $this->request(array(
				'method' => 'POST',
				'requestUrl' => 'files/'.$fileName,
				'contentType' => $contentType,
				'data' => $data,
			));
			return $request;
		}
		else{
			$this->throwError('Please make sure you are passing a proper filename as string (e.g. hello.txt)');
		}
	}

	public function delete($parseFileName,$contentType){
		if($parseFileName != ''){
			$request = $this->request(array(
				'method' => 'DELETE',
				'requestUrl' => 'files/'.$parseFileName,
				'contentType' => $contentType,
			));
			return $request;

		}
	}



}

?>
