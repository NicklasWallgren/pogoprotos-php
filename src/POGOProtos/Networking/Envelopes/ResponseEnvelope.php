<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/ResponseEnvelope.proto

namespace POGOProtos\Networking\Envelopes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Envelopes.ResponseEnvelope</code>
 */
class ResponseEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Envelopes.ResponseEnvelope.StatusCode status_code = 1;</code>
     */
    private $status_code = 0;
    /**
     * <code>uint64 request_id = 2;</code>
     */
    private $request_id = 0;
    /**
     * <code>string api_url = 3;</code>
     */
    private $api_url = '';
    /**
     * <code>repeated .POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse platform_returns = 6;</code>
     */
    private $platform_returns;
    /**
     * <code>.POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 7;</code>
     */
    private $auth_ticket = null;
    /**
     * <code>repeated bytes returns = 100;</code>
     */
    private $returns;
    /**
     * <code>string error = 101;</code>
     */
    private $error = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Envelopes\ResponseEnvelope::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.ResponseEnvelope.StatusCode status_code = 1;</code>
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.ResponseEnvelope.StatusCode status_code = 1;</code>
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Envelopes\ResponseEnvelope_StatusCode::class);
        $this->status_code = $var;
    }

    /**
     * <code>uint64 request_id = 2;</code>
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * <code>uint64 request_id = 2;</code>
     */
    public function setRequestId($var)
    {
        GPBUtil::checkUint64($var);
        $this->request_id = $var;
    }

    /**
     * <code>string api_url = 3;</code>
     */
    public function getApiUrl()
    {
        return $this->api_url;
    }

    /**
     * <code>string api_url = 3;</code>
     */
    public function setApiUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_url = $var;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse platform_returns = 6;</code>
     */
    public function getPlatformReturns()
    {
        return $this->platform_returns;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Envelopes.ResponseEnvelope.PlatformResponse platform_returns = 6;</code>
     */
    public function setPlatformReturns(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\ResponseEnvelope_PlatformResponse::class);
        $this->platform_returns = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 7;</code>
     */
    public function getAuthTicket()
    {
        return $this->auth_ticket;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 7;</code>
     */
    public function setAuthTicket(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\AuthTicket::class);
        $this->auth_ticket = $var;
    }

    /**
     * <code>repeated bytes returns = 100;</code>
     */
    public function getReturns()
    {
        return $this->returns;
    }

    /**
     * <code>repeated bytes returns = 100;</code>
     */
    public function setReturns(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->returns = $var;
    }

    /**
     * <code>string error = 101;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <code>string error = 101;</code>
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;
    }

}

