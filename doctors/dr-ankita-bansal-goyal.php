<?php
$doc_name = "Dr. Ankita Bansal Goyal";
$doc_title = "Best Female Laparoscopic Surgeon in Ambikapur | Gynaecologist - Dr. Ankita Bansal Goyal";
$doc_desc = "Consult Dr. Ankita Bansal Goyal, the best female laparoscopic surgeon in Ambikapur. Expert in 3D laparoscopic surgery, high-risk pregnancy, and uterine fibroids.";
$doc_specialty = "Obstetrics & Gynaecology";
$doc_degree = "MD (Obstetrics & Gynaecology) - PGIMER CHD, FMAS";
$doc_experience = "8+ Years";
$doc_designation = "Consultant Laparoscopic Surgeon & Gynaecologist";
$doc_image = "/assets/img/doctors/ankita-goyal.jpg";
$doc_bio = "Dr. Ankita Bansal Goyal is a gold-medalist from PGIMER Chandigarh and a pioneer in 3D Laparoscopic Surgery in Ambikapur. She specializes in minimally invasive gynecological procedures, including laparoscopic hysterectomy and myomectomy, providing advanced surgical care for women.";
$doc_keywords = ["3D Laparoscopic Surgery", "Laparoscopic Hysterectomy", "PCOS Specialist", "High-risk Pregnancy", "Infertility Care"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $doc_title; ?> | Sankalp Hospital</title>
  <meta name="description" content="<?php echo $doc_desc; ?>">
  <?php include '../includes/header-code.php'; ?>
  <style>
    .doc-hero { background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 60px 0; border-bottom: 1px solid #dee2e6; }
    .doc-img-wrapper { position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); background: #fff; }
    .doc-img-wrapper img { width: 100%; transition: transform 0.5s; }
    .doc-info-badge { background: var(--primary); color: #fff; padding: 5px 15px; border-radius: 50px; font-size: 13px; display: inline-block; margin-bottom: 15px; }
    .doc-stats { display: flex; gap: 30px; margin-top: 30px; }
    .stat-item h4 { color: var(--primary); font-weight: 700; margin-bottom: 0; }
    .stat-item span { font-size: 14px; color: #666; }
    .doc-content h2 { font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: var(--dark); }
    .keyword-pill { display: inline-block; background: #fff; border: 1px solid var(--primary); color: var(--primary); padding: 5px 15px; border-radius: 50px; margin: 0 5px 10px 0; font-size: 14px; }
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>

<section class="doc-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-4">
        <div class="doc-img-wrapper">
          <img src="<?php echo $doc_image; ?>" alt="<?php echo $doc_name; ?>" onerror="this.src='/assets/img/doctors/default.jpg'">
        </div>
      </div>
      <div class="col-lg-8">
        <span class="doc-info-badge"><?php echo $doc_specialty; ?></span>
        <h1 class="display-5 fw-bold mb-2"><?php echo $doc_name; ?></h1>
        <p class="text-primary fw-bold mb-3"><?php echo $doc_degree; ?> | <?php echo $doc_designation; ?></p>
        <p class="lead text-muted mb-4"><?php echo $doc_bio; ?></p>
        
        <div class="doc-stats">
          <div class="stat-item">
            <h4><?php echo $doc_experience; ?></h4>
            <span>Experience</span>
          </div>
          <div class="stat-item">
            <h4>3D</h4>
            <span>Laparoscopy Expert</span>
          </div>
          <div class="stat-item">
            <h4>Best</h4>
            <span>Gynaec Surgeon</span>
          </div>
        </div>

        <div class="mt-5">
          <a href="/index#appointment" class="btn btn-primary btn-lg px-5 shadow">Book Appointment with <?php echo $doc_name; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="doc-content">
          <h2>Specialized Surgical Care</h2>
          <p>As the <strong>best female laparoscopic surgeon in Ambikapur</strong>, Dr. Ankita Bansal Goyal utilizes state-of-the-art 3D imaging for precise gynecological surgeries:</p>
          <div class="mb-4">
            <?php foreach($doc_keywords as $keyword): ?>
              <span class="keyword-pill"><i class="fas fa-check-circle me-2"></i><?php echo $keyword; ?></span>
            <?php endforeach; ?>
          </div>
          
          <h2 class="mt-5">Expertise in Women's Health</h2>
          <p>Dr. Ankita's training at PGIMER Chandigarh and her fellowship in minimal access surgery allow her to perform complex surgeries with minimal scarring and faster recovery. She is dedicated to improving women's quality of life through advanced medical and surgical interventions for conditions like endometriosis, uterine fibroids, and heavy menstrual bleeding.</p>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="sticky-top" style="top:100px">
          <div class="card border-0 shadow-lg rounded-4 p-4">
            <h3 class="fw-bold mb-4">Request Consultation</h3>
            <form accept-charset='UTF-8' action='https://app.formester.com/forms/UvGLKUCJe/submissions' method='POST'>
              <input type="hidden" name="doctor" value="<?php echo $doc_name; ?>">
              <div class="mb-3">
                <label class="form-label small fw-bold">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Phone Number</label>
                <input type="tel" name="phone" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Describe Your Concern</label>
                <textarea name="message" class="form-control" rows="3">I need a consultation for gynecological/laparoscopic surgery.</textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100 py-3 shadow">Book Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
</body>
</html>
