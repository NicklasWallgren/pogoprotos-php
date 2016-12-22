<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetBuddyWalkedResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetBuddyWalkedResponse</code>
 */
class GetBuddyWalkedResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 2;</code>
     */
    private $family_candy_id = 0;
    /**
     * <code>int32 candy_earned_count = 3;</code>
     */
    private $candy_earned_count = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\GetBuddyWalkedResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool success = 1;</code>
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * <code>bool success = 1;</code>
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 2;</code>
     */
    public function getFamilyCandyId()
    {
        return $this->family_candy_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId family_candy_id = 2;</code>
     */
    public function setFamilyCandyId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonFamilyId::class);
        $this->family_candy_id = $var;
    }

    /**
     * <code>int32 candy_earned_count = 3;</code>
     */
    public function getCandyEarnedCount()
    {
        return $this->candy_earned_count;
    }

    /**
     * <code>int32 candy_earned_count = 3;</code>
     */
    public function setCandyEarnedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->candy_earned_count = $var;
    }

}

