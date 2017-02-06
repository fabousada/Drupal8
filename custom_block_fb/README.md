# Create custom block using Plugin 
The annotation document block of the class identifies the type of plugin through @Block. 
 The id is the internal machine name .
 The admin_label is displayed on the block listing page. 
 The category shows up in the block select list.
 For creates the output to be displayed , We need to provide a build method
"build" method call \Drupal\Core\Block\BlockPluginInterface interface.