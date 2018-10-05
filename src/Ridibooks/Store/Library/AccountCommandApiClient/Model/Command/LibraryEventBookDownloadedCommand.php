<?php
declare(strict_types=1);

namespace Ridibooks\Store\Library\AccountCommandApiClient\Model\Command;

class LibraryEventBookDownloadedCommand extends UserCommand
{
    protected const REQUEST_METHOD = 'PUT';
    protected const REQUEST_PATH = '/events/book-downloaded/';

    /** @var string[] */
    private $b_ids;

    /**
     * @param int $u_idx
     * @param int $revision
     * @param string[] $b_ids
     * @param int $priority
     */
    public function __construct(int $u_idx, int $revision, int $priority, array $b_ids)
    {
        parent::__construct($u_idx, $revision, $priority);
        $this->b_ids = $b_ids;
    }

    /**
     * @return array
     */
    protected function serialize(): array
    {
        return ['b_ids' => $this->b_ids];
    }
}
