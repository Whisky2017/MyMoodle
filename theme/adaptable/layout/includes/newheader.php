<style>
    .demo {width: 100%;height: 450px;font-size: 14px;position:relative;}
    .demo a.control {position:absolute;display: block;top: 50%;margin-top: -78px;width: 76px;height: 112px;cursor: pointer;z-index: 2;background: url(images/buttons.png) no-repeat}
    .demo a.prev {left: 0;background-position: 0 0}
    .demo a.next {right: 0;background-position: -76px 0}
    .demo a.prev:hover {background-position: 0 -112px}
    .demo a.next:hover {background-position: -76px -112px}
    .slider {display: none}
</style>
<center>
    <div class="demo">
        <a class="control prev"></a><a class="control next abs"></a><!--自定义按钮，移动端可不写-->
        <div class="slider"><!--主体结构，请用此类名调用插件，此类名可自定义-->
            <ul>
                <li><a href=""><img src="" alt="图片一" /></a></li>
                <li><a href=""><img src="" alt="图片二" /></a></li>
                <li><a href=""><img src="" alt="图片三" /></a></li>
            </ul>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/YuxiSlider.jQuery.min.js"></script>
    <script>
        $(".slider").YuxiSlider({
            width:document.documentElement.clientWidth, //容器宽度
            height:450, //容器高度
            control:$('.control'), //绑定控制按钮
            during:4000, //间隔4秒自动滑动
            speed:800, //移动速度0.8秒
            mousewheel:false, //是否开启鼠标滚轮控制
            direkey:true //是否开启左右箭头方向控制
        });
    </script>
</center>