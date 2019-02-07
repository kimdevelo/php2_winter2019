<?php

class TemplateManager
{
    //1
    protected $htmlOut;

    //Add new data property
    protected $data = [];

    //2
    public function loadTemplate()
    {
        $this->htmlOut = '<!DOCTYPE html>';
        $this->htmlOut .= '<html>';
        $this->htmlOut .= '<head>';
        $this->htmlOut .= '</head>';
        $this->htmlOut .= '<body>';
        $this->htmlOut .= '<form>';
        $this->htmlOut .= '<p>Hello '
            . $this->data['firstName']
            . ' '
            . $this->data['lastName']
            . ' '
            . $this->data['age']
            . '<br>';
        $this->htmlOut .= 'You are ' . $this->data['age'] . ' years old!</p>';

        $this->htmlOut .= '</body>';
        $this->htmlOut .= '</html>';
    }

    //3 - Rendering HTML
    public function render()
    {
        echo $this->htmlOut;
    }

    /**
     * @return mixed
     */
    public function getHtmlOut()
    {
        return $this->htmlOut;
    }

    /**
     * @param mixed $htmlOut
     * @return TemplateManager
     */
    public function setHtmlOut($htmlOut)
    {
        $this->htmlOut = $htmlOut;
        return $this;
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


}



