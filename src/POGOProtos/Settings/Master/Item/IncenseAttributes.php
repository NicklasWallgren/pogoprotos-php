<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/IncenseAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.Item.IncenseAttributes</code>
 */
class IncenseAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 incense_lifetime_seconds = 1;</code>
     */
    private $incense_lifetime_seconds = 0;
    /**
     * <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    private $pokemon_type;
    /**
     * <code>float pokemon_incense_type_probability = 3;</code>
     */
    private $pokemon_incense_type_probability = 0.0;
    /**
     * <code>int32 standing_time_between_encounters_seconds = 4;</code>
     */
    private $standing_time_between_encounters_seconds = 0;
    /**
     * <code>int32 moving_time_between_encounter_seconds = 5;</code>
     */
    private $moving_time_between_encounter_seconds = 0;
    /**
     * <code>int32 distance_required_for_shorter_interval_meters = 6;</code>
     */
    private $distance_required_for_shorter_interval_meters = 0;
    /**
     * <code>int32 pokemon_attracted_length_sec = 7;</code>
     */
    private $pokemon_attracted_length_sec = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\Item\IncenseAttributes::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 incense_lifetime_seconds = 1;</code>
     */
    public function getIncenseLifetimeSeconds()
    {
        return $this->incense_lifetime_seconds;
    }

    /**
     * <code>int32 incense_lifetime_seconds = 1;</code>
     */
    public function setIncenseLifetimeSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->incense_lifetime_seconds = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    public function getPokemonType()
    {
        return $this->pokemon_type;
    }

    /**
     * <code>repeated .POGOProtos.Enums.PokemonType pokemon_type = 2;</code>
     */
    public function setPokemonType(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\PokemonType::class);
        $this->pokemon_type = $var;
    }

    /**
     * <code>float pokemon_incense_type_probability = 3;</code>
     */
    public function getPokemonIncenseTypeProbability()
    {
        return $this->pokemon_incense_type_probability;
    }

    /**
     * <code>float pokemon_incense_type_probability = 3;</code>
     */
    public function setPokemonIncenseTypeProbability($var)
    {
        GPBUtil::checkFloat($var);
        $this->pokemon_incense_type_probability = $var;
    }

    /**
     * <code>int32 standing_time_between_encounters_seconds = 4;</code>
     */
    public function getStandingTimeBetweenEncountersSeconds()
    {
        return $this->standing_time_between_encounters_seconds;
    }

    /**
     * <code>int32 standing_time_between_encounters_seconds = 4;</code>
     */
    public function setStandingTimeBetweenEncountersSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->standing_time_between_encounters_seconds = $var;
    }

    /**
     * <code>int32 moving_time_between_encounter_seconds = 5;</code>
     */
    public function getMovingTimeBetweenEncounterSeconds()
    {
        return $this->moving_time_between_encounter_seconds;
    }

    /**
     * <code>int32 moving_time_between_encounter_seconds = 5;</code>
     */
    public function setMovingTimeBetweenEncounterSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->moving_time_between_encounter_seconds = $var;
    }

    /**
     * <code>int32 distance_required_for_shorter_interval_meters = 6;</code>
     */
    public function getDistanceRequiredForShorterIntervalMeters()
    {
        return $this->distance_required_for_shorter_interval_meters;
    }

    /**
     * <code>int32 distance_required_for_shorter_interval_meters = 6;</code>
     */
    public function setDistanceRequiredForShorterIntervalMeters($var)
    {
        GPBUtil::checkInt32($var);
        $this->distance_required_for_shorter_interval_meters = $var;
    }

    /**
     * <code>int32 pokemon_attracted_length_sec = 7;</code>
     */
    public function getPokemonAttractedLengthSec()
    {
        return $this->pokemon_attracted_length_sec;
    }

    /**
     * <code>int32 pokemon_attracted_length_sec = 7;</code>
     */
    public function setPokemonAttractedLengthSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemon_attracted_length_sec = $var;
    }

}

