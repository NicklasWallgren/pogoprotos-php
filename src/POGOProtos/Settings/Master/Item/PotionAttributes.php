<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/PotionAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.Item.PotionAttributes</code>
 */
class PotionAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>float sta_percent = 1;</code>
     */
    private $sta_percent = 0.0;
    /**
     * <code>int32 sta_amount = 2;</code>
     */
    private $sta_amount = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\Item\PotionAttributes::initOnce();
        parent::__construct();
    }

    /**
     * <code>float sta_percent = 1;</code>
     */
    public function getStaPercent()
    {
        return $this->sta_percent;
    }

    /**
     * <code>float sta_percent = 1;</code>
     */
    public function setStaPercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->sta_percent = $var;
    }

    /**
     * <code>int32 sta_amount = 2;</code>
     */
    public function getStaAmount()
    {
        return $this->sta_amount;
    }

    /**
     * <code>int32 sta_amount = 2;</code>
     */
    public function setStaAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->sta_amount = $var;
    }

}

