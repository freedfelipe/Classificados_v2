<?php if ( ! defined('BASEPATH') )exit( 'No direct script access allowed' );

require_once 'application/libraries/facebook-php-sdk-master/src/facebook.php';

class Fb_connect_model extends CI_Model{
    
	public function __construct()
    {
		parent::__construct();
		
		$config = array(
			'appId'  				=> '260391987448237',
			'secret' 				=> '83c5554339a1559da9e96291ca76dc06',
			'allowSignedRequest'	=> false // optional but should be set to false for non-canvas apps
		);
		
		$this->fb = new Facebook($config);
    }

	public final function user_info($access = false, $user_profile = false)
    {
		if($access){
			
			$config = array('access_token' => $access);
			
			try {
				$user_profile = $this->fb->api('/me','GET', $config);
				
				$this->fb->setAccessToken($access);
				
				$this->fb->setExtendedAccessToken();
				$user_profile['novo_token'] = $this->fb->getAccessToken();
				
			} catch(FacebookApiException $e) {
				echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
				$user_profile = null;
			}
		}
		
		return $user_profile;
    }
	
	public final function fb_logout()
	{
		$params = array('next' => site_url());
		$this->fb->getLogoutUrl($params);
	}
}