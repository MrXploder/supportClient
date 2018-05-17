(function(){
  'use strict';

  angular
    .module('support')
    .factory('internetStatus', internetStatus);

  internetStatus.$inject = ["$window", "$rootScope"];

  function internetStatus($window, $rootScope){
    var onlineStatus = {};

    onlineStatus.onLine = $window.navigator.onLine;

    onlineStatus.isOnline = function() {
      return onlineStatus.onLine;
    }

    $window.addEventListener("online", function () {
      onlineStatus.onLine = true;
      $rootScope.$digest();
    }, true);

    $window.addEventListener("offline", function () {
      onlineStatus.onLine = false;
      $rootScope.$digest();
    }, true);

    return onlineStatus;
  };
})();