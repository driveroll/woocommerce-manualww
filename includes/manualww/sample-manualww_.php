<?php
/**
 * Test with ManualWW_ for 'http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL'
 * @package ManualWW_
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ManualWW_Autoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a ManualWW_WsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[ManualWW_WsdlClass::WSDL_URL] = 'http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL';
 * $wsdl[ManualWW_WsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[ManualWW_WsdlClass::WSDL_TRACE] = true;
 * $wsdl[ManualWW_WsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[ManualWW_WsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new ManualWW_WsdlClass($wsdl);
 */
/**
 * Examples
 */


// http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_Venado_PILLOW_2hermano.jpg
// http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_Corazon_PILLOW_2hermano.jpg
/*$webOrderXML = '<?xml version="1.0"?>
<WorkOrder>
  <OrderID>2H-TEST-01</OrderID>
  <OrderType>test</OrderType>
  <LineItems>
    <LineItem>
      <LineNumber>1</LineNumber>
      <ProductCode>PRT-GEN-SQG20Z</ProductCode>
      <ItemDescription>Carmin Pillow</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_Carmin_PILLOW_2hermano2.jpg</Source>
      </FileList>
    </LineItem>
  </LineItems>
  <CustomerBillingInfo>
    <Name>2Hermano</Name>
    <Address1>3400 Montrose St.</Address1>
    <Address2></Address2>
    <City>Sacramento</City>
    <State>CA</State>
    <PostalCode>95838</PostalCode>
    <Country>US</Country>
  </CustomerBillingInfo>
  <CustomerShippingInfo>
    <Name>David Riveroll Fuster</Name>
    <Address1>Av. Revolucion 60</Address1>
    <Address2></Address2>
    <City>Tepoztlan</City>
    <State>Morelos</State>
    <PostalCode>62520</PostalCode>
    <Country>MX</Country>
    <Phone>52-739-395-2033</Phone>
    <ShippingMethod>UPSGROUND</ShippingMethod>
    <ShipAccountNum>A603X2</ShipAccountNum>
    <ShipType>MTH</ShipType><!--Ship_ID -->
  </CustomerShippingInfo>
</WorkOrder>';*/

$webOrderXML = '<?xml version="1.0"?>
<WorkOrder>
  <OrderID>2H-LIVE-02</OrderID>
  <OrderType>new</OrderType>
  <LineItems>
    <LineItem>
      <LineNumber>1</LineNumber>
      <ProductCode>PRT-GEN-SQG20Z</ProductCode>
      <ItemDescription>Corazon Pillow</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_Corazon_PILLOW_2hermano.jpg</Source>
      </FileList>
    </LineItem>
    <LineItem>
      <LineNumber>2</LineNumber>
      <ProductCode>PRT-GEN-SQG20Z</ProductCode>
      <ItemDescription>Venado Pillow</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_Venado_PILLOW_2hermano.jpg</Source>
      </FileList>
    </LineItem>
    <LineItem>
      <LineNumber>3</LineNumber>
      <ProductCode>PRT-GEN-SQG20Z</ProductCode>
      <ItemDescription>Aguila Real Pillow</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_AGUILA_REAL_PILLOW_2hermano.jpg</Source>
      </FileList>
    </LineItem>
    <LineItem>
      <LineNumber>4</LineNumber>
      <ProductCode>PRT-GEN-SQG20Z</ProductCode>
      <ItemDescription>Wirikuta Star Pillow</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_WIRIKUTA_STAR_PILLOW_2hermano.jpg</Source>
      </FileList>
    </LineItem>
    <LineItem>
      <LineNumber>5</LineNumber>
      <ProductCode>PRT-GEN-SQG20Z</ProductCode>
      <ItemDescription>Huitzi Pillow</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/10/DYE_51129_GENERIC_20X20_HUITZI_PILLOW_2hermano.jpg</Source>
      </FileList>
    </LineItem>
    <LineItem>
      <LineNumber>6</LineNumber>
      <ProductCode>PRT-GEN-SCDHOS</ProductCode>
      <ItemDescription>Venado Shower Curtain</ItemDescription>
      <Quantity>1</Quantity>
      <FileList>
          <Source>http://2hermano.com/wp-content/uploads/2015/11/Venado_Shower_Curtain_71x74_2hermano.jpg</Source>
      </FileList>
    </LineItem>
  </LineItems>
  <CustomerBillingInfo>
    <Name>2Hermano</Name>
    <Address1>3400 Montrose St.</Address1>
    <Address2></Address2>
    <City>Sacramento</City>
    <State>CA</State>
    <PostalCode>95838</PostalCode>
    <Country>US</Country>
  </CustomerBillingInfo>
  <CustomerShippingInfo>
    <Name>2Hermano</Name>
    <Address1>3400 Montrose St.</Address1>
    <Address2></Address2>
    <City>Sacramento</City>
    <State>CA</State>
    <PostalCode>95838</PostalCode>
    <Country>US</Country>
    <ShippingMethod>USPM</ShippingMethod>
    <ShipAccountNum>6393469</ShipAccountNum>
    <ShipType>MTH</ShipType>
  </CustomerShippingInfo>
