<?php
namespace micheleva\php_chatwork_api;

class Api {
	protected $api_key;
	protected $options;
	protected $message_url = "https://api.chatwork.com/v1/rooms/%u/messages";

	//初期化
	public function __construct ( $api_key, $echo = true) 
	{
		$this->api_key = $api_key;
		$this->options = array(
		    CURLOPT_HTTPHEADER => array('X-ChatWorkToken: '. $this->api_key),
		    CURLOPT_RETURNTRANSFER => $echo, // 文字列で返却
		    CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証をしない
		);
	}

	//メッセージを送信
	public function sendMessage($roomId,$body)
	{
		// 送信パラメーター
		$params = array(
		    'body' => $body // メッセージ内容
		);
		
		$options = $this->options;
		$options[CURLOPT_URL] = sprintf($this->message_url,$roomId);;
		$options[CURLOPT_POST] = true;
		$options[CURLOPT_POSTFIELDS] = http_build_query($params, '', '&');

		$ch = curl_init();
		curl_setopt_array($ch, $options);
		$response = curl_exec($ch);
		curl_close($ch);
	}
 
}