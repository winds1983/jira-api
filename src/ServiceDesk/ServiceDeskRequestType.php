<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttype
 */
class ServiceDeskRequestType extends AbstractJira
{
    
    /**
     * Get request types
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/requesttype
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttype-getRequestTypes
     *
     * @param int $serviceDeskId
     * @return false|mixed|null
     */
    public function getRequestTypes(int $serviceDeskId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/requesttype";

        return $this->request->get($apiUrl);
    }

    /**
     * Create request type
     *
     * API:
     * POST /rest/servicedeskapi/servicedesk/{serviceDeskId}/requesttype
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttype-createRequestType
     *
     * @param int $serviceDeskId
     * @param array $data
     * @return false|mixed|null
     */
    public function createRequestType(int $serviceDeskId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/requesttype";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get request type by id
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/requesttype/{requestTypeId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttype-getRequestTypeById
     *
     * @param int $serviceDeskId
     * @param int $requestTypeId
     * @return false|mixed|null
     */
    public function getRequestTypeById(int $serviceDeskId, int $requestTypeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/requesttype/$requestTypeId";

        return $this->request->get($apiUrl);
    }
}
