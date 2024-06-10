<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\Pagination;

final class Query extends Response
{
    /**
     * @param  string  $queryId  The query identifier. This identifier is unique only in combination with a selling partner account ID.
     * @param  string  $query  The submitted query.
     * @param  \DateTimeInterface  $createdTime  The date and time when the query was created, in ISO 8601 date time format.
     * @param  string  $processingStatus  The processing status of the query.
     * @param  ?\DateTimeInterface  $processingStartTime  The date and time when the query processing started, in ISO 8601 date time format.
     * @param  ?\DateTimeInterface  $processingEndTime  The date and time when the query processing completed, in ISO 8601 date time format.
     * @param  ?string  $dataDocumentId  The data document identifier. This identifier is only present when there is data available as a result of the query. This identifier is unique only in combination with a selling partner account ID. Pass this identifier into the `getDocument` operation to get the information required to retrieve the data document's contents.
     * @param  ?string  $errorDocumentId  The error document identifier. This identifier is only present when an error occurs during query processing. This identifier is unique only in combination with a selling partner account ID. Pass this identifier into the `getDocument` operation to get the information required to retrieve the error document's contents.
     * @param  ?Pagination  $pagination  When a query produces results that are not included in the data document, pagination occurs. This means the results are divided into pages. To retrieve the next page, you must pass a `CreateQuerySpecification` object with `paginationToken` set to this object's `nextToken` and with `query` set to this object's `query` in the subsequent `createQuery` request. When there are no more pages to fetch, the `nextToken` field will be absent.
     */
    public function __construct(
        public readonly string $queryId,
        public readonly string $query,
        public readonly \DateTimeInterface $createdTime,
        public readonly string $processingStatus,
        public readonly ?\DateTimeInterface $processingStartTime = null,
        public readonly ?\DateTimeInterface $processingEndTime = null,
        public readonly ?string $dataDocumentId = null,
        public readonly ?string $errorDocumentId = null,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
