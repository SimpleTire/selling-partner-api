<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListShipmentContentUpdatePreviewsResponse extends Response
{
    protected static array $complexArrayTypes = ['contentUpdatePreviews' => [ContentUpdatePreview::class]];

    /**
     * @param  ContentUpdatePreview[]  $contentUpdatePreviews  A list of content update previews in a shipment.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $contentUpdatePreviews,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
