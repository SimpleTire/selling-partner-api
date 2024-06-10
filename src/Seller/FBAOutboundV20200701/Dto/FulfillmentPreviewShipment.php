<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class FulfillmentPreviewShipment extends Dto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviewItems' => [FulfillmentPreviewItem::class]];

    /**
     * @param  FulfillmentPreviewItem[]  $fulfillmentPreviewItems  An array of fulfillment preview item information.
     * @param  ?\DateTimeInterface  $earliestShipDate
     * @param  ?\DateTimeInterface  $latestShipDate
     * @param  ?\DateTimeInterface  $earliestArrivalDate
     * @param  ?\DateTimeInterface  $latestArrivalDate
     * @param  ?string[]  $shippingNotes  Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     */
    public function __construct(
        public readonly array $fulfillmentPreviewItems,
        public readonly ?\DateTimeInterface $earliestShipDate = null,
        public readonly ?\DateTimeInterface $latestShipDate = null,
        public readonly ?\DateTimeInterface $earliestArrivalDate = null,
        public readonly ?\DateTimeInterface $latestArrivalDate = null,
        public readonly ?array $shippingNotes = null,
    ) {
    }
}
