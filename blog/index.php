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
    <p class="breadcrumbs"><a href="/index">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Health Blog</p>
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
          <img src="/assets/img/blog/moringa-diabetes.png" alt="Moringa for Diabetes" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Nutrition & Diabetes</span>
            <h3><a href="what-is-the-best-way-to-take-moringa-for-diabetes">What is the Best Way to Take Moringa for Diabetes?</a></h3>
            <p>Discover how Moringa can help manage blood sugar levels naturally. Expert guidance on dosage, timing, and preparation.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/acl-surgery.png" alt="ACL Surgery Recovery" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="will-your-knee-feel-100-percent-normal-after-acl-surgery-recovery-facts">Will Your Knee Feel 100% Normal After ACL Surgery?</a></h3>
            <p>Expert guide on ACL surgery recovery expectations, timeline, and realistic outcomes after reconstruction.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/headache.png" alt="Homeopathic Remedy for Headache" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Homeopathy</span>
            <h3><a href="homeopathic-remedy-for-headache-natural-relief-guide">Homeopathic Remedy for Headache: Natural Relief</a></h3>
            <p>Discover effective homeopathic remedies for different types of headaches. Expert guidance on natural relief.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <!-- Row 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/numbness-feet.png" alt="Pair Me Jhunjhuni" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Neurology</span>
            <h3><a href="pair-me-jhunjhuni-hona">पैर में झनझनाहट (Jhunjhuni) होना</a></h3>
            <p>पैर में झनझनाहट के कारण, लक्षण और उपचार। जानें इस समस्या के बारे में विस्तार से।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/gas-back-pain.png" alt="Gas Se Peeth Dard" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Gastrology</span>
            <h3><a href="gas-se-peeth-dard-kyun-hota-hai">गैस से पीठ दर्द क्यों होता है?</a></h3>
            <p>गैस से पीठ दर्द के कारण, लक्षण और उपाय। जानें कैसे पेट की गैस पीठ पर दर्द कर सकती है।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/itchy-feet.png" alt="Pair Me Khujli" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Skin Care</span>
            <h3><a href="pair-me-khujli-hona">पैर में खुजली होना (Khujli)</a></h3>
            <p>पैर में खुजली के कारण, घरेलू उपाय और इलाज। जानें इस समस्या के बारे में।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <!-- Row 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/lungs-pain.png" alt="Lungs Me Dard" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Pulmonology</span>
            <h3><a href="lungs-me-dard-hona">फेफड़ों में दर्द (Lungs Me Dard)</a></h3>
            <p>फेफड़ों में दर्द के कारण, लक्षण और इलाज। जानें कब इस समस्या को गंभीर मानना चाहिए।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/burning-feet.png" alt="Pair Me Jalan" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">General Medicine</span>
            <h3><a href="pair-me-jalan">पैरों में जलन (Jalan)</a></h3>
            <p>पैरों में जलन के कारण, इलाज और घरेलू उपाय। जानें क्यों होती है और क्या करें।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/heart-health.png" alt="BP High" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Hypertension</span>
            <h3><a href="bp-high-hone-par-kya-kare">BP High होने पर क्या करें?</a></h3>
            <p>उच्च रक्तचाप (BP High) होने पर क्या करें, क्या खाएं, क्या न खाएं। लक्षण और उपाय।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Row -->
    <div class="row g-4 justify-content-center mt-4">
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/hiv-symptoms.png" alt="HIV Symptoms in Women" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Infectious Diseases</span>
            <h3><a href="hiv-symptoms-in-women">HIV Symptoms in Women: What You Need to Know</a></h3>
            <p>Early signs, stages, and what to do if you think you may be infected. Expert guidance on HIV awareness.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/swollen-feet.png" alt="Pair Me Sujan" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">General Medicine</span>
            <h3><a href="pair-me-sujan">पैरों में सूजन (Sujan)</a></h3>
            <p>पैरों में सूजन के कारण, लक्षण और इलाज। जानें कब डॉक्टर से मिलना चाहिए।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 7, 2026</div>
          </div>
        </div>
      </div>
      <!-- NEWLY ADDED BLOGS -->
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/back-exercises.png" alt="Back Exercises for Women" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="back-exercises-for-women-with-back-pain-safe-stretches-for-relief">Back Exercises for Women: Safe Stretches</a></h3>
            <p>Relieve back pain with these safe and effective stretches and exercises for women.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg"><i class="fas fa-microscope"></i></div>
          <div class="blog-body">
            <span class="blog-category">Urology</span>
            <h3><a href="kidney-stone-symptoms-in-men">Kidney Stone Symptoms in Men</a></h3>
            <p>Common symptoms, causes, and treatment options for kidney stones in men.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%)"><i class="fas fa-venus-mars" style="color:#d81b60"></i></div>
          <div class="blog-body">
            <span class="blog-category">Fertility</span>
            <h3><a href="causes-symptoms-and-treatment-of-ivf">Causes, Symptoms, and Treatment of IVF</a></h3>
            <p>A comprehensive guide to understanding IVF treatment and the path to parenthood.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%)"><i class="fas fa-stethoscope" style="color:#1976d2"></i></div>
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="cervical-pain-symptoms-in-hindi">सर्वाइकल पेन के लक्षण और कारण</a></h3>
            <p>गर्दन दर्द (सर्वाइकल पेन) के लक्षण, कारण और बचाव के सही तरीके।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/hiv-symptoms.png" alt="HIV Symptoms Hindi" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Infectious Diseases</span>
            <h3><a href="hiv-symptoms-in-women-in-hindi">महिलाओं में एचआईवी के लक्षण</a></h3>
            <p>महिलाओं में एचआईवी के शुरुआती लक्षण, कारण और जागरूकता की जानकारी।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/acl-surgery.png" alt="Knee Replacement" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="how-long-does-a-knee-replacement-surgery-take-procedure-duration-recovery-guide">Knee Replacement: Procedure & Recovery</a></h3>
            <p>A complete guide on knee replacement surgery duration and recovery timeline.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/swollen-feet.png" alt="Knee Swelling" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="how-to-reduce-knee-swelling-fast-proven-remedies">How to Reduce Knee Swelling Fast</a></h3>
            <p>Proven home remedies and medical treatments to reduce knee swelling effectively.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/pregnancy-care.png" alt="Hypothyroidism" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Endocrinology</span>
            <h3><a href="hypothyroidism-symptoms-in-women">Hypothyroidism Symptoms in Women</a></h3>
            <p>Common signs, symptoms, and causes of hypothyroidism in women.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/back-exercises.png" alt="Winter Joint Pain" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Orthopedics</span>
            <h3><a href="joint-pain-in-winter-causes-home-remedies-when-to-see-an-orthopedic-doctor">Joint Pain in Winter: Causes & Remedies</a></h3>
            <p>Discover why joint pain increases in winter and how to find relief.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #e0f2f1 0%, #b2dfdb 100%)"><i class="fas fa-procedures" style="color:#00796b"></i></div>
          <div class="blog-body">
            <span class="blog-category">Nephrology</span>
            <h3><a href="kidney-failure-symptoms-in-women-early-signs-and-risk-factors">Kidney Failure Symptoms in Women</a></h3>
            <p>Early signs, symptoms, and risk factors of kidney failure in women.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%)"><i class="fas fa-baby" style="color:#d81b60"></i></div>
          <div class="blog-body">
            <span class="blog-category">Pregnancy Care</span>
            <h3><a href="pregnancy-ke-pehle-week-ke-symptoms">गर्भावस्था के पहले सप्ताह के लक्षण</a></h3>
            <p>प्रेग्नेंसी के पहले सप्ताह के शुरुआती लक्षण और सावधानियों की जानकारी।</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/infrastructure/LAPAROSCOPIC-SURGERY.jpg" alt="Laparoscopy" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Technology</span>
            <h3><a href="sankalp-hospital-ambikapur-having-advaned-laproscopy-machine">Advanced Laparoscopy at Sankalp Hospital</a></h3>
            <p>Minimally invasive surgeries with our state-of-the-art laparoscopy machine.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/infrastructure/ICU.jpg" alt="Smart ICU" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Critical Care</span>
            <h3><a href="sankalp-hospital-ambikapur-smart-icu-and-trauma-centre-treatment-for-and-fracture-and-recovered">Smart ICU & Trauma Centre</a></h3>
            <p>Advanced emergency care and rapid recovery at our specialized trauma centre.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/infrastructure/PATHOLOGY-LAB.jpg" alt="Health Packages" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Wellness</span>
            <h3><a href="sankalp-hospital-health-care-packages">Health Care Packages in Ambikapur</a></h3>
            <p>Affordable and comprehensive health checkup packages for every age.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <img src="/assets/img/blog/pregnancy-care.png" alt="Hormonal Imbalance" class="blog-card-img">
          <div class="blog-body">
            <span class="blog-category">Women's Health</span>
            <h3><a href="symptoms-of-hormonal-imbalance-in-women">Hormonal Imbalance in Women</a></h3>
            <p>Common symptoms, causes, and effects of hormonal imbalance in women.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #f3e5f5 0%, #e1bee7 100%)"><i class="fas fa-dna" style="color:#7b1fa2"></i></div>
          <div class="blog-body">
            <span class="blog-category">Endocrinology</span>
            <h3><a href="thyroid-symptoms-in-women">Thyroid Symptoms in Women</a></h3>
            <p>Understanding the signs of thyroid dysfunction and when to see a specialist.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #e1f5fe 0%, #b3e5fc 100%)"><i class="fas fa-running" style="color:#0288d1"></i></div>
          <div class="blog-body">
            <span class="blog-category">Sports Medicine</span>
            <h3><a href="why-do-my-knees-hurt-when-i-run-prevention-tips">Why Do My Knees Hurt When I Run?</a></h3>
            <p>Expert tips on preventing and managing knee pain for runners.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%)"><i class="fas fa-female" style="color:#f57c00"></i></div>
          <div class="blog-body">
            <span class="blog-category">Women's Health</span>
            <h3><a href="why-women-feel-pain-during-intercourse-causes-and-when-to-consult-a-doctor">Pain During Intercourse in Women</a></h3>
            <p>Understanding the physical and emotional causes of painful intercourse.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="blog-card">
          <div class="blog-icon-bg" style="background:linear-gradient(135deg, #fbe9e7 0%, #ffccbc 100%)"><i class="fas fa-heartbeat" style="color:#d84315"></i></div>
          <div class="blog-body">
            <span class="blog-category">Women's Health</span>
            <h3><a href="symptoms-of-cancer-in-women-early-warning-signs-you-should-not-ignore">Early Warning Signs of Cancer in Women</a></h3>
            <p>Critical signs of cancer that every woman should know and monitor.</p>
            <div class="blog-meta"><i class="far fa-calendar"></i> May 11, 2026</div>
          </div>
        </div>
      </div>
    </div>

    <!-- View All Button -->
    <div class="text-center mt-5">
      <a href="/index" class="btn btn-outline-primary"><i class="fas fa-home me-2"></i>Back to Home</a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>