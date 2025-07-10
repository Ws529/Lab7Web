<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class TestDb extends BaseController
{
    public function index()
    {
        // Test database connection and basic queries
        try {
            $db = \Config\Database::connect();
            
            echo "<h2>Database Connection Test</h2>";
            echo "<p>Database connected successfully!</p>";
            
            // Test artikel table
            echo "<h3>Artikel Table Test</h3>";
            $artikelModel = new ArtikelModel();
            $artikelCount = $artikelModel->countAllResults();
            echo "<p>Total articles: " . $artikelCount . "</p>";
            
            // Test kategori table
            echo "<h3>Kategori Table Test</h3>";
            $kategoriModel = new KategoriModel();
            $kategoriCount = $kategoriModel->countAllResults();
            echo "<p>Total categories: " . $kategoriCount . "</p>";
            
            // Test simple pagination
            echo "<h3>Simple Pagination Test</h3>";
            $articles = $artikelModel->paginate(5);
            echo "<p>Paginated articles (5 per page): " . count($articles) . " items</p>";
            
            // Test join query
            echo "<h3>Join Query Test</h3>";
            $joinQuery = $artikelModel
                ->select('artikel.*, kategori.nama_kategori')
                ->join('kategori', 'kategori.id_kategori = artikel.id_kategori', 'left')
                ->findAll(5);
            echo "<p>Join query result: " . count($joinQuery) . " items</p>";
            
            echo "<p style='color: green;'>All tests passed!</p>";
            
        } catch (\Exception $e) {
            echo "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
            echo "<p>File: " . $e->getFile() . "</p>";
            echo "<p>Line: " . $e->getLine() . "</p>";
        }
    }
}
