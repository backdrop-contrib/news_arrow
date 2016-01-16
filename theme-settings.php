<?php
/**
 * @file
 * Theme settings file for Pure CSS.
 *
 */

function news_arrow_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

if (isset($form_id)) {
   return;
  }

$form['news_arrow_dynamic_menu'] = array(
      '#type' => 'checkbox',
      '#title' => t('Use dynamic site main menu.  Uncheck to use a fixed main menu.'),
      '#default_value' => theme_get_setting('news_arrow_dynamic_menu', 'news_arrow'),
    );

$form['news_arrow_cdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<b>Use Cloudflare CDN</b> instead of this website to serve the base CSS and Javascript files.  If you are using SASS, you will have to manually adjust your imports to avoid loading the same styles twice.'),
    '#default_value' => theme_get_setting('news_arrow_cdn', 'news_arrow'),
  );

$form['disclaimer'] = array(
  '#markup' => '<p>' . t('You may choose to include these Javascript files into your page to help enable these certain components.  WARNING: some of the components may rely on multiple scripts, and you are responsible for adding the theme template functions to utilize these functionalities.  If you do not need these functionalities for this website, you may leave each unchecked.') . '</p>',
);

$form['news_arrow_script1'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script modernizr.js'),
      '#default_value' => theme_get_setting('news_arrow_script1', 'news_arrow'),
    );

$form['news_arrow_script2'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script jquery-validate.js'),
      '#default_value' => theme_get_setting('news_arrow_script2', 'news_arrow'),
    );

$form['news_arrow_script3'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script fastclick.js'),
      '#default_value' => theme_get_setting('news_arrow_script3', 'news_arrow'),
    );

$form['news_arrow_script4'] = array(
      '#type' => 'checkbox',
      '#title' => t('Load script hammer.js'),
      '#default_value' => theme_get_setting('news_arrow_script4', 'news_arrow'),
    );

$form['news_arrow_juiced_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('news_arrow_juiced_main_background', 'news_arrow'),
    );

$form['news_arrow_juiced_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('news_arrow_juiced_main_background_blurred', 'news_arrow'),
    );

$form['news_arrow_juiced_big_statement_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the big statement page area when you are using a Juiced layout'),
      '#default_value' => theme_get_setting('news_arrow_juiced_big_statement_background', 'news_arrow'),
    );

$form['news_arrow_juiced_big_statement_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('news_arrow_juiced_big_statement_background_blurred', 'news_arrow'),
    );

$form['news_arrow_body_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the main page area in a core layout.'),
      '#default_value' => theme_get_setting('news_arrow_body_main_background', 'news_arrow'),
    );

$form['news_arrow_body_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('news_arrow_body_main_background_blurred', 'news_arrow'),
    );

$form['news_arrow_footer_main_background'] = array(
      '#type' => 'textarea',
      '#title' => t('Enter the URL to your desired background image for the footer area in a core layout.'),
      '#default_value' => theme_get_setting('news_arrow_footer_main_background', 'news_arrow'),
    );

$form['news_arrow_footer_main_background_blurred'] = array(
      '#type' => 'checkbox',
      '#title' => t('Blur this background'),
      '#default_value' => theme_get_setting('news_arrow_footer_main_background_blurred', 'news_arrow'),
    );

}
