var mapData = {
  "AF": 16.63,
  "NG": 11.58,
  "DZ": 158.97,
  "NE": 600.97,
};

$(function () {
    "use strict";

    jQuery('#world-map-markers').vectorMap(
        {
            map: 'world_mill_en',
            series: {
            regions: [{
                values: mapData,
                scale: ['#C8EEFF', '#0071A4'],
                normalizeFunction: 'polynomial'
            }]
        },
        onRegionTipShow: function(e, el, code){
            el.html(el.html()+' (Data - '+mapData[code]+')');
        },
            backgroundColor: 'transparent',
            borderColor: '#818181',
            borderOpacity: 0.25,
            borderWidth: 1,
            zoomOnScroll: false,
            color: '#009efb',
            regionStyle : {
                initial : {
                fill : '#5e72e4'
                }
            },
            markerStyle: {
               initial: {
                    r: 9,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 5,
                    'stroke-opacity': 0.4
                },
            },
            enableZoom: true,
            hoverColor: '#009efb',
            // markers : [{
            //     latLng : [21.00, 78.00],
            //     name : 'I Love My India'

            //   }],
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: '#c9dfaf',
            selectedRegions: [],
            showTooltip: true,
            // onRegionClick: function(element, code, region)
            // {
            //     var message = 'You clicked "'
            //         + region
            //         + '" which has the code: '
            //         + code.toUpperCase();

            //     alert(message);
            // }
    });


   });