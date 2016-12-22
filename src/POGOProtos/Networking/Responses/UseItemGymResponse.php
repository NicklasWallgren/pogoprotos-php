<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/UseItemGymResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UseItemGymResponse</code>
 */
class UseItemGymResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.UseItemGymResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <pre>
     * Gym Points (?)
     * </pre>
     *
     * <code>int64 updated_gp = 2;</code>
     */
    private $updated_gp = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\UseItemGymResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UseItemGymResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UseItemGymResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\UseItemGymResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <pre>
     * Gym Points (?)
     * </pre>
     *
     * <code>int64 updated_gp = 2;</code>
     */
    public function getUpdatedGp()
    {
        return $this->updated_gp;
    }

    /**
     * <pre>
     * Gym Points (?)
     * </pre>
     *
     * <code>int64 updated_gp = 2;</code>
     */
    public function setUpdatedGp($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated_gp = $var;
    }

}

