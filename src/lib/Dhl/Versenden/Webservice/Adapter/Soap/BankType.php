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
 * @package   Dhl\Versenden\Webservice\Soap
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2016 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Webservice\Adapter\Soap;
use Dhl\Bcs\Api as VersendenApi;
use Dhl\Versenden\Webservice\RequestData;

/**
 * BankType
 *
 * @category Dhl
 * @package  Dhl\Versenden\Webservice\Soap
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class BankType implements RequestType
{
    /**
     * @param RequestData\ShipmentOrder\Shipper\BankData $requestData
     * @return \Dhl\Bcs\Api\BankType
     */
    public static function prepare(RequestData $requestData)
    {
        $requestType = new VersendenApi\BankType(
            $requestData->getAccountOwner(),
            $requestData->getBankName(),
            $requestData->getIban()
        );

        $requestType->setNote1($requestData->getNote1());
        $requestType->setNote2($requestData->getNote2());
        $requestType->setBic($requestData->getBic());
        $requestType->setAccountreference($requestData->getAccountReference());

        return $requestType;
    }
}
