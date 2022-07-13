<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/approval
 */
class RequestApproval extends AbstractJira
{
    
    /**
     * Get approvals
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/approval
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/approval-getApprovals
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getApprovals(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/approval";

        return $this->request->get($apiUrl);
    }

    /**
     * Get approval by id
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/approval/{approvalId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/approval-getApprovalById
     *
     * @param string $issueIdOrKey
     * @param int $approvalId
     * @return false|mixed|null
     */
    public function getApprovalById(string $issueIdOrKey, int $approvalId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/approval/$approvalId";

        return $this->request->get($apiUrl);
    }

    /**
     * Answer approval
     *
     * API:
     * POST /rest/servicedeskapi/request/{issueIdOrKey}/approval/{approvalId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/approval-answerApproval
     *
     * @param string $issueIdOrKey
     * @param int $approvalId
     * @param array $data
     * @return false|mixed|null
     */
    public function answerApproval(string $issueIdOrKey, int $approvalId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/approval/$approvalId";

        return $this->request->post($apiUrl, $data);
    }
}
