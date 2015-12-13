<?php
/**
 * File for class ManualWW_StructOrderResponse
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructOrderResponse originally named OrderResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructOrderResponse extends ManualWW_WsdlClass
{
    /**
     * The VendorOrderNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VendorOrderNumber;
    /**
     * The OrderStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OrderStatus;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Comments;
    /**
     * The TimeStamp
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TimeStamp;
    /**
     * Constructor method for OrderResponse
     * @see parent::__construct()
     * @param string $_vendorOrderNumber
     * @param string $_orderStatus
     * @param string $_comments
     * @param string $_timeStamp
     * @return ManualWW_StructOrderResponse
     */
    public function __construct($_vendorOrderNumber = NULL,$_orderStatus = NULL,$_comments = NULL,$_timeStamp = NULL)
    {
        parent::__construct(array('VendorOrderNumber'=>$_vendorOrderNumber,'OrderStatus'=>$_orderStatus,'Comments'=>$_comments,'TimeStamp'=>$_timeStamp),false);
    }
    /**
     * Get VendorOrderNumber value
     * @return string|null
     */
    public function getVendorOrderNumber()
    {
        return $this->VendorOrderNumber;
    }
    /**
     * Set VendorOrderNumber value
     * @param string $_vendorOrderNumber the VendorOrderNumber
     * @return string
     */
    public function setVendorOrderNumber($_vendorOrderNumber)
    {
        return ($this->VendorOrderNumber = $_vendorOrderNumber);
    }
    /**
     * Get OrderStatus value
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->OrderStatus;
    }
    /**
     * Set OrderStatus value
     * @param string $_orderStatus the OrderStatus
     * @return string
     */
    public function setOrderStatus($_orderStatus)
    {
        return ($this->OrderStatus = $_orderStatus);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $_comments the Comments
     * @return string
     */
    public function setComments($_comments)
    {
        return ($this->Comments = $_comments);
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $_timeStamp the TimeStamp
     * @return string
     */
    public function setTimeStamp($_timeStamp)
    {
        return ($this->TimeStamp = $_timeStamp);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructOrderResponse
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
