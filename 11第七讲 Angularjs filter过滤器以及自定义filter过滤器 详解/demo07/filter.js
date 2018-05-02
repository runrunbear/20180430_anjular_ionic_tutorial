/**
 * Created by htzhanglong on 2015/4/19.
 */

var appFilter=angular.module("myApp.filter",[]);

appFilter.filter('rJs',function(){
    return function(input,n1,n2){
        console.log(input);
        console.log(n1);
        console.log(n2);
        return input.replace(/js/, "javascript");
    }
});