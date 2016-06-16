@extends ('../Template.layout')
@section('contenu')




    <div class="container">
        <div class="row">
            <div class="col 20 s12">



    <h1>Ajouter</h1>

    <form action="{{route('evenements.store')}}" method="post">
        <fieldset>
            <legend>Ajouter un événement</legend>
            <div class="input-field"><label for="titre">Titre</label>
                <input type="text" id="titre" class="validate" required="required" name="titre" value="" />
            </div>

            <div class="input-field"><label for="mail">Nom du lieu</label>
                <input type="text" id="nom" class="validate" required="required" name="nom" value="" />
            </div>

            <div class="input-field"><label for="mail">Adresse</label>
                <input type="text" id="adresse" class="validate" required="required" name="adresse" value="" />
            </div>

            <div class="input-field"><label for="mail">Date</label>
                <input type="text" id="date" class="validate" required="required" name="date" value="" />
            </div>

            <div class="input-field"><label for="mail">E-mail</label>
                <input type="text" id="email" class="validate" name="email" value="" />
            </div>

            <div class="input-field"><label for="mail">Facebook</label>
                <input type="text" id="facebook" class="validate" name="facebook" value="" />
            </div>

            <br>

<!--
            <input type="hidden" id="date" class="validate" required="required" name="date" value="<?php $mytime = Carbon\Carbon::now(); echo $mytime->toDateTimeString(); ?>" />
            -->
            <!--<input type='hidden' name='_method' value='POST' />-->
            <input type='hidden' name='_token' value='{{ csrf_token() }}' />
            <br>
            <div><!-- -->
                <button class='btn waves-effect waves-light' type='submit' name='action'>Valider</button>
            </div>
        </fieldset>
    </form>

            </div>
        </div>
    </div>



@endsection

@push('javascript')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
@endpush