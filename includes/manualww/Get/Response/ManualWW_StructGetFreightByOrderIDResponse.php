<?php
/**
 * File for class ManualWW_StructGetFreightByOrderIDResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetFreightByOrderIDResponse originally named GetFreightByOrderIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetFreightByOrderIDResponse extends ManualWW_WsdlClass
{
    /**
     * The GetFreightByOrderIDResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetFreightByOrderIDResult;
    /**
     * Constructor method for GetFreightByOrderIDResponse
     * @see parent::__construct()
     * @param string $_getFreightByOrderIDResult
     * @return ManualWW_StructGetFreightByOrderIDResponse
     */
    public function __construct($_getFreightByOrderIDResult = NULL)
    {
        parent::__construct(array('GetFreightByOrderIDResult'=>$_getFreightByOrderIDResult),false);
    }
    /**
     * Get GetFreightByOrderIDResult value
     * @return string|null
     */
    public function getGetFreightByOrderIDResult()
    {
        return $this->GetFreightByOrderIDResult;
    }
    /**
     * Set GetFreightByOrderIDResult value
     * @param string $_getFreightByOrderIDResult the GetFreightByOrderIDResult
     * @return string
     */
    public function setGetFreightByOrderIDResult($_getFreightByOrderIDResult)
    {
        return ($this->GetFreightByOrderIDResult = $_getFreightByOrderIDResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetFreightByOrderIDResponse
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
