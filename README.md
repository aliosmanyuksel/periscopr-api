cjhbtn/periscopr-api
=================

----------

**Author**: Chris Hogben <me@cjh.im>

**License**: [Apache 2.0](http://www.apache.org/licenses/LICENSE-2.0)

**Website**: https://bitbucket.org/cjhbtn/periscopr-api

**Git Repository**: https://bitbucket.org/cjhbtn/periscopr-api.git

**Documenation**: https://bitbucket.org/cjhbtn/periscopr-api/wiki/Home

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

!! **NOTE** !!

**IN ORDER TO UTILISE THIS LIBRARY, YOU WILL REQUIRE AN OAUTH TOKEN AND OAUTH TOKEN SECRET FOR THE PERISCOPE APPLICATION.**

**PLEASE SEE https://tokenr.periscopr.uk FOR INFORMATION ON GENERATING TOKENS**

**YOU CAN ALSO E-MAIL chris-at-periscopr-dot-uk WITH DETAILS OF YOUR PROJECT TO GET ACCESS TO TOKENR**

!! **NOTE** !!

----------

To start, install this library via Composer:

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
    
        /* Prepare a new GetFeedLive request */
        $liveBroadcastsRequest = new Cjhbtn\Periscopr\Requests\GetFeedLive();
    
        /* Execute the request against the API */
        $liveBroadcastsResponse = $periscopeClient->execute($liveBroadcastsRequest);
    
        /* Check to see if the request was successful */
        if ($liveBroadcastsResponse->getStatusCode() !== 200) {
            die("Unable to fetch Live Broadcasts from Periscope API");
        }
    
        /* Output the contents of the results */
        echo json_encode($liveBroadcastsResponse->results[0]);
		
	?>

Which should output data like so:

    {"id":"14966200","created_at":"2015-05-28T06:58:49.321065911-07:00","updated_at":"2015-05-28T06:59:19.438217730-07:00","user_id":"3210175","user_display_name":"Melih_1903_M28","profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/603844955879137280\/PqDWz5qk_reasonably_small.jpg","state":"RUNNING","is_locked":false,"friend_chat":false,"start":"2015-05-28T06:59:19.088067277-07:00","ping":"2015-05-28T06:59:19.438217730-07:00","has_location":false,"city":"","country":"","country_state":"","iso_code":"DE","ip_lat":0,"ip_lng":0,"width":320,"height":568,"image_url":"https:\/\/s3-us-west-2.amazonaws.com\/periscope-thumbnail-live\/nYt0DICNlBTWbbO9i4JPH-4vZYECfiUg4Ie9k7RlbC8zfi_78pPRDfvWlT1Mhbqrg-HrUhmT9wESvA6cZYOIYw==.jpg?AWSAccessKeyId=AKIAI34LQJZZSVNMNOFQ&Expires=1748440729&Signature=mSruul3wJPUghUfSUqExfmPBb6s%3D","image_url_small":"https:\/\/s3-us-west-2.amazonaws.com\/periscope-thumbnail-live-thumb\/nYt0DICNlBTWbbO9i4JPH-4vZYECfiUg4Ie9k7RlbC8zfi_78pPRDfvWlT1Mhbqrg-HrUhmT9wESvA6cZYOIYw==_thumb_128.jpg?AWSAccessKeyId=AKIAI34LQJZZSVNMNOFQ&Expires=1748440729&Signature=FkehRaNxi9r%2BbosgU7kNfDS5GRM%3D","status":"Yaz\u0131n bi\u015feyler....I\u00e7inizden de ge\u00e7iyorsa :D","available_for_replay":false,"featured":false,"sort_score":1432821559,"is_trusted":false,"class_name":"Broadcast"}

----------

## Issues ##

Please raise any issues via [Bitbucket](https://bitbucket.org/cjhbtn/periscopr-api/issues)

Include as much information as you can about what the issue is, how to reproduce it, and any additional modifications or 3rd-party libraries that you might be using.

**PLEASE DO NOT ASK FOR HELP WITH OBTAINING OAUTH TOKENS ON THE ISSUES PAGE**

----------

## References ##

 - **[gabrielg/periscope_api](https://github.com/gabrielg/periscope_api)** - One of the first people to start reverse engineering the Periscope API
 - **[Twitter OAuth Documentation](https://dev.twitter.com/oauth/overview/introduction)** - Details on Twitter's OAuth implementation