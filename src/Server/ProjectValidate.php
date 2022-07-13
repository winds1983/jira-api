<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectvalidate
 */
class ProjectValidate extends AbstractJira
{
    
    /**
     * Get project
     *
     * API:
     * GET /rest/api/2/projectvalidate/key
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectvalidate-getProject
     *
     * @return false|mixed|null
     */
    public function getProject()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/projectvalidate/key";

        return $this->request->get($apiUrl);
    }
}
