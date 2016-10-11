var board = $(".board");

for(var i=1; i<=24; i++) {
   var div = $("<div>");
   div.append(i);
   board.append(div);
}

divVide = $("<div>");
board.append(divVide);

$(div).click(function (ev) {
    if($(divVide).before($(ev.target)) | $(divVide).after($(ev.target)))
        $(ev.target).after($(ev.target).prev(div));
    
});

//function echange (ev) {
//    clic = $(ev.target);
//    div.swap(clic);
//}