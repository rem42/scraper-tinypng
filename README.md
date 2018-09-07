Scraper TinyPNG
=======

This scraper TinyPNG use [Scraper](https://github.com/rem42/scraper).

Installation
------------

````bash
$ composer require rem42/scraper-tinypng "^1.0"
````

Configuration
-------------

Nothing Needed

Usage
-----

````php
<?php

    use Scraper\Scraper\Client;
    use Scraper\ScraperTinyPNG\Request\TinyPNGUploaderRequest;
    
    $request = new TinyPNGUploaderRequest();
    $request
    	->setFileContent(file_get_contents('path to your file'))
    	->setUserAgent('Need a browser user agent to work !')
    ;
    
    $client = new Client();
    $result = $client->api($request);
````

In the result var there is the Upload entity wich contains all the result from tinypng json response serialized in this entity.

You can also use a web upload and you only need tu set an url :

````php
<?php

    use Scraper\Scraper\Client;
    use Scraper\ScraperTinyPNG\Request\TinyPNGWebUploaderRequest;
    
    $request = new TinyPNGWebUploaderRequest();
    $request
    	->setUrl('url to your file')
    	->setUserAgent('Need a browser user agent to work !')
    ;
    
    $client = new Client();
    $result = $client->api($request);
````

