<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pweb extends CI_Model
{
  public function read()
  {
    $this->db->order_by('nama_barang', 'desc');
    return $this->db->get('tbl_produk')->result_array();
  }
  public function create()
  {
    $kuantitas = $this->input->post('kuantitas');
    $harga = $this->input->post('harga');
    $total = $this->input->post('total');

    $data = [
      'nama_barang' => $this->input->post('nama_brg'),
      'kuantitas' => $kuantitas,
      'harga' => $harga,
      'total' => $total,
    ];

    $this->db->insert('tbl_produk', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('pweb', 'refresh');
    }
  }

  function get_row($id)
  {
    return $this->db->get_where('tbl_produk', ['id' => $id])->row_array();
  }

  function update()
  {
    $kuantitas = $this->input->post('kuantitas');
    $harga = $this->input->post('harga');
    $total = $this->input->post('total');

    $data = [
      'nama_barang' => $this->input->post('nama_brg'),
      'kuantitas' => $kuantitas,
      'harga' => $harga,
      'total' => $total,
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('tbl_produk', $data);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('pweb', 'refresh');
    }
  }

  function hapus($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tbl_produk',);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('pesan', 'Dihapus');
      redirect('pweb', 'refresh');
    }
  }
}


// ARCHIEVE

// function update()
//   {
//     $nilai1 = $this->input->post('n_pert1');
//     $nilai2 = $this->input->post('n_pert2');
//     $nilai3 = $this->input->post('n_pert3');
//     $nilai4 = $this->input->post('n_pert4');
//     $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;

//     $data = [
//       'nama_mahasiswa' => $this->input->post('nama_mhs'),
//       'nilai1' => $nilai1,
//       'nilai2' => $nilai2,
//       'nilai3' => $nilai3,
//       'nilai4' => $nilai4,
//       'rata' => $rata,
//     ];

//     $this->db->where('id', $this->input->post('id'));
//     $this->db->update('tbl_produk', $data);
//     if ($this->db->affected_rows() > 0) {
//       $this->session->set_flashdata('pesan', 'Diubah');
//       redirect('pweb', 'refresh');
//     }
//   }