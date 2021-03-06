<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/CatchPokemonMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.CatchPokemonMessage</code>
 */
class CatchPokemonMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 encounter_id = 1;</code>
     */
    private $encounter_id = 0;
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId pokeball = 2;</code>
     */
    private $pokeball = 0;
    /**
     * <code>double normalized_reticle_size = 3;</code>
     */
    private $normalized_reticle_size = 0.0;
    /**
     * <code>string spawn_point_id = 4;</code>
     */
    private $spawn_point_id = '';
    /**
     * <code>bool hit_pokemon = 5;</code>
     */
    private $hit_pokemon = false;
    /**
     * <code>double spin_modifier = 6;</code>
     */
    private $spin_modifier = 0.0;
    /**
     * <code>double normalized_hit_position = 7;</code>
     */
    private $normalized_hit_position = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\CatchPokemonMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>fixed64 encounter_id = 1;</code>
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * <code>fixed64 encounter_id = 1;</code>
     */
    public function setEncounterId($var)
    {
        GPBUtil::checkUint64($var);
        $this->encounter_id = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId pokeball = 2;</code>
     */
    public function getPokeball()
    {
        return $this->pokeball;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId pokeball = 2;</code>
     */
    public function setPokeball($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->pokeball = $var;
    }

    /**
     * <code>double normalized_reticle_size = 3;</code>
     */
    public function getNormalizedReticleSize()
    {
        return $this->normalized_reticle_size;
    }

    /**
     * <code>double normalized_reticle_size = 3;</code>
     */
    public function setNormalizedReticleSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->normalized_reticle_size = $var;
    }

    /**
     * <code>string spawn_point_id = 4;</code>
     */
    public function getSpawnPointId()
    {
        return $this->spawn_point_id;
    }

    /**
     * <code>string spawn_point_id = 4;</code>
     */
    public function setSpawnPointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->spawn_point_id = $var;
    }

    /**
     * <code>bool hit_pokemon = 5;</code>
     */
    public function getHitPokemon()
    {
        return $this->hit_pokemon;
    }

    /**
     * <code>bool hit_pokemon = 5;</code>
     */
    public function setHitPokemon($var)
    {
        GPBUtil::checkBool($var);
        $this->hit_pokemon = $var;
    }

    /**
     * <code>double spin_modifier = 6;</code>
     */
    public function getSpinModifier()
    {
        return $this->spin_modifier;
    }

    /**
     * <code>double spin_modifier = 6;</code>
     */
    public function setSpinModifier($var)
    {
        GPBUtil::checkDouble($var);
        $this->spin_modifier = $var;
    }

    /**
     * <code>double normalized_hit_position = 7;</code>
     */
    public function getNormalizedHitPosition()
    {
        return $this->normalized_hit_position;
    }

    /**
     * <code>double normalized_hit_position = 7;</code>
     */
    public function setNormalizedHitPosition($var)
    {
        GPBUtil::checkDouble($var);
        $this->normalized_hit_position = $var;
    }

}

