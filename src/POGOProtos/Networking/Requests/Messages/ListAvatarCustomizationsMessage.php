<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/ListAvatarCustomizationsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.ListAvatarCustomizationsMessage</code>
 */
class ListAvatarCustomizationsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 1;</code>
     */
    private $avatar_type = 0;
    /**
     * <code>repeated .POGOProtos.Enums.Slot slot = 2;</code>
     */
    private $slot;
    /**
     * <code>repeated .POGOProtos.Enums.Filter filters = 3;</code>
     */
    private $filters;
    /**
     * <code>int32 start = 4;</code>
     */
    private $start = 0;
    /**
     * <code>int32 limit = 5;</code>
     */
    private $limit = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\ListAvatarCustomizationsMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 1;</code>
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * <code>.POGOProtos.Data.Player.PlayerAvatarType avatar_type = 1;</code>
     */
    public function setAvatarType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Player\PlayerAvatarType::class);
        $this->avatar_type = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.Slot slot = 2;</code>
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * <code>repeated .POGOProtos.Enums.Slot slot = 2;</code>
     */
    public function setSlot(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\Slot::class);
        $this->slot = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.Filter filters = 3;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <code>repeated .POGOProtos.Enums.Filter filters = 3;</code>
     */
    public function setFilters(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\Filter::class);
        $this->filters = $var;
    }

    /**
     * <code>int32 start = 4;</code>
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * <code>int32 start = 4;</code>
     */
    public function setStart($var)
    {
        GPBUtil::checkInt32($var);
        $this->start = $var;
    }

    /**
     * <code>int32 limit = 5;</code>
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <code>int32 limit = 5;</code>
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;
    }

}

