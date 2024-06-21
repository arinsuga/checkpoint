<?php

namespace Arins\Services\Response;

abstract class ResponseAbstract
{
    protected $response;

    /**
     * Format response result.
     *
     * @param  boolean     $status
     * @param  int         $code
     * @param  string      $string
     * @param  string|null $description
     * @param  mixed|null  $data
     */
    protected function formatResult($status, $code, $message,
                                    $description = null, $data = null, $formAction = null)
    {
        $this->response = [
            "status_ok" => $status,
            "status_code" => $code,
            "status_message" => $message,
        ];

        //description
        $this->response["status_description"] = $description;
        // if ($description != null) {
        //     $this->response["status_description"] = $description;
        // }

        //data
        // if ($data != null) {
        //     $this->response["data"] = $data;
        // }
        $this->response["data"] = $data;

        //form action
        $this->response["formAction"] = $formAction;
        // if ($formAction != null) {
        //     $this->response["formAction"] = $formAction;
        // }
    }

    /**
     * Format response to array.
     *
     * @param  boolean     $status
     * @param  int         $code
     * @param  string      $string
     * @param  string|null $description
     * @param  mixed|null  $data
     * @return array
     */
    protected function toArray($status, $code, $message,
                               $description = null, $data = null, $formAction = null)
    {
        //Default Result toArray
        $this->formatResult($status, $code, $message, $description, $data, $formAction);

        return $this->response;
    }

    /**
     * Format response to json.
     *
     * @param  boolean     $status
     * @param  int         $code
     * @param  string      $string
     * @param  string|null $description
     * @param  mixed|null  $data
     * @return json
     */
    protected function toJson($status, $code, $message,
                              $description = null, $data = null, $formAction = null)
    {
        //Default Result toArray
        $this->formatResult($status, $code, $message, $description, $data, $formAction);

        return json_encode($this->response);
    }

    /**
     * Format response to json.
     *
     * @param  boolean     $status
     * @param  int         $code
     * @param  string      $string
     * @param  string|null $description
     * @param  mixed|null  $data
     * @return object
     */
    protected function toObject($status, $code, $message,
                                $description = null, $data = null, $formAction = null)
    {
        //Default Result toArray
        $this->formatResult($status, $code, $message, $description, $data, $formAction);

        return json_decode(json_encode($this->response), FALSE);
    }    

}
