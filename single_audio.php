<!-- ==================================== -->
<?php include 'header.php';?> 
<!-- ==================================== -->
<!-- ==================== header ========================== -->
<div class="header header-fixed header-logo-center">
 <p  class="header-title">خدمات اسلامية </p>
 <a href="#" class="back-button header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
<!-- <a href="#" data-toggle-theme-switch="" class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a> -->
<div class="logo"><img src="images/logo.png" alt="logo"></div>
</div>
<!-- ===================== header ========================= -->
<div class="page-content header-clear-small">
<div class="title"><h2>الفاتحة</h2></div>
<div class="divider"></div>
<div class="player single_audio">
  <audio class="player__audio viewer">
    <source src="audio/1.mp3" type="audio/mpeg" data-trackid="1">
    Your browser does not support the audio element.
  </audio>
  <div class="song-panel">
    <div class="song-info">
      <div class="song-info__title">الفاتحة</div>
      <div class="song-info__artist">القران الكريم</div>
      <div class="progress">
        <div class="progress__filled"></div>
      </div>
    </div>
  </div>
  <div class="player-controls">
    <div class="spinner">
      <div class="spinner__disc" style="background-image: url(audio/1.jpg)">
        <div class="center__disc"></div>
      </div>
    </div>
    <button class="backward"><i class="fas fa-backward fa-2x"></i></button>
    <button class="play">
      <i class="fas fa-play fa-3x"></i>
      <span class="pause left"></span>
      <span class="pause right"></span>
    </button>
    <button class="forward"><i class="fas fa-forward fa-2x"></i></button>
  </div>
</div>
<a href="audio/1.mp3" class="button button-full left-10 right-10 button-xxs button-round-large bg-highlight shadow-large bottom-20" download>تحميل</a>
<a href="all_audios.php" class="button button-full left-10 right-10 button-xxs button-round-large bg-highlight shadow-large bottom-20">المزيد</a>
</div>
<!-- ==================================== -->
<?php include 'footer.php';?> 
<!-- ==================================== -->
<script type="text/javascript">
   $('.audios_menuB').addClass('active-nav');
</script>
