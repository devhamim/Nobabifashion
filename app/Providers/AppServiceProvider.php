<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\markatingsetting;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use View;
use Cookie;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Paginator::useBootstrap();
        // footer category
    View::composer('frontend.layouts.header', function ($view){
        $view->with('categorys', Category::where('status', 1)->get());

        if (Cookie::has('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        } else {
            $cart_data = [];
        }

        // Pass $cart_data to the view
        $view->with('totalItemsInCart', count($cart_data));
    });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        View::composer('frontend.layouts.header', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        View::composer('frontend.product_details', function ($view){
            $view->with('setting', Setting::all());
        });
        // product_details
        View::composer('frontend.product_details', function ($view){
            $view->with('setting', Setting::all());
        });
        // product_details
        View::composer('frontend.product_details', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // frontend header category
        View::composer('frontend.category', function ($view){
            $view->with('categorys', Category::where('status', 1)->get());
        });
        // frontend app category
        View::composer('frontend.layouts.app', function ($view){
            $view->with('categorys', Category::where('status', 1)->get());
        });
        // frontend footer
        View::composer('frontend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });

        // backend footer
        View::composer('backend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend sidebar
        View::composer('backend.layouts.sidebar', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend app
        View::composer('backend.order.multi_view_invoice_print', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend multi print
        View::composer('backend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth app
        View::composer('auth.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth login
        View::composer('auth.login', function ($view){
            $view->with('setting', Setting::all());
        });

        // landing page
        View::composer('landingpage.secondpage', function ($view){
            $view->with('setting', Setting::all());
        });

        // landing page
        View::composer('landingpage.secondpage', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });

        // sharee landing page
        View::composer('landingpage.index', function ($view){
            $view->with('setting', Setting::all());
        });

        // sharee landing page
        View::composer('landingpage.index', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });

        // sharee landing page
        View::composer('landingpage.threepage', function ($view){
            $view->with('setting', Setting::all());
        });

        // sharee landing page
        View::composer('landingpage.threepage', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });

        // foreth landing page
        View::composer('landingpage.foreth', function ($view){
            $view->with('setting', Setting::all());
        });
        // forth landing page
        View::composer('landingpage.foreth', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // five landing page
        View::composer('landingpage.five', function ($view){
            $view->with('setting', Setting::all());
        });
        // five landing page
        View::composer('landingpage.five', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // six landing page
        View::composer('landingpage.six', function ($view){
            $view->with('setting', Setting::all());
        });
        // six landing page
        View::composer('landingpage.six', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // saven landing page
        View::composer('landingpage.saven', function ($view){
            $view->with('setting', Setting::all());
        });
        // saven landing page
        View::composer('landingpage.saven', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // eight landing page
        View::composer('landingpage.eight', function ($view){
            $view->with('setting', Setting::all());
        });
        // eight landing page
        View::composer('landingpage.eight', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // nine landing page
        View::composer('landingpage.nine', function ($view){
            $view->with('setting', Setting::all());
        });
        // nine landing page
        View::composer('landingpage.nine', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // ten landing page
        View::composer('landingpage.ten', function ($view){
            $view->with('setting', Setting::all());
        });
        // ten landing page
        View::composer('landingpage.ten', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // eleven landing page
        View::composer('landingpage.eleven', function ($view){
            $view->with('setting', Setting::all());
        });
        // eleven landing page
        View::composer('landingpage.eleven', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // twelve landing page
        View::composer('landingpage.twelve', function ($view){
            $view->with('setting', Setting::all());
        });
        // twelve landing page
        View::composer('landingpage.twelve', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // twelve landing page
        View::composer('landingpage.thirty', function ($view){
            $view->with('setting', Setting::all());
        });
        // twelve landing page
        View::composer('landingpage.thirty', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });
        // fourty landing page
        View::composer('landingpage.fourty', function ($view){
            $view->with('setting', Setting::all());
        });
        // fourty landing page
        View::composer('landingpage.fourty', function ($view){
            $view->with('markatingsetting', markatingsetting::all());
        });

    }
}
