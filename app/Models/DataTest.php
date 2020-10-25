<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTest extends Model
{
    public function get_product()
    {
        return $this->db->table('product')->get()->getResultArray();
    }

    public function get_data()
    {
        return $this->db->table('riwayatdatakab')
            ->join('jenisdata', 'jenisdata.id_jenis_data=riwayatdatakab.id_jenis_data')
            ->join('kabupaten', 'kabupaten.kd_kab=riwayatdatakab.kd_kab')
            // ->where('riwayatdatakab.id_jenis_data', 65)
            ->get()->getResultArray();
    }
    public function get_luasdaratan()
    {
        $data1 = $this->db->table('riwayatdatakab')
            ->join('jenisdata', 'jenisdata.id_jenis_data=riwayatdatakab.id_jenis_data')
            ->join('kabupaten', 'kabupaten.kd_kab=riwayatdatakab.kd_kab')
            ->where('jenisdata.id_subsek', 25)
            ->where('thn=2018')
            ->orderBy('jenisdata.nm_jenis_data', 'ASC')
            ->get()->getResultArray();
        $data2 = $this->db->table('riwayatdatakab')
            ->join('jenisdata', 'jenisdata.id_jenis_data=riwayatdatakab.id_jenis_data')
            ->where('jenisdata.id_subsek', 25)
            ->where('thn=2015')
            ->orderBy('jenisdata.nm_jenis_data', 'ASC')
            ->get()->getResultArray();
        $data3 = $this->db->table('riwayatdatakab')
            ->join('jenisdata', 'jenisdata.id_jenis_data=riwayatdatakab.id_jenis_data')
            ->where('jenisdata.id_subsek', 25)
            ->where('thn=2016')
            ->orderBy('jenisdata.nm_jenis_data', 'ASC')
            ->get()->getResultArray();
        $data4 = $this->db->table('riwayatdatakab')
            ->join('jenisdata', 'jenisdata.id_jenis_data=riwayatdatakab.id_jenis_data')
            ->where('jenisdata.id_subsek', 25)
            ->where('thn=2017')
            ->orderBy('jenisdata.nm_jenis_data', 'ASC')
            ->get()->getResultArray();

        $result = array();
        foreach ($data1 as $key => $value) {
            $item = array();
            $item['Kabupaten'] = $value['nm_kab'];
            $item['Jenis'] = $value['nm_jenis_data'];
            $item['2015'] = $data2[$key]['jlh_data'];
            $item['2016'] = $data3[$key]['jlh_data'];
            $item['2017'] = $data4[$key]['jlh_data'];
            $result[] = $item;
        }
        return $result;
    }

    public function get_databar()
    {
        return $this->db->table('riwayatdatakab')
            ->join('jenisdata', 'jenisdata.id_jenis_data=riwayatdatakab.id_jenis_data')
            ->where('jenisdata.id_subsek', 25)
            ->where('thn=2015')
            ->get()->getResultArray();
    }
}
