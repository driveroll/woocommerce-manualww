<?php
/**
 * File for class ManualWW_StructGetShippedOrdersListResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetShippedOrdersListResponse originally named GetShippedOrdersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetShippedOrdersListResponse extends ManualWW_WsdlClass
{
    /**
     * The GetShippedOrdersListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetShippedOrdersListResult;
    /**
     * Constructor method for GetShippedOrdersListResponse
     * @see parent::__construct()
     * @param string $_getShippedOrdersListResult
     * @return ManualWW_StructGetShippedOrdersListResponse
     */
    public function __construct($_getShippedOrdersListResult = NULL)
    {
        parent::__construct(array('GetShippedOrdersListResult'=>$_getShippedOrdersListResult),false);
    }
    /**
     * Get GetShippedOrdersListResult value
     * @return string|null
     */
    public function getGetShippedOrdersListResult()
    {
        return $this->GetShippedOrdersListResult;
    }
    /**
     * Set GetShippedOrdersListResult value
     * @param string $_getShippedOrdersListResult the GetShippedOrdersListResult
     * @return string
     */
    public function setGetShippedOrdersListResult($_getShippedOrdersListResult)
    {
        return ($this->GetShippedOrdersListResult = $_getShippedOrdersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetShippedOrdersListResponse
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
