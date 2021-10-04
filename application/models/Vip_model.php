<?php 
class Vip_model extends CI_Model
{
    private $_table = "tango";

    public function viewVip()
    {
        return $this->db->get($this->_table)->result_array();
    }
    public function tambahVip()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'jabatan' => $this->input->post('jabatan', true)
        );
        $this->db->insert($this->_table, $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function ubahVip()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    } 


}
