# Buto-Plugin-VrAframe_0_9_2
Creating VR in browser is nowadays very easy.

## Settings
Include inside head.
```
type: widget
data:
  plugin: vr/aframe_0_9_2
  method: include
```

## Widget

### Scene
A scene to play around with.
```
type: widget
data:
  plugin: vr/aframe_0_9_2
  method: scene
  data:
    -
      type: 'a-box'
      attribute:
        position: '-1 0.5 -3'
        rotation: '0 45 0'
        color: '#4CC3D9'
    -
      type: a-sphere
      attribute:
        position: '0 1.25 -5'
        radius: '1.25'
        color: '#EF2D5E'
    -
      type: a-cylinder
      attribute:
        position: '1 0.75 -3'
        radius: '0.5'
        height: '1.5'
        color: '#FFC65D'
    -
      type: a-plane
      attribute:
        position: '0 0 -4'
        rotation: '-90 0 0'
        width: '4'
        height: '4'
        color: '#7BC8A4'
    -
      type: a-sky
      attribute:
        color: '#ECECEC'
    -
      type: a-assets
      innerHTML:
        -
          type: img
          attribute:
            id: my-image
            src: /plugin/vr/aframe_0_9_2/img/panorama.JPG
    -
      type: a-image
      attribute:
        src: '#my-image'
        width: 6
        height: 2
        position: '-0.5 1.5 -4'
        rotation: '0 -10 0'
```



### 360 image
A panorama widget with optional title.
```
plugin: vr/aframe_0_9_2
method: 360_image
data:
  src: /plugin/vr/aframe_0_9_2/img/panorama.JPG
  height: 300px
  width: 600px
  rotation: '0 0 0'
  text_value: Title
  text_position: '-0.8 1.45 -1.5'
  text_width: '8'
  text_rotation: '0 0 0'
  text_font: kelsonsans
```
