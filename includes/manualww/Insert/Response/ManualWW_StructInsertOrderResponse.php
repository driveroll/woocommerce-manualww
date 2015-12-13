<?php
/**
 * File for class ManualWW_StructInsertOrderResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructInsertOrderResponse originally named InsertOrderResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructInsertOrderResponse extends ManualWW_WsdlClass
{
    /**
     * The InsertOrderResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ManualWW_StructOrderResponse
     */
    public $InsertOrderResult;
    /**
     * Constructor method for InsertOrderResponse
     * @see parent::__construct()
     * @param ManualWW_StructOrderResponse $_insertOrderResult
     * @return ManualWW_StructInsertOrderResponse
     */
    public function __construct($_insertOrderResult = NULL)
    {
        parent::__construct(array('InsertOrderResult'=>$_insertOrderResult),false);
    }
    /**
     * Get InsertOrderResult value
     * @return ManualWW_StructOrderResponse|null
     */
    public function getInsertOrderResult()
    {
        return $this->InsertOrderResult;
    }
    /**
     * Set InsertOrderResult value
     * @param ManualWW_StructOrderResponse $_insertOrderResult the InsertOrderResult
     * @return ManualWW_StructOrderResponse
     */
    public function setInsertOrderResult($_insertOrderResult)
    {
        return ($this->InsertOrderResult = $_insertOrderResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructInsertOrderResponse
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
