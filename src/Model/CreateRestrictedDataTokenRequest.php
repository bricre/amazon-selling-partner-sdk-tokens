<?php

namespace Amz\Tokens\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createRestrictedDataToken operation.
 */
class CreateRestrictedDataTokenRequest extends AbstractModel
{
    /**
     * The application ID for the target application to which access is being
     * delegated.
     *
     * @var string
     */
    public $targetApplication = null;

    /**
     * A list of restricted resources.
     * Maximum: 50.
     *
     * @var \Amz\Tokens\Model\RestrictedResource[]
     */
    public $restrictedResources = null;
}
