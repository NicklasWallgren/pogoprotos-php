<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/ItemSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.ItemSettings</code>
 */
class ItemSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    private $item_id = 0;
    /**
     * <code>.POGOProtos.Inventory.Item.ItemType item_type = 2;</code>
     */
    private $item_type = 0;
    /**
     * <code>.POGOProtos.Enums.ItemCategory category = 3;</code>
     */
    private $category = 0;
    /**
     * <code>float drop_freq = 4;</code>
     */
    private $drop_freq = 0.0;
    /**
     * <code>int32 drop_trainer_level = 5;</code>
     */
    private $drop_trainer_level = 0;
    /**
     * <pre>
     * One of the below attributes will be set in the response, the others will be null.
     * </pre>
     *
     * <code>.POGOProtos.Settings.Master.Item.PokeballAttributes pokeball = 6;</code>
     */
    private $pokeball = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.PotionAttributes potion = 7;</code>
     */
    private $potion = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.ReviveAttributes revive = 8;</code>
     */
    private $revive = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.BattleAttributes battle = 9;</code>
     */
    private $battle = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.FoodAttributes food = 10;</code>
     */
    private $food = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes inventory_upgrade = 11;</code>
     */
    private $inventory_upgrade = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.ExperienceBoostAttributes xp_boost = 12;</code>
     */
    private $xp_boost = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.IncenseAttributes incense = 13;</code>
     */
    private $incense = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.EggIncubatorAttributes egg_incubator = 14;</code>
     */
    private $egg_incubator = null;
    /**
     * <code>.POGOProtos.Settings.Master.Item.FortModifierAttributes fort_modifier = 15;</code>
     */
    private $fort_modifier = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\ItemSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemId item_id = 1;</code>
     */
    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemType item_type = 2;</code>
     */
    public function getItemType()
    {
        return $this->item_type;
    }

    /**
     * <code>.POGOProtos.Inventory.Item.ItemType item_type = 2;</code>
     */
    public function setItemType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemType::class);
        $this->item_type = $var;
    }

    /**
     * <code>.POGOProtos.Enums.ItemCategory category = 3;</code>
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * <code>.POGOProtos.Enums.ItemCategory category = 3;</code>
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\ItemCategory::class);
        $this->category = $var;
    }

    /**
     * <code>float drop_freq = 4;</code>
     */
    public function getDropFreq()
    {
        return $this->drop_freq;
    }

    /**
     * <code>float drop_freq = 4;</code>
     */
    public function setDropFreq($var)
    {
        GPBUtil::checkFloat($var);
        $this->drop_freq = $var;
    }

    /**
     * <code>int32 drop_trainer_level = 5;</code>
     */
    public function getDropTrainerLevel()
    {
        return $this->drop_trainer_level;
    }

    /**
     * <code>int32 drop_trainer_level = 5;</code>
     */
    public function setDropTrainerLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->drop_trainer_level = $var;
    }

    /**
     * <pre>
     * One of the below attributes will be set in the response, the others will be null.
     * </pre>
     *
     * <code>.POGOProtos.Settings.Master.Item.PokeballAttributes pokeball = 6;</code>
     */
    public function getPokeball()
    {
        return $this->pokeball;
    }

    /**
     * <pre>
     * One of the below attributes will be set in the response, the others will be null.
     * </pre>
     *
     * <code>.POGOProtos.Settings.Master.Item.PokeballAttributes pokeball = 6;</code>
     */
    public function setPokeball(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\PokeballAttributes::class);
        $this->pokeball = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.PotionAttributes potion = 7;</code>
     */
    public function getPotion()
    {
        return $this->potion;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.PotionAttributes potion = 7;</code>
     */
    public function setPotion(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\PotionAttributes::class);
        $this->potion = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.ReviveAttributes revive = 8;</code>
     */
    public function getRevive()
    {
        return $this->revive;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.ReviveAttributes revive = 8;</code>
     */
    public function setRevive(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\ReviveAttributes::class);
        $this->revive = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.BattleAttributes battle = 9;</code>
     */
    public function getBattle()
    {
        return $this->battle;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.BattleAttributes battle = 9;</code>
     */
    public function setBattle(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\BattleAttributes::class);
        $this->battle = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.FoodAttributes food = 10;</code>
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.FoodAttributes food = 10;</code>
     */
    public function setFood(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\FoodAttributes::class);
        $this->food = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes inventory_upgrade = 11;</code>
     */
    public function getInventoryUpgrade()
    {
        return $this->inventory_upgrade;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes inventory_upgrade = 11;</code>
     */
    public function setInventoryUpgrade(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes::class);
        $this->inventory_upgrade = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.ExperienceBoostAttributes xp_boost = 12;</code>
     */
    public function getXpBoost()
    {
        return $this->xp_boost;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.ExperienceBoostAttributes xp_boost = 12;</code>
     */
    public function setXpBoost(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\ExperienceBoostAttributes::class);
        $this->xp_boost = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.IncenseAttributes incense = 13;</code>
     */
    public function getIncense()
    {
        return $this->incense;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.IncenseAttributes incense = 13;</code>
     */
    public function setIncense(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\IncenseAttributes::class);
        $this->incense = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.EggIncubatorAttributes egg_incubator = 14;</code>
     */
    public function getEggIncubator()
    {
        return $this->egg_incubator;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.EggIncubatorAttributes egg_incubator = 14;</code>
     */
    public function setEggIncubator(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\EggIncubatorAttributes::class);
        $this->egg_incubator = $var;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.FortModifierAttributes fort_modifier = 15;</code>
     */
    public function getFortModifier()
    {
        return $this->fort_modifier;
    }

    /**
     * <code>.POGOProtos.Settings.Master.Item.FortModifierAttributes fort_modifier = 15;</code>
     */
    public function setFortModifier(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\Item\FortModifierAttributes::class);
        $this->fort_modifier = $var;
    }

}

