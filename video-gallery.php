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
    <p class="breadcrumbs"><a href="/index">Home</a> <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Gallery <i class="fas fa-chevron-right mx-2" style="font-size:11px"></i> Video Gallery</p>
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

    <div class="row g-4">
      <?php
      // Featured videos from the Sankalp Hospital YouTube channel
      // Add or remove video IDs as needed
      $videos = [
          ['id' => 'VIDEO_ID_1', 'title' => 'Video Title 1'],
          ['id' => 'VIDEO_ID_2', 'title' => 'Video Title 2'],
          ['id' => 'VIDEO_ID_3', 'title' => 'Video Title 3'],
          ['id' => 'VIDEO_ID_4', 'title' => 'Video Title 4'],
          ['id' => 'VIDEO_ID_5', 'title' => 'Video Title 5'],
          ['id' => 'VIDEO_ID_6', 'title' => 'Video Title 6'],
      ];

      // Get videos from channel using YouTube's oEmbed for basic info
      $channel_id = 'UCe52v8hXg8x2L7N1TqK-J5g';
      $rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$channel_id";

      // Try new oembed endpoint first
      $video_list = [];
      $test_video_id = 'dQw4w9WgXcQ'; // Test with a known video

      // Try fetching via alternative method - YouTube's embed list
      $embed_url = "https://www.youtube.com/embed/videoseries?list=UUe52v8hXg8x2L7N1TqK-J5g";
      ?>

      <!-- YouTube Channel Embed -->
      <div class="col-12 mb-4">
        <div class="yt-channel-embed text-center">
          <h3 class="mb-3">Subscribe to Our Channel</h3>
          <div class="g-ytsubscribe" data-channelid="UCe52v8hXg8x2L7N1TqK-J5g" data-layout="full" data-count="hidden"></div>
        </div>
      </div>

      <!-- Video Playlist Embed -->
      <div class="col-12 mb-5">
        <div class="video-responsive">
          <iframe
            src="https://www.youtube.com/embed/videoseries?list=UUe52v8hXg8x2L7N1TqK-J5g&playsinline=1"
            title="Sankalp Hospital Videos"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>
      </div>

      <?php
      // Fetch and parse RSS feed for individual video cards
      $xml = @simplexml_load_file($rss_url);

      if ($xml && isset($xml->entry)) {
          $count = 0;
          foreach ($xml->entry as $entry) {
              if ($count >= 9) break;

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
              ?>
              <div class="col-md-6 col-lg-4">
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
              </div>
              <?php
              $count++;
          }
      } else {
          // Fallback: Show placeholder cards with subscribe CTA
          $placeholder_videos = [
              ['title' => 'Hospital Tour & Facilities', 'desc' => 'Take a virtual tour of Sankalp Hospital'],
              ['title' => 'Patient Success Stories', 'desc' => 'Hear from our happy patients'],
              ['title' => 'Health Tips by Doctors', 'desc' => 'Expert advice from our specialists'],
              ['title' => 'Our Services Overview', 'desc' => 'Learn about our comprehensive care'],
              ['title' => 'Meet Our Team', 'desc' => 'Get to know our expert doctors'],
              ['title' => 'Facilities & Technology', 'desc' => 'Modern equipment and comfortable spaces'],
          ];
          foreach ($placeholder_videos as $idx => $video) {
              ?>
              <div class="col-md-6 col-lg-4">
              <div class="video-card">
                <div class="video-thumbnail" style="background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); display: flex; align-items: center; justify-content: center;">
                  <div style="text-align: center; color: #fff; padding: 20px;">
                    <i class="fas fa-play-circle" style="font-size: 48px; margin-bottom: 10px;"></i>
                    <p style="margin: 0; font-size: 14px;"><?php echo $video['desc']; ?></p>
                  </div>
                </div>
                <div class="video-info">
                  <span class="video-category">Video</span>
                  <h4><a href="https://www.youtube.com/@sankalphospitalambikapur" target="_blank"><?php echo $video['title']; ?></a></h4>
                  <div class="video-meta">
                    <span><i class="far fa-play-circle"></i> Coming Soon</span>
                    <a href="https://www.youtube.com/@sankalphospitalambikapur" target="_blank" class="watch-link">Subscribe <i class="fas fa-external-link-alt ms-1"></i></a>
                  </div>
                </div>
              </div>
              </div>
              <?php
          }
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
.video-responsive { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 12px; box-shadow: 0 10px 40px rgba(0,0,0,0.15); }
.video-responsive iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
.yt-channel-embed { background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%); padding: 40px; border-radius: 12px; color: #fff; }
.yt-channel-embed h3 { color: #fff; font-weight: 700; }
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