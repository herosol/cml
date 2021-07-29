<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'index';
$route['404_override'] = 'page/error';
$route['translate_uri_dashes'] = TRUE;

$route['admin/login'] = 'admin/index/login';
$route['admin/logout'] = 'admin/index/logout';

$route['home'] = 'index';
$route['about-us'] = 'page/about';
$route['trade'] = 'page/trade';
$route['brands'] = 'page/brands';
$route['faq'] = 'page/faq';
$route['contact-us'] = 'page/contact';
$route['purchase'] = 'page/purchase';
$route['order_success/(:any)'] = 'page/order_success/$1';
$route['cart'] = 'cart/index';
$route['cart/add_item'] = 'cart/add_item';



$route['terms-and-conditions'] = 'page/terms_conditions';
$route['return-policy'] = 'page/return_policy';
$route['privacy-policy'] = 'page/privacy_policy';

$route['where-to-buy'] = 'page/where_to_buy';
$route['customer-service'] = 'page/customer_service';
$route['returns'] = 'page/returns';
$route['refund'] = 'page/refund';

$route['payment-policy'] = 'page/payment_policy';
$route['refund-policy'] = 'page/refund_policy';

$route['vacancies'] = 'page/vacancies';
$route['cookie-policy'] = 'page/cookie_policy';

// $route['our-story'] = 'page/our_story';
/*** start blog ***/
$route['recipes/(:num)'] = 'recipes/index/$1';
$route['recipe-detail/(:num)/(:any)'] = 'recipes/detail/$1/$2';
/*** end blog ***/

$route['newsletter'] = 'ajax/newsletter';
$route['products/(:any)'] = 'products/index/$1';
$route['products/(:any)/(:num)'] = 'products/index/$1/$2';
$route['product-detail/(:num)/(:any)'] = 'products/detail/$1/$2';

$route['login'] = 'index/login';
$route['logout'] = 'index/logout';
$route['forgot-password'] = 'index/forgot';
$route['verification/(:any)'] = 'index/verification/$1';
$route['reset/(:any)'] = 'index/reset/$1';
$route['reset-password'] = 'index/reset_password';
$route['signup'] = 'index/register';
$route['referral-signup/(:any)'] = 'index/register/$1';

$route['pay-now'] = 'Checkout/pay_now';
$route['order-success/(:any)'] = 'Checkout/success/$1';
$route['order-cancel/(:any)'] = 'Checkout/cancel/$1';

$route['upload-attachment'] = 'uploader/save_attachment';
$route['save-profile-image'] = 'uploader/save_profile_image';
$route['save-mul-images'] = 'uploader/save_mul_images';

$route['change-email'] = 'account/change_email';
$route['email-verification'] = 'account/email_verification';
$route['resend-email'] = 'account/resend_email';
$route['phone-verification'] = 'account/phone_verification';
$route['verify-phone'] = 'account/verify_phone';
$route['verify-phone-code'] = 'account/verify_phone_code';
$route['change-phone'] = 'account/change_phone';

$route['account'] = 'account/index';
$route['my-information'] = 'account/my_information';

$route['change-dob'] = 'account/change_dob';

$route['change-password'] = 'account/change_pswd';
$route['invite-friend'] = 'account/invite_friend';

$route['transactions'] = 'payment_methods/transactions';
$route['transaction-detail'] = 'payment_methods/transaction_detail';
$route['withdraw'] = 'payment_methods/withdraw';
/*** end payments ***/

$route['redeem-promocode'] = 'cart/redeem_code';

$route['leave-review'] = 'bookings/complete_booking';
$route['review-box'] = 'bookings/review_box';

$route['favorite'] = 'common/favorite';
$route['favorites'] = 'account/favorites';
$route['rate'] = 'common/rate';
$route['subscribe'] = 'common/subscribe';

$route['notifications/(:num)'] = 'notifications/index/$1';
$route['notifications/(:num)/(:any)'] = 'notifications/index/$1/$2';
$route['open-notifications'] = 'notifications/mark_seen_noti';
$route['notification-settings'] = 'notifications/settings';

$route['save-change-dp'] = 'ajax/save_change_dp';
$route['remove-image'] = 'ajax/remove_image';

$route['profile/(:any)/(:any)'] = 'index/profile/$1/$2';
$route['profile'] = 'account/profile';
$route['report-profile/(:any)'] = 'ajax/report_profile/$1';

/*** start paypal ***/
$route['pay-now/(:num)'] = 'paypal/pay_now/$1';
$route['success/(:any)'] = 'paypal/success/$1';
$route['cancel/(:any)'] = 'paypal/cancel/$1';
$route['order-notify'] = 'paypal/order_notify';
// $route['booking-notify'] = 'paypal/booking_notify';
$route['paypal/(:any)'] =  'Page/paypal/$1';
/*** end paypal ***/
