<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use SellingPartnerApi\Dto;

final class CreditNoteDetails extends Dto
{
    /**
     * @param  ?string  $referenceInvoiceNumber  Original Invoice Number when sending a credit note relating to an existing invoice. One Invoice only to be processed per Credit Note. This is mandatory for AP Credit Notes.
     * @param  ?string  $debitNoteNumber  Debit Note Number as generated by Amazon. Recommended for Returns and COOP Credit Notes.
     * @param  ?string  $returnsReferenceNumber  Identifies the Returns Notice Number. Mandatory for all Returns Credit Notes.
     * @param  ?\DateTimeInterface  $goodsReturnDate  Defines a date and time according to ISO8601.
     * @param  ?string  $rmaId  Identifies the Returned Merchandise Authorization ID, if generated.
     * @param  ?string  $coopReferenceNumber  Identifies the COOP reference used for COOP agreement. Failure to provide the COOP reference number or the Debit Note number may lead to a rejection of the Credit Note.
     * @param  ?string  $consignorsReferenceNumber  Identifies the consignor reference number (VRET number), if generated by Amazon.
     */
    public function __construct(
        public readonly ?string $referenceInvoiceNumber = null,
        public readonly ?string $debitNoteNumber = null,
        public readonly ?string $returnsReferenceNumber = null,
        public readonly ?\DateTimeInterface $goodsReturnDate = null,
        public readonly ?string $rmaId = null,
        public readonly ?string $coopReferenceNumber = null,
        public readonly ?string $consignorsReferenceNumber = null,
    ) {
    }
}
