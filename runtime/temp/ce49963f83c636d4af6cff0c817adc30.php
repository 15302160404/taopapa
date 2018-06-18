<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\Bitnami\apache2\htdocs\taopapa\public/../application/extra\view\index\index.html";i:1529147696;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="cn">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- jqGrid组件基础样式包-必要 -->
        <link rel="stylesheet" href="/taopapa/public/static/jqgrid/jqgrid/css/ui.jqgrid.css" />
        
        <!-- jqGrid主题包-非必要 --> 
        <!-- 在jqgrid/css/css这个目录下还有其他的主题包，可以尝试更换看效果 -->
        <link rel="stylesheet" href="/taopapa/public/static/jqgrid/jqgrid/css/css/redmond/jquery-ui-1.8.16.custom.css" />

        <!-- jquery插件包-必要 -->
        <!-- 这个是所有jquery插件的基础，首先第一个引入 -->
        <script type="text/javascript" src="/taopapa/public/static/jqgrid/js/jquery-1.7.1.js"></script>
        
        <!-- jqGrid插件包-必要 -->
        <script type="text/javascript" src="/taopapa/public/static/jqgrid/jqgrid/js/jquery.jqGrid.src.js"></script>
        
        <!-- jqGrid插件的多语言包-非必要 -->
        <!-- 在jqgrid/js/i18n下还有其他的多语言包，可以尝试更换看效果 -->
        <script type="text/javascript" src="/taopapa/public/static/jqgrid/jqgrid/js/i18n/grid.locale-cn.js"></script>
        <title>http://blog.mn886.net/jqGrid</title>
        
        <!-- 本页面初始化用到的js包，创建jqGrid的代码就在里面 -->
        <!-- <script type="text/javascript" src="/taopapa/public/static/jqgrid/js/index.js"></script> -->
    </head>
    <body>
        <table id="list2"></table> 
        <div id="pager2"></div>
        <br>
        <div>  
      <button class="right-button02" onclick="openDialog4Adding()">添加</button>   
<button class="right-button02" onclick="openDialog4Updating()">修改</button>   
    <button class="right-button02" onclick="openDialog4Deleting()">删除</button>  
     
   </div>  
   <div id="consoleDlg">  
    <div id="formContainer">  
        <form id="consoleForm">  
            <input type="hidden" id="selectId" />  
            <table class="formTable">  
                <tr>  
                    <th>  
                        姓名：  
                    </th>  
                    <td>  
                        <input type="text" class="textField" id="ename"  
                            name="ename" />  
                    </td>  
                </tr>  
                <tr>  
                    <th id="thusergender">  
                        性  别：  
                    </th>  
                    <td>  
                        <input type="text" class="textField" id="esex"  
                            name="esex" />  
                    </td>  
                </tr>  
                <tr>  
                    <th>  
                        出生日期：  
                    </th>  
                    <td>  
                        <input type="text" class="textField" id="birthday"  
                            name="birthday" />  
                    </td>  
                </tr>  
                <tr>  
                    <th>  
                        部门：  
                    </th>  
                    <td>  
                        <input type="text" class="textField" id="department"  
                            name="department" />  
                    </td>  
                </tr>  
                <tr>  
                    <th>  
                        备注：  
                    </th>  
                    <td>  
                        <input type="text" class="textField" id="eremark"  
                            name="eremark" />  
                    </td>  
                </tr>  
            </table>  
        </form>  
    </div>  
</div>
        以上为创建jqGrid的简单例子。想了解全功能api，请移步<a href="http://blog.mn886.net/jqGrid">http://blog.mn886.net/jqGrid</a>
    </body>
</html>
<script type="text/javascript">


