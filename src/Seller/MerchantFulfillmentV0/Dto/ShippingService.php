<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class ShippingService extends Dto
{
    protected static array $attributeMap = [
        'shippingServiceName' => 'ShippingServiceName',
        'carrierName' => 'CarrierName',
        'shippingServiceId' => 'ShippingServiceId',
        'shippingServiceOfferId' => 'ShippingServiceOfferId',
        'shipDate' => 'ShipDate',
        'rate' => 'Rate',
        'shippingServiceOptions' => 'ShippingServiceOptions',
        'requiresAdditionalSellerInputs' => 'RequiresAdditionalSellerInputs',
        'earliestEstimatedDeliveryDate' => 'EarliestEstimatedDeliveryDate',
        'latestEstimatedDeliveryDate' => 'LatestEstimatedDeliveryDate',
        'availableShippingServiceOptions' => 'AvailableShippingServiceOptions',
        'availableLabelFormats' => 'AvailableLabelFormats',
        'availableFormatOptionsForLabel' => 'AvailableFormatOptionsForLabel',
    ];

    protected static array $complexArrayTypes = ['availableFormatOptionsForLabel' => [LabelFormatOption::class]];

    /**
     * @param  string  $shippingServiceName  A plain text representation of a carrier's shipping service. For example, "UPS Ground" or "FedEx Standard Overnight".
     * @param  string  $carrierName  The name of the carrier.
     * @param  string  $shippingServiceId  An Amazon-defined shipping service identifier.
     * @param  string  $shippingServiceOfferId  An Amazon-defined shipping service offer identifier.
     * @param  CurrencyAmount  $rate  Currency type and amount.
     * @param  ShippingServiceOptions  $shippingServiceOptions  Extra services provided by a carrier.
     * @param  bool  $requiresAdditionalSellerInputs  When true, additional seller inputs are required.
     * @param  ?\DateTimeInterface  $earliestEstimatedDeliveryDate
     * @param  ?\DateTimeInterface  $latestEstimatedDeliveryDate
     * @param  ?AvailableShippingServiceOptions  $availableShippingServiceOptions  The available shipping service options.
     * @param  ?string[]  $availableLabelFormats  List of label formats.
     * @param  LabelFormatOption[]|null  $availableFormatOptionsForLabel  The available label formats.
     */
    public function __construct(
        public readonly string $shippingServiceName,
        public readonly string $carrierName,
        public readonly string $shippingServiceId,
        public readonly string $shippingServiceOfferId,
        public readonly \DateTimeInterface $shipDate,
        public readonly CurrencyAmount $rate,
        public readonly ShippingServiceOptions $shippingServiceOptions,
        public readonly bool $requiresAdditionalSellerInputs,
        public readonly ?\DateTimeInterface $earliestEstimatedDeliveryDate = null,
        public readonly ?\DateTimeInterface $latestEstimatedDeliveryDate = null,
        public readonly ?AvailableShippingServiceOptions $availableShippingServiceOptions = null,
        public readonly ?array $availableLabelFormats = null,
        public readonly ?array $availableFormatOptionsForLabel = null,
    ) {
    }
}
