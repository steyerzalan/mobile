<?php
class SimpleRest
{
    private $httpVersion = "HTTP/1.1";

    public function setHttpHeaders($contentType, $statusCode)
    {
        $statusMessage = $this -> getHttpStatusMessage($statusCode);

        header($this->httpVersion. " " . $statusCode . " " . $statusMessage);
        header("Content-Type:". $contentType);
    }

    public function getHttpStatusMessage($statusCode)
    {
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            404 => 'Not Found',
            500 => 'Internal Server Error'
        );
        return (isset($httpStatus[$statusCode])) ? 
        $httpStatus[$statusCode] : $httpStatus[500];
    }
}

?>