<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/AddFortModifierResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.AddFortModifierResponse</code>
 */
class AddFortModifierResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.AddFortModifierResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * <code>.POGOProtos.Networking.Responses.FortDetailsResponse fort_details = 2;</code>
     */
    private $fort_details = null;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\AddFortModifierResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.AddFortModifierResponse.Result result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.AddFortModifierResponse.Result result = 1;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\AddFortModifierResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.FortDetailsResponse fort_details = 2;</code>
     */
    public function getFortDetails()
    {
        return $this->fort_details;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.FortDetailsResponse fort_details = 2;</code>
     */
    public function setFortDetails(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Responses\FortDetailsResponse::class);
        $this->fort_details = $var;
    }

}

