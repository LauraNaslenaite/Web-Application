
    mapboxgl.accessToken = 'pk.eyJ1IjoibGF1cmFuYXMiLCJhIjoiY2sybnRqODB5MHE5cjNibnozNnlndGEwcyJ9.oaxzA4cGRd_-3QgjdqKETg';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-2.9707, 56.4620],
        pitchWithRotate: false,
        trackResize: true,
        zoom: 13
    });
        
    map.on('load', () => {
            map.loadImage('https://i.imgur.com/lz3uxL1.png',
                (error, image) => {
                    if (error) throw error;
                    map.addImage('custom-marker', image);
                    map.addSource('places', {
                        'type': 'geojson',
                        'data': {
                            'type': 'FeatureCollection',
                            'features': [
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dudhope Castle </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9820239098682, 56.464398307875]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Asda Car Park, Kirkton </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9862445880245, 56.488219704821]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lansdowne Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0166591432172, 56.477946349697]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Tesco Car Park, South Road </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0414924507683, 56.470677710519]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Riverside Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0395503939999, 56.454100347521]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Tesco Car Park, Riverside Drive </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9789036396754, 56.453724957219]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Gellatly Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9671456363023, 56.461754157491]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dura Street Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9581882162887, 56.472382826529]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Campfield Square, Broughty Ferry </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8578440481032, 56.474698708899]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Queen Street Car Park, Broughty Ferry </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8743983790358, 56.467844635607]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Broughty Ferry Beachfront </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8670547783584, 56.463746685854]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Tesco Car Park, Kingsway Retail Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.995097248879, 56.482136423171]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Stack Leisure Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0067094319427, 56.473503535141]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pennycook Lane </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9931615030005, 56.456506446479]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Carpark Roseangle </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9867241582074, 56.45273358242]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hebrides Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9513871245355, 56.489232118591]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Heathfield Student Accomodation Old Hawkhill </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9836048834476, 56.459175272535]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Scrimgeour Place </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9812846363913, 56.465387149944]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Belmont Student Accomodation Old Hawkhill </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9845039441833, 56.458219737885]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Seabraes </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9815343280625, 56.455106007321]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigie Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9564763270534, 56.469588775]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Tesco Call Centre, Baird Avenue </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0101931757324, 56.482481940188]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> The Hub, Hawkhill </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9808902338034, 56.460555997468]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Aldi, Arbroath Road </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9301302440636, 56.473048516753]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Blinshall Street </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9816025270638, 56.460383811119]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Alloway Place West </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9491443522719, 56.480639898478]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> NCR Fulton Road </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0559872406366, 56.473042965519]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Opal, Parker Street </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9794868976615, 56.464291762496]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Abertay University, 27 Lyon Street </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9593518040321, 56.468724757082]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Abertay University, 17 Lyon Street </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9588936436181, 56.468778214974]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Abertay University, 7 Lyon Street </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9582342069805, 56.468854617159]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Aberaty University, 14 Lyon Street </strong><p>(Private)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9589493476721, 56.46843309499]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Garry Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0004439557757, 56.486353465567]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Asda, Myrekirk Road </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: y</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0488671034222, 56.475431617675]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brook Street car park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8727437390141, 56.466628676829]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fort Street car park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8767665751073, 56.466843578993]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Burnside Court </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0058192907217, 56.47077624713]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Bank Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0097490698166, 56.471327484109]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Broughty Ferry Castle Green Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8694118643393, 56.463585467887]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Bright Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0097570350512, 56.473021299801]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lochee Library </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0088463971863, 56.470795176564]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Sinclair Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0114727459281, 56.473314998354]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 44/46 Clepington Road, Dundee </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9650282168881, 56.477369667046]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ashbank Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9996103014709, 56.460921992026]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Shepherd\'s Loan </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9944049001175, 56.454776759717]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Blackness Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9969222675784, 56.457939956261]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fleming Gardens South @ No. 1 </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.974356996345, 56.476270322951]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fleming Gardens North @ No. 28 </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.967751879836, 56.4766857969]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Barnes Avenue / Graham Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9690677368809, 56.47971961757]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Bruce Street / Hill Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9802119274349, 56.471020240267]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Blackness Road (fire station) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9914408448029, 56.460101276175]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brook Street (B/F @ M&S) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8776442112133, 56.467522859752]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Park Avenue (@ Baldovan Tce) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9539185484793, 56.47133241622]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fintry Road (@ shops & church) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9391200034698, 56.48978021611]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fintryside / Finlow Tce (New)  </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9314563042192, 56.488591964323]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigowan Road (New) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0378215208739, 56.473552509515]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Arbroath Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9524818861247, 56.468701887014]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Abbotsford Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9960630928166, 56.460185001013]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Abbotsford Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9981765395759, 56.458859352251]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Mary\'s Place (Dudhope Crt) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9898802930386, 56.464337913765]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balmerino Road (near shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9090056511528, 56.48077522887]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Caird Avenue (Church) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9783286128702, 56.476283992156]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 234 Clepington Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9813463723344, 56.477725508618]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Provost Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9753778547066, 56.474338745142]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Coldside Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9828279427532, 56.476731783049]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 112 Clepington Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.971730602554, 56.477454974404]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Arklay Street / Sandeman St. </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9659923181421, 56.475199712812]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strathmore Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9642820660802, 56.474409464314]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Arklay Terrace / Court Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.963046127301, 56.476225315764]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ogilvie Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9623827564962, 56.471387970023]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Sandeman Street / Court Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9631178544438, 56.475176917799]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cardean Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9559844103461, 56.471697717072]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Arthurstone Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.96126745193, 56.46903287525]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Erskine Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9600158377758, 56.469274981061]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Huntly Square Shops </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9171957332258, 56.476007476712]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ballindean Road (Taxi Rank) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9159040990365, 56.480278164296]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 35/37 Ballindean Road  </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9170899775105, 56.477616533651]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Spey Drive (Shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0459620963573, 56.467469419056]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 451/461Charleston Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0419861856274, 56.468461269583]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 104 Thurso Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.047698167663, 56.465830536581]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Murrayfield Walk </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9262821165841, 56.486361961309]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Speckled Wood Court </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9135007448226, 56.490435042213]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 52 Byron Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9871018592535, 56.472761475548]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 299 Strathmore Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9850137429395, 56.47508491373]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Rosebank Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9755010370828, 56.468295515367]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Butterburn Square </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9768202522208, 56.471606808957]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Main Street / Dens Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9699594291726, 56.472190979634]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Kirk Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0134011164185, 56.470784994036]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Campbell Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9978728386747, 56.468940864164]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cleghorn Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9944404750954, 56.464655856758]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brook Street (Dundee) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9872586330475, 56.461476515212]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Bankmill Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9935264144399, 56.462122191096]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Westport </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9779399787147, 56.459506204159]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Abernethy Road (B/F) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8533847446207, 56.478175075532]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> No. 2 Thorter Way </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9584058780256, 56.461305685113]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Opposite Thorter Neuk </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9552243160245, 56.462237510473]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Annfield Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9931873975634, 56.459546137954]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ryehill Lane / Perth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9895219069971, 56.456031432663]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balfour Street (University) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9831190298633, 56.45825303353]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ferguson Street Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.958715429724, 56.467371525435]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 40 Perth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9797220331576, 56.456583178245]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Berwick Drive (Dunrobin Walk) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9276031540997, 56.492993158222]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Vincent Street (B/F) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8708216760486, 56.464551820812]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Scott Street / Glenagnes Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9977517933743, 56.462854739615]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Allan Lane </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9655492536974, 56.462536117852]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 107 Midmill Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9300350682486, 56.481949126766]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Saggar Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9999791507616, 56.465535695955]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 112/126 St Kilda Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0173656818731, 56.493622267843]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Mitchell Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9922182837278, 56.464090374339]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hazel Avenue / Perth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0293736264983, 56.457279041357]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Glamis Road / Perth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0228798749784, 56.456627164433]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Elliot Road / Glamis Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0202944221032, 56.461896900792]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Glamis Road (Shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.023663564883, 56.464705586588]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Jedburgh Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0059030372701, 56.460813357385]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Nevay Terrace / Glamis Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.018710787091, 56.465930084691]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balgay Cememtery </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0149507978171, 56.466851623233]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lochee Park Entrance </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0114398436797, 56.468480113631]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ancrum Outdoor Centre </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0055615525798, 56.468831944778]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Charleston Drive / Arran Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0272669802686, 56.470004008475]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Windsor Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9978012369874, 56.454509387615]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 227/229 Perth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9968962731615, 56.456597911054]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 129/171 Tweed Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0322304379762, 56.469604242062]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 243/253 Charleston Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0327318020098, 56.470165964332]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Menzieshill Parish Church </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.038005337817, 56.468743306158]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cart Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0373650820062, 56.466895324299]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Earn Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.043695006141, 56.46746106309]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 1/15 Dickson Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0324004893991, 56.465899553395]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dickson Avenue / Clyde Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0294126086621, 56.465452481835]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Yarrow Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0276851003931, 56.466753062103]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Rosefield Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9933598864749, 56.460332628955]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Peddie Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9929700135007, 56.457747332265]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Daniel Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9846898547155, 56.460571533911]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pitfour Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9964736009324, 56.464624520034]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Polepark Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9905141291645, 56.462644234266]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Tullideph Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0015320239593, 56.466280338161]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 571/573 South Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0330485043942, 56.47199802962]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 20 Nelson Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9687915005836, 56.467731466004]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Macaulay St / Carmichael Court </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9794881958662, 56.468520822373]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 12 Bonnybank Road </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9691328530499, 56.467156282417]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 17 Forebank Road </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9696163861662, 56.46685854253]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 9 Ellen Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9668863385206, 56.468262839181]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 18 Caldrum Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9729995998715, 56.469772900857]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ladywell Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9655154420797, 56.465780143042]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Perth Road / Westfield Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9861454791216, 56.456420716494]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Shepherds Loan / Stephens Yard </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9949438360936, 56.455310766846]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 8 Shepherds Loan </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9953841834738, 56.45597878515]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 12 Taylors Lane </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9938638318923, 56.455545255811]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Union Place North Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9926381339971, 56.455263301597]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Union Place South Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9925448523929, 56.454779322943]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Thomson Street / Seafield Lane </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9899677233471, 56.455302061813]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Seafield Road Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9863169158861, 56.45463572747]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Peter Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.990652399789, 56.456433986349]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Baltic Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9908480885534, 56.454716117657]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 25 Hilltown </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9707822913658, 56.465266262162]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 37 HIlltown </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9710740423128, 56.465505420449]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 85 Hilltown </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9721476373842, 56.46647128674]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Victoria Road / Nelson St </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9664903440143, 56.466229605988]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Victoria Road / Wellingston St </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9656937614823, 56.4663963858]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Osborne Place </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9964960846708, 56.455439846299]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> McDonald Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9743294431739, 56.46601469384]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Eadie\'s Road </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.968803068556, 56.465988912686]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> William Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9646220932214, 56.467196494949]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 35-64 William Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9661244220346, 56.468868764906]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 75 Ann Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9699089029323, 56.468106440683]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Bell Street / Euclid Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9740013390029, 56.46292371564]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Reform Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9711791133138, 56.461472623408]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Shore Terrace / Castle Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9677402180254, 56.460160209456]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Shore Terrace / Crichton St </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9687790889357, 56.459482462727]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Union Street (opp. Malmaison) </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9703305577914, 56.458542117395]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cowgate / Wellgate </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9681109141925, 56.46372398574]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Weavers Yard </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9630673430255, 56.466223490239]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigmount Road (Shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0306079390123, 56.472873474496]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ravenscraig Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0354614811261, 56.472774703179]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigowan Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0343516864513, 56.473546456576]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 13 Dunholm Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0401249467002, 56.473296245345]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Denhead Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0479978809979, 56.473459478315]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brownhill Road (Shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.035356432373, 56.475440793899]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 38 Balgarthno Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0403710975939, 56.476096296339]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 73/75 Balgarthno Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0405244563368, 56.4744295432]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brownhill Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0334202061246, 56.476341833454]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brackens Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0081208012263, 56.496980196913]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Drumlithie Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0144736392591, 56.496325053476]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Catterline Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.017886962387, 56.496442419465]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Clements Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0207669966136, 56.495495935213]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dalmahoy Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0212812206533, 56.494649031955]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Edmund Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0187373252193, 56.493874969412]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Monance Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0176777502966, 56.492331556619]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Birkdale Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0183903068253, 56.491510163639]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Birkdale Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0144151010593, 56.49133588803]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Mungo Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0152453021799, 56.494424166863]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Kilda Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0110583867, 56.493777652719]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Fillans Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0115980165003, 56.492050623079]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Kingsmuir Park </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0098109021628, 56.496135650709]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Sidlaw Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.011420536303, 56.499035935749]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strathmartine Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9988474454756, 56.494384682841]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Macalpine Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0056537449652, 56.495061328741]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Americanmuir Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0021674701193, 56.488987361493]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Baldovan Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9969085845063, 56.492744296715]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cloan Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9980938014683, 56.490298783866]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Gullane Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0113500105092, 56.486683492337]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Gullane Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0091633176247, 56.486039916689]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Turnberry Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0070464848533, 56.487449792266]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Camperdown Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.005466956817, 56.487415882673]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Gleneagles Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0077942922927, 56.489295575195]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Turnberry Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.010716047066, 56.48776714619]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Turnberry Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0149458820147, 56.487748446632]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Gleneagles Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0198651692433, 56.488730863858]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Scotscraig Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.017107220529, 56.490439070721]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Rosemount Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0192303018143, 56.486287552789]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Staffa Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0077183900299, 56.485323323127]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Gleneagles Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0110497724937, 56.489370868329]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lansdowne Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0141224768956, 56.476316082072]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Foggyley Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0062144457154, 56.475923181054]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Whorterbank </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0058941868157, 56.470673162715]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cobden Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0019649705745, 56.470179192826]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Kilberry Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9992539722834, 56.469976172076]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Inverary Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9925766735782, 56.466466125105]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strathmore Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9892598111868, 56.474965042738]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balgarthno Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0438134099178, 56.475211710957]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Napier Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0218661216867, 56.477048571748]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Liff Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0268421712365, 56.477208295172]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Yeamans Lane </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0177697591423, 56.471612435489]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Session Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9802454477859, 56.460789722812]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Donnottar Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9001243439281, 56.47292115805]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strathern Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8947837772087, 56.472935733679]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Manor Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8711740099245, 56.465921681985]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Church Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8799481144654, 56.46608659315]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hamilton Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8541650036947, 56.474608248003]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ballumbie Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9039347400601, 56.490765630067]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Perth Road / Farington Rd </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0185168188216, 56.456608863858]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Perth Road / West Park Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0109702054402, 56.456425911237]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ninewells Ave </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0277988763391, 56.463046407831]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balgay Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0054916626931, 56.46274283584]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ceres Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8572638147926, 56.478395585135]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dalhousie Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8451925761684, 56.473917651376]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Monifieth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8542423560849, 56.470466102826]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Monifieth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8612277380086, 56.468801277199]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> The Esplanade </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8492480353326, 56.469778733768]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Mill Street Car Park </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8668339712049, 56.464142245714]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hindmarsh Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9714793670295, 56.47681244438]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 16 Forthill Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.873140527795, 56.472147750808]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Nursery Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8701591316027, 56.472425773967]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hamilton Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8515622856007, 56.475911046857]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hamilton Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.84996946837, 56.476273854598]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Forth Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0384112386349, 56.469864379079]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Park Place / Old Hawkhill </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: </p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9798617150387, 56.459366302645]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lawers Drive </strong><p>(Public)</p><p><strong>Paper</strong>: </p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: </p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8531236783004, 56.483767204074]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Nethergate/Park Place </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: </p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9767645949255, 56.457123406942]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Palais Court </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: </p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.976625049504, 56.459052065502]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brook Street, Broughty Ferry </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8711726773695, 56.466592749648]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Forester Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9754334317421, 56.462361352844]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Park Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9770509900778, 56.457307740809]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Art College, Perth Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9818090000249, 56.456656360378]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dawson Park (Car Park) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8939567112031, 56.474560055507]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hilltown Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9734821962668, 56.465651350763]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lorne Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.015265205357, 56.47342702854]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Liff Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0201868234357, 56.475641628063]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cedarwood Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0034789340221, 56.474791773607]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Brantwood Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9946647622234, 56.473245748404]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ancrum Court </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0069054292496, 56.471373564988]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Castlewood Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9631500412171, 56.495266133992]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Mill O Mains Primary School </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9591831055802, 56.493344518716]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> William Fitzgerald Way </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9508877845314, 56.494836125254]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Finavon Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9495196339194, 56.491442696263]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fintry Road / Fintry Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9466911142282, 56.488505582619]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fintry Road  </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9420442229235, 56.488732581447]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Cheviot Crescent (Play Area) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9406312047748, 56.494651581489]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Findowrie Street (Bus Stop) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9359944518937, 56.493415178305]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Longhaugh Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9317216440553, 56.492642370838]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Finlow Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9322222556075, 56.49107938502]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Finmore Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9345329388841, 56.488916876013]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Finlaggan Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9378664696025, 56.487587687092]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> No.96 Fintryside </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9377524998289, 56.486792553965]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> No.20 Fintryside </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9318952543466, 56.487242497949]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fountainbleau Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9391961819208, 56.484490736064]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Glenconnor Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.943502765273, 56.483130291058]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pitkerro Drive @ McManus Court </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.943976447228, 56.479770944938]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pitairlie Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9364076484792, 56.480777263578]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Mauchline Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9329808981654, 56.478677092288]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dryburgh Shops </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0214203373228, 56.479292665403]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Buttars Loan Shops </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0281236847353, 56.475348131577]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Berwick Drive (bus stop) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9288344847876, 56.494145477181]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Berwick Drive (shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.922666948387, 56.492081827491]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ballumbie Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.911428400337, 56.491765201236]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Peebles Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8940011274631, 56.489011411563]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Summerfield Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9152661191416, 56.486454634118]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Summerfield Avenue  </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9104863203031, 56.486920650973]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Whitfield Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9236846772515, 56.48687315495]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Whitfield Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9274261280872, 56.488234184768]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balunie Drive (opp skate park) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9199336274509, 56.481353240281]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ballantrae Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9140702635567, 56.481372307737]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 160 Balunie Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9103067566699, 56.482854949495]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balmoral Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9041798515365, 56.47931173386]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balunie Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9005693713981, 56.480942376359]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Baluniefield Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9005234096832, 56.478504520958]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 149 Balunie Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8970989482665, 56.47825821825]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balbeggie Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9051989117309, 56.477395326253]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strachan Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9077587987455, 56.477105610514]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Mains Loan / Lammerton Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9584020131475, 56.47798913098]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Molison Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9567995412154, 56.473458206871]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Stobsmuir Park / Pitkerro Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9506905448469, 56.476866526514]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Stobsmuir Park / Clep. Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9501659261608, 56.477782807097]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Rodd Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9468707406176, 56.475315317245]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Old Craigie Road (Allotments) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9425266569113, 56.477040183866]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Old Craigie Road / Nesbitt St </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9405745662574, 56.474058143698]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Lyon Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9627920515788, 56.468172285943]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balunie Dr (opp ind. estate) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8932386901381, 56.480271776623]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> West Queen Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.8848267544415, 56.469088072626]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balunie Avenue / Balcarres Ter </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9070199879505, 56.479139072045]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balunie Street </strong><p>(Public)</p><p><strong>Paper</strong>: </p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: </p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.89474116431, 56.479392929386]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pitkerro Road </strong><p>(Public)</p><p><strong>Paper</strong>: </p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: </p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9332744034319, 56.484260196929]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 104 Buttars Loan </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0282234625955, 56.473278837742]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Greenlee Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0239269066043, 56.471922851828]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balmerino Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9113207381357, 56.479352635491]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balbeggie Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9112672571409, 56.477919366118]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Huntly Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9186816331614, 56.477362149997]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 71 Kemnay Gardens  </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9168433435832, 56.476846709789]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strathern Rd / Ralston Rd </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9079632832494, 56.471475490646]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Margaret Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9121487591122, 56.469316097215]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigie Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9208833854093, 56.469254947134]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strips of Craigie Road (shops) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9221526761046, 56.469106606672]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Strips of Craigie Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9241439715608, 56.472378082583]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigie Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9331604333201, 56.471924182783]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ellengowan Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9477997612258, 56.469626676483]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Eden Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9509761860079, 56.468016829329]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 154 Broughty Ferry Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9490251954423, 56.466932079408]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 52 Broughty Ferry Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9540834353179, 56.46648936954]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 113a Broughty Ferry Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9437504609726, 56.467305116808]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fintry Drive Opp. Fintry Mains </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.942215370899, 56.490824548439]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Fintry Road Opp. Finlarig Ter </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9394873904483, 56.489377521839]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Whitfield Loan </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9201526644872, 56.488804139569]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Happyhillock Road  </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9270720647952, 56.481889969198]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> South Road (Lidl) </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0136710639758, 56.471747962711]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 33/55 Spey Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0494684879968, 56.468175498324]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pasteur Lane </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0322235310538, 56.461461139654]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Park Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9794971046197, 56.481225465306]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Barnes Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9757415816662, 56.480284336073]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Kinghorne Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9819440772644, 56.469926945543]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> W Somerville Place </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9810760926349, 56.467092189379]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Kinnaird Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.979611077551, 56.469042400366]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hilltown Opposite Stirling St </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9748320360219, 56.469364382953]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Ann Street </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9721480784439, 56.467223258839]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Forebank Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9681584515061, 56.465947786708]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> St Luke\'s Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9959736800704, 56.494383093959]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Harestane Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9832649284301, 56.494510582851]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balgowan Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9823699570777, 56.491701151103]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balmuir Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9775978515411, 56.492792035438]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Millburn Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9738001462783, 56.49338862482]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Helmsdale Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.97461055165, 56.491415549569]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Beauly Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9765194271345, 56.490642101448]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Beauly Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9766853989713, 56.489187791588]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balgowan Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9883031792751, 56.492071452526]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Haldane Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9944763039095, 56.48996597681]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Frederick Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9957316906049, 56.48853607887]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Haldane Crescent </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9895857609356, 56.48946472222]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Barns of Claverhouse Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9615828252351, 56.491284610814]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Forbes Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9743108183308, 56.487564660905]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Charlotte Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9954731934561, 56.484033343614]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Glenprosen Terrace </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9897782679008, 56.47860734245]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Craigie Drive </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9162029472297, 56.469649093975]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Balmoral Gardens </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.901115714343, 56.479728796286]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Pentland Avenue </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0020103188142, 56.463621935032]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Dunholm Road </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0458533468165, 56.47228107123]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Earl Street </strong><p>(Public)</p><p><strong>Paper</strong>: n</p><p><strong>Glass</strong>: y</p><p><strong>Plastic</strong>: n</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-3.0141527489568, 56.474881265827]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> 264 Hilltown </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.975603688072, 56.469899744382]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hilltown / Constitution St  </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9742601233706, 56.468508032371]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hilltown / Dudhope St </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9708973283584, 56.465080587177]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> Hilltown Terrace West </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: y</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9740078933516, 56.46568267056]
                                            }
                                        },
                                    {
                                        'type': 'Feature',
                                        'properties': {
                                        'description':
                                        '<strong> South George St / William St </strong><p>(Public)</p><p><strong>Paper</strong>: y</p><p><strong>Glass</strong>: n</p><p><strong>Plastic</strong>: y</p><p><strong>Aluminium cans</strong>: n</p><p><strong>Textiles</strong>: n</p><p><strong>Books/Music</strong>: n</p>'},
                                        'geometry': {
                                            'type': 'Point',
                                            'coordinates': [-2.9655669136391, 56.468012972764]
                                            }
                                        }
                            ]
                        }         
                    });
                    
                    print_r(Array);
                    // Add a layer showing the places.
                    map.addLayer({
                        'id': 'places',
                        'type': 'symbol',
                        'source': 'places',
                        'layout': {
                            'icon-image': 'custom-marker',
                        }
                    });
                }
            );
        });
        // Create a popup, but don't add it to the map yet.
                    const popup = new mapboxgl.Popup({
                        closeButton: false,
                        closeOnClick: true
                    });
                    
                    map.on('click', 'places', (e) => {
                        // Change the cursor style as a UI indicator.
                        map.getCanvas().style.cursor = 'pointer';
                    
                        // Copy coordinates array.
                        const coordinates = e.features[0].geometry.coordinates.slice();
                        const description = e.features[0].properties.description;
                    
                        // Ensure that if the map is zoomed out such that multiple
                        // copies of the feature are visible, the popup appears
                        // over the copy being pointed to.
                        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                        }
                    
                        // Populate the popup and set its coordinates
                        // based on the feature found.
                        popup.setLngLat(coordinates).setHTML(description).addTo(map);
                    });

                    map.on('mouseleave', 'places', () => {
                        map.getCanvas().style.cursor = '';
                    });

                    // Add geolocate control to the map.
                    map.addControl(
                        new mapboxgl.GeolocateControl({
                            positionOptions: {
                                enableHighAccuracy: true
                            },
                            // When active the map will receive updates to the device's location as it changes.
                            trackUserLocation: true,
                            // Draw an arrow next to the location dot to indicate which direction the device is heading.
                            showUserHeading: true
                        })
                    );
        
        
