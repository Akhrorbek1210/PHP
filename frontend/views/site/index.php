<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizika va Matematika Fakulteti</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header-bg {
            background: linear-gradient(to bottom, #007bff, #0056b3);
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .section {
            padding: 40px 0;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .table thead {
            background-color: #007bff;
            color: white;
        }
        .carousel-item {
            height: 400px;
        }
        .carousel-item img {
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Navigatsiya paneli -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">FizMat Fakulteti</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Bosh sahifa</a></li>
                <li class="nav-item"><a class="nav-link" href="#students">Talabalar uchun</a></li>
                <li class="nav-item"><a class="nav-link" href="#departments">Kafedralar</a></li>
                <li class="nav-item"><a class="nav-link" href="#news">So'nggi yangiliklar</a></li>
                <li class="nav-item"><a class="nav-link" href="#forum">Forum</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<div class="container text-center header-bg mt-4">
    <h1>Fizika va Matematika Fakulteti</h1>
    <p>Fakultetimizga xush kelibsiz!</p>
</div>

<!-- Talabalar uchun -->
<div class="container section" id="students">
    <h2 class="text-center">Talabalar uchun</h2>
    <div class="list-group">
        <a href="#" class="list-group-item" data-bs-toggle="modal" data-bs-target="#scheduleModal">📅 Dars jadvali</a>
        <a href="#" class="list-group-item" data-bs-toggle="modal" data-bs-target="#examModal">📝 Imtihon natijalari</a>
        <a href="#" class="list-group-item" data-bs-toggle="modal" data-bs-target="#materialsModal">📚 O'quv materiallari</a>
    </div>
</div>

<!-- Kafedralar bo'limi -->
<div class="container section" id="departments">
    <h2 class="text-center">Kafedralar</h2>
    <ul class="list-group">
        <li class="list-group-item">Matematika va informatika kafedrasi</li>
        <li class="list-group-item">Fizika kafedrasi</li>
        <li class="list-group-item">Oliy matematika kafedrasi</li>
        <li class="list-group-item">Axborot texnologiyalari kafedrasi</li>
    </ul>
</div>

<!-- So'nggi yangiliklar -->
<div class="container section" id="news">
    <h2 class="text-center">So'nggi yangiliklar</h2>
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/rasmoquv.jpg  " class="d-block w-100" alt="Yangilik 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Talabalar konferensiyasi</h5>
                    <p>2024-yil 15-fevral kuni fakultetimizda ilmiy-amaliy konferensiya bo'lib o'tadi. Barcha talabalar taklif qilinadi.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/rasmoquv.jpg" class="d-block w-100" alt="Yangilik 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ochiq darslar haftaligi</h5>
                    <p>Mart oyida o'qituvchilarimiz tomonidan ochiq darslar tashkil etiladi.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/rasmoquv.jpg" class="d-block w-100" alt="Yangilik 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Yangi fanlar kiritilishi</h5>
                    <p>Fakultetimizda yangi fanlar kiritilishi haqida batafsil ma'lumot.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Oldinga</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Orqaga</span>
        </button>
    </div>
</div>

<!-- Forum bo'limi -->
<div class="container section" id="forum">
    <h2 class="text-center">SAVOLLAR VA TAKLIFLAR</h2>
    <div class="mb-3">
        <textarea class="form-control" id="forumInput" rows="3" placeholder="Fikrlaringizni yozing..."></textarea>
        <button class="btn btn-primary mt-2" id="postButton">Yuborish</button>
    </div>
    <div id="forumPosts" class="list-group">
        <!-- Fikrlar shu yerda joylashadi -->
    </div>
</div>

<!-- Modal: Dars jadvali -->
<div class="modal fade" id="scheduleModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dars jadvali</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead><tr><th>Kun</th><th>Vaqt</th><th>Fan</th><th>O'qituvchi</th></tr></thead>
                    <tbody>
                    <tr><td>Dushanba</td><td>08:00 - 09:30</td><td>Matematika</td><td>Aliyev A.</td></tr>
                    <tr><td>Seshanba</td><td>10:00 - 11:30</td><td>Fizika</td><td>Qodirova N.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
DDD <!-- Modal: Imtihon natijalari -->
<div class="modal fade" id="examModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Imtihon natijalari</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead><tr><th>Talaba</th><th>Fan</th><th>Natija</th></tr></thead>
                    <tbody>
                    <tr><td>Aliyev A.</td><td>Matematika</td><td>85%</td></tr>
                    <tr><td>Qodirova N.</td><td>Fizika</td><td>90%</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal: O'quv materiallari -->
<div class="modal fade" id="materialsModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">O'quv materiallari</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Matematika darsligi</a></li>
                    <li class="list-group-item"><a href="#">Fizika darsligi</a></li>
                    <li class="list-group-item"><a href="#">Oliy matematika darsligi</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript: Forum funksiyasi -->
<script>
    document.getElementById('postButton').addEventListener('click', function() {
        const input = document.getElementById('forumInput').value;
        if (input) {
            const newPost = document.createElement('div');
            newPost.className = 'list-group-item';
            newPost.innerText = input;
            document.getElementById('forumPosts').appendChild(newPost);
            document.getElementById('forumInput').value = ''; // Inputni tozalash
        } else {
            alert('Iltimos, fikr yozing!');
        }
    });
</script>

</body>
</html>