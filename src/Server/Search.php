<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/search
 */
class Search extends AbstractJira
{
    
    /**
     * Search using search request
     *
     * API:
     * POST /rest/api/2/search
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/search-searchUsingSearchRequest
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function searchUsingSearchRequest(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/search";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Search
     *
     * API:
     * GET /rest/api/2/search
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/search-search
     *
     * @return false|mixed|null
     */
    public function search()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/search";

        return $this->request->get($apiUrl);
    }
}
