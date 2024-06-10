<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ImagingServicesFeeEvent extends Dto
{
    protected static array $attributeMap = [
        'imagingRequestBillingItemId' => 'ImagingRequestBillingItemID',
        'asin' => 'ASIN',
        'postedDate' => 'PostedDate',
        'feeList' => 'FeeList',
    ];

    protected static array $complexArrayTypes = ['feeList' => [FeeComponent::class]];

    /**
     * @param  ?string  $imagingRequestBillingItemId  The identifier for the imaging services request.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item for which the imaging service was requested.
     * @param  ?\DateTimeInterface  $postedDate
     * @param  FeeComponent[]|null  $feeList  A list of fee component information.
     */
    public function __construct(
        public readonly ?string $imagingRequestBillingItemId = null,
        public readonly ?string $asin = null,
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?array $feeList = null,
    ) {
    }
}
