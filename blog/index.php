<?php
/**
 * Blog Index - Automatically loads all published blogs
 * New blogs are automatically featured when added to this directory
 */
require_once 'blog-functions.php';

// Get all blogs automatically - sorted by date (newest first)
$all_blogs = get_all_blogs(__DIR__);

// Ensure all blogs have required fields
$blogs = [];
foreach ($all_blogs as $blog) {
    $blogs[] = [
        'title' => $blog['title'] ?? '',
        'url' => $blog['url'] ?? '',
        'img' => $blog['image'] ?? '',
        'category' => $blog['category'] ?? 'Health',
        'desc' => $blog['desc'] ?? '',
        'date' => $blog['date'] ?? date('F j, Y')
    ];
}

// Pagination Logic
$items_per_page = 9;
$total_items = count($blogs);
$total_pages = ceil($total_items / $items_per_page);
$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
if ($current_page < 1)
  $current_page = 1;
if ($current_page > $total_pages)
  $current_page = $total_pages;

$offset = ($current_page - 1) * $items_per_page;
$paged_blogs = array_slice($blogs, $offset, $items_per_page);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Health Blog | Sankalp Hospital - Expert Health Tips & Articles</title>
  <meta name="description"
    content="Read expert health tips, medical articles, and healthcare advice from Sankalp Hospital doctors.">
  <?php if (isset($_GET['page']) && (int) $_GET['page'] > 1): ?>
    <meta name="robots" content="noindex, follow">
  <?php endif; ?>
  <?php include '../includes/header-code.php'; ?>
  <style>
    .blog-card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      transition: all 0.3s;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .blog-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(22, 128, 119, 0.18);
    }

    .blog-card-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .blog-icon-bg {
      width: 100%;
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, var(--bg-soft) 0%, #d4edeb 100%);
    }

    .blog-icon-bg i {
      font-size: 48px;
      color: var(--primary);
    }

    .blog-body {
      padding: 22px 20px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .blog-category {
      display: inline-block;
      background: var(--primary);
      color: #fff;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 12px;
    }

    .blog-body h3 {
      font-size: 17px;
      font-weight: 700;
      margin: 0 0 10px;
      line-height: 1.4;
    }

    .blog-body h3 a {
      color: var(--dark);
      transition: color 0.2s;
    }

    .blog-body h3 a:hover {
      color: var(--primary);
    }

    .blog-body p {
      font-size: 14px;
      color: #666;
      margin: 0 0 15px;
      line-height: 1.6;
      flex: 1;
    }

    .blog-meta {
      font-size: 12px;
      color: #888;
      margin-top: auto;
    }

    .blog-meta i {
      color: var(--primary);
      margin-right: 4px;
    }

    .page-hero {
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      color: #fff;
      padding: 60px 0 50px;
      text-align: center;
    }

    .page-hero p.breadcrumbs {
      color: rgba(255, 255, 255, 0.85);
      font-size: 14px;
      margin-bottom: 10px;
    }

    .page-hero p.breadcrumbs a {
      color: #fff;
    }

    .page-hero h1 {
      color: #fff;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .page-hero p {
      color: rgba(255, 255, 255, 0.9);
      font-size: 16px;
      margin: 0;
    }

    /* Pagination Styles */
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-top: 50px;
    }

    .pagination a,
    .pagination span {
      padding: 8px 16px;
      border-radius: 8px;
      border: 1px solid #ddd;
      color: var(--dark);
      text-decoration: none;
      transition: all 0.2s;
    }

    .pagination a:hover {
      background: var(--primary);
      border-color: var(--primary);
      color: #fff;
    }

    .pagination .active {
      background: var(--primary);
      border-color: var(--primary);
      color: #fff;
      font-weight: 700;
    }

    .pagination .disabled {
      color: #ccc;
      pointer-events: none;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
      .page-hero { padding: 40px 0 35px; }
      .page-hero h1 { font-size: 1.8rem; }
      .blog-card-img,
      .blog-icon-bg { height: 160px; }
      .blog-body { padding: 18px 15px; }
      .blog-body h3 { font-size: 16px; }
      .blog-body p { font-size: 13px; }
    }
  </style>
</head>

<body>
  <?php include '../includes/header.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="container">
      <p class="breadcrumbs"><a href="/index">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i>
        Health Blog</p>
      <h1>Health Tips & Articles</h1>
      <p>Expert health advice and medical information from our experienced doctors</p>
    </div>
  </section>

  <!-- BLOG GRID -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <?php foreach ($paged_blogs as $blog): ?>
          <div class="col-md-6 col-lg-4">
            <div class="blog-card">
              <?php if (!empty($blog['img'])): ?>
                <img src="<?php echo htmlspecialchars($blog['img']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" class="blog-card-img">
              <?php else: ?>
                <div class="blog-icon-bg">
                  <i class="fas fa-heartbeat"></i>
                </div>
              <?php endif; ?>
              <div class="blog-body">
                <span class="blog-category"><?php echo htmlspecialchars($blog['category']); ?></span>
                <h3><a href="<?php echo htmlspecialchars($blog['url']); ?>"><?php echo htmlspecialchars($blog['title']); ?></a></h3>
                <p><?php echo htmlspecialchars($blog['desc']); ?></p>
                <div class="blog-meta"><i class="far fa-calendar"></i> <?php echo htmlspecialchars($blog['date']); ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Pagination -->
      <?php if ($total_pages > 1): ?>
        <div class="pagination">
          <?php if ($current_page > 1): ?>
            <a href="?page=<?php echo $current_page - 1; ?>"><i class="fas fa-chevron-left me-1"></i> Prev</a>
          <?php else: ?>
            <span class="disabled"><i class="fas fa-chevron-left me-1"></i> Prev</span>
          <?php endif; ?>

          <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <?php if ($i == $current_page): ?>
              <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
              <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
          <?php endfor; ?>

          <?php if ($current_page < $total_pages): ?>
            <a href="?page=<?php echo $current_page + 1; ?>">Next <i class="fas fa-chevron-right ms-1"></i></a>
          <?php else: ?>
            <span class="disabled">Next <i class="fas fa-chevron-right ms-1"></i></span>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <!-- View All Button (Reset/Home) -->
      <div class="text-center mt-5">
        <a href="/index" class="btn btn-outline-primary"><i class="fas fa-home me-2"></i>Back to Home</a>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
</body>

</html>