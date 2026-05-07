<!DOCTYPE html>
<html lang="en">
<head>
  <title>Video Gallery | Sankalp Hospital - Hospital Tour & Patient Stories</title>
  <meta name="description" content="Watch videos of Sankalp Hospital - virtual tours, patient testimonials, doctor interviews, and health tips.">
  <?php include 'includes/header-code.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <p class="breadcrumbs"><a href="index.php">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Gallery <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Video Gallery</p>
    <h1>Video Gallery</h1>
    <p>Watch hospital tours, patient stories, doctor interviews, and health tips</p>
  </div>
</section>

<!-- VIDEO GALLERY -->
<section class="py-5">
  <div class="container">
    <div class="category-tabs">
      <button class="category-tab active">All Videos</button>
      <button class="category-tab">Hospital Tours</button>
      <button class="category-tab">Patient Stories</button>
      <button class="category-tab">Doctor Interviews</button>
      <button class="category-tab">Health Tips</button>
    </div>

    <div class="video-grid">
      <!-- Hospital Tour -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-hospital"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Hospital Tour</span>
          <h4>Virtual Tour of Sankalp Hospital</h4>
          <p>Take a complete tour of our state-of-the-art facilities, operation theaters, and patient rooms.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 8:45</span>
            <span><i class="far fa-eye"></i> 12.5K views</span>
          </div>
        </div>
      </div>

      <!-- Patient Stories -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-heart"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Patient Stories</span>
          <h4>First Test Tube Baby of Surguja</h4>
          <p>Celebrating the joy of new parenthood with the first IVF baby born at Sankalp Hospital.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 5:30</span>
            <span><i class="far fa-eye"></i> 25K views</span>
          </div>
        </div>
      </div>

      <!-- Doctor Interview -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-user-md"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Doctor Interviews</span>
          <h4>Understanding IVF with Dr. Lata Goyal</h4>
          <p>Our fertility specialist explains the IVF process, success rates, and what to expect.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 12:15</span>
            <span><i class="far fa-eye"></i> 8.2K views</span>
          </div>
        </div>
      </div>

      <!-- Health Tips -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-eye"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Health Tips</span>
          <h4>Cataract Surgery: What to Expect</h4>
          <p>Dr. Sanjay Goyal explains modern cataract surgery techniques and recovery.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 7:50</span>
            <span><i class="far fa-eye"></i> 5.4K views</span>
          </div>
        </div>
      </div>

      <!-- Patient Stories -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-smile"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Patient Stories</span>
          <h4>Happy Patient Testimonials</h4>
          <p>Hear from our patients about their experience with treatment and care at Sankalp Hospital.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 6:20</span>
            <span><i class="far fa-eye"></i> 15K views</span>
          </div>
        </div>
      </div>

      <!-- Hospital Tour -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-procedures"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Hospital Tour</span>
          <h4>Our New IVF Laboratory</h4>
          <p>A look inside our advanced embryology lab where miracles of life begin.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 4:30</span>
            <span><i class="far fa-eye"></i> 7.8K views</span>
          </div>
        </div>
      </div>

      <!-- Doctor Interview -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-baby"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Doctor Interviews</span>
          <h4>Pregnancy Care with Dr. Vijaya Singh</h4>
          <p>Expert advice on prenatal care, nutrition, and what to expect during pregnancy.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 15:00</span>
            <span><i class="far fa-eye"></i> 9.1K views</span>
          </div>
        </div>
      </div>

      <!-- Health Tips -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-heartbeat"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Health Tips</span>
          <h4>Emergency Care: When to Rush to Hospital</h4>
          <p>Learn about medical emergencies that require immediate attention and our 24/7 services.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 9:45</span>
            <span><i class="far fa-eye"></i> 11.2K views</span>
          </div>
        </div>
      </div>

      <!-- Doctor Interview -->
      <div class="video-card">
        <div class="video-thumbnail" onclick="playVideo(this)">
          <div class="placeholder"><i class="fas fa-bone"></i></div>
          <div class="play-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <span class="video-category">Doctor Interviews</span>
          <h4>Joint Replacement Surgery Guide</h4>
          <p>Dr. Tanay Goyal explains knee and hip replacement options and recovery expectations.</p>
          <div class="video-meta">
            <span><i class="far fa-clock"></i> 11:30</span>
            <span><i class="far fa-eye"></i> 6.5K views</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Load More -->
    <div class="text-center mt-5">
      <a href="https://www.youtube.com/channel/UCWGjgpakHsg7z4qMbXBSK_w" target="_blank" class="btn btn-primary btn-lg">
        <i class="fab fa-youtube me-2"></i>Subscribe on YouTube
      </a>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>