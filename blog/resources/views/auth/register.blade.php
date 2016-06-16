@extends ('../Template.auth')
@section('contenu')



<div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">

    @if ( count($errors) > 0 )

        @foreach( $errors->all() as $error )
            {{ $error }}<br>
        @endforeach

    @endif

    <div class="col-lg-8">
        <form action="" method="post" novalidate>
            <fieldset>
                <legend>Formulaire d'inscription</legend>

            {{ csrf_field() }}
            <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{old('email')}}"><br>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe"><br>
            <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirmation de mot de passe" value=""><br>



           <!-- <input type="submit" value="inscription">-->
            <div>
                <!--<input type="submit" class="btn btn-success" value="Connexion">-->
                <button class='btn waves-effect waves-light' type='submit' name='action'>Inscription</button>
            </div>

            </fieldset>
        </form>
    </div>

</div>



@endsection

@push('javascript')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
@endpush