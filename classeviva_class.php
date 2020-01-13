<?php
class  Classeviva {
	
	public function login($username,$password) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://web.spaggiari.eu/auth-p7/app/default/AuthApi4.php?a=aLoginPwd",
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_HEADER => 1,
			CURLOPT_FOLLOWLOCATION => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => array('cid' => '','uid' => $username,'pwd' => $password,'pin' => '','target' => ''),
			CURLOPT_HTTPHEADER => array(
				"Host:web.spaggiari.eu",
			),
		));
		$response = curl_exec($curl);
		$responsea = json_decode($response);
		curl_close($curl);
		preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
		$cookies = array();
		foreach($matches[1] as $item) {
			parse_str($item, $cookie);
			$cookies = array_merge($cookies, $cookie);
		}
		if(isset($cookies['PHPSESSID'])){
			return $cookies['PHPSESSID'];
		} else {
			return "Hai inserito una password sbagliata!";
		}
	}
	
	public function view($numero_video,$session_id) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://web.spaggiari.eu/col/app/default/corso.xhr.php",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => array('act' => 'regTempo','tipo' => 'vid','durata' => '302.379','duratatot' => '302.379','lezione' => $numero_video),
			CURLOPT_HTTPHEADER => array(
				"Cookie: PHPSESSID=$session_id;",
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		if($response == "OK"){
			return "Il video " . $numero_video . " ora risultera' visto! \n";
		} else {
			return "Errore! controlla di aver inserito la giusta PHPSESSID! \n";
		}
	}
	public function minuti_video($session_id) {
		for ($i = 0; $i < 200; $i++) {
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://web.spaggiari.eu/col/app/default/corso.xhr.php",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => false,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => array('act' => 'regTempo','tipo' => 'reg','durata' => '1','duratatot' => '0','lezione' => 'vid'),
				CURLOPT_HTTPHEADER => array(
					"Cookie: PHPSESSID=$session_id;",
				),
			));
			$response = curl_exec($curl);
			curl_close($curl);
		}
		return "Okay! ora risulterano 4 ore in piattaforma! \n";
	}
	public function minuti_test($session_id) {
		for ($k = 0; $k < 27; $k++) {
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://web.spaggiari.eu/col/app/default/corso.xhr.php",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => false,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => array('act' => 'regTempo','tipo' => 'reg','durata' => '1','duratatot' => '0','lezione' => 'tst'),
				CURLOPT_HTTPHEADER => array(
					"Cookie: PHPSESSID=$session_id;",
				),
			));
			$response = curl_exec($curl);
			curl_close($curl);
		}
		return "Okay! ora risulterano 27 minuti in piattaforma! \n";
	}
	public function minuti_slide($session_id) {
		for ($m = 0; $m < 48; $m++) {
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://web.spaggiari.eu/col/app/default/corso.xhr.php",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => false,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => array('act' => 'regTempo','tipo' => 'reg','durata' => '1','duratatot' => '0','lezione' => 'sli'),
				CURLOPT_HTTPHEADER => array(
					"Cookie: PHPSESSID=$session_id;",
				),
			));
			$response = curl_exec($curl);
			curl_close($curl);
		}
		return "Okay! ora risulterano 48 minuti nelle slide! \n";
	}
	public function minuti_normative($session_id) {
		for ($f = 0; $f < 48; $f++) {
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://web.spaggiari.eu/col/app/default/corso.xhr.php",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => false,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => array('act' => 'regTempo','tipo' => 'reg','durata' => '1','duratatot' => '0','lezione' => 'nor'),
				CURLOPT_HTTPHEADER => array(
					"Cookie: PHPSESSID=$session_id;",
				),
			));
			$response = curl_exec($curl);
			curl_close($curl);
		}
		return "Okay! ora risulterano 48 minuti nelle slide! \n";
	}
}



