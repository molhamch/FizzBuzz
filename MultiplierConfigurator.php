<?php
require_once 'IConfigurator.php';


class MultiplierConfigurator implements IConfigurator
{
    private array $config;

    public function __construct($config = [])
    {
        $this->config = $config;
    }

    /**
     * @param array $inputArray the array which will be manipulated
     * @return array
     */
    public function config(array $inputArray): array
    {
        for($i=0; $i<count($inputArray); $i++){
            $wordSequence = "";
            foreach ($this->config as $multiplier => $word){
                if(is_numeric($multiplier)){
                    if($inputArray[$i] % $multiplier==0){
                        $wordSequence .= $word;
                    }
                }
            }
            $inputArray[$i] = !empty($wordSequence) ?  $wordSequence : $inputArray[$i];
        }
      return $inputArray;
    }
}