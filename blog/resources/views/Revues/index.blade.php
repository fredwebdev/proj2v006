@extends ('../Template.layout')
@section('contenu')





    <div class="z-depth-3">
        <div class="container">
            <div class="section">
                <div class="row">
                    <h2 class="josefin-bold">La revue</h2>

                    <section class="col s8">
                        @foreach($revues as $revue)

                            <div class="card col s12">
                                <div class="card-image waves-effect waves-block waves-light col s4">
                                    <img class="activator margin-10" src="media/revue-01.jpg">
                                </div>
                                <div class="card-content col s8">
                                    <span class="card-title activator grey-text text-darken-4">LAMBILLIONEA</span>
                                    <p>CXVI, {{ $revue->annee }}ème année, N°{{ $revue->tome }}, février 2016</p>
                                    <span class="card-price grey-text text-lighten-1">50€</span>
                                    <div class="card-action">
                                        <a href="#">AJOUTER AU PANIER</a>
                                        <a class="modal-trigger right" href="#revue01">EN SAVOIR +</a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </section>
                    <!-- Modal Structure -->
                    @foreach($revues as $revue)

                        <div id="revue01" class="modal bottom-sheet">
                            <div class="modal-content">
                                <span class="card-title col s9 offset-s3 grey-text text-darken-4">SOMMAIRE : N°1, février 2016<i class="modal-action modal-close material-icons right">close</i></span>
                                <div class="border-right col s3 center">
                                    <div class="col s12">
                                        <img src="media/revue-01.jpg" alt="couverture" >
                                    </div>
                                    <div class="col s12">
                                        <h5 class="grey-text text-darken-4">LAMBILLIONEA</h5>
                                        <p>{{ $revue->annee }}ème année, N°{{ $revue->tome }}</p>
                                        <span class="card-price grey-text text-lighten-1">50€</span>
                                        <div>
                                            <a href="#">AJOUTER AU PANIER</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s9">
                                    <p>BOUYER Th., Description de nouvelles espèces et notes sur les priones africains (Coleoptera, Cerambycidae, Prioninae) : 4-12
                                        <br>THOMAES A., RENNESON J.-L., DRUMONT A., DESCHEPPER C. Range shift of Oxythyrea funesta Poda, 1761 in Belgium (Coleoptera, Cetoniidae) : 13-27
                                        <br>GIBEAUX C h. Corrigenda à l'Étude du genre Regobarrosia Watson , 1975, avec description d'espèces nouvelles (Lepidoptera, Erebidae, Arctiinae, Phaegopterini) (7 ème note) : 28
                                        <br>KARISCH T. Eine neue afrikanische Metallospora -Art (Lepidoptera, Geometridae, Ennominae) : 29-31
                                        <br>BOUYER Th., Description de nouvelles espèces de Macrotomini d'Afrique occidentale (Coleoptera, Cerambycidae, Prioninae, Macrotomini) : 32-38
                                        <br>VERHULT J.,WEISS J.-C. & STROOBANTS D. Voyage entomologique à la recherche des Hipparchia Fabricius , 1807 et des Gonepteryx Leach , 1815 des îles canariennes de Ténérife, La Gomera, El Hierro et La Palma (Lepidoptera, Rhopalocera, Arctiidae) : 39-55
                                        <br>KLEINFELD F. & PUCHNER A. Zwei Carabus -Neubeschreibungen aus der chinesischen Provinz Sichuan ( Pseudocranion, Neoplesius ) nebst einer Untersuchung zum typischen Fundort des C . ( Neoplesius ) lama Semenow , 1898 (Coleoptera, Carabidae, Carabini) : 56-66
                                        <br>CAVAZZUTI P. & KOZLOV A. Un Nuovo Procerus dell'Armenia meridionale e revisione dello status di Carabus ( Procerus ) elbursianus myskai Cavazzuti , 2004 (Coleoptera, Carabidae) : 67-71
                                        <br>FLOQUET Ph . Découverte et description de la forme rouge d' Agrias phalcidon excelsior Lathy , 1924, Brésil f. akai nov. Floquet , 2015 (Lepidoptera, Nymphalidae) : 72-73
                                        <br>MOUCHERON B. Données complémentaires concernant le Scolyte Xylechinus pilosus ( Ratzeburg , 1837) (Coleoptera, Curculionidae, Scolytinae) : 74-76
                                        <br>KARISCH T. Eineneue Xanthorhoe -Art vom Kivu (Lepidoptera, Geometridae, Larentiinae) : 77-79
                                        <br>BOUYER Th . Note sur une collecte de priones de Tanzanie (Coleoptera, Cerambycidae, Prioninae) : 80-82
                                        <br>KARISCH T. Zur Kenntnis von Prasinocyma germinaria ( Guenée , [1858]) (Lepidoptera, Geometridae) : 83-85
                                        <br>VITALI F. New Acalolepta from the Philippines (Coleoptera, Cerambycidae) : 86-91
                                        <br>Articles parus en 2015 : 92-93
                                        <br>Nouveaux taxons publiés en 2015 : 94</p>
                                </div>
                            </div>

                            <div class="footer-bottom-sheet col s12 grey darken-4">
                                <div class="white-text">
                                    Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Olivier Laval</a>
                                </div>
                            </div>
                        </div>

                    @endforeach



                    <aside class="col s4">
                        <nav>
                            <div class="nav-wrapper">
                                <form>
                                    <div class="input-field white">
                                        <input id="search" type="search" placeholder="Recherchez" required>
                                        <label for="search"><i class="material-icons grey-text text-darken-3">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>

                        <div class="margin-top-30">
                            <h5 class="josefin-bold">Options de tri</h5>
                        </div>

                        <form action="#">
                            <p>
                                <input name="group1" type="radio" id="test1" />
                                <label for="test1">Année 2016</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test2" />
                                <label for="test2">Année 2015</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test3" />
                                <label for="test3">Année 2014</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test4" />
                                <label for="test4">Année 2013</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test5" />
                                <label for="test5">Année 2012</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="test6" />
                                <label for="test6">Année 2011</label>
                            </p>
                        </form>

                    </aside>

                    <div class="col s12">
                        <ul class="pagination">
                            {{ $revues->links() }}
                            <!--
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="bleu active"><a href="#!">1</a></li>
                            <li class="waves-effect bleu"><a href="#!">2</a></li>
                            <li class="waves-effect bleu"><a href="#!">3</a></li>
                            <li class="waves-effect bleu"><a href="#!">4</a></li>
                            <li class="waves-effect bleu"><a href="#!">5</a></li>
                            <li class="waves-effect bleu"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


@push('javascript')

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
@endpush