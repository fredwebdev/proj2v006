@extends ('../../Template.layout')
@section('contenu')


<br>
<br>
<br>
<br>

<div class="card col s12">
    <div class="card-image waves-effect waves-block waves-light col s4">


        @if(Session::has('errors'))
            <div class="alert alert-warning">
                @foreach(Session::get('errors')->all() as $error_message)
                    <p>{{ $error_message }}</p>
                @endforeach
            </div>
        @endif


    <div class="">
        <div class="row">
            <div class="col s6">
                <h4 class="josefin-bold">DEVENIR MEMBRE</h4>
                <p>Vous n'êtes pas encore membre de notre association et vous souhaitez en devenir adhérent ainsi que recevoir notre revue ?
                    <br><br>
                    Rien de plus simple, il vous suffit de complèter le formulaire ci-contre et de verser une cotisation annuelle de 55€ (pour la Belgique) ou de 65€ (résidant européen) ou de 75€ (pour le reste du monde).
                    <br><br>
                    En plus de recevoir notre newsletter et notre revue, cette côtisation vous offre la possibilité de soumettre vos propres articles pour une publication au sein de la revue.
                    <br><br>
                    Paiement par PayPal ou virement banquaire.
                </p>

            </div>

            <div class="col s6">
                <h4 class="josefin-bold">INSCRIPTION</h4>

                    <form id="contact" method="post" class="form" role="form">
                    <div class="row">


                        <div class=" col s12 grey-text">
                            <input id="name" name="name" type="text" class="validate" >
                            <label for="date">Nom</label>
                        </div>

                        <div class=" col s12">
                            <input id="address" name="email" type="text" class="validate">
                            <label for="address">E-mail</label>
                        </div>

                        <div class=" col s12">
                            <input id="message" name="msg" type="text" class="validate">
                            <label for="msg">Votre message</label>
                        </div>
                        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
                        <!--
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Votre prénom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Votre nom</label>
                        </div>

                        <div class="input-field col s12 grey-text">
                            <input id="date" type="date" class="validate" >
                            <label for="date"></label>
                        </div>

                        <div class="input-field col s12">
                            <input id="address" type="text" class="validate">
                            <label for="address">Votre adresse postale</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Votre mot de passe</label>
                        </div>

                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Votre Email</label>
                        </div>
                        -->
                        <div>
                            <button class='btn waves-effect waves-light' type='submit' name='action'>Je m'inscris</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
<!--
    <div class="modal-footer left">
        <a href="#modal4" class="modal-trigger modal-action waves-effect waves-green btn-flat">Je m'inscris</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat left">Retour</a>
    </div>
    -->
        </div>
    </div>

<br>
<br>
<br>
<br>


@endsection