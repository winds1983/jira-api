<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/jql/autocompletedata
 */
class JqlAutocompleteData extends AbstractJira
{
    
    /**
     * Get auto complete
     *
     * API:
     * GET /rest/api/2/jql/autocompletedata
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/jql/autocompletedata-getAutoComplete
     *
     * @return false|mixed|null
     */
    public function getAutoComplete()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/jql/autocompletedata";

        return $this->request->get($apiUrl);
    }

    /**
     * Get field auto complete for query string
     *
     * API:
     * GET /rest/api/2/jql/autocompletedata/suggestions
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/jql/autocompletedata-getFieldAutoCompleteForQueryString
     *
     * @return false|mixed|null
     */
    public function getFieldAutoCompleteForQueryString()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/jql/autocompletedata/suggestions";

        return $this->request->get($apiUrl);
    }
}
