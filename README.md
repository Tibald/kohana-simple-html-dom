#Kohana Simple HTML Dom

Port for PHP Simple HTML DOM Parser to Kohana

##original project:

	Website: http://sourceforge.net/projects/simplehtmldom/
	

##example to use:

	
	Simplehtmldom::init();
	
	$url = 'http://google.com';
		
	$html = file_get_html($url);
	
	$title = $html->find('div.class h2', 0)->plaintext;
	
##see manual in:

	vendor/simplehtmldom/manual/manual.htm
