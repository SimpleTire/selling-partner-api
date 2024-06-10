<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class StandardTextModule extends Dto
{
    /**
     * @param  ParagraphComponent  $body  A list of rich text content, usually presented in a text box.
     * @param  ?TextComponent  $headline  Rich text content.
     */
    public function __construct(
        public readonly ParagraphComponent $body,
        public readonly ?TextComponent $headline = null,
    ) {
    }
}
