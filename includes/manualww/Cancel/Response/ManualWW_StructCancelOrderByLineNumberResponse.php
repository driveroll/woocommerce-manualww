<?php
/**
 * File for class ManualWW_StructCancelOrderByLineNumberResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructCancelOrderByLineNumberResponse originally named CancelOrderByLineNumberResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructCancelOrderByLineNumberResponse extends ManualWW_WsdlClass
{
    /**
     * The CancelOrderByLineNumberResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ManualWW_StructOrderResponse
     */
    public $CancelOrderByLineNumberResult;
    /**
     * Constructor method for CancelOrderByLineNumberResponse
     * @see parent::__construct()
     * @param ManualWW_StructOrderResponse $_cancelOrderByLineNumberResult
     * @return ManualWW_StructCancelOrderByLineNumberResponse
     */
    public function __construct($_cancelOrderByLineNumberResult = NULL)
    {
        parent::__construct(array('CancelOrderByLineNumberResult'=>$_cancelOrderByLineNumberResult),false);
    }
    /**
     * Get CancelOrderByLineNumberResult value
     * @return ManualWW_StructOrderResponse|null
     */
    public function getCancelOrderByLineNumberResult()
    {
        return $this->CancelOrderByLineNumberResult;
    }
    /**
     * Set CancelOrderByLineNumberResult value
     * @param ManualWW_StructOrderResponse $_cancelOrderByLineNumberResult the CancelOrderByLineNumberResult
     * @return ManualWW_StructOrderResponse
     */
    public function setCancelOrderByLineNumberResult($_cancelOrderByLineNumberResult)
    {
        return ($this->CancelOrderByLineNumberResult = $_cancelOrderByLineNumberResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructCancelOrderByLineNumberResponse
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
