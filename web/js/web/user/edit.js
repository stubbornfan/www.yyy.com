/**
 * Created by frank on 2017-07-26.
 */
var user_edit_ops = {
    init:function(){
        this.eventBind();

    },

    eventBind:function () {
        $(".save").click( function () {
            var btn_target = $(this);
            if( btn_target.hasClass("disabled")){
                alert("正在处理，请不要重复点击~");
                return false;
            }


            var nicname = $(" .user_edit_wrap input[name=nicname]").val();
            var email = $(" .user_edit_wrap input[name=email]").val();
            if( nicname.length <1 ){
                alert("请输入合法的姓名~~");
                return false;
            }
            if( email.length <1){
                alert("请输入合法的邮箱地址~~");
                return false;
            }

            btn_target.addClass("disabled");

            $.ajax({
                url:'/web/user/edit',
                type:'POST',
                data:{
                    nicname:nicname,
                    email:email
                },
                datatype:'json',
                success:function (res) {
                    btn_target.removeClass("disabled");

                    alert(res.msg);
                    if( res.code == 200 ){
                        window.location.href = window.location.href;
                    }

                }
            });


        });

        
    }
};


$(document).ready(function () {
    user_edit_ops.init();
    
});