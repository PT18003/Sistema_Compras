var $j = jQuery.noConflict();

$("#departamento").change(event=>
    {
        $.get(`/empleados/towns/${event.target.value}`,function(res, sta)
        {
            $("#municipio").empty();
            $("#municipio").append(`<option> Seleccione </option>`);
            res.forEach(element => {
                $("#municipio").append(`<option value=${element.id}> ${element.municipio} </option>`);
            });
        })
    });
/*     $("#ver").click(event=> 
        $.get(`/empleados/view/${event.target}`,function(res, sta)
        {
            $("#nombre").append(`<p> Seleccione </p>`);
        })); */