<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ContainerItem extends Dto
{
    /**
     * @param  string  $itemReference  The reference number for the item. Please provide the itemSequenceNumber from the 'items' segment to refer to that item's details here.
     * @param  ItemQuantity  $shippedQuantity  Details of item quantity.
     * @param  ?ItemDetails  $itemDetails  Item details for be provided for every item in shipment at either the item or carton or pallet level, whichever is appropriate.
     */
    public function __construct(
        public readonly string $itemReference,
        public readonly ItemQuantity $shippedQuantity,
        public readonly ?ItemDetails $itemDetails = null,
    ) {
    }
}
