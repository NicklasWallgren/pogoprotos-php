<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CollectDailyDefenderBonusResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse</code>
 */
class CollectDailyDefenderBonusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>repeated string currency_type = 2;</code>
     */
    private $currency_type;
    /**
     * <code>repeated int32 currency_awarded = 3;</code>
     */
    private $currency_awarded;
    /**
     * <code>int32 defenders_count = 4;</code>
     */
    private $defenders_count = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\CollectDailyDefenderBonusResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.CollectDailyDefenderBonusResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\CollectDailyDefenderBonusResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>repeated string currency_type = 2;</code>
     */
    public function getCurrencyType()
    {
        return $this->currency_type;
    }

    /**
     * <code>repeated string currency_type = 2;</code>
     */
    public function setCurrencyType(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->currency_type = $var;
    }

    /**
     * <code>repeated int32 currency_awarded = 3;</code>
     */
    public function getCurrencyAwarded()
    {
        return $this->currency_awarded;
    }

    /**
     * <code>repeated int32 currency_awarded = 3;</code>
     */
    public function setCurrencyAwarded(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->currency_awarded = $var;
    }

    /**
     * <code>int32 defenders_count = 4;</code>
     */
    public function getDefendersCount()
    {
        return $this->defenders_count;
    }

    /**
     * <code>int32 defenders_count = 4;</code>
     */
    public function setDefendersCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->defenders_count = $var;
    }

}

