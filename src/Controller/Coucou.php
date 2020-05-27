<?php


namespace Controller;


use Model\CoucouModel;
use View\CoucouView;

class Coucou
{
    public function Hello() {
        $view = new CoucouView();
        $model = new CoucouModel();
        $word = $model->hello();
        return $view->index($word);
    }

    public function coucou() {
        $view = new CoucouView();
        $model = new CoucouModel();
        $word = $model->coucou();
        return $view->index($word);
    }
}