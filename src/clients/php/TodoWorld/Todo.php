<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: services.proto

namespace TodoWorld;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Todo</code>
 */
class Todo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 Id = 1;</code>
     */
    private $Id = 0;
    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     */
    private $Title = '';
    /**
     * Generated from protobuf field <code>int32 Order = 3;</code>
     */
    private $Order = 0;
    /**
     * Generated from protobuf field <code>bool Completed = 4;</code>
     */
    private $Completed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $Id
     *     @type string $Title
     *     @type int $Order
     *     @type bool $Completed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 Id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>int64 Id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->Title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Order = 3;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * Generated from protobuf field <code>int32 Order = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->Order = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Completed = 4;</code>
     * @return bool
     */
    public function getCompleted()
    {
        return $this->Completed;
    }

    /**
     * Generated from protobuf field <code>bool Completed = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCompleted($var)
    {
        GPBUtil::checkBool($var);
        $this->Completed = $var;

        return $this;
    }

}

