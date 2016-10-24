<?php

/* スレッド一覧 */
Route::Get('/' , 'MyThreadsController@getThreadList');

/* スレッド作成 */
Route::Get('/thread/create' , 'MyThreadsController@getCreateThreadPage');
Route::Post('/thread/create' , 'MyThreadsController@createThread');
