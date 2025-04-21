<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Customer;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\CategoryController;


 
Auth::routes();

/* GUEST USER */

// Route::get('', function () {
//     return view('welcome2');
// });


Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/shop', [GuestController::class, 'shop'])->name('shop');
Route::get('/product/{id}',  [GuestController::class, 'view'])->name('product.show');
Route::get('/aboutus',  [GuestController::class, 'aboutus'])->name('aboutus');
Route::get('/galery',  [GuestController::class, 'galeri'])->name('galeri');


// Route::post('/add-to-cart-single', [Customer::class, 'addToCartSingle'])->name('addToCartSingle');

   
/* NORMAL USER */



Route::middleware(['auth', 'user-access:user'])->group(function () {
    
    Route::post('/add-to-cart', [Customer::class, 'addToCart'])->name('addToCart');
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/cart',  [Customer::class, 'cart'])->name('cart');
    Route::post('/update-cart-item', 'Customer@updateCartItem')->name('updateCartItem');
    Route::delete('/cart/{id}', [Customer::class, 'delete'])->name('cart.delete');
    Route::get('/checkout', [Customer::class, 'checkout'])->name('checkout');
    Route::delete('/cart/{id}', [Customer::class, 'removeFromCart'])->name('cart.remove');
    Route::post ('/process',[Customer::class, 'process'])->name('process');
    Route::put('/cart/update/{id}', [Customer::class, 'update'])->name('cart.update');
    Route::post('/products/{id}/decrement', [Customer::class,'decrementQuantity'])->name('products.decrement');
    Route::post('/products/{id}/increment', [Customer::class, 'incrementQuantity'])->name('products.increment');
    Route::post('/place-order', [Customer::class, 'placeorder'])->name('place-order');
    Route::get('/transaction', [Customer::class, 'transaction'])->name('transaction');
    Route::delete('/orders/{id}', [Customer::class, 'destroy'])->name('orders.destroy');
    Route::post('/orders/{id}/bayar', [Customer::class ,'bayar'])->name('orders.bayar');
    Route::post('/submit-review/{product_id}', [ReviewController::class,'submitReview'])->name('submitReview');
    Route::post('/update-order-status/{orderId}', [ReviewController::class,'updateStatus'])->name('updateStatus');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/historypesanan', [ProfileController::class, 'historypesanan'])->name('historypesanan');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/notifications/markAsRead/{id}', [Customer::class, 'markAsRead'])->name('notifications.markAsRead');
    Route::get('/getOrder/{orderId}', [Customer::class, 'getOrderDetails'])->name('getOrderDetails');

    // routes/web.php
    // Route::post('/store-review', [ReviewController::class, 'storeReview'])->name('storeReview');
    // Route::get('/cek-pengiriman/{id}', [Customer::class, 'destroy']')->name('cekPengiriman');


    Route::get('/print-struk/{orderId}', [PDFController::class, 'printStruk'])->name('print.struk');
    Route::get('/revenue-chart-data', [ChartsController::class, 'revenueChartData']);
    Route::get('/cek-pengiriman/{orderId}', [Customer::class, 'cekPengiriman'])->name('cekPengiriman');
    Route::put('/update-delivery-status/{id}', [Customer::class, 'updateDeliveryStatus'])->name('updateDeliveryStatus');
    Route::get('/selesai-pengiriman/{pengiriman}', [Customer::class, 'selesaiPengiriman'])->name('customer.selesaiPengiriman');

    Route::get('/updateOrderStatus/{orderId}', [Customer::class, 'updateOrderStatus'])->name('updateOrderStatus');
    Route::get('/history/show/{id}', [ReviewController::class, 'show'])->name('show.history');

    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
});




/* ADMIN */

//CATEGORY 

Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/home2', [HomeController::class, 'adminHomee'])->name('admin.home');
    // Route::get('/test', [HomeController::class, 'test'])->name('admin.home');



    Route::get('admin/category', [AdminController::class, 'index'])->name('category');
    Route::get('admin/category/tampilcategory', [AdminController::class, 'tampilcategory'])->name('tampil_category');
    Route::post('admin/category/tambahcategory', [AdminController::class, 'tambahcategory'])->name('tambah_category');
    Route::get('/deletecategory/{id}', [AdminController::class, 'deletecategory'])->name('deletecategory');
    //PRODUK 
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.Product');
    Route::get('admin/product/tampilproduct', [ProductController::class, 'tampilproduct'])->name('tampil_product');
    Route::post('admin/product/tambahproduct', [ProductController::class, 'tambahproduct'])->name('tambah_product');
    Route::get('admin/product/editproduct/{id}', [ProductController::class, 'editproduct'])->name('edit_product');
    Route::post('admin/product/updateproduct/{id}', [ProductController::class, 'updateproduct'])->name('update_product');
    Route::get('admin/product/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('delete_product');
    //ORDER
    // Route::get('/admin/order', [ProductController::class, 'index'])->name('admin.Product');
    Route::get('/admin/transaction', [AdminController::class, 'transaction'])->name('admintransaction');
    Route::put('/admin/transaction/{id}/mark-as-paid',[AdminController::class, 'markAsPaid']    )->name('admin.order.markAsPaid');
    
    Route::get('/admin/delivery', [AdminController::class, 'delivery'])->name('admindelivery');
    Route::get('/delivery/{id}', [AdminController::class, 'show'])->name('admin.delivery.show');
    Route::get('/delivery/{id}/update-status', [AdminController::class, 'updateStatusForm'])->name('admin.delivery.updateStatusForm');
    Route::put('/delivery/{id}/update-status', [AdminController::class, 'updateStatus'])->name('admin.delivery.updateStatus');
    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('admin/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('admin/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('admin/galeri/{galeri}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('admin/galeri/{galeri}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('admin/galeri/{galeri}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    Route::get('/monthly-income', [ExcelController::class, 'monthlyIncome']);
    Route::get('/export-excel', [ExcelController::class, 'exportExcel']);
});



Route::get('/welcome2', [HomeController::class, 'welcome2']);




Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});



/* MANAGER */

Route::middleware(['auth', 'user-access:manager'])->group(function () {
   Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


// // Routes untuk Produk
// // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// // Routes untuk Kategori
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
