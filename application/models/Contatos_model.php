<?php
class Contatos_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    
    public function get_contatos($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('contatos');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('contatos', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_contato($id = 0)
    {
        $this->load->helper('url');
  
        $data = array(
            'nome'   => $this->input->post('nome'),
            'email'  => $this->input->post('email'),
            'numero' => $this->input->post('numero'),
            'ddd'    => $this->input->post('ddd')
        );
        if ($id == 0) {
            return $this->db->insert('contatos', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('contatos', $data);
        }
    }
    
    public function delete_contato($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contatos');
    }
}
