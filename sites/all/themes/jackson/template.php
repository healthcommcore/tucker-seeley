<?php

/**
 * Set count variables so column numbers can be dynamic.
 */
function jackson_preprocess_page (&$vars) {
  $vars['preface'] = count(array_filter(array($vars['page']['preface_one'], $vars['page']['preface_two'], $vars['page']['preface_three'])));
  $vars['bottom'] = count(array_filter(array($vars['page']['bottom_one'], $vars['page']['bottom_two'], $vars['page']['bottom_three'], $vars['page']['bottom_four'])));

	// Add meta description and keywords manually because the homepage has 
	// no content nodes
	if(drupal_is_front_page()){
		$home_meta_descr = array(
			'#tag' => 'meta',
			'#attributes' => array(
				'name' => 'description',
				'content' => 'The Tucker-Seeley Research Lab is committed to researching socioeconomic disparities in health with a specific focus on outcomes across the cancer continuum.'),
			);
		$home_meta_keys = array(
			'#tag' => 'meta',
			'#attributes' => array(
				'name' => 'keywords',
				'content' => ''),
			);
		drupal_add_html_head($home_meta_descr, 'meta_description');
		drupal_add_html_head($home_meta_keys, 'meta_keywords');
	}

}

/*
function jackson_html_head_alter(&$head_elements){
	if(drupal_is_front_page()){
		$head_elements['name'] = array(
			'description' =>
			'Dana-Farber Cancer Institute and Harvard Medical School\'s Zhang Lab studies the molecular pathogenesis of diffused large B cell lymphoma and EBV-associated B cell lymphoma to identify the surveillance mechanism of the immune system on tumors and develop strategies to harness immune cells for tumor therapy.',
			'keywords' => 'zhang lab, zhang laboratory, baochun zhang, dfci zhang lab, baochun zhang, harvard research lab, harvard molecular pathogenesis, dfci tumor therapy research, dfci immune system and tumor cells, harvard tumor and immune cell research'
		);
	}
}
 */

