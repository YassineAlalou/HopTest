
@extends('../templates/mainTemplate')
@section('cssIncludes')
<link rel="stylesheet" href="/css/listeDesContacts.css">
@endsection


@section('content')
<div class="jumbotron" style="background-color: white;">
    <h3 class="display-8" style="color: #8c8c8c;">Liste des contacts</h3>
    <hr class="my-4">
    <p class="lead">
        <a class="btn btn-lg" href="#" role="button" style="background-color: #6aaa5c; color: white"><i
                    class="fa fa-plus-square"> | Ajouter un contact</i></a>
    </p>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th style="color: white">Civilité</th>
            <th style="color: white">Prénom</th>
            <th style="color: white">Nom</th>
            <th style="color: white">Téléphone</th>
            <th style="color: white">E-mail</th>
            <th style="color: white">Société</th>
            <th style="color: white">Ville</th>
            <th style="color: white; width: 80px;" ><i class="fa fa-bars"></i></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="color: blue"><i class="fa fa-male"></i></td>
            <td>ahmd</td>
            <td>fatihi</td>
            <td>0606060606</td>
            <td>ahmd-assni@gmail.com</td>
            <td>google</td>
            <td>Taliwin</td>
            <td>
                <a href="#" class="icon-block">
                    <i class="fas fa-pencil-alt"></i>

                </a>
                <a href="#" class="icon-block">
                    <i class="far fa-trash-alt"></i>

                </a>
                <a href="#" class="icon-block">
                    <i class="far fa-eye"></i>

                </a>
                <a href="#" class="icon-block">
                    <i class="fas fa-street-view"></i>

                </a>
            </td>
        </tr>
        <tr>
            <td style="color: deeppink"><i class="fa fa-female"></i></td>
            <td>fanna</td>
            <td>Ali</td>
            <td>0606110305</td>
            <td>Fanna-ali@gmail.com</td>
            <td>arwass</td>
            <td>kech</td>
            <td>
                <a href="#" class="icon-block">
                    <i class="fas fa-pencil-alt"></i>

                </a>
                <a href="#" class="icon-block">
                    <i class="far fa-trash-alt"></i>

                </a>
                <a href="#" class="icon-block">
                    <i class="far fa-eye"></i>

                </a>
                <a href="#" class="icon-block">
                    <i class="fas fa-street-view"></i>
                </a>
            </td>
        </tr>

        </tbody>
    </table>

</div>
@endsection


@section('jsIncludes')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="/js/listeDesContactsDataTableConfig.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection


