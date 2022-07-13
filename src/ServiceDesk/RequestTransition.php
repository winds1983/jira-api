<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/transition
 */
class RequestTransition extends AbstractJira
{
    
    /**
     * Get customer transitions
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/transition
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/transition-getCustomerTransitions
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getCustomerTransitions(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/transition";

        return $this->request->get($apiUrl);
    }

    /**
     * Perform customer transition
     *
     * API:
     * POST /rest/servicedeskapi/request/{issueIdOrKey}/transition
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/transition-performCustomerTransition
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function performCustomerTransition(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/transition";

        return $this->request->post($apiUrl, $data);
    }
}
