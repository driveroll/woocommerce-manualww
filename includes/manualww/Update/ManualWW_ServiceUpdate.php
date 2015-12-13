<?php
/**
 * File for class ManualWW_ServiceUpdate
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_ServiceUpdate originally named Update
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_ServiceUpdate extends ManualWW_WsdlClass
{
    /**
     * Method to call the operation originally named UpdateOrderAddress
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructUpdateOrderAddress $_manualWW_StructUpdateOrderAddress
     * @return ManualWW_StructUpdateOrderAddressResponse
     */
    public function UpdateOrderAddress(ManualWW_StructUpdateOrderAddress $_manualWW_StructUpdateOrderAddress)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->UpdateOrderAddress($_manualWW_StructUpdateOrderAddress));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ManualWW_WsdlClass::getResult()
     * @return ManualWW_StructUpdateOrderAddressResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
