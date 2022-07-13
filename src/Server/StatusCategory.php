<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/statuscategory
 */
class StatusCategory extends AbstractJira
{
    
    /**
     * Get status categories
     *
     * API:
     * GET /rest/api/2/statuscategory
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/statuscategory-getStatusCategories
     *
     * @return false|mixed|null
     */
    public function getStatusCategories()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/statuscategory";

        return $this->request->get($apiUrl);
    }

    /**
     * Get status category
     *
     * API:
     * GET /rest/api/2/statuscategory/{idOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/statuscategory-getStatusCategory
     *
     * @param string $idOrKey
     * @return false|mixed|null
     */
    public function getStatusCategory(string $idOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/statuscategory/$idOrKey";

        return $this->request->get($apiUrl);
    }
}
