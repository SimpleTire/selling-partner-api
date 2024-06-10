<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class GetPreorderInfoResult extends Dto
{
    protected static array $attributeMap = [
        'shipmentContainsPreorderableItems' => 'ShipmentContainsPreorderableItems',
        'shipmentConfirmedForPreorder' => 'ShipmentConfirmedForPreorder',
        'needByDate' => 'NeedByDate',
        'confirmedFulfillableDate' => 'ConfirmedFulfillableDate',
    ];

    /**
     * @param  ?bool  $shipmentContainsPreorderableItems  Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     * @param  ?bool  $shipmentConfirmedForPreorder  Indicates whether this shipment has been confirmed for pre-order.
     * @param  ?\DateTimeInterface  $needByDate  Type containing date in string format
     * @param  ?\DateTimeInterface  $confirmedFulfillableDate  Type containing date in string format
     */
    public function __construct(
        public readonly ?bool $shipmentContainsPreorderableItems = null,
        public readonly ?bool $shipmentConfirmedForPreorder = null,
        public readonly ?\DateTimeInterface $needByDate = null,
        public readonly ?\DateTimeInterface $confirmedFulfillableDate = null,
    ) {
    }
}
