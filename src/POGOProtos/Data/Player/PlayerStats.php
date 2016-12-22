<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerStats.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Player.PlayerStats</code>
 */
class PlayerStats extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 level = 1;</code>
     */
    private $level = 0;
    /**
     * <code>int64 experience = 2;</code>
     */
    private $experience = 0;
    /**
     * <code>int64 prev_level_xp = 3;</code>
     */
    private $prev_level_xp = 0;
    /**
     * <code>int64 next_level_xp = 4;</code>
     */
    private $next_level_xp = 0;
    /**
     * <code>float km_walked = 5;</code>
     */
    private $km_walked = 0.0;
    /**
     * <code>int32 pokemons_encountered = 6;</code>
     */
    private $pokemons_encountered = 0;
    /**
     * <code>int32 unique_pokedex_entries = 7;</code>
     */
    private $unique_pokedex_entries = 0;
    /**
     * <code>int32 pokemons_captured = 8;</code>
     */
    private $pokemons_captured = 0;
    /**
     * <code>int32 evolutions = 9;</code>
     */
    private $evolutions = 0;
    /**
     * <code>int32 poke_stop_visits = 10;</code>
     */
    private $poke_stop_visits = 0;
    /**
     * <code>int32 pokeballs_thrown = 11;</code>
     */
    private $pokeballs_thrown = 0;
    /**
     * <code>int32 eggs_hatched = 12;</code>
     */
    private $eggs_hatched = 0;
    /**
     * <code>int32 big_magikarp_caught = 13;</code>
     */
    private $big_magikarp_caught = 0;
    /**
     * <code>int32 battle_attack_won = 14;</code>
     */
    private $battle_attack_won = 0;
    /**
     * <code>int32 battle_attack_total = 15;</code>
     */
    private $battle_attack_total = 0;
    /**
     * <code>int32 battle_defended_won = 16;</code>
     */
    private $battle_defended_won = 0;
    /**
     * <code>int32 battle_training_won = 17;</code>
     */
    private $battle_training_won = 0;
    /**
     * <code>int32 battle_training_total = 18;</code>
     */
    private $battle_training_total = 0;
    /**
     * <code>int32 prestige_raised_total = 19;</code>
     */
    private $prestige_raised_total = 0;
    /**
     * <code>int32 prestige_dropped_total = 20;</code>
     */
    private $prestige_dropped_total = 0;
    /**
     * <code>int32 pokemon_deployed = 21;</code>
     */
    private $pokemon_deployed = 0;
    /**
     * <code>repeated int32 pokemon_caught_by_type = 22;</code>
     */
    private $pokemon_caught_by_type;
    /**
     * <code>int32 small_rattata_caught = 23;</code>
     */
    private $small_rattata_caught = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Player\PlayerStats::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 level = 1;</code>
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * <code>int32 level = 1;</code>
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->level = $var;
    }

    /**
     * <code>int64 experience = 2;</code>
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * <code>int64 experience = 2;</code>
     */
    public function setExperience($var)
    {
        GPBUtil::checkInt64($var);
        $this->experience = $var;
    }

    /**
     * <code>int64 prev_level_xp = 3;</code>
     */
    public function getPrevLevelXp()
    {
        return $this->prev_level_xp;
    }

    /**
     * <code>int64 prev_level_xp = 3;</code>
     */
    public function setPrevLevelXp($var)
    {
        GPBUtil::checkInt64($var);
        $this->prev_level_xp = $var;
    }

    /**
     * <code>int64 next_level_xp = 4;</code>
     */
    public function getNextLevelXp()
    {
        return $this->next_level_xp;
    }

    /**
     * <code>int64 next_level_xp = 4;</code>
     */
    public function setNextLevelXp($var)
    {
        GPBUtil::checkInt64($var);
        $this->next_level_xp = $var;
    }

    /**
     * <code>float km_walked = 5;</code>
     */
    public function getKmWalked()
    {
        return $this->km_walked;
    }

    /**
     * <code>float km_walked = 5;</code>
     */
    public function setKmWalked($var)
    {
        GPBUtil::checkFloat($var);
        $this->km_walked = $var;
    }

    /**
     * <code>int32 pokemons_encountered = 6;</code>
     */
    public function getPokemonsEncountered()
    {
        return $this->pokemons_encountered;
    }

    /**
     * <code>int32 pokemons_encountered = 6;</code>
     */
    public function setPokemonsEncountered($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemons_encountered = $var;
    }

    /**
     * <code>int32 unique_pokedex_entries = 7;</code>
     */
    public function getUniquePokedexEntries()
    {
        return $this->unique_pokedex_entries;
    }

    /**
     * <code>int32 unique_pokedex_entries = 7;</code>
     */
    public function setUniquePokedexEntries($var)
    {
        GPBUtil::checkInt32($var);
        $this->unique_pokedex_entries = $var;
    }

    /**
     * <code>int32 pokemons_captured = 8;</code>
     */
    public function getPokemonsCaptured()
    {
        return $this->pokemons_captured;
    }

    /**
     * <code>int32 pokemons_captured = 8;</code>
     */
    public function setPokemonsCaptured($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemons_captured = $var;
    }

    /**
     * <code>int32 evolutions = 9;</code>
     */
    public function getEvolutions()
    {
        return $this->evolutions;
    }

    /**
     * <code>int32 evolutions = 9;</code>
     */
    public function setEvolutions($var)
    {
        GPBUtil::checkInt32($var);
        $this->evolutions = $var;
    }

    /**
     * <code>int32 poke_stop_visits = 10;</code>
     */
    public function getPokeStopVisits()
    {
        return $this->poke_stop_visits;
    }

    /**
     * <code>int32 poke_stop_visits = 10;</code>
     */
    public function setPokeStopVisits($var)
    {
        GPBUtil::checkInt32($var);
        $this->poke_stop_visits = $var;
    }

    /**
     * <code>int32 pokeballs_thrown = 11;</code>
     */
    public function getPokeballsThrown()
    {
        return $this->pokeballs_thrown;
    }

    /**
     * <code>int32 pokeballs_thrown = 11;</code>
     */
    public function setPokeballsThrown($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokeballs_thrown = $var;
    }

    /**
     * <code>int32 eggs_hatched = 12;</code>
     */
    public function getEggsHatched()
    {
        return $this->eggs_hatched;
    }

    /**
     * <code>int32 eggs_hatched = 12;</code>
     */
    public function setEggsHatched($var)
    {
        GPBUtil::checkInt32($var);
        $this->eggs_hatched = $var;
    }

    /**
     * <code>int32 big_magikarp_caught = 13;</code>
     */
    public function getBigMagikarpCaught()
    {
        return $this->big_magikarp_caught;
    }

    /**
     * <code>int32 big_magikarp_caught = 13;</code>
     */
    public function setBigMagikarpCaught($var)
    {
        GPBUtil::checkInt32($var);
        $this->big_magikarp_caught = $var;
    }

    /**
     * <code>int32 battle_attack_won = 14;</code>
     */
    public function getBattleAttackWon()
    {
        return $this->battle_attack_won;
    }

    /**
     * <code>int32 battle_attack_won = 14;</code>
     */
    public function setBattleAttackWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_attack_won = $var;
    }

    /**
     * <code>int32 battle_attack_total = 15;</code>
     */
    public function getBattleAttackTotal()
    {
        return $this->battle_attack_total;
    }

    /**
     * <code>int32 battle_attack_total = 15;</code>
     */
    public function setBattleAttackTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_attack_total = $var;
    }

    /**
     * <code>int32 battle_defended_won = 16;</code>
     */
    public function getBattleDefendedWon()
    {
        return $this->battle_defended_won;
    }

    /**
     * <code>int32 battle_defended_won = 16;</code>
     */
    public function setBattleDefendedWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_defended_won = $var;
    }

    /**
     * <code>int32 battle_training_won = 17;</code>
     */
    public function getBattleTrainingWon()
    {
        return $this->battle_training_won;
    }

    /**
     * <code>int32 battle_training_won = 17;</code>
     */
    public function setBattleTrainingWon($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_training_won = $var;
    }

    /**
     * <code>int32 battle_training_total = 18;</code>
     */
    public function getBattleTrainingTotal()
    {
        return $this->battle_training_total;
    }

    /**
     * <code>int32 battle_training_total = 18;</code>
     */
    public function setBattleTrainingTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->battle_training_total = $var;
    }

    /**
     * <code>int32 prestige_raised_total = 19;</code>
     */
    public function getPrestigeRaisedTotal()
    {
        return $this->prestige_raised_total;
    }

    /**
     * <code>int32 prestige_raised_total = 19;</code>
     */
    public function setPrestigeRaisedTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->prestige_raised_total = $var;
    }

    /**
     * <code>int32 prestige_dropped_total = 20;</code>
     */
    public function getPrestigeDroppedTotal()
    {
        return $this->prestige_dropped_total;
    }

    /**
     * <code>int32 prestige_dropped_total = 20;</code>
     */
    public function setPrestigeDroppedTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->prestige_dropped_total = $var;
    }

    /**
     * <code>int32 pokemon_deployed = 21;</code>
     */
    public function getPokemonDeployed()
    {
        return $this->pokemon_deployed;
    }

    /**
     * <code>int32 pokemon_deployed = 21;</code>
     */
    public function setPokemonDeployed($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokemon_deployed = $var;
    }

    /**
     * <code>repeated int32 pokemon_caught_by_type = 22;</code>
     */
    public function getPokemonCaughtByType()
    {
        return $this->pokemon_caught_by_type;
    }

    /**
     * <code>repeated int32 pokemon_caught_by_type = 22;</code>
     */
    public function setPokemonCaughtByType(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->pokemon_caught_by_type = $var;
    }

    /**
     * <code>int32 small_rattata_caught = 23;</code>
     */
    public function getSmallRattataCaught()
    {
        return $this->small_rattata_caught;
    }

    /**
     * <code>int32 small_rattata_caught = 23;</code>
     */
    public function setSmallRattataCaught($var)
    {
        GPBUtil::checkInt32($var);
        $this->small_rattata_caught = $var;
    }

}

