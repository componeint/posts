/**
 * posts.state.js
 * Created by anonymous on 15/03/16 7:52.
 */

(function() {
    'use strict';

    angular
        .module('posts')
        .config(postsState);

    postsState.$inject = ['$stateProvider', '$urlRouterProvider', 'layoutProvider'];

    /* @ngInject */
    function postsState($stateProvider, $urlRouterProvider, layoutProvider) {
        //
    }

})();