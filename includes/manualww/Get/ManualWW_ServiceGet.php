<?php
/**
 * File for class ManualWW_ServiceGet
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_ServiceGet originally named Get
 * @package ManualWW_
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_ServiceGet extends ManualWW_WsdlClass
{
    /**
     * Method to call the operation originally named GetStatusByOrderId
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetStatusByOrderId $_manualWW_StructGetStatusByOrderId
     * @return ManualWW_StructGetStatusByOrderIdResponse
     */
    public function GetStatusByOrderId(ManualWW_StructGetStatusByOrderId $_manualWW_StructGetStatusByOrderId)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetStatusByOrderId($_manualWW_StructGetStatusByOrderId));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetAllStatusByOrderID
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetAllStatusByOrderID $_manualWW_StructGetAllStatusByOrderID
     * @return ManualWW_StructGetAllStatusByOrderIDResponse
     */
    public function GetAllStatusByOrderID(ManualWW_StructGetAllStatusByOrderID $_manualWW_StructGetAllStatusByOrderID)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetAllStatusByOrderID($_manualWW_StructGetAllStatusByOrderID));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetFreightByOrderID
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetFreightByOrderID $_manualWW_StructGetFreightByOrderID
     * @return ManualWW_StructGetFreightByOrderIDResponse
     */
    public function GetFreightByOrderID(ManualWW_StructGetFreightByOrderID $_manualWW_StructGetFreightByOrderID)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetFreightByOrderID($_manualWW_StructGetFreightByOrderID));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetFreightByDateRangeOrders
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetFreightByDateRangeOrders $_manualWW_StructGetFreightByDateRangeOrders
     * @return ManualWW_StructGetFreightByDateRangeOrdersResponse
     */
    public function GetFreightByDateRangeOrders(ManualWW_StructGetFreightByDateRangeOrders $_manualWW_StructGetFreightByDateRangeOrders)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetFreightByDateRangeOrders($_manualWW_StructGetFreightByDateRangeOrders));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetStatusByDateRange
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetStatusByDateRange $_manualWW_StructGetStatusByDateRange
     * @return ManualWW_StructGetStatusByDateRangeResponse
     */
    public function GetStatusByDateRange(ManualWW_StructGetStatusByDateRange $_manualWW_StructGetStatusByDateRange)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetStatusByDateRange($_manualWW_StructGetStatusByDateRange));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetXmlReceivedOrdersList
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetXmlReceivedOrdersList $_manualWW_StructGetXmlReceivedOrdersList
     * @return ManualWW_StructGetXmlReceivedOrdersListResponse
     */
    public function GetXmlReceivedOrdersList(ManualWW_StructGetXmlReceivedOrdersList $_manualWW_StructGetXmlReceivedOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetXmlReceivedOrdersList($_manualWW_StructGetXmlReceivedOrdersList));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetProductionOrdersList
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetProductionOrdersList $_manualWW_StructGetProductionOrdersList
     * @return ManualWW_StructGetProductionOrdersListResponse
     */
    public function GetProductionOrdersList(ManualWW_StructGetProductionOrdersList $_manualWW_StructGetProductionOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetProductionOrdersList($_manualWW_StructGetProductionOrdersList));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetShippedOrdersList
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetShippedOrdersList $_manualWW_StructGetShippedOrdersList
     * @return ManualWW_StructGetShippedOrdersListResponse
     */
    public function GetShippedOrdersList(ManualWW_StructGetShippedOrdersList $_manualWW_StructGetShippedOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetShippedOrdersList($_manualWW_StructGetShippedOrdersList));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetCancelOrdersList
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetCancelOrdersList $_manualWW_StructGetCancelOrdersList
     * @return ManualWW_StructGetCancelOrdersListResponse
     */
    public function GetCancelOrdersList(ManualWW_StructGetCancelOrdersList $_manualWW_StructGetCancelOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetCancelOrdersList($_manualWW_StructGetCancelOrdersList));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named GetErrorOrdersList
     * @uses ManualWW_WsdlClass::getSoapClient()
     * @uses ManualWW_WsdlClass::setResult()
     * @uses ManualWW_WsdlClass::saveLastError()
     * @param ManualWW_StructGetErrorOrdersList $_manualWW_StructGetErrorOrdersList
     * @return ManualWW_StructGetErrorOrdersListResponse
     */
    public function GetErrorOrdersList(ManualWW_StructGetErrorOrdersList $_manualWW_StructGetErrorOrdersList)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->GetErrorOrdersList($_manualWW_StructGetErrorOrdersList));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see ManualWW_WsdlClass::getResult()
     * @return ManualWW_StructGetAllStatusByOrderIDResponse|ManualWW_StructGetCancelOrdersListResponse|ManualWW_StructGetErrorOrdersListResponse|ManualWW_StructGetFreightByDateRangeOrdersResponse|ManualWW_StructGetFreightByOrderIDResponse|ManualWW_StructGetProductionOrdersListResponse|ManualWW_StructGetShippedOrdersListResponse|ManualWW_StructGetStatusByDateRangeResponse|ManualWW_StructGetStatusByOrderIdResponse|ManualWW_StructGetXmlReceivedOrdersListResponse
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
