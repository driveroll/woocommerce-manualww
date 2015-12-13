<?php
/**
 * File for class ManualWW_StructGetAllStatusByOrderIDResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetAllStatusByOrderIDResponse originally named GetAllStatusByOrderIDResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetAllStatusByOrderIDResponse extends ManualWW_WsdlClass
{
    /**
     * The GetAllStatusByOrderIDResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetAllStatusByOrderIDResult;
    /**
     * Constructor method for GetAllStatusByOrderIDResponse
     * @see parent::__construct()
     * @param string $_getAllStatusByOrderIDResult
     * @return ManualWW_StructGetAllStatusByOrderIDResponse
     */
    public function __construct($_getAllStatusByOrderIDResult = NULL)
    {
        parent::__construct(array('GetAllStatusByOrderIDResult'=>$_getAllStatusByOrderIDResult),false);
    }
    /**
     * Get GetAllStatusByOrderIDResult value
     * @return string|null
     */
    public function getGetAllStatusByOrderIDResult()
    {
        return $this->GetAllStatusByOrderIDResult;
    }
    /**
     * Set GetAllStatusByOrderIDResult value
     * @param string $_getAllStatusByOrderIDResult the GetAllStatusByOrderIDResult
     * @return string
     */
    public function setGetAllStatusByOrderIDResult($_getAllStatusByOrderIDResult)
    {
        return ($this->GetAllStatusByOrderIDResult = $_getAllStatusByOrderIDResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetAllStatusByOrderIDResponse
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
