<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = [
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
            [
                'nama_barang' => 'Barang ' . rand(1, 20),
                'gambar_barang' => 'placeholder.jpg',
                'desc_barang' => $faker->paragraph(5),
                'harga_barang' => rand(1, 9) . 0000,
                'kategori_barang' => 'Test Kategori',
                'stok_barang' => rand(50, 99),
                'jam_tgl_upload' => date('D, d M Y'),
            ],
        ];

        $this->db->table('barang')->insertBatch($data);
    }
}
