<?php
header("Content-Type: application/x-javascript");
public static function IsIPInternal(){
  if(
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.1.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.1.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.2.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.2.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.3.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.3.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.4.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.4.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.5.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.5.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.6.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.6.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.7.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.7.255")) &&
    !(ip2long(getenv("HTTP_X_FORWARDED_FOR")) > ip2long("192.168.8.0") && ip2long(getenv("HTTP_X_FORWARDED_FOR")) < ip2long("192.168.8.255"))
  ){
    return false;
  }else{
    return true;
  }
}


if(IsIPInternal()){
  include("constants.internal.js");
}else{
  include("constants.external.js");
}
