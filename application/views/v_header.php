<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming II | Merancang Template sederhana dengan CodeIgniter</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/pustaka-booking/assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Rentalbuku.net</h1>
                <h3>Membuat Template sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>  
