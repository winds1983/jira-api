<?php

namespace Hive\Jira\ServiceDesk;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/attachment
 */
class RequestAttachment extends AbstractJira
{
    
    /**
     * Create attachment
     *
     * API:
     * POST /rest/servicedeskapi/request/{issueIdOrKey}/attachment
     *
     * @link https://docs.atlassian.com/jira-servicedesk/REST/3.6.2/#servicedeskapi/request/{issueIdOrKey}/attachment-createAttachment
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function createAttachment(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/servicedeskapi/request/$issueIdOrKey/attachment";

        return $this->request->post($apiUrl, $data);
    }
}
