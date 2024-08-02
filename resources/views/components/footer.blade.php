<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted container-fluid">
    <section class="section">
        <div class="container-fluid text-center text-md-start mt-5">
            <!-- Riga -->
            <div class="row d-flex align-items-center">
                <!-- Colonna Logo e Info -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
                    <img src="{{ asset('img/NB-removebg-preview.png') }}" style="width: 100px" class="me-2" alt="">
                    <p class="font-p">Developed by NB.</p>
                </div>
                <!-- Colonna Contatti -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
                    <h6 class="text-uppercase fw-bold mb-4 font-p">Contatti</h6>
                    <div class="d-flex justify-content-center align-items-center mb-2">
                        <i class="fas fa-envelope me-3"></i>
                        <a href="mailto:nicolabongiovanni1609@gmail.com" class="text-reset font-p">nicolabongiovanni1609@gmail.com</a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fas fa-phone me-3"></i>
                        <span class="font-p" >+39 3278308941</span>
                    </div>
                </div>
                <!-- Colonna Orologio Mondiale -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
                    <h6 class="text-uppercase fw-bold mb-4">Orologio Mondiale</h6>
                    <div id="world-clock font-p">
                        <p>Roma: <span id="rome-time"></span></p>
                        <p>New York: <span id="ny-time"></span></p>
                        <p>Tokyo: <span id="tokyo-time"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Copyright -->
    <div class="text-center p-4">
        <p>© 2024 NB</p>
    </div>
</footer>