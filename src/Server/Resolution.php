<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/resolution
 */
class Resolution extends AbstractJira
{
    
    /**
     * Get resolutions
     *
     * API:
     * GET /rest/api/2/resolution
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/resolution-getResolutions
     *
     * @return false|mixed|null
     */
    public function getResolutions()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/resolution";

        return $this->request->get($apiUrl);
    }

    /**
     * Get resolution
     *
     * API:
     * GET /rest/api/2/resolution/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/resolution-getResolution
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getResolution(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/resolution/$id";

        return $this->request->get($apiUrl);
    }
}
