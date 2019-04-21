/**
 @Name：layuiAdmin 内容系统
 @Author：star1029
 @Site：http://www.layui.com/admin/
 @License：LPPL
 */
layui.define(['table', 'form'], function(exports) {
    var $ = layui.$,
        table = layui.table,
        form = layui.form;

    /**
     * 获取datagrid 列集合
     */

    $.extend({
        //非空判断
        isEmpty: function(value) {
            if (value === null || value == undefined || value === '') {
                return true;
            }
            return false;
        }
    });

    getDatagridCols = function() {
        var colArr = new Array();
        var colsArr = new Array();
        var formatArr = new Array(); //需要格式化的集合
        var datagrid_cols = $(".my-table").next(".fsDatagridCols");
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

    $(".my-table").each(function(index, obj) {

        var cols = getDatagridCols();
        //文章管理
        table.render({
            elem: '#LAY-app-content-list',
            url: $(obj).attr("lay-url"),
            method: $(obj).attr("lay-method"),
            cols: cols.colsArr,
            page: true,
            limit: 10,
            limits: [10, 15, 20, 25, 30],
            text: '对不起，加载出现异常！'
        });
    })


    //监听工具条
    table.on('tool(LAY-app-content-list)', function(obj) {
        var data = obj.data;
        if (obj.event === 'del') {
            layer.confirm('确定删除此文章？', function(index) {
                obj.del();
                layer.close(index);
            });
        } else if (obj.event === 'edit') {
            layer.open({
                type: 2,
                title: '编辑文章',
                content: '../../../views/app/content/listform.html?id=' + data.id,
                maxmin: true,
                area: ['550px', '550px'],
                btn: ['确定', '取消'],
                yes: function(index, layero) {
                    var iframeWindow = window['layui-layer-iframe' + index],
                        submit = layero.find('iframe').contents().find("#layuiadmin-app-form-edit");

                    //监听提交
                    iframeWindow.layui.form.on('submit(layuiadmin-app-form-edit)', function(data) {
                        var field = data.field; //获取提交的字段

                        //提交 Ajax 成功后，静态更新表格中的数据
                        //$.ajax({});              
                        obj.update({
                            label: field.label,
                            title: field.title,
                            author: field.author,
                            status: field.status
                        }); //数据更新

                        form.render();
                        layer.close(index); //关闭弹层
                    });

                    submit.trigger('click');
                }
            });
        }
    });

    //分类管理
    table.render({
        elem: '#LAY-app-content-tags',
        url: layui.setter.base + 'json/content/tags.js' //模拟接口
            ,
        cols: [
            [
                { type: 'numbers', fixed: 'left' }, { field: 'id', width: 100, title: 'ID', sort: true }, { field: 'tags', title: '分类名', minWidth: 100 }, { title: '操作', width: 150, align: 'center', fixed: 'right', toolbar: '#layuiadmin-app-cont-tagsbar' }
            ]
        ],
        text: '对不起，加载出现异常！'
    });

    //监听工具条
    table.on('tool(LAY-app-content-tags)', function(obj) {
        var data = obj.data;
        if (obj.event === 'del') {
            layer.confirm('确定删除此分类？', function(index) {
                obj.del();
                layer.close(index);
            });
        } else if (obj.event === 'edit') {
            var tr = $(obj.tr);
            layer.open({
                type: 2,
                title: '编辑分类',
                content: '../../../views/app/content/tagsform.html?id=' + data.id,
                area: ['450px', '200px'],
                btn: ['确定', '取消'],
                yes: function(index, layero) {
                    //获取iframe元素的值
                    var othis = layero.find('iframe').contents().find("#layuiadmin-app-form-tags"),
                        tags = othis.find('input[name="tags"]').val();

                    if (!tags.replace(/\s/g, '')) return;

                    obj.update({
                        tags: tags
                    });
                    layer.close(index);
                },
                success: function(layero, index) {
                    //给iframe元素赋值
                    var othis = layero.find('iframe').contents().find("#layuiadmin-app-form-tags").click();
                    othis.find('input[name="tags"]').val(data.tags);
                }
            });
        }
    });
    exports('contlist', {})
});