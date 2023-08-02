<div class="container-xxl py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <?php  foreach ($data as $data) { ?> 
        <h1 class="mb-5"><?= $data[0]['pertanyaan'] ?></h1>
        <p><?= $data[0]['jawaban'] ?></p>
        <?php }?>
      </div>
    
</div>
</body>

</html>