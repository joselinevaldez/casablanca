var OSMPICKER = (function(){
    var app = {};
    
    var map;
    var marker;
    var circle;
    app.initmappicker = function(lat, lon, r, option){
        try{
            console.log("container: "+option.mapId);
            map = new L.Map(option.mapId);
        }catch(e){
            console.log(e);
        }
        
        var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var osmAttrib='MiSuper.gt© | <a href="http://openstreetmap.org">OSM</a>';
        var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});       
        map.setView([lat, lon],option.zoom);
        map.addLayer(osm);
        if(!marker){
            marker = new L.marker([lat, lon], {draggable:'true'});
            circle = new L.circle([lat, lon], r, {
                weight: 2
            });
        }else{
            marker.setLatLng([lat, lon]);
            circle.setLatLng([lat, lon]);
        }
        
        marker.on('dragend', function(e){
            circle.setLatLng(e.target.getLatLng());
            map.setView(e.target.getLatLng());
            $("#"+option.latitudeId).val(e.target.getLatLng().lat);
            $("#"+option.longitudeId).val(e.target.getLatLng().lng);
        });
        
        map.on('click', function(e){
            circle.setLatLng(e.latlng);
            map.setView(e.latlng);
            marker.setLatLng(e.latlng);
            $("#"+option.latitudeId).val(e.latlng.lat);
            $("#"+option.longitudeId).val(e.latlng.lng);
        });
        
        map.addLayer(marker);
        map.addLayer(circle);

        $("#"+option.latitudeId).val(lat);
        $("#"+option.latitudeId).on('change', function(){
            marker.setLatLng([Number($(this).val()), marker.getLatLng().lng]);
            circle.setLatLng(marker.getLatLng());
            map.setView(marker.getLatLng());
        });

        $("#"+option.longitudeId).val(lon);
        $("#"+option.longitudeId).on('change', function(){
            marker.setLatLng([marker.getLatLng().lat, Number($(this).val())]);
            circle.setLatLng(marker.getLatLng());
            map.setView(marker.getLatLng());
        });

        $("#"+option.radiusId).val(r);
        $("#"+option.radiusId).on('change', function(){
            circle.setRadius(Number($(this).val()));
        });

        $("#"+option.addressId).on('change', function(){
            var item = searchLocation($(this).val(), newLocation,$(this));
        });
        
        setInterval(function (){
          map.invalidateSize();
        }, 100);

        function newLocation(item){
            if(item)
            {
                $("#"+option.latitudeId).val(item.lat);
                $("#"+option.longitudeId).val(item.lon);
                marker.setLatLng([item.lat, item.lon]);
                circle.setLatLng([item.lat, item.lon]);
                map.setView([item.lat, item.lon]);
            }
        }
        /*
        var osmGeocoder = new L.Control.OSMGeocoder({
            collapsed: false,
            position: 'bottomright',
            text: 'Find!',
        });
        map.addControl(osmGeocoder);
        */
       
       
       var result = {maps:map,marks:marker,circle:circle};
       return result;
       
    };

    function searchLocation(text, callback,obj){

        $('#osm_search_spinner').show();

        var requestUrl = "https://nominatim.openstreetmap.org/search?format=json&q="+text+", Guatemala";
        $.ajax({
            url : requestUrl,
            type : "GET",
            dataType : 'json',
            error : function(err) {
                console.log(err);
                $('#osm_search_spinner').hide();
            },
            success : function(data) {
                console.log(data);
                var item = data[0];
                callback(item);
                $('#osm_search_spinner').hide();
            }
        });
    };
    
    return app;
})();