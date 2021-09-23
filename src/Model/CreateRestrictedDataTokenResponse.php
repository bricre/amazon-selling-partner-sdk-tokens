<?php

namespace Amz\Tokens\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createRestrictedDataToken operation.
 */
class CreateRestrictedDataTokenResponse extends AbstractModel
{
    /**
     * A Restricted Data Token (RDT). This is a short-lived access token that
     * authorizes calls to restricted operations. Pass this value with the
     * x-amz-access-token header when making subsequent calls to these restricted
     * resources.
     *
     * @var string
     */
    public $restrictedDataToken = null;

    /**
     * The lifetime of the Restricted Data Token, in seconds.
     *
     * @var int
     */
    public $expiresIn = null;
}
