<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
		array(
			"base_url" => "http://www.nofreelunches.com/library/hybridauth/",
			"providers" => array(
				// openid providers
				"OpenID" => array(
					"enabled" => true
				),
				"Yahoo" => array(
					"enabled" => true,
					"keys" => array("key" => "", "secret" => ""),
				),
				"AOL" => array(
					"enabled" => true
				),
				"Google" => array(
					"enabled" => true,
					"keys" => array("id" => "293560712305-v48of18cr1qu7nucjle28hrqml739426.apps.googleusercontent.com",
					 "secret" => "4BZrbAD-cYdZu1baVoVr5vw_"),
				),
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id" => "1740887412844582", "secret" => "96dd32f89ff85f3605a649b976fd78a3"),
					"scope" => "email, user_about_me, user_birthday, user_hometown, user_website,user_friends, offline_access, read_stream, publish_stream, read_custom_friendlists ",
					"trustForwarded" => false
				),
				"Twitter" => array(
					"enabled" => true,
					"keys" => array("key" => "WWVWcFbTEUAprGaZQETTC5OLM", "secret" => "GLAwk3gzpCuKRM1PLm5THzEITKwYluMaOSraL5QBc48aoxGpY5"),
					"includeEmail" => true
				),
				// windows live
				"Live" => array(
					"enabled" => true,
					"keys" => array("id" => "", "secret" => "")
				),
				"LinkedIn" => array(
					"enabled" => true,
					"keys" => array("key" => "", "secret" => "")
				),
				"Foursquare" => array(
					"enabled" => true,
					"keys" => array("id" => "", "secret" => "")
				),
			),
			// If you want to enable logging, set 'debug_mode' to true.
			// You can also set it to
			// - "error" To log only error messages. Useful in production
			// - "info" To log info and error messages (ignore debug messages)
			"debug_mode" => false,
			// Path to file writable by the web server. Required if 'debug_mode' is not false
			"debug_file" => "",
);
