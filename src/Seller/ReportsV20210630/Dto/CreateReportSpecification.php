<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Dto;

use SellingPartnerApi\Dto;

final class CreateReportSpecification extends Dto
{
    /**
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  ?string[]  $reportOptions  Additional information passed to reports. This varies by report type.
     * @param  ?\DateTimeInterface  $dataStartTime  The start of a date and time range, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     * @param  ?\DateTimeInterface  $dataEndTime  The end of a date and time range, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     */
    public function __construct(
        public readonly string $reportType,
        public readonly array $marketplaceIds,
        public readonly ?array $reportOptions = null,
        public readonly ?\DateTimeInterface $dataStartTime = null,
        public readonly ?\DateTimeInterface $dataEndTime = null,
    ) {
    }
}
