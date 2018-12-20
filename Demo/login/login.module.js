(function() {
    'use strict';

    var AppLogin=angular.module('AppLogin', [ 'ui.router','oc.lazyLoad'
        
    ]);
    AppLogin.config(function($stateProvider){
        $stateProvider
        .state('login', {
            url: '/login',
            templateUrl: 'login/view/login.html',
            
            resolve: {
                deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'App.Login',
                        insertBefore: '#ng_load_plugins_before',
                        
                    });
                }]
            }
        });
    });
})();