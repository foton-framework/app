# Foton Framework - Default App

## Installation

### Cloning app
	
	$ git clone git://github.com/foton-framework/app.git path/to/your-site.local

### Install Composer

[More info](http://getcomposer.org/)

**Windows:**

Download [installer](https://getcomposer.org/Composer-Setup.exe)

***nix:**
	
	$ curl -sS https://getcomposer.org/installer | php

### Install framework

	$ php composer.phar install

### Install framework

	$ php composer.phar update

### composer.json

	:::json
	{
		"require": {
			"foton/framework":       "1.*",
			"foton/debug":           "1.*",
			"foton/admin":           "1.*",
			"foton/user":            "1.*",
			"foton/comments":        "1.*",
			"foton/html":            "1.*",
			"foton/image_field":     "1.*",
			"foton/log":             "1.*",
			"foton/seo":             "1.*",
			"foton/versioning":      "1.*",
			"foton/captcha":         "1.*",
			"foton/code_protection": "1.*",
			"foton/js_validation":   "1.*",
			"foton/ratio":           "1.*"
		},
		"minimum-stability": "dev"
	}
