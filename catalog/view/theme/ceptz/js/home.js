$(document).ready(function() {
    var el = $('#search_query')
    el.autocomplete({
        source: function( request, response ) {
            if (request.length >= 2) {
                $.ajax({
                    url: 'index.php?route=search/autocomplete&filter_name=' + request,
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function (data) {
                        response(data);
                        $(".ui-autocomplete").show()
                    }
                });
            }
        },
        min_length: 3,
        delay: 300
    });
});