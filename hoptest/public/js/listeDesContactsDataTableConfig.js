
$(document).ready(function () {
    $('#example').DataTable(
        {
            "pagingType": "simple_numbers",

            "dom": '"<\'row\'<\'col-sm-12 col-md-6\'f><\'col-sm-12 col-md-6\'p>>" +\n' +
                '"<\'row\'<\'col-sm-12\'tr>>" +\n' +
                '"<\'row\'<\'col-sm-12 col-md-5\'l><\'col-sm-12 col-md-7\'p>>",',

            "lengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"]],

            "language": {
                "lengthMenu": "Lignes par pages _MENU_",
                "zeroRecords": "Rien n'a été trouvé -   :( ",
                "search": "Rechercher  ",
                "paginate": {
                    "next": "Suivant",

                },
            },


        }
    );

});

