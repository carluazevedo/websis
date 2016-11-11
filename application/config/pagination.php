<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Customizing the Pagination
| -------------------------------------------------------------------
*/
$config['base_url'] = site_url('/registroponto/index');
$config['total_rows'] = '';
$config['per_page'] = 10;
$config['uri_segment'] = 3;
$config['num_links'] = 3;
#$config['use_page_numbers'] = true;
#$config['enable_query_strings'] = true;
#$config['page_query_string'] = true;
#$config['query_string_segment'] = 'page';
#$config['reuse_query_string'] = false;
#$config['prefix'] = '';
#$config['suffix'] = '';
#$config['use_global_url_suffix'] = false;

/*
| -------------------------------------------------------------------
| Adding Enclosing Markup
| -------------------------------------------------------------------
*/
$config['full_tag_open'] = '<div class="pagination"><ul>';
$config['full_tag_close'] = '</ul></div><!--pagination-->';

/*
| -------------------------------------------------------------------
| Customizing the First Link
| -------------------------------------------------------------------
*/
$config['first_link'] = '&laquo; First';
$config['first_tag_open'] = '<li class="prev page">';
$config['first_tag_close'] = '</li>';
$config['first_url'] = '';

/*
| -------------------------------------------------------------------
| Customizing the Last Link
| -------------------------------------------------------------------
*/
$config['last_link'] = 'Last &raquo;';
$config['last_tag_open'] = '<li class="next page">';
$config['last_tag_close'] = '</li>';

/*
| -------------------------------------------------------------------
| Customizing the "Next" Link
| -------------------------------------------------------------------
*/
$config['next_link'] = 'Next &rarr;';
$config['next_tag_open'] = '<li class="next page">';
$config['next_tag_close'] = '</li>';

/*
| -------------------------------------------------------------------
| Customizing the "Previous" Link
| -------------------------------------------------------------------
*/
$config['prev_link'] = '&larr; Previous';
$config['prev_tag_open'] = '<li class="prev page">';
$config['prev_tag_close'] = '</li>';

/*
| -------------------------------------------------------------------
| Customizing the "Current Page" Link
| -------------------------------------------------------------------
*/
$config['cur_tag_open'] = '<li class="active"><a href="">';
$config['cur_tag_close'] = '</a></li>';

/*
| -------------------------------------------------------------------
| Customizing the "Digit" Link
| -------------------------------------------------------------------
*/
$config['num_tag_open'] = '<li class="page">';
$config['num_tag_close'] = '</li>';

/*
| -------------------------------------------------------------------
| Hiding the Pages
| -------------------------------------------------------------------
*/
#$config['display_pages'] = false;

/*
| -------------------------------------------------------------------
| Adding attributes to anchors
| -------------------------------------------------------------------
*/
$config['attributes'] = array('class' => 'follow_link');

/*
| -------------------------------------------------------------------
| Disabling the "rel" attribute
| -------------------------------------------------------------------
*/
#$config['attributes']['rel'] = false;
