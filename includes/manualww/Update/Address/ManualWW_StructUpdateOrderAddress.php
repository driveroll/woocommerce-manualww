<?php
/**
 * File for class ManualWW_StructUpdateOrderAddress
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructUpdateOrderAddress originally named UpdateOrderAddress
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructUpdateOrderAddress extends ManualWW_WsdlClass
{
    /**
     * The vendorName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $vendorName;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $password;
    /**
     * The webUpdateOrderXML
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $webUpdateOrderXML;
    /**
     * Constructor method for UpdateOrderAddress
     * @see parent::__construct()
     * @param string $_vendorName
     * @param string $_password
     * @param string $_webUpdateOrderXML
     * @return ManualWW_StructUpdateOrderAddress
     */
    public function __construct($_vendorName = NULL,$_password = NULL,$_webUpdateOrderXML = NULL)
    {
        parent::__construct(array('vendorName'=>$_vendorName,'password'=>$_password,'webUpdateOrderXML'=>$_webUpdateOrderXML),false);
    }
    /**
     * Get vendorName value
     * @return string|null
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }
    /**
     * Set vendorName value
     * @param string $_vendorName the vendorName
     * @return string
     */
    public function setVendorName($_vendorName)
    {
        return ($this->vendorName = $_vendorName);
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }
    /**
     * Get webUpdateOrderXML value
     * @return string|null
     */
    public function getWebUpdateOrderXML()
    {
        return $this->webUpdateOrderXML;
    }
    /**
     * Set webUpdateOrderXML value
     * @param string $_webUpdateOrderXML the webUpdateOrderXML
     * @return string
     */
    public function setWebUpdateOrderXML($_webUpdateOrderXML)
    {
        return ($this->webUpdateOrderXML = $_webUpdateOrderXML);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructUpdateOrderAddress
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
