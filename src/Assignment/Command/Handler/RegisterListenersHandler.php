<?php namespace Anomaly\Streams\Platform\Assignment\Command\Handler;

use Illuminate\Events\Dispatcher;

/**
 * Class RegisterListenersHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Assignment\Command
 */
class RegisterListenersHandler
{

    /**
     * The event dispatcher.
     *
     * @var Dispatcher
     */
    protected $dispatcher;

    /**
     * Create a new RegisterListenersHandler instance.
     *
     * @param Dispatcher $dispatcher
     */
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * Handle the command.
     */
    public function handle()
    {
        $this->dispatcher->listen(
            'Anomaly\Streams\Platform\Assignment\Event\AssignmentWasCreated',
            'Anomaly\Streams\Platform\Assignment\Listener\AssignmentCreatedListener'
        );
        $this->dispatcher->listen(
            'Anomaly\Streams\Platform\Assignment\Event\AssignmentWasSaved',
            'Anomaly\Streams\Platform\Assignment\Listener\AssignmentSavedListener'
        );
        $this->dispatcher->listen(
            'Anomaly\Streams\Platform\Assignment\Event\AssignmentWasDeleted',
            'Anomaly\Streams\Platform\Assignment\Listener\AssignmentDeletedListener'
        );
    }
}
