<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/delivery', 'delivery')->name('delivery');
Route::view('/contact', 'contact')->name('contact');
Route::view('/how-it-works', 'how-it-works')->name('how-it-works');
Route::view('/farmer-benefits', 'farmer-benefits')->name('farmer-benefits');
Route::view('/selling-guide', 'selling-guide')->name('selling-guide');
Route::view('/buyer-benefits', 'buyer-benefits')->name('buyer-benefits');
Route::view('/resources', 'resources')->name('resources');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy-policy');
Route::view('/returns', 'returns')->name('returns');

Route::get('/marketplace', function () {
    return view('marketplace');
})->name('marketplace.index');

Route::get('/marketplace/{category?}', function ($category = null) {
    return view('marketplace', ['category' => $category]);
})->name('marketplace.category');

Route::view('/farmers', 'farmers')->name('farmers.index');
Route::view('/farmers/{slug}', 'farmer-profile')->name('farmer.show');

Route::view('/agro-news', 'agro-news')->name('agro-news');
Route::get('/agro-news/{slug}', function ($slug) {
    return view('agro-news-detail', ['slug' => $slug]);
})->name('agro-news.show');

Route::view('/cart', 'cart')->name('cart');
Route::view('/wishlist', 'wishlist')->name('wishlist');
Route::view('/order-tracking', 'order-tracking')->name('order-tracking');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/buyer/dashboard', function () {
    return view('buyer.dashboard');
})->middleware(['auth', 'role:Buyer'])->name('buyer.dashboard');

Route::get('/buyer/marketplace', function () {
    return view('buyer.marketplace');
})->middleware(['auth', 'role:Buyer'])->name('buyer.marketplace');

