<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "qinKiQgfB0eNNqp15Pb70ldUHjlOxICsg6TMzcl70mCPIyBe9nNOngpTRUqxpnhgxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCElBYHhZvVqM9ri9hXn2AbkM4XuiQoJp0pCzK9rF9HY9SwdB04t89/1O/w1cDnyilFU=
";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "4d93979b89f308b70acdadd9ec944f73";
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
