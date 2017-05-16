'use strict'; 
var uvApp = angular.module('uvApp', [
                    'ngMaterial',
                    'ui.router',            //  To use multiple parallel views ( used for ui-view refer index.html ) 
                    'ngAnimate',            //  To use angularJS animation ( for supporting angular-ui-bootstrap )
                    'ngSanitize',           //  To support angular-ui-bootstrap library
                    //'ui.bootstrap',         //  angular-ui-bootstrap library ( it is like boootstrap with jquery).
                    'LocalStorageModule'    //  To access localStorage in a better way
                    ]);

/* Application states and view resolver config */
uvApp.config(['$stateProvider', '$urlRouterProvider',
    function ($stateProvider, $urlRouterProvider) {

        $urlRouterProvider.otherwise('home');   //  default route 

        $stateProvider            
            .state('home', {
                url: '/home',
                views: {
                    'headerView': {
                        templateUrl: 'app/header/header.html'
                    },
                    'containerView': {
                        templateUrl: 'app/home/home.html',
                        controller: 'HomeCtrl'
                    },
                    'footerView': {
                        templateUrl: 'app/footer/footer.html' 
                    }
                }
            })
            .state('personal_information', {
                url: '/personal_information',
                views: {
                    'headerView': {
                        templateUrl: 'app/header/header.html'
                    },
                    'containerView': {
                        templateUrl: 'app/personal_information/personal_information.html',
                        controller: 'PersonalInfomationCtrl'
                    },
                    'footerView': {
                        //templateUrl: 'app/footer/footer.html' 
                    }
                }
            })
            .state('contact', {
                url: '/contact',
                views: {
                    'headerView': {
                        templateUrl: 'app/header/header.html'
                    },
                    'containerView': {
                        templateUrl: 'app/contact/contact.html'
                    },
                    'footerView': {
                        templateUrl: 'app/footer/footer.html' 
                    }
                }
            }); 
    }
]);


uvApp.config(function (localStorageServiceProvider) {       // Note: localStorageServiceProvider is not used in this project for simplicity of project.
  localStorageServiceProvider
    .setPrefix('uvApp');	// Note: Default Storage type is localStorage
});