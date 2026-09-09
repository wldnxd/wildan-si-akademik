<?php

class Mahasiswa
{
    public function getAll()
    {
        return[            
            ['nim' => '23001',
            'nama' => 'Wildan',
            'prodi' => 'Teknik Informatika'],

            ['nim' => '23002',
            'nama' => 'Ramadhani',
            'prodi' => 'Manajemen Informatika'],

            ['nim' => '23003',
            'nama' => 'Akbar',
            'prodi' => 'Teknik Komputer'],

            ['nim' => '23004',
            'nama' => 'Dinda',
            'prodi' => 'Teknik Informatika'],

            ['nim' => '23005',
            'nama' => 'Dimas',
            'prodi' => 'Teknik Rekayasa Komputer'],

            ['nim' => '23006',
            'nama' => 'Abi',
            'prodi' => 'Rekayasa Perangkat Lunak']
        ];
    }


    public function getByNim($nim)
    {
        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] == $nim) {
                return $mhs;
            }
        }
    }
}