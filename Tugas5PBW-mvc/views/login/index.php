<h2>Form Login</h2>
<form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST" class="login-form">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<style>
    h2 {
    color: #28a745; 
    text-align: center; 
    margin-top: 50px; 
}

.login-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #28a745;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="password"] {
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
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
}

button:hover {
    background-color: #218838;
}
</style>