</WorkOrder>';

$wsdl = array();
$wsdl[ManualWW_WsdlClass::WSDL_URL] = 'http://webapi.manualww.com/webapi_v2/WEB_Service.asmx?WSDL'; //'http://tempuri.org/'
$wsdl[ManualWW_WsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[ManualWW_WsdlClass::WSDL_TRACE] = true;
$wsdl[ManualWW_WsdlClass::WSDL_LOGIN] = '2Hermano';
$wsdl[ManualWW_WsdlClass::WSDL_PASSWD] = '2H3rm@n0!';


$wsdlObject = new ManualWW_WsdlClass($wsdl);

/************************************
 * Example for ManualWW_ServiceInsert
 */
$manualWW_ServiceInsert = new ManualWW_ServiceInsert();
// sample call for ManualWW_ServiceInsert::InsertOrder()

/*$_venderName = '2Hermano';
$_password = '2H3rm@n0!';
$_webOrderXML = $webOrderXML;

if($manualWW_ServiceInsert->InsertOrder(new ManualWW_StructInsertOrder($_venderName,$_password,$_webOrderXML)))
    print_r($manualWW_ServiceInsert->getResult());
else
    print_r($manualWW_ServiceInsert->getLastError());*/

// sample call for ManualWW_ServiceGet::GetAllStatusByOrderID()

$manualWW_ServiceGet = new ManualWW_ServiceGet($wsdl);

$_venderName = '2Hermano';
$_password = '2H3rm@n0!';
$_manualWW_StructGetStatusByOrderId = '2H-LIVE-02';

if($manualWW_ServiceGet->GetAllStatusByOrderID(new ManualWW_StructGetAllStatusByOrderID($_venderName,$_password,$_manualWW_StructGetStatusByOrderId)))
    print_r($manualWW_ServiceGet->getResult());
else
    print_r($manualWW_ServiceGet->getLastError());

// sample call for ManualWW_ServiceGet::GetXmlReceivedOrdersList()
if($manualWW_ServiceGet->GetXmlReceivedOrdersList(new ManualWW_StructGetXmlReceivedOrdersList($_venderName,$_password)))
    print_r($manualWW_ServiceGet->getResult());
else
    print_r($manualWW_ServiceGet->getLastError());

/************************************
 * Example for ManualWW_ServiceCancel
 */
/*$manualWW_ServiceCancel = new ManualWW_ServiceCancel();
// sample call for ManualWW_ServiceCancel::CancelOrder()

$_venderName = '2Hermano';
$_password = '2H3rm@n0!';
$_webOrderXML = $webOrderXML;
$_manualWW_StructCancelOrder = $webOrderXML;

if($manualWW_ServiceCancel->CancelOrder(new ManualWW_StructCancelOrder($_venderName,$_password,$_webOrderXML)))
    print_r($manualWW_ServiceCancel->getResult());
else
    print_r($manualWW_ServiceCancel->getLastError());*/
