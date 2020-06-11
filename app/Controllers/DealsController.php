<?php

namespace App\Controllers;

use App\Core\View;
use App\Core\Mail;
use App\Core\Database;

class DealsController
{
    public function deals()
    {
        $applications = Database::database()->select('applications',
            ['[>]deals' => ['id' => 'application_id']],
            ['applications.id', 'applications.email', 'applications.amount', 'deals.partner'],
            ['status' => 'ask']
        );

        View::show('deals.php', [
            'applications' => $applications
        ]);
    }

    public function offer(array $params)
    {
        Database::database()->update('deals',
            ['status' => 'offer'],
            ['application_id' => $params['id']]
        );

        $confirmedClient = Database::database()->select('applications',
            ['[>]deals' => ['id' => 'application_id']],
            ['applications.id', 'applications.email'],
            ['application_id' => $params['id']]
        );

        $id = $confirmedClient[0]['id'];
        Mail::sendToClient($id);

        header('Location: /deals');
    }
}