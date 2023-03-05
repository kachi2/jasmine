<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqContoller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MenuController as MenuPage;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'admins', 'as' => 'admin.'], function(){
Route::middleware('auth')->group(function(){
    Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
    Route::get('/index', [AdminDashboardController::class, 'Home'])->name('home');
    Route::controller(MenuPage::class)->group(function(){
        Route::get('/website/menus', 'Index')->name('menu.index');
        Route::get('/website/menu/create',  'Create')->name('addMenu');
        Route::post('/website/menu/store', 'Store')->name('MenuStore');
        Route::get('/menu/edit/{id}','Edit')->name('menu.edit');
        Route::post('/website/menu/update/{id}',  'Update')->name('MenuUpdate');
        Route::get('/website/menu/disable/{id}',  'Disable')->name('MenuDisable');
        Route::get('/website/menu/enable/{id}',  'Enable')->name('MenuEnable');
        Route::get('/website/submenu/create/{id}',  'SubMenuCreate')->name('subMenu.Create');
        Route::post('/website/submenu/store/{id}', 'SubMenuStore')->name('SubMenuStore');
        Route::get('/website/submenu/edit/{id}',  'SubMenuEdit')->name('subMenu.edit');
        Route::post('/website/submenu/update/{id}', 'SubMenuUpdate')->name('SubMenuUpdate');
        Route::get('/website/submenu/delete/{id}',  'SubMenuDelete')->name('subMenu.delete');

    });

    Route::controller(ManagePagesController::class)->group(function(){
        Route::get('/website/pages', 'Index')->name('manage.pages');
        Route::get('/website/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/website/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/website/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/website/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/website/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        Route::get('/website/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        Route::get('/website/pages/disable/{id}',  'PagesDisable')->name('PagesDisable');
        Route::get('/website/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/wesite/blog', 'Index')->name('blogs.index');
        Route::get('/wesite/blog/create', 'BlogsCreate')->name('BlogsCreate');
        Route::post('/website/blog/store', 'BlogsStore')->name('BlogsStore');
        Route::get('/website/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
        Route::post('/website/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
        Route::get('/wensite/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
        Route::get('/website/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
        Route::get('/webiste/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
    });
  
    Route::controller(JobsController::class)->group(function(){
        Route::get('/wesite/job', 'Index')->name('Jobs.index');
        Route::get('/wesite/jobs/create', 'JobsCreate')->name('JobsCreate');
        Route::post('/website/jobs/store', 'JobsStore')->name('JobsStore');
        Route::get('/website/jobs/edit/{id}', 'JobsEdit')->name('JobsEdit');
        Route::post('/website/jobs/update/{id}', 'JobsUpdate')->name('JobsUpdate');
        Route::get('/wensite/jobs/delete/{id}', 'JobsDelete')->name('JobsDelete');
        Route::get('/website/jobs/activate/{id}', 'JobsActivate')->name('JobsActivate');
        Route::get('/webiste/jobs/diabled/{id}', 'JobsDisable')->name('JobsDisable');
        Route::get('/webiste/jobs/applied/{id}', 'JobsApplied')->name('JobsApplied');
        Route::get('/webiste/jobs/download/{id}', 'DownloadCV')->name('DownloadCV');
    });

    Route::controller(SettingsController::class)->group(function(){
        Route::get('/website/settings/index', 'Index')->name('settings.index');
        Route::get('/website/settings/testimonias', 'Testimonials')->name('settings.testimonials');
        Route::get('/website/settings/socials', 'Socials')->name('settings.socials');
        Route::get('/website/settings/about', 'Abouts')->name('settings.abouts');
        Route::get('/website/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
        Route::post('/website/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
        Route::get('/website/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
        Route::post('/website/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
        Route::get('/website/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
        Route::post('/website/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
        Route::post('/website/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
        Route::get('/website/admin/user', 'UserAccount')->name('userAccount');
        Route::post('/website/admin/uuser/account', 'UpdateAccount')->name('UpdateAccount');
    });

    Route::controller(SliderController::class)->group(function(){
        Route::get('/website/settings/sliders/index', 'Index')->name('settings.sliders');
        Route::get('/website/settings/sliders/create', 'CreateSlider')->name('sliderCreate');
        Route::post('/website/settings/sliders/store', 'StoreSlider')->name('sliderStore');
        Route::get('/website/settings/sliders/edit/{id}', 'EditSlider')->name('sliderEdit');
        Route::post('/website/settings/sliders/update/{id}', 'UpdateSlider')->name('sliderUpdate');
        Route::get('/website/settings/sliders/delete/{id}', 'DeleteSlider')->name('sliderDelete');
        Route::get('/website/settings/sliders/activate/{id}', 'ActivateSlider')->name('sliderActivate');
        Route::get('/website/settings/sliders/deactivate/{id}', 'DeactivateSlider')->name('sliderDeactivate');
    });

    Route::controller(FaqContoller::class)->group(function(){
        Route::get('/website/faq/faq', 'Index')->name('faq.index');
        Route::get('/website/faq/create', 'Create')->name('faqCreate');
        Route::post('/website/faq/store', 'Store')->name('faqStore');
        Route::get('/website/faq/edit/{id}', 'Edit')->name('faqEdit');
        Route::post('/website/faq/update/{id}', 'Update')->name('faqUpdate');
        Route::get('/website/faq/delete/{id}', 'Delete')->name('faqDelete');
    });

});
});


Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');
Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
});

Route::post('/jobs/apply/{id}', [ClientJobController::class, 'ApplyJob'])->name('apply.job');
Route::get('/job/details/{id}',  [ClientJobController::class, 'Details'])->name('job-details');
Route::post('/request/services/',  [ClientJobController::class, 'RequestService'])->name('request-service');


require __DIR__.'/auth.php';
