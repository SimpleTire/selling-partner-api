<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use SellingPartnerApi\Response;

final class Feed extends Response
{
    /**
     * @param  string  $feedId  The identifier for the feed. This identifier is unique only in combination with a seller ID.
     * @param  string  $feedType  The feed type.
     * @param  \DateTimeInterface  $createdTime  The date and time when the feed was created, in ISO 8601 date time format.
     * @param  string  $processingStatus  The processing status of the feed.
     * @param  ?string[]  $marketplaceIds  A list of identifiers for the marketplaces that the feed is applied to.
     * @param  ?\DateTimeInterface  $processingStartTime  The date and time when feed processing started, in ISO 8601 date time format.
     * @param  ?\DateTimeInterface  $processingEndTime  The date and time when feed processing completed, in ISO 8601 date time format.
     * @param  ?string  $resultFeedDocumentId  The identifier for the feed document. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $feedId,
        public readonly string $feedType,
        public readonly \DateTimeInterface $createdTime,
        public readonly string $processingStatus,
        public readonly ?array $marketplaceIds = null,
        public readonly ?\DateTimeInterface $processingStartTime = null,
        public readonly ?\DateTimeInterface $processingEndTime = null,
        public readonly ?string $resultFeedDocumentId = null,
    ) {
    }
}
