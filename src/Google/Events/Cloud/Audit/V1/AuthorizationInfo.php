<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/audit/v1/data.proto

namespace Google\Events\Cloud\Audit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authorization information for the operation.
 *
 * Generated from protobuf message <code>google.events.cloud.audit.v1.AuthorizationInfo</code>
 */
class AuthorizationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource being accessed, as a REST-style string. For example:
     *     bigquery.googlapis.com/projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     */
    protected $resource = '';
    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     */
    protected $permission = '';
    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     */
    protected $granted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           The resource being accessed, as a REST-style string. For example:
     *               bigquery.googlapis.com/projects/PROJECTID/datasets/DATASETID
     *     @type string $permission
     *           The required IAM permission.
     *     @type bool $granted
     *           Whether or not authorization for `resource` and `permission`
     *           was granted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Audit\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource being accessed, as a REST-style string. For example:
     *     bigquery.googlapis.com/projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The resource being accessed, as a REST-style string. For example:
     *     bigquery.googlapis.com/projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;

        return $this;
    }

    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     * @return bool
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGranted($var)
    {
        GPBUtil::checkBool($var);
        $this->granted = $var;

        return $this;
    }

}

