<?php
/**
 * File for class ManualWW_StructCancelOrderResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructCancelOrderResponse originally named CancelOrderResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructCancelOrderResponse extends ManualWW_WsdlClass
{
    /**
     * The CancelOrderResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var ManualWW_StructOrderResponse
     */
    public $CancelOrderResult;
    /**
     * Constructor method for CancelOrderResponse
     * @see parent::__construct()
     * @param ManualWW_StructOrderResponse $_cancelOrderResult
     * @return ManualWW_StructCancelOrderResponse
     */
    public function __construct($_cancelOrderResult = NULL)
    {
        parent::__construct(array('CancelOrderResult'=>$_cancelOrderResult),false);
    }
    /**
     * Get CancelOrderResult value
     * @return ManualWW_StructOrderResponse|null
     */
    public function getCancelOrderResult()
    {
        return $this->CancelOrderResult;
    }
    /**
     * Set CancelOrderResult value
     * @param ManualWW_StructOrderResponse $_cancelOrderResult the CancelOrderResult
     * @return ManualWW_StructOrderResponse
     */
    public function setCancelOrderResult($_cancelOrderResult)
    {
        return ($this->CancelOrderResult = $_cancelOrderResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructCancelOrderResponse
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
