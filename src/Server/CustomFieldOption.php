<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/customFieldOption
 */
class CustomFieldOption extends AbstractJira
{
    
    /**
     * Get custom field option
     *
     * API:
     * GET /rest/api/2/customFieldOption/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/customFieldOption-getCustomFieldOption
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getCustomFieldOption(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/customFieldOption/$id";

        return $this->request->get($apiUrl);
    }
}
