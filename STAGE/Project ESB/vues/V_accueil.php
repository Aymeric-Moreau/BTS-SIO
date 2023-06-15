

<div class="container-fluid">

    <div class ="text-center">
        <?php
        if (isset($_SESSION['login'])) {
            include 'V_caroussel.php';
            ?>

        <?php } else {
            ?>

            <?php
            
            include 'V_caroussel.php';
            include 'V_card.php';
            include 'V_presentation_personne.php';
            include 'V_form.php';
            ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.4872971703226!2d0.1600042768555444!3d47.28527611011071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fd5aacd33309e3%3A0x8b469559704f5638!2sESB!5e0!3m2!1sfr!2sfr!4v1686757440917!5m2!1sfr!2sfr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            <?php
        }
        ?>


    </div>

</div>

