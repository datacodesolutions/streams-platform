<?php namespace Anomaly\Streams\Platform\Ui\Table;

use Anomaly\Streams\Platform\Ui\Table\Contract\TableActionInterface;

/**
 * Class TableAction
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Ui\Table
 */
class TableAction implements TableActionInterface
{

    /**
     * The table UI class.
     *
     * @var
     */
    protected $ui;

    /**
     * Create a new TableAction instance.
     *
     * @param TableUi $ui
     */
    function __construct(TableUi $ui)
    {
        $this->ui = $ui;
    }

    /**
     * Handle the table action.
     *
     * @throws \Exception
     */
    public function handle()
    {
        throw new \Exception("The handle method should be overridden.");
    }

}
 