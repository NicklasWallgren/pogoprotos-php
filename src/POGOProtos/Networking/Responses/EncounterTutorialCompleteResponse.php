<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/EncounterTutorialCompleteResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.EncounterTutorialCompleteResponse</code>
 */
class EncounterTutorialCompleteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.EncounterTutorialCompleteResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data = 2;</code>
     */
    private $pokemon_data = null;
    /**
     * <code>.POGOProtos.Data.Capture.CaptureAward capture_award = 3;</code>
     */
    private $capture_award = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.EncounterTutorialCompleteResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.EncounterTutorialCompleteResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data = 2;</code>
     */
    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    /**
     * <code>.POGOProtos.Data.PokemonData pokemon_data = 2;</code>
     */
    public function setPokemonData(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PokemonData::class);
        $this->pokemon_data = $var;
    }

    /**
     * <code>.POGOProtos.Data.Capture.CaptureAward capture_award = 3;</code>
     */
    public function getCaptureAward()
    {
        return $this->capture_award;
    }

    /**
     * <code>.POGOProtos.Data.Capture.CaptureAward capture_award = 3;</code>
     */
    public function setCaptureAward(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Capture\CaptureAward::class);
        $this->capture_award = $var;
    }

}

