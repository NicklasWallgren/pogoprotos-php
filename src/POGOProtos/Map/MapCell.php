<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/MapCell.proto

namespace POGOProtos\Map;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Map.MapCell</code>
 */
class MapCell extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * S2 geographic area that the cell covers (http://s2map.com/) (https://code.google.com/archive/p/s2-geometry-library/)
     * </pre>
     *
     * <code>uint64 s2_cell_id = 1;</code>
     */
    private $s2_cell_id = 0;
    /**
     * <code>int64 current_timestamp_ms = 2;</code>
     */
    private $current_timestamp_ms = 0;
    /**
     * <code>repeated .POGOProtos.Map.Fort.FortData forts = 3;</code>
     */
    private $forts;
    /**
     * <code>repeated .POGOProtos.Map.SpawnPoint spawn_points = 4;</code>
     */
    private $spawn_points;
    /**
     * <code>repeated string deleted_objects = 6;</code>
     */
    private $deleted_objects;
    /**
     * <code>bool is_truncated_list = 7;</code>
     */
    private $is_truncated_list = false;
    /**
     * <code>repeated .POGOProtos.Map.Fort.FortSummary fort_summaries = 8;</code>
     */
    private $fort_summaries;
    /**
     * <code>repeated .POGOProtos.Map.SpawnPoint decimated_spawn_points = 9;</code>
     */
    private $decimated_spawn_points;
    /**
     * <pre>
     * Pokemon within 2 steps or less.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.WildPokemon wild_pokemons = 5;</code>
     */
    private $wild_pokemons;
    /**
     * <pre>
     * Pokemon within 1 step or none.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.MapPokemon catchable_pokemons = 10;</code>
     */
    private $catchable_pokemons;
    /**
     * <pre>
     * Pokemon farther away than 2 steps, but still in the area.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.NearbyPokemon nearby_pokemons = 11;</code>
     */
    private $nearby_pokemons;

    public function __construct() {
        \GPBMetadata\POGOProtos\Map\MapCell::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * S2 geographic area that the cell covers (http://s2map.com/) (https://code.google.com/archive/p/s2-geometry-library/)
     * </pre>
     *
     * <code>uint64 s2_cell_id = 1;</code>
     */
    public function getS2CellId()
    {
        return $this->s2_cell_id;
    }

    /**
     * <pre>
     * S2 geographic area that the cell covers (http://s2map.com/) (https://code.google.com/archive/p/s2-geometry-library/)
     * </pre>
     *
     * <code>uint64 s2_cell_id = 1;</code>
     */
    public function setS2CellId($var)
    {
        GPBUtil::checkUint64($var);
        $this->s2_cell_id = $var;
    }

    /**
     * <code>int64 current_timestamp_ms = 2;</code>
     */
    public function getCurrentTimestampMs()
    {
        return $this->current_timestamp_ms;
    }

    /**
     * <code>int64 current_timestamp_ms = 2;</code>
     */
    public function setCurrentTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->current_timestamp_ms = $var;
    }

    /**
     * <code>repeated .POGOProtos.Map.Fort.FortData forts = 3;</code>
     */
    public function getForts()
    {
        return $this->forts;
    }

    /**
     * <code>repeated .POGOProtos.Map.Fort.FortData forts = 3;</code>
     */
    public function setForts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\Fort\FortData::class);
        $this->forts = $var;
    }

    /**
     * <code>repeated .POGOProtos.Map.SpawnPoint spawn_points = 4;</code>
     */
    public function getSpawnPoints()
    {
        return $this->spawn_points;
    }

    /**
     * <code>repeated .POGOProtos.Map.SpawnPoint spawn_points = 4;</code>
     */
    public function setSpawnPoints(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\SpawnPoint::class);
        $this->spawn_points = $var;
    }

    /**
     * <code>repeated string deleted_objects = 6;</code>
     */
    public function getDeletedObjects()
    {
        return $this->deleted_objects;
    }

    /**
     * <code>repeated string deleted_objects = 6;</code>
     */
    public function setDeletedObjects(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->deleted_objects = $var;
    }

    /**
     * <code>bool is_truncated_list = 7;</code>
     */
    public function getIsTruncatedList()
    {
        return $this->is_truncated_list;
    }

    /**
     * <code>bool is_truncated_list = 7;</code>
     */
    public function setIsTruncatedList($var)
    {
        GPBUtil::checkBool($var);
        $this->is_truncated_list = $var;
    }

    /**
     * <code>repeated .POGOProtos.Map.Fort.FortSummary fort_summaries = 8;</code>
     */
    public function getFortSummaries()
    {
        return $this->fort_summaries;
    }

    /**
     * <code>repeated .POGOProtos.Map.Fort.FortSummary fort_summaries = 8;</code>
     */
    public function setFortSummaries(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\Fort\FortSummary::class);
        $this->fort_summaries = $var;
    }

    /**
     * <code>repeated .POGOProtos.Map.SpawnPoint decimated_spawn_points = 9;</code>
     */
    public function getDecimatedSpawnPoints()
    {
        return $this->decimated_spawn_points;
    }

    /**
     * <code>repeated .POGOProtos.Map.SpawnPoint decimated_spawn_points = 9;</code>
     */
    public function setDecimatedSpawnPoints(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\SpawnPoint::class);
        $this->decimated_spawn_points = $var;
    }

    /**
     * <pre>
     * Pokemon within 2 steps or less.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.WildPokemon wild_pokemons = 5;</code>
     */
    public function getWildPokemons()
    {
        return $this->wild_pokemons;
    }

    /**
     * <pre>
     * Pokemon within 2 steps or less.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.WildPokemon wild_pokemons = 5;</code>
     */
    public function setWildPokemons(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\Pokemon\WildPokemon::class);
        $this->wild_pokemons = $var;
    }

    /**
     * <pre>
     * Pokemon within 1 step or none.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.MapPokemon catchable_pokemons = 10;</code>
     */
    public function getCatchablePokemons()
    {
        return $this->catchable_pokemons;
    }

    /**
     * <pre>
     * Pokemon within 1 step or none.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.MapPokemon catchable_pokemons = 10;</code>
     */
    public function setCatchablePokemons(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\Pokemon\MapPokemon::class);
        $this->catchable_pokemons = $var;
    }

    /**
     * <pre>
     * Pokemon farther away than 2 steps, but still in the area.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.NearbyPokemon nearby_pokemons = 11;</code>
     */
    public function getNearbyPokemons()
    {
        return $this->nearby_pokemons;
    }

    /**
     * <pre>
     * Pokemon farther away than 2 steps, but still in the area.
     * </pre>
     *
     * <code>repeated .POGOProtos.Map.Pokemon.NearbyPokemon nearby_pokemons = 11;</code>
     */
    public function setNearbyPokemons(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\Pokemon\NearbyPokemon::class);
        $this->nearby_pokemons = $var;
    }

}

