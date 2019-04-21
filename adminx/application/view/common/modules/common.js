/**

 @Name：layuiAdmin 公共业务
 @Author：贤心
 @Site：http://www.layui.com/admin/
 @License：LPPL
    
 */

layui.define(function(exports) {
    var $ = layui.$,
        layer = layui.layer,
        laytpl = layui.laytpl,
        setter = layui.setter,
        view = layui.view,
        admin = layui.admin

    //公共业务的逻辑处理可以写在此处，切换任何页面都会执行
    //……



    //退出
    admin.events.logout = function() {
        //执行退出接口
        admin.req({
            url: '/adminx/login/signout',
            type: 'get',
            data: {},
            done: function(res) {
                layer.msg('已退出系统', {
                    icon: 1,
                    time: 1000
                }, function() {
                    location.href = '/adminx'; //后台主页
                });             
            }
        });
    };


    //对外暴露的接口
    exports('common', {});
});