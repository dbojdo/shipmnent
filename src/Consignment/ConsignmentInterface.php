<?php
/**
 * ConsignmentInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Nov 20, 2014, 14:46
 */

namespace Webit\Shipment\Consignment;

use Doctrine\Common\Collections\ArrayCollection;
use Webit\Shipment\Address\DeliveryAddressInterface;
use Webit\Shipment\Address\SenderAddressInterface;
use Webit\Shipment\Parcel\ParcelInterface;
use Webit\Shipment\Vendor\VendorInterface;
use Webit\Shipment\Vendor\VendorOptionValueInterface;

/**
 * Interface ConsignmentInterface
 * @package Webit\Shipment\Consignment
 */
interface ConsignmentInterface
{

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return VendorInterface
     */
    public function getVendor();

    /**
     * @param VendorInterface $vendor
     */
    public function setVendor(VendorInterface $vendor);

    /**
     * @return ArrayCollection
     */
    public function getVendorOptions();

    /**
     * @param string $code
     * @return VendorOptionValueInterface
     */
    public function getVendorOption($code);

    /**
     * @param VendorOptionValueInterface $vendorOptionValue
     */
    public function setVendorOption(VendorOptionValueInterface $vendorOptionValue);

    /**
     * @param VendorOptionValueInterface $vendorOptionValue
     */
    public function unsetVendorOption(VendorOptionValueInterface $vendorOptionValue);

    /**
     * @return string
     */
    public function getVendorStatus();

    /**
     * @param string $status
     */
    public function setVendorStatus($status);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     */
    public function setStatus($status);

    /**
     * @return SenderAddressInterface
     */
    public function getSenderAddress();

    /**
     * @param SenderAddressInterface $senderAddress
     */
    public function setSenderAddress(SenderAddressInterface $senderAddress);

    /**
     * @return DeliveryAddressInterface
     */
    public function getDeliveryAddress();

    /**
     * @param DeliveryAddressInterface $deliveryAddress
     */
    public function setDeliveryAddress(DeliveryAddressInterface $deliveryAddress);

    /**
     * @param ParcelInterface $parcel
     */
    public function addParcel(ParcelInterface $parcel);

    /**
     * @param ParcelInterface $parcel
     */
    public function removeParcel(ParcelInterface $parcel);

    /**
     * @return ArrayCollection
     */
    public function getParcels();

    /**
     * @return string
     */
    public function getReference();

    /**
     * @param string $reference
     */
    public function setReference($reference);

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @return DispatchConfirmationInterface
     */
    public function getDispatchConfirmation();

    /**
     * @param DispatchConfirmationInterface $consignmentDispatchConfirmation
     */
    public function setDispatchConfirmation(DispatchConfirmationInterface $consignmentDispatchConfirmation);
}
