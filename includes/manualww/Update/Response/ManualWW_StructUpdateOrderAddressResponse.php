<?php
/**
 * File for class ManualWW_StructUpdateOrderAddressResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructUpdateOrderAddressResponse originally named UpdateOrderAddressResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructUpdateOrderAddressResponse extends ManualWW_WsdlClass
{
    /**
     * The UpdateOrderAddressResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ManualWW_StructOrderResponse
     */
    public $UpdateOrderAddressResult;
    /**
     * Constructor method for UpdateOrderAddressResponse
     * @see parent::__construct()
     * @param ManualWW_StructOrderResponse $_updateOrderAddressResult
     * @return ManualWW_StructUpdateOrderAddressResponse
     */
    public function __construct($_updateOrderAddressResult = NULL)
    {
        parent::__construct(array('UpdateOrderAddressResult'=>$_updateOrderAddressResult),false);
    }
    /**
     * Get UpdateOrderAddressResult value
     * @return ManualWW_StructOrderResponse|null
     */
    public function getUpdateOrderAddressResult()
    {
        return $this->UpdateOrderAddressResult;
    }
    /**
     * Set UpdateOrderAddressResult value
     * @param ManualWW_StructOrderResponse $_updateOrderAddressResult the UpdateOrderAddressResult
     * @return ManualWW_StructOrderResponse
     */
    public function setUpdateOrderAddressResult($_updateOrderAddressResult)
    {
        return ($this->UpdateOrderAddressResult = $_updateOrderAddressResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructUpdateOrderAddressResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
