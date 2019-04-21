//载入各种模块
$(function(){
	layui.use(['form','element'], function(){
  		var form = layui.form;  
  		var element = layui.element;		
  		form.on('submit(go)', function(data){
            if (data.field.remember==1){
                localStorage.setItem('userNumber',data.field.userNumber);
            }
  			var load = layer.load(0,{shade: [0.7, '#000000']});
  			var formUrl = data.elem.getAttribute("url");
            $.ajax({
                url:formUrl,
                method:'post',
                data:data.field,
                dataType:'JSON',
                success:function(res){
                	layer.close(load);
                    if(res.code == 1){
                        if (res.msg!=''){
                            layer.open({
                                type:0, 
                                icon:1,
                                content:res.msg,
                                time:3000,
                                end: function(){ 
                                    if(res.url!='' && res.url!=undefined && res.url!="undefined"){
                                        if (res.data=='reload') {
                                            window.location.reload();
                                        }else{
                                            window.location.href = res.url;
                                        }                                   
                                    }
                                } 
                            });
                        }else{
                            if(res.url!='' && res.url!=undefined && res.url!="undefined"){
                                if (res.data=='reload') {
                                    window.location.reload();
                                }else{
                                    window.location.href = res.url;
                                }                                   
                            }
                        }                        
                    }else{
                        layer.alert(res.msg);
                    }
                },
                error:function (data) {
                	layer.close(load);
                	layer.alert("服务器连接失败");
                }
            })
            return false;
        });


		//自定义验证规则
		form.verify({
			_mobile: function(value) {
				if(value !='') {
					if (!checkMobile(value)) {
						return '请输入正确的手机号码';
					}
				}
			},
			__mobile: function(value) {
				if (!checkMobile(value)) {
					return '请输入正确的手机号码';
				}
			},
			_url: function(value) {
				if(value !='') {
					if (!checkUrl(value)) {
						return '请输入正确URL格式';
					}
				}
			},
			__url: function(value) {
				if (!checkUrl(value)) {
					return '请输入正确URL格式';
				}
			},
			__username: function(value) {
				if (!checkWordLong(value,2,8)) {
					return '请输入用户名2-8个字符';
				}
			},
			_password: function(value) {
				if(value !='') {
					if (!checkWordLong(value,6,12)) {
						return '请输入密码6-12个字符';
					}
				}
			},
			__password: function(value) {
				if (!checkWordLong(value,6,12)) {
					return '请输入密码6-12个字符';
				}
			},
			__repassword: function(value) {
				if (!checkRepassword(value)) {
					return '两次密码不同';
				}
			},
			_cardNo: function(value) {
				if(value !='') {
					if (!checkCardNo(value)) {
						return '请输入正确身份证号';
					}
				}
			},
			__cardNo: function(value) {
				if (!checkCardNo(value)) {
					return '请输入正确身份证号';
				}
			},
			sign: function(value) {
                if(value =='') {return '请输入签名，中文1个汉字，英文不超过1个单词';}
                var reg = /^[\u4E00-\u9FA5]{1,500}$/;
                if(reg.test(value)){//中文
                    if (value.length>1){
                        return '中文只能1个汉字';
                    }
                }else{
                    if (value.indexOf(' ') >= 0){
                        return '英文不能超过1个单词';
                    }
                }
			}
		});
	});
})