<?php
class PluginVrAframe_0_9_2{
  function __construct() {
    wfPlugin::includeonce('wf/yml');
    wfPlugin::includeonce('wf/array');
  }
  public function widget_include(){
    $element = array();
    wfPlugin::enable('include/js');
    $element[] = wfDocument::createWidget('include/js', 'include', array('src' => '/plugin/vr/aframe_0_9_2/aframe.min.js'));    
    wfDocument::renderElement($element);
  }
  public function widget_scene($data){
    $data = new PluginWfArray($data);
    if($data->get('data')){
      $data->set('data', $data->get('data'));
    }else{
      $default = new PluginWfYml(__DIR__."/scene/scene_default.yml");
      $data->set('data', $default->get());
    }
    $element = new PluginWfYml(__DIR__."/scene/scene.yml");
    $element->setByTag(array('element' => $data->get('data')));
    wfDocument::renderElement($element->get());
  }
  public function widget_360_image($data){
    $data = new PluginWfArray($data);
    $default = new PluginWfYml(__DIR__."/scene/360_image_default.yml");
    if($data->get('data')){
      $data->set('data', array_merge($default->get(), $data->get('data')));
    }else{
      $data->set('data', $default->get(), $data->get('data'));
    }
    $element = new PluginWfYml(__DIR__."/scene/360_image.yml");
    $element->setByTag($data->get('data'));
    wfDocument::renderElement($element->get());
  }
}
