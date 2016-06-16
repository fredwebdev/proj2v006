@extends ('../../Template.layout')
@section('contenu')


<br>
<br>
<br>
<br>

<div id="modal2" class="">
    <div class="">
        <div class="row">
            <div class="col s12">
                <h4 class="josefin-bold">PROPOSER UN ARTICLE</h4>
                <p>Vous souhaitez soumettre un article pour une publication au sein de la revue ?
                    Rien de plus simple, enregistrez le sujet de votre article ainsi que votre nom
                    et joignez nous votre document au format WORD de préférence ou autre format éditable (.doc, .docx, .odt, .txt).
                    <br><br>
                    Au plaisir de vous lire.
                </p>
            </div>


                <form method=POST action="{{URL::asset('getContactUsForm')}}" class="col s12">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="titre" type="text" name="titre" class="validate">
                        <label for="titre">Sujet de l'article</label>
                    </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                            <input id="nom" type="text" name="nom" class="validate">
                            <label for="nom">Nom de l'auteur</label>
                        </div>
                    </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="texte" type="text" name="texte" class="validate">
                        <label for="texte">Article</label>
                    </div>
                </div>
                    <!--
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn btn-bleu">
                            <span>Votre article</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                -->


                    <input type='hidden' name='_token' value='{{ csrf_token() }}' />



                            <div>
                                <button class='btn waves-effect waves-light' type='submit' name='action'>Je propose</button>
                            </div>




            </form>
        </div>

    </div>
    <!--
    <div class="modal-footer left">
        <a href="contact" class=" modal-close waves-effect waves-green btn-flat">Je propose</a>
        <a href="/" class=" modal-close waves-effect waves-green btn-flat left">Retour</a>
    </div>
    -->
</div>

<br>
<br>
<br>
<br>


@endsection