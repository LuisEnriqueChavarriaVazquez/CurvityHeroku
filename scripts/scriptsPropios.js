$(document).ready(function () {

    //Adaptar la altura del fondo para los elementos SWIPE
    var height = $(window).height();
    $('.alturaAdaptable').height(height);

    //Cargar del scroll
    window.onscroll = function () { myFunction() };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%"; 
        //No lo modifiques aunque te marque error en consola, 
        //lo que ocurre es que es el scroll de los forms pero se reflejo en algunos navs
    }

    //Carousel Swipe
    $('.SWIPECAROUSEL').slick({
        dots: false,
        arrows: false,
        adaptiveHeight: true,
        centerPadding: '0px',
        lazyLoad: 'ondemand',
        cssEase: 'ease',
        infinite: false,
        swipe: true,
        swipeToSlide: true,
        touchMove: true,
        mobileFirst: true,
        centerMode: true,
        slidesToShow: 1
    });

    $('.carousel').carousel();

    //Codigo del buscador (Desplegar elementos)
    var consulta = $(".search-table").DataTable();

    $(".input-search").keyup(function () {
        consulta.search($(this).val()).draw();


        if ($(".input-search").val() == "") {
            $(".search-table").hide();
        } else {
            $(".search-table").fadeIn();
        };

    });

    //Codigo para el cambio de los botones en SWIPE
    //Cambio de los botones en SWIPE
    var acepto, rechaza, rehacer;
    acepto = $(".aceptaButton")
    rechaza = $(".rechazaButton");
    rehacer = $(".rehacerButton");

    //Generador de ID dinámica para los botones de aceptar.
    var nameIdGenerator = "idAcepto";
    var numeroContador = 0;
    var nameIDCollector = [];
    for (var kj = 0; kj < acepto.length; kj++) {
        nameIDCollector.push(nameIdGenerator + numeroContador.toString());
        numeroContador++;
    }

    for (var kjacepto = 0; kjacepto <= acepto.length; kjacepto++) {
        $(acepto[kjacepto]).attr("id", nameIDCollector[kjacepto]);
    }

    //Generador de ID dinámica para los botones de rechazo.
    var nameIdGeneratorR = "idRechazo";
    var numeroContadorR = 0;
    var nameIDCollectorR = [];
    for (var kj = 0; kj < rechaza.length; kj++) {
        nameIDCollectorR.push(nameIdGeneratorR + numeroContadorR.toString());
        numeroContadorR++;
    }

    for (var kjrechazo = 0; kjrechazo <= acepto.length; kjrechazo++) {
        $(rechaza[kjrechazo]).attr("id", nameIDCollectorR[kjrechazo]);
    }

    //Generador de ID dinámica para los botones de rehacer los cambios.
    var nameIdGeneratorRR = "idRehacer";
    var numeroContadorRR = 0;
    var nameIDCollectorRR = [];
    for (var kj = 0; kj < rechaza.length; kj++) {
        nameIDCollectorRR.push(nameIdGeneratorRR + numeroContadorRR.toString());
        numeroContadorRR++;
    }

    for (var kjrehacer = 0; kjrehacer <= acepto.length; kjrehacer++) {
        $(rehacer[kjrehacer]).attr("id", nameIDCollectorRR[kjrehacer]);
    }

    //Desplegamos todas las ID'S
    console.log(nameIDCollector, nameIDCollectorR, nameIDCollectorRR);

    //Esta seccion ha sido agregada de esta manera debido a un fallo con el carousel de SLICK, debido a que se genera un error al acceder a los elementos con un bucle
    $(acepto[0]).click(function () { M.toast({html: 'Aspirante aceptado'}); $("#idAcepto" + 0).addClass("buttonHide"); $("#idRechazo" + 0).addClass("buttonHide"); $("#idRehacer" + 0).removeClass("buttonHide"); }); $(rechaza[0]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 0).addClass("buttonHide"); $("#idRechazo" + 0).addClass("buttonHide"); $("#idRehacer" + 0).removeClass("buttonHide"); }); $(rehacer[0]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 0).removeClass("buttonHide"); $("#idRechazo" + 0).removeClass("buttonHide"); $("#idRehacer" + 0).addClass("buttonHide"); });
    $(acepto[1]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 1).addClass("buttonHide"); $("#idRechazo" + 1).addClass("buttonHide"); $("#idRehacer" + 1).removeClass("buttonHide"); }); $(rechaza[1]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 1).addClass("buttonHide"); $("#idRechazo" + 1).addClass("buttonHide"); $("#idRehacer" + 1).removeClass("buttonHide"); }); $(rehacer[1]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 1).removeClass("buttonHide"); $("#idRechazo" + 1).removeClass("buttonHide"); $("#idRehacer" + 1).addClass("buttonHide"); });
    $(acepto[2]).click(function () { M.toast({html: 'Aspirante aceptado'}); $("#idAcepto" + 2).addClass("buttonHide"); $("#idRechazo" + 2).addClass("buttonHide"); $("#idRehacer" + 2).removeClass("buttonHide"); }); $(rechaza[2]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 2).addClass("buttonHide"); $("#idRechazo" + 2).addClass("buttonHide"); $("#idRehacer" + 2).removeClass("buttonHide"); }); $(rehacer[2]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 2).removeClass("buttonHide"); $("#idRechazo" + 2).removeClass("buttonHide"); $("#idRehacer" + 2).addClass("buttonHide"); });
    $(acepto[3]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 3).addClass("buttonHide"); $("#idRechazo" + 3).addClass("buttonHide"); $("#idRehacer" + 3).removeClass("buttonHide"); }); $(rechaza[3]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 3).addClass("buttonHide"); $("#idRechazo" + 3).addClass("buttonHide"); $("#idRehacer" + 3).removeClass("buttonHide"); }); $(rehacer[3]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 3).removeClass("buttonHide"); $("#idRechazo" + 3).removeClass("buttonHide"); $("#idRehacer" + 3).addClass("buttonHide"); });
    $(acepto[4]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 4).addClass("buttonHide"); $("#idRechazo" + 4).addClass("buttonHide"); $("#idRehacer" + 4).removeClass("buttonHide"); }); $(rechaza[4]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 4).addClass("buttonHide"); $("#idRechazo" + 4).addClass("buttonHide"); $("#idRehacer" + 4).removeClass("buttonHide"); }); $(rehacer[4]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 4).removeClass("buttonHide"); $("#idRechazo" + 4).removeClass("buttonHide"); $("#idRehacer" + 4).addClass("buttonHide"); });
    $(acepto[5]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 5).addClass("buttonHide"); $("#idRechazo" + 5).addClass("buttonHide"); $("#idRehacer" + 5).removeClass("buttonHide"); }); $(rechaza[5]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 5).addClass("buttonHide"); $("#idRechazo" + 5).addClass("buttonHide"); $("#idRehacer" + 5).removeClass("buttonHide"); }); $(rehacer[5]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 5).removeClass("buttonHide"); $("#idRechazo" + 5).removeClass("buttonHide"); $("#idRehacer" + 5).addClass("buttonHide"); });
    $(acepto[6]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 6).addClass("buttonHide"); $("#idRechazo" + 6).addClass("buttonHide"); $("#idRehacer" + 6).removeClass("buttonHide"); }); $(rechaza[6]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 6).addClass("buttonHide"); $("#idRechazo" + 6).addClass("buttonHide"); $("#idRehacer" + 6).removeClass("buttonHide"); }); $(rehacer[6]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 6).removeClass("buttonHide"); $("#idRechazo" + 6).removeClass("buttonHide"); $("#idRehacer" + 6).addClass("buttonHide"); });
    $(acepto[7]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 7).addClass("buttonHide"); $("#idRechazo" + 7).addClass("buttonHide"); $("#idRehacer" + 7).removeClass("buttonHide"); }); $(rechaza[7]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 7).addClass("buttonHide"); $("#idRechazo" + 7).addClass("buttonHide"); $("#idRehacer" + 7).removeClass("buttonHide"); }); $(rehacer[7]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 7).removeClass("buttonHide"); $("#idRechazo" + 7).removeClass("buttonHide"); $("#idRehacer" + 7).addClass("buttonHide"); });
    $(acepto[8]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 8).addClass("buttonHide"); $("#idRechazo" + 8).addClass("buttonHide"); $("#idRehacer" + 8).removeClass("buttonHide"); }); $(rechaza[8]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 8).addClass("buttonHide"); $("#idRechazo" + 8).addClass("buttonHide"); $("#idRehacer" + 8).removeClass("buttonHide"); }); $(rehacer[8]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 8).removeClass("buttonHide"); $("#idRechazo" + 8).removeClass("buttonHide"); $("#idRehacer" + 8).addClass("buttonHide"); });
    $(acepto[9]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 9).addClass("buttonHide"); $("#idRechazo" + 9).addClass("buttonHide"); $("#idRehacer" + 9).removeClass("buttonHide"); }); $(rechaza[9]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 9).addClass("buttonHide"); $("#idRechazo" + 9).addClass("buttonHide"); $("#idRehacer" + 9).removeClass("buttonHide"); }); $(rehacer[9]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 9).removeClass("buttonHide"); $("#idRechazo" + 9).removeClass("buttonHide"); $("#idRehacer" + 9).addClass("buttonHide"); });
    $(acepto[10]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 10).addClass("buttonHide"); $("#idRechazo" + 10).addClass("buttonHide"); $("#idRehacer" + 10).removeClass("buttonHide"); }); $(rechaza[10]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 10).addClass("buttonHide"); $("#idRechazo" + 10).addClass("buttonHide"); $("#idRehacer" + 10).removeClass("buttonHide"); }); $(rehacer[10]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 10).removeClass("buttonHide"); $("#idRechazo" + 10).removeClass("buttonHide"); $("#idRehacer" + 10).addClass("buttonHide"); });
    $(acepto[11]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 11).addClass("buttonHide"); $("#idRechazo" + 11).addClass("buttonHide"); $("#idRehacer" + 11).removeClass("buttonHide"); }); $(rechaza[11]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 11).addClass("buttonHide"); $("#idRechazo" + 11).addClass("buttonHide"); $("#idRehacer" + 11).removeClass("buttonHide"); }); $(rehacer[11]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 11).removeClass("buttonHide"); $("#idRechazo" + 11).removeClass("buttonHide"); $("#idRehacer" + 11).addClass("buttonHide"); });
    $(acepto[12]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 12).addClass("buttonHide"); $("#idRechazo" + 12).addClass("buttonHide"); $("#idRehacer" + 12).removeClass("buttonHide"); }); $(rechaza[12]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 12).addClass("buttonHide"); $("#idRechazo" + 12).addClass("buttonHide"); $("#idRehacer" + 12).removeClass("buttonHide"); }); $(rehacer[12]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 12).removeClass("buttonHide"); $("#idRechazo" + 12).removeClass("buttonHide"); $("#idRehacer" + 12).addClass("buttonHide"); });
    $(acepto[13]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 13).addClass("buttonHide"); $("#idRechazo" + 13).addClass("buttonHide"); $("#idRehacer" + 13).removeClass("buttonHide"); }); $(rechaza[13]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 13).addClass("buttonHide"); $("#idRechazo" + 13).addClass("buttonHide"); $("#idRehacer" + 13).removeClass("buttonHide"); }); $(rehacer[13]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 13).removeClass("buttonHide"); $("#idRechazo" + 13).removeClass("buttonHide"); $("#idRehacer" + 13).addClass("buttonHide"); });
    $(acepto[14]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 14).addClass("buttonHide"); $("#idRechazo" + 14).addClass("buttonHide"); $("#idRehacer" + 14).removeClass("buttonHide"); }); $(rechaza[14]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 14).addClass("buttonHide"); $("#idRechazo" + 14).addClass("buttonHide"); $("#idRehacer" + 14).removeClass("buttonHide"); }); $(rehacer[14]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 14).removeClass("buttonHide"); $("#idRechazo" + 14).removeClass("buttonHide"); $("#idRehacer" + 14).addClass("buttonHide"); });
    $(acepto[15]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 15).addClass("buttonHide"); $("#idRechazo" + 15).addClass("buttonHide"); $("#idRehacer" + 15).removeClass("buttonHide"); }); $(rechaza[15]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 15).addClass("buttonHide"); $("#idRechazo" + 15).addClass("buttonHide"); $("#idRehacer" + 15).removeClass("buttonHide"); }); $(rehacer[15]).click(function () { M.toast({html: 'Cambios desechos'});$("#idAcepto" + 15).removeClass("buttonHide"); $("#idRechazo" + 15).removeClass("buttonHide"); $("#idRehacer" + 15).addClass("buttonHide"); });
    $(acepto[16]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 16).addClass("buttonHide"); $("#idRechazo" + 16).addClass("buttonHide"); $("#idRehacer" + 16).removeClass("buttonHide"); }); $(rechaza[16]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 16).addClass("buttonHide"); $("#idRechazo" + 16).addClass("buttonHide"); $("#idRehacer" + 16).removeClass("buttonHide"); }); $(rehacer[16]).click(function () {M.toast({html: 'Cambios desechos'}); $("#idAcepto" + 16).removeClass("buttonHide"); $("#idRechazo" + 16).removeClass("buttonHide"); $("#idRehacer" + 16).addClass("buttonHide"); });
    $(acepto[17]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 17).addClass("buttonHide"); $("#idRechazo" + 17).addClass("buttonHide"); $("#idRehacer" + 17).removeClass("buttonHide"); }); $(rechaza[17]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 17).addClass("buttonHide"); $("#idRechazo" + 17).addClass("buttonHide"); $("#idRehacer" + 17).removeClass("buttonHide"); }); $(rehacer[17]).click(function () {M.toast({html: 'Cambios desechos'}); $("#idAcepto" + 17).removeClass("buttonHide"); $("#idRechazo" + 17).removeClass("buttonHide"); $("#idRehacer" + 17).addClass("buttonHide"); });
    $(acepto[18]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 18).addClass("buttonHide"); $("#idRechazo" + 18).addClass("buttonHide"); $("#idRehacer" + 18).removeClass("buttonHide"); }); $(rechaza[18]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 18).addClass("buttonHide"); $("#idRechazo" + 18).addClass("buttonHide"); $("#idRehacer" + 18).removeClass("buttonHide"); }); $(rehacer[18]).click(function () {M.toast({html: 'Cambios desechos'}); $("#idAcepto" + 18).removeClass("buttonHide"); $("#idRechazo" + 18).removeClass("buttonHide"); $("#idRehacer" + 18).addClass("buttonHide"); });
    $(acepto[19]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 19).addClass("buttonHide"); $("#idRechazo" + 19).addClass("buttonHide"); $("#idRehacer" + 19).removeClass("buttonHide"); }); $(rechaza[19]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 19).addClass("buttonHide"); $("#idRechazo" + 19).addClass("buttonHide"); $("#idRehacer" + 19).removeClass("buttonHide"); }); $(rehacer[19]).click(function () {M.toast({html: 'Cambios desechos'}); $("#idAcepto" + 19).removeClass("buttonHide"); $("#idRechazo" + 19).removeClass("buttonHide"); $("#idRehacer" + 19).addClass("buttonHide"); });
    $(acepto[20]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 20).addClass("buttonHide"); $("#idRechazo" + 20).addClass("buttonHide"); $("#idRehacer" + 20).removeClass("buttonHide"); }); $(rechaza[20]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 20).addClass("buttonHide"); $("#idRechazo" + 20).addClass("buttonHide"); $("#idRehacer" + 20).removeClass("buttonHide"); }); $(rehacer[20]).click(function () {M.toast({html: 'Cambios desechos'}); $("#idAcepto" + 20).removeClass("buttonHide"); $("#idRechazo" + 20).removeClass("buttonHide"); $("#idRehacer" + 20).addClass("buttonHide"); });
    $(acepto[21]).click(function () { M.toast({html: 'Aspirante aceptado'});$("#idAcepto" + 21).addClass("buttonHide"); $("#idRechazo" + 21).addClass("buttonHide"); $("#idRehacer" + 21).removeClass("buttonHide"); }); $(rechaza[21]).click(function () { M.toast({html: 'Aspirante rechazado'});$("#idAcepto" + 21).addClass("buttonHide"); $("#idRechazo" + 21).addClass("buttonHide"); $("#idRehacer" + 21).removeClass("buttonHide"); }); $(rehacer[21]).click(function () {M.toast({html: 'Cambios desechos'}); $("#idAcepto" + 21).removeClass("buttonHide"); $("#idRechazo" + 21).removeClass("buttonHide"); $("#idRehacer" + 21).addClass("buttonHide"); });
    




    //Codigo del browser

    $(buscar_datos());

    function buscar_datos(consulta) {
        $.ajax({
            url: 'logicaOperacionesAspirante/buscador.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
            .done(function (respuesta) {
                $("#datos").html(respuesta);
            })
            .fail(function () {
                console.log("error");
            });
    }
    


    $(document).on('keyup', '#caja_busqueda', function () {
        var valor = $(this).val();
        if (valor != "") {
            buscar_datos(valor);
        } else {
            buscar_datos();
        }
    });

});