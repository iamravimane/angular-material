(function() {
  'use strict';


      uvApp.controller('AppCtrl', AppCtrl);

  function AppCtrl($scope,$mdSidenav) {
    $scope.currentNavItem = 'page1';
      
   $scope.showMobileMainHeader = true;
    $scope.openSideNavPanel = function() {
        $mdSidenav('left').open();
    };
    $scope.closeSideNavPanel = function() {
        $mdSidenav('left').close();
    };
  }

})();
