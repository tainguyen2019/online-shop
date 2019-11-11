$(document).ready(function()
{
    $('#price_range').slider({
        range : true,
        min   : 200000,
        max     : 5000000,
        values : [200000,5000000],
        step : 100000,
        stop : function(event,ui)
        {
            $('price_show').html(ui.values[0] +'-'+ ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            // filter_data();
        }
    })
})