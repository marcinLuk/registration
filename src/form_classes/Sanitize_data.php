<?php 

class Sanitize_data
{
    private $sanitize_data = array();
    private $data = array();

    function __construct ($array) {
        $this->data = $array;
    }
    public function sanitize() {

        foreach ($this->data as $key => $val) {
            
            $trimmed_val = trim($val);
            
            // sanitize data 
            if($key == 'email'){
                $this->sanitize_data[$key] = filter_var($trimmed_val, FILTER_SANITIZE_EMAIL);
            } else  {
                $this->sanitize_data[$key] = filter_var($trimmed_val, FILTER_SANITIZE_STRING);
            }
        }

        return $this->sanitize_data;
    }

}


?>