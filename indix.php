<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KinoUz - O'zbekistonning eng yirik kinolar portali</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #e50914;
      --secondary: #221f1f;
      --accent: #0071eb;
      --text: #fff;
      --text-secondary: #b3b3b3;
      --background: #111;
      --card-bg: #181818;
    }
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: var(--background);
      color: var(--text);
      line-height: 1.6;
    }
    
    /* Header styles */
    header {
      background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, transparent 100%);
      padding: 20px 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 100;
      transition: background 0.3s;
    }
    
    header.scrolled {
      background: var(--secondary);
    }
    
    .logo {
      display: flex;
      align-items: center;
    }
    
    .logo h1 {
      color: var(--primary);
      margin: 0;
      font-size: 28px;
    }
    
    .logo span {
      color: var(--text);
    }
    
    nav ul {
      display: flex;
      list-style: none;
    }
    
    nav ul li {
      margin: 0 15px;
    }
    
    nav ul li a {
      color: var(--text);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }
    
    nav ul li a:hover {
      color: var(--primary);
    }
    
    .search-container {
      display: flex;
      align-items: center;
    }
    
    .search-container input {
      padding: 10px 15px;
      border-radius: 20px;
      border: none;
      background: rgba(255, 255, 255, 0.1);
      color: var(--text);
      width: 250px;
      transition: width 0.3s, background 0.3s;
    }
    
    .search-container input:focus {
      outline: none;
      background: rgba(255, 255, 255, 0.2);
      width: 300px;
    }
    
    .user-actions {
      display: flex;
      align-items: center;
      margin-left: 20px;
    }
    
    .user-actions button {
      background: var(--primary);
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      font-weight: bold;
      margin-left: 10px;
    }
    
    /* Hero section */
    .hero {
      height: 80vh;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1489599102910-59206b8ca314?ixlib=rb-4.0.3') no-repeat center center/cover;
      display: flex;
      align-items: center;
      padding: 0 5%;
      margin-bottom: 40px;
    }
    
    .hero-content {
      max-width: 600px;
    }
    
    .hero-content h2 {
      font-size: 3rem;
      margin-bottom: 20px;
    }
    
    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 25px;
      color: var(--text-secondary);
    }
    
    .hero-buttons {
      display: flex;
      gap: 15px;
    }
    
    /* Section styles */
    .section {
      padding: 20px 5%;
      margin-bottom: 30px;
    }
    
    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .section-header h2 {
      color: var(--text);
      font-size: 1.8rem;
      position: relative;
      padding-left: 15px;
    }
    
    .section-header h2::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      height: 80%;
      width: 4px;
      background: var(--primary);
      border-radius: 2px;
    }
    
    .view-all {
      color: var(--accent);
      text-decoration: none;
      font-weight: 500;
    }
    
    .view-all:hover {
      text-decoration: underline;
    }
    
    /* Movie grid */
    .movies {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 20px;
    }
    
    .movie {
      background: var(--card-bg);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
    }
    
    .movie:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }
    
    .movie-poster {
      position: relative;
      overflow: hidden;
      height: 300px;
    }
    
    .movie-poster img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s;
    }
    
    .movie:hover .movie-poster img {
      transform: scale(1.1);
    }
    
    .movie-rating {
      position: absolute;
      top: 10px;
      right: 10px;
      background: rgba(0, 0, 0, 0.7);
      color: #ffc107;
      padding: 5px 10px;
      border-radius: 20px;
      font-weight: bold;
      font-size: 0.9rem;
    }
    
    .movie-info {
      padding: 15px;
    }
    
    .movie-title {
      font-size: 1.1rem;
      margin-bottom: 8px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    
    .movie-meta {
      display: flex;
      justify-content: space-between;
      color: var(--text-secondary);
      font-size: 0.9rem;
      margin-bottom: 15px;
    }
    
    .movie-actions {
      display: flex;
      justify-content: space-between;
    }
    
    .btn {
      background: var(--primary);
      border: none;
      padding: 8px 15px;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: background 0.3s;
    }
    
    .btn:hover {
      background: #f40612;
    }
    
    .btn-watchlist {
      background: transparent;
      border: 1px solid var(--text-secondary);
      color: var(--text);
    }
    
    .btn-watchlist:hover {
      background: rgba(255, 255, 255, 0.1);
    }
    
    /* Categories */
    .categories {
      display: flex;
      gap: 15px;
      margin-bottom: 30px;
      overflow-x: auto;
      padding: 10px 0;
      scrollbar-width: none;
    }
    
    .categories::-webkit-scrollbar {
      display: none;
    }
    
    .category {
      background: var(--card-bg);
      padding: 10px 20px;
      border-radius: 20px;
      cursor: pointer;
      transition: background 0.3s;
      white-space: nowrap;
    }
    
    .category:hover, .category.active {
      background: var(--primary);
    }
    
    /* Footer */
    footer {
      background: var(--secondary);
      padding: 40px 5%;
      margin-top: 50px;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
    }
    
    .footer-column h3 {
      color: var(--text);
      margin-bottom: 20px;
      font-size: 1.2rem;
    }
    
    .footer-column ul {
      list-style: none;
    }
    
    .footer-column ul li {
      margin-bottom: 10px;
    }
    
    .footer-column ul li a {
      color: var(--text-secondary);
      text-decoration: none;
      transition: color 0.3s;
    }
    
    .footer-column ul li a:hover {
      color: var(--text);
    }
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }
    
    .social-links a {
      color: var(--text);
      font-size: 1.5rem;
      transition: color 0.3s;
    }
    
    .social-links a:hover {
      color: var(--primary);
    }
    
    .copyright {
      text-align: center;
      margin-top: 40px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: var(--text-secondary);
    }
    
    /* Responsive design */
    @media (max-width: 992px) {
      .movies {
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      }
      
      nav ul li {
        margin: 0 10px;
      }
    }
    
    @media (max-width: 768px) {
      header {
        flex-wrap: wrap;
      }
      
      .search-container {
        order: 3;
        width: 100%;
        margin-top: 15px;
      }
      
      .search-container input {
        width: 100%;
      }
      
      .hero-content h2 {
        font-size: 2.2rem;
      }
      
      .movies {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      }
    }
    
    @media (max-width: 576px) {
      nav {
        display: none;
      }
      
      .hero {
        height: 60vh;
      }
      
      .hero-content h2 {
        font-size: 1.8rem;
      }
      
      .hero-content p {
        font-size: 1rem;
      }
      
      .section-header h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <h1>Kino<span>Uz</span></h1>
    </div>
    
    <nav>
      <ul>
        <li><a href="#">Bosh sahifa</a></li>
        <li><a href="#">Filmlar</a></li>
        <li><a href="#">Seriallar</a></li>
        <li><a href="#">Multfilmlar</a></li>
        <li><a href="#">Yangi</a></li>
      </ul>
    </nav>
    
    <div class="search-container">
      <input type="text" placeholder="Film yoki serial qidirish...">
      <div class="user-actions">
        <button>Tizimga kirish</button>
      </div>
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h2>O'zbekistonning eng yirik kinolar portali</h2>
      <p>10,000 dan ortiq filmlar va seriallar bepul va yuqori sifatda</p>
      <div class="hero-buttons">
        <button class="btn"><i class="fas fa-play"></i> Hoziroq ko'rish</button>
        <button class="btn btn-watchlist"><i class="fas fa-plus"></i> Mening ro'yxatim</button>
      </div>
    </div>
  </section>

  <div class="section">
    <div class="section-header">
      <h2>Mashhur filmlar</h2>
      <a href="#" class="view-all">Barchasini ko'rish</a>
    </div>
    
    <div class="categories">
      <div class="category active">Barchasi</div>
      <div class="category">Jangari</div>
      <div class="category">Drama</div>
      <div class="category">Komediya</div>
      <div class="category">Fantastik</div>
      <div class="category">Qo‘rqinchli</div>
      <div class="category">Romantik</div>
    </div>
    
    <div class="movies">
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">8.5</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">Dunyoning chetidagi quyosh</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>2h 15m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">9.0</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">O'zbekiston farzandi</h3>
          <div class="movie-meta">
            <span>2022</span>
            <span>1h 50m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">7.8</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">Amir Temur sarguzashtlari</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>2h 30m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">8.2</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">Sirli uy</h3>
          <div class="movie-meta">
            <span>2022</span>
            <span>1h 45m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">8.9</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">Zamonaviy pahlavon</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>2h 05m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="section-header">
      <h2>Yangi qo'shilganlar</h2>
      <a href="#" class="view-all">Barchasini ko'rish</a>
    </div>
    
    <div class="movies">
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">8.1</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">Yulduzli tun</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>1h 55m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">7.9</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">O'qituvchi</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>2h 10m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">8.4</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">Sirdarya</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>2h 20m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
      
      <div class="movie">
        <div class="movie-poster">
          <img src="https://via.placeholder.com/300x450" alt="Movie">
          <div class="movie-rating">8.7</div>
        </div>
        <div class="movie-info">
          <h3 class="movie-title">O'zbekiston diyorim</h3>
          <div class="movie-meta">
            <span>2023</span>
            <span>1h 40m</span>
          </div>
          <div class="movie-actions">
            <button class="btn"><i class="fas fa-play"></i></button>
            <button class="btn-watchlist"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer-content">
      <div class="footer-column">
        <h3>KinoUz haqida</h3>
        <ul>
          <li><a href="#">Biz haqimizda</a></li>
          <li><a href="#">Karyera</a></li>
          <li><a href="#">Yangiliklar</a></li>
          <li><a href="#">Qanday ko'rish kerak</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Aloqa</h3>
        <ul>
          <li><a href="#">Bog'lanish</a></li>
          <li><a href="#">Qo'llab-quvvatlash</a></li>
          <li><a href="#">Fikr-mulohazalar</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Huquqiy</h3>
        <ul>
          <li><a href="#">Maxfiylik siyosati</a></li>
          <li><a href="#">Foydalanish shartlari</a></li>
          <li><a href="#">Cookie siyosati</a></li>
        </ul>
      </div>
      
      <div class="footer-column">
        <h3>Ijtimoiy tarmoqlar</h3>
        <div class="social-links">
          <a href="#"><i class="fab fa-telegram"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>
    
    <div class="copyright">
      <p>&copy; 2023 KinoUz. Barcha huquqlar himoyalangan.</p>
    </div>
  </footer>

  <script>
    // Header scroll effect
    window.addEventListener('scroll', function() {
      const header = document.querySelector('header');
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
    
    // Category selection
    const categories = document.querySelectorAll('.category');
    categories.forEach(category => {
      category.addEventListener('click', function() {
        categories.forEach(c => c.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>