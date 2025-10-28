<?php



function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Trident/i',$u_agent))
    { // this condition is for IE11
        $bname = 'Internet Explorer';
        $ub = "rv";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    // Added "|:"
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
     ')[/|: ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

// now try it
$ua=getBrowser();
$yourbrowser = "" . $ua['name'] . " " . $ua['version'] . "" ;



function user_agent(){
   //-- Very simple way
$useragent = $_SERVER['HTTP_USER_AGENT']; 
$iPad = stripos($useragent, "iPad"); 
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android"); 
$iOS = stripos($useragent, "iOS");
$Windows = stripos($useragent, "Windows");
//-- You can add billion devices 

$DEVICE = ($iPad||$iPhone||$Android||$iOS||$Windows);
    if (!$DEVICE) {
        return 'ios';
    }else if($Android){
        return 'Android';
    }else if($Windows){
        return 'Windows';
    }else if($iPhone){
        return 'iPhone';
    }else if($iPad){
        return 'iPad';
    }else{
        return 'w';
    }
}

function xplatformt(){
   //-- Very simple way
$useragent = $_SERVER['HTTP_USER_AGENT']; 
$iPad = stripos($useragent, "iPad"); 
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android"); 
$iOS = stripos($useragent, "iOS");
$Windows = stripos($useragent, "Windows");
//-- You can add billion devices 

$DEVICE = ($iPad||$iPhone||$Android||$iOS||$Windows);
    if (!$DEVICE) {
        return 'Mobile';
    }else if($Android){
        return 'Mobile ';
    }else if($Windows){
        return 'Desktop';
    }else if($iPhone){
        return 'Mobile';
    }else if($iPad){
        return 'Mobile';
    }else{
        return 'w';
    }
}

function GGetIp(){
global $_SERVER;
	if (!empty($_SERVER['HTTP_CLIENT_IP'])){   //check ip from share internet
	  $ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){   // to check ip is pass from proxy 
	  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
	  $ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

$IpLockUpp  = GGetIp(); 

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$IpLockUpp.""));
$LOOKUP_COUNTRY  = $IP_LOOKUP->country;
$LOOKUP_MINCODE  = $IP_LOOKUP->countryCode;
$LOOKUP_CITY     = $IP_LOOKUP->city;
$LOOKUP_REGION   = $IP_LOOKUP->region;
$LOOKUP_STATE    = $IP_LOOKUP->regionName;
$LOOKUP_ZIPCODE  = $IP_LOOKUP->zip;
$LOOKUP_LOWCODE  = strtolower($LOOKUP_MINCODE);

   $country = $LOOKUP_COUNTRY;
   $ip = getenv('REMOTE_ADDR');
   $xbrowser = $yourbrowser;
   $xoperatingSystem = user_agent();
   $xplatform = xplatformt();
   $dns = gethostbyaddr($ip);
$date = date("Y/m/d");
$times = date("h:i:sa");
   $str = "[$ip]
dates=$date
dns=$dns
times=$times
browserName=$xbrowser
xoperatingSystem=$xoperatingSystem
platformName=$xplatform
country=$country
";

$ini = parse_ini_file('visitors.ini', true);

$emails = $ini["$IpLockUp"];
if (!empty("$emails")){
       
		
		}else{
	   file_put_contents('visitors.ini', $str  , FILE_APPEND | LOCK_EX);
	
		
       
	

}


;
  
  
?>