<?php
/**
 * File for class ManualWW_StructGetProductionOrdersListResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetProductionOrdersListResponse originally named GetProductionOrdersListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetProductionOrdersListResponse extends ManualWW_WsdlClass
{
    /**
     * The GetProductionOrdersListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $GetProductionOrdersListResult;
    /**
     * Constructor method for GetProductionOrdersListResponse
     * @see parent::__construct()
     * @param string $_getProductionOrdersListResult
     * @return ManualWW_StructGetProductionOrdersListResponse
     */
    public function __construct($_getProductionOrdersListResult = NULL)
    {
        parent::__construct(array('GetProductionOrdersListResult'=>$_getProductionOrdersListResult),false);
    }
    /**
     * Get GetProductionOrdersListResult value
     * @return string|null
     */
    public function getGetProductionOrdersListResult()
    {
        return $this->GetProductionOrdersListResult;
    }
    /**
     * Set GetProductionOrdersListResult value
     * @param string $_getProductionOrdersListResult the GetProductionOrdersListResult
     * @return string
     */
    public function setGetProductionOrdersListResult($_getProductionOrdersListResult)
    {
        return ($this->GetProductionOrdersListResult = $_getProductionOrdersListResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetProductionOrdersListResponse
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
