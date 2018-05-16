<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ZMDev\Fate\Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ZMDev.fate.pb.Credential</code>
 */
class Credential extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 app_id = 1;</code>
     */
    private $app_id = 0;
    /**
     * Generated from protobuf field <code>string app_secret = 2;</code>
     */
    private $app_secret = '';

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 app_id = 1;</code>
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>int32 app_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkInt32($var);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_secret = 2;</code>
     * @return string
     */
    public function getAppSecret()
    {
        return $this->app_secret;
    }

    /**
     * Generated from protobuf field <code>string app_secret = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_secret = $var;

        return $this;
    }

}

