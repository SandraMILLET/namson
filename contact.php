<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Than long Nam Sun</title>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>


    <?php include('header.php'); ?>

    <div class="rowcoordonées">

        <div class="col-md-12">
            <h2 class="cont">Comment nous contacter?</h2>
            <h3 class="nom"> Mr Nguyen Gilles</h3>
            <h4 class="adresse"> COMPLEXE PIERRE DUCOURTIAL <br>
                AV. Pierre de Coubertin,<br>
                63510 Aulnat
            </h4>
            <h5 class="tel"> 06.77.56.20.42</h5>
        </div>

    </div>

    <div class="row" id="page">
        <div class="rowimageplan">
            <div class="col-md-12 col-sm-12 col-lg-12 carte">
                <div class="milieu">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2781.798913084051!2d3.1658597151061123!3d45.79525617910621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1576148340607!5m2!1sfr!2sfr"
                        width="100%" height="680" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <div class="formulaire">
                        <form id="contact-form" method="POST" action="processForm.php" name="ContactForm">
                            <p class="inputfield"><label for="subject">Sujet</label></p>
                            <input type="text" id="sujet" name="name" style="color: #fff;"
                                onfocus="if (this.value == '90') {this.value=''; this.style.color='#000';}" required
                                tabindex="1" />

                            <p class="inputfield"><label for="message">Message</label></p>
                            <textarea name="message" id="message" tabindex="2"></textarea>

                            <p class="inputfield"><label for="name">Nom</label></p>
                            <input type="text" id="name" name="name" style="color: #fff;"
                                onfocus="if (this.value == '90') {this.value=''; this.style.color='#000';}" required
                                tabindex="3" />

                            <p class="inputfield"><label for="email">Email</label></p>
                            <input type="text" id="email" name="email" required tabindex="4" />

                            <input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer" />
                        </form>
                    </div>

                </div>



            </div>
        </div>

    </div>


    <?php include('footer.php'); ?>

</body>

</html>