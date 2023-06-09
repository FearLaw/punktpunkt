<?php
namespace Vendor\ekhn\Task;

use TYPO3\CMS\Scheduler\Task\AbstractTask;
//AbstractTask notwendig damit es ein Typo3 Task wird
class MyScript extends AbstractTask
{
    public function execute()
    {

        $command = '/usr/bin/php /path/to/my/script.php';
        exec($command);

        return true;
    }
}
