<?php
/**
* Dhl Versenden
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this extension to
* newer versions in the future.
*
* PHP version 5
*
* @category  Dhl
* @package   Dhl\Versenden
* @author    Christoph Aßmann <christoph.assmann@netresearch.de>
* @copyright 2016 Netresearch GmbH & Co. KG
* @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
* @link      http://www.netresearch.de/
*/
namespace Dhl\Versenden\ShippingInfo;
/**
 * ParcelShop
 *
 * @deprecated
 * @see \Dhl\Versenden\Webservice\RequestData\ShipmentOrder\Receiver\ParcelShop
 * @category Dhl
 * @package  Dhl\Versenden
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class ParcelShop extends PostalFacility
{
    /** @var string */
    public $parcelShopNumber;
    /** @var string */
    public $streetName;
    /** @var string */
    public $streetNumber;

    public function __construct(\stdClass $object = null)
    {
        parent::__construct($object);

        if ($object) {
            $this->parcelShopNumber = isset($object->parcelShopNumber) ? $object->parcelShopNumber : '';
            $this->streetName = isset($object->streetName) ? $object->streetName : '';
            $this->streetNumber = isset($object->streetNumber) ? $object->streetNumber : '';
        }
    }
}
