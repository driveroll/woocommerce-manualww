<?php
/**
 * File for class ManualWW_StructGetErrorOrdersListResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetErrorOrdersListResponse originally named GetErrorOrdersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetErrorOrdersListResponse extends ManualWW_WsdlClass
{
    /**
     * The GetErrorOrdersListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetErrorOrdersListResult;
    /**
     * Constructor method for GetErrorOrdersListResponse
     * @see parent::__construct()
     * @param string $_getErrorOrdersListResult
     * @return ManualWW_StructGetErrorOrdersListResponse
     */
    public function __construct($_getErrorOrdersListResult = NULL)
    {
        parent::__construct(array('GetErrorOrdersListResult'=>$_getErrorOrdersListResult),false);
    }
    /**
     * Get GetErrorOrdersListResult value
     * @return string|null
     */
    public function getGetErrorOrdersListResult()
    {
        return $this->GetErrorOrdersListResult;
    }
    /**
     * Set GetErrorOrdersListResult value
     * @param string $_getErrorOrdersListResult the GetErrorOrdersListResult
     * @return string
     */
    public function setGetErrorOrdersListResult($_getErrorOrdersListResult)
    {
        return ($this->GetErrorOrdersListResult = $_getErrorOrdersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetErrorOrdersListResponse
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
