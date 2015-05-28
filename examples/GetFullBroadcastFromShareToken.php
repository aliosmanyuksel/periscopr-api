<?php

    /*
     * If you use Twitter, you may have noticed people posting links
     * to view their Periscope streams on their timeline.
     *
     * These links come in the following format:
     *
     *    https://www.periscope.tv/w/V0hZ0zUwMDMxMnwxNDk3NzI0N-yCuQmGzJQuIaipOlX5Jq3RBVP1ZTC9hgFrKddnl54A
     *
     * Everything after the /w/ in the above URL is the "Share Token" and
     * it is this we can use to obtain information about a broadcast from
     * an external source.
     *
     * In this example, we'll set $share_token to "V0hZ0zUwMDMxMnwxNDk3NzI0N-yCuQmGzJQuIaipOlX5Jq3RBVP1ZTC9hgFrKddnl54A",
     * as per the URL above. You can change this share token to retrieve
     * information about any broadcast you've seen posted on Twitter.
     *
     */

    $share_token = "V0hZ0zUwMDMxMnwxNDk3NzI0N-yCuQmGzJQuIaipOlX5Jq3RBVP1ZTC9hgFrKddnl54A";


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

    /* Prepare a GetBroadcastIDFromShareToken request - this gets the Broadcast ID associated with our share token */
    $broadcastIdRequest = new \Cjhbtn\Periscopr\Requests\GetBroadcastIDFromShareToken($share_token);

    /* Execute the request against the API */
    $broadcastIdResponse = $periscopeClient->execute($broadcastIdRequest);

    /* Check to see if the request was successful */
    if ($broadcastIdResponse->getStatusCode() !== 200) {
        die("Unable to retrieve information about the broadcast from the given share token");
    }

    /* Save our broadcast id for future use */
    $broadcast_id = $broadcastIdResponse->broadcast_id;

    /* Prepare a GetBroadcasts request - this fetches the detail about the broadcast itself */
    $broadcastDetailsRequest = new \Cjhbtn\Periscopr\Requests\GetBroadcasts($broadcast_id);

    /* Execute the request against the API */
    $broadcastDetailsResponse = $periscopeClient->execute($broadcastDetailsRequest);

    /* Check to see if the request was successful */
    if ($broadcastDetailsResponse->getStatusCode() !== 200 && !empty($broadcastDetailsResponse->results)) {
        die("Unable to retrieve information about the broadcast using the retrieved broadcast id");
    }

    /* Save the broadcast model to a local variable for readability */
    $broadcast = $broadcastDetailsResponse->results[0];

    /* Output some example data about our broadcast! */
    echo "Broadcast ID: " . $broadcast->id . "\n";
    echo "Created at: " . $broadcast->created_at . "\n";
    echo "Broadcaster: " . $broadcast->user_display_name . " (ID: " . $broadcast->user_id . ")\n";
    echo "Running State: " . $broadcast->state . "\n";
    echo "Has location info? " . ($broadcast->has_location ? 'Yes (' . $broadcast->city . ", " . $broadcast->country_state . ", " . $broadcast->country . ")" : 'No') . "\n";
    echo "Room Topic: " . $broadcast->status . "\n";
    echo "Current Viewers: " . $broadcast->n_watching . "\n";

?>