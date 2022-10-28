<?php

require_once("mobile_detect.php");

class KON {
	protected $username;
	protected $password;
    protected $campaignId;
	protected $baseUrl = "https://api.konnektive.com";
	protected $data;
    public $config;
    public $errors = array();

	public function __construct(array $config = array()) {
        $json = file_get_contents(__DIR__ . '/config.json');
        $json_data = json_decode($json,true);
        
        $this->username = $json_data['username'];
        $this->password = $json_data['password'];
        $this->config = $json_data;
        $this->setCampaignId($this->config['campaignId']);
	}

    public function affiliateScrubSession($percent) {
        if(!isset($_SESSION['scrub'])):
            $roll = rand(1,100);

            if($roll < $percent):
                $_SESSION['scrub'] = true;
            else:
                $_SESSION['scrub'] = false;
            endif;

        endif;
    }
    
    public function setAffiliateSession() {
        if(isset($_GET['affId'])):
            $_SESSION['affId'] = $_GET['affId'];
            $_SESSION['c1'] = $_GET['c1'];
            $_SESSION['c2'] = $_GET['c2'];
            $_SESSION['c3'] = $_GET['c3'];
            $_SESSION['c4'] = $_GET['c4'];
        endif;
    }

    public function mobileDetect(){ 
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'phone' : 'phone') : 'computer');

        return $deviceType;
    }

    public function setCampaignId($c){
		$this->campaignId = $c;
	}

	public function importClick(){
		$url = $this->baseUrl . "/landers/clicks/import/";

		return $this->setCurlRequest($url, $this->data);
	}

	public function importLead(){
		$url = $this->baseUrl . "/leads/import/";

		return $this->setCurlRequest($url, $this->data);
	}
	
	public function importOrder(){
		$url = $this->baseUrl . "/order/import/";

		return $this->setCurlRequest($url, $this->data);
	}

	public function importUpsale(){
		$url = $this->baseUrl . "/upsale/import/";

		return $this->setCurlRequest($url, $this->data);
	}

    public function confirmOrder(){
		$url = $this->baseUrl . "/order/confirm/";

		return $this->setCurlRequest($url, $this->data);
	}

	public function prepareData($d){

		$this->data = array();
		$this->data['loginId'] = $this->username;
		$this->data['password'] = $this->password;
        $this->data['campaignId'] = $this->campaignId;

		foreach($d as $key => $value){
			$this->data[$key] = $value;
		}

		return $this->data;
	}

    public function setClickImport($pagetype) {
        $config = $this->config;
        $d = array();
        $d['pageType'] = $pagetype;

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $d['requestUri'] = (isset($_SERVER['HTTP_REFERER']))?$_SERVER['HTTP_REFERER']:$actual_link;

        $this->prepareData($d);
        
        $result = json_decode($this->importClick());

        $seshid = $result->message->sessionId;
        $_SESSION['sessionId'] = $seshid;
        
        return $seshid;
    }

	public function setCurlRequest($url, $data) {
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $url."?".http_build_query($data, '', '&'),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_HTTPHEADER => array(
			"Accept: */*",
			"Accept-Encoding: gzip, deflate",
			"Cache-Control: no-cache",
			"Connection: keep-alive",
			"Content-Length: ",
			"Host: api.konnektive.com",
			"Postman-Token: 81104f21-f2dd-4140-afaf-5197e6757354,1cc68c6b-858d-41d7-ac42-2d6fe7eb50cd",
			"User-Agent: PostmanRuntime/7.15.2",
			"cache-control: no-cache"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return ($err)?$err:$response;
	}

	public function getRealIP(){
        if(isset($_SERVER["HTTP_CLIENT_IP"])){
            return $_SERVER["HTTP_CLIENT_IP"];
        }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
            return $_SERVER["HTTP_X_FORWARDED"];
        }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
            return $_SERVER["HTTP_FORWARDED_FOR"];
        }elseif (isset($_SERVER["HTTP_FORWARDED"])){
            return $_SERVER["HTTP_FORWARDED"];
        }else{
            return $_SERVER["REMOTE_ADDR"];
        }
	}
	
	public function getCurrentFullUrl(){
		$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                $_SERVER['REQUEST_URI']; 
  
		return $link; 
	}

    public function initSession() {
        session_start();
    }

    public function setSessionFields($f){
        if(count($f) > 0):
            //checkbox fields
            $_SESSION['billShipSame'] = "0";
            //checkbox fields end

            foreach($f as $fields => $value):
                if(strlen($value) > 0):
                    $_SESSION[$fields] = $value;
                else:
                    unset($_SESSION[$fields]);
                endif;
            endforeach;
        endif;
    }

    public function setErrors($e) {
        $this->errors[] = $e;
        $_SESSION['errors'] = $this->errors;
    }

    public function validateFields($page, $fields){
        $this->errors = array();
        unset($_SESSION['errors']);

        $config = $this->config;

        if(count($fields) > 0):
            //check required

            foreach($config[$page]['required'] as $id => $name):
                if(!(isset($fields[$id]) and (strlen($fields[$id]) > 0))):
                    $this->errors[] = $name . " field is required";
                else: 
                    //email address validation
                    if($id == "emailAddress"):
                        if(!filter_var($fields[$id], FILTER_VALIDATE_EMAIL)):
                            $this->errors[] = "Invalid email address format";
                        endif;
                    endif;
                endif;
            endforeach;
        endif;

        if(count($this->errors) > 0):
            $_SESSION['errors'] = $this->errors;
        endif;

        return (count($this->errors) > 0)?true:false;
    }
}