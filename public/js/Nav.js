
  $('.subscription').on('click',function(){
        var target = $(this).data('target');
        $.ajax({
          type: 'POST',
          url: 'serveur',
          data: 'serv=' + target,
          success: function(data){
            $('#root').html(data);
          }
        })
    })
  