<?php

/**
 * Get a web file (HTML, XHTML, XML, image, etc.) from a URL.  Return an
 * array containing the HTTP server response header fields and content.
 * 
 * @see https://stackoverflow.com/questions/14953867/how-to-get-page-content-using-curl
 */
function get_web_page($url)
{
	$user_agent="Mozilla/5.0";

	$options = array(
		CURLOPT_CUSTOMREQUEST  => "GET",        //set request type post or get
		CURLOPT_POST           => false,        //set to GET
		CURLOPT_USERAGENT      => $user_agent, //set user agent
		CURLOPT_COOKIEFILE     => "cookie.txt", //set cookie file
		CURLOPT_COOKIEJAR      => "cookie.txt", //set cookie jar
		CURLOPT_RETURNTRANSFER => true,     // return web page
		CURLOPT_HEADER         => !false,    // don"t return headers
		CURLOPT_FOLLOWLOCATION => true,     // follow redirects
		CURLOPT_ENCODING       => "",       // handle all encodings
		CURLOPT_AUTOREFERER    => true,     // set referer on redirect
		CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
		CURLOPT_TIMEOUT        => 120,      // timeout on response
		CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
		CURLOPT_SSL_VERIFYPEER => true,
	);

	$ch      = curl_init($url);
	curl_setopt_array($ch, $options);
	$content = curl_exec($ch);
	$err     = curl_errno($ch);
	$errmsg  = curl_error($ch);
	$header  = curl_getinfo($ch);
	#print_r($header);
	curl_close($ch);

	$header["errno"]   = $err;
	$header["errmsg"]  = $errmsg;
	$header["content"] = $content;
	return $header;
}

function download($url)
{
	//file_get_contents($url);
	$contents = get_web_page($url);
	return $contents["content"];
}

function save($path, $contents)
{
	file_put_contents($path, $contents);
}


/**
 * file path
 */
function sanitize($path="")
{
	$path = preg_replace("/[^a-z0-9\.\-\_\/]/is", "", $path);
	return $path;
}