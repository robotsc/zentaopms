<?php
class browsePage extends page
{
    public function __construct($webdriver)
    {
        parent::__construct($webdriver);
        $xpath = array(
            'totalNum'  => "//*[@data-id='totalStatus']/span[2]",
            'firstName' => "//*[@id='table-testtask-browse']/div[2]/div[1]/div/div[2]/div/a"
        );
        $this->dom->xpath = array_merge($this->dom->xpath, $xpath);
    }
}
