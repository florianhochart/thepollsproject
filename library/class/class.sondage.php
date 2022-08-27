<?php 
class Sondage
{
    private $_id;
    
    function __construct($id)
    {
        $this->_id = $id;
    }

    public function getId(){
    	return $this->_id;
    }
}
?>