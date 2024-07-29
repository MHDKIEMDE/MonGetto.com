$(document).ready(function () {
    $("#pays").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "{{ route('search.pays') }}",
                data: {
                    term: request.term,
                },
                success: function (data) {
                    response(
                        $.map(data, function (item) {
                            return {
                                label: item.name,
                                value: item.id,
                            };
                        })
                    );
                },
            });
        },
        minLength: 1, // Nombre minimum de caractères pour déclencher la recherche
        select: function (event, ui) {
            console.log("Selected: " + ui.item.label + " - " + ui.item.value);
        },
    });
});
