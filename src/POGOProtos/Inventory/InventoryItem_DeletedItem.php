<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/InventoryItem.proto

namespace POGOProtos\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Inventory.InventoryItem.DeletedItem</code>
 */
class InventoryItem_DeletedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Inventory\InventoryItem::initOnce();
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

}

