<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/type/types.proto

namespace GPBMetadata\Google\Shopping\Type;

class Types
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
·
 google/shopping/type/types.protogoogle.shopping.type"c
Price
amount_micros (H 
currency_code (	HB
_amount_microsB
_currency_code"
CustomAttribute
name (	H 
value (	H;
group_values (2%.google.shopping.type.CustomAttributeB
_nameB
_value*
Destination
DESTINATION_UNSPECIFIED 
SHOPPING_ADS
LOCAL_INVENTORY_ADS
FREE_LISTINGS
FREE_LOCAL_LISTINGSB
com.google.shopping.typeB
TypesProtoPZ?google.golang.org/genproto/googleapis/shopping/type/types;typesͺGoogle.Shopping.Typebproto3'
        , true);

        static::$is_initialized = true;
    }
}

