<?php

class Model_fiche_modif extends Model{ // Le nom de la classe est le nom du model avec une majuscule

	function recherche_infos($id,$table){
	
		$liste = $this->db->query("SELECT * FROM ".$table." WHERE id = '$id'");
		return $liste->row_array(); 
	}
	
	function update($id,$table){
	
		$this->db->query("");
	
	}

        function supImage($id,$new_name){
            $this->db->query("UPDATE details SET libelle_image='$new_name' WHERE id='".$id."'");
        }

}

?>