<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<body>
    <h1>Contact Us</h1>
    <?php foreach ($addres as $a) : ?>
    <ul>
        <li> <?= $a['tipe']; ?> </li>
        <li><?= $a['alamat']; ?> </li>
        <li> <?= $a['kota']; ?> </li>
    </ul>
    <?php endforeach; ?>

</body>


<?= $this->endSection(); ?>