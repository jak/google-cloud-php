<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Nimbus InternalCheckers.
 *
 * Generated from protobuf message <code>google.monitoring.v3.InternalChecker</code>
 */
class InternalChecker extends \Google\Protobuf\Internal\Message
{
    /**
     * The GCP project ID. Not necessarily the same as the project_id for the
     * config.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The internal network to perform this uptime check on.
     *
     * Generated from protobuf field <code>string network = 2;</code>
     */
    private $network = '';
    /**
     * The GCP zone the uptime check should egress from. Only respected for
     * internal uptime checks, where internal_network is specified.
     *
     * Generated from protobuf field <code>string gcp_zone = 3;</code>
     */
    private $gcp_zone = '';
    /**
     * The checker ID.
     *
     * Generated from protobuf field <code>string checker_id = 4;</code>
     */
    private $checker_id = '';
    /**
     * The checker's human-readable name.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The GCP project ID. Not necessarily the same as the project_id for the
     *           config.
     *     @type string $network
     *           The internal network to perform this uptime check on.
     *     @type string $gcp_zone
     *           The GCP zone the uptime check should egress from. Only respected for
     *           internal uptime checks, where internal_network is specified.
     *     @type string $checker_id
     *           The checker ID.
     *     @type string $display_name
     *           The checker's human-readable name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * The GCP project ID. Not necessarily the same as the project_id for the
     * config.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The GCP project ID. Not necessarily the same as the project_id for the
     * config.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The internal network to perform this uptime check on.
     *
     * Generated from protobuf field <code>string network = 2;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The internal network to perform this uptime check on.
     *
     * Generated from protobuf field <code>string network = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The GCP zone the uptime check should egress from. Only respected for
     * internal uptime checks, where internal_network is specified.
     *
     * Generated from protobuf field <code>string gcp_zone = 3;</code>
     * @return string
     */
    public function getGcpZone()
    {
        return $this->gcp_zone;
    }

    /**
     * The GCP zone the uptime check should egress from. Only respected for
     * internal uptime checks, where internal_network is specified.
     *
     * Generated from protobuf field <code>string gcp_zone = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGcpZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcp_zone = $var;

        return $this;
    }

    /**
     * The checker ID.
     *
     * Generated from protobuf field <code>string checker_id = 4;</code>
     * @return string
     */
    public function getCheckerId()
    {
        return $this->checker_id;
    }

    /**
     * The checker ID.
     *
     * Generated from protobuf field <code>string checker_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->checker_id = $var;

        return $this;
    }

    /**
     * The checker's human-readable name.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The checker's human-readable name.
     *
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}
