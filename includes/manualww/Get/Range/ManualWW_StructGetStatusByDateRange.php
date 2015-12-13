<?php
/**
 * File for class ManualWW_StructGetStatusByDateRange
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * This class stands for ManualWW_StructGetStatusByDateRange originally named GetStatusByDateRange
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL}
 * @package ManualWW_
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_StructGetStatusByDateRange extends ManualWW_WsdlClass
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
     * The startdate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $startdate;
    /**
     * The enddate
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $enddate;
    /**
     * Constructor method for GetStatusByDateRange
     * @see parent::__construct()
     * @param string $_venderName
     * @param string $_password
     * @param string $_startdate
     * @param string $_enddate
     * @return ManualWW_StructGetStatusByDateRange
     */
    public function __construct($_venderName = NULL,$_password = NULL,$_startdate = NULL,$_enddate = NULL)
    {
        parent::__construct(array('venderName'=>$_venderName,'password'=>$_password,'startdate'=>$_startdate,'enddate'=>$_enddate),false);
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
     * Get startdate value
     * @return string|null
     */
    public function getStartdate()
    {
        return $this->startdate;
    }
    /**
     * Set startdate value
     * @param string $_startdate the startdate
     * @return string
     */
    public function setStartdate($_startdate)
    {
        return ($this->startdate = $_startdate);
    }
    /**
     * Get enddate value
     * @return string|null
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
    /**
     * Set enddate value
     * @param string $_enddate the enddate
     * @return string
     */
    public function setEnddate($_enddate)
    {
        return ($this->enddate = $_enddate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ManualWW_WsdlClass::__set_state()
     * @uses ManualWW_WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return ManualWW_StructGetStatusByDateRange
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
