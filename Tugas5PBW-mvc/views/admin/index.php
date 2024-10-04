<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: Arial, sans-serif;
            margin: 20px; 
        }

        h2 {
            color: #28a745; 
            text-align: center; 
            margin-bottom: 20px; 
        }

        a {
            color: #007bff; 
            text-decoration: none; 
            margin: 0 10px; 
        }

        a:hover {
            text-decoration: underline; 
        }

        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
        }

        th, td {
            text-align: left; 
            padding: 10px; 
            border: 1px solid #ccc; 
        }

        th {
            background-color: #28a745; 
            color: white; 
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

        tr:hover {/
            background-color: #e9ecef; 
        }
    </style>
</head>
<body>

    <h2>Halaman Admin</h2>
    <a href="<?= BASEURL; ?>index.php?url=admin/add">Tambah Barang</a> | 
    <a href="<?= BASEURL; ?>index.php?url=login/logout">Logout</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data['items'] as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['nama']; ?></td>
            <td><?= $item['stok']; ?></td>
            <td><?= $item['harga']; ?></td>
            <td>
                <a href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>">Edit</a> |
                <a href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
