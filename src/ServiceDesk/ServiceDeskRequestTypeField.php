<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttype/{requestTypeId}/field
 */
class ServiceDeskRequestTypeField extends AbstractJira
{
    
    /**
     * Get request type fields
     *
     * API:
     * GET /rest/servicedeskapi/servicedesk/{serviceDeskId}/requesttype/{requestTypeId}/field
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/servicedesk/{serviceDeskId}/requesttype/{requestTypeId}/field-getRequestTypeFields
     *
     * @param int $serviceDeskId
     * @param int $requestTypeId
     * @return false|mixed|null
     */
    public function getRequestTypeFields(int $serviceDeskId, int $requestTypeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/servicedesk/$serviceDeskId/requesttype/$requestTypeId/field";

        return $this->request->get($apiUrl);
    }
}
