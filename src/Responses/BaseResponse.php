<?php namespace Cjhbtn\Periscopr\Responses;

use Cjhbtn\Periscopr\Models\BaseModel;

abstract class BaseResponse implements ApiResponse {

    /** @var integer $statusCode */
    protected $statusCode;

    /**
     * Set the response HTTP status code
     *
     * @param integer $code
     */
    public function setStatusCode($code) {
        $this->statusCode = $code;
    }

    /**
     * Return the response HTTP status code
     * @return integer
     */
    public function getStatusCode() {
        return $this->statusCode;
    }

    /**
     * Process the JSON array returned in a response
     * and create the required models and properties
     *
     * @param array $response
     */
    public function processResponse(array $response) {
        foreach ($response as $key => $value) {
            if (is_array($value) && !empty($value['class_name'])) {
                $value = $this->getModel($value['class_name'], $value);
            }
            if (is_numeric($key)) {
                $this->results[$key] = $value;
            }
            else {
                $this->$key = $value;
            }
        }
    }

    /**
     * Create a model from JSON array data
     *
     * @param string $name
     * @param array $values
     * @return BaseModel
     */
    protected function getModel($name, $values) {
        $class_name = "\\Cjhbtn\\Periscopr\\Models\\" . $name;
        return $class_name::create($values);
    }
}