<!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container display-center">
                    <div class="py-5">
                        <h1 class="display-center text-white mb-4">Înregistrează clinici noi</h1>
                        <h5 class="display-center text-white mb-0">Ia parte la extinderea site-ului nostru și ajută-ne să ne mărim echipa alături de cei mai buni parteneri pentru clienții noștrii</h5>
                    </div>
                    <br>
                    <br>
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Înregistare</h1>
                        <form novalidate action="index.php?page=inscrieclinica&try=inscr" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input required type="text" class="form-control bg-light border-0" name="name" placeholder="Nume Clinică" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input required type="text" class="form-control bg-light border-0" name="address" placeholder="Adresă" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input required type="text" class="form-control bg-light border-0" name="phone" placeholder="Număr Telefon" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"  name="emphone" placeholder="Număr Telefon Urgență (nu e obligatoriu)" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Adaugă</button>
                                </div>
                            </div>
                        </form>
                        <script>
                            const form = document.querySelector("form");

                            form.addEventListener("submit", (e) => {
                                if (!form.checkValidity()) {
                                e.preventDefault();
                                }
                                form.classList.add("was-validated");
                            });
                        </script>
                    </div>
        </div>
    </div>
    <!-- Appointment End -->
    