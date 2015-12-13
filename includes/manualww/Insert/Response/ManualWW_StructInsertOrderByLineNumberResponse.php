<?php
/**
 * File for class ManualWW_StructInsertOrderByLineNumberResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructInsertOrderByLineNumberResponse originally named InsertOrderByLineNumberResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructInsertOrderByLineNumberResponse extends ManualWW_WsdlClass
{
    /**
     * The InsertOrderByLineNumberResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ManualWW_StructOrderResponse
     */
    public $InsertOrderByLineNumberResult;
    /**
     * Constructor method for InsertOrderByLineNumberResponse
     * @see parent::__construct()
     * @param ManualWW_StructOrderResponse $_insertOrderByLineNumberResult
     * @return ManualWW_StructInsertOrderByLineNumberResponse
     */
    public function __construct($_insertOrderByLineNumberResult = NULL)
    {
        parent::__construct(array('InsertOrderByLineNumberResult'=>$_insertOrderByLineNumberResult),false);
    }
    /**
     * Get InsertOrderByLineNumberResult value
     * @return ManualWW_StructOrderResponse|null
     */
    public function getInsertOrderByLineNumberResult()
    {
        return $this->InsertOrderByLineNumberResult;
    }
    /**
     * Set InsertOrderByLineNumberResult value
     * @param ManualWW_StructOrderResponse $_insertOrderByLineNumberResult the InsertOrderByLineNumberResult
     * @return ManualWW_StructOrderResponse
     */
    public function setInsertOrderByLineNumberResult($_insertOrderByLineNumberResult)
    {
        return ($this->InsertOrderByLineNumberResult = $_insertOrderByLineNumberResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructInsertOrderByLineNumberResponse
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
