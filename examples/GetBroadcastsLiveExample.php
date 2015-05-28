<?php

    /*
     * This example mirrors that found in the README.md file.
     *
     * It fetches a list of all the current live Periscope broadcasts
     * that are publically available and returns information about each
     * of them.
     *
     * On average, there are around 100-200 Periscope streams active
     * at any one time (May 2015).
     * 
     */

    require_once __DIR__ . '/../vendor/autoload.php';

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

    /* Output the contents of the results */
    var_dump($liveBroadcastsResponse->broadcasts);

?>