<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../static/editor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="../static/js/upload.js"></script>

</head>
<body>
<form action="addConConCon.php">
    标题: <input type="text" name="title"><br>
    内容:  <script id="editor" type="text/plain" style="width:500px;height:300px;" name="con"></script>
    <input type="hidden" value="<?php echo $_GET['cid']?>" name="cid">
    <input type="hidden" name="imgurl">
     <div class="uploadbox"></div>
    <input type="submit" value="提交">
</form>
<script>
    var ue = UE.getEditor('editor');


        var obj = new upload();
        obj.size = 1024 * 1024 * 8.6;
        obj.selectBtnStyle.background = "red";
        obj.createView({
            parent: document.querySelector(".uploadbox")
    });
        obj.up("upload.php",function(data){
            document.querySelector("input[name=imgurl]").value=data;
        });

</script>
</body>
</html>