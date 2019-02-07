<?php

require 'TemplateManager.php';
require 'DataStore.php';

class IndexController
{
    protected $data = [];
    protected $viewManager;

    // Method for one webpage
    // Create another method for other webpage (home page, contact page...)
    public function indexAction()
    {
        //hidden dependency (never create this inside the method indexAction();
        // this is exceptional
        $dataStore = new DataStore();

        //Taking it from the data store
        $this->data['firstName'] = $dataStore->getFirstName();
        $this->data['lastName'] = $dataStore->getLastName();
        $this->data['age'] = $dataStore->getAge();

        // And sending it to the view
        $this->viewManager = new TemplateManager();
        $this->viewManager->setData($this->data);
        $this->viewManager->loadTemplate();

        $this->viewManager->render();
    }
}

// Unit testing
// never have new, new DataStore inside the method because of the Unit Testing