<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/configuration
 */
class Configuration extends AbstractJira
{
    
    /**
     * Get configuration
     *
     * API:
     * GET /rest/api/2/configuration
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/configuration-getConfiguration
     *
     * @return false|mixed|null
     */
    public function getConfiguration()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/configuration";

        return $this->request->get($apiUrl);
    }
}
