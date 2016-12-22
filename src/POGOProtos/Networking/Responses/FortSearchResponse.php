<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/FortSearchResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.FortSearchResponse</code>
 */
class FortSearchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.FortSearchResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemAward items_awarded = 2;</code>
     */
    private $items_awarded;
    /**
     * <code>int32 gems_awarded = 3;</code>
     */
    private $gems_awarded = 0;
    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data_egg = 4;</code>
     */
    private $pokemon_data_egg = null;
    /**
     * <code>int32 experience_awarded = 5;</code>
     */
    private $experience_awarded = 0;
    /**
     * <code>int64 cooldown_complete_timestamp_ms = 6;</code>
     */
    private $cooldown_complete_timestamp_ms = 0;
    /**
     * <code>int32 chain_hack_sequence_number = 7;</code>
     */
    private $chain_hack_sequence_number = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\FortSearchResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.FortSearchResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.FortSearchResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\FortSearchResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemAward items_awarded = 2;</code>
     */
    public function getItemsAwarded()
    {
        return $this->items_awarded;
    }

    /**
     * <code>repeated .POGOProtos.Inventory.Item.ItemAward items_awarded = 2;</code>
     */
    public function setItemsAwarded(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Inventory\Item\ItemAward::class);
        $this->items_awarded = $var;
    }

    /**
     * <code>int32 gems_awarded = 3;</code>
     */
    public function getGemsAwarded()
    {
        return $this->gems_awarded;
    }

    /**
     * <code>int32 gems_awarded = 3;</code>
     */
    public function setGemsAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->gems_awarded = $var;
    }

    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data_egg = 4;</code>
     */
    public function getPokemonDataEgg()
    {
        return $this->pokemon_data_egg;
    }

    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data_egg = 4;</code>
     */
    public function setPokemonDataEgg(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_data_egg = $var;
    }

    /**
     * <code>int32 experience_awarded = 5;</code>
     */
    public function getExperienceAwarded()
    {
        return $this->experience_awarded;
    }

    /**
     * <code>int32 experience_awarded = 5;</code>
     */
    public function setExperienceAwarded($var)
    {
        GPBUtil::checkInt32($var);
        $this->experience_awarded = $var;
    }

    /**
     * <code>int64 cooldown_complete_timestamp_ms = 6;</code>
     */
    public function getCooldownCompleteTimestampMs()
    {
        return $this->cooldown_complete_timestamp_ms;
    }

    /**
     * <code>int64 cooldown_complete_timestamp_ms = 6;</code>
     */
    public function setCooldownCompleteTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->cooldown_complete_timestamp_ms = $var;
    }

    /**
     * <code>int32 chain_hack_sequence_number = 7;</code>
     */
    public function getChainHackSequenceNumber()
    {
        return $this->chain_hack_sequence_number;
    }

    /**
     * <code>int32 chain_hack_sequence_number = 7;</code>
     */
    public function setChainHackSequenceNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->chain_hack_sequence_number = $var;
    }

}

