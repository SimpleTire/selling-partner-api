<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class GetRatesRequest extends Dto
{
    protected static array $complexArrayTypes = ['containerSpecifications' => [ContainerSpecification::class]];

    /**
     * @param  Address  $shipTo  The address.
     * @param  Address  $shipFrom  The address.
     * @param  string[]  $serviceTypes  A list of service types that can be used to send the shipment.
     * @param  ContainerSpecification[]  $containerSpecifications  A list of container specifications.
     * @param  ?\DateTimeInterface  $shipDate  The start date and time. This defaults to the current date and time.
     */
    public function __construct(
        public readonly Address $shipTo,
        public readonly Address $shipFrom,
        public readonly array $serviceTypes,
        public readonly array $containerSpecifications,
        public readonly ?\DateTimeInterface $shipDate = null,
    ) {
    }
}
