<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($blog_title) ? $blog_title . ' | ' : ''; ?>Sankalp Hospital Health Blog</title>
  <meta name="description" content="<?php echo isset($blog_desc) ? $blog_desc : 'Expert health advice and medical information from Sankalp Hospital doctors.'; ?>">
  <?php include '../includes/header-code.php'; ?>
  <style>
    .blog-hero {
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      color: #fff;
      padding: 80px 0 60px;
      text-align: center;
    }
    .blog-hero .blog-category-tag {
      display: inline-block;
      background: rgba(255,255,255,0.2);
      padding: 6px 16px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 15px;
    }
    .blog-hero h1 {
      color: #fff;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }
    .blog-hero .blog-meta {
      color: rgba(255,255,255,0.9);
      font-size: 14px;
    }
    .blog-hero .blog-meta a { color: #fff; }
    .blog-hero .blog-meta i { margin-right: 5px; }
    .blog-hero .blog-meta span { margin: 0 10px; }
    .blog-featured-img {
      width: 100%;
      max-width: 900px;
      height: 450px;
      object-fit: cover;
      border-radius: 16px;
      margin: 30px auto 0;
      display: block;
      box-shadow: 0 20px 50px rgba(0,0,0,0.3);
    }
    .blog-content {
      max-width: 800px;
      margin: 0 auto;
      padding: 50px 20px;
    }
    .blog-content p {
      font-size: 17px;
      line-height: 1.8;
      color: #444;
      margin-bottom: 20px;
    }
    .blog-content h2 {
      color: var(--primary);
      font-size: 1.8rem;
      font-weight: 700;
      margin: 40px 0 20px;
      padding-top: 20px;
    }
    .blog-content h3 {
      color: var(--dark);
      font-size: 1.4rem;
      font-weight: 600;
      margin: 30px 0 15px;
    }
    .blog-content blockquote {
      background: var(--bg-soft);
      border-left: 4px solid var(--primary);
      padding: 25px 30px;
      margin: 30px 0;
      border-radius: 0 12px 12px 0;
      font-style: italic;
      font-size: 18px;
      color: var(--dark);
    }
    .blog-content ul, .blog-content ol {
      margin: 20px 0;
      padding-left: 25px;
    }
    .blog-content li {
      font-size: 16px;
      line-height: 1.8;
      color: #444;
      margin-bottom: 10px;
    }
    .blog-content .table {
      margin: 25px 0;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }
    .blog-content .table thead {
      background: var(--primary);
      color: #fff;
    }
    .blog-content .alert {
      border-radius: 12px;
      padding: 25px;
      margin: 25px 0;
    }
    .author-box {
      display: flex;
      align-items: center;
      gap: 20px;
      background: var(--bg-soft);
      padding: 25px;
      border-radius: 12px;
      margin: 40px 0;
    }
    .author-avatar {
      width: 80px;
      height: 80px;
      background: var(--primary);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 32px;
      flex-shrink: 0;
    }
    .author-info h5 {
      color: var(--dark);
      font-weight: 700;
      margin-bottom: 5px;
    }
    .author-info p {
      margin: 0;
      color: #666;
      font-size: 14px;
      line-height: 1.6;
    }
    .share-box {
      text-align: center;
      padding: 30px;
      background: #f8f9fa;
      border-radius: 12px;
      margin: 40px 0;
    }
    .share-box h4 {
      margin-bottom: 20px;
      color: var(--dark);
    }
    .share-buttons {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
    }
    .share-btn {
      padding: 12px 24px;
      border-radius: 8px;
      color: #fff;
      font-weight: 600;
      font-size: 14px;
      transition: transform 0.2s;
    }
    .share-btn:hover { transform: translateY(-3px); color: #fff; }
    .share-btn.facebook { background: #1877f2; }
    .share-btn.twitter { background: #1da1f2; }
    .share-btn.whatsapp { background: #25d366; }
    .share-btn.linkedin { background: #0a66c2; }
    .related-posts {
      margin-top: 50px;
      padding-top: 40px;
      border-top: 2px solid #eee;
    }
    .related-card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      transition: transform 0.3s;
      height: 100%;
    }
    .related-card:hover { transform: translateY(-5px); }
    .related-card-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      background: var(--bg-soft);
    }
    .related-card-body {
      padding: 20px;
    }
    .related-card-body h5 {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 10px;
      line-height: 1.4;
    }
    .related-card-body h5 a { color: var(--dark); }
    .related-card-body h5 a:hover { color: var(--primary); }
    .related-card-body span {
      font-size: 13px;
      color: #888;
    }
    @media (max-width: 768px) {
      .blog-hero { padding: 50px 0 40px; }
      .blog-hero h1 { font-size: 1.8rem; }
      .blog-featured-img { height: 250px; }
      .blog-content { padding: 30px 15px; }
      .blog-content h2 { font-size: 1.5rem; }
    }
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>

<!-- BLOG HERO -->
<section class="blog-hero">
  <div class="container">
    <p class="blog-category-tag"><?php echo isset($blog_category) ? $blog_category : 'Health Tips'; ?></p>
    <p class="blog-meta">
      <a href="/index">Home</a>
      <i class="fas fa-chevron-right mx-2" style="font-size:10px"></i>
      <a href="/blog/">Health Blog</a>
      <span>|</span>
      <i class="far fa-calendar"></i> <?php echo isset($blog_date) ? $blog_date : ''; ?>
      <span>|</span>
      <i class="far fa-clock"></i> <?php echo isset($blog_readtime) ? $blog_readtime : '5 min read'; ?>
    </p>
    <h1><?php echo isset($blog_title) ? $blog_title : ''; ?></h1>
    <?php if (isset($blog_image) && $blog_image): ?>
    <img src="<?php echo $blog_image; ?>" alt="<?php echo isset($blog_title) ? $blog_title : 'Blog'; ?>" class="blog-featured-img">
    <?php endif; ?>
  </div>
</section>

<!-- BLOG CONTENT -->
<div class="container">
  <div class="blog-content">
    <?php echo isset($blog_content) ? $blog_content : ''; ?>

    <!-- Share -->
    <div class="share-box">
      <h4>Share this article</h4>
      <div class="share-buttons">
        <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f me-2"></i>Facebook</a>
        <a href="#" class="share-btn twitter"><i class="fab fa-twitter me-2"></i>Twitter</a>
        <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
        <a href="#" class="share-btn linkedin"><i class="fab fa-linkedin-in me-2"></i>LinkedIn</a>
      </div>
    </div>

    <!-- Related Posts -->
    <?php if (isset($related_posts) && !empty($related_posts)): ?>
    <div class="related-posts">
      <h3 class="mb-4">Related Articles</h3>
      <div class="row g-4">
        <?php foreach ($related_posts as $post): ?>
        <div class="col-md-4">
          <div class="related-card">
            <?php if (isset($post['image'])): ?>
            <img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="related-card-img">
            <?php else: ?>
            <div class="related-card-img"><i class="fas fa-heartbeat" style="font-size:40px;color:var(--primary)"></i></div>
            <?php endif; ?>
            <div class="related-card-body">
              <h5><a href="<?php echo $post['url']; ?>"><?php echo $post['title']; ?></a></h5>
              <span><?php echo isset($post['date']) ? $post['date'] : ''; ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>

    <!-- CTA -->
    <div class="text-center mt-5 p-4 rounded" style="background:var(--bg-soft)">
      <h4>Need Medical Consultation?</h4>
      <p class="text-muted mb-4">Our experienced doctors at Sankalp Hospital are here to provide you with personalized healthcare guidance.</p>
      <a href="/index#appointment" class="btn btn-primary"><i class="fas fa-calendar-check me-2"></i>Book Appointment</a>
    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
