<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleParticipant.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class BattleParticipant
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattlePokemonInfo::initOnce();
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae1030a2e504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c655061727469636970616e742e70726f746f1216504f474f50726f" .
            "746f732e446174612e426174746c651a2e504f474f50726f746f732f4461" .
            "74612f426174746c652f426174746c65506f6b656d6f6e496e666f2e7072" .
            "6f746f1a30504f474f50726f746f732f446174612f506c617965722f506c" .
            "617965725075626c696350726f66696c652e70726f746f22ac020a114261" .
            "74746c655061727469636970616e7412410a0e6163746976655f706f6b65" .
            "6d6f6e18012001280b32292e504f474f50726f746f732e446174612e4261" .
            "74746c652e426174746c65506f6b656d6f6e496e666f124b0a1674726169" .
            "6e65725f7075626c69635f70726f66696c6518022001280b322b2e504f47" .
            "4f50726f746f732e446174612e506c617965722e506c617965725075626c" .
            "696350726f66696c6512420a0f726576657273655f706f6b656d6f6e1803" .
            "2003280b32292e504f474f50726f746f732e446174612e426174746c652e" .
            "426174746c65506f6b656d6f6e496e666f12430a1064656665617465645f" .
            "706f6b656d6f6e18042003280b32292e504f474f50726f746f732e446174" .
            "612e426174746c652e426174746c65506f6b656d6f6e496e666f62067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}

