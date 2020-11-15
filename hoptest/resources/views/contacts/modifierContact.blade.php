@extends('../templates/mainTemplate')
@section('cssIncludes')

@endsection

<div class="jumbotron" style="background-color: white">
    <label class="display" style="color: #8c8c8c;">Prenom Nom </label> Contact
    <hr class="my-4">

    <form>

        <div class="row">

            <div class="col-md-6">
                <div class="card" style="   border-left: 5px solid #95c9de;
                        width: 35rem; height:35rem">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 40px;">Identite du contact</h5>

                        <div class="row">
                            <h7 class="card-title" style="margin-left: 15px;">Civilité</h7>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <a class="btn btn-lg" href="#" role="button"
                               style="background-color: #e700ff; color: white; margin-bottom: 30px;"><i
                                        class="fa fa-female"> | Madame</i></a>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                            <a class="btn btn-lg" href="#" role="button"
                               style="background-color: #8b9092; color: white; margin-bottom: 30px;"><i
                                        class="fa fa-male"> | Monsieur</i></a>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Prénom</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Prenom" value="prénom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nom</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nom" value="nom">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Fonction</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Fonction" value="fonction">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Service</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Service" value="service">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">E-mail</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="E-mail" value="e-mail">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Téléphone mobile</label>
                                <input type="text" class="form-control" id="inputEmail4" value="téléphone">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Date de naissance</label>
                                <input type="date" class="form-control" id="inputEmail4" value="date_de_naissance">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="   border-left: 5px solid #95c9de;
                            width: 35rem; height: 35rem">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 40px;">Société</h5>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" value="Nom">
                            </div>


                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Adresse</label>
                                <textarea type="text" class="form-control" id="inputEmail4"
                                          placeholder="Adresse" value="adresse" ></textarea>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Code postal</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Code postal" value="code_postal">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="inputPassword4">Ville</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Ville" value="ville">
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Téléphone</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Telephone" value="téléphone">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="inputPassword4">Site web</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Site Web" value="site_web">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-info" style="margin-top: 30px;"><i
                        class="fa fa-edit"> | Modifier </i>
            </button>
            <a type="button" class="btn btn-secondary" href="/contacts/listeDesConatcs" style="margin-top: 30px;"><i
                        class="fa fa-list-ul"> | Retour à la liste des contacts </i>
            </a>
        </div>
    </form>
</div>




@section('jsIncludes')

@endsection