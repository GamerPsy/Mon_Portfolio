<?php include "include/head.html" ?>
<?php include "algos/date.php" ?>

<main class="bg-dark main-85">
    <div class="container mt-auto">
        <div class="row">
            <!-- ==================== Infos Rémy ============================================================= -->
            <div class="col-12 col-sm-4 offset-sm-2">
                <div class="card w-100 h-100">
                    <h4 class="font-weight-bold mx-auto pt-3">Fiche de présentation</h4>
                    <div class="card-body">
                        <ul>
                            <li><span class="font-weight-bold">Nom :</span> DUCRY Rémy</li>
                            <li><span class="font-weight-bold">Age :</span> <?= $ageOfRemy ?> ans</li>
                            <li><span class="font-weight-bold">Localisation :</span> Orléans</li>
                            <li><span class="font-weight-bold">En recherche d'emploi:</span> OUI</li>
                            <li class="font-weight-bold">Me contacter : <a href="contact.php"> Formulaire de
                                    contact </a> ou <a href="mailto:contact@remy-ducry.fr"> e-mail </a></li>
                        </ul>
                    </div>
                    <div class="card-footer w-100">
                        <a href="/documents/Remy_DUCRY_Testeur_logiciel.pdf" target="_blank">
                            <div class="btn color-compostelle mx-auto d-block w-100 pt-3">
                                <span class="font-weight-bold text-warning">Télécharger le CV !</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ======================== Photo Rémy ================================================ -->
            <div class="col-12 col-sm-4">
                <div class="thumbnail">
                    <img class="effect rounded mx-auto d-block img-fluid img-thumbnail w-100 h-100"
                         src="images/moi.png" alt="Rémy himself !">
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <!-- ============================ Présentation succinte =========================================== -->
            <div class="card col-12 justify-content-center">
                <div class="card-body mx-auto">
                    <span class="font-weight-bold">Testeur certifié ISTQB</span> niveau fondation depuis fin février 2020
                    , je suis à la recherche d’un poste de <span class="font-weight-bold">testeur logiciel</span>, je veux
                    gagner en expertise et compétences dans le milieu du test.
                    <br/>
                    Je suis <span class="font-weight-bold">analytique</span>, j'aime la <span class="font-weight-bold">
                        rigueur</span>, les philosophies <span class="font-weight-bold">DRY</span> et 
                    <span class="font-weight-bold">KISS</span> sont mes amies naturelles et le métier du test me colle à
                    merveille.
                    <br/>
                    Développeur web junior, c'est par curiosité et soif d’apprendre que j'ai suivi une formation ISTQB
                    de 50 jours avec M2i fin 2019 pour découvrir le métier de testeur et très rapidement je suis tombé
                    sous le charme de ce vaste métier !
                    <br/>
                    <div class="card-footer mx-auto pt-4">
                        <button class="btn btn-dark mx-auto d-block" type="button" data-toggle="collapse"
                                data-target="#versiondetail"
                                aria-expanded="false" aria-controls="versiondetail">
                            Version plus détaillée !
                        </button>
                    </div>
                    <!-- ============================ Présentation développée ====================================== -->
                    <div class="collapse" id="versiondetail">
                        <div class="card card-body">
                            <h5 class="font-weight-bold">Mon parcours :</h5>
                            Je suis un passionné par l'informatique depuis plus de 30 ans, j'ai toujours utilisé un
                            ordinateur depuis mes 10 ans.
                            <br/>
                            Plus jeune je voulais devenir programmeur/analyste puis mon parcours de vie et mon fort
                            attachement à certaines valeurs humaines m’ont fait choisir une carrière dans le soin à la
                            personne. J’ai évolué au fil du temps et des expériences de vie pour me concentrer de plus
                            en plus sur mon évolution personnelle, c’est dans ce contexte qu'en 2018 j’ai
                            ressenti le besoin de revenir à ma passion et mon rêve d’enfant/adolescent : devenir
                            programmeur/analyste.
                            <br/>
                            Puis j'ai découvert le milieu du test fin 2019 et obtenu ma certification ISTQB niveau fondation
                            le 24 février 2020 avec un score de 85%.
                            <br/>
                            <br/>
                            <h5 class="font-weight-bold">Ma reconversion :</h5>
                            J'ai commencé le processus de reconversion, en 2018, en parallèle de mon dernier contrat en
                            qualité de formateur pour adultes.
                            <br/>
                            J'ai fait le choix d'une formation intensive à la Wild Code School pour son approche
                            pédagogique innovante, j'y ai appris les bases de la programmation avec PHP et
                            l'usage de Symfony 4.
                            <br/>
                            Pour mon stage post-formation (4 mois) avec le PREBS j'étais à la génèse d'un super projet :
                            l'élaboration d'un portail de référencement pour mutualiser plus d'une vingtaine de base de
                            données.
                            <br/>
                            Fin 2019 j'ai voulu par curiosité, soif de compétences et volonté de me démarquer en tant
                            que développeur junior, suivre une formation pour passer la certification ISTQB fondation
                            avec le centre de formation M2i et j'ai découvert le secteur dans l'informatique qui
                            convient à merveille à ma personnalité. Il s'agit non seulement d'une suite logique à mon
                            stage avec le PREBS mais d'une évidence de part ma nature à chercher le détail et mon esprit
                            critique.
                            <br/>
                            <br/>
                            <h5 class="font-weight-bold">Mes atouts :</h5>
                            Je suis développeur web junior et j'ai un parcours qui m'a permis de développer et affirmer
                            des compétences appréciées et transposables dans le métier du test dont une solide capacité
                            à travailler en équipe.
                            <br/>
                            J'aime comprendre "comment ça fonctionne", pas mal de domaines sont pour moi des contrèes
                            inexplorées à explorer ! (IA, Big Data, Cyber Sécurité, objets connectés).
                            <br/>
                            Petit plus, je suis de nature très sociable et très très souvent de bonne humeur !
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "include/footer.php" ?>
