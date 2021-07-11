<?php
require_once 'IConfigurator.php';
require_once 'MultiplierConfigurator.php';

class SequenceGenerator
{

    private int $startFrom;
    private int $endAt;
    protected array $resultArray;



    function __construct(int $startFrom =1, int $endAt=100)
    {
        $this->startFrom=$startFrom;
        $this->endAt=$endAt;
        $this->resultArray = range($this->startFrom, $this->endAt);
    }

    /**
     * @return array
     */
    public function getResultArray(): array
    {
        return $this->resultArray;
    }


    /**
     * @param IConfigurator|null $configurator a class that implements the interface configurator
     * which manipulates the generated array sequence
     */
    public function generate(IConfigurator $configurator=null):void{
        if(!is_null($configurator)){
            foreach ($configurator->config($this->resultArray) as $i){
                echo $i."\n";
            }
        }else{
            foreach ($this->resultArray as $i){
                echo $i."\n";
            }
        }

    }

}