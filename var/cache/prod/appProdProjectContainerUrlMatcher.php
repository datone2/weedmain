<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/a')) {
            // agent
            if (0 === strpos($pathinfo, '/agent') && preg_match('#^/agent/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agent')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\AgentController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/amenities')) {
                // amenity
                if ('/amenities' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\AmenityController::indexAction',  '_route' => 'amenity',);
                }

                // amenity_detail
                if (preg_match('#^/amenities/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'amenity_detail')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\AmenityController::detailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/account')) {
                if (0 === strpos($pathinfo, '/account/favorites')) {
                    // favorite
                    if ('/account/favorites' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\FavoriteController::indexAction',  '_route' => 'favorite',);
                    }

                    // favorite_remove
                    if (0 === strpos($pathinfo, '/account/favorites/delete') && preg_match('#^/account/favorites/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_remove')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\FavoriteController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/account/listings')) {
                    // listing_my
                    if ('/account/listings' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::myAction',  '_route' => 'listing_my',);
                    }

                    if (0 === strpos($pathinfo, '/account/listings/u')) {
                        // listing_update
                        if (0 === strpos($pathinfo, '/account/listings/update') && preg_match('#^/account/listings/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_update')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::updateAction',));
                        }

                        // listing_unpublish
                        if (0 === strpos($pathinfo, '/account/listings/unpublish') && preg_match('#^/account/listings/unpublish/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_unpublish')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::unpublishAction',));
                        }

                        // listing_unfeature
                        if (0 === strpos($pathinfo, '/account/listings/unfeature') && preg_match('#^/account/listings/unfeature/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_unfeature')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::unfeatureAction',));
                        }

                    }

                    // listing_create
                    if ('/account/listings/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::createAction',  '_route' => 'listing_create',);
                    }

                    // listing_delete
                    if (0 === strpos($pathinfo, '/account/listings/delete') && preg_match('#^/account/listings/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_delete')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::deleteAction',));
                    }

                    // listing_publish
                    if (0 === strpos($pathinfo, '/account/listings/publish') && preg_match('#^/account/listings/publish/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_publish')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::publishAction',));
                    }

                    // listing_feature
                    if (0 === strpos($pathinfo, '/account/listings/feature') && preg_match('#^/account/listings/feature/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_feature')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::featureAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/accounts')) {
                    // order
                    if ('/accounts/orders' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::ordersAction',  '_route' => 'order',);
                    }

                    // order_paypal_completed
                    if ('/accounts/order/paypal/completed' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::orderPaypalCompletedAction',  '_route' => 'order_paypal_completed',);
                    }

                    // invoice
                    if (0 === strpos($pathinfo, '/accounts/invoice') && preg_match('#^/accounts/invoice/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoice')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::invoiceAction',));
                    }

                    // checkout
                    if ('/accounts/checkout' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\OrderController::checkoutAction',  '_route' => 'checkout',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/account/products')) {
                    // product_my
                    if ('/account/products' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ProductController::myAction',  '_route' => 'product_my',);
                    }

                    // product_create
                    if ('/account/products/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ProductController::createAction',  '_route' => 'product_create',);
                    }

                    // product_update
                    if (0 === strpos($pathinfo, '/account/products/update') && preg_match('#^/account/products/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_update')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ProductController::updateAction',));
                    }

                    // product_delete
                    if (0 === strpos($pathinfo, '/account/products/delete') && preg_match('#^/account/products/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ProductController::deleteAction',));
                    }

                }

                // profile_update
                if ('/account/profile' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ProfileController::updateGeneralAction',  '_route' => 'profile_update',);
                }

                if (0 === strpos($pathinfo, '/account/searches')) {
                    // search
                    if ('/account/searches' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SearchController::indexAction',  '_route' => 'search',);
                    }

                    // search_create
                    if (0 === strpos($pathinfo, '/account/searches/create') && preg_match('#^/account/searches/create/(?P<entity>\\w+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_create')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SearchController::createAction',));
                    }

                    // search_delete
                    if (0 === strpos($pathinfo, '/account/searches/delete') && preg_match('#^/account/searches/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'search_delete')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SearchController::deleteAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/amenities')) {
                    // admin_amenity
                    if ('/admin/amenities' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::indexAction',  '_route' => 'admin_amenity',);
                    }

                    // admin_amenity_delete
                    if (0 === strpos($pathinfo, '/admin/amenities/delete') && preg_match('#^/admin/amenities/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_amenity_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::deleteAction',));
                    }

                    // admin_amenity_update
                    if (0 === strpos($pathinfo, '/admin/amenities/update') && preg_match('#^/admin/amenities/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_amenity_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::updateAction',));
                    }

                    // admin_amenity_create
                    if ('/admin/amenities/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\AmenityController::createAction',  '_route' => 'admin_amenity_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/categories')) {
                    // admin_category_export
                    if ('/admin/categories/export' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::exportAction',  '_route' => 'admin_category_export',);
                    }

                    // admin_category
                    if ('/admin/categories' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category',);
                    }

                    // admin_category_delete
                    if (0 === strpos($pathinfo, '/admin/categories/delete') && preg_match('#^/admin/categories/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::deleteAction',));
                    }

                    // admin_category_update
                    if (0 === strpos($pathinfo, '/admin/categories/update') && preg_match('#^/admin/categories/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::updateAction',));
                    }

                    // admin_category_create
                    if ('/admin/categories/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/claims')) {
                    // admin_claim
                    if ('/admin/claims' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ClaimController::indexAction',  '_route' => 'admin_claim',);
                    }

                    // admin_claim_approve
                    if (0 === strpos($pathinfo, '/admin/claims/approve') && preg_match('#^/admin/claims/approve/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_claim_approve')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ClaimController::approveAction',));
                    }

                }

                // admin_dashboard
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_dashboard');
                    }

                    return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\DashboardController::indexAction',  '_route' => 'admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/inquires')) {
                    // admin_inquire
                    if ('/admin/inquires' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::indexAction',  '_route' => 'admin_inquire',);
                    }

                    // admin_inquire_delete
                    if (0 === strpos($pathinfo, '/admin/inquires/delete') && preg_match('#^/admin/inquires/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inquire_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::deleteAction',));
                    }

                    // admin_inquire_update
                    if (0 === strpos($pathinfo, '/admin/inquires/update') && preg_match('#^/admin/inquires/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inquire_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::updateAction',));
                    }

                    // admin_inquire_create
                    if ('/admin/inquires/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\InquireController::createAction',  '_route' => 'admin_inquire_create',);
                    }

                }

                // app_category_import
                if (0 === strpos($pathinfo, '/admin/import-csv') && preg_match('#^/admin/import\\-csv(?:/(?P<csv_filename>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_category_import')), array (  'csv_filename' => 0,  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UploadController::importCsvAction',));
                }

                if (0 === strpos($pathinfo, '/admin/l')) {
                    if (0 === strpos($pathinfo, '/admin/listings')) {
                        // admin_listing
                        if ('/admin/listings' === $pathinfo) {
                            return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::indexAction',  '_route' => 'admin_listing',);
                        }

                        // admin_listing_create
                        if ('/admin/listings/create' === $pathinfo) {
                            return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::createAction',  '_route' => 'admin_listing_create',);
                        }

                        // admin_listing_delete
                        if (0 === strpos($pathinfo, '/admin/listings/delete') && preg_match('#^/admin/listings/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_listing_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::deleteAction',));
                        }

                        // admin_listing_update
                        if (0 === strpos($pathinfo, '/admin/listings/update') && preg_match('#^/admin/listings/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_listing_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ListingController::updateAction',));
                        }

                    }

                    // app_category_list_csv
                    if ('/admin/list-csv' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UploadController::listCsvAction',  '_route' => 'app_category_list_csv',);
                    }

                    if (0 === strpos($pathinfo, '/admin/locations')) {
                        // admin_location
                        if ('/admin/locations' === $pathinfo) {
                            return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::indexAction',  '_route' => 'admin_location',);
                        }

                        // admin_location_delete
                        if (0 === strpos($pathinfo, '/admin/locations/delete') && preg_match('#^/admin/locations/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_location_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::deleteAction',));
                        }

                        // admin_location_update
                        if (0 === strpos($pathinfo, '/admin/locations/update') && preg_match('#^/admin/locations/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_location_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::updateAction',));
                        }

                        // admin_location_create
                        if ('/admin/locations/create' === $pathinfo) {
                            return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\LocationController::createAction',  '_route' => 'admin_location_create',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/orders')) {
                    // admin_order
                    if ('/admin/orders' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\OrderController::indexAction',  '_route' => 'admin_order',);
                    }

                    // admin_order_complete
                    if (0 === strpos($pathinfo, '/admin/orders/complete') && preg_match('#^/admin/orders/complete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_complete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\OrderController::completeAction',));
                    }

                    // admin_order_cancel
                    if (0 === strpos($pathinfo, '/admin/orders/cancel') && preg_match('#^/admin/orders/cancel/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_order_cancel')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\OrderController::cancelAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/posts')) {
                    // admin_post
                    if ('/admin/posts' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::indexAction',  '_route' => 'admin_post',);
                    }

                    // admin_post_create
                    if ('/admin/posts/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::createAction',  '_route' => 'admin_post_create',);
                    }

                    // admin_post_delete
                    if (0 === strpos($pathinfo, '/admin/posts/delete') && preg_match('#^/admin/posts/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::deleteAction',));
                    }

                    // admin_post_update
                    if (0 === strpos($pathinfo, '/admin/posts/update') && preg_match('#^/admin/posts/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\PostController::updateAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/products')) {
                    // admin_product
                    if ('/admin/products' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ProductController::indexAction',  '_route' => 'admin_product',);
                    }

                    // admin_product_create
                    if ('/admin/products/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ProductController::createAction',  '_route' => 'admin_product_create',);
                    }

                    // admin_product_update
                    if (0 === strpos($pathinfo, '/admin/products/update') && preg_match('#^/admin/products/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ProductController::updateAction',));
                    }

                    // admin_product_delete
                    if (0 === strpos($pathinfo, '/admin/products/delete') && preg_match('#^/admin/products/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ProductController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/reports')) {
                    // admin_report
                    if ('/admin/reports' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReportController::indexAction',  '_route' => 'admin_report',);
                    }

                    // admin_report_approve
                    if (0 === strpos($pathinfo, '/admin/reports/approve') && preg_match('#^/admin/reports/approve/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_report_approve')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReportController::approveAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/reviews')) {
                    // admin_review
                    if ('/admin/reviews' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::indexAction',  '_route' => 'admin_review',);
                    }

                    // admin_review_publish
                    if (0 === strpos($pathinfo, '/admin/reviews/publish') && preg_match('#^/admin/reviews/publish/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_review_publish')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::publishAction',));
                    }

                    // admin_review_create
                    if ('/admin/reviews/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::createAction',  '_route' => 'admin_review_create',);
                    }

                    // admin_review_delete
                    if (0 === strpos($pathinfo, '/admin/reviews/delete') && preg_match('#^/admin/reviews/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_review_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::deleteAction',));
                    }

                    // admin_review_update
                    if (0 === strpos($pathinfo, '/admin/reviews/update') && preg_match('#^/admin/reviews/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_review_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\ReviewController::updateAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/subscribers')) {
                    // admin_subscriber
                    if ('/admin/subscribers' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::indexAction',  '_route' => 'admin_subscriber',);
                    }

                    // admin_subscriber_delete
                    if (0 === strpos($pathinfo, '/admin/subscribers/delete') && preg_match('#^/admin/subscribers/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subscriber_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::deleteAction',));
                    }

                    // admin_subscriber_update
                    if (0 === strpos($pathinfo, '/admin/subscribers/update') && preg_match('#^/admin/subscribers/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subscriber_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::updateAction',));
                    }

                    // admin_subscriber_create
                    if ('/admin/subscribers/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\SubscriberController::createAction',  '_route' => 'admin_subscriber_create',);
                    }

                }

                // app_category_upload
                if ('/admin/upload' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UploadController::uploadAction',  '_route' => 'app_category_upload',);
                }

                if (0 === strpos($pathinfo, '/admin/users')) {
                    // admin_user
                    if ('/admin/users' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
                    }

                    // admin_user_create
                    if ('/admin/users/create' === $pathinfo) {
                        return array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                    }

                    // admin_user_delete
                    if (0 === strpos($pathinfo, '/admin/users/delete') && preg_match('#^/admin/users/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::deleteAction',));
                    }

                    // admin_user_update
                    if (0 === strpos($pathinfo, '/admin/users/update') && preg_match('#^/admin/users/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'DirectoryPlatform\\AdminBundle\\Controller\\UserController::updateAction',));
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cart')) {
                // cart
                if ('/cart' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CartController::indexAction',  '_route' => 'cart',);
                }

                // cart_delete
                if (0 === strpos($pathinfo, '/cart/delete') && preg_match('#^/cart/delete/(?P<type>\\w+)/(?P<listing_id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cart_delete')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CartController::deleteAction',));
                }

                // cart_empty
                if ('/cart/empty' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CartController::emptyAction',  '_route' => 'cart_empty',);
                }

            }

            elseif (0 === strpos($pathinfo, '/categories')) {
                // category
                if ('/categories' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }

                // category_detail
                if (preg_match('#^/categories/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_detail')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\CategoryController::detailAction',));
                }

            }

            // claim_create
            if (0 === strpos($pathinfo, '/claims/create') && preg_match('#^/claims/create/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'claim_create')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ClaimController::createAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // favorite_add
        if (0 === strpos($pathinfo, '/favorites/add') && preg_match('#^/favorites/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_add')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\FavoriteController::addAction',));
        }

        // inquire
        if (0 === strpos($pathinfo, '/inquire') && preg_match('#^/inquire/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'inquire')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\InquireController::inquireAction',));
        }

        if (0 === strpos($pathinfo, '/listings')) {
            // listing
            if ('/listings' === $pathinfo) {
                return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::indexAction',  '_route' => 'listing',);
            }

            // listing_detail
            if (preg_match('#^/listings/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listing_detail')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ListingController::detailAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/locations')) {
                // location
                if ('/locations' === $pathinfo) {
                    return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\LocationController::indexAction',  '_route' => 'location',);
                }

                // location_detail
                if (preg_match('#^/locations/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_detail')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\LocationController::detailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/blog')) {
            // post
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
            }

            // post_detail
            if (preg_match('#^/blog/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_detail')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\PostController::detailAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            // report_create
            if (0 === strpos($pathinfo, '/reports/create') && preg_match('#^/reports/create/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_create')), array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\ReportController::createAction',));
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // subscriber_subscribe
        if ('/subscriber/subscribe' === $pathinfo) {
            return array (  '_controller' => 'DirectoryPlatform\\FrontBundle\\Controller\\SubscriberController::subscribeAction',  '_route' => 'subscriber_subscribe',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/payment')) {
            if (0 === strpos($pathinfo, '/payment/capture')) {
                // payum_capture_do_session
                if ('/payment/capture/session-token' === $pathinfo) {
                    return array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction',  '_route' => 'payum_capture_do_session',);
                }

                // payum_capture_do
                if (preg_match('#^/payment/capture/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_capture_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction',));
                }

            }

            // payum_cancel_do
            if (0 === strpos($pathinfo, '/payment/cancel') && preg_match('#^/payment/cancel/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_cancel_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CancelController::doAction',));
            }

            // payum_authorize_do
            if (0 === strpos($pathinfo, '/payment/authorize') && preg_match('#^/payment/authorize/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_authorize_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction',));
            }

            if (0 === strpos($pathinfo, '/payment/notify')) {
                // payum_notify_do_unsafe
                if (0 === strpos($pathinfo, '/payment/notify/unsafe') && preg_match('#^/payment/notify/unsafe/(?P<gateway>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do_unsafe')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction',));
                }

                // payum_notify_do
                if (preg_match('#^/payment/notify/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_notify_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction',));
                }

            }

            // payum_payout_do
            if (0 === strpos($pathinfo, '/payment/payout') && preg_match('#^/payment/payout/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_payout_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\PayoutController::doAction',));
            }

            // payum_refund_do
            if (0 === strpos($pathinfo, '/payment/refund') && preg_match('#^/payment/refund/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_refund_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\RefundController::doAction',));
            }

            // payum_sync_do
            if (0 === strpos($pathinfo, '/payment/sync') && preg_match('#^/payment/sync/(?P<payum_token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payum_sync_do')), array (  '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\SyncController::doAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
