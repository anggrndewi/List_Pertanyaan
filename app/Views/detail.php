<div class="container mt-2 mb-3">
  <div class="row">
    <div class="col">
      <div class="card shadow mt-3">
        <div class="card-header bg-primary">
          <div class="d-flex">
            <h4 class="text-bold text-light ml-1"><?= $saku[0]['pertanyaan'] ?></h4>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex">
            <p id="teks-untuk-dicopy"><?= $saku[0]['jawaban'] ?></p>
          </div>
          <div class="d-flex justify-content-end">
            <a class="btn btn-primary" onclick="copyToClipboard()"><ion-icon name="documents"></ion-icon> Salin</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <div class="card shadow mt-3">
        <div class="card-body">
          <p>Cari lagi...</p>
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
</div>

<script>
function copyToClipboard() {
  var teksElement = document.getElementById("teks-untuk-dicopy");
  var teksRange = document.createRange();
  teksRange.selectNode(teksElement);
  var selection = window.getSelection();
  selection.removeAllRanges();
  selection.addRange(teksRange);

  try {
    document.execCommand("copy");
    alert("Teks berhasil disalin ke clipboard.");
  } catch (err) {
    alert("Tidak dapat menyalin teks ke clipboard. Mohon lakukan secara manual.");
  }

  selection.removeAllRanges();
}
</script>
