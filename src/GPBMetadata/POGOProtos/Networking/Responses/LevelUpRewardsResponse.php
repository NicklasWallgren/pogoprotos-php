<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/LevelUpRewardsResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class LevelUpRewardsResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Inventory\Item\ItemId::initOnce();
        \GPBMetadata\POGOProtos\Inventory\Item\ItemAward::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad4030a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4c6576656c557052657761726473526573706f6e73652e" .
            "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365731a26504f474f50726f746f732f496e76656e746f7279" .
            "2f4974656d2f4974656d49642e70726f746f1a29504f474f50726f746f73" .
            "2f496e76656e746f72792f4974656d2f4974656d41776172642e70726f74" .
            "6f2297020a164c6576656c557052657761726473526573706f6e7365124e" .
            "0a06726573756c7418012001280e323e2e504f474f50726f746f732e4e65" .
            "74776f726b696e672e526573706f6e7365732e4c6576656c557052657761" .
            "726473526573706f6e73652e526573756c74123b0a0d6974656d735f6177" .
            "617264656418022003280b32242e504f474f50726f746f732e496e76656e" .
            "746f72792e4974656d2e4974656d417761726412390a0e6974656d735f75" .
            "6e6c6f636b656418042003280e32212e504f474f50726f746f732e496e76" .
            "656e746f72792e4974656d2e4974656d496422350a06526573756c741209" .
            "0a05554e5345541000120b0a0753554343455353100112130a0f41574152" .
            "4445445f414c52454144591002620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

