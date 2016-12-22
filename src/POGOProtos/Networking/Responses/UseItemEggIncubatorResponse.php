<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemEggIncubatorResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UseItemEggIncubatorResponse</code>
 */
class UseItemEggIncubatorResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.UseItemEggIncubatorResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Inventory.EggIncubator egg_incubator = 2;</code>
     */
    private $egg_incubator = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\UseItemEggIncubatorResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UseItemEggIncubatorResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UseItemEggIncubatorResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\UseItemEggIncubatorResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.EggIncubator egg_incubator = 2;</code>
     */
    public function getEggIncubator()
    {
        return $this->egg_incubator;
    }

    /**
     * <code>.POGOProtos.Inventory.EggIncubator egg_incubator = 2;</code>
     */
    public function setEggIncubator(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\EggIncubator::class);
        $this->egg_incubator = $var;
    }

}

