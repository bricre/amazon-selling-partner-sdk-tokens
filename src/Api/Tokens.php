<?php

namespace Amz\Tokens\Api;

use Amz\Tokens\Model\CreateRestrictedDataTokenRequest as CreateRestrictedDataTokenRequest;
use Amz\Tokens\Model\CreateRestrictedDataTokenResponse as CreateRestrictedDataTokenResponse;
use Amz\Tokens\Model\ErrorList as ErrorList;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Tokens extends AbstractAPI
{
    /**
     * Returns a Restricted Data Token (RDT) for one or more restricted resources that
     * you specify. A restricted resource is the HTTP method and path from a restricted
     * operation that returns Personally Identifiable Information (PII), plus a
     * dataElements value that indicates the type of PII requested. See the Tokens API
     * Use Case Guide for a list of restricted operations. Use the RDT returned here as
     * the access token in subsequent calls to the corresponding restricted operations.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param CreateRestrictedDataTokenRequest $Model Returns a Restricted Data Token
     *                                                (RDT) for one or more restricted resources that you specify. A restricted
     *                                                resource is the HTTP method and path from a restricted operation that returns
     *                                                Personally Identifiable Information (PII), plus a dataElements value that
     *                                                indicates the type of PII requested. See the Tokens API Use Case Guide for a
     *                                                list of restricted operations. Use the RDT returned here as the access token in
     *                                                subsequent calls to the corresponding restricted operations.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 1 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return CreateRestrictedDataTokenResponse|ErrorList
     */
    public function createRestrictedDataToken(CreateRestrictedDataTokenRequest $Model)
    {
        return $this->client->request('createRestrictedDataToken', 'POST', 'tokens/2021-03-01/restrictedDataToken',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
