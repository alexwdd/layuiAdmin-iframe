/**
 @Name：layuiAdmin 内容系统
 @Author：star1029
 @Site：http://www.layui.com/admin/
 @License：LPPL
 */
layui.define(['upload'], function(exports) {
    var $ = layui.$,
        upload = layui.upload;
    var myupload = {
        //单图上传
        single:function(opt){            
            upload.render({
                elem: opt.elem,
                url: opt.url,
                acceptMime:opt.mime,
                exts:opt.exts,
                size:opt.size,
                before: function(obj) {
                    layer.load(2); //上传loading
                },
                done: function(res) {
                    layer.closeAll(); //关闭loading
                    //如果上传失败
                    if (res.code != 1) {
                        return layer.msg(res.msg);
                    }
                    //上传成功
                    $(opt.tag+'_src').attr('src', res.data.url);
                    $(opt.tag).val(res.data.url);
                },
                error: function() {
                }
            });
        }
    }

    /*var uploadInst = upload.render({
        elem: '#upload-single',
        url: 'url',
        before: function(obj) {
        },
        done: function(res) {
            //如果上传失败
            if (res.code != 1) {
                return layer.msg(res.msg);
            }
            //上传成功
            $('#picname_src').attr('src', res.data.url);
            $('#picname').val(res.data.url);
        },
        error: function() {
        }
    });*/

    exports('myupload', myupload)
});