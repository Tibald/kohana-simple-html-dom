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


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/madeinnordeste/kohana-simple-html-dom/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

