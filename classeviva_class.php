<?php
class Classeviva {
	// Funzioni
	function Request($url, $data=NULL, $headers = NULL, $islogin = NULL) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// for get headers
		if(!empty($islogin)){
			curl_setopt($ch, CURLOPT_HEADER, 1); 
		}
		// check a post data
		if(!empty($data)){
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}
		// check headers data
		if (!empty($headers)) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		$response = curl_exec($ch);
		// check a error
		if (curl_error($ch)) {
			trigger_error('Curl Error:' . curl_error($ch));
		}
		curl_close($ch);
		return $response;
	}
	public function __construct($sessionID){
		$this->phpsession = $sessionID;
	}
	public function viewVideo($numeroLezione, $idCorso){
		$head = array(
			"Host: web.spaggiari.eu",
			"Content-Length: 66",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=regTempo&tipo=vid&durata=203.52&duratatot=203.52&lezione=$numeroLezione";
		$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
		echo $response;
	}
	public function setMinutiTotali($numeroMinuti){
		$head = array(
			"Host: web.spaggiari.eu",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=regTempo&tipo=reg&durata=1&duratatot=0&lezione=vid";
		for ($i = 0; $i < $numeroMinuti; $i++) {
			$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
			echo $response;
		}
	}
	public function setMinutiSlide($numeroMinuti){
		$head = array(
			"Host: web.spaggiari.eu",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=regTempo&tipo=reg&durata=1&duratatot=0&lezione=sli";
		for ($i = 0; $i < $numeroMinuti; $i++) {
			$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
			echo $response;
		}
	}
	public function setMinutiTest($numeroMinuti){
		$head = array(
			"Host: web.spaggiari.eu",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=regTempo&tipo=reg&durata=1&duratatot=0&lezione=tst";
		for ($i = 0; $i < $numeroMinuti; $i++) {
			$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
			echo $response;
		}
	}
	public function setMinutiNormative($numeroMinuti){
		$head = array(
			"Host: web.spaggiari.eu",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=regTempo&tipo=reg&durata=1&duratatot=0&lezione=nor";
		for ($i = 0; $i < $numeroMinuti; $i++) {
			$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
			echo $response;
		}
	}
	public function setRisposataVideo($numeroLezione, $numeroDomanda, $numeroEsito){
		$head = array(
			"Host: web.spaggiari.eu",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=checkTest&lezione=$numeroLezione&tipo=tst&domanda=$numeroDomanda&esito=$numeroEsito";
		$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
		echo $response;
	}
	public function setRisposataTestFinale($numeroLezione, $numeroDomanda, $numeroEsito){
		$head = array(
			"Host: web.spaggiari.eu",
			"Cookie: PHPSESSID=$this->phpsession;",
			"Content-Type: application/x-www-form-urlencoded",
		);
		$data = "act=checkTest&lezione=$numeroLezione&tipo=tsf&domanda=$numeroDomanda&esito=$numeroEsito";
		$response = $this->Request("https://web.spaggiari.eu/col/app/default/corso.xhr.php", $data, $head);
		echo $response;
	}
}
