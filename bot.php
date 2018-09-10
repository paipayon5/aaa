include ('line-bot-api/php/line-bot.php');

$channelSecret = '836adb912d7cbc15cd1a2a453cf6f860';
$access_token  = '8XiBgy0V7wVEXpkmckGTfTHO5LcdQYk5iO/Skvn/E3n7RdRtfrK5mk07kDa0EfKUuR9vuwrY8kPvOBM82VlTd3daGTzC6HH6/6i9D+6kAIP0TUqIjiIX6GkczHmUzit0wGWQGUW2boC/6oBKuHymcAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
