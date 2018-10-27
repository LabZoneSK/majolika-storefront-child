<?php
class FeaturedProducts
{
    public function getFeatured($productsCount = 3)
    {
        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
        $ordering = WC()->query->get_catalog_ordering_args();
        $ordering['orderby'] = array_shift(explode(' ', $ordering['orderby']));
        $ordering['orderby'] = stristr($ordering['orderby'], 'price') ? 'meta_value_num' : $ordering['orderby'];
        $products_per_page = $productsCount;
        $featured_products = wc_get_products(array(
            'meta_key' => '_price',
            'status' => 'publish',
            'limit' => $products_per_page,
            'page' => $paged,
            'featured' => true,
            'paginate' => true,
            'return' => 'ids',
            'orderby' => $ordering['orderby'],
            'order' => $ordering['order'],
        ));
        wc_set_loop_prop('current_page', $paged);
        wc_set_loop_prop('is_paginated', wc_string_to_bool(true));
        wc_set_loop_prop('page_template', get_page_template_slug());
        wc_set_loop_prop('per_page', $products_per_page);
        wc_set_loop_prop('total', $featured_products->total);
        wc_set_loop_prop('total_pages', $featured_products->max_num_pages);
        if ($featured_products) {
            $products_array = [];
            foreach ($featured_products->products as $featured_product) {
                $product = wc_get_product($featured_product);
                if ($product) {
                    $products_array[] = $product;
                } else {
                    return false;
                }
            }
            return $products_array;
        } else {
            return false;
        }
    }
}
