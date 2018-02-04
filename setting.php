<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "k/+WdpkSoZof/xgLClTWtxKAI/MqqJEwyB3Rjydp5jbAUMSVR/PELhxjbsJI9dwSbVLRX/f1gzhhDJ14cIIqBkD9XTrPhF8ecmdUqfw8p884zghRxnMVvZvbDP0ItLB11LLep1Ye/wmwT/uJXVNo1QdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "c41d451e0f42f191c338b2760387956";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
