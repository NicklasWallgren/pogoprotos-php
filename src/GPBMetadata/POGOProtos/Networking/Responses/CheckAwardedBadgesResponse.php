<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CheckAwardedBadgesResponse.proto

namespace GPBMetadata\POGOProtos\Networking\Responses;

class CheckAwardedBadgesResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\POGOProtos\Enums\BadgeType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aad020a40504f474f50726f746f732f4e6574776f726b696e672f526573" .
            "706f6e7365732f436865636b41776172646564426164676573526573706f" .
            "6e73652e70726f746f121f504f474f50726f746f732e4e6574776f726b69" .
            "6e672e526573706f6e7365731a20504f474f50726f746f732f456e756d73" .
            "2f4261646765547970652e70726f746f229d010a1a436865636b41776172" .
            "646564426164676573526573706f6e7365120f0a07737563636573731801" .
            "2001280812330a0e617761726465645f62616467657318022003280e321b" .
            "2e504f474f50726f746f732e456e756d732e426164676554797065121c0a" .
            "14617761726465645f62616467655f6c6576656c73180320032805121b0a" .
            "136176617461725f74656d706c6174655f69647318042003280962067072" .
            "6f746f33"
        ));

        static::$is_initialized = true;
    }
}
