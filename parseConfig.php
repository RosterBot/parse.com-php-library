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
  
  
  public function setAppId($a)
  {
    $this->appid = $a;
    return $this;
  }
  public function setMasterKey($m)
  {
    $this->masterkey = $m;
    return $this;
  }
  public function setRestKey($r)
  {
    $this->restkey = $r;
    return $this;
  }
  public function setParseUrl($p)
  {
    $this->parseurl = $p;
    return $this;
  }
}
