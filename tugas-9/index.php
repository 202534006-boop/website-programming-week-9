<?php
$search = $_GET['search'] ?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 9 - GET dan POST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Tugas 9 - HTTP, PHP, dan Form Handling</h1>
    </header>

    <main>

        <section>
            <h2>Pencarian</h2>

            <form method="GET" action="index.php">

                <label for="search">Cari:</label>

                <input
                    type="search"
                    id="search"
                    name="search"
                    value="<?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?>"
                >

                <button type="submit">Cari</button>

            </form>

            <?php if ($search !== ''): ?>

                <p>
                    Hasil pencarian untuk:
                    <?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8'); ?>
                </p>

            <?php endif; ?>

        </section>
        <section>
    <h2>Form Kontak</h2>

    <form action="process.php" method="POST">

        <div>
            <label for="nama">Nama:</label>
            <input
                type="text"
                id="nama"
                name="nama"
                required
            >
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                required
            >
        </div>

        <br>

        <div>
            <label for="pesan">Pesan:</label>
            <textarea
                id="pesan"
                name="pesan"
                required
            ></textarea>
        </div>

        <br>

        <button type="submit">Kirim</button>

    </form>
</section>

    </main>

</body>
</html>