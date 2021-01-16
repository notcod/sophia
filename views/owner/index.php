<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card main-shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">SMS KREDIT</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data["company_info"]["SMSCredit"]?> RSD</div>
                    </div>
                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card main-shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">BROJ SERVISERA</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data["company_info"]["Servicers"]?></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card main-shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">NA SERVISU</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data["company_info"]["PhonesOnService"]?></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card main-shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">POPRAVLJENI</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$data["company_info"]["CompletedPhones"]?></div>
                    </div>
                    <div class="col-auto"><i class="fas fa-mobile-alt fa-2x text-gray-300"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>



















<div class="row">
    <div class="col-lg-12">
        <div class="card main-shadow mb-4">
            <div class="card-body">
                <form method="POST" action="/post_owner/update_company" enctype="multipart/form-data">
                    <?= message($data) ?>
                    <input type="hidden" name="location" value="<?= $company['location'] ?>" id="location">
                    <div class="form-group">
                        <label>Naziv firme:</label>
                        <input type="text" class="form-control" value="<?= $company['name'] ?>" name="name" />
                    </div>
                    <div class="form-group">
                        <label>Opis firme:</label>
                        <input type="text" class="form-control" value="<?= $company['description'] ?>" name="description" />
                    </div>
                    <div class="form-group">
                        <label>Adresa firme:</label>
                        <input type="text" class="form-control" value="<?= $company['address'] ?>" name="address" />
                    </div>
                    <?php $moje_mesto = empty($company['location']) ? "" : "style='display:none;'"; ?>
                    <?php $to_mesto   = empty($company['location']) ? "style='display:none;'" : ""; ?>
                    <div class="form-group">
                        <label>Mesto firme:</label>
                        <div id="moje_mesto" <?= $moje_mesto ?>>
                            <input type="text" class="form-control" id="mesto" placeholder="" />
                            <div id="complete" class="autocomplete-items"></div>
                        </div>
                        <div id="to_mesto" <?= $to_mesto ?>>
                            <div><span class="bg-info text-white buble" id="location_names"><?= $company['location_name'] ?></span><i class="far fa-times-circle text-danger btn-close" onclick="LocationRemove()"></i></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label>Detalji firme:</label>
                        <textarea class="form-control" id="detalji" name="details"><?= $company['content'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kontakt: <small>(Možete ukucati više brojeva telefona ili email adresa, razdvojite ih zarezom)</small></label>
                        <input type="text" class="form-control" value="<?= $company['contact'] ?>" name="contact" />
                    </div>
                    <div class="form-group">
                        <label>Instagram:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">https://instagram.com/</span></div>
                            <input type="text" class="form-control" value="<?= $company['instagram'] ?>" name="instagram" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Facebook:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">https://facebook.com/</span></div>
                            <input type="text" class="form-control" value="<?= $company['facebook'] ?>" name="facebook" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Usluge i ponude koje imamo su:</label>
                        <div class="mb-3 bg-light p-3 table-responsive" style="white-space:nowrap;">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_1" name="addons[]" value="1" <?= in_array("1", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_1"><i class="fa fa-desktop"></i> Zamena displeja</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_2" name="addons[]" value="2" <?= in_array("2", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_2"><i class="fa fa-credit-card"></i> Zamena baterije</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_3" name="addons[]" value="3" <?= in_array("3", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_3"><i class="fa fa-puzzle-piece"></i> Dekodiranje mobilnih telefona</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_4" name="addons[]" value="4" <?= in_array("4", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_4"><i class="fa fa-code"></i> Servis mobilnih telefona</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_5" name="addons[]" value="5" <?= in_array("5", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_5"><i class="fa fa-shopping-basket"></i> Prodaja mobilnih telefona</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_6" name="addons[]" value="6" <?= in_array("6", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_6"><i class="fa fa-folder-open"></i> Dodatna oprema za mobilne telefone</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="addon_7" name="addons[]" value="7" <?= in_array("7", explode(",", $company["addons"])) ? "checked" : "" ?>>
                                <label class="form-check-label" for="addon_7"><i class="fa fa-credit-card"></i> Placanje karticom</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Radno vreme:</label>
                        <div class="mb-3 bg-light p-3">
                            <div class="workingtime table-responsive">
                                <table>
                                    <?php
                                    for ($i = 1; $i <= 7; $i++) {
                                        $a0 = isset($work[$i]['open'][0])  ? "checked" : "";
                                        $a1 = isset($work[$i]['open'][0])  ? $work[$i]['open'][0] : 0;
                                        $a2 = isset($work[$i]['open'][1])  ? $work[$i]['open'][1] : 0;
                                        $a3 = isset($work[$i]['close'][0]) ? $work[$i]['close'][0] : 0;
                                        $a4 = isset($work[$i]['close'][1]) ? $work[$i]['close'][1] : 0;
                                    ?>
                                        <tr>
                                            <td><span class="day mr-3">:</span></td>
                                            <td>
                                                <label class="switch mx-3">
                                                    <input type="checkbox" name="day[<?= $i ?>][]" <?= $a0 ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                                <span class="inputs">
                                                    <input type="number" name="day[<?= $i ?>][]" value="<?= $a1 ?>" min="0" max="23" />
                                                    :
                                                    <input type="number" name="day[<?= $i ?>][]" value="<?= $a2 ?>" min="0" max="59" />
                                                    <span class="mx-3">-</span>
                                                    <input type="number" name="day[<?= $i ?>][]" value="<?= $a3 ?>" min="0" max="23" />
                                                    :
                                                    <input type="number" name="day[<?= $i ?>][]" value="<?= $a4 ?>" min="0" max="59" />
                                                </span>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Glavna fotografija:</label>
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="/content/images/<?= $company['primary_photo'] ?>" alt="" class="w-100 shadow mb-3 border border-secondary">
                            </div>
                        </div>
                        <input type="file" accept="image/*" class="form-control" name="primary_photo" />
                    </div>
                    <div class="form-group">
                        <label>Foto galerija:</label>
                        <div class="row">
                            <?php
                            foreach ($company["photo_gallery"] as $img) {
                            ?>
                                <input type="hidden" name="img_gallery[]" value="<?= $img['url'] ?>">
                                <div class="col-sm-2">
                                    <i class="far fa-times-circle text-danger btn-close img-remove" data-url="<?= $img['url'] ?>"></i>
                                    <img src="/content/images/<?= $img['url'] ?>" alt="" class="w-100 shadow mb-3 border border-secondary">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <input type="file" accept="image/*" class="form-control" name="photo_gallery[]" multiple>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/gvqp1vic6f5vjfzae7ddl7fl8o3zleglgzf56aepqks4ce24/tinymce/5/tinymce.min.js"></script>












<div class="row">
    <div class="col-lg-6">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dodaj telefon</h6>
            </div>
            <div class="card-body">
                <form id="new_ad" onsubmit="return false">
                    <div class="form-group">
                        <label for="usr">Brend:</label>
                        <input type="text" class="form-control" name="brand">
                        <input type="hidden" name="class" value="Ads">
                        <input type="hidden" name="function" value="new">
                    </div>
                    <div class="form-group">
                        <label for="usr">Model:</label>
                        <input type="text" class="form-control" name="model">
                    </div>
                    <div class="form-group">
                        <label for="usr">Boja:</label>
                        <input type="text" class="form-control" name="color">
                    </div>
                    <div class="form-group">
                        <label>Cena:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="price">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1">€</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Garancija:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon1" name="warranty">
                            <select class="form-control" name="warranty_type">
                                <option value="0">Dana</option>
                                <option value="1">Meseca</option>
                                <option value="2">Godina</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usr">Stanje:</label>
                        <select class="form-control" name="quality">
                            <option value="0">Novo</option>
                            <option value="1">Polovno 1/10</option>
                            <option value="2">Polovno 2/10</option>
                            <option value="3">Polovno 3/10</option>
                            <option value="4">Polovno 4/10</option>
                            <option value="5">Polovno 5/10</option>
                            <option value="6">Polovno 6/10</option>
                            <option value="7">Polovno 7/10</option>
                            <option value="8">Polovno 8/10</option>
                            <option value="9">Polovno 9/10</option>
                            <option value="10">Polovno 10/10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usr">Opis:</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10" style="height: 50px;"></textarea>
                    </div>
                    <div class="bg-light my-3 p-1">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="earphones" name="earphones">
                            <label class="form-check-label" for="earphones"><i class="fas fa-headphones-alt"></i> Slušalice</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="charger" name="charger">
                            <label class="form-check-label" for="charger"><i class="fas fa-charging-station"></i> Punjač</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="original_box" name="original_box">
                            <label class="form-check-label" for="original_box"><i class="fas fa-box-open"></i> Original kutija</label>
                        </div>
                    </div>
                </form>
                <form method="POST" enctype="multipart/form-data" onsubmit="return false">
                    <div class="form-group">
                        <label>Slike:</label>
                        <input type="file" class="form-control" multiple id="ad_images" accept="image/*">
                    </div>
                </form>
                <input type="submit" class="btn btn-primary" onclick="SubmitAd()" value="Dodaj telefon">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Oglasi</h6>
            </div>
            <div class="card-body">
                <div class="col-12 table-responsive nowrap">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#ID</th>
                                <th>Uređaj</th>
                                <th>Cena</th>
                                <th>Stanje</th>
                                <th>Opis</th>
                                <th>Garancija</th>
                                <th>Dodaci</th>
                            </tr>
                        </thead>
                        <tbody id="result"></tbody>
                    </table>
                </div>
				<div class="page-navigation" id="is_pagination">
					<nav aria-label="Page navigation example">
						<ul class="pagination" id="pagination"></ul>
					</nav>
				</div>
            </div>
        </div>
    </div>
</div>














<div class="row">
    <div class="col-lg-3">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kreiraj servisera</h6>
            </div>
            <div class="card-body">
                <form action="/post_owner/create_servicer" method="POST">
                    <?=message($data)?>
                    <div class="form-group">
                        <label for="usr">Ime:</label>
                        <input type="text" class="form-control" id="usr" name="name" value="<?=data($data, 'name')?>">
                    </div>
                    <div class="form-group">
                        <label for="percent">Procenat:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="percent" name="percent" value="<?=data($data, 'percent')?>">
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Kreiraj servisera">
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista servisera</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr class="bg-primary text-white font-weight-bold">
                                <td></td>
                                <td>Ime</td>
                                <td>Username</td>
                                <td>Procenat</td>
                                <td>Zarada keš/kartica</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = $data["pages"] * 10 + 1 - 10;
                            foreach ($data["servicers"]["servicers"] as $serv) {
                                echo "<tr>";
                                echo "<td>" . $i++ . ".</td>";
                                echo "<td><a href='/owner/servicer/".$serv["id"]."'>" . $serv["name"] . "</a></td>";
                                echo "<td>serviser" . $serv["id"] . "</td>";
                                echo "<td>" . $serv["percent"] . "%</td>";
                                echo "<td>" . $serv["cash"] . " <small>RSD</small> / " . $serv["card"] . " <small>RSD</small></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                $xxx = 10;
                if ($data["servicers"]["count"] > $xxx) {
                    echo '<ul class="pagination my-3">';
                    for ($i = 1; $data["users"]["count"] / $xxx > ($i - 1); $i++) {
                        if ($data["pages"] == $i) {
                            echo '<li class="page-item active"><a class="page-link" href="/admin/users/' . $i . '">' . $i . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="/admin/users/' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-lg-4 mx-auto">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="/" class="go-back mr-2"><i class="fas fa-arrow-left"></i></a> Upravljaj serviserom</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="usr">Ime:</label>
                                <input type="text" class="form-control" id="usr" name="name" value="Nemanj cetkovic" readonly>
                            </div>
                            <div class="col-6">
                                <label for="usr">Username:</label>
                                <input type="text" class="form-control" id="usr" name="name" value="carnekor" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="percent">Procenat:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="percent" value="33">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6 pr-1">
                                <label for="usr">Zarada keš:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="123" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text">RSD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 pl-1">
                                <label for="usr">Zarada kartica:</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="123" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text">RSD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Promeni lozinku">
                    <input type="submit" class="btn btn-primary btn-block" value="Isplati zaradu">
                    <input type="submit" class="btn btn-primary btn-block" value="Obriši">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row d-none">
    <div class="col-lg-4 mx-auto">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="/" class="go-back mr-2"><i class="fas fa-arrow-left"></i></a> Isplata zarade serviseru</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="usr">Username:</label>
                        <input type="text" class="form-control" id="usr" name="name" value="carnekor" readonly>
                    </div>
                    <div class="form-group">
                        <label for="percent">Procenat:</label>
                        <select name="" id="" class="form-control">
                            <option value="">Kes</option>
                            <option value="">Kartica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="usr">Iznos:</label>
                        <input type="number" class="form-control" id="usr" name="name" value="">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Isplati zaradu">
                </form>
            </div>
        </div>
    </div>
</div>















<?php #var_dump($data["info"]);
$info = $data["infos"];  ?>
<div class="row" id="servicerData">
    <div class="col-lg-4">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="/owner/servicers" class="go-back mr-2"><i class="fas fa-arrow-left"></i></a> Upravljaj serviserom</h6>
            </div>
            <div class="card-body">
                <?= message($data) ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label>Ime:</label>
                            <input type="text" class="form-control" value="<?= $info['name'] ?>" readonly>
                        </div>
                        <div class="col-6">
                            <label>Username:</label>
                            <input type="text" class="form-control" value="serviser<?= $info['id'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <form action="/post_owner/update_percent" method="POST">
                    <?= csrf() ?>
                    <input type="hidden" name="servicer" value="<?= $info['id'] ?>">
                    <div class="form-group">
                        <label for="percent">Procenat:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="percent" value="<?= $info['percent'] ?>">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6 pr-1">
                            <label>Zarada keš:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $info['cash'] ?>" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">RSD</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pl-1">
                            <label>Zarada kartica:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $info['card'] ?>" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text">RSD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <input type="submit" class="btn btn-primary btn-block" value="Promeni lozinku" onclick="password()">
                <input type="submit" class="btn btn-primary btn-block" value="Isplati zaradu" onclick="payment()">
                <input type="submit" class="btn btn-primary btn-block" value="Obriši" onclick="deletes()">
            </div>
        </div>
    </div>
</div>
<div class="row" id="payment" style="display:none;">
    <div class="col-lg-4">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><a href="#" class="go-back mr-2" onclick="goBack()"><i class="fas fa-arrow-left"></i></a> Isplata zarade serviseru</h6>
            </div>
            <div class="card-body">
                <form action="/post_owner/pay_servicer" method="POST">
                    <?= csrf() ?>
                    <input type="hidden" name="servicer" value="<?= $info['id'] ?>">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" value="serviser<?= $info['id'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="percent">Procenat:</label>
                        <select name="wallet" id="" class="form-control">
                            <option value="0">Keš</option>
                            <option value="1">Kartica</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Iznos:</label>
                        <input type="number" class="form-control" name="amount">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Isplati zaradu">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row" id="delete" style="display:none;">
    <div class="col-lg-4">
        <div class="card main-shadow mb-4">
            <div class="card-body">
                <form action="/post_owner/delete_servicer" method="POST">
                    <?= csrf() ?>
                    <input type="hidden" name="servicer" value="<?= $info['id'] ?>">
                    <div class="form-group">
                        <label>Obriši korisnika:</label>
                        <input type="text" class="form-control" value="serviser<?= $info['id'] ?>" readonly>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary btn-block" value="Odustani" onclick="goBack()">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-danger btn-block" value="Obriši">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<div class="row" id="password" style="display:none;">
    <div class="col-lg-4">
        <div class="card main-shadow mb-4">
            <div class="card-body">
                <form action="/post_owner/change_servicer_password" method="POST">
                    <?= csrf() ?>
                    <input type="hidden" name="servicer" value="<?= $info['id'] ?>">
                    <div class="form-group">
                        <label>Promeni lozinku za korisnika:</label>
                        <input type="text" class="form-control" value="serviser<?= $info['id'] ?>" readonly>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary btn-block" value="Odustani" onclick="goBack()">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-danger btn-block" value="Promeni">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function payment() {
        $("#servicerData").hide();
        $("#payment").show();
    }

    function deletes() {
        $("#servicerData").hide();
        $("#delete").show();
    }

    function password() {
        $("#servicerData").hide();
        $("#password").show();
    }

    function goBack() {
        $("#servicerData").show();
        $("#password").hide();
        $("#delete").hide();
        $("#payment").hide();
    }
</script>



























<div class="row">
    <div class="col-lg-12">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Porudžbine telefona</h6>
            </div>
            <div class="card-body">
                <div class="col-12 table-responsive">
                    <table class="table table-striped table-bordered porudz">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Kupac</th>
                                <th>Adresa</th>
                                <th>Proizvod</th>
                                <th>Datum</th>
                            </tr>
                        </thead>
                        <tbody id="result"></tbody>
                    </table>
                </div>
				<div class="page-navigation" id="is_pagination">
					<nav aria-label="Page navigation example">
						<ul class="pagination" id="pagination"></ul>
					</nav>
				</div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="oid">
<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detalji porudžbine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered th-right" id="customer_details"></table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered th-right" id="device_details"></table>
                </div>
				<div id="action"></div>
				
				<? if($_GET["t"] == 1){ ?>
                <p><input type="submit" class="btn btn-block btn-warning" value="Odbij" onclick="confirm_product(false)"/></p>
                <p><input type="submit" class="btn btn-block btn-info" value="Potvrdi" onclick="confirm_product(true)" /></p>
                <? }elseif($_GET["t"] == 2){ ?>
                <p><input type="submit" class="btn btn-block btn-info" value="Telefon je poslat" onclick="product_sent()" /></p>
                <? }elseif($_GET["t"] == 3){ ?>
                <p><input type="submit" class="btn btn-block btn-warning" value="Telefon nije preuzet" onclick="product_return()"/></p>
				<? } ?>
			</div>
        </div>
    </div>
</div>

















<div class="row">
    <div class="col-lg-4">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Informacije o profilu</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Korisničko ime:</label>
                    <input type="text" class="form-control" value="<?=$data["info"]["username"]?>" readonly>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" value="<?=$data["info"]["email"]?>" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card main-shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Promeni lozinku</h6>
            </div>
            <div class="card-body">
                <form method="POST" action="/post_owner/change_password">
                <?=message($data)?>
                <?=csrf()?>
                    <input type="hidden" value="<?=$data["info"]["username"]?>" name="username">
                    <input type="hidden" value="<?=$data["info"]["email"]?>" name="email">
					<div class="form-group">
						<label>Stara lozinka:</label>
						<input type="password" class="form-control" name="current">
					</div>
					<div class="form-group">
						<label>Nova lozinka:</label>
						<input type="password" class="form-control" name="new">
					</div>
					<div class="form-group">
						<label>Ponovi novu lozinku:</label>
						<input type="password" class="form-control" name="repeat">
					</div>
					<input type="submit" class="btn btn-primary btn-block" value="Promeni lozinku">
				</form>
            </div>
        </div>
    </div>
</div>
