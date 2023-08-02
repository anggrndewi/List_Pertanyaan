<div class="container mt-3">
    <div class="row">
        <div class="col">
            <?php
                if (session()->getFlashdata('message')) {
                    echo "<div class='alert alert-info'><marquee>".session()->getFlashdata('message')."</marquee></div>";
                }
            ?>
            <div class="card shadow-lg">
                <div class="card-header bg-primary justify-content-between d-flex">
                    <h3 class="text-title text-light">Data Pertanyaan</h3>
                    <h3 class="text-title"><a href="#" class="btn btn-light text-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambah"><ion-icon name="add-outline"></ion-icon></a></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($list as $list) { ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $list->pertanyaan ?></td>
                                    <td><?= $list->jawaban ?></td>
                                    <td>
                                        <a href="<?= '/admin/ubah/'.$list->id ?>" class="btn btn-warning d-block mb-1"><ion-icon name="pencil-outline"></ion-icon></a>
                                        <a href="<?= '/admin/delete/'.$list->id ?>" class="btn btn-danger d-block"><ion-icon name="trash-outline"></ion-icon></a>
                                    </td>
                                </tr>
                                <?php 
                                $no ++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/admin/tambah" method="post">
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pertanyaan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pertanyaan"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Jawaban</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jawaban"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>