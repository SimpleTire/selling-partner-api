<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentPreviewShipment extends BaseDto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviewItems' => [FulfillmentPreviewItem::class]];

    /**
     * @param  string[]  $shippingNotes Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     * @param  FulfillmentPreviewItem[]  $fulfillmentPreviewItems An array of fulfillment preview item information.
     */
    public function __construct(
        public readonly ?string $earliestShipDate = null,
        public readonly ?string $latestShipDate = null,
        public readonly ?string $earliestArrivalDate = null,
        public readonly ?string $latestArrivalDate = null,
        public readonly ?array $shippingNotes = null,
        public readonly ?array $fulfillmentPreviewItems = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
