<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/EggIncubatorAttributes.proto

namespace GPBMetadata\POGOProtos\Settings\Master\Item;

class EggIncubatorAttributes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\EggIncubatorType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a020a3c504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f4974656d2f456767496e63756261746f72417474726962757465732e" .
            "70726f746f121f504f474f50726f746f732e53657474696e67732e4d6173" .
            "7465722e4974656d1a2b504f474f50726f746f732f496e76656e746f7279" .
            "2f456767496e63756261746f72547970652e70726f746f2283010a164567" .
            "67496e63756261746f7241747472696275746573123e0a0e696e63756261" .
            "746f725f7479706518012001280e32262e504f474f50726f746f732e496e" .
            "76656e746f72792e456767496e63756261746f7254797065120c0a047573" .
            "6573180220012805121b0a1364697374616e63655f6d756c7469706c6965" .
            "72180320012802620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
