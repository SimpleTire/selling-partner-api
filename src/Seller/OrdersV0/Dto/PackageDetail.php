<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class PackageDetail extends Dto
{
    protected static array $complexArrayTypes = ['orderItems' => [ConfirmShipmentOrderItem::class]];

    /**
     * @param  string  $packageReferenceId  A seller-supplied identifier that uniquely identifies a package within the scope of an order. Only positive numeric values are supported.
     * @param  string  $carrierCode  Identifies the carrier that will deliver the package. This field is required for all marketplaces. For the acceptable `CarrierCode` value, refer to the list of <a href='https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/amzn-base._TTH_.xsd'>CarrierCode</a>.
     * @param  string  $trackingNumber  The tracking number used to obtain tracking and delivery information.
     * @param  \DateTimeInterface  $shipDate  The shipping date for the package. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date/time format.
     * @param  ConfirmShipmentOrderItem[]  $orderItems  A list of order items.
     * @param  ?string  $carrierName  Carrier Name that will deliver the package. Required when carrierCode is "Others"
     * @param  ?string  $shippingMethod  Ship method to be used for shipping the order.
     * @param  ?string  $shipFromSupplySourceId  The unique identifier of the supply source.
     */
    public function __construct(
        public readonly string $packageReferenceId,
        public readonly string $carrierCode,
        public readonly string $trackingNumber,
        public readonly \DateTimeInterface $shipDate,
        public readonly array $orderItems,
        public readonly ?string $carrierName = null,
        public readonly ?string $shippingMethod = null,
        public readonly ?string $shipFromSupplySourceId = null,
    ) {
    }
}
