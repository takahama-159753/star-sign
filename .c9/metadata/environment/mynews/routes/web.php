{"filter":false,"title":"web.php","tooltip":"/mynews/routes/web.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":69,"column":0},"end":{"row":69,"column":118},"action":"insert","lines":["【応用】 routes/web.php を編集して、 admin/profile/create に postメソッドでアクセスしたら ProfileController の create Action に割り当てるように設定してください"],"id":244}],[{"start":{"row":69,"column":0},"end":{"row":69,"column":1},"action":"insert","lines":["/"],"id":245},{"start":{"row":69,"column":1},"end":{"row":69,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":69,"column":120},"end":{"row":70,"column":0},"action":"insert","lines":["",""],"id":246},{"start":{"row":70,"column":0},"end":{"row":71,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":71,"column":0},"end":{"row":74,"column":3},"action":"insert","lines":["Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {","     Route::get('news/create', 'Admin\\NewsController@add');","     Route::post('news/create', 'Admin\\NewsController@create'); # 追記","});"],"id":247}],[{"start":{"row":73,"column":18},"end":{"row":73,"column":29},"action":"remove","lines":["news/create"],"id":248},{"start":{"row":73,"column":18},"end":{"row":73,"column":38},"action":"insert","lines":["admin/profile/create"]}],[{"start":{"row":73,"column":48},"end":{"row":73,"column":62},"action":"remove","lines":["NewsController"],"id":250},{"start":{"row":73,"column":48},"end":{"row":73,"column":66},"action":"insert","lines":[" ProfileController"]}],[{"start":{"row":72,"column":38},"end":{"row":72,"column":52},"action":"remove","lines":["NewsController"],"id":251},{"start":{"row":72,"column":38},"end":{"row":72,"column":56},"action":"insert","lines":[" ProfileController"]}],[{"start":{"row":72,"column":38},"end":{"row":72,"column":39},"action":"remove","lines":[" "],"id":252}],[{"start":{"row":74,"column":3},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":253},{"start":{"row":75,"column":0},"end":{"row":76,"column":0},"action":"insert","lines":["",""]},{"start":{"row":76,"column":0},"end":{"row":76,"column":1},"action":"insert","lines":["/"]},{"start":{"row":76,"column":1},"end":{"row":76,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":76,"column":2},"end":{"row":76,"column":119},"action":"insert","lines":["【応用】 routes/web.php を編集して、 admin/profile/edit に postメソッドでアクセスしたら ProfileController の update Action に割り当てるように設定してください。"],"id":254}],[{"start":{"row":76,"column":119},"end":{"row":77,"column":0},"action":"insert","lines":["",""],"id":255}],[{"start":{"row":77,"column":0},"end":{"row":77,"column":72},"action":"insert","lines":["Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {"],"id":256}],[{"start":{"row":77,"column":72},"end":{"row":78,"column":0},"action":"insert","lines":["",""],"id":257},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":78,"column":4},"end":{"row":78,"column":7},"action":"insert","lines":["});"],"id":258},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":77,"column":72},"end":{"row":78,"column":0},"action":"insert","lines":["",""],"id":259},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]},{"start":{"row":78,"column":4},"end":{"row":79,"column":0},"action":"insert","lines":["",""]},{"start":{"row":79,"column":0},"end":{"row":79,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":78,"column":4},"end":{"row":78,"column":76},"action":"insert","lines":[" Route::post('admin/profile/create', 'Admin\\ ProfileController@create');"],"id":260}],[{"start":{"row":78,"column":18},"end":{"row":78,"column":38},"action":"remove","lines":["admin/profile/create"],"id":261},{"start":{"row":78,"column":18},"end":{"row":78,"column":36},"action":"insert","lines":["admin/profile/edit"]}],[{"start":{"row":78,"column":65},"end":{"row":78,"column":71},"action":"remove","lines":["create"],"id":262},{"start":{"row":78,"column":65},"end":{"row":78,"column":71},"action":"insert","lines":["update"]}]]},"ace":{"folds":[],"scrolltop":660,"scrollleft":0,"selection":{"start":{"row":68,"column":0},"end":{"row":68,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":46,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1581943584119,"hash":"04263dd5caf71b97e05907e31f72b957cbbe7c8b"}