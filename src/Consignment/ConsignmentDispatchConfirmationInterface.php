<?php
/**
 * ConsignmentDispatchConfirmationInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Nov 20, 2014, 16:07
 */

namespace Webit\Shipment\Consignment;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class ConsignmentDispatchConfirmationInterface
 * @package Webit\Shipment\Consignment
 */
interface ConsignmentDispatchConfirmationInterface
{
    /**
     * @return string
     */
    public function getNumber();

    /**
     * @return ArrayCollection
     */
    public function getConsignments();

    /**
     * @return \DateTime
     */
    public function getDispatchedAt();

    /**
     * @param \DateTime $dispatchedAt
     */
    public function setDispatchedAt(\DateTime $dispatchedAt);
}
