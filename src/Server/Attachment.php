<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/attachment
 */
class Attachment extends AbstractJira
{
    
    /**
     * Remove attachment
     *
     * API:
     * DELETE /rest/api/2/attachment/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/attachment-removeAttachment
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function removeAttachment(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/attachment/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get attachment
     *
     * API:
     * GET /rest/api/2/attachment/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/attachment-getAttachment
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getAttachment(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/attachment/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Expand for humans
     *
     * API:
     * GET /rest/api/2/attachment/{id}/expand/human
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/attachment-expandForHumans
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function expandForHumans(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/attachment/$id/expand/human";

        return $this->request->get($apiUrl);
    }

    /**
     * Expand for machines
     *
     * API:
     * GET /rest/api/2/attachment/{id}/expand/raw
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/attachment-expandForMachines
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function expandForMachines(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/attachment/$id/expand/raw";

        return $this->request->get($apiUrl);
    }

    /**
     * Get attachment meta
     *
     * API:
     * GET /rest/api/2/attachment/meta
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/attachment-getAttachmentMeta
     *
     * @return false|mixed|null
     */
    public function getAttachmentMeta()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/attachment/meta";

        return $this->request->get($apiUrl);
    }
}
