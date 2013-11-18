<?php

class parseConfig
{
  public $appid = '';
  public $masterkey = '';
  public $restkey = '';
  public $parseurl = '';
  
  public function getAppId()
  {
    return $this->appid;
  }
  public function getMasterKey()
  {
    return $this->masterkey;
  }
  public function getRestKey()
  {
    return $this->restkey;
  }
  public function getParseUrl()
  {
    return $this->parseurl;
  }
}
