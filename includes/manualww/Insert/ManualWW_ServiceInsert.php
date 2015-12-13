<?php
/**
 * File for class ManualWW_ServiceInsert
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_ServiceInsert originally named Insert
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_ServiceInsert extends ManualWW_WsdlClass
{
    /**
     * Method to call the operation originally named InsertOrder
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructInsertOrder $_manualWW_StructInsertOrder
     * @return ManualWW_StructInsertOrderResponse
     */
    public function InsertOrder(ManualWW_StructInsertOrder $_manualWW_StructInsertOrder)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->InsertOrder($_manualWW_StructInsertOrder));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named InsertOrderByLineNumber
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructInsertOrderByLineNumber $_manualWW_StructInsertOrderByLineNumber
     * @return ManualWW_StructInsertOrderByLineNumberResponse
     */
    public function InsertOrderByLineNumber(ManualWW_StructInsertOrderByLineNumber $_manualWW_StructInsertOrderByLineNumber)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->InsertOrderByLineNumber($_manualWW_StructInsertOrderByLineNumber));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ManualWW_WsdlClass::getResult()
     * @return ManualWW_StructInsertOrderByLineNumberResponse|ManualWW_StructInsertOrderResponse
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
