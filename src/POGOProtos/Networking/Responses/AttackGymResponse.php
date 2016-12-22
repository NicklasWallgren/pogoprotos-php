<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/AttackGymResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.AttackGymResponse</code>
 */
class AttackGymResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.AttackGymResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Data.Battle.BattleLog battle_log = 2;</code>
     */
    private $battle_log = null;
    /**
     * <code>string battle_id = 3;</code>
     */
    private $battle_id = '';
    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_defender = 4;</code>
     */
    private $active_defender = null;
    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_attacker = 5;</code>
     */
    private $active_attacker = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\AttackGymResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.AttackGymResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.AttackGymResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\AttackGymResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleLog battle_log = 2;</code>
     */
    public function getBattleLog()
    {
        return $this->battle_log;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattleLog battle_log = 2;</code>
     */
    public function setBattleLog(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattleLog::class);
        $this->battle_log = $var;
    }

    /**
     * <code>string battle_id = 3;</code>
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * <code>string battle_id = 3;</code>
     */
    public function setBattleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->battle_id = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_defender = 4;</code>
     */
    public function getActiveDefender()
    {
        return $this->active_defender;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_defender = 4;</code>
     */
    public function setActiveDefender(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->active_defender = $var;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_attacker = 5;</code>
     */
    public function getActiveAttacker()
    {
        return $this->active_attacker;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_attacker = 5;</code>
     */
    public function setActiveAttacker(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->active_attacker = $var;
    }

}

