<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;
use SellingPartnerApi\Seller\ShippingV2\Responses\GetAccessPointsResponse;

/**
 * getAccessPoints
 */
class GetAccessPoints extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected array $accessPointTypes,
        protected string $countryCode,
        protected string $postalCode,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['accessPointTypes' => $this->accessPointTypes, 'countryCode' => $this->countryCode, 'postalCode' => $this->postalCode]);
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/accessPoints';
    }

    public function createDtoFromResponse(Response $response): GetAccessPointsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetAccessPointsResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
