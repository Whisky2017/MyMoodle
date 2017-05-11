
<style>
    .p1{
        float: left;
        width: 300px;
        height: 200px;
        background-color: #f27a52;
    }
    .p2{
        float: left;
        width: 300px;
        height: 200px;
        background-color:#ffb500;
    }
    .p3{
        float: left;
        width: 300px;
        height: 200px;
        background-color:#60b9ff;
    }
    .p4{
        float: left;
        width: 300px;
        height: 200px;
        background-color:#00aa00;
    }
</style>


<div class="p1" id="p1" >
    <img src="images/p1.png">
    <span>课程管理</span>
</div>
<div class="p2" id="p2">
    <img src="images/p2.png">
    <span>文件管理</span>
</div>
<div class="p3" id="p3">
    <img src="images/p3.png">
    <span>资源管理</span>
</div>
<div class="p4" id="p4">
    <img src="images/p4.png">
    <span>用户管理</span>
</div>
<script type="text/javascript">
    window.onload = function(){
        var obj1 = document.getElementById("p1");
        var obj2 = document.getElementById("p2");
        var obj3 = document.getElementById("p3");
        var obj4 = document.getElementById("p4");
        obj1.onclick = function(){
            window.location.href = "course/index.php";
        }
        obj2.onclick = function(){
            window.location.href = "user/files.php";
        }
        obj3.onclick = function(){
            window.location.href = "";
        }
        obj4.onclick = function(){
            window.location.href = "admin/category.php?category=users";
        }
    }
</script>
