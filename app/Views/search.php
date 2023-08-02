<div class="d-flex align-items-center" style="height: 100vh;">
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-6">
      <div class="d-flex align-items-center justify-content-center mb-4"  style="margin-top: 2px;">
            <img src="<?= base_url().'/img/lampung cerdas.webp' ?>" alt="Logo Lampung Cerdas" height="150">
          </div>
      <form  action="<?php echo base_url('search')?>" action="GET">
        <div class="input-group mb-3">
          <input type="text" name="search" class="form-control" placeholder="Cari Pertanyaan" aria-label="search" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="submit" id="button-addon2" value="Search">Submit </button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>