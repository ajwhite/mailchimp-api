<?php
/**
 * Interface for MailChimp API
 * 
 */
	
	require_once('MailChimpAPIWrapper.php');
	
	
	class MailChimpAPI extends MailChimpAPIWrapper
	{
		function __construct($apiKey = false){
			parent::__construct($apiKey);
		}
		
		public function getLists(){
			$listData = $this->call('lists/list');
			if (!isset($listData['data'])) return false;
			return $listData['data'];
		}
		
		public function createCampaign(){
			
		}
		
		public function sendCampaign($campaignID){
			
		}
		
		public function createAndSendCampaign(){
			$cid = $this->createCampaign();
			$this->sendCampaign($cid);
		}
	}
	
?>