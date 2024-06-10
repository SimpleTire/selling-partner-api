<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use SellingPartnerApi\Response;

final class ReportSchedule extends Response
{
    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string  $period  An <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> period value that indicates how often a report should be created.
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  ?string[]  $reportOptions  Additional information passed to reports. This varies by report type.
     * @param  ?\DateTimeInterface  $nextReportCreationTime  The date and time when the schedule will create its next report, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format.
     */
    public function __construct(
        public readonly string $reportScheduleId,
        public readonly string $reportType,
        public readonly string $period,
        public readonly ?array $marketplaceIds = null,
        public readonly ?array $reportOptions = null,
        public readonly ?\DateTimeInterface $nextReportCreationTime = null,
    ) {
    }
}