var openDialog4Adding = function() {    
        var consoleDlg = $("#consoleDlg");    
        var dialogButtonPanel = consoleDlg.siblings(".ui-dialog-buttonpane");    
        consoleDlg.find("input").removeAttr("disabled").val("");    
        dialogButtonPanel.find("button:not(:contains('取消'))").hide();    
        dialogButtonPanel.find("button:contains('添加')").show();    
        consoleDlg.dialog("option", "title", "添加员工信息 ").dialog("open");    
    };    
    var openDialog4Updating = function() {    
        var consoleDlg = $("#consoleDlg");    
        var dialogButtonPanel = consoleDlg.siblings(".ui-dialog-buttonpane");    
            
        consoleDlg.find("input").removeAttr("disabled");    
        dialogButtonPanel.find("button:not(:contains('取消'))").hide();    
        dialogButtonPanel.find("button:contains('保存')").show();    
        consoleDlg.dialog("option", "title", "修改员工信息");    
            
        loadSelectedRowData();    
    }    
    var openDialog4Deleting = function() {    
        var consoleDlg = $("#consoleDlg");    
        var dialogButtonPanel = consoleDlg.siblings(".ui-dialog-buttonpane");    
            
        consoleDlg.find("input").attr("disabled", true);    
        dialogButtonPanel.find("button:not(:contains('取消'))").hide();    
        dialogButtonPanel.find("button:contains('删除')").show();    
        consoleDlg.dialog("option", "title", "删除员工");    
            
        loadSelectedRowData();    
    }    
                    
     var loadSelectedRowData = function() {  
            var selectedRowId = $("#gridTable").jqGrid("getGridParam", "selrow");  
            if (!selectedRowId) {  
                hiAlert("请先选择需要编辑的行!");  
                return false;  
            } else {  
                var params = {  
                    "employee.eid" : selectedRowId  
                };  
                // 从Server读取对应ID的JSON数据  
                $.ajax( {  
                    url : "employee_find.action",  
                    data : params,  
                    dataType : "json",  
                    cache : false,  
                    error : function(textStatus, errorThrown) {  
                        hiAlert("系统ajax交互错误: " + textStatus);  
                    },  
                    success : function(data, textStatus) {  
                        // 如果读取结果成功，则将信息载入到对话框中                   
                      var rowData = data.person;    
                      var consoleDlg = $("#consoleDlg");    
                        
                      consoleDlg.find("#selectId").val(rowData.id);    
                      consoleDlg.find("#ename").val(rowData.ename);    
                      consoleDlg.find("#esex").val(rowData.esex);    
                      consoleDlg.find("#birthday").val(rowData.birthday);    
                      consoleDlg.find("#department").val(rowData.department);    
                      consoleDlg.find("#eremark").val(rowData.eremark);    
                    // 根据新载入的数据将表格中的对应数据行一并更新一下  
                     var  dataRow = {    
                                 id : data.employee.eid,   // 从Server端得到系统分配的id    
                                 ename :ename,    
                                 esex : esex,  
                                 birthday: birthday,  
                                 department: department,  
                                 eremark:eremark   
                             };  
          
                    $("#gridTable").jqGrid("setRowData", data.employee.eid, dataRow);  
          
                    // 打开对话框  
                    consoleDlg.dialog("open");  
                }  
                });  
          
            }  
        };              
  //数据更新   
   function updateEmployee() {   
                 var consoleDlg = $("#consoleDlg");        
                     
                 var eid = $.trim(consoleDlg.find("#selectId").val());    
                 var eanme = $.trim(consoleDlg.find("#eanme").val());    
                 var esex = $.trim(consoleDlg.find("#esex").val());    
                 var birthday = $.trim(consoleDlg.find("#birthday").val());   
                 var department = $.trim(consoleDlg.find("#department").val());   
                 var eremark = $.trim(consoleDlg.find("#eremark").val());      
                 var params = {    
                         "employee.eid" : eid,  
                         "employee.ename" : ename,    
                         "employee.esex" : esex,  
                         "employee.birthday" : birthday,    
                         "employee.department" : department,  
                         "employee.eremark" : eremark     
                 };    
                 var actionUrl = "employee_update.action";    
                 $.ajax( {    
                     url : actionUrl,    
                     data : params,    
                     dataType : "json",    
                     cache : false,    
                     error : function(textStatus, errorThrown) {    
                         alert("系统ajax交互错误: " + textStatus);    
                     },    
                     success : function(data, textStatus) {    
                         if (data.ajaxResult == "success") {    
                             var dataRow = {    
                                 id : data.employee.eid,   // 从Server端得到系统分配的id    
                                 ename :ename,    
                                 esex : esex,  
                                 birthday: birthday,  
                                 department: department,  
                                 eremark:eremark   
                             };    
                             alert("联系人信息更新成功!");    
                             consoleDlg.dialog("close");    
                             $("#gridTable").jqGrid("setRowData", data.employee.eid, dataRow);    
                         } else {    
                             alert("修改操作失败!");    
                         }    
                     }    
                 });    
            };  
          
