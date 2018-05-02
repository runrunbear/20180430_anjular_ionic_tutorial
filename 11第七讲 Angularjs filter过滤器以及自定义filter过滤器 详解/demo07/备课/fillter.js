/**
 * Created by htzhanglong on 2015/3/11.
 */

angular.module("tanktest", []).filter("tankreplace", function() {
    return function(input) {
        return input.replace(/tank/, "=====")
    };
});
