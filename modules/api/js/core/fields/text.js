var dom = require('../../helpers/dom');

module.exports = {
    create: function (node) {
        var text = document.createElement('textarea');
        
        text.classList.add('m-text-field');
        text.classList.add('m-hidden');
        text.dataset.type = node.dataset.type;
        text.dataset.name = node.dataset.name;
        text.value = node.innerHTML.trim();
        
        dom.insertAfter(node, text);
        
        return text;
    },
    
    activate: function (node, view) {
        node.classList.add('m-editable');
        node.classList.remove('m-hidden');
        
        view.classList.add('m-hidden');
    },
    
    deactivate: function (node, view) {
        node.classList.remove('m-editable');
        node.classList.add('m-hidden');
        
        view.classList.remove('m-hidden');
    }
};