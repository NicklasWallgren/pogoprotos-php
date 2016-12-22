<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/EncounterResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.EncounterResponse</code>
 */
class EncounterResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Map.Pokemon.WildPokemon wild_pokemon = 1;</code>
     */
    private $wild_pokemon = null;
    /**
     * <code>.POGOProtos.Networking.Responses.EncounterResponse.Background background = 2;</code>
     */
    private $background = 0;
    /**
     * <code>.POGOProtos.Networking.Responses.EncounterResponse.Status status = 3;</code>
     */
    private $status = 0;
    /**
     * <code>.POGOProtos.Data.Capture.CaptureProbability capture_probability = 4;</code>
     */
    private $capture_probability = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\EncounterResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Map.Pokemon.WildPokemon wild_pokemon = 1;</code>
     */
    public function getWildPokemon()
    {
        return $this->wild_pokemon;
    }

    /**
     * <code>.POGOProtos.Map.Pokemon.WildPokemon wild_pokemon = 1;</code>
     */
    public function setWildPokemon(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Map\Pokemon\WildPokemon::class);
        $this->wild_pokemon = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.EncounterResponse.Background background = 2;</code>
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.EncounterResponse.Background background = 2;</code>
     */
    public function setBackground($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\EncounterResponse_Background::class);
        $this->background = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.EncounterResponse.Status status = 3;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.EncounterResponse.Status status = 3;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\EncounterResponse_Status::class);
        $this->status = $var;
    }

    /**
     * <code>.POGOProtos.Data.Capture.CaptureProbability capture_probability = 4;</code>
     */
    public function getCaptureProbability()
    {
        return $this->capture_probability;
    }

    /**
     * <code>.POGOProtos.Data.Capture.CaptureProbability capture_probability = 4;</code>
     */
    public function setCaptureProbability(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Capture\CaptureProbability::class);
        $this->capture_probability = $var;
    }

}

