var extend = require('./extend');

/**
 * MVC view
 * 
 * This class is responsible for rendering data from models
 * 
 * @param {Node} node
 * @param {Object} data
 */
var View = function (node, data) {
    this.node = node;
    this.data = data;
    
    this.initialize();
};

/** Methods that should be extended in subclasses */
View.prototype.initialize = function () {};
View.prototype.render = function () {};

/**
 * Find an element by selector
 * 
 * @param {String} selector
 * @return {Node}
 */
View.prototype.find = function (selector) {
    return this.node.querySelector(selector);
};

View.extend = extend(View);

module.exports = View;