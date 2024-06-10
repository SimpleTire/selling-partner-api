<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AddAppointmentRequest extends Dto
{
    /**
     * @param  AppointmentTimeInput  $appointmentTime  The input appointment time details.
     */
    public function __construct(
        public readonly AppointmentTimeInput $appointmentTime,
    ) {
    }
}
