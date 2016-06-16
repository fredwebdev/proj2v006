

@extends ('../Template.auth')
@section('contenu')


<div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
    <div class="col-lg-8">

        <form action="" method="post"  novalidate>
            <fieldset>

                <legend>Connexion</legend>

                {{ csrf_field() }}
                <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="{{ old('email') }}">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Resté connecté
                    </label>
                </div>
                <div>
                    <!--<input type="submit" class="btn btn-success" value="Connexion">-->
                    <button class='btn waves-effect waves-light' type='submit' name='action'>Connexion</button>
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