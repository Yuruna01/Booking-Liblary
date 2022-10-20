<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web programing 2 | Merancang Template sederhana dengan CodeIgniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Rentalbuku.net</h1>
                <h3>Membuat template sederhana dengan CodeIngniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/gambar' ?>">Gambar</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
