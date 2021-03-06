<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryKey.proto

namespace POGOProtos\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Inventory.InventoryKey</code>
 */
class InventoryKey extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 2;</code>
     */
    private $item = 0;
    /**
     * <code>int32 pokedex_entry_id = 3;</code>
     */
    private $pokedex_entry_id = 0;
    /**
     * <code>bool player_stats = 4;</code>
     */
    private $player_stats = false;
    /**
     * <code>bool player_currency = 5;</code>
     */
    private $player_currency = false;
    /**
     * <code>bool player_camera = 6;</code>
     */
    private $player_camera = false;
    /**
     * <code>bool inventory_upgrades = 7;</code>
     */
    private $inventory_upgrades = false;
    /**
     * <code>bool applied_items = 8;</code>
     */
    private $applied_items = false;
    /**
     * <code>bool egg_incubators = 9;</code>
     */
    private $egg_incubators = false;
    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId pokemon_family_id = 10;</code>
     */
    private $pokemon_family_id = 0;
    /**
     * <code>.POGOProtos.Enums.QuestType quest_type = 11;</code>
     */
    private $quest_type = 0;
    /**
     * <code>string avatar_template_id = 12;</code>
     */
    private $avatar_template_id = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Inventory\InventoryKey::initOnce();
        parent::__construct();
    }

    /**
     * <code>fixed64 pokemon_id = 1;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <code>fixed64 pokemon_id = 1;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 2;</code>
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item = 2;</code>
     */
    public function setItem($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item = $var;
    }

    /**
     * <code>int32 pokedex_entry_id = 3;</code>
     */
    public function getPokedexEntryId()
    {
        return $this->pokedex_entry_id;
    }

    /**
     * <code>int32 pokedex_entry_id = 3;</code>
     */
    public function setPokedexEntryId($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokedex_entry_id = $var;
    }

    /**
     * <code>bool player_stats = 4;</code>
     */
    public function getPlayerStats()
    {
        return $this->player_stats;
    }

    /**
     * <code>bool player_stats = 4;</code>
     */
    public function setPlayerStats($var)
    {
        GPBUtil::checkBool($var);
        $this->player_stats = $var;
    }

    /**
     * <code>bool player_currency = 5;</code>
     */
    public function getPlayerCurrency()
    {
        return $this->player_currency;
    }

    /**
     * <code>bool player_currency = 5;</code>
     */
    public function setPlayerCurrency($var)
    {
        GPBUtil::checkBool($var);
        $this->player_currency = $var;
    }

    /**
     * <code>bool player_camera = 6;</code>
     */
    public function getPlayerCamera()
    {
        return $this->player_camera;
    }

    /**
     * <code>bool player_camera = 6;</code>
     */
    public function setPlayerCamera($var)
    {
        GPBUtil::checkBool($var);
        $this->player_camera = $var;
    }

    /**
     * <code>bool inventory_upgrades = 7;</code>
     */
    public function getInventoryUpgrades()
    {
        return $this->inventory_upgrades;
    }

    /**
     * <code>bool inventory_upgrades = 7;</code>
     */
    public function setInventoryUpgrades($var)
    {
        GPBUtil::checkBool($var);
        $this->inventory_upgrades = $var;
    }

    /**
     * <code>bool applied_items = 8;</code>
     */
    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    /**
     * <code>bool applied_items = 8;</code>
     */
    public function setAppliedItems($var)
    {
        GPBUtil::checkBool($var);
        $this->applied_items = $var;
    }

    /**
     * <code>bool egg_incubators = 9;</code>
     */
    public function getEggIncubators()
    {
        return $this->egg_incubators;
    }

    /**
     * <code>bool egg_incubators = 9;</code>
     */
    public function setEggIncubators($var)
    {
        GPBUtil::checkBool($var);
        $this->egg_incubators = $var;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId pokemon_family_id = 10;</code>
     */
    public function getPokemonFamilyId()
    {
        return $this->pokemon_family_id;
    }

    /**
     * <code>.POGOProtos.Enums.PokemonFamilyId pokemon_family_id = 10;</code>
     */
    public function setPokemonFamilyId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonFamilyId::class);
        $this->pokemon_family_id = $var;
    }

    /**
     * <code>.POGOProtos.Enums.QuestType quest_type = 11;</code>
     */
    public function getQuestType()
    {
        return $this->quest_type;
    }

    /**
     * <code>.POGOProtos.Enums.QuestType quest_type = 11;</code>
     */
    public function setQuestType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\QuestType::class);
        $this->quest_type = $var;
    }

    /**
     * <code>string avatar_template_id = 12;</code>
     */
    public function getAvatarTemplateId()
    {
        return $this->avatar_template_id;
    }

    /**
     * <code>string avatar_template_id = 12;</code>
     */
    public function setAvatarTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar_template_id = $var;
    }

}