Route::get('/farmer/dashboard', function () {
    return view('farmer.dashboard');
})->middleware(['auth', 'role:Farmer'])->name('farmer.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:Admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users.index');

    Route::get('/farmer/{slug}', function ($slug) {
        return view('farmer-profile', ['slug' => $slug]);
    })->name('farmer.show');

    Route::get('/users/farmers', [App\Http\Controllers\Admin\UserManagementController::class, 'farmers'])->name('users.farmers');
    Route::get('/users/buyers', [App\Http\Controllers\Admin\UserManagementController::class, 'buyers'])->name('users.buyers');
    Route::get('/users/pending', [App\Http\Controllers\Admin\UserManagementController::class, 'pending'])->name('users.pending');
    Route::get('/activity-logs', [App\Http\Controllers\Admin\UserManagementController::class, 'activityLogs'])->name('activity-logs');
    Route::get('/users/create', [App\Http\Controllers\Admin\UserManagementController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\Admin\UserManagementController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [App\Http\Controllers\Admin\UserManagementController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [App\Http\Controllers\Admin\UserManagementController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\Admin\UserManagementController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [App\Http\Controllers\Admin\UserManagementController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{id}/activate', [App\Http\Controllers\Admin\UserManagementController::class, 'activate'])->name('users.activate');
    Route::post('/users/{id}/suspend', [App\Http\Controllers\Admin\UserManagementController::class, 'suspend'])->name('users.suspend');
    Route::post('/users/{id}/reactivate', [App\Http\Controllers\Admin\UserManagementController::class, 'reactivate'])->name('users.reactivate');
    Route::post('/users/{id}/verify', [App\Http\Controllers\Admin\UserManagementController::class, 'verify'])->name('users.verify');
    Route::post('/users/{id}/reject', [App\Http\Controllers\Admin\UserManagementController::class, 'reject'])->name('users.reject');
    Route::post('/users/{id}/reset-password', [App\Http\Controllers\Admin\UserManagementController::class, 'resetPassword'])->name('users.reset-password');

    Route::get('/products', function () {
        return view('admin.products');
    })->name('products.index');

    Route::get('/orders', function () {
        return view('admin.orders');
    })->name('orders.index');

    Route::get('/payments', function () {
        return view('admin.payments');
    })->name('payments.index');

    Route::get('/reports', function () {
        return view('admin.reports');
    })->name('reports.index');

    Route::get('/reports/sales', function () {
        return view('admin.reports');
    })->name('reports.sales');

    Route::get('/reports/farmers', function () {
        return view('admin.reports');
    })->name('reports.farmers');

    Route::get('/reports/buyers', function () {
        return view('admin.reports');
    })->name('reports.buyers');

    Route::get('/reports/products', function () {
        return view('admin.reports');
    })->name('reports.products');

    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings.index');

    Route::get('/settings/general', function () {
        return view('admin.settings');
    })->name('settings.general');

    Route::get('/settings/payment', function () {
        return view('admin.settings');
    })->name('settings.payment');

    Route::get('/settings/security', function () {
        return view('admin.settings');
    })->name('settings.security');

    Route::get('/charts/sales', [App\Http\Controllers\ChartController::class, 'adminSalesData'])->name('charts.sales');
    Route::get('/charts/orders', [App\Http\Controllers\ChartController::class, 'adminOrdersOverview'])->name('charts.orders');
    Route::get('/charts/users', [App\Http\Controllers\ChartController::class, 'adminUserRegistration'])->name('charts.users');
    Route::get('/charts/categories', [App\Http\Controllers\ChartController::class, 'adminCategoryDistribution'])->name('charts.categories');
    Route::get('/charts/farmers', [App\Http\Controllers\ChartController::class, 'adminTopFarmers'])->name('charts.farmers');
    Route::get('/charts/order-status', [App\Http\Controllers\ChartController::class, 'adminOrderStatus'])->name('charts.order-status');
    Route::get('/charts/products', [App\Http\Controllers\ChartController::class, 'adminTopProducts'])->name('charts.products');
    Route::get('/charts/daily-sales', [App\Http\Controllers\ChartController::class, 'adminDailySales'])->name('charts.daily-sales');
});

Route::middleware(['auth', 'role:Farmer'])->prefix('farmer')->name('farmer.')->group(function () {
    Route::get('/dashboard', function () {
        return view('farmer.dashboard');
    })->name('dashboard');

    Route::get('/products', function () {
        return view('farmer.products');
    })->name('products.index');

    Route::get('/products/create', function () {
        return view('farmer.products.create');
    })->name('products.create');

    Route::get('/inventory', function () {
        return view('farmer.inventory');
    })->name('inventory.index');

    Route::get('/orders', function () {
        return view('farmer.orders');
    })->name('orders.index');

    Route::get('/sales', function () {
        return view('farmer.sales');
    })->name('sales.index');

    Route::get('/reviews', function () {
        return view('farmer.reviews');
    })->name('reviews.index');

    Route::get('/profile', function () {
        return view('farmer.profile');
    })->name('profile');

    Route::get('/charts/sales', [App\Http\Controllers\ChartController::class, 'farmerSalesData'])->name('charts.sales');
    Route::get('/charts/product-performance', [App\Http\Controllers\ChartController::class, 'farmerProductPerformance'])->name('charts.product-performance');
    Route::get('/charts/inventory', [App\Http\Controllers\ChartController::class, 'farmerInventoryStatus'])->name('charts.inventory');
    Route::get('/charts/orders', [App\Http\Controllers\ChartController::class, 'farmerOrdersPerMonth'])->name('charts.orders');
    Route::get('/charts/revenue', [App\Http\Controllers\ChartController::class, 'farmerRevenueTrend'])->name('charts.revenue');
    Route::get('/charts/ratings', [App\Http\Controllers\ChartController::class, 'farmerCustomerRatings'])->name('charts.ratings');
});

Route::middleware(['auth', 'role:Buyer'])->prefix('buyer')->name('buyer.')->group(function () {
    Route::get('/dashboard', function () {
        return view('buyer.dashboard');
    })->name('dashboard');

    Route::get('/marketplace', function () {
        return view('buyer.marketplace');
    })->name('marketplace');

    Route::get('/cart', function () {
        return view('buyer.cart');
    })->name('cart');

    Route::get('/wishlist', function () {
        return view('buyer.wishlist');
    })->name('wishlist');

    Route::get('/orders', function () {
        return view('buyer.orders');
    })->name('orders.index');

    Route::get('/payments', function () {
        return view('buyer.payments');
    })->name('payments.index');

    Route::get('/profile', function () {
        return view('buyer.profile');
    })->name('profile');

    Route::get('/reviews', function () {
        return view('buyer.reviews');
    })->name('reviews.index');

    Route::get('/charts/purchases', [App\Http\Controllers\ChartController::class, 'buyerMonthlyPurchases'])->name('charts.purchases');
    Route::get('/charts/spending', [App\Http\Controllers\ChartController::class, 'buyerSpendingAnalysis'])->name('charts.spending');
    Route::get('/charts/order-status', [App\Http\Controllers\ChartController::class, 'buyerOrderStatus'])->name('charts.order-status');
    Route::get('/charts/categories', [App\Http\Controllers\ChartController::class, 'buyerFavoriteCategories'])->name('charts.categories');
    Route::get('/charts/purchase-history', [App\Http\Controllers\ChartController::class, 'buyerPurchaseHistory'])->name('charts.purchase-history');
});

require __DIR__.'/auth.php';
