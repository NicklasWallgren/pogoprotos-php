<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/BadgeSettings.proto

namespace GPBMetadata\POGOProtos\Settings\Master;

class BadgeSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        \GPBMetadata\POGOProtos\Data\Badge\BadgeCaptureReward::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad1020a2e504f474f50726f746f732f53657474696e67732f4d61737465" .
            "722f426164676553657474696e67732e70726f746f121a504f474f50726f" .
            "746f732e53657474696e67732e4d61737465721a20504f474f50726f746f" .
            "732f456e756d732f4261646765547970652e70726f746f1a2e504f474f50" .
            "726f746f732f446174612f42616467652f42616467654361707475726552" .
            "65776172642e70726f746f22a8010a0d426164676553657474696e677312" .
            "2f0a0a62616467655f7479706518012001280e321b2e504f474f50726f74" .
            "6f732e456e756d732e42616467655479706512120a0a62616467655f7261" .
            "6e6b180220012805120f0a077461726765747318032003280512410a0e63" .
            "6170747572655f72657761726418042003280b32292e504f474f50726f74" .
            "6f732e446174612e42616467652e42616467654361707475726552657761" .
            "7264620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

