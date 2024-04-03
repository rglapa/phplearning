jQuery.fn.warning = function() {
    return this.each(function() {
        alert('Tag name:"' + $(this).prop("tagName") + '".');
    })
}