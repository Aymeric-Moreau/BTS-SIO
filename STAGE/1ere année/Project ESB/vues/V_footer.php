<footer class="border-top">
    <div class="container py-5">
        <div class="row gy-4 align-items-center">
            <div class="col-12 col-md-4">
                <a class="navbar-brand text-dark text-uppercase fw-bold" href="#">
                    <img src="assets/img/logo_esb.png" alt="Logo ESB" width="90" height="90" />

                </a>
            </div>
            <div class="col-12 col-md-4 text-md-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                           data-bs-target="#mentionsLegales">Mentions légales</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <img src="../assets/front/CHAD.jpg" alt=""/>
    <!-- Modal -->
    <div class="modal fade" id="mentionsLegales" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mentions Légales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tellus leo, volutpat vitae
                        mi
                        ultrices,
                        sollicitudin
                        blandit dui. Mauris ultricies iaculis leo id consequat. Class aptent taciti sociosqu ad
                        litora
                        torquent
                        per conubia
                        nostra, per inceptos himenaeos. Sed posuere risus viverra ornare porttitor. Nullam egestas
                        nec
                        libero eget
                        sagittis.
                        Phasellus vulputate ante a vulputate vehicula. Suspendisse nec dolor ante.
                    </p>
                    <p>
                        Nunc auctor semper turpis. Duis quam velit, aliquam ut mi vel, sollicitudin dapibus erat.
                        Etiam
                        vitae
                        malesuada urna.
                        Vestibulum scelerisque lacus at molestie cursus. Donec placerat enim id enim feugiat
                        gravida.
                        Integer ut
                        maximus libero.
                        Nulla faucibus dolor vitae varius rutrum. Nunc neque sem, convallis id lorem quis, vulputate
                        imperdiet
                        eros. Donec
                        viverra commodo congue.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</footer>
