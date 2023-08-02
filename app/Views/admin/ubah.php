<div class="container mt-3">
    <?php
        if (session()->getFlashdata('message')) {
            echo "<div class='alert alert-info'><marquee>".session()->getFlashdata('message')."</marquee></div>";
        }
    ?>
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h5 class="card-title text-light" id="examplecardLabel">Ubah Data</h5>
      </div>
      <form action="/admin/ubah" method="post">
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $data->id ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pertanyaan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pertanyaan"><?= $data->pertanyaan ?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jawaban</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jawaban"><?= $data->jawaban ?></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
</div>