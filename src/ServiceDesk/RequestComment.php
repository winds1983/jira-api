<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/comment
 */
class RequestComment extends AbstractJira
{
    
    /**
     * Create request comment
     *
     * API:
     * POST /rest/servicedeskapi/request/{issueIdOrKey}/comment
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/comment-createRequestComment
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function createRequestComment(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/comment";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get request comments
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/comment
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/comment-getRequestComments
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getRequestComments(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/comment";

        return $this->request->get($apiUrl);
    }

    /**
     * Get request comment by id
     *
     * API:
     * GET /rest/servicedeskapi/request/{issueIdOrKey}/comment/{commentId}
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/comment-getRequestCommentById
     *
     * @param string $issueIdOrKey
     * @param int $commentId
     * @return false|mixed|null
     */
    public function getRequestCommentById(string $issueIdOrKey, int $commentId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/comment/$commentId";

        return $this->request->get($apiUrl);
    }
}
