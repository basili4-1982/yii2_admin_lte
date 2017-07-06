/**
 * Created by basili4 on 07.07.17.
 */


function Chat() {
    this.csrf = $('[name="csrf-token"]').attr('content');
    this.countMessage = 0;
    this.add = function (text) {
        var url = '/admin/chat/add';
        var data = {
            _csrf: this.csrf,
            itemChat: {
                text: text,
            }
        };

        $.post(url, data, function (count) {

        });
    }

    this.loadMessage = function () {
        var url = '/admin/chat/load';
        var data = {
            _csrf: this.csrf,
            countMessage: this.countMessage
        }

        var self=this;
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function (data) {
                if (data.countMessage > 0) {
                    for (i in data.data) {
                        $('#chat-box').append(data.data[i]);
                    }
                    self.countMessage = data.countMessage;
                }
            },
            dataType: 'json'
        });

    };
}


$(function () {
    var chat = new Chat();

    $('#addMessage').click(function () {
        console.log('click #message', $('#message').val());
        chat.add($('#message').val());
        $('#message').val('');
        loadMessage();
        $('#chat-box').scrollTop(9999);
        return false;
    });

     $('#message').keypress(function (e) {
         if (e.keyCode == 13) {
             $('#addMessage').click();
             return false;
         }
     });




    var loadMessage= function () {
        chat.loadMessage();
    };

    loadMessage();
    setInterval(loadMessage,10000);
});


