<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Battle/BattleLog.proto

namespace GPBMetadata\POGOProtos\Data\Battle;

class BattleLog
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\Battle\BattleState::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleType::initOnce();
        \GPBMetadata\POGOProtos\Data\Battle\BattleAction::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad6030a26504f474f50726f746f732f446174612f426174746c652f4261" .
            "74746c654c6f672e70726f746f1216504f474f50726f746f732e44617461" .
            "2e426174746c651a28504f474f50726f746f732f446174612f426174746c" .
            "652f426174746c6553746174652e70726f746f1a27504f474f50726f746f" .
            "732f446174612f426174746c652f426174746c65547970652e70726f746f" .
            "1a29504f474f50726f746f732f446174612f426174746c652f426174746c" .
            "65416374696f6e2e70726f746f228d020a09426174746c654c6f6712320a" .
            "05737461746518012001280e32232e504f474f50726f746f732e44617461" .
            "2e426174746c652e426174746c65537461746512370a0b626174746c655f" .
            "7479706518022001280e32222e504f474f50726f746f732e446174612e42" .
            "6174746c652e426174746c655479706512110a097365727665725f6d7318" .
            "0320012803123c0a0e626174746c655f616374696f6e7318042003280b32" .
            "242e504f474f50726f746f732e446174612e426174746c652e426174746c" .
            "65416374696f6e12210a19626174746c655f73746172745f74696d657374" .
            "616d705f6d73180520012803121f0a17626174746c655f656e645f74696d" .
            "657374616d705f6d73180620012803620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

