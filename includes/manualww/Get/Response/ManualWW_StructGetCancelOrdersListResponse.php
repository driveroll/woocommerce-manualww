<?php
/**
 * File for class ManualWW_StructGetCancelOrdersListResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetCancelOrdersListResponse originally named GetCancelOrdersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetCancelOrdersListResponse extends ManualWW_WsdlClass
{
    /**
     * The GetCancelOrdersListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetCancelOrdersListResult;
    /**
     * Constructor method for GetCancelOrdersListResponse
     * @see parent::__construct()
     * @param string $_getCancelOrdersListResult
     * @return ManualWW_StructGetCancelOrdersListResponse
     */
    public function __construct($_getCancelOrdersListResult = NULL)
    {
        parent::__construct(array('GetCancelOrdersListResult'=>$_getCancelOrdersListResult),false);
    }
    /**
     * Get GetCancelOrdersListResult value
     * @return string|null
     */
    public function getGetCancelOrdersListResult()
    {
        return $this->GetCancelOrdersListResult;
    }
    /**
     * Set GetCancelOrdersListResult value
     * @param string $_getCancelOrdersListResult the GetCancelOrdersListResult
     * @return string
     */
    public function setGetCancelOrdersListResult($_getCancelOrdersListResult)
    {
        return ($this->GetCancelOrdersListResult = $_getCancelOrdersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetCancelOrdersListResponse
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
