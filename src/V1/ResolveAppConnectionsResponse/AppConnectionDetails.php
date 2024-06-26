<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnections/v1/app_connections_service.proto

namespace Google\Cloud\BeyondCorp\AppConnections\V1\ResolveAppConnectionsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of the AppConnection.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnections.v1.ResolveAppConnectionsResponse.AppConnectionDetails</code>
 */
class AppConnectionDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * A BeyondCorp AppConnection in the project.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection app_connection = 1;</code>
     */
    protected $app_connection = null;
    /**
     * If type=GCP_REGIONAL_MIG, contains most recent VM instances, like
     * `https://www.googleapis.com/compute/v1/projects/{project_id}/zones/{zone_id}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>repeated string recent_mig_vms = 2;</code>
     */
    private $recent_mig_vms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection $app_connection
     *           A BeyondCorp AppConnection in the project.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $recent_mig_vms
     *           If type=GCP_REGIONAL_MIG, contains most recent VM instances, like
     *           `https://www.googleapis.com/compute/v1/projects/{project_id}/zones/{zone_id}/instances/{instance_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnections\V1\AppConnectionsService::initOnce();
        parent::__construct($data);
    }

    /**
     * A BeyondCorp AppConnection in the project.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection app_connection = 1;</code>
     * @return \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection|null
     */
    public function getAppConnection()
    {
        return $this->app_connection;
    }

    public function hasAppConnection()
    {
        return isset($this->app_connection);
    }

    public function clearAppConnection()
    {
        unset($this->app_connection);
    }

    /**
     * A BeyondCorp AppConnection in the project.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection app_connection = 1;</code>
     * @param \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection $var
     * @return $this
     */
    public function setAppConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection::class);
        $this->app_connection = $var;

        return $this;
    }

    /**
     * If type=GCP_REGIONAL_MIG, contains most recent VM instances, like
     * `https://www.googleapis.com/compute/v1/projects/{project_id}/zones/{zone_id}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>repeated string recent_mig_vms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecentMigVms()
    {
        return $this->recent_mig_vms;
    }

    /**
     * If type=GCP_REGIONAL_MIG, contains most recent VM instances, like
     * `https://www.googleapis.com/compute/v1/projects/{project_id}/zones/{zone_id}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>repeated string recent_mig_vms = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecentMigVms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->recent_mig_vms = $arr;

        return $this;
    }

}


