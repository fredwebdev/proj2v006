@extends ('../../Template.layout')
@section('contenu')


    <div class="container">
        <div class="row">
            <div class="col 20 s12">


    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    <div class="col-lg-8">
    <h1>Gestion des événements</h1>
       <!-- <a href="{{URL::asset('evenements.create')}}">Ajouter un nouvel événement</a><br> -->
        <a href="evenements/create">Ajouter un nouvel événement</a><br>
<hr>
    @foreach($evenements as $evenement)

        <p>{{$evenement->titre}} <a href="{{ route('evenements.edit', $evenement) }}">editer</a></p>

        <form action="{{route('evenements.destroy', $evenement)}}" method="post">
            <input type='hidden' name='_method' value='DELETE' />
            <input type='hidden' name='_token' value='{{ csrf_token() }}' />
            <div>
                <button class='' type='submit' name='action'>supprimer</button>
            </div>
            </fieldset>
        </form>

        <hr>

    @endforeach

    </div>



            </div>
        </div>
    </div>


@endsection
@push('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
@endpush