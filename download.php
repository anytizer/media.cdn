<?php
# Allow hot linking to these files

require_once("includes/inc.downloads.php");
require_once("includes/inc.functions.php");

# If already downloaded, comment them out
#unset($downloads["angularjs"]);
#unset($downloads["ui-router"]);
#unset($downloads["jquery"]);
#unset($downloads["w3css"]);
#unset($downloads["fontawesome-4.7.0"]);
#unset($downloads["bootstrap"]);
#unset($downloads["bootstrap-popper.js"]);

#print_r(array_keys($downloads)); die();
#print_r($downloads); #die();

foreach($downloads as $module)
{
	$path = sanitize($module["to"]);
	$to = "public_html/{$path}";
	if(!is_dir($to))
	{
		mkdir($to, 0644, true);
	}
	
	// @todo If filename contains a path, recreate path
	foreach($module["files"] as $file)
	{
		// re-create subdirectory
		if($file !== basename($file))
		{
			$pi = pathinfo("{$to}/{$file}");
			$path = $pi["dirname"];
			if(!is_dir($path))
			{
				mkdir($path, 0644, true);
			}
		}

		// Download
		$from = rtrim($module["from"], "/");
		$url = "{$from}/{$file}";
		$fc = download($url);
		
		// Save
		$target = "$to/{$file}";
		save($target, $fc);

		// Show download progress marker
		echo ".";
		flush();
	}
}