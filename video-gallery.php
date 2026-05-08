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
    <p class="breadcrumbs"><a href="index">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Gallery <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Video Gallery</p>
    <h1>Video Gallery</h1>
    <p>Watch hospital tours, patient stories, doctor interviews, and health tips</p>
  </div>
</section>

<!-- VIDEO GALLERY -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <p class="section-subtitle">Latest from our channel</p>
      <h2 class="section-title">Videos & Health Tips</h2>
      <span class="section-divider"></span>
    </div>

    <div class="video-grid">
      <?php
      $channel_id = 'UCe52v8hXg8x2L7N1TqK-J5g';
      $rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$channel_id";
      
      // Fetch and parse RSS feed
      $xml = @simplexml_load_file($rss_url);
      
      if ($xml && isset($xml->entry)) {
          $count = 0;
          foreach ($xml->entry as $entry) {
              if ($count >= 9) break;
              
              // Extract video ID from entry ID (yt:video:VIDEO_ID) or link
              $video_id = '';
              foreach ($entry->link as $link) {
                  if ($link['rel'] == 'alternate') {
                      parse_str(parse_url($link['href'], PHP_URL_QUERY), $url_params);
                      $video_id = $url_params['v'] ?? '';
                      break;
                  }
              }
              
              if (!$video_id) {
                  $video_id = str_replace('yt:video:', '', (string)$entry->id);
              }

              $title = (string)$entry->title;
              $published = date('M d, Y', strtotime((string)$entry->published));
              $thumbnail = "https://img.youtube.com/vi/$video_id/maxresdefault.jpg";
              
              // Use mqdefault as fallback if maxresdefault doesn't exist (handled by CSS background-size: cover)
              ?>
              <div class="video-card">
                <div class="video-thumbnail">
                  <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>" target="_blank" class="play-link">
                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title; ?>" class="img-fluid" onerror="this.src='https://img.youtube.com/vi/<?php echo $video_id; ?>/mqdefault.jpg'">
                    <div class="play-btn"><i class="fas fa-play"></i></div>
                  </a>
                </div>
                <div class="video-info">
                  <span class="video-category">YouTube Video</span>
                  <h4><a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>" target="_blank"><?php echo $title; ?></a></h4>
                  <div class="video-meta">
                    <span><i class="far fa-calendar-alt"></i> <?php echo $published; ?></span>
                    <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>" target="_blank" class="watch-link">Watch Video <i class="fas fa-external-link-alt ms-1"></i></a>
                  </div>
                </div>
              </div>
              <?php
              $count++;
          }
      } else {
          echo '<div class="col-12 text-center"><p class="text-muted">Unable to load videos at the moment. Please visit our YouTube channel directly.</p></div>';
      }
      ?>
    </div>

    <!-- Load More -->
    <div class="text-center mt-5">
      <a href="https://www.youtube.com/@sankalphospitalambikapur" target="_blank" class="btn btn-primary btn-lg px-5 shadow">
        <i class="fab fa-youtube me-2"></i>Watch more videos on YouTube
      </a>
    </div>
  </div>
</section>

<style>
.video-thumbnail { position: relative; overflow: hidden; border-radius: 12px; background: #000; height: 200px; }
.video-thumbnail img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
.video-thumbnail:hover img { transform: scale(1.05); opacity: 0.8; }
.play-btn { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; background: rgba(var(--primary-rgb), 0.9); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; transition: all 0.3s; pointer-events: none; }
.video-thumbnail:hover .play-btn { background: var(--accent); transform: translate(-50%, -50%) scale(1.1); }
.video-card h4 { font-size: 16px; font-weight: 600; line-height: 1.4; margin: 15px 0 10px; height: 45px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; }
.video-card h4 a { color: var(--dark); transition: color 0.2s; }
.video-card h4 a:hover { color: var(--primary); }
.video-meta { display: flex; justify-content: space-between; align-items: center; font-size: 13px; color: #777; }
.watch-link { color: var(--primary); font-weight: 600; text-decoration: none; }
.watch-link:hover { text-decoration: underline; }
</style>

<?php include 'includes/footer.php'; ?>