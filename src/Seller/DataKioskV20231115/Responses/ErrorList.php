<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\Error;

final class ErrorList extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors  Error response returned when the request is unsuccessful.
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
