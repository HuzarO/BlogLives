(function() {
    'use strict';

    angular
        .module('app.router', [])
        .config(appRouter);

    appRouter.$inject = ['$stateProvider', '$urlRouterProvider'];
    function appRouter($stateProvider, $urlRouterProvider) {
        $stateProvider
            .state('dashboard', {
                url: '/',
                views: {
                    'content-pane@': {
						templateUrl: 'templates/dashboard/content-pane.html'
					},
					'right-pane@dashboard': {
						templateUrl: 'templates/dashboard/right-pane.html'
					}
                }
            });

        $urlRouterProvider.otherwise('/');
    }
})();