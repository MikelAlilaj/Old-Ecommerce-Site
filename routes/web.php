                                                                                                                                                                                                     <?php



Route::get('/', function () {return view('pages.index');});
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


     //Admin Section
  //Categories

Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\CategoryController@Deletecategory');
Route::get('edit/category/{id}', 'Admin\Category\CategoryController@Editcategory');
Route::post('update/category/{id}', 'Admin\Category\CategoryController@Updatecategory');

    //Brand
 Route::get('admin/brands', 'Admin\Category\BrandController@brand')->name('brands');
 Route::post('admin/store/brand', 'Admin\Category\BrandController@storebrand')->name('store.brand');
 Route::get('delete/brand/{id}', 'Admin\Category\BrandController@DeleteBrand');
 Route::get('edit/brand/{id}', 'Admin\Category\BrandController@EditBrand');
 Route::post('update/brand/{id}', 'Admin\Category\BrandController@UpdateBrand');

 //Sub Categories
 Route::get('admin/sub/category', 'Admin\Category\SubCategoryController@subcategories')->name('sub.categories');
 Route::post('admin/store/subcat', 'Admin\Category\SubCategoryController@storesubcat')->name('store.subcategory');
 Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@DeleteSubcat');
 Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@EditSubcat');
 Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubcat');

 //Coupons All
Route::get('admin/sub/coupon', 'Admin\Category\CouponController@Coupon')->name('admin.coupon');
Route::post('admin/store/coupon', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\Category\CouponController@DeleteCoupon');
Route::get('edit/coupon/{id}', 'Admin\Category\CouponController@EditCoupon');
Route::post('update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');

//Neslater
Route::get('admin/newslater', 'Admin\Category\NewslaterController@Newslater')->name('admin.newslater');
Route::get('delete/sub/{id}', 'Admin\Category\NewslaterController@DeleteSub');

//Frontend All Routes
 Route::post('store/newslater', 'Frontcontroller@StoreNewslater')->name('store.newslater');



















