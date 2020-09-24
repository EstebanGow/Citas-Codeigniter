<?php

class CitaModel extends CI_Model {

    public function create($citeData){
		$this->db->insert('cites',$citeData);
    }
    
    public function list(){
		$cite  = $this->db->query("SELECT * FROM cites")->result();
		return $cite;
    }
    
    public function delete($id){
		$this->db->delete('cites', $id);
    }

    public function cite($id){
        $cite  = $this->db->query("SELECT * FROM cites WHERE id = $id")->result();
		return $cite;
    }

    public function update($id, $citeData){
        $this->db->where('id', $id);
        $this->db->update('cites', $citeData);
    }
}

?>