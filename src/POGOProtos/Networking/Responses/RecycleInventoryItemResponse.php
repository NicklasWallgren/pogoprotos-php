<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/RecycleInventoryItemResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.RecycleInventoryItemResponse</code>
 */
class RecycleInventoryItemResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>int32 new_count = 2;</code>
     */
    private $new_count = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\RecycleInventoryItemResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.RecycleInventoryItemResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\RecycleInventoryItemResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>int32 new_count = 2;</code>
     */
    public function getNewCount()
    {
        return $this->new_count;
    }

    /**
     * <code>int32 new_count = 2;</code>
     */
    public function setNewCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_count = $var;
    }

}

