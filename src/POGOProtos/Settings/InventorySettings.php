<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/InventorySettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.InventorySettings</code>
 */
class InventorySettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 max_pokemon = 1;</code>
     */
    private $max_pokemon = 0;
    /**
     * <code>int32 max_bag_items = 2;</code>
     */
    private $max_bag_items = 0;
    /**
     * <code>int32 base_pokemon = 3;</code>
     */
    private $base_pokemon = 0;
    /**
     * <code>int32 base_bag_items = 4;</code>
     */
    private $base_bag_items = 0;
    /**
     * <code>int32 base_eggs = 5;</code>
     */
    private $base_eggs = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\InventorySettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 max_pokemon = 1;</code>
     */
    public function getMaxPokemon()
    {
        return $this->max_pokemon;
    }

    /**
     * <code>int32 max_pokemon = 1;</code>
     */
    public function setMaxPokemon($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_pokemon = $var;
    }

    /**
     * <code>int32 max_bag_items = 2;</code>
     */
    public function getMaxBagItems()
    {
        return $this->max_bag_items;
    }

    /**
     * <code>int32 max_bag_items = 2;</code>
     */
    public function setMaxBagItems($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_bag_items = $var;
    }

    /**
     * <code>int32 base_pokemon = 3;</code>
     */
    public function getBasePokemon()
    {
        return $this->base_pokemon;
    }

    /**
     * <code>int32 base_pokemon = 3;</code>
     */
    public function setBasePokemon($var)
    {
        GPBUtil::checkInt32($var);
        $this->base_pokemon = $var;
    }

    /**
     * <code>int32 base_bag_items = 4;</code>
     */
    public function getBaseBagItems()
    {
        return $this->base_bag_items;
    }

    /**
     * <code>int32 base_bag_items = 4;</code>
     */
    public function setBaseBagItems($var)
    {
        GPBUtil::checkInt32($var);
        $this->base_bag_items = $var;
    }

    /**
     * <code>int32 base_eggs = 5;</code>
     */
    public function getBaseEggs()
    {
        return $this->base_eggs;
    }

    /**
     * <code>int32 base_eggs = 5;</code>
     */
    public function setBaseEggs($var)
    {
        GPBUtil::checkInt32($var);
        $this->base_eggs = $var;
    }

}

