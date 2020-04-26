<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{
    public function do_pelanggan_tampil()
    {
        return $this->db->query("SELECT * FROM pelanggan INNER JOIN tarif ON pelanggan.id_tarif=tarif.id_tarif ORDER BY nama_pelanggan ASC LIMIT 3")->result();
    }

    public function do_tarif_tampil()
    {
        return $this->db->query("SELECT * FROM tarif ORDER BY id_tarif ASC LIMIT 3")->result();
    }

    public function do_verifikasi_tampil()
    {
        return $this->db->query("SELECT * FROM pembayaran
                                INNER JOIN penggunaan ON pembayaran.id_penggunaan = penggunaan.id_penggunaan
                                INNER JOIN pelanggan ON penggunaan.id_pelanggan = pelanggan.id_pelanggan
                                INNER JOIN tarif ON pelanggan.id_tarif = tarif.id_tarif
                                WHERE pembayaran.status=1
                                ORDER BY id_pembayaran DESC LIMIT 4")->result();
    }

    public function do_historitransaksi_tampil()
    {
        return $this->db->query("SELECT * FROM pembayaran
                                LEFT JOIN penggunaan ON pembayaran.id_penggunaan = penggunaan.id_penggunaan
                                LEFT JOIN pelanggan ON penggunaan.id_pelanggan = pelanggan.id_pelanggan
                                LEFT JOIN tarif ON pelanggan.id_tarif = tarif.id_tarif
                                LEFT JOIN admin ON pembayaran.id_admin = admin.id_admin
                                ORDER BY id_pembayaran DESC LIMIT 3")->result();
    }
}