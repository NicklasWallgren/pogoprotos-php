<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleParticipant.proto

namespace POGOProtos\Data\Battle;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Battle.BattleParticipant</code>
 */
class BattleParticipant extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1;</code>
     */
    private $active_pokemon = null;
    /**
     * <code>.POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2;</code>
     */
    private $trainer_public_profile = null;
    /**
     * <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3;</code>
     */
    private $reverse_pokemon;
    /**
     * <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4;</code>
     */
    private $defeated_pokemon;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Battle\BattleParticipant::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1;</code>
     */
    public function getActivePokemon()
    {
        return $this->active_pokemon;
    }

    /**
     * <code>.POGOProtos.Data.Battle.BattlePokemonInfo active_pokemon = 1;</code>
     */
    public function setActivePokemon(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->active_pokemon = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2;</code>
     */
    public function getTrainerPublicProfile()
    {
        return $this->trainer_public_profile;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerPublicProfile trainer_public_profile = 2;</code>
     */
    public function setTrainerPublicProfile(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerPublicProfile::class);
        $this->trainer_public_profile = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3;</code>
     */
    public function getReversePokemon()
    {
        return $this->reverse_pokemon;
    }

    /**
     * <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo reverse_pokemon = 3;</code>
     */
    public function setReversePokemon(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->reverse_pokemon = $var;
    }

    /**
     * <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4;</code>
     */
    public function getDefeatedPokemon()
    {
        return $this->defeated_pokemon;
    }

    /**
     * <code>repeated .POGOProtos.Data.Battle.BattlePokemonInfo defeated_pokemon = 4;</code>
     */
    public function setDefeatedPokemon(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Battle\BattlePokemonInfo::class);
        $this->defeated_pokemon = $var;
    }

}

