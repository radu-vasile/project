<?php
Route::set('', function() {
  View::make('Root');
});

Route::set('about-us', function() {
  View::make('AboutUs');
});

Route::set('popups/user-login', function() {
  View::make('popupUserLogin');
});

Route::set('user/<1>', function() {
  View::make('UserProfile');
});