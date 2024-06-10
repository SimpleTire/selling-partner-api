<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class ShipmentRequestDetails extends Dto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'itemList' => 'ItemList',
        'shipFromAddress' => 'ShipFromAddress',
        'packageDimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'shippingServiceOptions' => 'ShippingServiceOptions',
        'sellerOrderId' => 'SellerOrderId',
        'mustArriveByDate' => 'MustArriveByDate',
        'shipDate' => 'ShipDate',
        'labelCustomization' => 'LabelCustomization',
    ];

    protected static array $complexArrayTypes = ['itemList' => [Item::class]];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  Item[]  $itemList  The list of items to be included in a shipment.
     * @param  Address  $shipFromAddress  The postal address information.
     * @param  PackageDimensions  $packageDimensions  The dimensions of a package contained in a shipment.
     * @param  Weight  $weight  The weight.
     * @param  ShippingServiceOptions  $shippingServiceOptions  Extra services provided by a carrier.
     * @param  ?string  $sellerOrderId  A seller-defined order identifier.
     * @param  ?\DateTimeInterface  $mustArriveByDate
     * @param  ?\DateTimeInterface  $shipDate
     * @param  ?LabelCustomization  $labelCustomization  Custom text for shipping labels.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly array $itemList,
        public readonly Address $shipFromAddress,
        public readonly PackageDimensions $packageDimensions,
        public readonly Weight $weight,
        public readonly ShippingServiceOptions $shippingServiceOptions,
        public readonly ?string $sellerOrderId = null,
        public readonly ?\DateTimeInterface $mustArriveByDate = null,
        public readonly ?\DateTimeInterface $shipDate = null,
        public readonly ?LabelCustomization $labelCustomization = null,
    ) {
    }
}
