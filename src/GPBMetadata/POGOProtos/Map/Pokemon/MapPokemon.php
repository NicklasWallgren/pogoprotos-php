<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Pokemon/MapPokemon.proto

namespace GPBMetadata\POGOProtos\Map\Pokemon;

class MapPokemon
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\PokemonDisplay::initOnce();
        \GPBMetadata\POGOProtos\Enums\PokemonId::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aff020a27504f474f50726f746f732f4d61702f506f6b656d6f6e2f4d61" .
            "70506f6b656d6f6e2e70726f746f1216504f474f50726f746f732e4d6170" .
            "2e506f6b656d6f6e1a24504f474f50726f746f732f446174612f506f6b65" .
            "6d6f6e446973706c61792e70726f746f1a20504f474f50726f746f732f45" .
            "6e756d732f506f6b656d6f6e49642e70726f746f22eb010a0a4d6170506f" .
            "6b656d6f6e12160a0e737061776e5f706f696e745f696418012001280912" .
            "140a0c656e636f756e7465725f6964180220012806122f0a0a706f6b656d" .
            "6f6e5f696418032001280e321b2e504f474f50726f746f732e456e756d73" .
            "2e506f6b656d6f6e4964121f0a1765787069726174696f6e5f74696d6573" .
            "74616d705f6d7318042001280312100a086c617469747564651805200128" .
            "0112110a096c6f6e67697475646518062001280112380a0f706f6b656d6f" .
            "6e5f646973706c617918072001280b321f2e504f474f50726f746f732e44" .
            "6174612e506f6b656d6f6e446973706c6179620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
