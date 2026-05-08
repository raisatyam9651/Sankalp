<?php
$doc_name = "Dr. Lata Goyal";
$doc_title = "Best Gynecologist in Ambikapur | IVF Specialist - Dr. Lata Goyal";
$doc_desc = "Consult Dr. Lata Goyal, the best gynecologist and IVF specialist in Ambikapur, Chhattisgarh. Expert in high-risk pregnancy, infertility, and laparoscopic surgery.";
$doc_specialty = "Obstetrics & Gynaecology";
$doc_degree = "MBBS, MS (Obstetrics & Gynaecology)";
$doc_experience = "15+ Years";
$doc_designation = "Senior Consultant & IVF Specialist";
$doc_image = "/assets/img/doctors/lata-goyal.jpg";
$doc_bio = "Dr. Lata Goyal is a renowned Gynecologist and Infertility Specialist based in Ambikapur. With over 15 years of experience, she has pioneered assisted reproductive technologies (ART) in the Surguja district. She is known for her compassionate care and high success rates in IVF and normal deliveries.";
$doc_keywords = ["High-risk Pregnancy", "IVF & Infertility", "Laparoscopic Gynaec Surgery", "PCOS Management", "Prenatal Care"];
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
            <h4>5000+</h4>
            <span>Happy Patients</span>
          </div>
          <div class="stat-item">
            <h4>24/7</h4>
            <span>Availability</span>
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
          <h2>Specializations & Expertise</h2>
          <p>As the <strong>best gynecologist in Ambikapur</strong>, Dr. Lata Goyal specializes in treating complex female health issues with a patient-centric approach. Her expertise includes:</p>
          <div class="mb-4">
            <?php foreach($doc_keywords as $keyword): ?>
              <span class="keyword-pill"><i class="fas fa-check-circle me-2"></i><?php echo $keyword; ?></span>
            <?php endforeach; ?>
          </div>
          
          <h2 class="mt-5">Professional Journey</h2>
          <p>Dr. Lata Goyal has been serving the community of Chhattisgarh for over a decade. Her commitment to bringing advanced medical technology to rural areas led to the establishment of the first IVF center in Ambikapur. She is a member of several prestigious medical associations and regularly participates in national health conferences.</p>
          
          <div class="alert alert-info border-0 shadow-sm mt-4">
            <strong>Consultation Hours:</strong> Monday - Saturday (10:00 AM - 6:00 PM)
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="sticky-top" style="top:100px">
          <div class="card border-0 shadow-lg rounded-4 p-4">
            <h3 class="fw-bold mb-4">Request a Callback</h3>
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
                <label class="form-label small fw-bold">Message</label>
                <textarea name="message" class="form-control" rows="3">I would like to book a consultation with <?php echo $doc_name; ?>.</textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100 py-3 shadow">Send Message</button>
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
