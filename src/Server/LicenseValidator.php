<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/licenseValidator
 */
class LicenseValidator extends AbstractJira
{
    
    /**
     * Validate
     *
     * API:
     * POST /rest/api/2/licenseValidator
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/licenseValidator-validate
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function validate(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/licenseValidator";

        return $this->request->post($apiUrl, $data);
    }
}
