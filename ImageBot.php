<?php
require_once 'TelegramBot.php';

/*
https://www.94cb.com/Telegram-Simple-Image-Bot/webhook.php
{
    "message": {
        "chat": {
            "id": 12450
        },
        "text": "/pic @canbin_bot"
    }
}
*/
class ImageBot extends TelegramBot {
	public function init() {
	parent::init();
	}
}


class ImageBotChat extends TelegramBotChat {
	private $responseTable = array(
		'碎叫' => array('text'=>'晚安'),
		'睡觉' => array('text'=>'晚安'),
		'睡了' => array('text'=>'晚安'),
		//'买' => array('photo'=>'buy'),
		'好污' => array(
			'photo'=>'images',
			'text'=>'
👌👉🏿👌👌👌👌👌👌👌👌👌👌
👌👌👉🏿👌👌👉🏿👉🏿👉🏿👉🏿👉🏿👉🏿👌
👌👌👌👌👌👌👌👌👌👌👌👌
👉🏿👌👌👌👌👌👌👌👌👌👌👌
👌👉🏿👌👌👉🏿👉🏿👉🏿👉🏿👉🏿👉🏿👉🏿👉🏿
👌👌👌👌👌👌👉🏿👌👌👌👌👌
👌👌👉🏿👌👌👌👉🏿👌👌👌👌👌
👌👉🏿👌👌👌👉🏿👉🏿👉🏿👉🏿👉🏿👉🏿👌
👉🏿👉🏿👌👌👌👌👌👌👌👌👉🏿👌
👌👉🏿👌👌👌👌👌👌👌👌👉🏿👌
👌👉🏿👌👌👌👌👉🏿👌👌👉🏿👌👌
👌👉🏿👌👌👌👌👌👉🏿👉🏿👌👌👌
'),

		'噫！' => array('text'=>'
🌚🌚🌚🌚🌚🌚🌚🌚🌚🌚🌝🌚🌚🌚🌚🌚
🌚🌚🌚🌚🌚🌚🌚🌚🌚🌚🌚🌝🌚🌚🌝🌚
🌚🌝🌝🌝🌝🌚🌝🌝🌝🌝🌝🌝🌝🌝🌝🌝
🌚🌝🌚🌚🌝🌚🌚🌚🌝🌚🌚🌚🌚🌝🌚🌚
🌚🌝🌚🌚🌝🌚🌚🌚🌚🌝🌚🌚🌝🌚🌚🌚
🌚🌝🌚🌚🌝🌚🌝🌝🌝🌝🌝🌝🌝🌝🌝🌝
🌚🌝🌚🌚🌝🌚🌚🌚🌚🌚🌚🌚🌚🌚🌚🌚
🌚🌝🌚🌚🌝🌚🌚🌝🌝🌝🌝🌝🌝🌝🌝🌚
🌚🌝🌚🌚🌝🌚🌚🌝🌚🌚🌚🌚🌚🌚🌝🌚
🌚🌝🌝🌝🌝🌚🌚🌝🌝🌝🌝🌝🌝🌝🌝🌚
🌚🌝🌚🌚🌝🌚🌚🌝🌚🌚🌚🌚🌚🌚🌝🌚
🌚🌝🌚🌚🌚🌚🌚🌝🌝🌝🌝🌝🌝🌝🌝🌚
🌚🌚🌚🌚🌚🌚🌝🌚🌝🌚🌝🌚🌚🌚🌚🌝
🌚🌚🌚🌚🌚🌚🌝🌚🌝🌚🌚🌝🌚🌝🌚🌚
🌚🌚🌚🌚🌚🌝🌚🌚🌝🌚🌚🌚🌚🌝🌚🌚
🌚🌚🌚🌚🌚🌚🌚🌚🌚🌝🌝🌝🌝🌝🌚🌚'),
/*
		'噫'=> array('text'=>'
🌚🌚🌚🌚🌚🌚🌚🌝🌚🌚🌚🌚
🌝🌝🌝🌚🌝🌝🌝🌝🌝🌝🌝🌚
🌝🌚🌝🌚🌚🌝🌚🌚🌝🌚🌚🌚
🌝🌚🌝🌝🌝🌝🌝🌝🌝🌝🌝🌝
🌝🌚🌝🌚🌝🌚🌚🌚🌚🌝🌚🌚
🌝🌚🌝🌚🌝🌝🌝🌝🌝🌝🌚🌚
🌝🌚🌝🌚🌝🌚🌚🌚🌚🌝🌚🌚
🌝🌝🌝🌚🌝🌝🌝🌝🌝🌝🌚🌚
🌝🌚🌝🌚🌚🌝🌚🌝🌚🌚🌚🌚
🌚🌚🌚🌚🌝🌝🌚🌚🌝🌚🌝🌚
🌚🌚🌚🌝🌚🌝🌚🌚🌚🌝🌚🌝
🌚🌚🌚🌚🌚🌚🌝🌝🌝🌝🌚🌚
'),
*/
		'😂😂😂' => array('text'=>'😂😂😂')
	);
	public function __construct($core, $chat_id) {
	parent::__construct($core, $chat_id);
	}
	public function init() {
	}

	public function some_command($command, $params, $message) {
		switch ($command) {
			case 'start':
			case 'help':
				$this->apiSendMessage("我是一个脱离了高级趣味的Bot. /pic or /hentai ");
				break;
			case 'about':
				$this->apiSendMessage("https://github.com/sndnvaps");
				break;
			case 'yi':
				$this->apiSendMessage($this->responseTable['噫！']['text']);
				break;
			case 'pic':
				$this->returnPicture($this->getRandomPicturePath("images"));
				break;
			case 'hentai':
			case 'cg':
				$this->returnPicture($this->getRandomPicturePath("cg"));
				break;
			case 'who':
				$this->apiSendMessage("My BotFather is sndnvaps who is working hard to building me body");
			default:
				//$this->returnPicture($this->getRandomPicturePath("images"));
				break;
		}
		return;
	}


	public function message($text, $message) {
		/*
		$reply_string = file_get_contents('./reply.txt', FILE_USE_INCLUDE_PATH);
		if($reply_string){
			$this->apiSendMessage($reply_string);
			file_put_contents('./reply.txt', "");
		}
		*/
		
		foreach ($this->responseTable as $key => $value) {
			if(strpos($text, $key) !== false){
				if(isset($value['photo'])){
					$this->returnPicture($this->getRandomPicturePath($value['photo']));
					sleep(5);
				}
				if(isset($value['text'])){
					$this->apiSendMessage($value['text']);
				}
				break;
			}
		}
		
		return;
	}

	private function getRandomPicturePath($dir_name){
		$image_list = scandir(__DIR__ . "/". $dir_name);
		return "@" . __DIR__.  "/" .  $dir_name . "/" . $image_list[mt_rand(2,  (count($image_list)-1))];
		
	}

	private function returnPicture($path){
		$this->core->request('sendPhoto',
			 array(
				'chat_id' => $this->chatId,
				'photo' => $path
			), 
			array(
				'http_method' => 'POST'
			)
		);
	}

}
