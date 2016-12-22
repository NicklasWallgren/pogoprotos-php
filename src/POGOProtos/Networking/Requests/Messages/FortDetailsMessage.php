<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/FortDetailsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.FortDetailsMessage</code>
 */
class FortDetailsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string fort_id = 1;</code>
     */
    private $fort_id = '';
    /**
     * <code>double latitude = 2;</code>
     */
    private $latitude = 0.0;
    /**
     * <code>double longitude = 3;</code>
     */
    private $longitude = 0.0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\FortDetailsMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>string fort_id = 1;</code>
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * <code>string fort_id = 1;</code>
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;
    }

    /**
     * <code>double latitude = 2;</code>
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * <code>double latitude = 2;</code>
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;
    }

    /**
     * <code>double longitude = 3;</code>
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * <code>double longitude = 3;</code>
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;
    }

}

