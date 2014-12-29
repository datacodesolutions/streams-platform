<?php namespace Anomaly\Streams\Platform\Ui\Table\Component\View\Contract;

use Anomaly\Streams\Platform\Ui\Table\Event\TableQueryEvent;

/**
 * Interface ViewHandlerInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Ui\Table\Component\View\Contract
 */
interface ViewHandlerInterface
{

    /**
     * Handle the TableQueryEvent.
     *
     * @param TableQueryEvent $event
     */
    public function onTableQuery(TableQueryEvent $event);
}
