$(".js-trumbowyg").each(function() { 
    $(this).trumbowyg(JSON.parse($('input[name=__trumbowyg_options_' + $(this).prop('name') + ']').val()));  
});