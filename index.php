<?php

require 'header.php';
require 'contact.php';
?>

    <main>
        <div class="section_rdv">
            <div class="box_rdv">
                <h3>Mousdik Pianos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, perferendis mollitia, iusto voluptate itaque et placeat amet eaque, veritatis quam non similique pariatur obcaecati natus porro voluptatibus? Tenetur, consequatur quisquam.</p>
                <button>Prendre rendez-vous</button>
                <div class="surlignement"></div>
            </div>
            <div class="rdv_img"></div>
        </div>
        <div class="actualite">
            <div class="titre_actualite">
                <h5>Actualités</h5>
            </div>
            <div class="slider">
                        <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide">
                                    <div class="image-content">

                                        <div class="card-image">
                                            <img src="images/profile6.jpg" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">David Dell</h2>
                                        <p class="description">1750e</p>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">

                                        <div class="card-image">
                                            <img src="images/profile7.jpg" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">David Dell</h2>
                                        <p class="description">1750e</p>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">

                                        <div class="card-image">
                                            <img src="images/profile8.jpg" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">David Dell</h2>
                                        <p class="description">1750e</p>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">

                                        <div class="card-image">
                                            <img src="images/profile9.jpg" alt="" class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">David Dell</h2>
                                        <p class="description">1750e</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
            </div>
        </div>
        <div class="contact">
            <div class="formulaire">
                <h3>Contactez moi !</h3>
                <p>N'hésitez pas à m'envoyer un message pour plus d'information !</p>

                <form method="post">
                    <div class="info_user">
                        <input type="text" id="fname" name="nom" placeholder="Votre nom">
                        <input type="text" id="femail" name="mail" placeholder="Votreemail@gmail.com">
                        <input type="text" id="" name="sujet" placeholder="Votre sujet">
                    </div>
                    <textarea type="text" id="ftexte" name="message" placeholder="Écrire un message ici"></textarea>
                    <input type="submit" value="ENVOYER" id="submit">
                </form>

            </div>
            <div class="info_contact">
                <div class="information">
                    <h6>Téléphone</h6>
                    <h3>+33 01 36 30 90 69</h3>
                </div>
                <div class="information">
                    <h6>Email</h6>
                    <h3>Mousdikpianos@gmail.com</h3>
                </div>
            </div>
        </div>
        <div class="actualite">
            <div class="titre_actualite">
                <h5>Avis</h5>
            </div>
            <div class="les_avis">
                <div class="card-content">
                    <div class="top_card">
                        <div class="note">
                            <h4> ☆ ☆ ☆ ☆ ☆</h4>
                        </div>
                        <p id="date">10/05/2022</p>
                    </div>
                    <p class="description justifier color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi cumque possimus cum odit, impedit qui architecto doloremque voluptates, voluptatem illo consequuntur ut pariatur maiores perferendis, eaque delectus? Nulla, quidem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quibusdam, voluptate deleniti temporibus hic vitae ullam magnam accusantium maiores expedita quis repellat itaque sunt distinctio molestias sed aperiam. Vitae, officiis.</p>
                    <h2 class="name"> - David Dell</h2>
                </div>
                <div class="card-content">
                    <div class="top_card">
                        <div class="note">
                            <h4> ☆ ☆ ☆ ☆ ☆</h4>
                        </div>
                        <p id="date">10/05/2022</p>
                    </div>
                    <p class="description justifier color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi cumque possimus cum odit, impedit qui architecto doloremque voluptates, voluptatem illo consequuntur ut pariatur maiores perferendis, eaque delectus? Nulla, quidem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quibusdam, voluptate deleniti temporibus hic vitae ullam magnam accusantium maiores expedita quis repellat itaque sunt distinctio molestias sed aperiam. Vitae, officiis.</p>
                    <h2 class="name"> - David Dell</h2>
                </div>
                <div class="card-content">
                    <div class="top_card">
                        <div class="note">
                            <h4> ☆ ☆ ☆ ☆ ☆</h4>
                        </div>
                        <p id="date">10/05/2022</p>
                    </div>
                    <p class="description justifier color">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi cumque possimus cum odit, impedit qui architecto doloremque voluptates, voluptatem illo consequuntur ut pariatur maiores perferendis, eaque delectus? Nulla, quidem recusandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quibusdam, voluptate deleniti temporibus hic vitae ullam magnam accusantium maiores expedita quis repellat itaque sunt distinctio molestias sed aperiam. Vitae, officiis.</p>
                    <h2 class="name"> - David Dell</h2>
                </div>
            </div>
        </div>
    </main>
    <?php

require 'footer.php';
?>