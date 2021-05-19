$(".js-trumbowyg").each(function() { 
    var trumbowyg = $(this).prop('name');
    window[trumbowyg] = $(this).trumbowyg(JSON.parse($('input[name=__trumbowyg_options_' + trumbowyg + ']').val()));  
});