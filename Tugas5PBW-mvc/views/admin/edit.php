<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
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

        form {
            max-width: 400px; 
            margin: 0 auto; 
            padding: 20px; 
            border: 2px solid #28a745; 
            border-radius: 10px; 
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        label {
            font-weight: bold; 
            margin-top: 10px; 
            display: block; 
        }

        input[type="text"],
        input[type="number"] {
            width: 95%; 
            padding: 10px; 
            margin-top: 5px; 
            margin-bottom: 15px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }

        button {
            background-color: #28a745; 
            color: white;
            padding: 10px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            width: 100%; 
        }

        button:hover {
            background-color: #218838; 
        }
    </style>
</head>
<body>

    <h2>Edit Barang</h2>
    <form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST">
        <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $data['item']['nama']; ?>" required>
        
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" value="<?= $data['item']['stok']; ?>" required>
        
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="<?= $data['item']['harga']; ?>" required>
        
        <button type="submit">Update</button>
    </form>

</body>
</html>
