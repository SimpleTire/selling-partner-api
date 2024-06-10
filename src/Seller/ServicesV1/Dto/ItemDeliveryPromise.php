<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ItemDeliveryPromise extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $startTime  The date and time of the start of the promised delivery window in ISO 8601 format.
     * @param  ?\DateTimeInterface  $endTime  The date and time of the end of the promised delivery window in ISO 8601 format.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $startTime = null,
        public readonly ?\DateTimeInterface $endTime = null,
    ) {
    }
}
