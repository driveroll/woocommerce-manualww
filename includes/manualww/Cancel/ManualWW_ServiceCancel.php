<?php
/**
 * File for class ManualWW_ServiceCancel
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_ServiceCancel originally named Cancel
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_ServiceCancel extends ManualWW_WsdlClass
{
    /**
     * Method to call the operation originally named CancelOrder
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructCancelOrder $_manualWW_StructCancelOrder
     * @return ManualWW_StructCancelOrderResponse
     */
    public function CancelOrder(ManualWW_StructCancelOrder $_manualWW_StructCancelOrder)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CancelOrder($_manualWW_StructCancelOrder));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named CancelOrderByLineNumber
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructCancelOrderByLineNumber $_manualWW_StructCancelOrderByLineNumber
     * @return ManualWW_StructCancelOrderByLineNumberResponse
     */
    public function CancelOrderByLineNumber(ManualWW_StructCancelOrderByLineNumber $_manualWW_StructCancelOrderByLineNumber)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->CancelOrderByLineNumber($_manualWW_StructCancelOrderByLineNumber));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ManualWW_WsdlClass::getResult()
     * @return ManualWW_StructCancelOrderByLineNumberResponse|ManualWW_StructCancelOrderResponse
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
