<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class PartneredSmallParcelDataOutput extends Dto
{
    protected static array $attributeMap = ['packageList' => 'PackageList', 'partneredEstimate' => 'PartneredEstimate'];

    protected static array $complexArrayTypes = ['packageList' => [PartneredSmallParcelPackageOutput::class]];

    /**
     * @param  PartneredSmallParcelPackageOutput[]  $packageList  A list of packages, including shipping information from the Amazon-partnered carrier.
     * @param  ?PartneredEstimate  $partneredEstimate  The estimated shipping cost for a shipment using an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly array $packageList,
        public readonly ?PartneredEstimate $partneredEstimate = null,
    ) {
    }
}
