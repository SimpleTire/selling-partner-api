<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class TimeSlot extends Dto
{
    /**
     * @param  string  $slotId  A string of up to 255 characters.
     * @param  ?\DateTimeInterface  $startTime  A datetime value in ISO 8601 format.
     * @param  ?\DateTimeInterface  $endTime  A datetime value in ISO 8601 format.
     * @param  ?string  $handoverMethod  Identifies the method by which a seller will hand a package over to Amazon Logistics.
     */
    public function __construct(
        public readonly string $slotId,
        public readonly ?\DateTimeInterface $startTime = null,
        public readonly ?\DateTimeInterface $endTime = null,
        public readonly ?string $handoverMethod = null,
    ) {
    }
}
