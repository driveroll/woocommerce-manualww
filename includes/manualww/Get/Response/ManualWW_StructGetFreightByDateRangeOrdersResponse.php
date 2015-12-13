<?php
/**
 * File for class ManualWW_StructGetFreightByDateRangeOrdersResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetFreightByDateRangeOrdersResponse originally named GetFreightByDateRangeOrdersResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetFreightByDateRangeOrdersResponse extends ManualWW_WsdlClass
{
    /**
     * The GetFreightByDateRangeOrdersResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetFreightByDateRangeOrdersResult;
    /**
     * Constructor method for GetFreightByDateRangeOrdersResponse
     * @see parent::__construct()
     * @param string $_getFreightByDateRangeOrdersResult
     * @return ManualWW_StructGetFreightByDateRangeOrdersResponse
     */
    public function __construct($_getFreightByDateRangeOrdersResult = NULL)
    {
        parent::__construct(array('GetFreightByDateRangeOrdersResult'=>$_getFreightByDateRangeOrdersResult),false);
    }
    /**
     * Get GetFreightByDateRangeOrdersResult value
     * @return string|null
     */
    public function getGetFreightByDateRangeOrdersResult()
    {
        return $this->GetFreightByDateRangeOrdersResult;
    }
    /**
     * Set GetFreightByDateRangeOrdersResult value
     * @param string $_getFreightByDateRangeOrdersResult the GetFreightByDateRangeOrdersResult
     * @return string
     */
    public function setGetFreightByDateRangeOrdersResult($_getFreightByDateRangeOrdersResult)
    {
        return ($this->GetFreightByDateRangeOrdersResult = $_getFreightByDateRangeOrdersResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetFreightByDateRangeOrdersResponse
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
