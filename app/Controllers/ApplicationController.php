<?php

namespace App\Controllers;

use App\Core\View;
use App\Core\Mail;
use App\Core\Database;

class ApplicationController
{
    public function apply()
    {
        View::show('application.php');
    }

    public function store()
    {
        if ($_POST['email'] != '' && $_POST['amount'] != '') {
            Database::database()->insert('applications', [
                'email' => $_POST['email'],
                'amount' => $_POST['amount']
            ]);

            $lastApplicationId = Database::database()->select('applications', 'id', [
                "ORDER" => [
                    "id" => "DESC"
                ]
            ]);

            $partner = $_POST['amount'] > 5000 ? 'A' : 'B';

            Database::database()->insert('deals', [
                'application_id' => $lastApplicationId[0],
                'partner' => $partner,
                'status' => 'ask',
            ]);

            Mail::sendToPartner($partner);
        }
        header('Location: /');
    }
}