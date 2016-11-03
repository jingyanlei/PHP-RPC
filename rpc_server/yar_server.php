<?php
/**
 * Class API 类注释
 */
class API {

    /**
     * API constructor.
     * @param $params
     * @param string $option
     */
    public function api($parameter='', $option='foo') {
        return $parameter;
    }

    protected function client_can_not_see() {

    }

}

$service = new Yar_Server(new API());
$service->handle();