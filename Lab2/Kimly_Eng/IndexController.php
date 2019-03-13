<?php

require 'TemplateManager.php';
require 'DataStore.php';

class IndexController
{
    protected $data = [];
    protected $viewManager;

    public function indexAction()
    {

        $dataStore = new DataStore();

        $this->data['username'] = $dataStore->getUsername();
        $this->data['password'] = $dataStore->getPassword();

        $this->viewManager = new TemplateManager();
        $this->viewManager->setData($this->data);
        $this->viewManager->loadTemplate();

        $this->viewManager->render();
    }
}
