<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pukul Tikus Tanah</title>
  <link rel="stylesheet" href="<?php echo base_url('pukul-tikus-tanah-master/css/style.css') ?>">
</head>

<body>
  <h1>Pukul Tikus Tanah</h1>


  <button type="button" class="mulai" onclick="mulai()">Mulai!</button>

  <h2 class="papan-skor">0</h2>

  <div class="container">
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
    <div class="tanah">
      <div class="tikus"></div>
    </div>
  </div>

  <audio src="<?php echo base_url('pukul-tikus-tanah-master/audio/Pop.mp3') ?>" id="pop"></audio>
  <script src="<?php echo base_url('pukul-tikus-tanah-master/js/script.js') ?>"></script>
</body>

</html>