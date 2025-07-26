<?php

namespace Config;

use CodeIgniter\Database\Config;
use CodeIgniter\Database\RawSql; // Pastikan ini ada jika Anda menggunakannya di migrasi

/**
 * Database Configuration
 */
class Database extends Config
{
    // ... (bagian atas file tetap sama) ...

    public function __construct()
    {
        parent::__construct();

        // --- BARIS DEBUGGING BARU ---
        echo "\n--- DEBUG DATABASE CONFIG ---\n";
        echo "Hostname: " . env('database.default.hostname', 'NOT_SET') . "\n";
        echo "Database: " . env('database.default.database', 'NOT_SET') . "\n";
        echo "Username: " . env('database.default.username', 'NOT_SET') . "\n";
        echo "Password: '" . env('database.default.password', 'NOT_SET') . "'\n"; // Tampilkan password untuk debug
        echo "DBDriver: " . env('database.default.DBDriver', 'NOT_SET') . "\n";
        echo "--- END DEBUG ---\n\n";
        // --- AKHIR BARIS DEBUGGING BARU ---

        // Mengambil nilai dari file .env jika ada
        if (ENVIRONMENT === 'development') {
            $this->default['hostname'] = env('database.default.hostname', $this->default['hostname']);
            $this->default['username'] = env('database.default.username', $this->default['username']);
            $this->default['password'] = env('database.default.password', $this->default['password']);
            $this->default['database'] = env('database.default.database', $this->default['database']);
            $this->default['port']     = env('database.default.port', $this->default['port']);
        }
    }
}