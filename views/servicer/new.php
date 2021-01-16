<div class="row">
    <div class="col-lg-6 mr-auto ml-auto">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dodaj telefon</h6>
            </div>
            <div class="card-body">
                <div id="phone">
                    <form method="POST" action="/post_servicer/new_phone" enctype="multipart/form-data">
                        <?= message($data, "/post_servicer/new_phone") ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label>Klijent</label><input type="text" required class="form-control" name="name" value="<?=data($data, "name")?>" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kontakt telefon</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">+381</div>
                                        </div>
                                        <input type="text" required class="form-control" name="phone" value="<?=data($data, "name")?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label>Marka telefona</label><input type="text" required class="form-control" name="brand" value="<?=data($data, "brand")?>" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label>Model telefona</label><input type="text" required class="form-control"  name="model" value="<?=data($data, "model")?>" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label>IMEI</label><input type="text" required class="form-control" name="imei" value="<?=data($data, "imei")?>" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label>Kvar</label><input type="text" required class="form-control" name="fail" value="<?=data($data, "fail")?>" /></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><label>Dodaj slike</label><input type="file" class="form-control"  accept="image/*" multiple="" name="phone_images[]" value="<?=data($data, "phone_images")?>" /></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cena popravke</label>
                                    <div class="input-group mb-2">
                                        <input type="text" required class="form-control"  name="price" value="<?=data($data, "price")?>" />
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">RSD</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cena delova</label>
                                    <div class="input-group mb-2">
                                        <input type="text" required class="form-control"  name="costs"  value="<?=data($data, "costs")?>" />
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">RSD</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><label>Napomena</label><input type="text"  class="form-control" name="note" value="<?=data($data, "note")?>" /></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group m-0"><input type="submit" class="btn btn-primary btn-block" value="Dodaj telefon" /></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>