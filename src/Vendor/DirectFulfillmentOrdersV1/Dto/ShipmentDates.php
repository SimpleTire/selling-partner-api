<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class ShipmentDates extends Dto
{
    /**
     * @param  \DateTimeInterface  $requiredShipDate  Time by which the vendor is required to ship the order.
     * @param  ?\DateTimeInterface  $promisedDeliveryDate  Delivery date promised to the Amazon customer.
     */
    public function __construct(
        public readonly \DateTimeInterface $requiredShipDate,
        public readonly ?\DateTimeInterface $promisedDeliveryDate = null,
    ) {
    }
}
