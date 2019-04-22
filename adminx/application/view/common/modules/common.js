/**

 @Name：layuiAdmin 公共业务
 @Author：贤心
 @Site：http://www.layui.com/admin/
 @License：LPPL
    
 */

layui.define(['form','table'],function(exports) {
    var $ = layui.$,
        layer = layui.layer,
        laytpl = layui.laytpl,
        setter = layui.setter,
        view = layui.view,
        form = layui.form,
        table = layui.table,
        admin = layui.admin

    //公共业务的逻辑处理可以写在此处，切换任何页面都会执行

    $.extend({
        //非空判断
        isEmpty: function(value) {
            if (value === null || value == undefined || value === '') {
                return true;
            }
            return false;
        }
    });

    //表单提交
    form.on('submit(LAY-common-submit)', function(obj) {
        admin.req({
            url: $(obj.elem).attr('url'),
            data: obj.field,
            method:'post',
            done: function(res) {
                //登入成功的提示与跳转
                layer.msg(res.msg, {
                    offset: '15px',
                    icon: 1,
                    time: 1000
                }, function() {
                    if(res.url!='' && res.url!=undefined){
                        if (res.url=='reload') {
                            window.location.reload();
                        }else{
                            window.location.href = res.url;
                        }                                   
                    }
                });
            }
        });        
        if($("#LAY-get-vercode").length>0){
            $("#LAY-get-vercode").click();
        }
    });

    //将模板解析为数据表格列
    getDatagridCols = function(myTable) {
        var colArr = new Array();
        var colsArr = new Array();
        var formatArr = new Array(); //需要格式化的集合
        var datagrid_cols = $(myTable).next(".fsDatagridCols");
        if (!$.isEmpty(datagrid_cols)) {
            var data = {};
            $.each(datagrid_cols.children(), function(i, n) {
                var _this = $(this);

                var type = _this.attr("type");

                if (!$.isEmpty(type) && type == "br") { //换行
                    colArr.push(colsArr);
                    colsArr = new Array();
                    data = {};
                    return true;
                }

                var toolbar = _this.attr("toolbar");
                var col = {};

                if (!$.isEmpty(_this.attr("align"))) {
                    col["align"] = _this.attr("align");
                }
                if (!$.isEmpty(_this.attr("fixed"))) {
                    col["fixed"] = _this.attr("fixed");
                }
                if (!$.isEmpty(_this.attr("style"))) {
                    col["style"] = _this.attr("style");
                }

                if (!$.isEmpty(_this.attr("colspan"))) {
                    col["colspan"] = _this.attr("colspan");
                }
                if (!$.isEmpty(_this.attr("rowspan"))) {
                    col["rowspan"] = _this.attr("rowspan");
                }

                if ($.isEmpty(toolbar)) { //普通列
                    var field = _this.attr("field");
                    var title = _this.attr("title");
                    var width = _this.attr("width");
                    var sort = _this.attr("sort");
                    var templet = _this.attr("templet");
                    var checkbox = _this.attr("checkbox");

                    if (!$.isEmpty(type)) {
                        col["type"] = type;
                    }

                    if (!$.isEmpty(field)) {
                        col["field"] = field;
                    }
                    if (!$.isEmpty(title)) {
                        col["title"] = title;
                    }
                    if (!$.isEmpty(width)) {
                        col["width"] = width;
                    }
                    if (!$.isEmpty(sort)) {
                        col["sort"] = sort;
                    }
                    if (!$.isEmpty(templet)) {
                        col["templet"] = templet;
                    }
                    if (!$.isEmpty(checkbox)) {
                        col["checkbox"] = checkbox;
                    }


                    if (!$.isEmpty(_this.attr("LAY_CHECKED"))) {
                        col["LAY_CHECKED"] = _this.attr("LAY_CHECKED");
                    }
                    if (!$.isEmpty(_this.attr("edit"))) {
                        col["edit"] = _this.attr("edit");
                    }
                    if (!$.isEmpty(_this.attr("event"))) {
                        col["event"] = _this.attr("event");
                    }

                    /*var dict = _this.attr("dict");
                    var formatType = _this.attr("formatType");
                    if (!$.isEmpty(dict)) {
                        formatArr.push(dict);
                        //自定义模板
                        col["templet"] = "<div>{{ layui.fsUtil.toDict('" + dict + "',d." + field + ") }}</div>";
                    } else if (!$.isEmpty(formatType)) {
                        var dateFormat = "yyyy-MM-dd HH:mm:ss";
                        if (formatType == "date") {
                            dateFormat = "yyyy-MM-dd";
                        }
                        col["templet"] = "<div>{{ layui.fsUtil.toDateString(d." + field + ",'" + dateFormat + "') }}</div>";
                    }*/

                    colsArr.push(col);

                } else { //工具条
                    col["toolbar"] = toolbar;
                    var width = _this.attr("width");
                    if (!$.isEmpty(width)) {
                        col["width"] = width;
                    }
                    var title = _this.attr("title");
                    if (!$.isEmpty(title)) {
                        col["title"] = title;
                    }
                    colsArr.push(col);
                }
            });
            colArr.push(colsArr);
        }
        data["colsArr"] = colArr;
        data["formatArr"] = formatArr;
        return data;
    };

    //通用数据表格加载
    $(".LAY-common-table").each(function(index, obj) {
        var cols = getDatagridCols(obj);
        //文章管理
        table.render({
            elem: '#LAY-app-content-list',
            url: $(obj).attr("lay-url"),
            method: $(obj).attr("lay-method"),
            cols: cols.colsArr,
            page: true,
            limit: 15,
            limits: [10, 15, 20, 25, 30]
        });
    });

    //监听搜索
    form.on('submit(tools-btn-search)', function(data) {
        var tableId = ($(data.form).attr("tableId"));
        var field = data.field;
        //执行重载
        table.reload(tableId, {
            where: field
        });
        return false;
    });

    //监听工具栏
    $('.layui-btn.tools-btn').on('click', function() {
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });

    var active = {
        batchdel: function() {            
            var tableId = $(this).attr('data-tableId');
            var url = $(this).attr('url');
            var checkStatus = table.checkStatus(tableId),
                checkData = checkStatus.data; //得到选中的数据
            if (checkData.length === 0) {
                return layer.msg('请选择数据');
            };
            var ids = [];
            for (var i = 0; i < checkData.length; i++) {
                ids.push(checkData[i].id);
            };
            layer.confirm('确定删除吗？', function(index) {
                //执行 Ajax 后重载
                admin.req({
                    url: url,
                    data: {id:ids.join(",")},
                    method:'post',
                    done: function(res) {
                        //登入成功的提示与跳转
                        layer.msg(res.msg, {
                            offset: '15px',
                            icon: 1,
                            time: 1000
                        }, function() {
                            table.reload(tableId);
                        });
                    }
                });
            });
        },
        add: function() {
            var tableId = $(this).attr('data-tableId');
            var url = $(this).attr('url');
            layer.open({
                type: 2,
                title: $(this).attr('topTitle'),
                content: url,
                maxmin: true,
                area: [$(this).attr('topWidth'), $(this).attr('topHeight')],
                btn: ['确定', '取消'],
                yes: function(index, layero) {
                    //点击确认触发 iframe 内容中的按钮提交
                    var submit = layero.find('iframe').contents().find("#layuiadmin-app-form-submit");
                    submit.click();
                }
            });
        },
        refresh: function() {
            var tableId = $(this).attr('data-tableId');
            table.reload(tableId);
        },
    };

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