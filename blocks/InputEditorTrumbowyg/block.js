$(".js-trumbowyg").each(function() { 
    $(this).trumbowyg(JSON.parse($('input[name=' + $(this).prop('name') + '-trumbowyg-options]').val()));  
});