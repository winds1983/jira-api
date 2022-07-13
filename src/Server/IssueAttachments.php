<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/attachments
 */
class IssueAttachments extends AbstractJira
{
    
    /**
     * Add attachment
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/attachments
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/attachments-addAttachment
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function addAttachment(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/attachments";

        return $this->request->post($apiUrl, $data);
    }
}
