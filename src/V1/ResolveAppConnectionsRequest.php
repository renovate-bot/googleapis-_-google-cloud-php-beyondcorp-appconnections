<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnections/v1/app_connections_service.proto

namespace Google\Cloud\BeyondCorp\AppConnections\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BeyondCorp.ResolveAppConnections.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnections.v1.ResolveAppConnectionsRequest</code>
 */
class ResolveAppConnectionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the AppConnection location using the form:
     * `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. BeyondCorp Connector name of the connector associated with those
     * AppConnections using the form:
     * `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *
     * Generated from protobuf field <code>string app_connector_id = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $app_connector_id = '';
    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][BeyondCorp.ResolveAppConnectionsResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The next_page_token value returned from a previous
     * ResolveAppConnectionsResponse, if any.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The resource name of the AppConnection location using the form:
     *                       `projects/{project_id}/locations/{location_id}`
     *                       Please see {@see AppConnectionsServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\BeyondCorp\AppConnections\V1\ResolveAppConnectionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the AppConnection location using the form:
     *           `projects/{project_id}/locations/{location_id}`
     *     @type string $app_connector_id
     *           Required. BeyondCorp Connector name of the connector associated with those
     *           AppConnections using the form:
     *           `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *     @type int $page_size
     *           Optional. The maximum number of items to return.
     *           If not specified, a default value of 50 will be used by the service.
     *           Regardless of the page_size value, the response may include a partial list
     *           and a caller should only rely on response's
     *           [next_page_token][BeyondCorp.ResolveAppConnectionsResponse.next_page_token]
     *           to determine if there are more instances left to be queried.
     *     @type string $page_token
     *           Optional. The next_page_token value returned from a previous
     *           ResolveAppConnectionsResponse, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnections\V1\AppConnectionsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the AppConnection location using the form:
     * `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the AppConnection location using the form:
     * `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. BeyondCorp Connector name of the connector associated with those
     * AppConnections using the form:
     * `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *
     * Generated from protobuf field <code>string app_connector_id = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAppConnectorId()
    {
        return $this->app_connector_id;
    }

    /**
     * Required. BeyondCorp Connector name of the connector associated with those
     * AppConnections using the form:
     * `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
     *
     * Generated from protobuf field <code>string app_connector_id = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAppConnectorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_connector_id = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][BeyondCorp.ResolveAppConnectionsResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][BeyondCorp.ResolveAppConnectionsResponse.next_page_token]
     * to determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The next_page_token value returned from a previous
     * ResolveAppConnectionsResponse, if any.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The next_page_token value returned from a previous
     * ResolveAppConnectionsResponse, if any.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

