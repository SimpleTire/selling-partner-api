<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class RangeSlot extends Dto
{
    /**
     * @param  ?\DateTimeInterface  $startDateTime  Start date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?\DateTimeInterface  $endDateTime  End date time of slot in ISO 8601 format with precision of seconds.
     * @param  ?int  $capacity  Capacity of the slot.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $startDateTime = null,
        public readonly ?\DateTimeInterface $endDateTime = null,
        public readonly ?int $capacity = null,
    ) {
    }
}
