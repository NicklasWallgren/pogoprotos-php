<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetMapObjectsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetMapObjectsResponse</code>
 */
class GetMapObjectsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .POGOProtos.Map.MapCell map_cells = 1;</code>
     */
    private $map_cells;
    /**
     * <code>.POGOProtos.Map.MapObjectsStatus status = 2;</code>
     */
    private $status = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\GetMapObjectsResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .POGOProtos.Map.MapCell map_cells = 1;</code>
     */
    public function getMapCells()
    {
        return $this->map_cells;
    }

    /**
     * <code>repeated .POGOProtos.Map.MapCell map_cells = 1;</code>
     */
    public function setMapCells(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Map\MapCell::class);
        $this->map_cells = $var;
    }

    /**
     * <code>.POGOProtos.Map.MapObjectsStatus status = 2;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.POGOProtos.Map.MapObjectsStatus status = 2;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Map\MapObjectsStatus::class);
        $this->status = $var;
    }

}

