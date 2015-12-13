<?php
/**
 * File for class ManualWW_StructGetXmlReceivedOrdersListResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetXmlReceivedOrdersListResponse originally named GetXmlReceivedOrdersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetXmlReceivedOrdersListResponse extends ManualWW_WsdlClass
{
    /**
     * The GetXmlReceivedOrdersListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetXmlReceivedOrdersListResult;
    /**
     * Constructor method for GetXmlReceivedOrdersListResponse
     * @see parent::__construct()
     * @param string $_getXmlReceivedOrdersListResult
     * @return ManualWW_StructGetXmlReceivedOrdersListResponse
     */
    public function __construct($_getXmlReceivedOrdersListResult = NULL)
    {
        parent::__construct(array('GetXmlReceivedOrdersListResult'=>$_getXmlReceivedOrdersListResult),false);
    }
    /**
     * Get GetXmlReceivedOrdersListResult value
     * @return string|null
     */
    public function getGetXmlReceivedOrdersListResult()
    {
        return $this->GetXmlReceivedOrdersListResult;
    }
    /**
     * Set GetXmlReceivedOrdersListResult value
     * @param string $_getXmlReceivedOrdersListResult the GetXmlReceivedOrdersListResult
     * @return string
     */
    public function setGetXmlReceivedOrdersListResult($_getXmlReceivedOrdersListResult)
    {
        return ($this->GetXmlReceivedOrdersListResult = $_getXmlReceivedOrdersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetXmlReceivedOrdersListResponse
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
