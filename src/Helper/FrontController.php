<?php


namespace Helper;


use Controller\Coucou;

class FrontController
{
    public function __construct()
    {
        $action = $_POST[ADMIN_ACTION_PARAM] ?? $_GET[ADMIN_ACTION_PARAM] ?? '';
        switch ($action) {
            case "toto":
                $coucou = new Coucou();
                $coucou->coucou();
                break;
            default:
                $coucou = new Coucou();
                $coucou->Hello();
                break;
        }
    }
}