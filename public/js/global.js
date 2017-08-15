$(function(){
    $('.clickable').on('click',function(){
        var effect = $(this).data('effect');
        $(this).closest('.panel')[effect]();
	})

    $('form')

})

$('button[role="submit"]').unbind('click').click(function(e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "/topic",
        data: '{ "title": "hello hello", "content": "open sesami", "author_id": "1" }',
        contentType: "json",
        processData: false,
        success:function(data) {
            console.log(data);
        }
    });

    // $.post( "/topic", { title: "hello hello", content: "open sesami", author_id: "1" }, function( data ) {
    //     console.log(data);
    // });
});
