<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: services.proto

namespace TodoWorld;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EmptyResponse</code>
 */
class EmptyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ResponseStatus ResponseStatus = 1;</code>
     */
    private $ResponseStatus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \TodoWorld\ResponseStatus $ResponseStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ResponseStatus ResponseStatus = 1;</code>
     * @return \TodoWorld\ResponseStatus
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }

    /**
     * Generated from protobuf field <code>.ResponseStatus ResponseStatus = 1;</code>
     * @param \TodoWorld\ResponseStatus $var
     * @return $this
     */
    public function setResponseStatus($var)
    {
        GPBUtil::checkMessage($var, \TodoWorld\ResponseStatus::class);
        $this->ResponseStatus = $var;

        return $this;
    }

}

