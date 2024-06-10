<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class TdsReimbursementEvent extends Dto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'tdsOrderId' => 'TDSOrderId',
        'reimbursedAmount' => 'ReimbursedAmount',
    ];

    /**
     * @param  ?\DateTimeInterface  $postedDate
     * @param  ?string  $tdsOrderId  The Tax-Deducted-at-Source (TDS) identifier.
     * @param  ?Currency  $reimbursedAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?string $tdsOrderId = null,
        public readonly ?Currency $reimbursedAmount = null,
    ) {
    }
}
