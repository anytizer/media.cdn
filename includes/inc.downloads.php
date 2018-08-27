<?php

$downloads = array();

// https://angularjs.org/
// https://code.angularjs.org/
$downloads["angularjs"] = array(
	"to" => "js/angularjs",
	"from" => "https://code.angularjs.org/1.7.3/",
	"files" => array(
		"angular-animate.min.js",
		"angular-aria.min.js",
		"angular-cookies.min.js",
		"angular-loader.min.js",
		"angular-message-format.min.js",
		"angular-messages.min.js",
		"angular-mocks.js",
		"angular-parse-ext.min.js",
		"angular-resource.min.js",
		"angular-route.min.js",
		"angular-sanitize.min.js",
		"angular-touch.js",
		"angular-touch.min.js",
		"angular.min.js",
	),
);

// https://github.com/angular-ui/ui-router
// https://unpkg.com/@uirouter/angularjs/
$downloads["ui-router"] = array(
	"to" => "js/ui-router",
	"from" => "https://unpkg.com/@uirouter/angularjs@1.0.20/release/",
	"files" => array(
		"angular-ui-router.min.js",
		"resolveService.min.js",
		"stateEvents.min.js",
		"ui-router-angularjs.min.js",
	),
);

// https://jquery.com/
// https://code.jquery.com/
$downloads["jquery"] = array(
	"to" => "js/jquery",
	"from" => "https://code.jquery.com",
	"files" => array(
		"jquery-3.3.1.min.js"
	),
);

$downloads["w3css"] = array(
	"to" => "css/w3css",
	"from" => "https://www.w3schools.com/w3css/4",
	"files" => array(
		"w3.css"
	),
);

$downloads["fontawesome-4.7.0"] = array(
	// https://cdnjs.com/libraries/font-awesome
	"to" => "css/fontawesome/4.7.0",
	"from" => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/",
	"files" => array(
		"css/font-awesome.min.css",
		"fonts/FontAwesome.otf",
		"fonts/fontawesome-webfont.eot",
		"fonts/fontawesome-webfont.svg",
		"fonts/fontawesome-webfont.ttf",
		"fonts/fontawesome-webfont.woff",
		"fonts/fontawesome-webfont.woff2",
	),
);

// <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
// https://cdnjs.com/libraries/twitter-bootstrap
$downloads["bootstrap"] = array(
	"to" => "css/bootstrap",
	"from" => "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3",
	"files" => array(
		"css/bootstrap-grid.min.css",
		"css/bootstrap-reboot.min.css",
		"css/bootstrap.min.css",
		"js/bootstrap.bundle.min.js",
		"js/bootstrap.min.js",
	),
);

$downloads["bootstrap-popper.js"] = array(
	"to" => "js/popper.js",
	"from" => "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/",
	"files" => array(
		"esm/popper-utils.min.js",
		"esm/popper.min.js",
		"popper-utils.min.js",
		"popper.min.js",
		"umd/popper-utils.min.js",
		"umd/popper.min.js",
	),
);