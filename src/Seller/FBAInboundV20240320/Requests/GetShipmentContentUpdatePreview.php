<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ContentUpdatePreview;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;

/**
 * getShipmentContentUpdatePreview
 */
class GetShipmentContentUpdatePreview extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  string  $contentUpdatePreviewId  Identifier of a content update preview.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected string $shipmentId,
        protected string $contentUpdatePreviewId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/contentUpdatePreviews/{$this->contentUpdatePreviewId}";
    }

    public function createDtoFromResponse(Response $response): ContentUpdatePreview|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ContentUpdatePreview::class,
            400, 404, 500, 403, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
