<?php
/**
 * File for the class which returns the class map definition
 * @package ManualWW_
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
/**
 * Class which returns the class map definition by the static method ManualWW_ClassMap::classMap()
 * @package ManualWW_
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-09-25
 */
class ManualWW_ClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'CancelOrder' => 'ManualWW_StructCancelOrder',
  'CancelOrderByLineNumber' => 'ManualWW_StructCancelOrderByLineNumber',
  'CancelOrderByLineNumberResponse' => 'ManualWW_StructCancelOrderByLineNumberResponse',
  'CancelOrderResponse' => 'ManualWW_StructCancelOrderResponse',
  'GetAllStatusByOrderID' => 'ManualWW_StructGetAllStatusByOrderID',
  'GetAllStatusByOrderIDResponse' => 'ManualWW_StructGetAllStatusByOrderIDResponse',
  'GetCancelOrdersList' => 'ManualWW_StructGetCancelOrdersList',
  'GetCancelOrdersListResponse' => 'ManualWW_StructGetCancelOrdersListResponse',
  'GetErrorOrdersList' => 'ManualWW_StructGetErrorOrdersList',
  'GetErrorOrdersListResponse' => 'ManualWW_StructGetErrorOrdersListResponse',
  'GetFreightByDateRangeOrders' => 'ManualWW_StructGetFreightByDateRangeOrders',
  'GetFreightByDateRangeOrdersResponse' => 'ManualWW_StructGetFreightByDateRangeOrdersResponse',
  'GetFreightByOrderID' => 'ManualWW_StructGetFreightByOrderID',
  'GetFreightByOrderIDResponse' => 'ManualWW_StructGetFreightByOrderIDResponse',
  'GetProductionOrdersList' => 'ManualWW_StructGetProductionOrdersList',
  'GetProductionOrdersListResponse' => 'ManualWW_StructGetProductionOrdersListResponse',
  'GetShippedOrdersList' => 'ManualWW_StructGetShippedOrdersList',
  'GetShippedOrdersListResponse' => 'ManualWW_StructGetShippedOrdersListResponse',
  'GetStatusByDateRange' => 'ManualWW_StructGetStatusByDateRange',
  'GetStatusByDateRangeResponse' => 'ManualWW_StructGetStatusByDateRangeResponse',
  'GetStatusByOrderId' => 'ManualWW_StructGetStatusByOrderId',
  'GetStatusByOrderIdResponse' => 'ManualWW_StructGetStatusByOrderIdResponse',
  'GetXmlReceivedOrdersList' => 'ManualWW_StructGetXmlReceivedOrdersList',
  'GetXmlReceivedOrdersListResponse' => 'ManualWW_StructGetXmlReceivedOrdersListResponse',
  'InsertOrder' => 'ManualWW_StructInsertOrder',
  'InsertOrderByLineNumber' => 'ManualWW_StructInsertOrderByLineNumber',
  'InsertOrderByLineNumberResponse' => 'ManualWW_StructInsertOrderByLineNumberResponse',
  'InsertOrderResponse' => 'ManualWW_StructInsertOrderResponse',
  'OrderResponse' => 'ManualWW_StructOrderResponse',
  'UpdateOrderAddress' => 'ManualWW_StructUpdateOrderAddress',
  'UpdateOrderAddressResponse' => 'ManualWW_StructUpdateOrderAddressResponse',
);
    }
}
