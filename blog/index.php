<!DOCTYPE html>
<html lang="en">
<head>
  <title>Health Blog | Sankalp Hospital - Expert Health Tips & Articles</title>
  <meta name="description" content="Read expert health tips, medical articles, and healthcare advice from Sankalp Hospital doctors.">
  <?php include '../includes/header-code.php'; ?>
  <style>
    .blog-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: all 0.3s; height: 100%; display: flex; flex-direction: column; }
    .blog-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(22,128,119,0.18); }
    .blog-card-img { width: 100%; height: 200px; object-fit: cover; display: block; }
    .blog-icon-bg { width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, var(--bg-soft) 0%, #d4edeb 100%); }
    .blog-icon-bg i { font-size: 48px; color: var(--primary); }
    .blog-body { padding: 22px 20px; flex: 1; display: flex; flex-direction: column; }
    .blog-category { display: inline-block; background: var(--primary); color: #fff; padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px; }
    .blog-body h3 { font-size: 17px; font-weight: 700; margin: 0 0 10px; line-height: 1.4; }
    .blog-body h3 a { color: var(--dark); transition: color 0.2s; }
    .blog-body h3 a:hover { color: var(--primary); }
    .blog-body p { font-size: 14px; color: #666; margin: 0 0 15px; line-height: 1.6; flex: 1; }
    .blog-meta { font-size: 12px; color: #888; margin-top: auto; }
    .blog-meta i { color: var(--primary); margin-right: 4px; }
    .page-hero { background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: #fff; padding: 60px 0 50px; text-align: center; }
    .page-hero p.breadcrumbs { color: rgba(255,255,255,0.85); font-size: 14px; margin-bottom: 10px; }
    .page-hero p.breadcrumbs a { color: #fff; }
    .page-hero h1 { color: #fff; font-size: 2.5rem; font-weight: 700; margin-bottom: 10px; }
    .page-hero p { color: rgba(255,255,255,0.9); font-size: 16px; margin: 0; }
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <p class="breadcrumbs"><a href="/index.php">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Health Blog</p>
    <h1>Health Tips & Articles</h1>
    <p>Expert health advice and medical information from our experienced doctors</p>
  </div>
</section>

<!-- BLOG GRID 3x3 -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <!-- Row 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1505576399279-565b52d4ac71?w=600&h=400&fit=crop" alt="Moringa for Diabetes" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Nutrition & Diabetes</span>
            <h3><a href="what-is-the-best-way-to-take-moringa-for-diabetes.php">What is the Best Way to Take Moringa for Diabetes?</a></h3>
            <p>Discover how Moringa can help manage blood sugar levels naturally. Expert guidance on dosage, timing, and preparation.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Sanjay Goyal</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&h=400&fit=crop" alt="ACL Surgery Recovery" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="will-your-knee-feel-100-percent-normal-after-acl-surgery-recovery-facts.php">Will Your Knee Feel 100% Normal After ACL Surgery?</a></h3>
            <p>Expert guide on ACL surgery recovery expectations, timeline, and realistic outcomes after reconstruction.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Tanay Goyal</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1512314889357-e157c22f938d?w=600&h=400&fit=crop" alt="Homeopathic Remedy for Headache" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Homeopathy</span>
            <h3><a href="homeopathic-remedy-for-headache-natural-relief-guide.php">Homeopathic Remedy for Headache: Natural Relief</a></h3>
            <p>Discover effective homeopathic remedies for different types of headaches. Expert guidance on natural relief.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Ankit Sharma</div>
          </div>
        </div>
      </div>
      <!-- Row 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=600&h=400&fit=crop" alt="Pair Me Jhunjhuni" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Neurology</span>
            <h3><a href="pair-me-jhunjhuni-hona.php">पैर में झनझनाहट (Jhunjhuni) होना</a></h3>
            <p>पैर में झनझनाहट के कारण, लक्षण और उपचार। जानें इस समस्या के बारे में विस्तार से।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Ankit Sharma</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=600&h=400&fit=crop" alt="Gas Se Peeth Dard" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Gastrology</span>
            <h3><a href="gas-se-peeth-dard-kyun-hota-hai.php">गैस से पीठ दर्द क्यों होता है?</a></h3>
            <p>गैस से पीठ दर्द के कारण, लक्षण और उपाय। जानें कैसे पेट की गैस पीठ पर दर्द कर सकती है।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Sanjay Goyal</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1576633587382-13ddf37b1fc1?w=600&h=400&fit=crop" alt="Pair Me Khujli" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Skin Care</span>
            <h3><a href="pair-me-khujli-hona.php">पैर में खुजली होना (Khujli)</a></h3>
            <p>पैर में खुजली के कारण, घरेलू उपाय और इलाज। जानें इस समस्या के बारे में।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Lata Goyal</div>
          </div>
        </div>
      </div>
      <!-- Row 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&h=400&fit=crop" alt="Lungs Me Dard" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Pulmonology</span>
            <h3><a href="lungs-me-dard-hona.php">फेफड़ों में दर्द (Lungs Me Dard)</a></h3>
            <p>फेफड़ों में दर्द के कारण, लक्षण और इलाज। जानें कब इस समस्या को गंभीर मानना चाहिए।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Shailesh Gupta</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=600&h=400&fit=crop" alt="Pair Me Jalan" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">General Medicine</span>
            <h3><a href="pair-me-jalan.php">पैरों में जलन (Jalan)</a></h3>
            <p>पैरों में जलन के कारण, इलाज और घरेलू उपाय। जानें क्यों होती है और क्या करें।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Sanjay Goyal</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?w=600&h=400&fit=crop" alt="BP High" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Hypertension</span>
            <h3><a href="bp-high-hone-par-kya-kare.php">BP High होने पर क्या करें?</a></h3>
            <p>उच्च रक्तचाप (BP High) होने पर क्या करें, क्या खाएं, क्या न खाएं। लक्षण और उपाय।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Shailesh Gupta</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Row -->
    <div class="row g-4 justify-content-center mt-4">
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?w=600&h=400&fit=crop" alt="HIV Symptoms in Women" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Infectious Diseases</span>
            <h3><a href="hiv-symptoms-in-women.php">HIV Symptoms in Women: What You Need to Know</a></h3>
            <p>Early signs, stages, and what to do if you think you may be infected. Expert guidance on HIV awareness.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Ankit Sharma</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=400&fit=crop" alt="Pair Me Sujan" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">General Medicine</span>
            <h3><a href="pair-me-sujan.php">पैरों में सूजन (Sujan)</a></h3>
            <p>पैरों में सूजन के कारण, लक्षण और इलाज। जानें कब डॉक्टर से मिलना चाहिए।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026 &nbsp; <i class="far fa-user"></i> Dr. Sanjay Goyal</div>
          </div>
        </div>
      </div>
    </div>

    <!-- View All Button -->
    <div class="text-center mt-5">
      <a href="/index.php" class="btn btn-outline-primary"><i class="fas fa-home me-2"></i>Back to Home</a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>