var addEmployee = function() {    
    var consoleDlg = $("#consoleDlg");    
            
    var eanme = $.trim(consoleDlg.find("#eanme").val());    
    var esex = $.trim(consoleDlg.find("#esex").val());    
    var birthday = $.trim(consoleDlg.find("#birthday").val());   
    var department = $.trim(consoleDlg.find("#department").val());   
    var eremark = $.trim(consoleDlg.find("#eremark").val());    
        
    var params = {    
        "employee.ename" : ename,    
        "employee.esex" : esex,  
        "employee.birthday" : birthday,    
        "employee.department" : department,  
        "employee.eremark" : eremark     
    };    
        
     var actionUrl = "employee_add.action";  
        
    $.ajax( {    
        url : actionUrl,    
        data : params,    
        dataType : "json",    
        cache : false,    
        error : function(textStatus, errorThrown) {    
            alert("系统ajax交互错误: " + textStatus);    
        },    
        success : function(data, textStatus) {    
            if(data.ajaxResult == "success") {    
                var dataRow = {    
                   id : data.employee.eid,   // 从Server端得到系统分配的id    
                                 ename :ename,    
                                 esex : esex,  
                                 birthday: birthday,  
                                 department: department,  
                                 eremark:eremark   
                };    
                    
                var srcrowid = $("#gridTable").jqGrid("getGridParam", "selrow");    
                    
                if(srcrowid) {    
                    $("#gridTable").jqGrid("addRowData", data.employee.eid, dataRow, "before", srcrowid);  
                        
                } else {    
                    $("#gridTable").jqGrid("addRowData", data.employee.eid, dataRow, "first");    
                }    
                consoleDlg.dialog("close");    
                    
                alert("联系人添加操作成功!");    
                    
            } else {    
                alert("添加操作失败!");    
            }    
        }    
    });    
};    
  
//数据删除  
      var deleteEmployee = function() {    
            var consoleDlg = $("#consoleDlg");    
                
            var pId = $.trim(consoleDlg.find("#selectId").val());    
            var params = {    
                "employee.eid" : pId    
            };    
            var actionUrl = "employee_delete.action";    
            $.ajax({    
                url : actionUrl,    
                data : params,    
                dataType : "json",    
                cache : false,    
                error : function(textStatus, errorThrown) {    
                    alert("系统ajax交互错误: " + textStatus);    
                },    
                success : function(data, textStatus) {    
                    if (data.ajaxResult == "success") {    
                        $("#gridTable").jqGrid("delRowData", pId);    
                        consoleDlg.dialog("close");    
                        alert("联系人删除成功!");    
                    } else {    
                        alert("删除操作失败!");    
                    }    
                }    
            });    
        };
</script>
<script type="text/javascript">

$(function(){
    //页面加载完成之后执行
    pageInit();
    
});
function pageInit(){
    //创建jqGrid组件
    jQuery("#list2").jqGrid(
            {
                url : '<?php echo url("index/json"); ?>',//组件创建完成之后请求数据的url
                datatype : "json",//请求数据返回的类型。可选json,xml,txt
                colNames : [ 'Inv No', 'Date', 'Client', 'Amount', 'Tax','Total', 'Notes' ],//jqGrid的列显示名字
                colModel : [ //jqGrid每一列的配置信息。包括名字，索引，宽度,对齐方式.....
                             {name : 'id',index : 'id',width : 55}, 
                             {name : 'invdate',index : 'invdate',width : 90}, 
                             {name : 'name',index : 'name asc, invdate',width : 100}, 
                             {name : 'amount',index : 'amount',width : 80,align : "right"}, 
                             {name : 'tax',index : 'tax',width : 80,align : "right"}, 
                             {name : 'total',index : 'total',width : 80,align : "right"}, 
                             {name : 'note',index : 'note',width : 150,sortable : false} 
                           ],
                rowNum : 10,//一页显示多少条
                rowList : [ 10, 20, 30 ],//可供用户选择一页显示多少条
                pager : '#pager2',//表格页脚的占位符(一般是div)的id
                sortname : 'id',//初始化的时候排序的字段
                sortorder : "desc",//排序方式,可选desc,asc
                mtype : "post",//向后台请求数据的ajax的类型。可选post,get
                viewrecords : true,
                caption : "JSON Example"//表格的标题名字
            });
    /*创建jqGrid的操作按钮容器*/
    /*可以控制界面上增删改查的按钮是否显示*/
    jQuery("#list2").jqGrid('navGrid', '#pager2', {edit : true,add : true,del : true,position:'left',addfunc : openDialog4Adding,editfunc : openDialog4Updating,delfunc : openDialog4Deleting,alerttext : "请选择需要操作的数据行!"});
}
var openDialog4Adding = function() {    
    alert("add Demo");
};
var openDialog4Updating = function(){
    alert("update Demo");
}
var openDialog4Deleting = function(){
    alert("delete Demo");
}
</script>