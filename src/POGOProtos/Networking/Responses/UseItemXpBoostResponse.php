<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemXpBoostResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UseItemXpBoostResponse</code>
 */
class UseItemXpBoostResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.UseItemXpBoostResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Inventory.AppliedItems applied_items = 2;</code>
     */
    private $applied_items = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\UseItemXpBoostResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UseItemXpBoostResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UseItemXpBoostResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\UseItemXpBoostResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.AppliedItems applied_items = 2;</code>
     */
    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    /**
     * <code>.POGOProtos.Inventory.AppliedItems applied_items = 2;</code>
     */
    public function setAppliedItems(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\AppliedItems::class);
        $this->applied_items = $var;
    }

}

