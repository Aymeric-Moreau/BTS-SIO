<div class="container containContact">
    <div class="row">
        <div class="col-md-7">
            <div class="form">
                <div class="container">
                    <div class="row">
<?php $emailSentMessage2 = " "; ?>

                        <div class="card cc">
                            <h1 class="card-title ctc mb-4">Contactez-nous !</h1>
                            <form action="index.php?uc=presentation&action=form" method="post">
                                <div class="form-group">
                                    <label for="nom">Nom et Prénom</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Placeholder Text" aria-label="nom" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="form-text">Helper text goes here</div>
                                </div>

                                <div class="form-group">
                                    <label for="adresse-email">Adresse mail</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                                        <input type="email" class="form-control" id="adresse-email" name="email" placeholder="Placeholder Text" aria-label="nom" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="form-text">Helper text goes here</div>
                                </div>

                                <div class="form-group">
                                    <label for="telephone">Téléphone</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                        <input type="tel" class="form-control" id="telephone" name="tel" placeholder="Placeholder Text" aria-label="nom" aria-describedby="basic-addon1">
                                    </div>

                                    <div class="form-text">Helper text goes here</div>
                                </div>

                                <div class="form-group">
                                    <label for="commentaire">Commentaire</label>
                                    <div class="form-textarea">
                                        <textarea class="form-control" id="commentaire" name="commentaire" rows="3" placeholder="Placeholder Text"></textarea>
                                        <div class="form-comment-icon"></div>
                                    </div>
                                    <!-- Affichage du message d'envoi d'e-mail -->
                                    <div class="email-message"><?php echo $emailSentMessage2; ?></div>
                                </div>

                                <button type="submit" class="btn btn-primary btnc">Envoyer</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="map">
                <div class="container">
                    <div class="d-flex flex-column align-items-start gap-3 custom-container">
                        <div class="d-flex align-items-start gap-3">
                            <div class="position-relative custom-circle">
                                <div class="rounded-circle custom-bg"></div>
                                <div class="position-absolute custom-icon">
                                    <div class="rounded custom-inner-icon"> <i class="bi bi-envelope-fill bi-3x"></i></div>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-start gap-1">
                                <div class="fw-bold custom-title">Adresse mail</div>
                                <div class="custom-text">esbourgueil.club-omnisports <br> @orange.fr</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="position-relative custom-circle">
                                <div class="rounded-circle custom-bg"></div>
                                <div class="position-absolute custom-icon">
                                    <div class="rounded custom-inner-icon"> <i class="bi bi-telephone-fill"></i></div>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-start gap-1">
                                <div class="fw-bold custom-title">Téléphone</div>
                                <div class="custom-text">02 47 97 65 40</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="position-relative custom-circle">
                                <div class="rounded-circle custom-bg"></div>
                                <div class="position-absolute custom-icon">
                                    <div class="rounded custom-inner-icon"> <i class="bi bi-geo-alt-fill"></i></div>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-start gap-1">
                                <div class="fw-bold custom-title">Localisation</div>
                                <div class="custom-text">14bis Av. de Saint-Nicolas,<br> 37140 Bourgueil</div>
                            </div>
                        </div>
                    </div>
                </div>
                <p >‎ ‎ ‎ ‎ ‎ ‎ </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.4872971703226!2d0.1600042768555444!3d47.28527611011071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fd5aacd33309e3%3A0x8b469559704f5638!2sESB!5e0!3m2!1sfr!2sfr!4v1686757440917!5m2!1sfr!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>
</div>
</div>

