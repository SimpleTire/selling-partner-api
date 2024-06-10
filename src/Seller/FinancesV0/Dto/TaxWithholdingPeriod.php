<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class TaxWithholdingPeriod extends Dto
{
    protected static array $attributeMap = ['startDate' => 'StartDate', 'endDate' => 'EndDate'];

    /**
     * @param  ?\DateTimeInterface  $startDate
     * @param  ?\DateTimeInterface  $endDate
     */
    public function __construct(
        public readonly ?\DateTimeInterface $startDate = null,
        public readonly ?\DateTimeInterface $endDate = null,
    ) {
    }
}
