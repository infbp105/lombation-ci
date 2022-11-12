<?php
class Lomba_model extends CI_Model
{
    public function getAllLomba()
    {
        return $query = $this->db->get('lombation')->result_array();
    }
    public function tambahDataLomba()
    {
        $data = [
            "kategori_lomba" => $this->input->post('kategori_lomba', true),
            "jml_lomba" => $this->input->post('jml_lomba', true)
        ];
        $this->db->insert('lombation', $data);
    }
    public function hapusDataLomba($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lombation');
    }
    public function getLombaById($id)
    {
        return $this->db->get_where('lombation', ['id' => $id])->row_array();
    }
    public function ubahDataLomba()
    {
        $data = [
            "kategori_lomba" => $this->input->post('kategori_lomba', true),
            "jml_lomba" => $this->input->post('jml_lomba', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('lombation', $data);
    }
    public function get($id = null, $limit = 5, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('lombation', $limit, $offset)->result();
        } else {
            return $this->db->get_where('lombation', ['id' => $id])->result_array();
        }
    }
    public function count()
    {
        return $this->db->get('lombation')->num_rows();
    }
}
