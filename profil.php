<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f4f8;
    margin: 0;
    padding: 0;
}

.profile-container {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
}

.profile-header {
    display: flex;
    align-items: center;
    border-bottom: 2px solid #eee;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.profile-photo {
    flex: 0 0 150px;
    margin-right: 20px;
}

.profile-photo img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 5px solid #007bff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.profile-info h1 {
    margin: 0;
    font-size: 2.5em;
    color: #333;
}

.profile-info .job-title {
    font-size: 1.3em;
    color: #007bff;
}

.profile-info .bio {
    margin-top: 10px;
    font-size: 1.1em;
    color: #555;
    line-height: 1.6;
}

.profile-details, .profile-social {
    margin-bottom: 20px;
}

.profile-details h2, .profile-social h2 {
    font-size: 1.7em;
    border-bottom: 3px solid #007bff;
    padding-bottom: 10px;
    margin-bottom: 15px;
    color: #333;
}

.profile-details ul, .profile-social ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.profile-details li, .profile-social li {
    margin-bottom: 12px;
    font-size: 1.1em;
    color: #666;
}

.profile-social a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s;
}

.profile-social a:hover {
    color: #0056b3;
    text-decoration: underline;
}

.profile-social ul {
    display: flex;
    gap: 15px;
}

.profile-social li {
    display: flex;
    align-items: center;
    font-size: 1.1em;
    color: #666;
}

.profile-social a {
    text-decoration: none;
    color: #007bff;
    display: flex;
    align-items: center;
    transition: color 0.3s;
}

.profile-social a:hover {
    color: #0056b3;
}

.profile-social i {
    font-size: 1.3em;
    margin-right: 8px;
}
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-photo">
                <img src="foto.jpg" alt="Foto Profil">
            </div>
            <div class="profile-info">
                <h1>Nama Pengguna</h1>
                <p class="job-title">Pelajar</p>
                <p class="bio">Ini adalah bio singkat mengenai pengguna. Anda bisa menulis beberapa kalimat tentang pengalaman, minat, atau keahlian Anda di sini.</p>
            </div>
        </div>
        <div class="profile-details">
            <h2>Informasi Pelanggan</h2>
            <ul>
                <li><strong>Email:</strong> pengguna@example.com</li>
                <li><strong>Telepon:</strong> +62 123 456 7890</li>
                <li><strong>Alamat:</strong> Jalan Contoh No. 123, Kota, Negara</li>
            </ul>
            <div class="profile-social">
    <h2>Media Sosial</h2>
    <ul>
        <li><a href="https://www.linkedin.com/in/pengguna" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
        <li><a href="https://instagram.com/pengguna" target="_blank"><i class="fab fa-instagram"></i> instagram</a></li>
        <li><a href="https://whatsapp.com/pengguna" target="_blank"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
    </ul>
    </div>
    </div>
</body>
</html>