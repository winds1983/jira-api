<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/participant
 */
class RequestParticipant extends AbstractJira
{
    
    /**
     * Get request participants
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/participant
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/participant-getRequestParticipants
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getRequestParticipants(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/participant";

        return $this->request->get($apiUrl);
    }

    /**
     * Add request participants
     *
     * API:
     * POST /rest/servicedeskapi/request/{issueIdOrKey}/participant
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/participant-addRequestParticipants
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function addRequestParticipants(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/participant";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove request participants
     *
     * API:
     * DELETE /rest/servicedeskapi/request/{issueIdOrKey}/participant
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/participant-removeRequestParticipants
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function removeRequestParticipants(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/participant";

        return $this->request->delete($apiUrl);
    }
}
