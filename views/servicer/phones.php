<div class="row">
    <div class="col-12">
        <div class="card main-shadow">
            <div class="card-body">
                <!-- <form action="#"> -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pretraga...." name="search" id="search_value">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" onclick="serviced_phones()">Pretraga</button>
                        </div>
                    </div>
                <!-- </form> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Klijent</th>
                                <th>Urađaj</th>
                                <th>Kvar</th>
                                <th>Serviser</th>
                            </tr>
                        </thead>
                        <tbody id="result"></tbody>
                    </table>
                    <div class="page-navigation" id="is_pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination" id="pagination"></ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="phone_details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <small class="font-weight-bold">INFORMACIJE O UREĐAJU</small>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered th-right">
                        <tbody>
                            <tr>
                                <th>Klijent</th>
                                <td id="name">Nemanja Momčilović</td>
                            </tr>
                            <tr>
                                <th>Kontakt</th>
                                <td id="contact">+381658881634</td>
                            </tr>
                            <tr>
                                <th>Uređaj</th>
                                <td id="device">Samsung A5</td>
                            </tr>
                            <tr>
                                <th>IMEI</th>
                                <td id="imei">345234</td>
                            </tr>
                            <tr>
                                <th>Popravka</th>
                                <td id="failure">lcd</td>
                            </tr>
                            <tr>
                                <th>Cena popravke</th>
                                <td id="price">7843 RSD</td>
                            </tr>
                            <tr>
                                <th>Cena delova</th>
                                <td id="costs">88 RSD</td>
                            </tr>
                            <tr>
                                <th>Napomena</th>
                                <td id="note"> <span class="note" onclick="note()">(Dodaj napomenu)</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><u>LOGS</u></p>
                <div id="action"></div>
                <?php if($data["status"] == 0){ ?>
                <p><input type="submit" class="btn btn-block btn-danger" value="Obriši" onclick="phone_status(3)" /></p>
                <p class="m-0"><input type="submit" class="btn btn-block btn-primary" value="Telefon je popravljen" onclick="phone_status(1)" /></p>
                <?php }elseif($data["status"] == 1){ ?>
                <p><input type="submit" class="btn btn-block btn-danger" value="Vrati na popravku" onclick="phone_status(4)" /></p>
                <p><input type="submit" class="btn btn-block btn-primary" value="Izvrši plaćanje u kešu" onclick="phone_status(2,1)" /></p>
                <p class="m-0"><input type="submit" class="btn btn-block btn-primary" value="Izvrši plaćanje preko kartice" onclick="phone_status(2)" /></p>
                <?php }elseif($data["status"] == 2){ ?>
                <p class="m-0"><input type="submit" class="btn btn-block btn-danger" value="Vrati na popravku" onclick="phone_status(5)" /></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="pid">