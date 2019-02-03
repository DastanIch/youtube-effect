window.onload = function(){
    $('.white_page').remove();
};
$(document).ready(function () {
    $('.play_button').click(function () {
        $(this).parent('.video_wrapper_back').addClass('play');
        $(this).parent('.video_wrapper_back').find('iframe').removeClass('hidden');
    });
    $('.slide_to').click(function (e) {
        e.preventDefault();
        var body = $("html, body"),
            scr = 0;
        if($($(this).attr('href')).length == 1){
            scr = $($(this).attr('href')).offset().top;
        }
        console.log(scr);
        body.stop().animate({scrollTop:scr}, 800, 'swing', function() {});
    });
    $('.open_popup').click(function (e) {
        e.preventDefault();
        $('body').trigger('open_popup');
        $($(this).attr('data-popup')).addClass('active');
    });
    $('body').on('open_popup', function () {
        if($(this).hasClass('while_popup_active')){
            $(this).removeClass('while_popup_active');
        }else{
            $(this).addClass('while_popup_active');
        }
    });
    $('.close_popup').click(function (e) {
        e.preventDefault();
        $(this).closest('.popup').removeClass('active');
        $('body').trigger('open_popup');
    });
    $(document).on('click', '.show-route', function(e) {
        e.preventDefault();
        var coords = $(this).data('coords');
        var arr = coords.split(',');
        getRoute([arr[0], arr[1]]);
    });
    $('body').on('click', '.modall-push .close-modall', function () {
        $(this).closest('.modall-push').slideUp().remove();
    });
    $('#input_numbers').mask("+7(999) 999-99-99");
});
var center;
var activeRoute;
function handlePermission() {
    var returnStatus;
    setTimeout(function () {
        navigator.permissions.query({name:'geolocation'}).then(function(result) {
            if (result.state == 'granted') {
                returnStatus = 1;
            } else if (result.state == 'prompt') {
                returnStatus = 2;
            } else if (result.state == 'denied') {
                addModalPush('Включите доступ к вашей локации, для построения маршрута');
                returnStatus = 3;
            }
        });
        return returnStatus;
    },100);
}
function addModalPush(string) {
    var num = Math.random(),
        html = '<div class="modall-push" data-id="modal-'+num+'">' +
            '<div class="v_center">' +
            '<div class="container">' +
            '<div class="modall-content">' +
            '<span>'+string+'</span>' +
            '<img class="close-modall" src="/static/img/close.svg" alt="">' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="mask"></div>' +
            '</div>';
    $('body').append(html);
    $('body').find('.modall-push[data-id="modal-'+num+'"]').slideDown().addClass('active');
}
ymaps.ready(initMap);
function initMap() {
    var location = ymaps.geolocation.get({
        autoReverseGeocode: false,
        provider: 'browser',
    });
    location.then(
        function(result) {
            center = result.geoObjects.position;
            createMap();
        },
        function(err) {
            center = [43.240545, 76.944426];
            createMap();
        }
    );
}
function createMap() {
    window.map = new ymaps.Map('map', {
        center: [43.237013, 76.915169],
        zoom: 16,
        controls: []
    }, {});
    var balloonContent = "<div class='marker-balloon'>";
    balloonContent += "<div class='marker-name'>SmArt.Point</div>";
    balloonContent += "<b>Контакты:</b>"
    balloonContent += "<div class='marker-address'>улица Байзакова 280, Алматы 050040</div>"
    balloonContent += "<div><button class='btn btn-gold show-route' data-coords='"+43.237013+","+76.915169+"'>Проложить маршрут</button></div>";
    balloonContent += "</div>";
    var myPlacemark = new ymaps.Placemark([43.237013, 76.915169], {
        balloonContent: balloonContent
    }, {
        // preset: 'islands#nightStretchyIcon',
        iconLayout: 'default#image',
        iconImageHref: '/static/img/marker.png',
        iconImageSize: [45, 45],
        iconImageOffset: [-22.5, -45]
    });
    map.geoObjects.add(myPlacemark);
    // Открываем балун на карте (без привязки к геообъекту).
    //myPlacemark.balloon.open();
}
function getRoute(markerCoords) {
    navigator.permissions.query({name:'geolocation'}).then(function(result) {
        if (result.state == 'granted') {
            if(activeRoute != undefined){
                // clear current route
                map.geoObjects.remove(activeRoute);
            }

            var multiRoute = new ymaps.multiRouter.MultiRoute({
                referencePoints: [center, markerCoords]
            }, {
                boundsAutoApply: true,
            });
            // add route on map
            map.geoObjects.add(multiRoute);
            activeRoute = multiRoute;
            multiRoute.events.add('update', function (e) {
                e.get("target").getRoutes().each(function (route) {
                    var mapsLink = route.getMap();
                    console.log(route);
                    map.balloon.close();
                    route.balloon.open();
                    console.log(mapsLink);
                    //window.top.location.href = mapsLink;
                });
                console.log('Open');
            });
        } else if (result.state == 'prompt') {
            addModalPush('Включите доступ к вашей локации, для построения маршрута');
        } else if (result.state == 'denied') {
            addModalPush('Включите доступ к вашей локации, для построения маршрута');
        }
    });
}