<?php

namespace georgique\yii2\jsonrpc\exceptions;

/**
 * Class InvalidParamsException
 * @package georgique\yii2\jsonrpc\exceptions
 */
class InvalidParamsException extends JsonRpcException
{
    const CODE = -32602;

    public function __construct($message = "", \Exception $previous = null)
    {
        parent::__construct($message, static::CODE, $previous);
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Invalid params';
    }
}
