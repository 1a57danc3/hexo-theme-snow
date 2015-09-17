 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>User-Agent</title>
</head>
<body>
  <h1>Your User Agent is:</h1>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<h1>Your IP is:</h1>
<?php global $_SERVER; 
if (getenv('HTTP_CLIENT_IP'))
 { $ip = getenv('HTTP_CLIENT_IP');
 } else if (getenv('HTTP_X_FORWARDED_FOR'))
 { $ip = getenv('HTTP_X_FORWARDED_FOR');
 } else if (getenv('REMOTE_ADDR'))
 { $ip = getenv('REMOTE_ADDR');
 } else { $ip = $_SERVER['REMOTE_ADDR'];
 } echo $ip;
 ?>
<h1>Your Operation System is:</h1>
<?php function getSystem()
{ $agent = $_SERVER['HTTP_USER_AGENT'];
 if(stripos($agent, "NT 6.3"))
 $os = "Windows 8.1(preview) ";
 elseif(stripos($agent, "NT 6.2"))
 $os = "Windows 8";
 elseif(stripos($agent, "NT 6.1"))
 $os = "Windows 7";
 elseif(stripos($agent, "NT 6.0"))
 $os = "Windows Vista";
 elseif(stripos($agent, "NT 5.1"))
 $os = "Windows XP";
 elseif(stripos($agent, "NT 5.2"))
 $os = "Windows Server 2003";
 elseif(stripos($agent, "NT 5"))
 $os = "Windows 2000";
 elseif(stripos($agent, "NT 4.9"))
 $os = "Windows ME";
 elseif(stripos($agent, "NT 4"))
 $os = "Windows NT 4.0";
 elseif(stripos($agent, "98"))
 $os = "Windows 98";
 elseif(stripos($agent, "95"))
 $os = "Windows 95";
 elseif(stripos($agent, "ce"))
 $os = "Windows CE";
 elseif(stripos($agent, "Mac"))
 $os = "Mac OS X";
 elseif(stripos($agent, "Linux"))
 $os = "Linux";
 elseif(stripos($agent, "Unix"))
 $os = "Unix";
 elseif(stripos($agent, "FreeBSD"))
 $os = "FreeBSD";
 elseif(stripos($agent, "NetBSD"))
 $os = "NetBSD";
 elseif(stripos($agent, "SunOS"))
 $os = "SunOS";
 elseif(stripos($agent, "BeOS"))
 $os = "BeOS";
 elseif(stripos($agent, "OS/2"))
 $os = "OS/2";
 elseif(stripos($agent, "PC"))
 $os = "Macintosh";
 elseif(stripos($agent, "AIX"))
 $os = "AIX";
 elseif(stripos($agent, "iPad"))
 $os = "iOS";
 elseif(stripos($agent, "iPod"))
 $os = "iOS";
 elseif(stripos($agent, "iPhone"))
 $os = "iOS";
 elseif(stripos($agent, "Android"))
 $os = "Android";
 else $os = "Unknown Operation Sytem";
 if(stripos($agent, "WOW64"))
 $os.=" 64 Bit";
 elseif(stripos($agent, "x86_64"))
 $os.=" 64 Bit";
 elseif(stripos($agent, "i686 i386"))
 $os.=" 32 Bit";
return $os;
 } echo getSystem() ?>
