<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\DocumentDownload;

final class GetDeliveryChallanDocumentResponse extends Response
{
    /**
     * @param  DocumentDownload  $documentDownload  Resource to download the requested document.
     */
    public function __construct(
        public readonly DocumentDownload $documentDownload,
    ) {
    }
}
