<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/customFields
 */
class CustomFields extends AbstractJira
{
    
    /**
     * Get custom fields
     *
     * API:
     * GET /rest/api/2/customFields
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/customFields-getCustomFields
     *
     * @return false|mixed|null
     */
    public function getCustomFields()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/customFields";

        return $this->request->get($apiUrl);
    }
}
