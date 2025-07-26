<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql; // Import RawSql untuk CURRENT_TIMESTAMP jika dibutuhkan

class CreatePortofolioTable extends Migration
{
    public function up()
    {
        // Definisikan kolom untuk tabel 'portofolio'
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true, // Pastikan nilai tidak negatif
                'auto_increment' => true, // Otomatis bertambah
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false, // Tidak boleh kosong
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true, // Boleh kosong
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true, // Boleh kosong
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true, // Boleh kosong, akan diisi oleh CodeIgniter Model
                // 'default' => new RawSql('CURRENT_TIMESTAMP'), // Opsional: Jika ingin diatur di DB level
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true, // Boleh kosong, akan diisi oleh CodeIgniter Model
                // 'default' => new RawSql('CURRENT_TIMESTAMP'), // Opsional: Jika ingin diatur di DB level
                // 'on_update' => new RawSql('CURRENT_TIMESTAMP'), // Opsional: Jika ingin diatur di DB level
            ],
        ]);

        // Tambahkan Primary Key
        $this->forge->addPrimaryKey('id');

        // Buat tabel 'portofolio'
        $this->forge->createTable('portofolio', true); // 'true' untuk menambahkan IF NOT EXISTS
    }

    public function down()
    {
        // Hapus tabel 'portofolio' jika migrasi di-rollback
        $this->forge->dropTable('portofolio', true); // 'true' untuk menambahkan IF EXISTS
    }
}