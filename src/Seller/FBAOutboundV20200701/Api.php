<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentOrderRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentReturnRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentPreviewRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\SubmitFulfillmentOrderStatusUpdateRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\UpdateFulfillmentOrderRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\CancelFulfillmentOrder;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\CreateFulfillmentOrder;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\CreateFulfillmentReturn;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFeatureInventory;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFeatures;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFeatureSku;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFulfillmentOrder;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetFulfillmentPreview;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\GetPackageTrackingDetails;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\ListAllFulfillmentOrders;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\ListReturnReasonCodes;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\SubmitFulfillmentOrderStatusUpdate;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Requests\UpdateFulfillmentOrder;

class Api extends BaseResource
{
    /**
     * @param  GetFulfillmentPreviewRequest  $getFulfillmentPreviewRequest The request body schema for the getFulfillmentPreview operation.
     */
    public function getFulfillmentPreview(GetFulfillmentPreviewRequest $getFulfillmentPreviewRequest): Response
    {
        return $this->connector->send(new GetFulfillmentPreview($getFulfillmentPreviewRequest));
    }

    /**
     * @param  string|null  $queryStartDate A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order.
     * @param  string|null  $nextToken A string token returned in the response to your previous request.
     */
    public function listAllFulfillmentOrders(?string $queryStartDate = null, ?string $nextToken = null): Response
    {
        return $this->connector->send(new ListAllFulfillmentOrders($queryStartDate, $nextToken));
    }

    /**
     * @param  CreateFulfillmentOrderRequest  $createFulfillmentOrderRequest The request body schema for the createFulfillmentOrder operation.
     */
    public function createFulfillmentOrder(CreateFulfillmentOrderRequest $createFulfillmentOrderRequest): Response
    {
        return $this->connector->send(new CreateFulfillmentOrder($createFulfillmentOrderRequest));
    }

    /**
     * @param  int  $packageNumber The unencrypted package identifier returned by the getFulfillmentOrder operation.
     */
    public function getPackageTrackingDetails(int $packageNumber): Response
    {
        return $this->connector->send(new GetPackageTrackingDetails($packageNumber));
    }

    /**
     * @param  string  $sellerSku The seller SKU for which return reason codes are required.
     * @param  string  $language The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into.
     * @param  string|null  $marketplaceId The marketplace for which the seller wants return reason codes.
     * @param  string|null  $sellerFulfillmentOrderId The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes.
     */
    public function listReturnReasonCodes(
        string $sellerSku,
        string $language,
        ?string $marketplaceId = null,
        ?string $sellerFulfillmentOrderId = null,
    ): Response {
        return $this->connector->send(new ListReturnReasonCodes($sellerSku, $language, $marketplaceId, $sellerFulfillmentOrderId));
    }

    /**
     * @param  string  $sellerFulfillmentOrderId An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer's request to return items.
     * @param  CreateFulfillmentReturnRequest  $createFulfillmentReturnRequest The createFulfillmentReturn operation creates a fulfillment return for items that were fulfilled using the createFulfillmentOrder operation. For calls to createFulfillmentReturn, you must include ReturnReasonCode values returned by a previous call to the listReturnReasonCodes operation.
     */
    public function createFulfillmentReturn(
        string $sellerFulfillmentOrderId,
        CreateFulfillmentReturnRequest $createFulfillmentReturnRequest,
    ): Response {
        return $this->connector->send(new CreateFulfillmentReturn($sellerFulfillmentOrderId, $createFulfillmentReturnRequest));
    }

    /**
     * @param  string  $sellerFulfillmentOrderId The identifier assigned to the item by the seller when the fulfillment order was created.
     */
    public function getFulfillmentOrder(string $sellerFulfillmentOrderId): Response
    {
        return $this->connector->send(new GetFulfillmentOrder($sellerFulfillmentOrderId));
    }

    /**
     * @param  string  $sellerFulfillmentOrderId The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  UpdateFulfillmentOrderRequest  $updateFulfillmentOrderRequest The request body schema for the updateFulfillmentOrder operation.
     */
    public function updateFulfillmentOrder(
        string $sellerFulfillmentOrderId,
        UpdateFulfillmentOrderRequest $updateFulfillmentOrderRequest,
    ): Response {
        return $this->connector->send(new UpdateFulfillmentOrder($sellerFulfillmentOrderId, $updateFulfillmentOrderRequest));
    }

    /**
     * @param  string  $sellerFulfillmentOrderId The identifier assigned to the item by the seller when the fulfillment order was created.
     */
    public function cancelFulfillmentOrder(string $sellerFulfillmentOrderId): Response
    {
        return $this->connector->send(new CancelFulfillmentOrder($sellerFulfillmentOrderId));
    }

    /**
     * @param  string  $sellerFulfillmentOrderId The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  SubmitFulfillmentOrderStatusUpdateRequest  $submitFulfillmentOrderStatusUpdateRequest The request body schema for the submitFulfillmentOrderStatusUpdate operation.
     */
    public function submitFulfillmentOrderStatusUpdate(
        string $sellerFulfillmentOrderId,
        SubmitFulfillmentOrderStatusUpdateRequest $submitFulfillmentOrderStatusUpdateRequest,
    ): Response {
        return $this->connector->send(new SubmitFulfillmentOrderStatusUpdate($sellerFulfillmentOrderId, $submitFulfillmentOrderStatusUpdateRequest));
    }

    /**
     * @param  string  $marketplaceId The marketplace for which to return the list of features.
     */
    public function getFeatures(string $marketplaceId): Response
    {
        return $this->connector->send(new GetFeatures($marketplaceId));
    }

    /**
     * @param  string  $featureName The name of the feature for which to return a list of eligible inventory.
     * @param  string  $marketplaceId The marketplace for which to return a list of the inventory that is eligible for the specified feature.
     * @param  string|null  $nextToken A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page.
     */
    public function getFeatureInventory(string $featureName, string $marketplaceId, ?string $nextToken = null): Response
    {
        return $this->connector->send(new GetFeatureInventory($featureName, $marketplaceId, $nextToken));
    }

    /**
     * @param  string  $featureName The name of the feature.
     * @param  string  $sellerSku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string  $marketplaceId The marketplace for which to return the count.
     */
    public function getFeatureSku(string $featureName, string $sellerSku, string $marketplaceId): Response
    {
        return $this->connector->send(new GetFeatureSku($featureName, $sellerSku, $marketplaceId));
    }
}
