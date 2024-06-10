<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class ShippingConstraints extends Dto
{
    protected static array $attributeMap = ['palletDelivery' => 'PalletDelivery'];

    /**
     * @param  ?string  $palletDelivery  Details the importance of the constraint present on the item
     */
    public function __construct(
        public readonly ?string $palletDelivery = null,
    ) {
    }
}
