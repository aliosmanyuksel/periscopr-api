cjhbtn/periscopr-api
=================

----------

**Author**: Chris Hogben <me@cjh.im>

**License**: [Apache 2.0](http://www.apache.org/licenses/LICENSE-2.0)

**Website**: https://bitbucket.org/cjhbtn/periscopr-api

**Git Repository**: https://bitbucket.org/cjhbtn/periscopr-api.git

----------

## Introduction ##

[Periscope](https://periscope.tv) is a mobile application developed and distributed by [Twitter](https://twitter.com).

It allows users to live stream events from their mobile devices to a worldwide audience. Viewers can interact with the
broadcasters through an in-built chat system, and rate the broadcast by tapping on the device's screen to register a "heart".

Unlike the main [Twitter](https://twitter.com) service, [Periscope](https://periscope.tv) has no public API for developers
to harness. This library aims to fill this gap by providing a way of communicating directly with the [Periscope](https://periscope.tv)
API.

As with the main [Twitter](https://twitter.com) API, access is controlled through the use of OAuth authentication. A user authorizes
the [Periscope](https://periscope.tv) application via OAuth, which provides tokens to the user's [Twitter](https://twitter.com) account.
These tokens are proivided to the [Periscope](https://periscope.tv) API and exchanged for a Cookie value, which is then used to authenticate
all future requests.


----------

## Getting Started ##

----------

!! **NOTE** !!

**IN ORDER TO UTILISE THIS LIBRARY, YOU WILL REQUIRE AN OAUTH TOKEN AND OAUTH TOKEN SECRET FOR THE PERISCOPE APPLICATION.**

**PLEASE DO NOT RAISE AN ISSUE OR CONTACT US IF YOU DO NOT HAVE THESE - A SERVICE WILL BE PROVIDED TO GENERATE THESE ONLINE SHORTLY**

!! **NOTE** !!

----------

To start, install this library via Composer (soon!):

    composer.phar require cjhbtn/periscopr-api

Create a new file, including the Composer autoloader file:

    <?php
	    
	    require_once __DIR__ . '/vendor/autoload.php';
	    
	    /* Create a new instance of the API Client */
	    $periscopeClient = new Cjhbtn\Periscopr\Client();
	    
	    /* Prepare a LoginTwitter request with our OAuth credentials */
	    $loginRequest = new Cjhbtn\Periscopr\Requests\LoginTwitter(
		    'OAUTH_TOKEN GOES HERE',
		    'OAUTH_TOKEN_SECRET GOES HERE',
		    'TWITTER_USERNAME GOES HERE'
	    );
	    
	    /* Execute the request against the API */
	    $loginResponse = $periscopeClient->execute($loginRequest);
	    
	    /* Check to see if the request was successful */
	    if ($loginResponse->getStatusCode() !== 200) {
		    die("Unable to login to Periscope API");
		}
		
		/* Set our authentication cookie for all future requests */
		$periscopeClient->setCookie($loginResponse->cookie);
		
		/* Prepare a new GetLiveBroadcasts request */
		$liveBroadcastsRequest = new Cjhbtn\Periscopr\Requests\GetLiveBroadcasts();
		
		/* Execute the request against the API */
		$liveBroadcastsResponse = $periscopeClient->execute($liveBroadcastsRequest);
		
		/* Check to see if the request was successful */
		if ($liveBroadcastsResponse->getStatusCode() !== 200) {
			die("Unable to fetch Live Broadcasts from Periscope API");
		}
		
		/* Iterate through all Live broadcasts and print some information */
		foreach ($liveBroadcastsResponse->results as $broadcast) {
			echo "Broadcast ID: " . $broadcast->id . "\n";
			echo "Username: " . $broadcast->user->username . "\n";
			echo "Description: " . $broadcast->status . "\n";
			echo "\n";
		}
		
	?>



----------

## Documentation ##

TODO

----------

## Issues ##

TODO

----------

## References ##

TODO