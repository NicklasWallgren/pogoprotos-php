<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/MoveSequenceSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.MoveSequenceSettings</code>
 */
class MoveSequenceSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated string sequence = 1;</code>
     */
    private $sequence;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\MoveSequenceSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated string sequence = 1;</code>
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * <code>repeated string sequence = 1;</code>
     */
    public function setSequence(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sequence = $var;
    }

}

