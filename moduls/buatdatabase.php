<?php
    function createdata(){
        //Buka Koneksi
        $cnn = new mysqli(DBSERVER,DBUSER,DBPWD,DBNAME,DBPORT);  
        if ($cnn->connect_error) {
            die("Connection failed: " . $cnn->connect_error);
        }

        //Membuat Tabel
        $table = "mhs";
        $sql = "CREATE TABLE $table(
            NIM varchar(8) PRIMARY KEY,
            NAMA varchar(30) NOT NULL,
            ALAMAT varchar(50) NOT NULL,
            KOTA varchar(50),
            JK varchar(1),
            TGL_LAHIR date
        );";

        if ($cnn->query($sql) === TRUE) {
            echo "<br>Table $table created successfully";
        } else {
            echo "Error Created Table $table: " . $cnn->error;
        }

        //tutup koneksi
        $cnn->close();
    }

    function createdb(){
        //Buka Koneksi
        $cnn = new mysqli(DBSERVER,DBUSER,DBPWD);
        if ($cnn->connect_error) {
            die("Connection failed: " . $cnn->connect_error);
        }
        
        //membuat database
        $sql = "CREATE DATABASE ".DBNAME .";";
        if ($cnn->query($sql) === TRUE) {
            echo "<br>Database created successfully";
        } else {
            echo "Error creating database: " . $cnn->error;
        }

        //tutup koneksi
        $cnn->close();
    }
    function dropdb(){
        //Buka Koneksi
        $cnn = new mysqli(DBSERVER,DBUSER,DBPWD);
        if ($cnn->connect_error) {
            die("Connection failed: " . $cnn->connect_error);
        }
        
        //menghapus database
        $sql = "DROP DATABASE ".DBNAME.";";
        if ($cnn->query($sql) === TRUE) {
            echo "<br>Database Dropped successfully";
        } else {
            echo "Error creating database: " . $cnn->error;
        }

        //tutup koneksi
        $cnn->close();   
    }