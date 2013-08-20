drupal\_theme\_components
=======================

Pluggable Drupal theme components and code snippets

## Recommended structure for storing components into this repository:

Basically a component mimics a drupal theme, but contains only files and function
which are required to achieve the functionallity.

As machine name for all filenames, hooks, function etc. we use the compontent name.

* {component_name}/README.md
 * Description of the compontents functionality
* {component_name}/template.php
 * template.php related functions & hooks
* {component_name}/bower.json
 * Definition of required bower packages
* {component_name}/images/...
* {component_name}/js/...
* {component_name}/sass/...
* ... - feel free to add more component related files

### Variants:

A variant is basically a new component, which only contains the distinguished files and functions between itself and the parent component.

* {component_name}.{variant_name}/README.md
 * Description about the difference of this variant
* {component_name}.{variant_name}/...
 * Same structure like a normal component

## Example component:
*Fuzzybear* - The bear can be found in the "fuzzybear" folder.
