<?php
$ip_block = array(
        '51.107.*.*',
        '40.94.*.*',
		'154.52.*.*',
		'141.91.*.*',
		'51.116.1.*',
        '216.58.197.101-216.58.197.200',
        '98.255.255.100-98.255.255.150'
);

if (isset($_SERVER['HTTP_CLIENT_IP']))
{
    $client_ip = $_SERVER['HTTP_CLIENT_IP'];
} else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
    $client_ip = $_SERVER['HTTP_X_FORWARDED'];
} else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
    $client_ip = $_SERVER['HTTP_FORWARDED_FOR'];
} else if(isset($_SERVER['HTTP_FORWARDED'])) {
    $client_ip = $_SERVER['HTTP_FORWARDED'];
} else if(isset($_SERVER['REMOTE_ADDR'])) {
    $client_ip = $_SERVER['REMOTE_ADDR'];
}



$blocked = false;
foreach($ip_block as $ip)
        {
            if($client_ip == $ip)
            {
                $blocked = true;
                break;
            }else if(strpos($ip, '*') !== false){
                $digits = explode(".", $ip);
                $client_ip_digits = explode(".", $client_ip);
                if($digits[1] == '*' && $digits[0] == $client_ip_digits[0])
                {
                    $blocked = true;
                    break;
                }else if($digits[2] == '*' && $digits[0] == $client_ip_digits[0] && $digits[1] == $client_ip_digits[1]){
                    $blocked = true;
                    break;
                }else if($digits[3] == '*' && $digits[0] == $client_ip_digits[0] && $digits[1] == $client_ip_digits[1] && $digits[2] == $client_ip_digits[2]){
                    $blocked = true;
                    break;
                }
            }else if(strpos($ip, "-") !== false){
                list($start_ip, $end_ip) = explode("-", $ip);
                $start_ip = preg_replace('/\s+/', '', $start_ip);
                $end_ip = preg_replace('/\s+/', '', $end_ip);
                 
                $start_ip_long = ip2long($start_ip);
                $end_ip_long = ip2long($end_ip);
                 
                if($client_ip_long >= $start_ip_long && $client_ip_long <= $end_ip_long)
                {
                    $blocked = true;
                    break;
                }
            }
        }
		if($blocked == true)
    {
       exit();
    }
	?>