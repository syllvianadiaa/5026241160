<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>menu laravel</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<!-- ICON -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* CONTAINER */
.container {
    width: 80%;
    max-width: 900px;
    background: white;
    border-radius: 25px;
    padding: 40px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.2);
}

/* HEADER */
.header {
    text-align: center;
    margin-bottom: 40px;
}

.header h1 {
    margin: 0;
    font-size: 36px;
    font-weight: 700;
}

.header p {
    margin-top: 10px;
    color: gray;
}

/* GRID */
.grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

/* BOX */
.box {
    padding: 18px 20px;
    border-radius: 15px;
    background: linear-gradient(145deg, #f0f0f0, #ffffff);
    box-shadow: 5px 5px 15px rgba(0,0,0,0.1),
                -5px -5px 15px rgba(255,255,255,0.7);
    display: flex;
    align-items: center;
    gap: 15px;
    cursor: pointer;
    transition: 0.3s;
}

/* ICON */
.box i {
    font-size: 18px;
    color: #667eea;
}

/* TEXT */
.box span {
    font-weight: 500;
}

/* HOVER */
.box:hover {
    transform: translateY(-5px) scale(1.02);
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 0 10px 25px rgba(102,126,234,0.4);
}

.box:hover i {
    color: white;
}

/* RESPONSIVE */
@media (max-width: 700px) {
    .grid {
        grid-template-columns: 1fr;
    }
}

</style>
</head>

<body>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h1>Sylvia Nadia M</h1>
        <p>5026241160</p>
    </div>

    <!-- GRID -->
    <div class="grid">

        <div class="box" onclick="location.href='blog.html'">
            <i class="fas fa-pen"></i>
            <span>Blog</span>
        </div>

        <div class="box" onclick="location.href='pertemuan1.html'">
            <i class="fas fa-book"></i>
            <span>Pertemuan 1</span>
        </div>

        <div class="box" onclick="location.href='pertemuan2.html'">
            <i class="fas fa-book-open"></i>
            <span>Pertemuan 2</span>
        </div>

        <div class="box" onclick="location.href='pertemuan3.html'">
            <i class="fas fa-laptop-code"></i>
            <span>Pertemuan 3</span>
        </div>

        <div class="box" onclick="location.href='pertemuan4.html'">
            <i class="fas fa-code"></i>
            <span>Pertemuan 4</span>
        </div>

        <div class="box" onclick="location.href='pertemuan5.html'">
            <i class="fas fa-database"></i>
            <span>Pertemuan 5</span>
        </div>

        <div class="box" onclick="location.href='dosen.html'">
            <i class="fas fa-user-tie"></i>
            <span>Dosen</span>
        </div>

        <div class="box" onclick="location.href='biodata.html'">
            <i class="fas fa-id-card"></i>
            <span>Biodata</span>
        </div>

    </div>

</div>

</body>
</html>
