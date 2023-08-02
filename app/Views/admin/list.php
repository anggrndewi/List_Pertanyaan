<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow-lg">
                <div class="card-header bg-primary justify-content-between d-flex">
                    <h3 class="text-title text-light">Data Pertanyaan</h3>
                    <h3 class="text-title"><a href="" class="btn btn-light text-primary"><ion-icon name="add-outline"></ion-icon></a></h3>
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
                                        <a href="" class="btn btn-warning d-block mb-1"><ion-icon name="pencil-outline"></ion-icon></a>
                                        <a href="" class="btn btn-danger d-block"><ion-icon name="trash-outline"></ion-icon></a>
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