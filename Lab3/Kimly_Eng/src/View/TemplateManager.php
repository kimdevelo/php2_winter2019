<?php
/* Login App using Bootstrap Compact Login Form BS 3 */

namespace Application\View;

class TemplateManager
{

    protected $html;
    protected $data = [];
    protected $userMessage;


    public function loadFormTemplate()
    {
        $this->html = require 'templates' . DIRECTORY_SEPARATOR . 'form.php';
    }

    public function loadTemplate()
    {
        $this->html = require 'templates' . DIRECTORY_SEPARATOR . 'index.php';
    }

    public function render()
    {
        echo $this->html;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return TemplateManager
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserMessage()
    {
        return $this->userMessage;
    }

    /**
     * @param mixed $userMessage
     * @return TemplateManager
     */
    public function setUserMessage($userMessage)
    {
        $this->userMessage = $userMessage;
        return $this;
    }

}
