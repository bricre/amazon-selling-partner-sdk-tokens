<?php

namespace Amz\Tokens\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of error responses returned when a request is unsuccessful.
 */
class ErrorList extends AbstractModel
{
    /**
     * @var \Amz\Tokens\Model\Error[]
     */
    public $errors = null;
}
