<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerPublicProfile.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Player.PlayerPublicProfile</code>
 */
class PlayerPublicProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <code>int32 level = 2;</code>
     */
    private $level = 0;
    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatar avatar = 3;</code>
     */
    private $avatar = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Player\PlayerPublicProfile::initOnce();
        parent::__construct();
    }

    /**
     * <code>string name = 1;</code>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <code>string name = 1;</code>
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * <code>int32 level = 2;</code>
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * <code>int32 level = 2;</code>
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->level = $var;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatar avatar = 3;</code>
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatar avatar = 3;</code>
     */
    public function setAvatar(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerAvatar::class);
        $this->avatar = $var;
    }

}

