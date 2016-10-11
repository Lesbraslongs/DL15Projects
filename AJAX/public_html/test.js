$("button").click(function() {
    //$("#div1").load("test.txt");
    $.get("test.txt", function(data) {
        console.log(data);
    });
});

