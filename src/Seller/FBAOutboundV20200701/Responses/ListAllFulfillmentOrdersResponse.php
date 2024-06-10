<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\Error;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\ListAllFulfillmentOrdersResult;

final class ListAllFulfillmentOrdersResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?ListAllFulfillmentOrdersResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?ListAllFulfillmentOrdersResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
