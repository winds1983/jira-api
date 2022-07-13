<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/type
 */
class ProjectType extends AbstractJira
{
    
    /**
     * Get all project types
     *
     * API:
     * GET /rest/api/2/project/type
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/type-getAllProjectTypes
     *
     * @return false|mixed|null
     */
    public function getAllProjectTypes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/type";

        return $this->request->get($apiUrl);
    }

    /**
     * Get project type by key
     *
     * API:
     * GET /rest/api/2/project/type/{projectTypeKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/type-getProjectTypeByKey
     *
     * @param string $projectTypeKey
     * @return false|mixed|null
     */
    public function getProjectTypeByKey(string $projectTypeKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/type/$projectTypeKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Get accessible project type by key
     *
     * API:
     * GET /rest/api/2/project/type/{projectTypeKey}/accessible
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/type-getAccessibleProjectTypeByKey
     *
     * @param string $projectTypeKey
     * @return false|mixed|null
     */
    public function getAccessibleProjectTypeByKey(string $projectTypeKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/type/$projectTypeKey/accessible";

        return $this->request->get($apiUrl);
    }
}
