<?php

class SetSettingsTest extends BaseTest {

    /**
     * Test setting the user settings returns success
     */
    public function testGetSettingsReturnsSuccess() {
        $settingsRequest = new \Cjhbtn\Periscopr\Requests\SetSettings(false, false);
        $response = $this->client->execute($settingsRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Responses\\SetSettings', $response);
        $this->assertEquals(true, $response->success);
    }
}