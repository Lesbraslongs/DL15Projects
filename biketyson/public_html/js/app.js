$(function(){
    apiKey = "0fb44c73a28b4343db6cb88841ad362b13f78289";
    villes = $("#villes");
    data = $("#data");
    googleKey = "AIzaSyDVGSdLuM5g3HWiV0NO35xpLk_UDoxxEaI";

    $.ajax({
        url : "https://api.jcdecaux.com/vls/v1/contracts?apiKey="+apiKey
    }).done(function(contracts){
        
       tabContracts = new Array();
       for (var i in contracts){
            if (contracts[i].country_code === "FR"){
                tabContracts.push(contracts[i].name);
            }
        }
        tabContracts.sort();
        villes.append('<option value="selectionner">choisissez une ville</option>');
        for (var j in tabContracts){
            villes.append('<option value="' + tabContracts[j] + '">' + tabContracts[j] + '</option>');
        }
    }).fail(function(jqXHR, textStatus, errorThrown){
        data.append('Pas de données');
    });

    
    $("#villes").change(function() {
        $("#data").empty();
        city = $("#villes").val()
        $.ajax({
            url : "https://api.jcdecaux.com/vls/v1/stations?contract="+city+"&apiKey="+apiKey
        }).done(function(stations){
            data.append('<h1>Stations présentes à '+city+'</h1>');
            tabStations = new Array();
            tabMarker = new Array();
            tabInfo = new Array();
            
            for (i in stations){
                tabStations.push(stations[i].name);
                tabMarker.push(stations[i].position);
                tabInfo.push(stations[i]);
            }
            
            for (j in tabStations){
                
                if (stations[j].status == "OPEN"){
                    data.append('<h2 style="display : inline-block">Station ' + stations[j].name + '</h2> <h2 style="color : green; display : inline-block"> OUVERTE </h2>');
                }else {
                    data.append('<h2 style="display : inline-block">Station ' + stations[j].name + '</h2> <h2 style="color : red; display : inline-block">FERMEE</h2>');
                }
                data.append('<p>Adresse : ' + stations[j].address + '</p>');
                data.append('<p> Places disponibles : ' + stations[j].available_bike_stands + '</p>');
                data.append('<p> Vélos disponibles : '+ stations[j].available_bikes +'</p>');
                if (stations[j].banking) {
                    data.append('<p> Paiement Carte Bleue : OUI</p>');
                } else {
                    data.append('<p> Paiement Carte Bleue : NON</p>'); 
                }
                late = stations[0].position.lat;
                lnge = stations[0].position.lng;
            }
            initMap(tabStations);
        });
    });
    
    var map;
    function initMap(tabStations) {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: late, lng: lnge},
        zoom: 12
      });
      
        for (i in tabStations){
             
            marker = new google.maps.Marker({
              position: {lat: tabMarker[i].lat, lng: tabMarker[i].lng},
              map: map,
              title: tabInfo[i].name
            });
            
            var contenu = '<div id="infoBulle">'+
                        '<h2>Station ' + tabInfo[i].name + '</h2>'+
                        '<p>Ouverte/Fermée : ' + tabInfo[i].status + '</p>'+
                        '<p>Adresse : ' + tabInfo[i].address + '</p>'+
                        '<p> Places disponibles : ' + tabInfo[i].available_bike_stands + '</p>'+
                        '<p> Vélos disponibles : '+ tabInfo[i].available_bikes +'</p>'+
                        '<p> Paiement Carte Bleue : '+ tabInfo[i].banking +'</p>'+
                      '</div>';
              
            infoWindow = new google.maps.InfoWindow({content: contenu});

//            google.maps.event.addListener(marker,'click', function() {
//                infoWindow.setContent(contenu);
//              infoWindow.open(map, this);
//            });
            google.maps.event.addListener(marker, 'click', (function(marker, contenu) {
                return function() {
                    infoWindow.setContent(contenu);
                    infoWindow.open(map, marker);
                }
            })(marker, contenu));
        }  
    }

        
});




