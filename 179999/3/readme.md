#### GeoJSON Format

```
{
    "type": "FeatureCollection",
    "features": [
        {
            "type": "Feature",
            "properties": {
                "popupContent": "This is a F-Cycle Station. Come pick up a bike and pay by the hour. What a deal!",
                "style": {
                    radius: 30
                }
            },
            "geometry": {
                "type": "Point",
                "coordinates": [-104.9913392,
                    39.7432392
                ]
            },
            "id": 58
        },
        {
            "type": "Feature",
            "properties": {
                "popupContent": "This is a free bus line that will take you across downtown.",
                "underConstruction": false,
                "style": {
                    radius: 30
                }
            },
            "geometry": {
                "type": "LineString",
                "coordinates": [
                    [-105.00341892242432, 39.75383843460583],
                    [-105.0008225440979, 39.751891803969535]
                ]
            },
            "id": 1
        },
        {
            "type": "Feature",
            "properties": {
                "popupContent": "This is the Auraria West Campus",
                "style": {
                    weight: 2,
                    color: "#999",
                    opacity: 1,
                    fillColor: "#B0DE5C",
                    fillOpacity: 0.8
                }
            },
            "geometry": {
                "type": "MultiPolygon",
                "coordinates": [
                    [
                        [
                            [-105.00432014465332, 39.74732195489861],
                            [-105.00715255737305, 39.74620006835170],
                            [-105.00921249389647, 39.74468219277038],
                            [-105.00432014465332, 39.74732195489861]
                        ],
                        [
                            [-105.00361204147337, 39.74354376414072],
                            [-105.00301122665405, 39.74278480127163],
                            [-105.00361204147337, 39.74354376414072]
                        ]
                    ],
                    [
                        [
                            [-105.00942707061768, 39.73989736613708],
                            [-105.00942707061768, 39.73910536278566],
                            [-105.00685214996338, 39.73923736397631],
                            [-105.00384807586671, 39.73910536278566],
                            [-105.00942707061768, 39.73989736613708]
                        ]
                    ]
                ]
            }
        }
    ]
}
```
