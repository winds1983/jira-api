<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/status
 */
class RequestStatus extends AbstractJira
{
    
    /**
     * Get customer request status
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/status
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/status-getCustomerRequestStatus
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getCustomerRequestStatus(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/status";

        return $this->request->get($apiUrl);
    }
}
