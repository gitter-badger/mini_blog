var utils = require('./utils');

/**
 * Helper function to make it easily extend other prototypes
 * 
 * @param {Function} proto
 * @return {Function}
 * @author volter9
 */
var extend = function (proto) {
    /**
     * Closure
     * 
     * @param {Object} options
     * @return {Function}
     */
    return function (options) {
        var F = function () {            
            proto.apply(this, arguments);
        };
        
        F.prototype = Object.create(proto.prototype);
        
        utils.each(options, function (value, key) {
            F.prototype[key] = value;
        });
        
        F.extend = extend(F);
        
        return F;
    };
};

module.exports = extend;