<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/AuthTicket.proto

namespace GPBMetadata\POGOProtos\Networking\Envelopes;

class AuthTicket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa2010a30504f474f50726f746f732f4e6574776f726b696e672f456e76" .
            "656c6f7065732f417574685469636b65742e70726f746f121f504f474f50" .
            "726f746f732e4e6574776f726b696e672e456e76656c6f70657322450a0a" .
            "417574685469636b6574120d0a05737461727418012001280c121b0a1365" .
            "78706972655f74696d657374616d705f6d73180220012804120b0a03656e" .
            "6418032001280c620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

