<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetAssetDigestResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class GetAssetDigestResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Data\AssetDigestEntry::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af2010a3c504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f4765744173736574446967657374526573706f6e73652e" .
            "70726f746f121f504f474f50726f746f732e4e6574776f726b696e672e52" .
            "6573706f6e7365731a26504f474f50726f746f732f446174612f41737365" .
            "74446967657374456e7472792e70726f746f22610a164765744173736574" .
            "446967657374526573706f6e736512310a0664696765737418012003280b" .
            "32212e504f474f50726f746f732e446174612e4173736574446967657374" .
            "456e74727912140a0c74696d657374616d705f6d73180220012804620670" .
            "726f746f33"
        ));

        static::$is_initialized = true;
    }
}

