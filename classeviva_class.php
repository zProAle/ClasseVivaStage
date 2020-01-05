<?php
class  Classeviva {
	public function view ($numero_video,$session_id) {
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
			return "Il video " . $numero_video . " ora risultera' visto!";
		} else {
			return "Errore! controlla di aver inserito la giusta PHPSESSID!";
		}
	}
}

$classeviva = new Classeviva();
echo $classeviva->view('01.25','0t7aqa5ogl6ig7lb9m7e60tbf6gdiqlg');

