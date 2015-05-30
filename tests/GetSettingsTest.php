<?php

class GetSettingsTest extends BaseTest {

    /**
     * Test getting the user settings returns success
     */
    public function testGetSettingsReturnsSuccess() {
        $settingsRequest = new \Cjhbtn\Periscopr\Requests\GetSettings();
        $response = $this->client->execute($settingsRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\GetSettings', $response);
    }
}