<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gym/GymMembership.proto

namespace GPBMetadata\POGOProtos\Data\Gym;

class GymMembership
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\PokemonData::initOnce();
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae6020a27504f474f50726f746f732f446174612f47796d2f47796d4d65" .
            "6d626572736869702e70726f746f1213504f474f50726f746f732e446174" .
            "612e47796d1a21504f474f50726f746f732f446174612f506f6b656d6f6e" .
            "446174612e70726f746f1a30504f474f50726f746f732f446174612f506c" .
            "617965722f506c617965725075626c696350726f66696c652e70726f746f" .
            "22c8010a0d47796d4d656d6265727368697012320a0c706f6b656d6f6e5f" .
            "6461746118012001280b321c2e504f474f50726f746f732e446174612e50" .
            "6f6b656d6f6e44617461124b0a16747261696e65725f7075626c69635f70" .
            "726f66696c6518022001280b322b2e504f474f50726f746f732e44617461" .
            "2e506c617965722e506c617965725075626c696350726f66696c6512360a" .
            "10747261696e696e675f706f6b656d6f6e18032001280b321c2e504f474f" .
            "50726f746f732e446174612e506f6b656d6f6e44617461620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}

