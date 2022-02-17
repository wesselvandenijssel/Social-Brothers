<?php
/**
 * This class is loaded on the back-end since its main job is 
 * to display the Admin to box.
 */

class WSSVSC_Frontend {
	
	public function __construct () {
	
		if(get_option('gmwsvs_enable_setting')=='yes'){
			add_action( 'woocommerce_product_query', array( $this, 'WSSVSC_woocommerce_product_query' ) );
			add_filter( 'posts_clauses', array( $this, 'WSSVSC_posts_clauses' ), 10, 2);
		}
	}

	


	public function WSSVSC_woocommerce_product_query ($q) {

		
		$q->set( 'post_type', array('product','product_variation') );
		$q->set( 'gmwsvsfilter', 'yes' );
		$meta_query = (array) $q->get( 'meta_query' );
		$meta_query[] = array(
								'relation' => 'OR',
								array(
											'key' => '_wssvsc_excludeenalls',
											'value' => 'yes',
											'compare' => '!=',
										),
							);
	/*	$meta_query[] = array(
								'relation' => 'OR',
								array(
											'key' => '_wwsvsc_exclude_product_parent',
											'value' => 'yes',
											'compare' => 'NOT EXISTS'
										),
								array(
											'key' => '_wwsvsc_exclude_product_parent',
											'value' => 'yes',
											'compare' => '!=',
										),
							);*/
		/*echo '<pre>';
		print_r($meta_query);
		echo '</pre>';*/
		$q->set( 'meta_query', $meta_query );
		
        /*$tax_query = (array) $q->get( 'tax_query' );
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'ids',
            'operator' => 'NOT IN',
            'terms'    => array( 25,28 ),
        );
		$q->set( 'tax_query', $tax_query );*/
		return $q;
	}

	public function WSSVSC_posts_clauses ($clauses, $query) {
		global $wpdb;
		if(isset($query->query_vars['gmwsvsfilter']) && $query->query_vars['gmwsvsfilter']=='yes'){
			if(get_option('gmwsvs_hide_parent_product')=='yes'){
				$clauses['where'] .= " AND  0 = (select count(*) as totalpart from {$wpdb->posts} as oc_posttb where oc_posttb.post_parent = {$wpdb->posts}.ID and oc_posttb.post_type= 'product_variation') ";
			}
			$clauses['join'] .= " LEFT JOIN {$wpdb->postmeta} as  oc_posttba ON ({$wpdb->posts}.post_parent = oc_posttba.post_id AND oc_posttba.meta_key = '_wwsvsc_exclude_product_single' )";
			$clauses['where'] .= " AND  ( oc_posttba.meta_value IS NULL OR oc_posttba.meta_value!='yes') ";
				/*echo "<pre>";
			print_r($clauses);
			echo "</pre>";*/
			$gmwsvs_exclude_cat = array();
	    	$gmwsvs_exclude_cat = get_option('gmwsvs_exclude_cat');
	    	if(!empty($gmwsvs_exclude_cat)){
	    		$clauses['where'] .= " AND ( ({$wpdb->posts}.post_type='product_variation' AND {$wpdb->posts}.ID NOT IN ( SELECT object_id FROM {$wpdb->term_relationships} WHERE term_taxonomy_id IN (".implode(",",$gmwsvs_exclude_cat).") )) OR  {$wpdb->posts}.post_type='product') ";
	    	}
			
		}
		
		return $clauses;
	}

	
	
	
}

/*add_filter( 'posts_request', 'dump_request' );

function dump_request( $input ) {

    var_dump($input);

    return $input;
}*/

?>