<h1>Your Browser is:</h1>
<?php
date_default_timezone_set('Etc/GMT-8');
$useragent=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];
$info=json_decode(file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip='.$ip.'&format=json'),false);
if($info->ret==1){
if($info->province!=$info->city){
$address=$info->country.",".$info->province."(".$info->city.")  ".$info->district."  ".$info->desc;
}else{
$address=$info->country.",".$info->province."  ".$info->district."  ".$info->desc;
}
}else $address='地球';
function browser($ua){
if(stripos($ua,"Googlebot")){
$browser="谷歌蜘蛛";
}elseif(stripos($ua,"Baiduspider")!==false){
$browser="百度蜘蛛";
}elseif(stripos($ua,"Yahoo!")!==false){
$browser="雅虎蜘蛛";
}elseif(stripos($ua,"bingbot")){
$browser="必应蜘蛛";
}elseif(stripos($ua,"YRSpider")){
$browser="云壤蜘蛛";
}elseif(stripos($ua,"Yeti")!==false){
$browser="Naver蜘蛛";
}elseif(stripos($ua,"Maxthon")){
if(stripos($ua,"AppleWebKit")){
$browser ="遨游浏览器(极速模式)";
}elseif(stripos($ua,"Trident")){
$browser="遨游浏览器(兼容模式)";
}elseif(stripos($ua,"MAXTHON 2.0")){
$browser="遨游浏览器2.0";
}
}elseif(stripos($ua,"Firefox")){
$browser="火狐浏览器";
}elseif(stripos($ua,"Opera")==0&&stripos($ua,"Presto")){
$browser="Opera";
}elseif(stripos($ua,"BIDUBrowser")){
if(stripos($ua,"Trident")){
$browser="百度浏览器(兼容模式)";
}elseif(stripos($ua,"AppleWebKit")){
$browser="百度浏览器(极速模式)";
}
}elseif(stripos($ua,"Ruibin")){
$browser="瑞影浏览器";
}elseif(stripos($ua,"qihu theworld")){
if(stripos($ua,"Trident")){
$browser="世界之窗浏览器";
}elseif(stripos($ua,"AppleWebKit")){
$browser="世界之窗浏览器(极速模式)";
}
}elseif(stripos($ua,"MetaSr")){
if(stripos($ua,"Trident")){
$browser="搜狗高速浏览器(兼容模式)";
}elseif(stripos($ua,"AppleWebKit")){
$browser="搜狗高速浏览器(极速模式)";
}
}elseif(stripos($ua,"LBBROWSER")){
if(stripos($ua,"Trident")){
$browser="猎豹浏览器(兼容模式)";
}elseif(stripos($ua,"AppleWebKit")){
$browser="猎豹浏览器(极速模式)";
}
}elseif(stripos($ua,"YLMFBR")){
$browser="115浏览器";
}elseif(stripos($ua,"QQBrowser")){
if(stripos($ua,"Trident")){
$browser="QQ浏览器(兼容模式)";
}elseif(stripos($ua,"AppleWebKit")){
$browser="QQ浏览器(极速模式)";
}
}elseif(stripos($ua,"TencentTraveler")){
$browser="腾讯TT浏览器";
}elseif(stripos($ua,"TaoBrowser")){
if(stripos($ua,"Trident")){
$browser="淘宝浏览器(兼容模式)";
}elseif(stripos($ua,"AppleWebkit")){
$browser="淘宝浏览器(极速模式)";
}
}elseif(stripos($ua,"CoolNovo")){
$browser="枫树浏览器";
}elseif(stripos($ua,"SaaYaa")){
$browser="闪游浏览器";
}elseif(stripos($ua,"360SE")){
$browser="360安全浏览器";
}elseif(stripos($ua,"360EE")){
if(stripos($ua,"Trident")){
$browser="360极速浏览器(兼容模式)";
}elseif(stripos($ua,"AppleWebkit")){
$browser="360极速浏览器(极速模式)";
}
}elseif(stripos($ua,"Konqueror")){
$browser="Konqueror";
}elseif(stripos($ua,"Chrome")){
$browser="谷歌浏览器";
}elseif(stripos($ua,"Safari")){
$browser="Safari";
}elseif(stripos($ua,"MSIE")){
$ver=explode(";",substr($ua,stripos($ua,"MSIE")+5,4));
$ver=$ver[0];
$browser="IE ".$ver;
}elseif(stripos($ua,"UCWEB")){
$browser="UCWEB浏览器";
}
elseif(stripos($ua,"WAP")){
$browser="Mobile浏览器";
}else{
$browser=$ua;
}
if($browser=='')$browser=$ua;
return $browser;
}
?>
  
  
  
  
  <br>
  <br>
  <br>Powered By huhuhuzro       (CC) BY-NC-SA
  </body>
</html>