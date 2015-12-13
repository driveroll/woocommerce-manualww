<?php
/**
 * File for class ManualWW_StructGetErrorOrdersList
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetErrorOrdersList originally named GetErrorOrdersList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetErrorOrdersList extends ManualWW_WsdlClass
{
    /**
     * The venderName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $venderName;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $password;
    /**
     * Constructor method for GetErrorOrdersList
     * @see parent::__construct()
     * @param string $_venderName
     * @param string $_password
     * @return ManualWW_StructGetErrorOrdersList
     */
    public function __construct($_venderName = NULL,$_password = NULL)
    {
        parent::__construct(array('venderName'=>$_venderName,'password'=>$_password),false);
    }
    /**
     * Get venderName value
     * @return string|null
     */
    public function getVenderName()
    {
        return $this->venderName;
    }
    /**
     * Set venderName value
     * @param string $_venderName the venderName
     * @return string
     */
    public function setVenderName($_venderName)
    {
        return ($this->venderName = $_venderName);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetErrorOrdersList
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
