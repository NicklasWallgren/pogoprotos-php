<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SetFavoritePokemonMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.SetFavoritePokemonMessage</code>
 */
class SetFavoritePokemonMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Do not change https://github.com/AeonLucid/POGOProtos.pull/126
     * </pre>
     *
     * <code>int64 pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * <code>bool is_favorite = 2;</code>
     */
    private $is_favorite = false;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\SetFavoritePokemonMessage::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Do not change https://github.com/AeonLucid/POGOProtos.pull/126
     * </pre>
     *
     * <code>int64 pokemon_id = 1;</code>
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * <pre>
     * Do not change https://github.com/AeonLucid/POGOProtos.pull/126
     * </pre>
     *
     * <code>int64 pokemon_id = 1;</code>
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkInt64($var);
        $this->pokemon_id = $var;
    }

    /**
     * <code>bool is_favorite = 2;</code>
     */
    public function getIsFavorite()
    {
        return $this->is_favorite;
    }

    /**
     * <code>bool is_favorite = 2;</code>
     */
    public function setIsFavorite($var)
    {
        GPBUtil::checkBool($var);
        $this->is_favorite = $var;
    }

}

