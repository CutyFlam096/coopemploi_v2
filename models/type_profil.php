<?php
class Type_profil
{
    public $id_type_profil;
	public $designation_type_profil;

    public $un_type;
	
    public function __construct($id_type_profil, $designation_type_profil){
        $this->id_type_profil = $id_type_profil;
        $this->designation_type_profil = $designation_type_profil;
    }


}

?>